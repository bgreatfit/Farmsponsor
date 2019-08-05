<?php

namespace App\Http\Controllers;

use App\Models\Bankfunding;
use App\Models\Transactionlogs;
use App\Models\WithdrawalLog;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FundingController extends Controller
{
    const Charges = 256.5;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('pages.dashboard.vestbanking.create');
    }

    public function fund(Request $request)
    {
        $rules = [
            'firstname' => 'required | string',
            'lastname' => 'required | string',
            'email' => 'required | string',
            'address' => 'required | string',
            'amount' => 'required | integer',
        ];

        $this->validate($request, $rules);

        if(! $this->createBankFunding($request->except('_token'))){
            $request->session()->flash('error', 'Error Processing!');
            return redirect()->back();
        }

        $this->sponsorshipEmails(auth()->user());
        $request->session()->flash('success', 'Funding request registered, proceed to make payment!');
        return redirect()->route('dashboard');
    }

    public function createBankFunding(array $data)
    {
        $data['user_id'] = Auth::id();
        $bankfunding = Bankfunding::create($data);
        $this->logTransaction($bankfunding);
        return $bankfunding;
    }

    public function logTransaction($model)
    {
        // generates a 8digit transaction id for each transaction
        // then tests if a transaction already exist with the token
        // If it does, then it generates another transaction id
        do{
            $transactionId = $this->generateTransactionId();
        }while(Transactionlogs::whereTransactionId($transactionId)->first() != NULL);

        return  Transactionlogs::create([
            'user_id' => Auth::id(),
            'transaction_id' => $transactionId,
            'transactionable_id' => $model->id,
            'transactionable_type' => get_class($model),
        ]);
    }

    public function generateTransactionId()
    {
        return rand(10000000,99999999) . Str::random(2);
    }

    public function withdraw(Request $request)
    {
        $rules = [
            'option' => 'required | string',
        ];

        $this->validate($request, $rules);

        switch($request->option){
            case 'capital':
                return $this->withdrawFrom('capital');
                break;

            case 'interest':
                return $this->withdrawFrom('interest');
                break;

            case 'all':
                return $this->withdrawFrom('balance');
                break;

            case 'other':
                return $this->withdrawAmount($request);
                break;

            default:
                return redirect()->back();
                break;
        };
    }

    protected function withdrawFrom($field)
    {
        if (! $this->hasFundsIn($field)){
            request()->session()->flash('error', 'You do not have any funds in your '. $field . '\'s balance!');
            return redirect()->back();
        }
        if($this->processVestbankWithdrawalOf($field)){
            request()->session()->flash('success', 'Withdrawal successful! You will be contacted soon!');
            return redirect()->route('vestbanking');
        }

        request()->session()->flash('error', 'Cannot process your request at this time!');
        return redirect()->back();
    }

    protected function hasFundsIn(String $field)
    {
        return Auth::user()->vestbank->$field != 0 ? true : false ;
    }

    protected function processVestbankWithdrawalOf(String $field, $amount = NULL)
    {
        $charges = $this->getWithdrawalCharges();

        if($this->processChargesWithdrawal($charges)){

            $currentAmount = Auth::user()->fresh()->vestbank->$field;

            if(is_null($amount)){
                $amount = $currentAmount;
            }

            switch ($field){

                case 'balance':

                    Auth::user()->vestbank()->update([
                        'capital' => 0,
                        'interest' => 0,
                        'lock' => 1
                    ]);

                    return $this->logTransaction($this->logWithdrawalRequest($amount, $field, $charges));
                    break;

                case 'interest':

                    Auth::user()->vestbank()->update([
                        'interest' => 0,
                        'lock' => 1
                    ]);

                    return $this->logTransaction($this->logWithdrawalRequest($amount, $field, $charges));
                    break;

                case 'capital':

                    Auth::user()->vestbank()->update([
                        'capital' => 0,
                        'lock' => 1
                    ]);

                    return $this->logTransaction($this->logWithdrawalRequest($amount, $field, $charges));
                    break;
            }

        }

        return false;
    }

    protected function logWithdrawalRequest($amount, $field, $charges)
    {
        do{
            $transactionId = $this->generateTransactionId();
        }while(WithdrawalLog::whereTransactionId($transactionId)->first() != NULL);

        $data = [
            'user_id' => Auth::id(),
            'amount' =>$amount,
            'ip_address' => request()->ip(),
            'transaction_id' => $transactionId,
            'field' => $field,
            'charges' => $charges
        ];

        return WithdrawalLog::create($data);
    }

    protected function withdrawAmount(Request $request)
    {
        if(! $request->has('amount')  || $request->amount == 0){
            request()->session()->flash('error', 'Provide withdrawal amount!');
            return redirect()->back();
        }

        if($this->canWithdrawFrom('capital', $request->amount)){
            if($this->processVestbankWithdrawalOf('capital', $request->amount)) {
                request()->session()->flash('success', 'Transaction Successful');
                return redirect()->back();
            }
            request()->session()->flash('error', 'Transaction Not Successful!');
            return redirect()->back();
        }

        if($this->canWithdrawFrom('interest',$request->amount)){
            if($this->processVestbankWithdrawalOf('interest', $request->amount)) {
                request()->session()->flash('success', 'Transaction Successful');
                return redirect()->back();
            }

            request()->session()->flash('error', 'Transaction Not Successful!');
            return redirect()->back();
        }

        if($this->canWithdrawFrom('balance',$request->amount)){
            if($this->processVestbankWithdrawalOfAmountFromCapitalAndInterest($request->amount)){
                request()->session()->flash('success', 'Transaction Successful');
                return redirect()->back();
            };

            request()->session()->flash('error', 'Transaction Not Successful, Reduce Withdrawal Amount!');
            return redirect()->back();
        }

        request()->session()->flash('error', 'You do not have enough funds');
        return redirect()->back();
    }

    protected function processVestbankWithdrawalOfAmountFromCapitalAndInterest($amount)
    {
        $charges = $this->getWithdrawalCharges();
        $initialBalance = Auth::user()->vestbank->balance;
        $balanceAfterChargesAndAmountDeduction = $initialBalance - ($charges + $amount);

        if($balanceAfterChargesAndAmountDeduction >= 0){
            if($this->processChargesWithdrawal($charges)){

                $capital = Auth::user()->fresh()->vestbank->capital;
                $interest = Auth::user()->fresh()->vestbank->interest;

                $remainingAmount = $amount - $capital;
                $remainingBalance = $interest - $remainingAmount;

                Auth::user()->vestbank()->update([
                    'capital' => 0,
                    'interest' => $remainingBalance,
                    'lock' => 1
                ]);

                return $this->logTransaction($this->logWithdrawalRequest($amount, 'mixed', $charges));
            }
        }

        return false;
    }

    protected function canWithdrawFrom($field, $amount)
    {
        return (Auth::user()->vestbank->$field - $amount)  >= 0 ? true : false;
    }

    public function sponsorshipEmails(User $user)
    {

    }

    protected function getWithdrawalCharges()
    {
        return self::Charges + $this->getIncomeandVATTax();
    }

    protected function getIncomeandVATTax()
    {
        return Auth::user()->vestbank->interest * 0.12;
    }

    public function processChargesWithdrawal($charges)
    {
        if($this->hasFundsIn('interest') && $this->canWithdrawFrom('interest', $charges)){
            return Auth::user()->fresh()->vestbank()->decrement('interest', $charges);
        }

        if($this->hasFundsIn('capital') && $this->canWithdrawFrom('capital', $charges)){
            return Auth::user()->fresh()->vestbank()->decrement('capital', $charges);
        }

        return false;
    }

}

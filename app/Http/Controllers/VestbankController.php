<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Bankdeposit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Transactionlogs;
use App\Models\WithdrawalLog;
use App\Models\Vestbank;


class VestbankController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.dashboard.vestbanking.index');
    }

    public function showDepositPage()
    {
        return view('pages.dashboard.vestbanking.deposit');
    }

    public function deposit(Request $request)
    {
        $rules = [
            'firstname' => 'required | string',
            'lastname' => 'required | string',
            'email' => 'required | email',
            'address' => 'required | string',
            'amount' => 'required | integer',
        ];

        $this->validate($request, $rules);
        if(! $this->createBankDeposit($request->except('_token'))){
            $request->session()->flash('error', 'Error Processing!');
            return redirect()->back();
        }

        $request->session()->flash('success', 'Deposit registered, proceed to make payment!');
        return redirect()->route('dashboard');
    }

    public function createBankDeposit(array $data)
    {
        $data['user_id'] = Auth::id();
        $bankdeposit = Bankdeposit::create($data);
        $this->logTransaction($bankdeposit);
        return $bankdeposit;
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
                return $this->withdrawCapital();
            break;

            case 'interest':
                return $this->withdrawInterest();
            break;

            case 'all':
                return $this->withdrawAll();
            break;

            case 'other':
                return $this->withdrawAmount($request);
            break;

            default:
                return redirect()->back();
            break;
        };
    }

    protected function withdrawCapital()
    {
        if (! $this->hasFundsIn('capital')){
            request()->session()->flash('error', 'You do not have any funds in your capital balance!');
            return redirect()->back();
        }
        $this->processVestbankWithdrawalOf('capital');

        request()->session()->flash('success', 'Withdrawal successful! You will be contacted soon!');
        return redirect()->route('vestbanking');
    }

    protected function hasFundsIn(String $field)
    {
        return Auth::user()->vestbank->$field != 0 ? true : false ;
    }

    protected function processVestbankWithdrawalOf(String $field, $amount = NULL)
    {
        $currentAmount = Auth::user()->vestbank->$field;

        if(is_null($amount)){
            $amount = $currentAmount;
        }

        Auth::user()->vestbank()->update([
            $field => $currentAmount - $amount,
            'lock' => 1
        ]);

        return $this->logTransaction($this->logWithdrawalRequest($amount));
    }

    protected function logWithdrawalRequest($amount)
    {
        do{
            $transactionId = $this->generateTransactionId();
        }while(WithdrawalLog::whereTransactionId($transactionId)->first() != NULL);

        $data = [
            'user_id' => Auth::id(),
            'amount' =>$amount,
            'ip_address' => request()->ip(),
            'transaction_id' => $transactionId,
        ];

        return WithdrawalLog::create($data);
    }

    protected function withdrawInterest()
    {
        if (! $this->hasFundsIn('interest')){
            request()->session()->flash('error', 'You do not have any funds in your interest balance!');
            return redirect()->back();
        }
        $this->processVestbankWithdrawalOf('interest');

        request()->session()->flash('success', 'Withdrawal successful! You will be contacted soon!');
        return redirect()->route('vestbanking');
    }

    protected function withdrawAll()
    {
        if (! $this->hasFundsIn('capital') && ! $this->hasFundsIn('interest')){
            request()->session()->flash('error', 'You do not have any funds in your capital or interest balance!');
            return redirect()->back();
        }

        $this->processVestbankWithdrawalOfCapitalAndInterest();

        request()->session()->flash('success', 'Withdrawal successful! You will be contacted soon!');
        return redirect()->route('vestbanking');

    }

    protected function processVestbankWithdrawalOfCapitalAndInterest()
    {
        $amount = Auth::user()->vestbank->balance;
        Auth::user()->vestbank()->update([
            'capital' => 0,
            'interest' => 0,
            'lock' => 1
        ]);
        $vestBank = Vestbank::whereUserId(Auth::id())->first();
       ;
        return $this->logTransaction($this->logWithdrawalRequest($amount));
    }

    protected function withdrawAmount(Request $request)
    {
        if(! $request->has('amount')  || $request->amount == 0){
            request()->session()->flash('error', 'Provide withdrawal amount!');
            return redirect()->back();
        }

        if($this->balanceInCapitalUpto($request->amount)){
            $this->processVestbankWithdrawalOf('capital', $request->amount);
            request()->session()->flash('success', 'Transaction Successfull');
            return redirect()->back();
        }

        if($this->balanceInInterestUpto($request->amount)){
            $this->processVestbankWithdrawalOf('interest', $request->amount);
            request()->session()->flash('success', 'Transaction Successfull');
            return redirect()->back();
        }

        if($this->balanceInInterestandCapitalUpto($request->amount)){
            $this->processVestbankWithdrawalOfAmountFromCapitalAndInterest($request->amount);
            request()->session()->flash('success', 'Transaction Successfull');
            return redirect()->back();
        }

        request()->session()->flash('error', 'You do not have enough funds');
        return redirect()->back();
    }

    protected function processVestbankWithdrawalOfAmountFromCapitalAndInterest($amount)
    {
        $capital = Auth::user()->vestbank->capital;
        $interest = Auth::user()->vestbank->interest;

        $remainingAmount = $amount - $capital;
        $remainingBalance = $interest - $remainingAmount;

        Auth::user()->vestbank()->update([
            'capital' => 0,
            'interest' => $remainingBalance,
            'lock' => 1
        ]);

        return $this->logTransaction($this->logWithdrawalRequest($amount));
    }

    protected function balanceInCapitalUpto($amount)
    {
        return (Auth::user()->vestbank->capital - $amount)  >= 0 ? true : false;
    }

    protected function balanceInInterestUpto($amount)
    {
        return (Auth::user()->vestbank->interest - $amount)  >= 0 ? true : false;
    }

    protected function balanceInInterestandCapitalUpto($amount)
    {
        return (Auth::user()->vestbank->balance - $amount)  >= 0 ? true : false;
    }

}

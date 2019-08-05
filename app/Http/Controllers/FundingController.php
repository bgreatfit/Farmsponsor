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

    /**
     * FundingController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('pages.dashboard.vestbanking.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
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

    /**
     * @param array $data
     * @return mixed
     */
    public function createBankFunding(array $data)
    {
        $data['user_id'] = Auth::id();
        $bankfunding = Bankfunding::create($data);
        $this->logTransaction($bankfunding);
        return $bankfunding;
    }

    /**
     * @param $model
     * @return mixed
     */
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

    /**
     * @return string
     */
    public function generateTransactionId()
    {
        return rand(10000000,99999999) . Str::random(2);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
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

    /**
     * @param $field
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * @param String $field
     * @return bool
     */
    protected function hasFundsIn(String $field)
    {
        return Auth::user()->vestbank->$field != 0 ? true : false ;
    }

    /**
     * @param String $field
     * @param null $amount
     * @return bool|mixed
     */
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

    /**
     * @param $amount
     * @param $field
     * @param $charges
     * @return mixed
     */
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

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function withdrawAmount(Request $request)
    {
        if(! $request->has('amount')  || $request->amount == 0){
            request()->session()->flash('error', 'Provide withdrawal amount!');
            return redirect()->back();
        }

        if($this->canWithdrawFrom('capital', $request->amount)){
            if($this->processVestbankWithdrawalOfAmount('capital', $request->amount)) {
                request()->session()->flash('success', 'Transaction Successful');
                return redirect()->back();
            }

            request()->session()->flash('error', 'Transaction Not Successful!');
            return redirect()->back();
        }

        if($this->canWithdrawFrom('interest',$request->amount)){
            if($this->processVestbankWithdrawalOfAmount('interest', $request->amount)) {
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

            request()->session()->flash('error', 'Transaction Not Successful!, Reduce Withdrawal Amount!');
            return redirect()->back();
        }

        request()->session()->flash('error', 'You do not have enough funds');
        return redirect()->back();
    }

    /**
     * @param String $field
     * @param null $amount
     * @return bool|mixed
     */
    protected function processVestbankWithdrawalOfAmount(String $field, $amount)
    {
        $charges = $this->getWithdrawalCharges();
        $initialBalance = Auth::user()->fresh()->vestbank->$field;

        if($this->processChargesWithdrawal($charges)){

            switch ($field){

                case 'interest':
                    if($this->canWithdrawFrom('interest', $amount)){
                        Auth::user()->fresh()->vestbank()->decrement('interest', $amount);

                        return $this->logTransaction($this->logWithdrawalRequest($amount, $field, $charges));
                        break;
                    }
                  //if it cannot charge the amount after processing the charges, the charges is returned to the interest
                    Auth::user()->fresh()->vestbank()->increment('interest', $charges);

                    return false;
                    break;

                case 'capital':

                    if($this->canWithdrawFrom('capital', $amount)){
                        Auth::user()->fresh()->vestbank()->decrement('capital', $amount);

                        return $this->logTransaction($this->logWithdrawalRequest($amount, $field, $charges));
                        break;
                    }
                    //if it cannot charge the amount after processing the charges, the charges is returned to the interest
                    Auth::user()->fresh()->vestbank()->increment('interest', $charges);
                    
                    return false;
                    break;

            }

        }

        return false;
    }

    /**
     * @param $amount
     * @return mixed
     */
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

    /**
     * @param $field
     * @param $amount
     * @return bool
     */
    protected function canWithdrawFrom($field, $amount)
    {
        $currentBalance = Auth::user()->vestbank->$field;
        return ($currentBalance - $amount)  >= 0 ? true : false;
    }

    /**
     * @param User $user
     */
    public function sponsorshipEmails(User $user)
    {

    }

    /**
     * @return float
     */
    protected function getWithdrawalCharges()
    {
        return self::Charges + $this->getIncomeandVATTax();
    }

    /**
     * @return float
     */
    protected function getIncomeandVATTax()
    {
        return Auth::user()->fresh()->vestbank->interest * 0.12;
    }

    /**
     * @param $charges
     * @return bool
     */
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

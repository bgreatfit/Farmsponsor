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
    public function index()
    {
        return view('pages.dashboard.vestbanking.index');
    }

    public function vest()
    {

    }

    public function showDepositPage(){
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

            case 'others':
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

    protected function processVestbankWithdrawalOf(String $field)
    {
        $amount = Auth::user()->vestbank->$field;
        Auth::user()->vestbank()->update([
            $field => 0,
            'lock' => 1
        ]);
        $vestBank = Vestbank::whereUserId(Auth::id())->first();
        $this->logWithdrawalRequest($amount);
        return $this->logTransaction($vestBank);
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
}

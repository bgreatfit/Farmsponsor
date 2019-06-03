<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Bankdeposit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Transactionlogs;


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


    public function logTransaction(Bankdeposit $bankdeposit)
    {
        // generates a 8digit transaction id for each transaction
        // then tests if a transaction already exist with the token
        // If it does, then it generates another transaction id
        do{
            $transactionId = rand(10000000,99999999) . Str::random(2);
        }while(Transactionlogs::whereTransactionId($transactionId)->first() != NULL);

       return  Transactionlogs::create([
            'user_id' => Auth::id(),
            'transaction_id' => $transactionId,
            'transactionable_id' => $bankdeposit->id,
            'transactionable_type' => 'App\Models\Bankdeposit',
        ]);
    }
}

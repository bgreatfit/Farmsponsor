<?php

namespace App\Http\Controllers;

use App\Models\Bankfunding;
use App\Models\Transactionlogs;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FundingController extends Controller
{
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
            'amount' => 'required | integer',
        ];

        $this->validate($request, $rules);
        if(! $this->createBankFunding($request->except('_token'))){
            $request->session()->flash('error', 'Error Processing!');
            return redirect()->back();
        }

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
}

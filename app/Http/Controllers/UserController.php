<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use Auth;

class UserController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function seeProfile(){
        $data['states'] = State::all();
        return view('pages.dashboard.profile', $data);
    }

    public function update(Request $request)
    {
        $rules = [
            // 'bank_name' => 'required|string',
            // 'bank_account_number' => 'required|numeric',
        ];

        $this->validate($request, $rules);
       $user = Auth::user();

       $user->update($request->except(['_token', 'bank_name', 'bank_account_number']));
       $this->updateBankAccountDetails($user, $request->only(['bank_name', 'bank_account_number']));
       return redirect()->back();
    }

    public function updateBankAccountDetails($user, array $data){
        if(! $user->bank->update($data)){
            Session::flash('error', 'Can not update bank account details!');
            return redirect()->back();
        }
    }
}

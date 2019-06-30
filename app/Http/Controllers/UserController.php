<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use Auth;
use Session;

class UserController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function seeProfile()
    {
        $data['states'] = State::all();
        return view('pages.dashboard.profile', $data);
    }

    public function update(Request $request)
    {
        $rules = [
            'address' => 'string',
            'city' => 'string',
            'phone' => 'numeric',
            'bank_name' => 'required|string',
            'bank_account_number' => 'required|numeric',
            'bank_account_name' => 'required|string',
        ];

        $this->validate($request, $rules);

        $user = Auth::user();

       $user->update($request->except(['_token', 'bank_name', 'bank_account_number']));

       $bankDetails = [
           'name' => $request->bank_name,
           'account_name' => $request->bank_account_name,
           'account_number' => $request->bank_account_number,
           'last_update' => now()
       ];

       $this->updateBankAccountDetails(
                $user,
                $bankDetails
        );

        Session::flash('success', 'Profile Updated!');

        return redirect()->back();
    }

    public function updateBankAccountDetails($user, array $data)
    {
        if(! $user->bank()->update($data)){
            Session::flash('error', 'Can not update bank account details!');
            return redirect()->back();
        }
    }
}

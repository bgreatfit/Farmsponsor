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
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            // 'bank_name' => 'required|string',
            // 'bank_account_number' => 'required|numeric',
        ];

        $this->validate($request, $rules);
       $user = Auth::user();

       $user->update($request->except(['_token', 'bank_name', 'bank_account_number']));
       return $user;
       return redirect()->back();
    }
}

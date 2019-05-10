<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

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
}

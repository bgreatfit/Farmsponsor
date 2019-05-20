<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VestbankController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.vestbanking');
    }

    public function vest(){

    }
}

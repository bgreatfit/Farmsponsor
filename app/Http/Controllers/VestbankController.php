<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Bankfunding;
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
}

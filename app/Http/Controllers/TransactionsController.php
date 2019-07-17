<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Transactionlogs;

class TransactionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.dashboard.transaction.index');
    }

    public function history(){
        $data['transactionslog'] = Transactionlogs::whereUserId(Auth::id())->orderBy('created_at', 'desc')->paginate(10);
        return view('pages.dashboard.transaction.history', $data);
    }
}

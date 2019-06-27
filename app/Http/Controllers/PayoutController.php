<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Sponsor;

class PayoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['cyclesSponsored'] = Sponsor::whereUserId(Auth::id())->whereStatusId(2)->with('farmingcycle')->get();
        return view('pages.dashboard.payout', $data);
    }
}

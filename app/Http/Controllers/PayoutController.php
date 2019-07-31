<?php

namespace App\Http\Controllers;

use App\Models\BankSponsorship;
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
        $data['cyclesSponsored'] = collect();
        $sponsors = Sponsor::whereUserId(Auth::id())->whereStatusId(1)->with('farmingcycle')->get();
        $bankSponsors = BankSponsorship::whereUserId(Auth::id())->whereStatusId(1)->with('farmingcycle')->get();

        foreach ($sponsors as $sponsor)
            $data['cyclesSponsored']->push($sponsor);
        foreach ($bankSponsors as $bankSponsor)
            $data['cyclesSponsored']->push($bankSponsor);

        return view('pages.dashboard.payout', $data);
    }
}

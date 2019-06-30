<?php

namespace App\Http\Controllers;

use App\Models\BankSponsorship;
use App\Models\Farm;
use App\Models\Sponsor;
use App\Models\Transactionlogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BankSponsorshipController extends Controller
{
    public function sponsorNow(Farm $farm) {
        $data['farm'] = $farm;
        return view('pages.dashboard.sponsor-now', $data);
    }

    public function sponsor(Request $request)
    {

        $sponsor = new BankSponsorship();
        $sponsor->farm_id = $request->farm_id;
        $sponsor->units = $request->units;
        $sponsor->ip_address = request()->ip();
        $sponsor->user_id = Auth::id();
        $sponsor->save();

        $this->reduceRemainingFarmUnits($request);
        $this->logTransaction($sponsor);

        $request->session()->flash('success', 'Proceed to make payment!');
        return redirect()->back();
    }

    public function reduceRemainingFarmUnits(Request $request)
    {
        $farm = Farm::whereId($request->farm_id)->first();
        return $farm->decrement('units', $request->units);
    }

    public function logTransaction(BankSponsorship $sponsor)
    {
        // generates a 8digit transaction id for each transaction
        // then tests if a transaction already exist with the token
        // If it does, then it generates another transaction id
        do{
            $transactionId = rand(10000000,99999999) . Str::random(2);
        }while(Transactionlogs::whereTransactionId($transactionId)->first() != NULL);

        return  Transactionlogs::create([
            'user_id' => Auth::id(),
            'transaction_id' => $transactionId,
            'transactionable_id' => $sponsor->id,
            'transactionable_type' => get_class($sponsor),
        ]);
    }

    public function confirm(Request $request, BankSponsorship $sponsor)
    {
        $data['approve_user_id'] = \Auth::id();
        $data['approve_ip_address'] = request()->ip();
        $data['approved'] = 1;
        if($sponsor->update($data)){
            $request->session()->flash('success', 'Sponsorship Approved');
            return back();
        };
        $request->session()->flash('error', 'Something went wrong!');
        return back();
    }

    public function reverse(Request $request, BankSponsorship $sponsor)
    {
        $data['approve_user_id'] = null;
        $data['approve_ip_address'] = null;
        $data['approved'] = 0;
        if($sponsor->update($data)){
            $request->session()->flash('success', 'Sponsorship Reversed');
            return back();
        };
        $request->session()->flash('error', 'Something went wrong!');
        return back();
    }
}

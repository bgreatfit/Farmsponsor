<?php

namespace App\Http\Controllers\Admin;

use App\Models\BankSponsorship;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class BankSponsorshipController extends Controller
{

    public function confirm(Request $request, BankSponsorship $bankSponsor)
    {
        $data['approve_user_id'] = Auth::id();
        $data['approve_ip_address'] = request()->ip();
        $data['approved'] = 1;
        if($bankSponsor->update($data)){
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

    public function delete(BankSponsorship $sponsor)
    {
        $sponsor->farmingcycle()->increment('units', $sponsor->units);

        if($sponsor->delete() && $sponsor->transaction()->delete()){
            $this->request->session()->flash('success', 'Sponsorship Deleted');
            return back();
        };
        $this->request->session()->flash('error', 'Something went wrong!');
        return back();
    }

}

//            $sponsor = new Sponsor;
//            $sponsor->user_id = $bankSponsor->user_id;
//            $sponsor->farm_id = $bankSponsor->farm_id;
//            $sponsor->units = $bankSponsor->units;
//            $sponsor->ip_address = $bankSponsor->ip_address;
//            $sponsor->approved = 1;
//            $sponsor->approve_user_id = Auth::id();
//            $sponsor->approve_ip_address = request()->ip();
//            $sponsor->save();

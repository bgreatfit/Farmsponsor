<?php

namespace App\Http\Controllers\Admin;

use App\Mail\farmSponsorshipReciept;
use Auth;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;


class SponsorController extends Controller
{

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function confirm(Sponsor $sponsor)
    {
        $data['approve_user_id'] = Auth::id();
        $data['approve_ip_address'] = request()->ip();
        $data['approved'] = 1;
        if($sponsor->update($data)){

            Mail::to($sponsor->user->email)->send(new farmSponsorshipReciept($sponsor));
            $this->request->session()->flash('success', 'Sponsorship Approved');
            return back();
        };
        $this->request->session()->flash('error', 'Something went wrong!');
        return back();
    }

    public function reverse(Request $request, Sponsor $sponsor)
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

    public function delete(Sponsor $sponsor)
    {
        $sponsor->farmingcycle()->increment('units', $sponsor->units);

        $sponsor->user->vestbank()->increment('capital', $sponsor->units * 100000);

        if($sponsor->delete() && $sponsor->transaction()->delete()){
            $this->request->session()->flash('success', 'Sponsorship Deleted');
            return back();
        };
        $this->request->session()->flash('error', 'Something went wrong!');
        return back();
    }

}

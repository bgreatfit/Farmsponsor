<?php

namespace App\Http\Controllers\Admin;

use App\Mail\farmSponsorshipReciept;
use Auth;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
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

            $pdf = App::make('dompdf.wrapper');
            $fileName = public_path() . '/pdf/' . $sponsor->user->firstname . '_' . $sponsor->user->lastname . '_' . $sponsor->id . '_' . now() . '.pdf';
            $pdf->loadView('email.farm.sponsorshipReceipt', compact('sponsor'))->save($fileName);

            Mail::to($sponsor->user->email)->send(new farmSponsorshipReciept($sponsor, $fileName));
            Mail::to(env('ADMIN_MAIL'))->send(new farmSponsorshipReciept($sponsor, $fileName));

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

        if($sponsor->transaction()->delete()){
            $sponsor->delete();
            $this->request->session()->flash('success', 'Sponsorship Deleted');
            return back();
        };
        $this->request->session()->flash('error', 'Something went wrong!');
        return back();
    }

}

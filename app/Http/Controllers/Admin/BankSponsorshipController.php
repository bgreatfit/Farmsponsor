<?php

namespace App\Http\Controllers\Admin;

use App\Mail\farmSponsorshipReciept;
use App\Models\BankSponsorship;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Mail;

class BankSponsorshipController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function confirm(Request $request, BankSponsorship $bankSponsor)
    {
        $sponsor = $bankSponsor;
        $data['approve_user_id'] = Auth::id();
        $data['approve_ip_address'] = request()->ip();
        $data['approved'] = 1;
        if($bankSponsor->update($data)){

            $pdf = App::make('dompdf.wrapper');
            $fileName = public_path() . '/pdf/farm/bank/' . $sponsor->user->firstname . '_' . $sponsor->user->lastname . '_' . $sponsor->id . '_' . now() . '.pdf';
            $pdf->loadView('email.farm.pdf.sponsorshipReceipt', compact('sponsor'))->save($fileName);

            Mail::to($bankSponsor->user->email)->send(new farmSponsorshipReciept($bankSponsor, $fileName));
            Mail::to(env('ADMIN_MAIL'))->send(new farmSponsorshipReciept($bankSponsor, $fileName));

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

        if($sponsor->transaction()->delete()){
            $sponsor->delete();
            $this->request->session()->flash('success', 'Sponsorship Deleted');
            return back();
        };
        $this->request->session()->flash('error', 'Something went wrong!');
        return back();
    }

}


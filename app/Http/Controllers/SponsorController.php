<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Sponsor;
use App\Models\Farm;
use Illuminate\Http\Request;

class SponsorController extends Controller
{

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function confirm(Sponsor $sponsor)
    {
        // return $sponsor;
        $data['approve_user_id'] = Auth::id();
        $data['approve_ip_address'] = request()->ip();
        $data['approved'] = 1;
        if($sponsor->update($data)){
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function sponsor(Farm $farm)
    {
        return $this->request;
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsor $sponsor)
    {
        //
    }
}

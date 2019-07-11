<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\Bankfunding;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FundingController extends Controller
{
    public function index()
    {
        $data['unapproved_deposits'] = Bankfunding::whereApproved(0)->orderBy('created_at', 'desc')->paginate(10);
        $data['approved_deposits'] = Bankfunding::whereApproved(1)->orderBy('approved_time', 'desc')->paginate(10);
        return view('pages.admin.deposits', $data);
    }


    public function confirm(Request $request, Bankfunding $deposit)
    {
        $data['approve_user_id'] = Auth::id();
        $data['approve_ip_address'] = request()->ip();
        $data['approved_time'] = now();
        $data['approved'] = 1;

        if(! $deposit->update($data)){
            $request->session()->flash('error', 'Funds not reflected to user!');
            return redirect()->back();
        }

        $deposit->user->vestbank()->increment('capital', $deposit->amount);

        $request->session()->flash('success', 'Funds Confirmed!');
        return redirect()->back();
    }

    public function reverse(Request $request, Bankfunding $deposit)
    {
        $data['approve_user_id'] = null;
        $data['approve_ip_address'] = null;
        $data['approved_time'] = null;
        $data['approved'] = 0;

        if(! $deposit->update($data)){
            $request->session()->flash('error', 'Funds not reflected to user!');
            return redirect()->back();
        }

        $deposit->user->vestbank()->decrement('capital', $deposit->amount);

        $request->session()->flash('success', 'Funding Retracted!');
        return redirect()->back();
    }

    public function delete(Request $request, Bankfunding $funding)
    {
        if($funding->delete() && $funding->transaction->delete()){
            $request->session()->flash('success', 'Sponsorship Deleted');
            return back();
        };

        $request->session()->flash('error', 'Something went wrong!');
        return back();
    }
    // public function approveDeposit($deposit)
    // {
    //     return $deposit->update([
    //         'approved_user_id' => Auth::id(),
    //         'approved_ip_address' => request()->ip(),
    //         'approved_time' => now(),
    //     ]);
    // }
}

<?php

namespace App\Http\Controllers\Admin;

Use Auth;
use App\Models\Bankdeposit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepositController extends Controller
{
    public function index()
    {
        $data['unapproved_deposits'] = Bankdeposit::whereApproved(0)->orderBy('created_at', 'desc')->paginate(10);
        $data['approved_deposits'] = Bankdeposit::whereApproved(1)->orderBy('approved_time', 'desc')->paginate(10);
        return view('pages.admin.deposits', $data);
    }

    public function confirm(Request $request, Bankdeposit $deposit)
    {

        if(! $this->approveDeposit($deposit)){
            $request->session()->flash('error', 'Deposit not reflected to user!');
            return redirect()->back();
        }

        $deposit->user->vestbank()->increment('capital', $deposit->amount);

        $request->session()->flash('success', 'Deposit Confirmed!');
        return redirect()->back();
    }

    public function approveDeposit($deposit)
    {
        return $deposit->update([
            'approve_user_id' => Auth::id(),
            'approve_ip_address' => request()->ip(),
            'approved_time' => now(),
        ]);
    }
}

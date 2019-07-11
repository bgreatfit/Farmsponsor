<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sponsor;
use Auth;
use Illuminate\Http\Request;
use App\Models\WithdrawalLog;
use App\Http\Controllers\Controller;

class WithdrawalController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $data['approved_withdrawals'] = WithdrawalLog::where('approved_user_id', '!=', null)->orderBy('approved_time', 'desc')->paginate(10);
        $data['unapproved_withdrawals'] = WithdrawalLog::whereApprovedUserId(null)->orderBy('created_at', 'desc')->paginate(10);
        return view('pages.admin.withdrawals', $data);
    }

     public function confirm(WithdrawalLog $withdrawal)
    {
        if(! $this->approveWithdrawal($withdrawal)){
            request()->session()->flash('error', 'Withdrawal not reflected to user!');
            return redirect()->back();
        }

        request()->session()->flash('success', 'Withdrawal Confirmed!');
        return redirect()->back();
    }

    public function approveWithdrawal($withdrawal)
    {
        return $withdrawal->update([
            'approved_user_id' => Auth::id(),
            'approved_ip_address' => request()->ip(),
            'approved_time' => now(),
        ]);
    }

    public function reverse(WithdrawalLog $withdrawal)
    {
        $data['approved_user_id'] = null;
        $data['approved_ip_address'] = null;
        $data['approved_time'] = null;
        if($withdrawal->update($data)){
            $this->request->session()->flash('success', 'Withdrawal Reversed');
            return back();
        };
        $this->request->session()->flash('error', 'Something went wrong!');
        return back();
    }

    public function delete(WithdrawalLog $withdrawal)
    {
        if($withdrawal->delete()){
            $this->request->session()->flash('success', 'Sponsorship Deleted');
            return back();
        };

        $this->request->session()->flash('error', 'Something went wrong!');
        return back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Models\WithdrawalLog;
use App\Http\Controllers\Controller;

class WithdrawalController extends Controller
{
    public function index()
    {
        $data['withdrawals'] = WithdrawalLog::whereApprovedUserId(null)->paginate(10);
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
}

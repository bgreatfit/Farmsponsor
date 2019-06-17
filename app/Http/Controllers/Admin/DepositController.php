<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bankdeposit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepositController extends Controller
{
    public function index()
    {
        $data['deposits'] = Bankdeposit::whereApproved(0)->orderBy('created_at', 'desc')->paginate(10);
        return view('pages.admin.deposits', $data);
    }

    public function confirm(Request $request, Bankdeposit $deposit)
    {
        if(! $deposit->user->vestbank()->increment('capital', $deposit->amount)){
            $request->session()->flash('error', 'Deposit not reflected to user!');
            return redirect()->back();
        }

        $deposit->increment('approved');

        $request->session()->flash('success', 'Deposit Confirmed!');
        return redirect()->back();
    }
}

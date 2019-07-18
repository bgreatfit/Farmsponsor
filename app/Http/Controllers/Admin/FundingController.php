<?php

namespace App\Http\Controllers\Admin;

use App\Mail\accountFundingReceipt;
use App\Models\BankSponsorship;
use App\Models\Farm;
use App\Models\Sponsor;
use Auth;
use App\Models\Bankfunding;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class FundingController extends Controller
{

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


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

        Mail::to($deposit->user->email)->send(new accountFundingReceipt($deposit));
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

    public function searchByName()
    {

        $data['unapproved_deposits'] = Bankfunding::whereApproved(0)->whereHas('user', function($query){
            $query->where('firstname', 'LIKE', "%{$this->request->value}%")->orwhere('lastname', 'LIKE', "%{$this->request->value}%");
        })->orderBy('created_at', 'desc')->paginate(10);

        $data['approved_deposits'] = Bankfunding::whereApproved(0)->whereHas('user', function($query){
            $query->where('firstname', 'LIKE', "%{$this->request->value}%")->orwhere('lastname', 'LIKE', "%{$this->request->value}%");
        })->orderBy('created_at', 'desc')->paginate(10);

        $data['searchNameValue'] = $this->request->value;

        return view('pages.admin.deposits', $data);
    }

    public function searchByTransactionId()
    {
        $data['farm'] = Farm::findOrFail($this->request->farm_id);

        $data['approved_vestbank_sponsors'] = Sponsor::whereFarmId($data['farm']->id)->whereApproved(1)->whereHas('transactions', function($query){
            $query->where('transaction_id', '=', $this->request->value);
        })->orderBy('created_at', 'desc')->paginate(10);

        $data['unapproved_vestbank_sponsors'] = Sponsor::whereFarmId($data['farm']->id)->whereApproved(0)->whereHas('transactions', function($query){
            $query->where('transaction_id', '=', $this->request->value);
        })->orderBy('created_at', 'desc')->paginate(10);

        $data['approved_sponsors'] = BankSponsorship::whereFarmId($data['farm']->id)->whereApproved(1)->whereHas('transactions', function($query){
            $query->where('transaction_id', '=', $this->request->value);
        })->orderBy('created_at', 'desc')->paginate(10);

        $data['unapproved_sponsors'] = BankSponsorship::whereFarmId($data['farm']->id)->whereApproved(0)->whereHas('transactions', function($query){
            $query->where('transaction_id', '=', $this->request->value);
        })->orderBy('created_at', 'desc')->paginate(10);

        $data['transactionSearchValue'] = $this->request->value;

        return view('pages.admin.farm.show', $data);
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

<?php

namespace App\Http\Controllers;

use App\Models\BankSponsorship;
use Auth;
use App\Models\Farm;
use App\Models\Sponsor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Transactionlogs;

class FarmController extends Controller
{
    protected $request;
    protected $farm;
    protected $amountPerUnit;

    public function __construct(Request $request, Farm $farm)
    {
        $this->request = $request;
        $this->farm = $farm;
        $this->amountPerUnit = 100000;
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['farms'] = $this->farm->orderBy('created_at', 'desc')->paginate(10);
        if($data['farms']->count() == 0){
            $this->request->session()->flash('info', 'No farm list available');
            return back();
        };
        return view('farm.index', $data);
    }

    public function dashboardFarmlist()
    {
        $data['farms'] = $this->farm->orderBy('created_at', 'desc')->paginate(10);

        if($data['farms']->count() == 0){
            $this->request->session()->flash('info', 'No farm list available');
            return back();
         }
        return view('pages.dashboard.farm.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farms  $farms
     * @return \Illuminate\Http\Response
     */
    public function show(Farm $farm)
    {
        $data['farm'] = $farm;
        return view('farm.show', $data);
    }

    public function sponsor(Farm $farm)
    {
        $this->validate($this->request, [
            'unit' => 'integer | required'
        ]);

        if(! $this->hasFundsToSponsorRequestedUnits($this->request->unit)){
            $this->request->session()->flash('error', 'You do not have enough funds to sponsor farm cycle, please add some funds to vest bank and try again.');
            return back();
        }

        if(! $this->isRequestedUnitsAvailable($farm->units, $this->request->unit)){
            $this->request->session()->flash('error', 'Your requested units exceeds remaining farm unit');
            return back();
        }

        $this->deductSponsoredAmountFromUsersVestBank($this->request->unit);

        $sponsor = new Sponsor;
        $sponsor->farm_id = $farm->id;
        $sponsor->units = $this->request->unit;
        $sponsor->ip_address = request()->ip();
        $sponsor->user_id = Auth::id();
        $sponsor->save();

        $this->reduceRemainingFarmUnits($farm, $this->request);
        $this->logTransaction($sponsor);

        $this->request->session()->flash('success', 'Farm Sponsored');
        return redirect()->back();
    }

    private function deductSponsoredAmountFromUsersVestBank($units)
    {
        $value = $units * $this->amountPerUnit;
        return Auth::user()->vestbank->decrement('capital', $value);
    }

    private function reduceRemainingFarmUnits(Farm $farm, Request $request)
    {
        return $farm->decrement('units', $request->unit);
    }

    public function hasFundsToSponsorRequestedUnits($farmUnitsRequested)
    {
        $amountNeededToSponsor = $farmUnitsRequested * $this->amountPerUnit;
        return Auth::user()->vestbank->balance >= $amountNeededToSponsor ? true : false;
    }

    public function logTransaction(Sponsor $sponsor)
    {
        // generates a 8digit transaction id for each transaction
        // then tests if a transaction already exist with the token
        // If it does, then it generates another transaction id
        do{
            $transactionId = rand(10000000,99999999) . Str::random(2);
        }while(Transactionlogs::whereTransactionId($transactionId)->first() != NULL);

       return  Transactionlogs::create([
            'user_id' => Auth::id(),
            'transaction_id' => $transactionId,
            'transactionable_id' => $sponsor->id,
            'transactionable_type' => 'App\Models\Sponsor',
        ]);
    }

    public function isRequestedUnitsAvailable($farmUnitsRemaining, $unitsNeeded)
    {
        return $unitsNeeded <= $farmUnitsRemaining ? true : false;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Farms  $farms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farms $farms)
    {
        //
    }

    public function stoppayout($farm)
    {
        $farm = Farm::findOrFail($farm);
        $farm->decrement('payout');
        $farm->decrement('status_id');

        Sponsor::whereApproved(1)->whereFarmId($farm->id)->decrement('status_id');

        return redirect()->back();
    }

    public function payout($farm)
    {
        $farm = Farm::findOrFail($farm);
        $farm->increment('payout');
        $farm->increment('status_id');
        $sponsors = Sponsor::whereApproved(1)->whereFarmId($farm->id)->increment('status_id');
        return redirect()->back();
    }

    public function open($farm)
    {
        $farm = Farm::findOrFail($farm)->decrement('sold_out');
        return redirect()->back();
    }
}

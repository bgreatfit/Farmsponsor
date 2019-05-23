<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Farm;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    protected $request;
    protected $farm;
    protected $amountPerUnit;

    public function __construct(Request $request, Farm $farm){
        $this->request = $request;
        $this->farm = $farm;
        $this->amountPerUnit = 100000;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['farms'] = $this->farm->all();
        if($data['farms']->count() == 0){
            $this->equest->session()->flash('info', 'No farm list available');
            return back();
        };
        return view('pages.farms.index', $data);
    }

    public function dashboardFarmlist()
    {
        $data['farms'] = $this->farm->all();
        if($data['farms']->count() == 0){
            $this->request->session()->flash('info', 'No farm list available');
            return back();
         }
        return view('pages.farms.dashboardfarmlist', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.farms.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $rules = [
            'name' => 'string | required',
            'start_date' => 'date | required',
            'due_date' => 'date | required',
            'units' => 'integer | required',
            'returns' => 'integer | required',
            'avatar' => 'image | required'
        ];

        $this->validate($this->request, $rules);
        // Image Upload
        $image = $this->request->file('avatar');
        $imageName = str_slug($this->request->name) . '.' . time() . '.' . $image->getClientOriginalExtension();
        $this->request->avatar->storeAs('public/farms', $imageName);

        $dataToStore = $this->request->except('_token');
        $dataToStore['user_id'] = Auth::id();
        $dataToStore['start_unit'] = $this->request->units;
        $dataToStore['ip_address'] = request()->ip();
        $dataToStore['avatar'] = $imageName;
        $dataToStore['slug'] = str_slug($this->request->name);

        $this->farm->create($dataToStore);
        $this->request->session()->flash('success', 'Farm Cycle Created');
        return redirect()->route('farms.all');
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
        return view('pages.farms.show', $data);
    }


    public function sponsor(Farm $farm)
    {
        $this->validate($this->request, [
            'unit' => 'integer | required'
        ]);

        if(! $this->hasFundsToSponsorRequestedUnits($this->request->unit)){
            $this->request->session()->flash('error', 'You do not have enough funds to sponsor farm cycle, please deposit some funds into your ves bank and try again.');
            return back();
        }

        if(! $this->isRequestedUnitsAvailable($farm->units, $this->request->unit)){
            $this->request->session()->flash('error', 'Your requested units exceeds remaining farm unit');
            return back();
        }

        $sponsor = new Sponsor;
        $sponsor->farm_id = $farm->id;
        $sponsor->units = $this->request->unit;
        $sponsor->ip_address = request()->ip();
        $sponsor->user_id = Auth::id();
        $sponsor->save();

        $this->deductSponsoredAmountFromUserVestBank($this->request->unit);
        $this->reduceRemainingFarmUnits($farm, $this->request);

        $this->request->session()->flash('success', 'Farm Sponsored');
        return redirect()->route('farms.all');
    }

    private function deductSponsoredAmountFromUserVestBank($units){
        $value = $units * $this->amountPerUnit;
        return Auth::user()->vestbank->decrement('balance', $value);
    }

    private function reduceRemainingFarmUnits(Farm $farm, Request $request){
        return $farm->decrement('units', $request->unit);
    }

     public function hasFundsToSponsorRequestedUnits($farmUnitsRequested)
    {
        $amountNeededToSponsor = $farmUnitsRequested * $this->amountPerUnit;
        return Auth::user()->vestbank->balance >= $amountNeededToSponsor ? true : false;
    }

    public function isRequestedUnitsAvailable($farmUnitsRemaining, $unitsNeeded)
    {
        return $unitsNeeded <= $farmUnitsRemaining ? true : false;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Farms  $farms
     * @return \Illuminate\Http\Response
     */
    public function edit(Farms $farms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Farms  $farms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farms $farms)
    {
        //
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
}

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
    public function __construct(Request $request, Farm $farm){
        $this->request = $request;
        $this->farm = $farm;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['farms'] = $this->farm->all();
        return view('pages.farms.index', $data);
    }

    public function dashboardFarmlist()
    {
        $data['farms'] = $this->farm->all();
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
            'unit' => 'string | required'
        ]);

        $this->hasFundsToSponsorRequestedUnits($this->request);

        if(! $this->isRequestedUnitsAvailable($farm->units, $this->request->unit)){
            $this->request->session()->flash('error', 'Your units exceeds remaining farm unit');
            return back();
        }

        $sponsor = new Sponsor;
        $sponsor->farm_id = $farm->id;
        $sponsor->units = $this->request->unit;
        $sponsor->ip_address = request()->ip();
        $sponsor->user_id = Auth::id();
        $sponsor->save();

        $this->request->session()->flash('success', 'Farm Sponsored');
        return redirect()->route('farms.all');
    }

    public function isRequestedsUnitsAvailable($farmUnitsRemaining, $unitsNeeded)
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

<?php

namespace App\Http\Controllers\Admin;

use App\Models\BankSponsorship;
use App\Models\Farm;
use App\Models\Sponsor;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


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

    public function index(){
        $data['farms'] = Farm::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.admin.farm.cycles', $data);
    }
    public function create()
    {
        return view('pages.admin.farm.add');
    }

    public function store()
    {
        $rules = [
            'name' => 'string | required',
            'start_date' => 'date | required',
            'due_date' => 'date | required',
            'cycle_start_date' => 'date | required',
            'cycle_end_date' => 'date | required',
            'payout_date' => 'date | required',
            'units' => 'integer | required',
            'returns' => 'integer | required',
            'avatar' => 'image | required'
        ];

        $this->validate($this->request, $rules);
        // Image Upload
        $image = $this->request->file('avatar');
        $imageName = Str::slug($this->request->name) . '.' . time() . '.' . $image->getClientOriginalExtension();
        $this->request->avatar->storeAs('public/farms', $imageName);

        $dataToStore = $this->request->except('_token');
        $dataToStore['user_id'] = Auth::id();
        $dataToStore['ip_address'] = request()->ip();
        $dataToStore['start_unit'] = $this->request->units;
        $dataToStore['avatar'] = $imageName;
        $dataToStore['slug'] = Str::slug($this->request->name);

        $this->farm->create($dataToStore);
        $this->request->session()->flash('success', 'Farm Cycle Created');
        return redirect()->route('admin.farmcycles');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Farms  $farms
     * @return \Illuminate\Http\Response
     */
    public function edit($farm)
    {
        $data['farm'] = Farm::findOrFail($farm);

        return view('pages.admin.farm.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Farms  $farms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $farms)
    {
        $farm = Farm::find($farms);

        $attributes = $request->except('_token');

        if(array_key_exists('avatar', $attributes)){
            // Image Upload
            $image = $this->request->file('avatar');
            $imageName = Str::slug($this->request->name) . '.' . time() . '.' . $image->getClientOriginalExtension();
            $this->request->avatar->storeAs('public/farms', $imageName);

            $attributes['avatar'] = $imageName;
        }

        $farm->update($attributes);

        return redirect()->route('admin.farmcycles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farms  $farms
     * @return \Illuminate\Http\Response
     */
    public function show($farm)
    {
        $data['farm'] = Farm::findOrFail($farm);
        $data['approved_vestbank_sponsors'] = Sponsor::whereFarmId($data['farm']->id)->whereApproved(1)->orderBy('created_at', 'desc')->paginate(10);
        $data['unapproved_vestbank_sponsors'] = Sponsor::whereFarmId($data['farm']->id)->whereApproved(0)->orderBy('created_at', 'desc')->paginate(10);
        $data['approved_sponsors'] = BankSponsorship::whereFarmId($data['farm']->id)->whereApproved(1)->orderBy('created_at', 'desc')->paginate(10);
        $data['unapproved_sponsors'] = BankSponsorship::whereFarmId($data['farm']->id)->whereApproved(0)->orderBy('created_at', 'desc')->paginate(10);
        return view('pages.admin.farm.show', $data);
    }

    public function soldout($farm)
    {
        Farm::findOrFail($farm)->increment('sold_out');
        return redirect()->back();
    }
}

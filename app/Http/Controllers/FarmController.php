<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use Auth;
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
        $data = [];
        // $data['farms'] = Farms::all();
        return view('pages.farmlist', $data);
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
            'start_date' => 'string | required',
            'due_date' => 'string | required',
            'units' => 'integer | required',
            'returns' => 'integer | required',
        ];

        $this->validate($this->request, $rules);
        // Image Upload
        $image = $this->request->file('avatar');
        $imageName = str_slug($this->request->name) . '.' . time() . '.' . $image->getClientOriginalExtension();
        // $request->avatarobject->storeAs('public/farms', $imageName);

        $dataToStore = $this->request->except('_token');
        $dataToStore['user_id'] = Auth::id();
        $dataToStore['ip_address'] = request()->ip();
        $dataToStore['avatar'] = $imageName;

        $this->farm->create($dataToStore);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farms  $farms
     * @return \Illuminate\Http\Response
     */
    public function show(Farms $farms)
    {
        //
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

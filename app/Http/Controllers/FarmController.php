<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use Illuminate\Http\Request;

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

}

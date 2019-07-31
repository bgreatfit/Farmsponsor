<?php

namespace App\Http\Controllers;

use App\Models\BankSponsorship;
use App\Models\Sponsor;
use App\Models\RetainSponsorship;
use Illuminate\Http\Request;


class RetainSponsorshipController extends Controller
{

    protected $model;

    /**
     * RetainSponsorshipController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function retain($id, $type)
    {
//        return func_get_args();

        switch ($type){

            case 'App\\Models\\Sponsor':
                $this->model = Sponsor::find($id);
                break;

            case 'App\\Models\\BankSponsorship':
                $this->model = BankSponsorship::find($id);
                break;
        }

        if($this->model === null){
            return redirect()->back();
        }

        $retainer = RetainSponsorship::create([
            'user_id' => $this->model->user_id,
            'farm_id' => $this->model->farm_id,
            'farmable_id' => $this->model->id,
            'farmable_type' => $type,
            'units'   => $this->model->units
        ]);

        $this->model->retain()->save($retainer);

        return redirect()->back();
    }

//    public function sponsor()
//    {
//        $sponsor = new Sponsor;
//        $sponsor->farm_id = $farm->id;
//        $sponsor->units = $this->request->unit;
//        $sponsor->ip_address = request()->ip();
//        $sponsor->user_id = Auth::id();
//        $sponsor->save();
//
//        $this->reduceRemainingFarmUnits($farm, $this->request);
//        $this->logTransaction($sponsor);
//
//    }

}

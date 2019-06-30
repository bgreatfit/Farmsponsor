<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use App\Models\RetainSponsorship;
use Illuminate\Http\Request;

class RetainSponsorshipController extends Controller
{

    /**
     * RetainSponsorshipController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function retain(Sponsor $cycleid)
    {

        RetainSponsorship::create([
            'user_id' => $cycleid->user_id,
            'farm_id' => $cycleid->farm_id,
            'sponsor_id' => $cycleid->id,
            'units'   => $cycleid->units

        ]);

        return redirect()->back();
    }

    public function sponsor()
    {
        $sponsor = new Sponsor;
        $sponsor->farm_id = $farm->id;
        $sponsor->units = $this->request->unit;
        $sponsor->ip_address = request()->ip();
        $sponsor->user_id = Auth::id();
        $sponsor->save();

        $this->reduceRemainingFarmUnits($farm, $this->request);
        $this->logTransaction($sponsor);

    }

}

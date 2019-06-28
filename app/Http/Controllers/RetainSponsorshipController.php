<?php

namespace App\Http\Controllers;

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

    public function retain()
    {
        
    }

}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function farmcycle(){
        return view('pages.admin.farm.cycles');
    }
}

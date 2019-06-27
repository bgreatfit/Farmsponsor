<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Farm;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function farmcycle(){
        $data['farms'] = Farm::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.admin.farm.cycles', $data);
    }
}

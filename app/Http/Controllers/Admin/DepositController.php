<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Bankdeposit;
use App\Http\Controllers\Controller;

class DepositController extends Controller
{
    public function index(){
        $data['deposits'] = Bankdeposit::paginate(10);
        return view('pages.admin.deposits', $data);
    }
}

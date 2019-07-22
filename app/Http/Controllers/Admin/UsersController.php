<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index(){
        $data['users'] = User::paginate(15);
        return view('pages.admin.users.index', $data);
    }
}

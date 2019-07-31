<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    protected $request;

    public function __construct(Request $request)
    {
        $this->request =  $request;
    }

    public function index(){
        $data['users'] = User::paginate(15);
        return view('pages.admin.users.index', $data);
    }

    public function searchByName()
    {
        $data['users'] = User::where('firstname', 'LIKE', "%{$this->request->value}%")
                                ->orwhere('lastname', 'LIKE', "%{$this->request->value}%")
                                ->orderBy('created_at', 'desc')
                                ->paginate(15);

        $data['searchValue'] = $this->request->value;

        return view('pages.admin.users.index', $data);
    }
}

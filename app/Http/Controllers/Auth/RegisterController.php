<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\Vestbank;
use App\Models\Bank;
use App\Models\Registerlog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        if($user){
            $this->createVestBankAccountFor($user);
            $this->createBankAccountDetailsFor($user);
            $this->logRegistration($user);
        };

        return $user;
    }

    protected function createVestbankAccountFor(User $user)
    {
        Vestbank::create([
            'user_id' => $user->id
        ]);
    }

    protected function createBankAccountDetailsFor(User $user)
    {
        Bank::create([
            'user_id' => $user->id,
            'last_update' => \Carbon\Carbon::now(),
        ]);
    }

    protected function logRegistration(User $user)
    {
         Registerlog::create([
            'user_id' => $user->id,
            'ip_address' => request()->ip()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Auth;
use Str;
use App\User;
use App\Models\UserTokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Notifications\UserRegisteredSuccessfully;


class MigrateUsersFromWordpressController extends Controller
{
    public function sendmails()
    {
        $emails = collect(['keamc0090@gmail.com',
    'ifadajessica@gmail.com',
    'abbygbadegesin@gmail.com',
    'davisuyanne2002@yahoo.co.uk',
    'agholorangelai@gmail.com',
    'adedejiiretomiwa@gmail.com',
    'bbanigbe@gmail.com',
    'fumbie40@gmail.com',
    'seyejoseph@gmail.com',
    'fbidowu@student.lautech.edu.ng',
    'demola.adelekan@gmail.com',
    'otsedanesi@gmail.com',
    'bob.ononuju@gmail.com',]);

        $emails->each(function($email){
            $user = User::create([
                'firstname' => 'Elisha',
                'lastname' => 'Ukpong',
                'email' => $email
            ]);

            do{
                $token = str_shuffle('abqwertyuioplkjhgfdsa13425678u1234567890');
            }while(UserTokens::whereToken($token)->first() != NULL);

            UserTokens::create([
                'email' =>$email,
                'token' => $token,
                'status' => 'pending',
            ]);

            $user->notify(new UserRegisteredSuccessfully($user, $token, $email));
        });

    }


    public function resetPassword($email, $token)
    {
        $data['usertoken'] = UserTokens::whereEmail($email)->whereToken($token)->first();

        if(!$data['usertoken']){
            abort(403, 'Incorrect Token or Email.');
        }
        return view('pages.user_migration.index', $data);
    }

    public function processreset(Request $request, $token)
    {
        $this->validate($request, [
            'password' => ['required', 'string', 'min:6', 'confirmed']
        ]);

        $userToken = UserTokens::whereToken($token)->first();
        $user = User::whereEmail($userToken->email)->first();
        if($user->update([
            'password' => Hash::make($request->password)
        ])){
            return redirect()->route('login');
        };

        return redirect()->back();

    }

      /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login($email, $password)
    {
        if (\Auth::attempt([
            'email' => $email,
            'password' => $password
        ])) {
            return redirect()->intended(route('dashboard'));
        }
        return back()->withInput(request()->only('email', 'remember'));
    }
}

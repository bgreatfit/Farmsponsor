<?php

namespace App\Http\Controllers;

use App\Notifications\PasswordResetSuccessful;
use Auth;
use Str;
use App\User;
use App\Models\UserTokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Notifications\ResetPassword;


class MigrateUsersFromWordpressController extends Controller
{
    public function sendmails()
    {
        $emails = collect([
            'ishukpong418@gmail.com',
//            'dannithomx@gmail.com',
//            'chykedee@gmail.com'
        ]);

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

            $user->notify(new ResetPassword($user, $token, $email));
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
            $user->notify(new PasswordResetSuccessful);
            $userToken->delete();
            $request->session()->flash('success', 'Password Updated!');
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
            return redirect()->intended(url('/profile'));
        }
        return back()->withInput(request()->only('email', 'remember'));
    }
}

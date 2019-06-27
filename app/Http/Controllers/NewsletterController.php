<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use Session;

class NewsletterController extends Controller
{

    public function subscribe(Request $request)
    {
        $this->validate($request, $this->rules());

       if(Newsletter::isSubscribed($request->email)){
            Session::flash('error', 'Email Already Subscribed!');
            return redirect()->back();
        }

        if(!Newsletter::subscribe($request->email)){
            Session::flash('error',  Newsletter::getLastError());
            return 5;//redirect()->back();
        }

        Session::flash('success', 'Email Subscribed!');

        return redirect()->back();
    }

    public function rules()
    {
        return [
            'email' => 'required'
        ];
    }

    public function addToNewsletterBy($email)
    {
        if(!Newsletter::subscribe($email)){
            Session::flash('error',  Newsletter::getLastError());
            return redirect()->back();
        }
    }

}

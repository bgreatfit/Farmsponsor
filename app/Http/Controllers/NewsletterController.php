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
        $this->checkIfAlreadySubscribedBy($request->email);
        $this->addToNewsletterBy($request->email);

        Session::flash('success', 'Email Subscribed!');
        return redirect()->back();
    }

    public function rules()
    {
        return [
            'email' => 'required'
        ];
    }

    public function checkIfAlreadySubscribedBy($email)
    {
        if(Newsletter::isSubscribed($email)){
            Session::flash('error', 'Email Already Subscribed!');
            return redirect()->back();
        }
    }

    public function addToNewsletterBy($email)
    {
        if(!Newsletter::subscribe($email)){
            Session::flash('error',  Newsletter::getLastError());
            return redirect()->back();
        }
        // return Newsletter::getLastError();
    }

    public function getMembers()
    {
    return Newsletter::getMembers();
    }
}

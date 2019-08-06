<?php

namespace App\Http\Controllers\Admin;

use App\Mail\SupportMail;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Mail;

class ContactController extends Controller
{
    protected $contact;

    public function __construct( Contact $contact)
    {
        $this->contact = $contact;
    }

    public function index()
    {
        $data['contacts'] = $this->contact->orderBy('created_at', 'desc')->paginate(10);

        return view('pages.admin.contact.index', $data);
    }

    public function show(Contact $contact)
    {
        return view('pages.admin.contact.show', compact('contact'));
    }

    public function resolve(Contact $contact)
    {
        $contact->resolve(auth::user());

        Mail::to($contact->email)->send(new SupportMail($contact->name));
        Mail::to(env('ADMIN_MAIL'))->send(new SupportMail($contact->name));
        session()->flash('success', 'Contact Resolved!');
        return redirect()->back();
    }

    public function unresolve(Contact $contact)
    {
        $contact->unresolve();
        session()->flash('success', 'Contact Resolved!');
        return redirect()->back();
    }
}

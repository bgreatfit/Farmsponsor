<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Str;

class ContactController extends Controller
{

    protected $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.contact-us');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required | string',
            'email' => 'required | email',
            'subject' => 'required',
            'message' => 'required'
        ];

        $this->validate($request, $rules);

        $supportId = $this->generateSupportId();

        $this->contact->create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'support_id' => $supportId
        ]);

        session()->flash('success', 'Message submitted successfully, you will be contacted soon');

        return redirect()->back();
    }

    public function generateSupportId()
    {
        do{
            $supportId = rand(10000000,99999999) . Str::random(2);
        }while(Contact::whereSupportId($supportId)->first() != NULL);

        return $supportId;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
       //
    }



}

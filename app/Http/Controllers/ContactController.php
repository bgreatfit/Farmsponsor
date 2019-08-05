<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
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
            'message' => 'required | min:10'
        ];

        $this->validate($request, $rules);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'support_id' => $this->generateSupportId()
        ]);

        session()->flash('success', 'Message submitted successfully, you will be contacted soon');

        return redirect()->back();
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

    public function generateSupportId()
    {
        do{
            $supportId = rand(10000000,99999999) . Str::random(2);
        }while(Contact::whereSupportId($supportId) != NULL);

        return $supportId;
    }


}

<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function __construct() {
        $this->middleware('auth.admin')
            ->except(['index', 'index2', 'index3' , 'index4', 'show','store']);

        $this->middleware('auth')->except(['index','index2', 'index3', 'index4', 'edit', 'show', 'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::first();
        return view('Contact.show', compact('contacts'));
    }

     public function index2()
    {
        $contacts = Contact::first();
        return view('Contact2.show', compact('contacts'));
    }

     public function index3()
    {
        $contacts = Contact::all()->last();
        return view('Contact3.show', compact('contacts'));
    }
    public function index4()
    {
        $contacts = Contact::all()->last();
        return view('Contact4.show', compact('contacts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Contact.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Contact::create([
            'title' => $request->get('title'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'hours' => $request->get('hours'),
            'map' => $request->get('map')
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        $contacts = Contact::find($contact);
        return view('Contact.show', compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts = Contact::find($id);
        return view('Contact.form', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       Contact::find($id)->update($request->all());
        return redirect()->route('contacts.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('Contacts.index');
    }
}

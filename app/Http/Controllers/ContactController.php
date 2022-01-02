<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('contact.index', [
            'contacts' => Contact::all()
        ]); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([

            'location_en' => 'required|string|max:255',

            'contact_en' => 'required|string|max:255',
            
            'helpline_en' => 'required|string|max:255',

            'email' => 'required|string|email|max:255',

            'mapper' => 'required|string|max:255',

            'working_en' => 'required|string|max:255',

            'location_np' => 'required|string|max:255',

            'contact_np' => 'required|string|max:255',
            
            'helpline_np' => 'required|string|max:255',

            'working_np' => 'required|string|max:255',

            

        ]);


        

        $contact = new Contact();

        $contact->location_en = $request->input('location_en');
        $contact->contact_en = $request->input('contact_en');
        $contact->helpline_en = $request->input('helpline_en');
        $contact->email = $request->input('email');
        $contact->mapper = $request->input('mapper');
        $contact->working_en = $request->input('working_en');
        $contact->location_np = $request->input('location_np');
        $contact->contact_np = $request->input('contact_np');
        $contact->helpline_np = $request->input('helpline_np');
        $contact->working_np = $request->input('working_np');
        
        
        $contact->save();

        return redirect('/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contact = Contact::find($id);
        return view('contact.edit', [
            'contact' => $contact       
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([

            'location_en' => 'required|string|max:255',

            'contact_en' => 'required|string|max:255',
            
            'helpline_en' => 'required|string|max:255',

            'email' => 'required|string|email|max:255',

            'mapper' => 'required|string|max:255',

            'working_en' => 'required|string|max:255',

            'location_np' => 'required|string|max:255',

            'contact_np' => 'required|string|max:255',
            
            'helpline_np' => 'required|string|max:255',

            'working_np' => 'required|string|max:255',

        ]);

        $contact = Contact::find($id);

        $contact->location_en = $request->input('location_en');
        $contact->contact_en = $request->input('contact_en');
        $contact->helpline_en = $request->input('helpline_en');
        $contact->email = $request->input('email');
        $contact->mapper = $request->input('mapper');
        $contact->working_en = $request->input('working_en');
        $contact->location_np = $request->input('location_np');
        $contact->contact_np = $request->input('contact_np');
        $contact->helpline_np = $request->input('helpline_np');
        $contact->working_np = $request->input('working_np');
        
        
        $contact->save();
        return redirect('/contact');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

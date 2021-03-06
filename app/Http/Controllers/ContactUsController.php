<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactUsController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }
    

    public function store(Request $req)

    {
        $req->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'feedback '=> 'required'
        ]);

        

       return redirect()
              ->route('contact')
              ->with('msg', 'Message has been sent to Amigos team');

    }

}

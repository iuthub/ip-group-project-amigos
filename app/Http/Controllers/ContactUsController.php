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
    

    public function store(Request $request)

    {
        $this->validate( $request, [
            'firstname' => 'required|min:1',
            'lastname' => 'required',
            'email' => 'required|email',
            'feedback '=> 'required'
        ]);

      
        return redirect()->route('contact');

    }

}

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
        return view('contact.create');//
    }
    

    public function store(Request $request)
    {
        $this->validate($request,[
      'firstname'=>'required|min:1',
      'lastname'=>'required',
      'email'=>'required|email',
      'feedback'=>'required']);

      
        return redirect()->route('contact');


session()->flash('notif',' Message has been sent to Amigos Team');

/*return redirect::to("/contact")->withSuccess("success message");*/

       /*Mail::send('contact/emails.contact-message',[ 'msg'=>$request->feedback], function($mail) use($request){
            $mail->from($request->email, $request->fi rstname);
            $mail->to('kjasurbekova@gmail.com')->subject('Contact Message');
        });
        return redirect()->back()->with('flash_message','Thank you for your feedback!');*/
        }

}
?>
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Mail;
use App\Mail\NewContactRequest;

class ContactsController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function postContact(ContactRequest $request)
    {
        Mail::to('support@yoduministry.org')->send(new NewContactRequest($request));
        return back()->with('status','Your message has been received');
    }
  
}

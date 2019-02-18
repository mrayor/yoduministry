<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Mail;
use App\Mail\NewRegisterRequest;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function postRegister(RegisterRequest $request)
    {
        Mail::to('support@yoduministry.org')->send(new NewRegisterRequest($request));
        return back()->with('status','Thank you for registering with us');
    }
}

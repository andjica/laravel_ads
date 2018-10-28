<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

class MailController extends Controller
{
    public function send()
    {
        // dd(request());
        Mail::to('iederwatwils@gmail.com')->send(new ContactUs(request()->mail, request()->body));

        return redirect('user_profile');
    }
}


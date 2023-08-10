<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $recipient = 'khoirul@verdetwosales.com';

        Mail::to($recipient)->send(new SendEmail());

        return redirect()->back()->with('message', 'Email sent successfully!');
    }
}

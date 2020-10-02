<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details=[
            'title' => 'Mail from Laravel',
            'body' => 'This is for testing mail using gmail.'
        ];
       Mail::to("nimishab17@gmail.com")->send(new TestMail($details));
       return "Email sent";
        
    }
}

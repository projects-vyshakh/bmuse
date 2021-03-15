<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendNewsletter(Request $request) {


        $email  = $request['email'];
        $name   = $request['name'];

        $details = [
            'name'  => $name,
            'email' => $email
        ];


       // $parameters = $details;
        //return view('emails.newsletter', compact('parameters'));

        Mail::to('vyshakhps1988@gmail.com')->send(new NewsletterMail($details));

    }

    public function showNewsletterTemplate(){
        $email = 'vyshakh@example.com';
        $name   = "Vyshakh";


        return view('emails.newsletter', ['name'=>$name, 'email'=>$email]);

    }
}

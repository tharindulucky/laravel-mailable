<?php

namespace App\Http\Controllers;

use App\Mail\SignupEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $data = [
            'name' => "Tharindu",
            'verification_code' => "WERERWER"
        ];

        Mail::to('to_email@gmail.com')->send(new SignupEmail($data));
    }
}

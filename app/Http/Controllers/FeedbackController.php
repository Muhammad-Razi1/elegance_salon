<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    function feedbackView(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('elegancesalon31@gmail.com')->send(new FeedbackMail($data));

        return redirect()->back()->with('msg', 'Thanks for reaching out. Your message has been sent successfully.');
    }
}

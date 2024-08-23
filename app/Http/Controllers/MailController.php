<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AppointmentMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(Request $request){
        $appointment = [
            'name' => $request->name,
            'email' => $request->email,
            'date' => $request->date,
            'service' => $request->service,
            'time' => $request->time,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        Mail::to($request->email)->send(new AppointmentMail($appointment));
    } 
}

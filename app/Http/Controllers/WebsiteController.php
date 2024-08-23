<?php

namespace App\Http\Controllers;

use App\Models\service;
use App\Models\Inventory;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Mail\AppointmentMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function webIndex(){
        return view('website.index');
    }
    public function webServices(){
        return view('website.services');
    }
    public function webContact(){
        return view('website.contact');
    }
    public function webBooknow(){
        $services = service::all();
        return view('website.booknow', compact('services'));
    }
    public function bookCustomer(Request $request){
        $book = new Appointment();

        $book->name = $request->name;
        $book->email = $request->email;
        $book->date = $request->date;
        $book->time = $request->time;
        $book->service = $request->service;
        $book->phone = $request->phone;
        $book->message = $request->message;

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

        $book->save();
        return redirect('booknow')->with('success', 'Appointment Scheduled');
    }
    public function webShop(){
        $products = Inventory::all();
        return view('website.shop', compact('products'));
    }

}

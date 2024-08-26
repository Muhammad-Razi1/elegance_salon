<?php

namespace App\Http\Controllers;

use App\Models\service;
use App\Models\Inventory;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Mail\AppointmentMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
    public function addToCart($id){

            if(Auth::check()){
                $inventory = Inventory::findOrFail($id);
            $cart = session()->get('cart', []);
            if(isset($cart[$id])){
                $cart[$id]['product_quantity']++;
            }
            else{
                $cart[$id] = [
                    "product_name" => $inventory->product_name,
                    "product_description" => $inventory->product_description,
                    "product_quantity" => 1,
                    "product_price" => $inventory->product_price,
                    "product_image" => $inventory->product_image,
                ];
            }
            session()->put('cart', $cart);
            return redirect()->back()->with('added', 'Item has been added to cart!');
            }else{
                return redirect()->route('login')->with('error', 'You need to login before purchasing anything');
            }


    }
    public function Cart(){
        return view('website.cart');
    }
    public function deleteProduct(Request $request){
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Item successfully deleted.');
        }
    }
}

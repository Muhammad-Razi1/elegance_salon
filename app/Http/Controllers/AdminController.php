<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\service;
use App\Models\Inventory;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function adminIndex(){
        $appointment = Appointment::count();
        $inventory = Inventory::sum('product_quantity');

        return view('admin.index', compact('appointment', 'inventory'));
    }
    public function adminClient(){
        $clients = Appointment::all();
        return view('admin.client', compact('clients'));
    }
    public function searchData(Request $request){
        $client = $request->input('client');

        $clients = DB::table('appointments')->where('name', 'LIKE', '%'.$client.'%')->get();
        return view('admin.client', compact('clients'));
    }
    public function clientDelete($id){
        $clients = Appointment::find($id);
        $clients->delete();
        return redirect('client');
    }
    public function clientEdit($id){
        $clients = Appointment::find($id);
        return view('admin.editclient', compact('clients'));
    }
    public function clientUpdate(Request $request, $id){
        $clients = Appointment::find($id);

        $clients->name = $request->name;
        $clients->email = $request->email;
        $clients->date = $request->date;
        $clients->time = $request->time;
        $clients->service = $request->service;
        $clients->phone = $request->phone;

        $clients->save();
        return redirect('client');
    }
    public function clientAddView(){
        $services = service::all();
        return view('admin.addclient', compact('services'));
    }
    public function addClient(Request $request){
        $clients = new Appointment();

        $clients->name = $request->name;
        $clients->email = $request->email;
        $clients->date = $request->date;
        $clients->time = $request->time;
        $clients->service = $request->service;
        $clients->phone = $request->phone;

        $clients->save();
        return redirect('client');
    }
    public function staffView(){
        $clients = Staff::all();
        return view('admin.staff', compact('clients'));
    }
    public function staffAdd(){
        $services = service::all();
        return view('admin.addstaff', compact('services'));
    }
    public function staffInsert(Request $request){
        $staff = new Staff();

        $staff->name = $request->name;
        $staff->contact = $request->contact;
        $staff->work_schedule = $request->work;
        $staff->commission_rates = $request->commission;
        $staff->tasks = $request->task;
        $staff->shifts = $request->shift;
        $staff->services = $request->service;
        $staff->salary = $request->salary;


        $staff->save();
        return redirect('staff');
    }
    public function staffRemove($id){
        $staff = Staff::find($id);
        $staff->delete();
        return redirect('staff');
    }
    public function staffEditView($id){
        $staff = Staff::find($id);
        return view('admin.editstaff', compact('staff'));
    }
    public function staffUpdate(Request $request, $id){
        $staff = Staff::find($id);

        $staff->name = $request->name;
        $staff->contact = $request->contact;
        $staff->work_schedule = $request->work;
        $staff->commission_rates = $request->commission;
        $staff->tasks = $request->task;
        $staff->shifts = $request->shift;
        $staff->services = $request->service;
        $staff->salary = $request->salary;

        $staff->save();
        return redirect('staff');
    }
    public function inventoryView(){
        $products = Inventory::all();
        return view('admin.inventory', compact('products'));
    }
    public function addProductView(){
        return view('admin.addinventory');
    }
    public function addProduct(Request $request){
        $product = new Inventory();

        $product->product_name = $request->name;
        $product->product_description = $request->desc;
        $product->product_price = $request->price;

        $file = $request->image;
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/product', $filename);
        $product->product_image = $filename;

        $product->product_quantity = $request->quantity;
        $product->supplier = $request->supplier;
        $product->supplier_contact = $request->suppliercon;
        $product->product_cost = $request->cost;

        $product->save();
        return redirect('inventory');
    }
    public function deleteInventory($id){
        $product = Inventory::find($id);
        $product->delete();
        return redirect('inventory');
    }
    public function editInventoryView($id){
        $product = Inventory::find($id);
        return view('admin.editinventory', compact('product'));
    }
    public function updateInventory(Request $request, $id){
        $product = Inventory::find($id);

        $product->product_name = $request->name;
        $product->product_description = $request->desc;
        $product->product_price = $request->price;

        $file = $request->image;
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/product', $filename);
        $product->product_image = $filename;

        $product->product_quantity = $request->quantity;
        $product->supplier = $request->supplier;
        $product->supplier_contact = $request->suppliercon;
        $product->product_cost = $request->cost;

        $product->save();
        return redirect('inventory');
    }
    public function serviceView(){
        $services = service::all();
        return view('admin.service', compact('services'));
    }
    public function addServiceView(){

        return view('admin.addservices');
    }
    public function addService(Request $request){
        $services = new service();

        $services->service = $request->service;
        $services->price = $request->price;

        $services->save();
        return redirect('service');
    }
    public function deleteService($id){
        $service = service::find($id);
        $service->delete();
        return redirect('service');
    }
    public function editServiceView($id){
        $service = service::find($id);
        return view('admin.editservice', compact('service'));
    }
    public function editService(Request $request, $id){
        $services = service::find($id);

        $services->service = $request->service;
        $services->price = $request->price;

        $services->save();
        return redirect('service');
}
}

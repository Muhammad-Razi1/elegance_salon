@extends('layouts.adminmain')

@section('main-section')

<div class="container mt-4">

    <a href="/addproduct" class="btn btn-outline-secondary my-3">Add Products</a>

    <div class="table-responsive-lg">
        <table class="table table-default">
            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Description</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Product Quantity</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Supplier Contact</th>
                    <th scope="col">Product Cost</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                <tr>
                    <td>{{$p->product_name}}</td>
                    <td>{{$p->product_description}}</td>
                    <td>{{$p->product_price}}</td>
                    <td><img src="{{ asset('uploads/product/' . $p->product_image) }}" width="20%" alt=""></td>
                    <td>{{$p->product_quantity}}</td>
                    <td>{{$p->supplier}}</td>
                    <td>{{$p->supplier_contact}}</td>
                    <td>{{$p->product_cost}}</td>
                    <td>
                        <a href="{{url('/editinventory', $p->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{url('/deleteinventory', $p->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection
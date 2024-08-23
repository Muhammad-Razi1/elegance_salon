@extends('layouts.adminmain')

@section('main-section')

<div class="container w-50 mt-5">
    <form action="{{url('/updateinventory', $product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" class="form-control" value="{{$product->product_name}}" name="name">
        <input type="text" class="form-control mt-2" value="{{$product->product_description}}" name="desc">
        <input type="number" class="form-control mt-2" value="{{$product->product_price}}" name="price">
        <input type="file" class="form-control mt-2" name="image">
        <input type="number" class="form-control mt-2" value="{{$product->product_quantity}}" name="quantity">
        <input type="text" class="form-control mt-2" value="{{$product->supplier}}" name="supplier">
        <input type="number" class="form-control mt-2" value="{{$product->supplier_contact}}" name="suppliercon">
        <input type="number" class="form-control mt-2" value="{{$product->product_cost}}" name="cost">
        <input type="submit" class="btn btn-info mt-4" value="Update Product Information">
    </form>
</div>

@endsection
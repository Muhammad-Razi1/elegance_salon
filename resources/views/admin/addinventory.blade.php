@extends('layouts.adminmain')

@section('main-section')

<div class="container w-50 mt-5">
    <form action="/insertproduct" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" class="form-control" placeholder="Product Name" name="name">
        <input type="text" class="form-control mt-2" placeholder="Product Description" name="desc">
        <input type="number" class="form-control mt-2" placeholder="Product Price" name="price">
        <input type="file" class="form-control mt-2" name="image">
        <input type="number" class="form-control mt-2" placeholder="Product Quantity" name="quantity">
        <input type="text" class="form-control mt-2" placeholder="Supplier" name="supplier">
        <input type="number" class="form-control mt-2" placeholder="Supplier Contact" name="suppliercon">
        <input type="number" class="form-control mt-2" placeholder="Product Cost" name="cost">
        <input type="submit" class="btn btn-info mt-4" value="Add Product Information">
    </form>
</div>

@endsection
@extends('layouts.adminmain')

@section('main-section')

<div class="container w-50 mt-5">
    <form action="/insertservice" method="post">
        @csrf
        <input type="text" class="form-control" placeholder="Service" name="service">
        <input type="number" class="form-control mt-2" placeholder="Price" name="price">
        <input type="submit" class="btn btn-info mt-4" value="Add Service">
    </form>
</div>

@endsection

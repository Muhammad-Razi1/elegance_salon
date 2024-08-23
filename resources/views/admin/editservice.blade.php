@extends('layouts.adminmain')

@section('main-section')

<div class="container w-50 mt-5">
    <form action="{{url('/updateservice', $service->id)}}" method="post">
        @csrf
        <input type="text" class="form-control" value="{{$service->service}}" name="service">
        <input type="number" class="form-control mt-2" value="{{$service->price}}" name="price">
        <input type="submit" class="btn btn-info mt-4" value="Update Service">
    </form>
</div>

@endsection

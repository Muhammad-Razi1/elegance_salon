@extends('layouts.adminmain')

@section('main-section')

<div class="container w-50 mt-5">
    <form action="{{url('/update', $clients->id)}}" method="post">
        @csrf
        <input type="text" class="form-control" value="{{$clients->name}}" name="name">
        <input type="email" class="form-control mt-2" value="{{$clients->email}}" name="email">
        <input type="date" class="form-control mt-2" value="{{$clients->date}}" name="date">
        <input type="time" class="form-control mt-2" value="{{$clients->time}}" name="time">
        <input type="text" class="form-control mt-2" value="{{$clients->service}}" name="service">
        <input type="text" class="form-control mt-2" value="{{$clients->phone}}" name="phone">
        <input type="submit" class="btn btn-info mt-4" value="Update Record">
    </form>
</div>

@endsection
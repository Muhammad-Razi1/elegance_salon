@extends('layouts.adminmain')

@section('main-section')

<div class="container mt-4">

    <a href="/addservice" class="btn btn-outline-secondary my-3">Add Service</a>


    <div class="table-responsive-lg">
        <table class="table table-default">
            <thead>
                <tr>
                    <th scope="col">Services</th>
                    <th scope="col">Service Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $s)
                <tr>
                    <td>{{$s->service}}</td>
                    <td>{{$s->price}}</td>
                    <td>
                        <a href="{{url('/editservice', $s->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{url('/deleteservice', $s->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>

@endsection

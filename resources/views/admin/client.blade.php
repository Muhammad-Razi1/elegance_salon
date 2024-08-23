@extends('layouts.adminmain')

@section('main-section')


<div class="container mt-4">

<div class="container d-flex align-items-center justify-content-around">
<a href="/addclient" class="btn btn-outline-secondary my-3">Add Client</a>

<form action="search" method="get" class="d-flex">
    <input type="text" name="client" class="form-control" placeholder="Search Client">
    <button type="submit" class="btn btn-primary mx-2">Search</button>
</form>
</div>

<div class="table-responsive-lg">
    <table class="table table-default">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Service</th>
                <th scope="col">Phone</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $c)
            <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->date}}</td>
                <td>{{$c->time}}</td>
                <td>{{$c->service}}</td>
                <td>{{$c->phone}}</td>
                <td>{{$c->message}}</td>
                <td><a href="{{url('/edit', $c->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{url('/delete', $c->id)}}" class="btn btn-danger">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>


@endsection
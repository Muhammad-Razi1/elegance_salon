@extends('layouts.adminmain')

@section('main-section')

<div class="container mt-4">

    <a href="/addstaff" class="btn btn-outline-secondary my-3">Add Staff</a>


    <div class="table-responsive-lg">
        <table class="table table-default">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Work Schedule</th>
                    <th scope="col">Commission Rates</th>
                    <th scope="col">Tasks</th>
                    <th scope="col">Shifts</th>
                    <th scope="col">Services</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $c)
                <tr>
                    <td>{{$c->name}}</td>
                    <td>{{$c->contact}}</td>
                    <td>{{$c->work_schedule}}</td>
                    <td>{{$c->commission_rates}}</td>
                    <td>{{$c->tasks}}</td>
                    <td>{{$c->shifts}}</td>
                    <td>{{$c->services}}</td>
                    <td>{{$c->salary}}</td>
                    <td>
                        <a href="{{url('/editstaff', $c->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{url('/remove', $c->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>

@endsection

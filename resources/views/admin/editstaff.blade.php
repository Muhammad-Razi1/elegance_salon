@extends('layouts.adminmain')

@section('main-section')

<div class="container w-50 mt-5">
    <form action="{{url('/updatestaff', $staff->id)}}" method="post">
        @csrf
        <input type="text" class="form-control" value="{{$staff->name}}" name="name">
        <input type="number" class="form-control mt-2" value="{{$staff->contact}}" name="contact">
        <input type="text" class="form-control mt-2" value="{{$staff->work_schedule}}" name="work">
        <input type="text" class="form-control mt-2" value="{{$staff->commission_rates}}" name="commission">
        <input type="text" class="form-control mt-2" value="{{$staff->tasks}}" name="task">
        <input type="date" class="form-control mt-2" value="{{$staff->shifts}}" name="shift">
        <input type="text" class="form-control mt-2" value="{{$staff->services}}" name="service">
        <input type="text" class="form-control mt-2" value="{{$staff->salary}}" name="salary">
        <input type="submit" class="btn btn-info mt-4" value="Edit Staff">
    </form>
</div>

@endsection

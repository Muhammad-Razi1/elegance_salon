@extends('layouts.adminmain')

@section('main-section')

<div class="container w-50 mt-5">
    <form action="/insert" method="post">
        @csrf
        <input type="text" class="form-control" placeholder="Name" name="name">
        <input type="number" class="form-control mt-2" placeholder="Contact" name="contact">
        <input type="text" class="form-control mt-2" placeholder="Work Schedule" name="work">
        <input type="text" class="form-control mt-2" placeholder="Commission Rates" name="commission">
        <input type="text" class="form-control mt-2" placeholder="Tasks" name="task">
        <input type="date" class="form-control mt-2" placeholder="Shifts" name="shift">
        <select name="service" class="form-control mt-2" id="">
            <option value="">For services, Select an option..</option>
            @foreach ($services as $s)
            <option value="{{$s->id}}">{{$s->service}}</option>
            @endforeach
        </select>
        <input type="text" class="form-control mt-2" placeholder="Salary" name="salary">
        <input type="submit" class="btn btn-info mt-4" value="Add Staff">
    </form>
</div>

@endsection

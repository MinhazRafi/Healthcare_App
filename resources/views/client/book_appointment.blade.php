@extends('client.layouts.app')
@section('content')

<div class="container">

<h2>Book Appointment</h2>
<form action="{{route('appointment')}}" class="form-group" method="post">

{{csrf_field()}}

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif


@if(Session::has('success'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif

<div class="col-md-4 form-group">
        <input type="text" name="doctor_id" value="{{$doctors->id}}" class="form-control" hidden>


    </div>

    <div class="col-md-4 form-group">
        <span>Doctor Name</span>
        <input type="text" name="doctor_name_b" value="{{$doctors->doctor_name}}" class="form-control" readonly>


    </div>

    <div class="col-md-4 form-group">
        <span>Date of Appointment</span>
        <input type="date" name="doctor_date_appointment_b" value=""class="form-control">

    </div>

    <div class="col-md-4 form-group">
        <span>Time</span>
        <input type="text" name="doctor_appointment_time_b" value="" class="form-control">
    </div>

    <div class="col-md-4 form-group">
        <span>Description</span>
        <textarea class="form-control" rows="3" name="doctor_appointment_description_b" ></textarea>
    </div> <br>

    <input type="submit" class="btn btn-success" value="Confirm" >

</form>

</div>


@endsection 
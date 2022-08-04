@extends('client.layouts.app')
@section('content')

<div class="container">

<h2>Update Profile</h2>
<form action="{{route('clientProfile')}}" class="form-group" method="post">

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
        <span>Email</span>
        <input type="text" name="client_email" value="{{Session::get('session_email')}}" class="form-control" readonly>


    </div>
    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="client_name" value="{{Session::get('client_name')}}" class="form-control">

    </div>
    <div class="col-md-4 form-group">
        <span>Date of Birth</span>
        <input type="date" name="client_dob" value="{{Session::get('client_dob')}}"class="form-control">

    </div>

    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="password" name="client_password" value="{{Session::get('client_password')}}"class="form-control">

    </div>

    <div class="col-md-4 form-group">
        <span>Phone No</span>
        <input type="text" name="client_phone" value="{{Session::get('client_phone')}}" class="form-control">
    </div>

    <div class="col-md-4 form-group">
        <span>Address</span>
        <textarea class="form-control" rows="3" name="client_address" >{{Session::get('client_address')}}</textarea>
    </div> <br>

    <input type="submit" class="btn btn-success" value="Update Profile" >

</form>

</div>


@endsection 
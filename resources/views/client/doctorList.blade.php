@extends('client.layouts.app')
@section('content')


<div class="container">

<h3>Here All Our Specialized Doctors</h3> <br>
<table class="table table-bordered table-striped">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Specialized</th>
        <th>Appointment</th>
</tr>

<tr>
    @foreach($d as $doctor_list)
    <tr>
        <td>{{$doctor_list->doctor_name}}</td>
        <td>{{$doctor_list->doctor_email}}</td>
        <td>{{$doctor_list->doctor_phone}}</td>
        <td>{{$doctor_list->doctor_specialized}}</td> 
        <td><a href="/client/appointment/{{$doctor_list->id}}"><button class="btn btn-outline-success">Book Appointment</button></a></td>  

</tr>
@endforeach

</table>
<div>

@endsection
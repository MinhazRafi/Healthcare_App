@extends('client.layouts.app')
@section('content')

<div class="container">
<b>Hello there ! welcome {{session()->get('client_name')}} </b> <br><br>


<h3>All Appointments : {{$count}}</h3> <br>
<table class="table table-bordered table-striped">
    <tr>
        <th>Doctor Name</th>
        <th>Email</th>
        <th>Specialized</th>
        <th>Time</th>
        <th>Date</th>
        <th>Action</th>
</tr>

<tr>
@foreach($app as $show_app)
    <tr>
        <td>{{$show_app->doctor->doctor_name}}</td>
        <td>{{$show_app->doctor->doctor_email}}</td>
        <td>{{$show_app->doctor->doctor_specialized}}</td>
        <td>{{$show_app->time}}</td>
        <td>{{$show_app->date}}</td> 
        <td><a href="/client/home/{{$show_app->id}}"><button class="btn btn-outline-danger">Delete</button></a></td>   
</tr>

@endforeach


</table>
<div class="pagination justify-content-center">
            {{$app->links()}}
        </div>

</div>


@endsection
@extends('layout')
@section('content')

<h1 style="text-align:center">Products List</h1>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{(Session::get('status'))}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table table-border">
    <tr>
        <th>Product Name</th>
        <th>ID</th>
        <th>Price(TK)</th>
        <th>Stock</th>
</tr>
@foreach($products as $product)
<tr>
        <td>{{$product['product_name']}}</td>
        <td>{{$product['id']}}</td>
        <td>{{$product['product_price']}}</td>
        <td>{{$product['product_stock']}}</td>
</tr>
@endforeach
</table>
@endsection
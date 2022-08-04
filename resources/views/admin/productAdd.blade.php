@extends('layout')
@section('content')
<h2> Add Product</h2>
<div class="col-sm-5" >
<form method = "post" action="">
    @csrf
  <div class="form-group">
  <span>Product Name</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
   
  </div>


  <div class="form-group">
  <span>Product Price</span>
        <input type="text" name="price" value="{{old('dob')}}" class="form-control">
   
  </div>

  <div class="form-group">
  <span>Available Stock</span>
        <input type="number" name="stock" value="{{old('email')}}" class="form-control">
   
  </div>
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>


</div >




@endsection
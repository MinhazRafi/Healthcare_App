@extends('layout')
@section('content')
<h2> Add Product</h2>
<div class="col-sm-5" >
<form method = "post" action=" ">
    @csrf
  <div class="form-group">
  <span>Product Name</span>
        <input type="text" name="product_name"  class="form-control" placeholder="Enter Product Name">
   
  </div>


  <div class="form-group">
  <span>Product Price</span>
        <input type="text" name="product_price"  class="form-control" placeholder="Enter Product Price">
   
  </div>

  <div class="form-group">
  <span>Available Stock</span>
        <input type="number" name="product_stock"  class="form-control" placeholder="Enter Available Stock">
   
  </div>
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>


</div >




@endsection
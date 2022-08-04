<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    /*
    function show()
    {
        $data = Product::all();
        return view('productlist',['products'=>$data]);
    }
*/
    function list()
    {
        $data = Product::all();
        return view ('productlist',['products'=>$data]);
    }

    function add(Request $req)
    {
        //return $req->input();
        $healthcare = new Product;
        $healthcare->product_name=$req->input('product_name');
        $healthcare->product_price=$req->input('product_price');
        $healthcare->product_stock=$req->input('product_stock');
        $healthcare->save();

        $req ->session()->flash('status','Product Added Successfully');
        return redirect('productlist');
    }

    


    public function APIpost(Request $req){
        
        $product = new Product();
        $product->product_name=$req->product_name;
        $product->product_price=$req->product_price;
        $product->product_stock=$req->product_stock;
        $product->save();


     
        return $req;
    }

    function APIlist()
    {
        return Product::all();
    }

    

    



}
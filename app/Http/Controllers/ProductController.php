<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function newProduct(){
        Product::create(['name'=>'xdxd','price'=>12323.41,'description'=>'ashdhasdh']);
        return "hehe";
    }
}

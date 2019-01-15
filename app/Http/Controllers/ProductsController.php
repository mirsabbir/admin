<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function AgeIndex(){
        return view('products.age');
    }
    public function SizeIndex(){
        return view('products.size');
    }
    public function PriceIndex(){
        return view('products.price');
    }
}

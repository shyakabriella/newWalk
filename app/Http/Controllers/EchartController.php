<?php

namespace App\Http\Controllers;
use App\Models\Sam;
use Illuminate\Http\Request;

class EchartController extends Controller
{
    public function echart(Request $request)
    {
    	$Laptop = Product::where('product_type','Laptop')->get();
    	$Phone = Product::where('product_type','Phone')->get();
    	$Desktop = Product::where('product_type','Desktop')->get();
    	$laptop_count = count($Laptop);    	
    	$phone_count = count($Phone);
    	$desktop_count = count($Desktop);
    	return view('echart',compact('laptop_count','phone_count','desktop_count'));
    }
}
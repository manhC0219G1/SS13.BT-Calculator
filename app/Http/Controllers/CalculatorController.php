<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function show(){
        return view('list');
    }
    public function calculator(Request $request){
        $describe = $request->describe;
        $price = $request->price;
        $discount = $request->discount;
        $calculate = $price*$discount*0.01;
        return view('total',compact('describe','price','discount','calculate'));
    }
}

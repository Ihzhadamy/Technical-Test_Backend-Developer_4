<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\order;

class OrderController extends Controller
{
    public function index(){
        $order = Order::all();
        return view ('order',['order'=>$order]);
    }
}

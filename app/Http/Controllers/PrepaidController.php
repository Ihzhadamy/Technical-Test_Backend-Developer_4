<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrepaidController extends Controller
{
    public function index(){
        return view ('prepaid-balance');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    function index(){ 
      return view('front.index');
    }
}

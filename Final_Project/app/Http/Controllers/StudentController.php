<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StudentController extends Controller
{
  public function __construct()
  {
      //$this->middleware('auth');
      $this->middleware('student');

  }

  public function index (){

  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\student_info;

class StudentController extends Controller
{
  public function __construct()
  {
      //$this->middleware('auth');
      $this->middleware('student');

  }

  public function index (){
      return view('back.student.dashboard');
  }

  public function studentprofileview (){
      return view('back.student.profileview');
  }
}

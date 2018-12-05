<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobCircular;
use App\University;

class frontController extends Controller
{
    function index(){
      return view('front.index');
    }

    public function university($unit_name)
    {
      $details= University::where('university_name','=',$unit_name)->first();
      return view('front.university',compact('details'));
    }

    public function jobcicular(){
      $circulars =  JobCircular::all();
      return view('front.jobcicular',compact('circulars'));
    }


}

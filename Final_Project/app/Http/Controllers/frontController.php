<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobCircular;
use App\StudentNotification;
use App\University;

class frontController extends Controller
{
    function index()
    {
      $studentnotifications = StudentNotification::orderBy('id','desc')->limit(5)->get();
      return view('front.index',compact('studentnotifications'));
    }

    public function university($unit_name)
    {
      $details= University::where('university_name','=',$unit_name)->first();
      return view('front.university',compact('details'));
    }

    public function jobcicular()
    {
      $circulars =  JobCircular::all();
      return view('front.jobcicular',compact('circulars'));
    }


}

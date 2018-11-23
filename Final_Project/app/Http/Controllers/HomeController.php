<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExamSubject;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function examsubjects(){
      $exam_subject_names = ExamSubject::all();
      return view('back.admin.exam.subjects',compact('exam_subject_names'));
    }

    public function examsubjectadd(Request $request){
      $request->validate([
        'exam_subject_name' => 'required | unique:exam_subjects',
      ]);
      ExamSubject::create($request->all());
      return back()->with('status','New Exam Subject Add Successfully!');
    }

    public function examsubjectdelete($id){

    }
}

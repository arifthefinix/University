<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExamSubject;
use App\JobCircular;

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


    public function examsubjects()
    {
      $exam_subject_names = ExamSubject::all();
      return view('back.admin.exam.subjects',compact('exam_subject_names'));
    }

    public function examsubjectadd(Request $request)
    {
      $request->validate([
        'exam_subject_name' => 'required | unique:exam_subjects',
      ]);
      ExamSubject::create($request->all());
      return back()->with('status','New Exam Subject Add Successfully!');
    }

    public function examsubjectdelete($id)
    {
      ExamSubject::find($id)->delete();
      return back()->with('status_1','Subject Delation Successfully!');
    }

    public function jobadd()
    {
      return view('back.admin.job.add');
    }

    public function jobs()
    {
      $jobs = JobCircular::all();
      return view('back.admin.job.view',compact('jobs'));
    }

    public function addnewjob(Request $request)
    {
      $request->validate([
        'circular' => 'required',
        'details' => 'required',
      ]);
      if($request->hasFile('circular')){
      $path = $request->file('circular')->store('circulars');
      JobCircular::create([
        'circular' => $path,
        'details' => $request->details,
      ]);
      return back()->with('status','New Circular Added Successfully!');
    }
      return back()->with('status','New Circular Add Successfully!');
    }

    public function jobdelete($id)
    {
      JobCircular::find($id)->delete();
      return back()->with('status','Subject Delation Successfully!');
    }
}

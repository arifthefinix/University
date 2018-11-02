<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\student_info;
use App\User;
use App\University;
use App\Unit;
use App\Subject;
use Hash;
use Session;
use DB;

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
  public function studentchangepassword (){
      return view('back.student.studentchangepassword');
  }

  public function studentpasswordupdate (Request $request){

    $request->validate([
      'old_password' => 'required',
      'new_password' => 'required|min:6',
      'confirm_password' => 'required|same:new_password',
    ]);
    if(Hash::check($request->old_password,Auth::user()->password)){
      User::find(Auth::user()->id)->update([
        'password' => bcrypt($request->new_password),
      ]);

      return back()->with('status','Password Change Successfully!');
    }
    else{
      return back()->withErrors('Old Password Do not match');
    }
  }


  public function studentuniversities(){
    $universities = University::all();
    return view('back.student.university',compact('universities'));
  }

  public function studentuniversityunit($university_id){
    $name = University::findorFail($university_id);
    $gpa = student_info::where('user_id','=', Auth::user()->id)->value('hsc_gpa');
    $group_id = student_info::where('user_id','=', Auth::user()->id)->value('group_id');
    $units = DB::table('units')
     ->where([
        ['university_id','=',$university_id],
        ['gpa', '<=', $gpa],
        ['group_id', '=', $group_id],
     ])
     ->orWhere([
       ['university_id','=',$university_id],
       ['gpa', '<=', $gpa],
       ['group_id', '=', 4],
     ])
     ->get();
     return view('back.student.units',compact('units','name'));
  }

  public function studentapplyunit(){
    $gpa = student_info::where('user_id','=', Auth::user()->id)->value('hsc_gpa');
    $group_id = student_info::where('user_id','=', Auth::user()->id)->value('group_id');
    $units = DB::table('units')
     ->where([
        ['gpa', '<=', $gpa],
        ['group_id', '=', $group_id],
     ])
     ->orWhere([
       ['gpa', '<=', $gpa],
       ['group_id', '=', 4],
     ])
     ->get();
      return view('back.student.applyunit',compact('units'));
  }

  public function studentunitsubjects($unit_id){
     $name = Unit::findorFail($unit_id);
     $subjects = Subject::where('unit_id','=',$unit_id)->get();
     return view('back.student.subjects',compact('name','subjects'));
  }

  public function studentsubjectslist(){
    $gpa = student_info::where('user_id','=', Auth::user()->id)->value('hsc_gpa');
    $group_id = student_info::where('user_id','=', Auth::user()->id)->value('group_id');
    $units = DB::table('units')
     ->where([
        ['gpa', '<=', $gpa],
        ['group_id', '=', $group_id],
     ])
     ->orWhere([
       ['gpa', '<=', $gpa],
       ['group_id', '=', 4],
     ])
     ->get();
    return view('back.student.allsubjects',compact('units'));
  }
}

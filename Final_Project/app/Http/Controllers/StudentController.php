<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\student_info;
use App\User;
use App\University;
use App\Unit;
use App\Subject;
use App\Group;
use App\Question;
use App\ExamSubject;
use App\Answer;
use Hash;
use Session;
use App\StudentNotification;
use DB;

class StudentController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('student');
  }

  public function index ()
  {
      $notifications = StudentNotification::orderBy('id','desc')->get();
      return view('back.student.dashboard',compact('notifications'));
  }

  public function studentprofileview ()
  {
      return view('back.student.profileview');
  }

  public function studentchangepassword ()
  {
      return view('back.student.studentchangepassword');
  }

  public function studentpasswordupdate (Request $request)
  {
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


  public function studentuniversities()
  {
    $universities = University::all();
    return view('back.student.university',compact('universities'));
  }

  public function studentuniversityunit($university_id)
  {
    $name     = University::findorFail($university_id);
    $sscgpa   = student_info::where('user_id','=', Auth::user()->id)->value('ssc_gpa');
    $hscgpa   = student_info::where('user_id','=', Auth::user()->id)->value('hsc_gpa');
    $total    = $sscgpa+$hscgpa;
    $group_id = student_info::where('user_id','=', Auth::user()->id)->value('group_id');
    $units    = DB::table('units')
                                  ->where([
                                    ['university_id','=',$university_id],
                                    ['required_ssc_gpa', '<=', $sscgpa],
                                    ['required_hsc_gpa', '<=', $hscgpa],
                                    ['required_total_gpa', '<=', $total],
                                    ['group_id', '=', $group_id],
                                  ])
                                  ->orWhere([
                                    ['university_id','=',$university_id],
                                    ['required_ssc_gpa', '<=', $sscgpa],
                                    ['required_hsc_gpa', '<=', $hscgpa],
                                    ['required_total_gpa', '<=', $total],
                                    ['group_id', '=', 4],
                                  ])
                                  ->get();
      return view('back.student.units',compact('units','name'));
  }

  public function studentapplyunit(){
    $sscgpa   = student_info::where('user_id','=', Auth::user()->id)->value('ssc_gpa');
    $hscgpa   = student_info::where('user_id','=', Auth::user()->id)->value('hsc_gpa');
    $total    = $sscgpa+$hscgpa;
    $group_id = student_info::where('user_id','=', Auth::user()->id)->value('group_id');
    $units = DB::table('units')
     ->where([
       ['required_ssc_gpa', '<=', $sscgpa],
       ['required_hsc_gpa', '<=', $hscgpa],
       ['required_total_gpa', '<=', $total],
       ['group_id', '=', $group_id],
     ])
     ->orWhere([
       ['required_ssc_gpa', '<=', $sscgpa],
       ['required_hsc_gpa', '<=', $hscgpa],
       ['required_total_gpa', '<=', $total],
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
    $sscgpa   = student_info::where('user_id','=', Auth::user()->id)->value('ssc_gpa');
    $hscgpa   = student_info::where('user_id','=', Auth::user()->id)->value('hsc_gpa');
    $total    = $sscgpa+$hscgpa;
    $group_id = student_info::where('user_id','=', Auth::user()->id)->value('group_id');
    $units = DB::table('units')
     ->where([
       ['required_ssc_gpa', '<=', $sscgpa],
       ['required_hsc_gpa', '<=', $hscgpa],
       ['required_total_gpa', '<=', $total],
        ['group_id', '=', $group_id],
     ])
     ->orWhere([
       ['required_ssc_gpa', '<=', $sscgpa],
       ['required_hsc_gpa', '<=', $hscgpa],
       ['required_total_gpa', '<=', $total],
       ['group_id', '=', 4],
     ])
     ->get();
    return view('back.student.allsubjects',compact('units'));
  }

  public function studentimageupdate(Request $request){
    if($request->hasFile('user_image')){
      $path = $request->file('user_image')->store('user_images');
      User::find(Auth::user()->id)->update([
        'user_image' => $path
      ]);
    return back()->with('status','Profile Picture Change Successfully!');
  }
}

public function studentprofileupdate($user_id){
  $old_info = User::findorFail($user_id);
  $old_student_info = student_info::where('user_id','=',$user_id)->get();
  $groups = Group::all();
  return view('back.student.profileupdate',compact('old_info','$old_student_info','groups'));
}

public function studentprofileedit(Request $request){
  $request->validate([
    'name' => 'required|max:255',
    'phone' => 'required|max:16',
    'ssc_year' => 'required',
    'ssc_gpa' => 'required',
    'hsc_year' => 'required',
    'hsc_gpa' => 'required',
    'group' => 'required',
  ]);

  User::where('id','=',Auth::user()->id)->update([
    'name'=> $request->name,
  ]);
  student_info::where('user_id','=',Auth::user()->id)->update([
    'phone' =>  $request->phone,
    'ssc_year' => $request->ssc_year,
    'ssc_gpa' => $request->ssc_gpa,
    'hsc_year' => $request->hsc_year,
    'hsc_gpa' => $request->hsc_gpa,
    'group_id' => $request->group,
    'address' => $request->address,
  ]);
  return back()->with('status','Profile Updated Successfully!');
}



  public function student_exam()
  {
    $examsubjects = ExamSubject::all();
    return view('back.student.exam.step1',compact('examsubjects'));
  }
  public function student_exam_question($subject)
  {
    $subname = ExamSubject::findorFail($subject);
    $questions = Question::where('exam_subject_id','=',$subject)->inRandomOrder()->limit(25)->get();
    return view('back.student.exam.step2',compact('questions','subname'));
  }

  public function student_exam_answer_submit(Request $request){
    $i=0;
    $correct = 0;
     foreach ($request->question_ids as $key => $question_id) {
       $options = Answer::where('question_id','=',$question_id)->first();
       if ($options->correct_ans == $request->answers[$i]) {
         $correct++;
       }
       $i++;
     }
     return view('back.student.exam.result',compact('correct','i'));

  }

}

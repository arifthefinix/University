<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Hash;
use Session;
use App\student_info;
use App\AdminNotification;
use DB;
use Carbon\Carbon;

class adminController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index ()
    {
      $students = DB::table('student_infos')->orderBy('id','desc')->limit(10)->get();
      return view('back.admin.index',compact('students'));
    }

    public function profile_view ()
    {
      return view('back.admin.profile.view');
    }

    public function changepassword()
    {
      return view('back.admin.profile.changepassword');
    }

    public function changepasswordupdate (Request $request)
    {
      $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|min:6',
        'confirm_password' => 'required|same:new_password',
      ]);
      if(Hash::check($request->old_password,Auth::user()->password))
      {
        User::find(Auth::user()->id)->update([
          'password' => bcrypt($request->new_password),
        ]);
        return back()->with('status','Password Change Successfully!');
      }
      else
      {
        return back()->withErrors('Old Password Do not match');
      }
    }

    public function allnotification()
    {
      $notifications = AdminNotification::all()->where('notification_status','=','0');
      return view('back.admin.allnotification', compact('notifications'));
    }

    public function adminimageupdate(Request $request)
    {
      if($request->hasFile('user_image'))
      {
        $path = $request->file('user_image')->store('user_images');
        User::find(Auth::user()->id)->update([
          'user_image' => $path
        ]);
      return back()->with('status','Profile Picture Change Successfully!');
    }
  }

  public function adminprofileupdate($user_id)
  {
    $old_info = User::findorFail($user_id);
    return view('back.admin.profile.update',compact('old_info'));
  }

  public function adminprofileedit(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|unique:users'
    ]);

    User::where('id','=',Auth::user()->id)->update([
      'name'=> $request->name,
      'email'=> $request->email,
    ]);
    return back()->with('status','Profile Updated Successfully!');
  }

  public function allstudent()
  {
    $students = DB::table('student_infos')->orderBy('id','desc')->get();
    return view('back.admin.student.allstudent',compact('students'));
  }

  public function studentdelete($user_id)
  {
    student_info::where('user_id','=',$user_id)->delete();
    User::find($user_id)->delete();
    return back()->with('status','Student Delation Successfully!');
  }
}

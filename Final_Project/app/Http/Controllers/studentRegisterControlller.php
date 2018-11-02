<?php

namespace App\Http\Controllers;

use App\User;
use App\student_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\carbon;
use App\AdminNotification;

class studentRegisterControlller extends Controller
{
    public function register(Request $request ){

      $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users',
        'phone' => 'required|max:16',
        'ssc_year' => 'required',
        'ssc_gpa' => 'required',
        'hsc_year' => 'required',
        'hsc_gpa' => 'required',
        'group' => 'required',
        'dob' => 'required',
        'gender' => 'required',
        'password' => 'required | min:6 | confirmed',
      ]);

      $userid = User::insertGetId([
        'name'=> $request->name,
        'email'=> $request->email,
        'password' => Hash::make($request->password),
        'created_at' => Carbon::now(),
      ]);

      student_info::insert([
        'user_id' => $userid,
        'phone' =>  $request->phone,
        'ssc_year' =>  $request->ssc_year,
        'ssc_gpa' =>  $request->ssc_gpa,
        'hsc_year' =>  $request->hsc_year,
        'hsc_gpa' =>  $request->hsc_gpa,
        'group_id' =>  $request->group,
        'address' =>  $request->address,
        'dob' => $request->dob,
        'gender' => $request->gender,
        'created_at' => Carbon::now(),
      ]);

      AdminNotification::insert([
        'admin_notification_text' =>'New Student '. $request->name .' regestered successfully!',
        'user_id' => $userid,
        'created_at' => Carbon::now(),
      ]);

      return redirect()->route('login');
    }
}

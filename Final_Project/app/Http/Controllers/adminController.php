<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Hash;
use Session;

class adminController extends Controller

{
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index (){
      return view('back.admin.index');
    }
    public function profile_view (){
      return view('back.admin.profile.view');
    }

    public function changepassword(){
      return view('back.admin.profile.changepassword');
    }
    public function changepasswordupdate (Request $request){

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

}

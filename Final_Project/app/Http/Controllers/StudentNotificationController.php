<?php

namespace App\Http\Controllers;

use App\StudentNotification;
use Illuminate\Http\Request;
use DB;

class StudentNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
           $this->middleware('auth');
           $this->middleware('admin');
     }

     public function index()
     {
       $notifications = StudentNotification::orderBy('id','desc')->get();
       return view('back.admin.notification.view', compact('notifications'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.admin.notification.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'notification_text' => 'required',
        ]);

        StudentNotification::create([
          'notification_text' => $request->notification_text,
        ]);
        return back()->with('status','New Notification Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentNotification  $studentNotification
     * @return \Illuminate\Http\Response
     */

     public function notificationdelete($id)
     {
        StudentNotification::find($id)->delete();
        return back()->with('status','Notification Deleteed Successfully!');
     }

    public function show(StudentNotification $studentNotification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentNotification  $studentNotification
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentNotification $studentNotification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentNotification  $studentNotification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentNotification $studentNotification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentNotification  $studentNotification
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentNotification $studentNotification)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminNotification;

class AdminNotificationController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('admin');

    }
    public function adminnotificationmarkread($notification_id){
      AdminNotification::find($notification_id)->update([
          'notification_status' => 1,
        ]);
        return back();
    }
    public function alladminnotification(){
        $alladminnotifications =  AdminNotification::all();
        return view('back.admin.alladminnotification', compact('alladminnotifications'));
    }

    public function adminnotificationdelete($notification_id){
        AdminNotification::find($notification_id)->delete();
        return back()->with('status','Notification Delation Successfully!');
    }
}

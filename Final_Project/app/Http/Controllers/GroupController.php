<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         // $this->middleware('auth');
           $this->middleware('admin');
     }

    public function index()
    {
        $groups = Group::all();
        return view('back.admin.group.view', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.admin.group.add');
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
        'group_name' => 'required|unique:groups',
      ]);

      Group::create([
        'group_name' => $request->group_name,
      ]);
      return back()->with('status','New Group Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function editgroup($group_id)
     {
       $old_info = Group::findorFail($group_id);
       return view('back.admin.group.edit',compact('old_info'));
     }

     public function updategroup(Request $request)
     {
       $request->validate([
         'group_name' => 'required|unique:groups',
       ]);
       Group::where('id','=',$request->group_id)->update([
         'group_name' => $request->group_name,
       ]);
       return back()->with('status','Group Name Updated Successfully!');
     }

    public function deletegroup($id)
    {
      Group::find($id)->delete();
      return back()->with('status','Group Delation Successfull!');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

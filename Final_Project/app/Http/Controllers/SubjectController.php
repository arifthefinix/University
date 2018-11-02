<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\University;
use App\Group;
use App\Unit;

class SubjectController extends Controller
{

  public function __construct()
  {
      //$this->middleware('auth');
      $this->middleware('admin');

  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $subjects = Subject::all();
      return view('back.admin.subject.view', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universities =  University::all();
        $groups =  Group::all();
        $units = Unit::all();
        return view('back.admin.subject.add',compact('universities','groups','units'));
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
        'subject_name' => 'required',
        'university_id' => 'required|integer',
        'unit_id' => 'required|integer',
        'group_id' => 'required|integer',
        'seat' => 'required|integer',
      ]);

       Subject::create([
         'subject_name' => $request->subject_name,
         'university_id' => $request->university_id,
         'unit_id' => $request->unit_id,
         'group_id' => $request->group_id,
         'seat' => $request->seat,
       ]);
       return back()->with('status','New Subject Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

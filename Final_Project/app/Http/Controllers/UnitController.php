<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;
use App\Group;
use App\Unit;

class UnitController extends Controller
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
       $units = Unit::all();
       return view('back.admin.unit.view', compact('units'));
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
       return view('back.admin.unit.add', compact('universities','groups'));
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
          'unit_name' => 'required',
          'university_id' => 'required|integer',
          'required_ssc_gpa' => 'required',
          'required_hsc_gpa' => 'required',
          'required_total_gpa' => 'required',
          'application_deadline' => 'required',
          'exam_date' => 'required',
          'group_id' => 'required|integer',
          'apply_fee' => 'required',
          'seat' => 'required',
          'apply_process' => 'required',
        ]);
        Unit::create($request->all());
        return back()->with('status','New Unit Added Successfully!');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function editunit($unit_id)
     {
       $old_info = Unit::findorFail($unit_id);
       $universities = University::all();
       $groups = Group::all();
       return view('back.admin.unit.edit',compact('old_info','universities','groups'));
     }

     public function updateunit(Request $request)
     {
       $request->validate([
         'unit_name' => 'required',
         'university_id' => 'required|integer',
         'required_ssc_gpa' => 'required',
         'required_hsc_gpa' => 'required',
         'required_total_gpa' => 'required',
         'application_deadline' => 'required',
         'exam_date' => 'required',
         'group_id' => 'required|integer',
         'apply_fee' => 'required',
         'seat' => 'required',
         'apply_process' => 'required',
       ]);
       Unit::where('id','=',$request->unit_id)->update([
         'unit_name' => $request->unit_name,
         'university_id' => $request->university_id,
         'required_ssc_gpa' => $request->required_ssc_gpa,
         'required_hsc_gpa' => $request->required_hsc_gpa,
         'required_total_gpa' => $request->required_total_gpa,
         'application_deadline' => $request->application_deadline,
         'exam_date' => $request->exam_date,
         'group_id' => $request->group_id,
         'apply_fee' => $request->apply_fee,
         'seat' => $request->seat,
         'apply_process' => $request->apply_process,
       ]);
       return back()->with('status','Unit Updated Successfully!');
     }

     public function deleteunit($id)
     {
       Unit::find($id)->delete();
       return back()->with('status','Unit Delation Successfully!');
     }

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

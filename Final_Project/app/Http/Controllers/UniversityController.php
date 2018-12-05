<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\carbon;
use App\University;

class UniversityController extends Controller
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
      $universities = University::all();
      return view('back.admin.university.view', compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.admin.university.add');
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
        'university_name' => 'required|unique:universities',
        'university_description' => 'required',
      ]);

      University::create([
        'university_name' => $request->university_name,
        'university_description' => $request->university_description,
      ]);
      return back()->with('status','New University Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edituniversity($university_id)
     {
       $old_info = University::findorFail($university_id);
       return view('back.admin.university.edit',compact('old_info'));
     }

     public function updateuniversity(Request $request)
     {
       $request->validate([
         'university_name' => 'required|unique:universities',
         'university_description' => 'required',
       ]);
       University::where('id','=',$request->university_id)->update([
         'university_name' => $request->university_name,
         'university_description' => $request->university_description,
       ]);
       return back()->with('status','University Name Updated Successfully!');
     }

    public function deleteuniversity($id)
    {
      University::find($id)->delete();
      return back()->with('status','University Delation Successfully!');
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

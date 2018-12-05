<?php

namespace App\Http\Controllers;

use App\Question;
use App\ExamSubject;
use App\Answer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::orderBy('id','desc')->get();
        return view('back.admin.exam.allquestions',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exam_subjects = ExamSubject::all();
        return view('back.admin.exam.addquestion',compact('exam_subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $questionid = Question::insertGetId([
           'exam_subject_id'=>$request->exam_subject_id,
           'question'=>$request->question,
         ]);
         Answer::create([
           'question_id' => $questionid,
           'option_1' => $request->option_1,
           'option_2' => $request->option_2,
           'option_3' => $request->option_3,
           'option_4' => $request->option_4,
           'correct_ans' => $request->correct_ans,
         ]);
         return back()->with('status','New Question Add Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Question::find($id)->delete();
      return back()->with('status','Question Delation Successfully!');
    }
}

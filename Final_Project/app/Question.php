<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable =['exam_subject_id','question'];

    protected function getExamSubject(){
      return $this->hasone('App\ExamSubject','id','exam_subject_id');
    }
    protected function getAnswer(){
      return $this->hasone('App\Answer','question_id','id');
    }

}

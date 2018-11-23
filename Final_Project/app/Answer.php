<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable =['question_id','option_1','option_2','option_3','option_4','correct_ans'];
}

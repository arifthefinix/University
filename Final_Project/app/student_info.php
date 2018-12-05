<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_info extends Model
{
    protected $fillable = ['user_id','phone','dob','gender','ssc_year','ssc_gpa','hsc_year','hsc_gpa','group_id','address'];
}

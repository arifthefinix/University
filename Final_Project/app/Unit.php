<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable =['unit_name','university_id','gpa','application_deadline','group_id','exam_date','fee','apply_process'];
}

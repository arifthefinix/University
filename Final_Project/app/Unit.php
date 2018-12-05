<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Unit extends Model
{
    protected $fillable =['unit_name','university_id','required_ssc_gpa','required_hsc_gpa','required_total_gpa','application_deadline','group_id','exam_date','apply_fee','seat','apply_process'];
}

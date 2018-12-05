<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Subject extends Model
{
      protected $fillable =['subject_name','university_id','unit_id','group_id','seat'];
}

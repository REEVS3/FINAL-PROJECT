<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lab_student extends Model
{
    public $timestamps= false;
    protected $table="lab_student";


    protected $fillable=['lab_id','student_id','question_1','question_2','question_3'];
}

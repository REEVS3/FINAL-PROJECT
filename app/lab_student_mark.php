<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lab_student_mark extends Model
{
    public $timestamps= false;
    protected $table="lab_student_mark";

    protected $fillable=['lab_id','student_id'];
}

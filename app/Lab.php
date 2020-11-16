<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    public $timestamps = false;
    public function students()
    {
        return $this->belongsToMany(Student::class)->withPivot('question-1','question-2','question-3');
        
        
    }

    public function S_marks()
    {

        return $this->belongsToMany(Student::class,'lab_student_mark');

    }

}

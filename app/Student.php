<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps=false;
    public function labs()
    {
        return $this->belongsToMany(Lab::class,'lab_student');
    }
}

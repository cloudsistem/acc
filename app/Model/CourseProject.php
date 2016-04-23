<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CourseProject extends Model
{
    protected $table = 'course_project';
    protected $connection = 'mysql';
    protected $fillable = ['hours_min, course_id'];
    protected $hidden = ['course_id'];
    
    public function Course(){
        return $this->belongsTo('App\Model\Course');
    }
}

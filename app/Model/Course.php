<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    protected $connection = 'mysql';
    protected $fillable = ['name','description','user_id'];
    
    public function Activity(){
        return $this->hasMany('App\Model\Activity');
    }
    
    public function CourseProject(){
        return $this->hasOne('App\Model\CourseProject');
    }
    
    public function User(){
        return $this->hasMany('App\Model\User');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activity';
    protected $connection = 'mysql';
    protected $fillable = ['title',
                            'hours',
                            'hours_max',
                            'score_id',
                            'activity_group_id',
                            'course_id'];
                            
   protected $hidden = ['score_id','activity_group_id','course_id'];
                            
   public function Course()
    {
        return $this->belongsTo('App\Model\Course');
    } 
    
    public function ActivityGroup()
    {
        return $this->belongsTo('App\Model\ActivityGroup');
    }
     
    public function Score()
    {
        return $this->belongsTo('App\Model\Score');
    } 
    
    public function User()
    {
        return $this->hasMany('App\Model\User');
    }                         
}

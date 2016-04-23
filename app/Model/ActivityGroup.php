<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ActivityGroup extends Model
{
    protected $table = 'activity_group';
    protected $connection = 'mysql';
    protected $fillable = ['name'];
    
    public function Activity(){
        return $this->hasMany('App\Model\Activity');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table = 'score';
    protected $connection = 'mysql';
    protected $fillable = ['name'];
    
    public function Activity(){
        return $this->hasMany('App\Model\Activity');
    }
}

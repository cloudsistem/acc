<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $connection = 'mysql';
    protected $fillable   = ['name'];
    
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }   
}

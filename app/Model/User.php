<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Account;
use App\Model\Profile;

class User extends Model
{
    protected $table = 'user';
    protected $connection = 'mysql';
    
    public function account(){
        return $this->hasOne('App\Model\Account');
    }
    
    public function profile(){
        return $this->hasOne('App\Model\Profile');
    }
    
    public function SystemFiles(){
       return $this->hasMany('App\Model\SystemFiles'); 
    }
}

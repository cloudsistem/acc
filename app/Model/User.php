<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Account;
use App\Model\Profile;

class User extends Model
{
    protected $table = 'user';
    protected $connection = 'mysql';
    protected $guard = ['is_admin'];
    
    protected $casts = [
        'is_admin' => 'boolean',
    ];
    
    public function isAdmin()
    {
        return $this->is_admin;
    }
    
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

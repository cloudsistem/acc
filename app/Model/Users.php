<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'account';
    protected $connection = 'mysql';
    
    public function account(){
        return $this->hasOne('App\Model\Account');
    }
    
    public function profile(){
        return $this->hasOne('App\Model\Profile');
    }
}

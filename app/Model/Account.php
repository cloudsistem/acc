<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //ATRIBUTOS
    
    protected $table = 'account';
    protected $connection = 'mysql';
    protected $fillable   = [
        'email', 'password', 'username'
    ];                            
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }    
}

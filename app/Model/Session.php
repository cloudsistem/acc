<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'session';
    protected $connection = 'mysql';
    protected $fillable = ['id','user_id','ip_address','user_argent','payload','last_activity'];
    protected $hidden = ['user_id','user_argent'];
    
    
}

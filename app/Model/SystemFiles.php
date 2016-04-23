<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SystemFiles extends Model
{
    protected $table = 'system_files';
    protected $connection = 'mysql';
    protected $fillable = ['user_id','disk_name','file_name','content_type'];
    
    public function User(){
        return $this->belongsTo('App\Model\User');
    }
}

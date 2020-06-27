<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";

    protected $fillable = ['rolename'];
    
    public $timestamps = false;

    public function user () 
    {
        return $this->hasMany('App\Model\User');
    }

}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = "notices";
    
    protected $fillable = ['text', 'user_id'];
    
    public $timestamps = false;

    public function user () 
    {
        return $this->belongsTo('App\Model\User');
    }
}

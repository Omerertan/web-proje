<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Message extends Model
{
    protected $table = "messages";

    protected $fillable = ['text','user_id'];
    
    public $timestamps = false;

    public function user () 
    {
        return $this->belongsTo('App\Model\User');
    }
}

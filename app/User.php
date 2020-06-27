<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 
        'lastname',
        'birthday',
        'password',
        'email',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;

    public function role () 
    {
        return $this->belongsTo('App\Model\Role');
    }
    public function message () 
    {
        return $this->hasMany('App\Model\Message');
    }
    public function notice () 
    {
        return $this->hasMany('App\Model\Notice');
    }

}

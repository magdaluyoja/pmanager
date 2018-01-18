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
        'name', 'email', 'password', 'first_name', 'middle_name', 'last_name', 'city', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

<<<<<<< HEAD
=======
    public function comments(){
        return $this->hasMany('App\Comment');
    }

>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function companies(){
        return $this->hasMany('App\Company');
    }

    public function tasks(){
        return $this->belongsToMany('App\Task');
    }

    public function projects(){
        return $this->belongsToMany('App\Project');
    }
<<<<<<< HEAD

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }
=======
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
}

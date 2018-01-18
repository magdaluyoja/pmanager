<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
    	'name', 'description', 'user_id'
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function projects(){
        return $this->hasMany('App\Project');
    }
<<<<<<< HEAD

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }
=======
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
}

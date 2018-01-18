<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
    	'name', 'description', 'days', 'company_id', 'user_id'
    ];

<<<<<<< HEAD
=======

>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function company(){
        return $this->belongsTo('App\Company');
    }
<<<<<<< HEAD
    
    public function tasks(){
        return $this->hasMany('App\Task');
    }

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }
=======
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
}

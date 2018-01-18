<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $fillable = [
    	'name', 'description', 'days', 'hours', 'project_id', 'company_id', 'user_id'
    ];

    public function project(){
        return $this->belongsTo('App\Project');
    }

    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }
<<<<<<< HEAD

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }
=======
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
}

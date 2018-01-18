<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'body', 'url', 'user_id', 'commentable_id', 'commentable_type'
    ];
<<<<<<< HEAD

    public function commentable(){
    	return $this->morphTo();
    }

    public function user(){
    	return $this->hasOne('App\User','id', 'user_id');
    }
=======
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
}

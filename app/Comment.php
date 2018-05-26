<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    public function course(){
        return $this->belongsTo('App\Course','course_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function sub_comments(){
        return $this->hasMany('App\SubComment', 'comment_id');
    }
}

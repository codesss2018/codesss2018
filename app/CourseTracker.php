<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseTracker extends Model
{
    //

    public function course(){
        return $this->belongsTo('App\Course','course_id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function code_session(){
        return $this->belongsTo('App\CodeSession', 'session_id');
    }
}

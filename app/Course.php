<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    protected $guarded = [];

    public function code_session(){
        return $this->belongsTo('App\CodeSession', 'course_id');
    }

    public function tutorials(){
        return $this->hasMany('App\Tutorial', 'course_id');
    }

    public function quizzes(){
        return $this->hasMany('App\Quiz', 'quiz_id');
    }

    public function comments(){
        return $this->hasMany('App\Comment', 'course_id');
    }

    public function course_trackers(){
        return $this->hasMany('App\CourseTracker', 'course_id');
    }

    public function certificate(){
        return $this->belongsTo('App\Certificate', 'certificate_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}

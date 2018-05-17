<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //

    public function quiz_trackers(){
        return $this->hasMany('App\QuizTracker', 'quiz_id');
    }

    public function course(){
        return $this->belongsTo('App\Course', 'course_id');
    }
}

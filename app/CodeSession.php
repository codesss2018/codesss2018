<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodeSession extends Model
{

    protected $dates = [
        'created_at',
        'updated_at',
        'start_date',
        'end_date'
    ];

    protected $guarded = [];
    //
    public function courses(){
        return $this->hasMany('App\Course','course_id');
    }

    public function code_session_trackers(){
        return $this->hasMany('App\CodeSessionTracker', 'session_id');
    }

    public function tutorial_trackers(){
        return $this->hasMany('App\TutorialTracker', 'session_id');
    }

    public function course_trackers(){
        return $this->hasMany('App\CourseTracker', 'session_id');
    }

    public function quiz_trackers(){
        return $this->hasMany('AppQuizTracker', 'session_id');
    }
}

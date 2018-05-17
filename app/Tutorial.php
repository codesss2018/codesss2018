<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    //

    public function course(){
        return $this->belongsTo('App\Course', 'course_id');
    }

    public function tutorial_trackers(){
        return $this->hasMany('App\TutorialTracker', 'tutorial_id');
    }
}

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
    //
    public function courses(){
        return $this->hasMany('App\Course','course_id');
    }

    public function code_session_trackers(){
        return $this->hasMany('App\CodeSessionTracker', 'session_id');
    }
}

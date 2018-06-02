<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorialTracker extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function tutorial(){
        return $this->belongsTo('App\Tutorial', 'tutorial_id');
    }

    public function code_session(){
        return $this->belongsTo('App\CodeSession', 'session_id');
    }
}

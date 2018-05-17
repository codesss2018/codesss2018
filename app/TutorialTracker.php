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
}

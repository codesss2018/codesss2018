<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizTracker extends Model
{
    //

    public function quiz(){
        return $this->belongsTo('App\Quiz', 'quiz_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}

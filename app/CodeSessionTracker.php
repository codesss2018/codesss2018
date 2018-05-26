<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodeSessionTracker extends Model
{
    //

    protected $fillable = ['session_id','user_id']; 

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function code_session(){
        return $this->belongsTo('App\CodeSession', 'session_id');
    }
}

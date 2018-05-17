<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function code_session_trackers(){
        return $this->hasMany('App\CodeSessionTracker', 'user_id');
    }

    public function tutorial_trackers(){
        return $this->hasMany('App\TutorialTracker', 'user_id');
    }

    public function quiz_trackers(){
        return $this->hasMany('App\QuizTracker', 'user_id');
    }
}

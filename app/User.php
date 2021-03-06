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
        'name', 'email', 'password', 'phone',
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

    public function comments(){
        return $this->hasMany('App\Comment', 'user_id');
    }

    public function course_trackers(){
        return $this->hasMany('App\CourseTracker', 'user_id');
    }

    public function certificate_trackers(){
        return $this->hasMany('App\CertificateTracker', 'user_id');
    }

    public function sub_comments(){
        return $this->hasMany('App\SubComment', 'user_id');
    }

    public function courses(){
        return $this->hasMany('App\Course', 'user_id');
    }
}

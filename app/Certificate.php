<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    //

    public function courses(){
        return $this->hasMany('App\Course', 'certificate_id');
    }

    public function certificate_trackers(){
        return $this->hasMany('App\CertificateTracker', 'certificate_id');
    }
}

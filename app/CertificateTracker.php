<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificateTracker extends Model
{
    //

    public function certificate(){
        return $this->belongsTo('App\Certificate', 'certificate_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'certificate_id');
    }
}

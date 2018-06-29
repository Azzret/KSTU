<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    public function faculty()
    {
        return $this->belongsTo('App\Faculty');
    }

    public function applicants()
    {
        return $this->hasMany('App\Applicant');
    }
}

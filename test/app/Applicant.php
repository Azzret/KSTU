<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $guarded = [];


    public function school()
    {
        return $this->belongsTo('App\School');
    }

    public function place()
    {
        return $this->belongsTo('App\Place');
    }

    public function faculty()
    {
        return $this->belongsTo('App\Faculty');
    }

    public function specialty()
    {
        return $this->belongsTo('App\Specialty');
    }
}
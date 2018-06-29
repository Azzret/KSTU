<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function specialties()
    {
        return $this->hasMany('App\Specialty');
    }
    public function applicants()
    {
        return $this->hasMany('App\Applicant');
    }
}

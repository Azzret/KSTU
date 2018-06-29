<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function applicants()
    {
        return $this->hasMany('App\Applicant');
    }
}

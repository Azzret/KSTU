<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function applicants()
    {
        return $this->hasMany('App\Applicant');
    }
}

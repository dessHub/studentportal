<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Registration extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'semester', 'session', 'regNo', 'course', 'year', 'academic_year', 'year_of_study'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}

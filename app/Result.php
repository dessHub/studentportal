<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Result extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'semester', 'session', 'regNo', 'course', 'year', 'academic_year', 'year_of_study','test', 'marks', 'unit',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}

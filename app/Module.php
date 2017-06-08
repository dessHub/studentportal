<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Module extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'semester', 'session', 'course', 'code', 'year', 'academic_year',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}

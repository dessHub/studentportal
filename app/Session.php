<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Session extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'semester', 'start', 'end', 'year', 'academic_year',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}

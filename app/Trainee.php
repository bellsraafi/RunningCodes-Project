<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'first_name',
            'last_name',
            'email',
            'dob',
            'trainee_id',
            'password',
            'confirmation_code'
	];

	/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}

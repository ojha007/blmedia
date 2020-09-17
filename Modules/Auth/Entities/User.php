<?php


namespace Modules\Auth\Entities;


use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = [
        'user_name', 'email', 'password', 'super', 'status', 'avatar',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

}

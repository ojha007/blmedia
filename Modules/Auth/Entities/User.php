<?php


namespace Modules\Auth\Entities;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use Notifiable, SoftDeletes;

    protected $fillable = [
        'user_name', 'email', 'full_name',
        'password', 'status', 'avatar',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

}

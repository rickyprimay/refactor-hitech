<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Participant extends Authenticatable
{
    use Notifiable;

    protected $guard = 'participant';

    protected $fillable = [
        'name', 'email', 'password','phone'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


}

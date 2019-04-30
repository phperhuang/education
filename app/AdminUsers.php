<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUsers extends Authenticatable
{
    //
    use Notifiable;

    protected $table = 'admin_users';

    protected $fillable = [
        'name', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}

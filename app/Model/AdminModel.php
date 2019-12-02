<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class AdminModel extends Authenticatable
{
    //
    public $table = 'admins';
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password'
    ];

    protected $hidden= [
        'password','remember_token',
    ];

    protected $casts = [
        'email_verified_at'=>'datetime',
    ];
}

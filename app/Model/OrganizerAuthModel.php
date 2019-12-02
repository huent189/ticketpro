<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class OrganizerAuthModel extends Authenticatable
{
    //
    //
    public $table = 'organizersauth';
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

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    //
    protected $table = 'users';
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password', 'provider', 'provider_id'
    ];
    protected $hidden= [
        'password','remember_token',
    ];

    protected $casts = [
        'email_verified_at'=>'datetime',
    ];
    public function bookings()
    {
        return $this->hasMany('App\Booking', 'customerId');
    }
}




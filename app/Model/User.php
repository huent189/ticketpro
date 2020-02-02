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
        'name', 'email', 'password', 'provider', 'providerId','avata'
    ];
    protected $hidden= [
        'password','remember_token','providerId','password'
    ];

    protected $casts = [
        'email_verified_at'=>'datetime',
    ];
    public function bookings()
    {
        return $this->hasMany('App\Booking', 'userId');
    }
    public function events()
    {
        return $this->hasMany('App\Event', 'userId');
    }
    public function booking()
    {
        return $this->belongsTo('App\Booking', 'userId');
    }
}




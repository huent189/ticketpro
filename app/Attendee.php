<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Attendee extends Model
{
    protected $table = 'attendees';
    protected $keyType = 'string';
    protected $fillable = ['eventId', 'bookingId', 'firstName', 'lastName', 'email', 'ticketClassId', 'pdfTicketPath'];
    public function booking()
    {
        return $this->belongsTo('App\Booking', 'bookingId');
    }
    public function ticketClass()
    {
        return $this->belongsTo('App\TicketClass', 'ticketClassId');
    }
    public function event()
    {
        return $this->belongsTo('App\Event', 'eventId');
    }
    public static function boot()
    {
        parent::boot();
        self::creating(function($model){
            $model->ticketCode = Str::random(6);
        });
    }
}

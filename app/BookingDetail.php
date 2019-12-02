<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $bookingId
 * @property integer $ticketClassId
 * @property string $ticketCode
 * @property string $created_at
 * @property string $updated_at
 * @property Booking $booking
 * @property TicketClass $ticketClass
 */
class BookingDetail extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'bookingDetails';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ticketCode';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['bookingId', 'ticketClassId', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function booking()
    {
        return $this->belongsTo('App\Booking', 'bookingId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ticketClass()
    {
        return $this->belongsTo('App\TicketClass', 'ticketClassId');
    }
}

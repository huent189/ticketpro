<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * @property integer $id
 * @property integer $eventId
 * @property string $type
 * @property int $price
 * @property int $numberAvailable
 * @property int $total
 * @property string $created_at
 * @property string $updated_at
 * @property Event $event
 * @property BookingDetail[] $bookingDetails
 */
class TicketClass extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ticketClasses';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['eventId', 'type', 'price', 'numberAvailable', 'total', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo('App\Event', 'eventId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookingDetails()
    {
        return $this->hasMany('App\BookingDetail', 'ticketClassId');
    }
    public function getQuantityReservedAttribute()
    {
        $reserved_total = DB::table('reserved_tickets')
        ->where('ticket_id', $this->id)
        ->where('expires', '>', Carbon::now())
        ->sum('quantity_reserved');
        return $reserved_total;
    }
    public function getQuantityRemainingAttribute()
    {
        return ($this->numberAvailable - $this->getQuantityReservedAttribute());
    }
}

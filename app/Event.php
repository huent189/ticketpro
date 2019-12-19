<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property integer $categoryId
 * @property integer $organizerId
 * @property string $startTime
 * @property string $endTime
 * @property string $description
 * @property string $image
 * @property integer $locationId
 * @property string $startSellingTime
 * @property string $endSellingTime
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property Category $category
 * @property Location $location
 * @property Organizer $organizer
 * @property TicketClass[] $ticketClasses
 */
class Event extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'categoryId', 'organizerId', 'startTime', 'endTime', 'description', 'image', 'locationId', 'startSellingTime', 'endSellingTime', 'status', 'created_at', 'updated_at','ticketMap'];
    protected $dates = ['startTime', 'endTime'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'categoryId');
    }
    public function attendees()
    {
        return $this->hasMany('App\Attendee', 'bookingId');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        
        return $this->belongsTo('App\Location', 'locationId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organizer()
    {
        return $this->belongsTo('App\Organizer', 'organizerId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ticketClasses()
    {
        return $this->hasMany('App\TicketClass', 'eventId');
    }
    public function minPrice()
    {
//        dd($this->ticketClasses);
        $minPrice=0;
        if(count($this->ticketClasses)>0)
        {
            $minPrice=$this->ticketClasses[0]->price;
        }
        foreach($this->ticketClasses as $ticket)
        {
            if($ticket->price<$minPrice)
            {
                $minPrice=$ticket->price;
            }
        }

        return $minPrice;
    }

}

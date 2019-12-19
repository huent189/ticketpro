<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
/**
 * @property integer $id
 * @property integer $customerId
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property int $totalPrice
 * @property int $discountPrice
 * @property Customer $customer
 * @property BookingDetail[] $bookingDetails
 */
class Booking extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'booking';
    public $rules = [
        'booking_first_name' => 'required',
        'booking_last_name'  => 'required',
        'booking_email'      => 'required|email',
        'booking_phone'      => 'required'   
    ];
    public $fail_messages = [
        'booking_first_name.required' => "Bạn phải nhập đầy đủ tên",
        'booking_last_name.required'  => "Bạn phải nhập đầy đủ họ",
        'booking_email.required'  => "Bạn phải nhập đầy đủ email",
        'booking_email.email'  => "Email không đúng",
        'booking_phone.required'      => "Bạn phải nhập đầy đủ số điện thoại"
    ];
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['userId', 'status', 'created_at', 'updated_at', 'totalPrice', 'discountPrice', 'totalQuantity'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Model\User', 'userId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookingDetails()
    {
        return $this->hasMany('App\BookingDetail', 'bookingId');
    }
    public function attendees()
    {
        return $this->hasMany('App\Attendee', 'bookingId');
    }
    public function event()
    {
        return $this->belongsTo('App\Event', 'eventId');
    }
    public static function boot()
    {
        parent::boot();
        self::creating(function($model){
            $model->transactionId = uniqid();
        });
    }
}

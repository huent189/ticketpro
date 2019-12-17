<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    protected $fillable = ['customerId', 'status', 'created_at', 'updated_at', 'totalPrice', 'discountPrice'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customerId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookingDetails()
    {
        return $this->hasMany('App\BookingDetail', 'bookingId');
    }
    public function event()
    {
        return $this->belongsTo('App\Event', 'eventId');
    }
}

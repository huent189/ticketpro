<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $profileImage
 * @property string $website
 * @property string $phone
 * @property string $email
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property Event[] $events
 */
class Organizer extends Model
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
    protected $fillable = ['id','name', 'profileImage', 'website', 'phone', 'email', 'description', 'created_at', 'updated_at','bankAccountNumber','bankAccountName'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events()
    {
        return $this->hasMany('App\Event', 'organizerId');
    }
}

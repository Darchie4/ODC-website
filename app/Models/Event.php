<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'start_time',
        'end_time',
        'location_id',
        'external_address',
        'short_description',
        'long_description',
        'visible',
        'internal_only',
        'signup_needed',
        'signup_link',
    ];

    // Define the "location" relationship
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    // Define the "eventPictures" relationship
    public function eventPictures(): HasMany
    {
        return $this->hasMany(EventPicture::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserLocation extends Model
{
    use HasFactory;

    protected $fillable = ['ip', 'countryName', 'countryCode', 'regionCode', 'regionName', 'cityName', 'zipCode', 'latitude', 'longitude'];

    public function userLocation(): BelongsTo
    {
        return $this->belongsTo(UserLocation::class);
    }
}

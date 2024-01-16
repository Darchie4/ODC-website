<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventPicture extends Model
{
    use HasFactory;
    protected $fillable = ['image_path', 'event_id'];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}

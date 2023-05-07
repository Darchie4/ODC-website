<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['lesson_name', 'age', 'day', 'lesson_start_time', 'lesson_end_time', 'location_id', 'danceStyle'];

    public function teachers(): BelongsToMany
    {
        return $this->belongsToMany(Teacher::class);
    }
    public function location(): HasOne
    {
        return $this->hasOne(Location::class);
    }
    public function danceStyle(): HasOne
    {
        return $this->hasOne(DanceStyle::class);
    }

}

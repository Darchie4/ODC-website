<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LessonTimeLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'week_day',
        'start_time',
        'end_time',
        'lesson_id',
        'location_id',
    ];

    /**
     * Get the lesson
     */
    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }

    /**
     * Get the lesson
     */
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function dayName(): string
    {
        return ucfirst(Carbon::create(Carbon::getDays()[$this->week_day == 6 ? 0 : $this->week_day+1])->locale('da')->dayName);
    }
}

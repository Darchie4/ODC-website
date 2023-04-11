<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['lesson_name', 'age', 'day', 'lesson_start_time', 'lesson_end_time', 'teacher_id', 'location_id'];

    public function teacher(): HasOne
    {
        return $this->hasOne(Teacher::class);
    }
    public function location(): HasOne
    {
        return $this->hasOne(Location::class);
    }

}

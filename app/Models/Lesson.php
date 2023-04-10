<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['lesson_name', 'age', 'day', 'lesson_start_time', 'lesson_end_time', 'teacher_id', 'location_id'];

}

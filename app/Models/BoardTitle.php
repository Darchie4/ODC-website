<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardTitle extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'sorting_index',
    ];
}

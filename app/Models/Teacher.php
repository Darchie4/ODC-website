<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Symfony\Component\Yaml\Yaml;

class Teacher extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'shortDescription', 'longDescription', 'imgName'];
    /**
     * @return array
     */

    public function lesson(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

}

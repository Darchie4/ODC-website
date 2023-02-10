<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Yaml\Yaml;

class Teacher extends Model
{
    use HasFactory;

    /*
    protected String $name;
    protected String $teacherID;
    protected String $shortDescription;
    protected String $longDescription;
    protected String $imgName;
    protected String $lessons;
    */

    protected $fillable = ['name', 'teacherID', 'shortDescription', 'longDescription', 'imgName', 'lessons'];
    /**
     * @return array
     */



    /*


    */

}

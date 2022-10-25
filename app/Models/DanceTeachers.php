<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Yaml\Yaml;

class DanceTeachers extends Model
{
    use HasFactory;

    protected String $name;
    protected String $teacherID;
    protected String $shortDescription;
    protected String $longDescription;
    protected String $imgName;

    protected $fillable = ['name', 'teacherID', 'shortDescription', 'shortDescription', 'imgName'];

    /**
     * @return array
     */



    public static function getAllTeachers(): array
    {
        $dir    = public_path() . '/teachersData/teachers.yml';

        $teachersMap = YAML::parse(file_get_contents($dir), YAML::PARSE_OBJECT_FOR_MAP);
        $teachers = [];
        foreach ($teachersMap as $teacher){
            $fileShortDescription = file_get_contents(public_path() . '/teachersData/description/'. $teacher -> teacherID.'ShortDescription.txt');
            $fileLongDescription = file_get_contents(public_path() . '/teachersData/description/'. $teacher -> teacherID.'LongDescription.txt');
            $teachers[] = new DanceTeachers([
                'name' => $teacher -> name,
                'teacherID' => $teacher -> teacherID,
                'shortDescription' => $fileShortDescription,
                'longDescription' => $fileLongDescription,
                'imgName' => $teacher -> teacherID . $teacher -> imgType
            ]);

        }

        return $teachers;
    }

}

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
    protected String $lessons;

    protected $fillable = ['name', 'teacherID', 'shortDescription', 'longDescription', 'imgName', 'lessons'];

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

    public static function getTeacher($paramTeacherID): ?DanceTeachers
    {
        $dir    = public_path() . '/teachersData/teachers.yml';

        $teachersMap = YAML::parse(file_get_contents($dir), YAML::PARSE_OBJECT_FOR_MAP);
        foreach ($teachersMap as $teacher){
            if ($teacher -> teacherID != $paramTeacherID){
                continue;
            }
            $fileShortDescription = file_get_contents(public_path() . '/teachersData/description/'. $teacher -> teacherID.'ShortDescription.txt');
            $fileLongDescription = file_get_contents(public_path() . '/teachersData/description/'. $teacher -> teacherID.'LongDescription.txt');
            return new DanceTeachers([
                'name' => $teacher -> name,
                'teacherID' => $teacher -> teacherID,
                'shortDescription' => $fileShortDescription,
                'longDescription' => $fileLongDescription,
                'lessons' => $teacher -> lessons,
                'imgName' => $teacher -> teacherID . $teacher -> imgType
            ]);

        }
        return null;
    }

}

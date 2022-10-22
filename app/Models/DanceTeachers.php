<?php

namespace App\Models;

use DirectoryIterator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\NoReturn;
use Symfony\Component\Yaml\Yaml;

class DanceTeachers extends Model
{
    use HasFactory;

    protected String $name;
    protected String $description;
    protected String $imgName;

    protected $fillable = ['name', 'description', 'imgName'];

    /**
     * @return array
     */



    public static function getAllTeachers(): array
    {
        $dir    = public_path() . '/teacherDescriptionsAndPictures/teachers.yml';

        $teachersMap = YAML::parse(file_get_contents($dir), YAML::PARSE_OBJECT_FOR_MAP);
        $teachers = [];
        foreach ($teachersMap as $teacher){
            $teachers[] = new DanceTeachers([
                'name' => $teacher -> name,
                'description' => $teacher -> description,
                'imgName' => $teacher -> imgName
            ]);

        }

        return $teachers;
    }

}

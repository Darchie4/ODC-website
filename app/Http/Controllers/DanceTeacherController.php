<?php

namespace App\Http\Controllers;

use App\Models\DanceTeacher;
use Illuminate\Database\Eloquent\Collection;
use Symfony\Component\Yaml\Yaml;

class DanceTeacherController extends Controller
{
    public static function getAllTeachers(): Collection
    {
        return DanceTeacher::all();
    }

    public static function getTeacher($paramTeacherID): DanceTeacher
    {
        return DanceTeacher::all() -> where("teacherID", $paramTeacherID) -> first();
    }

    public static function getAllTeachersOLD(): array
    {
        $dir = public_path() . '/teachersData/teachers.yml';

        $teachersMap = YAML::parse(file_get_contents($dir), YAML::PARSE_OBJECT_FOR_MAP);
        $teachers = [];
        foreach ($teachersMap as $teacher) {
            $fileShortDescription = file_get_contents(public_path() . '/teachersData/description/' . $teacher->teacherID . 'ShortDescription.txt');
            $fileLongDescription = file_get_contents(public_path() . '/teachersData/description/' . $teacher->teacherID . 'LongDescription.txt');
            $teachers[] = new DanceTeacher([
                'name' => $teacher->name,
                'teacherID' => $teacher->teacherID,
                'shortDescription' => $fileShortDescription,
                'longDescription' => $fileLongDescription,
                'imgName' => $teacher->teacherID . $teacher->imgType
            ]);

        }

        return $teachers;
    }

    public static function getTeacherOLD($paramTeacherID): ?DanceTeacher
    {
        $dir = public_path() . '/teachersData/teachers.yml';

        $teachersMap = YAML::parse(file_get_contents($dir), YAML::PARSE_OBJECT_FOR_MAP);
        foreach ($teachersMap as $teacher) {
            if ($teacher->teacherID != $paramTeacherID) {
                continue;
            }
            $fileShortDescription = file_get_contents(public_path() . '/teachersData/description/' . $teacher->teacherID . 'ShortDescription.txt');
            $fileLongDescription = file_get_contents(public_path() . '/teachersData/description/' . $teacher->teacherID . 'LongDescription.txt');
            return new DanceTeacher([
                'name' => $teacher->name,
                'teacherID' => $teacher->teacherID,
                'shortDescription' => $fileShortDescription,
                'longDescription' => $fileLongDescription,
                'lessons' => $teacher->lessons,
                'imgName' => $teacher->teacherID . $teacher->imgType
            ]);

        }
        return null;
    }


}

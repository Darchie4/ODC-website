<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="{{ asset('styles/admin/teacher/teacherDelete.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <title>Odense Danse Center</title>

</head>

<body>
@include("adminPages.adminPartials.adminHeaderPartial")

    <article class="with-margin with-flex">

        <h1>Slet underviser</h1>

        Er du sikker på at du vil slette stakkels {{$teacher -> name}}?<br><br><br>

        <div class="buttonContainer">
            <a class="button" href="{{route("admin.teacher.index")}}">Nej! Abort mission</a>
            <a class="button red" href="{{route("admin.teacher.doDelete", ['teacherID' => $teacher -> id])}}">JA! Slet forhelvede</a>
        </div>


    </article>

</body>
</html>

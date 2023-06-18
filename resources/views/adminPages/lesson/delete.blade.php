<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.metatags")
    <meta charset="utf-8">
    <title>Odense Danse Center</title>
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>

    <link rel="stylesheet" href="{{ asset('styles/admin/lesson/index.css') }}"/>


    @include('components.head.tinymce-config')
</head>
<body>
@include("adminPages.adminPartials.adminHeaderPartial")

<main>
    <h1 class="centered">Slet Hold?</h1>

    Er du helt sikker på at du vil <b>Slette</b> {{$lesson->name}}
    <div class="with-flex, centered">
        <a class="commonButtonStyle" href="{{route("admin.lesson.index")}}"> Nej, ABORT MISSION!</a>
        <a class="commonButtonStyle red" href="{{route("admin.lesson.doDestroy", ["lessonID" => $lesson->id])}}"> Yep! Slet det</a>
    </div>
</main>

@include("partials.footer")
</body>
</html>

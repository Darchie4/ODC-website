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
    <h1 class="centered">Hold Overblik</h1>
    <div class="createButtonContainer centered">
        <a class="createLesson" href="{{route("admin.lesson.create")}}">Klik her for at oprette et nyt hold</a>
    </div>

    <section class="lessonsContainer">

        @foreach($danceStyles as $danceStyle)
            <h1>{{$danceStyle->name}}</h1>
            @foreach(\App\Models\Lesson::where('dance_style_id', $danceStyle->id)->get() as $lesson)
                @if($loop->index % 4 == 0)
                    <div class="lessonContainerRow">
                        @endif

                        <div class="lessonContainer">
                                <h2 class="lessonName">{{$lesson -> name}}</h2>
                                <div class="mainInfoContainer">
                                    <b>Alder:</b> {{$lesson -> age_from}} - {{$lesson -> age_to}} <br>
                                    <b>Tidspunkt:</b> {{$lesson -> day}} {{\Carbon\Carbon::parse($lesson -> lesson_start_time)->format('H:i')}}
                                    - {{\Carbon\Carbon::parse($lesson -> lesson_end_time)->format('H:i')}} <br>
                                    <b>Lokation:</b> <a
                                        href="{{route("location.index")}}">{{$lesson -> location -> room_name}}</a> <br>
                                    <b>Stilart:</b> {{$lesson -> skillLevel -> name}} <a
                                        href="{{route("schedule.search", ["styleID" => $lesson -> danceStyle -> id])}}">{{$lesson -> danceStyle -> name}}</a>
                                    <br>
                                    <b>Underviser{{count($lesson -> teachers) > 1 ? "e" : ""}}:</b> <br>
                                    @foreach($lesson->teachers as $teacher)
                                        <a href="{{route("teacherView", ["teacherID" => $teacher->id])}}">{{$teacher -> name}}</a>
                                        <br>
                                @endforeach
                            </div>
                            <div class="buttonContainer">
                                <a class="commonButtonStyle green"
                                   href="{{route("lesson.show", ["lessonID" => $lesson->id])}}">Vis</a>
                                <a class="commonButtonStyle"
                                   href="{{route("admin.lesson.edit", ["lessonID" => $lesson->id])}}">Rediger</a>
                                <a class="commonButtonStyle red"
                                   href="{{route("admin.lesson.destroy", ["lessonID" => $lesson->id])}}">Slet</a>
                            </div>
                        </div>
                        @if($loop -> last || ($loop->index+1)%4 == 0)
                    </div>
                @endif
            @endforeach
        @endforeach


    </section>

</main>

@include("partials.footer")
</body>
</html>

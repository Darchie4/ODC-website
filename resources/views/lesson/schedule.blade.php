<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    @include("partials.metatags")
    <link rel="stylesheet" href="{{ asset('styles/schedule.css') }}"/>
    <script src="{{ asset('js/scheduleHide.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
    <title>Odense Danse Center</title>
</head>

<body>
@include("partials.navbar")

<main>
    <article>
        <div class="programTextContainer">
            <h1>Program</h1>
            Her kan du se en oversigt over hvilke hold Odense Danse Center tilbyder. <br>
            Tilmelding til hold forgår på <a href="https://odensedansecenter.klub-modul.dk/cms/TeamOverviewAlt.aspx">Klubmodul</a>.
            <br>
            Psst! Du kan også bare trykke på holdet i tabellen her uden ;)
        </div>

        <article class="danceStyles">
            <a class="danceStyleButton" href="{{route("schedule")}}">Alle hold</a>

            @foreach($danceStyles as $danceStyle)
                <a class="danceStyleButton" href="{{route("schedule.search", $danceStyle->id)}}">{{$danceStyle -> name}}</a>
            @endforeach


        </article>
        @foreach($danceStyles as $danceStyle)
            <h1>{{$danceStyle->name}}</h1>
        <section class="lessonsContainer">
            @foreach(\App\Models\Lesson::where('dance_style_id', $danceStyle->id)->get() as $lesson)
                @if($loop->index % 2 == 0)
                    <div class="lessonContainerRow">
                @endif
                <div class="lessonContainer">
                    <h3>{{$lesson -> name}}</h3>
                    <div class="mainInfoContainer">
                        <div class="leftInfoContainer">
                            <b>Alder:</b> {{$lesson -> age_from}} - {{$lesson -> age_to}} <br>
                            <b>Tidspunkt:</b> {{$lesson -> day}} {{\Carbon\Carbon::parse($lesson -> lesson_start_time)->format('H:i')}} - {{\Carbon\Carbon::parse($lesson -> lesson_end_time)->format('H:i')}} <br>
                            <b>Lokation:</b> <a
                                href="{{route("location.index")}}">{{$lesson -> location -> room_name}}</a> <br>
                            <b>Stilart:</b> {{$lesson -> skillLevel -> name}} <a href="{{route("schedule.search", ["styleID" => $lesson -> danceStyle -> id])}}">{{$lesson -> danceStyle -> name}}</a>
                            <br>
                        </div>
                        <div class="rightInfoContainer">
                            <b>Underviser{{count($lesson -> teachers) > 1 ? "e" : ""}}:</b> <br>
                            @foreach($lesson->teachers as $teacher)
                                <a href="{{route("teacherView", ["teacherID" => $teacher->id])}}">{{$teacher -> name}}</a>
                                <br>
                            @endforeach
                        </div>
                    </div>
                    <div class="bottomInfoContainer">
                        <h4>Beskrivelse</h4>
                        {{$lesson -> short_description}}
                    </div>
                    <div class="buttonContainer">
                        <a class="lessonButton" href="{{route("lesson.show", ["lessonID" => $lesson->id])}}">Læs mere</a>
                        <a class="lessonButton greenBackground" href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID={{$lesson->km_id}}">Tilmeld</a>
                    </div>
                </div>
                    @if($loop -> last || ($loop->index+1)%2 == 0)
                    </div>
                @endif
            @endforeach
        </section>
        @endforeach



    </article>
</main>

@include("partials.footer")
</body>

</html>

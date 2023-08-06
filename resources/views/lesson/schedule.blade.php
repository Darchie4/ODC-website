@php use App\Models\Lesson;use Carbon\Carbon; @endphp
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
            <h1 class="centered">Program</h1>

            <h2>Tilmelding åben!</h2>

            Så fik vi programmet for 23/24 sæsonen klar og tilmeldingen er nu <b>åben!</b><br>
            Herunder kan du se de stilarter vi tilbyder og ved et hurtigt klik kan du se hvilke hold vi har med præcis
            din yndlings stilart, eller du kan bare rulle ned og kigge igennem alle vores hold, der er med sikkerhed et
            for dig!


            <hr>

            <div class="with-flex">
                <div class="split-space-2">
                    <h3>Træningsmedlemskab</h3>
                    Hos ODC tilbyder vi mulighed for at købe en nøgle til dansesalen så man kan komme og træne når
                    salene ikke er i brug. <br>
                    <a href="https://odensedansecenter.klub-modul.dk/cms/TeamEnrollmentAlt.aspx?TeamNameID=16">Klik her
                        for at læse mere</a>
                </div>

                <hr class="verticalHr">

                <div class="split-space-2">
                    <h3>Støttemedlemskab</h3>
                    Ønsker man at blive et støttemedlem i klubben kan man læse mere om det <a
                        href="https://odensedansecenter.klub-modul.dk/cms/TeamEnrollmentAlt.aspx?TeamNameID=15">her</a>
                </div>
            </div>
            <hr>

            <h1 class="centered">Hold oversigt</h1>


        </div>


        <article class="danceStyles">
            <a class="danceStyleButton" href="{{route("schedule")}}">Alle hold</a>

            @foreach($danceStyles as $danceStyle)
                <a class="danceStyleButton"
                   href="{{route("schedule.search", $danceStyle->id)}}">{{$danceStyle -> name}}</a>
            @endforeach


        </article>
        @foreach($danceStylesToList as $danceStyle)
            @if(!Lesson::where('dance_style_id', $danceStyle->id)->get()->isEmpty())
                <h1>{{$danceStyle->name}}</h1>
                <section class="lessonsContainer">
                    @foreach(Lesson::where('dance_style_id', $danceStyle->id)->get() as $lesson)
                        @if($lesson->is_visible)
                            @if($loop->index % 2 == 0)
                                <div class="lessonContainerRow">
                                    @endif
                                    <div class="lessonContainer">
                                        <h3>{{$lesson -> name}}</h3>
                                        <div class="mainInfoContainer">
                                            <div class="leftInfoContainer">
                                                <b>Alder:</b> {{$lesson -> age_from}} - {{$lesson -> age_to}} <br>
                                                <b>Tidspunkt:</b> {{$lesson -> day}} {{Carbon::parse($lesson -> lesson_start_time)->format('H:i')}}
                                                - {{Carbon::parse($lesson -> lesson_end_time)->format('H:i')}}
                                                <br>
                                                <b>Lokation:</b> <a
                                                    href="{{route("location.index")}}">{{$lesson -> location -> room_name}}</a>
                                                <br>
                                                <b>Stilart:</b> {{$lesson -> skillLevel -> name}} <a
                                                    href="{{route("schedule.search", ["styleID" => $lesson -> danceStyle -> id])}}">{{$lesson -> danceStyle -> name}}</a>
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
                                            <a class="lessonButton"
                                               href="{{route("lesson.show", ["lessonID" => $lesson->id])}}">Læs mere</a>
                                            @if($lesson->is_available)
                                                <a class="lessonButton greenBackground"
                                                   href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID={{$lesson->km_id}}">Tilmeld</a>
                                            @else
                                                <a class="lessonButton redBackground"
                                                   title="Der er pt. lukket for tilmedling på dette hold">Tilmelding
                                                    lukket</a>
                                            @endif

                                        </div>
                                    </div>
                                    @if($loop -> last || ($loop->index+1)%2 == 0)
                                </div>
                            @endif
                        @endif

                    @endforeach
                </section>
            @endif
        @endforeach


    </article>
</main>

@include("partials.footer")
</body>

</html>

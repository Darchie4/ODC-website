@php use App\Models\Lesson;use Carbon\Carbon; @endphp
@extends('layout.publicFull')

@section('head')
    @php($customDescription = true)
    <meta name="description"
          content="Vi tilbyder en enormt bred vifte at stilarter med hold på tværs af næsten alle niveauer så vi kan garantere at der også er et hold for dig.">
    <link rel="stylesheet" href="{{ asset('styles/schedule.css') }}"/>
@endsection

@section('content')
    <article>
        <div class="programTextContainer">
            <h1 class="centered">Hold oversigt</h1>

            <div class="centered">
                <a href="{{asset('others/pdf/Program-24_25.pdf')}}" download rel="noopener noreferrer" target="_blank">
                    Klik her for at downloade vores program
                </a><br>
                Herunder kan du se de stilarter vi tilbyder og ved et hurtigt klik kan du se hvilke hold vi har med præcis
                din yndlings stilart, eller du kan bare rulle ned og kigge igennem alle vores hold, der er med sikkerhed et
                for dig!

            </div>




        </div>

        <div class="danceStylesContainer">
            <h2 class="centered danceStylesTitle">Stilarter</h2>
            <article class="danceStyles centered">

                <a class="danceStyleButton" href="{{route("schedule")}}">Alle hold</a>

                @foreach($danceStyles as $danceStyle)
                    <a class="danceStyleButton"
                       href="{{route("schedule.search", $danceStyle->id)}}">{{$danceStyle -> name}}</a>
                @endforeach
            </article>
        </div>
        <hr class="danceStyleLessonDivider">
    @if(count($danceStylesToList) == 1 && Lesson::where('dance_style_id', $danceStylesToList[0]->id)->get()->isEmpty())
            <div class="noClassesContainer with-flex">
                <b class="centered textRed">Beklager, vi har pt. ingen hold i denne stilart</b>
            </div>
        @endif
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
                                                <b>Tidspunkt:</b> <br>
                                                @foreach($lesson->lessonTimeLocations()->get() as $timeSlot)
                                                    {{$timeSlot->dayName()}} {{Carbon::parse($timeSlot -> start_time)->format('H:i')}}
                                                    - {{Carbon::parse($timeSlot -> end_time)->format('H:i')}} <a href="{{route('location.index')}}">{{$timeSlot -> location()->first() -> room_name}}</a><br>
                                                @endforeach
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

        <hr>
        <div class="with-flex">
            <div class="split-space-2">
                <h3>Træningsmedlemskab</h3>
                <p class="small-text no-margin">
                    I ODC tilbyder vi mulighed for som sportsdanser at deltage i undervisningen på enkeltdage, selvom man er medlem af andre klubber, dette kræver dog et træningsmedlemsskab.  <br>
                    Derudover tilbyder der mulighed for selvtræning i klubbens lokaler for medlemmerne. <br>
                    <a href="https://odensedansecenter.klub-modul.dk/cms/TeamEnrollmentAlt.aspx?TeamNameID=16">Klik her
                        for at læse mere</a>
                </p>
            </div>

            <hr class="verticalHr">

            <div class="split-space-2">
                <h3>Støttemedlemskab</h3>
                <p class="small-text no-margin">
                    Ønsker man at blive et støttemedlem i klubben kan man læse mere om det <a
                        href="https://odensedansecenter.klub-modul.dk/cms/TeamEnrollmentAlt.aspx?TeamNameID=15">her</a>
                </p>
            </div>
        </div>
        <hr>

    </article>
@endsection


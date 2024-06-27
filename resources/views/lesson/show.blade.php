@php use Carbon\Carbon; @endphp
@extends('layout.publicFull')
@section('head')
    <link rel="stylesheet" href="{{ asset('styles/lesson/show.css') }}"/>

@endsection

@section('content')
    <h1>{{$lesson -> name}}</h1>
    <div class="lessonInfoContainer">
        <div class="leftInfoColumn">
            <b>Alder:</b> {{$lesson -> age_from}} - {{$lesson -> age_to}} <br>
            <b>Tid og sted:</b> <br>
            @foreach($lesson->lessonTimeLocations()->get() as $timeSlot)
                {{$timeSlot->dayName()}} {{Carbon::parse($timeSlot -> start_time)->format('H:i')}}
                - {{Carbon::parse($timeSlot -> end_time)->format('H:i')}} <a href="{{route('location.index')}}">{{$timeSlot -> location()->first() -> room_name}}</a><br>
            @endforeach
            <b>Sæson:</b> {{Carbon::parse($lesson->season_start)->format('d/m-y')}}
            - {{Carbon::parse($lesson->season_end)->format('d/m-y')}} <br>
            <b>Stilart:</b> {{$lesson -> skillLevel -> name}} <a
                href="{{route("schedule.search", ["styleID" => $lesson -> danceStyle -> id])}}">{{$lesson -> danceStyle -> name}}</a>
            <br>
            <br>
            @if($lesson->is_available)
                <a class="lessonButton greenBackground"
                   href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID={{$lesson->km_id}}">Tilmeld</a>
            @else
                <a class="lessonButton redBackground"
                   title="Der er pt. lukket for tilmedling på dette hold">Tilmelding lukket</a>
            @endif
            <br>
            <br>

            <h2>Om holdet</h2>
            {!! $lesson -> long_description!!}
        </div>

        <div class="rightInfoContainer">
            <article class="teachersContainer">
                <h2 class="centered">Underviser{{count($lesson -> teachers) > 1 ? "e" : ""}}</h2>
                @foreach($lesson->teachers as $teacher)
                    @if($loop->index % 2 == 0)
                        <div class="teachersRowContainer">
                            @endif
                            @if(count($lesson -> teachers) > 1)
                                <div class="teacherContainer">
                                    @endif
                                    <a class="teacherLink"
                                       href="{{route('teacherView', ['teacherID' => $teacher -> id])}}">
                                        <div class="teacherImgContainer">
                                            <img class="teacherImg"
                                                 src="{{asset("storage/teachersData/image/" . $teacher-> imgName)}}"
                                                 alt="Billede af: {{$teacher-> name}}">
                                        </div>
                                        <article class="teacherInfoContainer">
                                            <h1 class="teacherName">{{$teacher -> name}}</h1>
                                            @if(count($lesson->teachers)<=2)
                                                <p>{{ $teacher -> shortDescription }}</p>
                                            @endif
                                        </article>
                                    </a>
                                    @if(count($lesson -> teachers) > 1)
                                </div>
                            @endif

                            @if($loop -> last)
                        </div>
                    @elseif(($loop->index+1)%2 != 0)
                        <hr class="verticalHr">
            @else
        </div>
        <hr>
        @endif
        @endforeach
        </article>
        <article class="locationContainer">

            <h2 class="centered">Lokation</h2>
            @foreach($lesson->lessonTimeLocations()->take(1)->get() as $timeSlot)

            <h3 class="centered">
                <a href="{{route("location.index")}}">
                    {{$timeSlot -> location()->first()->room_name}}
                </a>
            </h3>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe title="Addresse på Google Maps" width="100%" height="250" id="gmap_canvas"
                            src={{$timeSlot -> location()->first() -> g_maps_embed_link}}
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
            @endforeach

        </article>
    </div>
@endsection


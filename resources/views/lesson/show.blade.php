<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    @include("partials.metatags")
    <link rel="stylesheet" href="{{ asset('styles/lesson/show.css') }}"/>
    <script src="{{ asset('js/scheduleHide.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <title>Odense Danse Center</title>
</head>
@include("partials.navbar")
<main>

    <h1>{{$lesson -> name}}</h1>
    <div class="lessonInfoContainer">
        <div class="leftInfoColumn">
            <b>Alder:</b> {{$lesson -> age_from}} - {{$lesson -> age_to}} <br>
            <b>Tidspunkt:</b> {{$lesson -> day}} {{\Carbon\Carbon::parse($lesson -> lesson_start_time)->format('H:i')}} - {{\Carbon\Carbon::parse($lesson -> lesson_end_time)->format('H:i')}} <br>
            <b>Sæson:</b> {{\Carbon\Carbon::parse($lesson->season_start)->format('d/m-y')}} - {{\Carbon\Carbon::parse($lesson->season_end)->format('d/m-y')}} <br>
            <b>Lokation:</b>
            <a href="{{route("location.index")}}">{{$lesson -> location -> room_name}}</a> <br>
            <b>Stilart:</b> {{$lesson -> skillLevel -> name}} <a href="{{route("schedule.search", ["styleID" => $lesson -> danceStyle -> id])}}">{{$lesson -> danceStyle -> name}}</a> <br>
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
                        <a class="teacherLink" href="{{route('teacherView', ['teacherID' => $teacher -> id])}}">
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
            <h3 class="centered">
                <a href="{{route("location.index")}}">
                    {{$lesson -> location -> room_name}}
                </a>
            </h3>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe title="Addresse på Google Maps" width="100%" height="250" id="gmap_canvas"
                            src={{$lesson -> location -> g_maps_embed_link}}
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </article>
    </div>


</main>
@include("partials.footer")
</html>

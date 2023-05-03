<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.metatags")
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/aboutUsStyles/teachers.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}"/>
    <script src="{{ asset('js/scheduleHide.js')}}"></script>
    <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
    <title>Odense Danse Center</title>
</head>

<body>
@include("partials.navbar")
<main>
    <article>
        <h1>Undervisere</h1>
        Her hos ODC har vi mange super dygtige undervisere, her kan du læse lidt om dem.
        <br><br>
        <div class="teachersContainer">
            @foreach($teachers as $teacher)
                @if($loop->index % 4 == 0)
                    <div class="teachersRowContainer">
                @endif
                <div class="teacherContainer">
                    <a href="/aboutUs/teacherView/{{$teacher -> id}}">
                        <div class="teacherImgContainer">
                            <img class="teacherImg" src="{{asset("storage/teachersData/image/" . $teacher-> imgName)}}"
                                 alt="Billede af: {{$teacher-> name}}">
                        </div>
                        <article class="teacherInfoContainer">
                            <h1 class="teacherName">{{$teacher -> name}}</h1>
                            <p>{!! $teacher -> shortDescription !!}</p>
                        </article>
                    </a>
                @if( Auth::user() != null && Auth::user() -> can("admin"))
                        <br>
                        <button id="mybutton">Rediger</button>
                        <button id="mybutton">Slet</button>
                    @endif
                </div>
                @if($loop -> last)
                    </div>
                @elseif(($loop->index+1)%4 != 0)
                    <hr class="verticalHr">
                @else
                    </div>
                    <hr>
                @endif

            @endforeach
        </div>
    </article>
</main>

@include("partials.footer")
</body>
</html>

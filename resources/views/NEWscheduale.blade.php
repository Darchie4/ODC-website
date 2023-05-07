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
            Tilmelding til hold forgår på <a href="https://odensedansecenter.klub-modul.dk/cms/TeamOverviewAlt.aspx">Klubmodul</a>. <br>
            Psst! Du kan også bare trykke på holdet i tabellen her uden ;)
        </div>
        <div class="lessonsContainer">
            @foreach($lessons as $lesson)
                <div class="lessonContainer">
                    <h1>{{$lesson -> name}}</h1>
                    <h2>Tidspunkt:</h2> {{$lesson -> day}} {{$lesson -> lesson_start_time}} - {{$lesson -> lesson_end_time}}
                    <h2>Lokation:</h2> {{$lesson -> location -> room_name}} {{$lesson -> location -> address}}
                </div>
            @endforeach
        </div>


    </article>
</main>

@include("partials.footer")
</body>

</html>

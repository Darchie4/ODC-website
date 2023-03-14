<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.metatags")
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/aboutUsStyles/teacherView.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}"/>
    <script src="{{ asset('js/scheduleHide.js')}}"></script>
    <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
    <title>Odense Danse Center</title>
</head>

<body>
@include("partials.navbar")
<main>
    <section>
        <article class="teacherContainer">
            <div class="teacherImgContainer">
                <img class="teacherImg" src="{{asset("storage/teachersData/image/" . $teacher -> imgName)}}"
                     alt="Billede af: {{$teacher -> name}}">
            </div>
            <div class="teacherText">
                <h1 class="teacherName">{{$teacher -> name}}</h1>
                <h2>Underviser på:</h2>
                <!--
                <ul>
                @ foreach($teacher -> lessons as $lesson)
                        <li>{}</li>
                    @ endforeach
                </ul>
                -->
            </div>

        </article>
        <article class="teacherDescription">
            <h2 class="aboutTittle">Lidt om {{strtok($teacher -> name, " ")}}</h2>
            <p>{!! $teacher -> longDescription !!}</p>
        </article>

    </section>
</main>

@include("partials.footer")
</body>
</html>

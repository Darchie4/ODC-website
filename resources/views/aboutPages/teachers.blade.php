<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/aboutUsStyles/teachers.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/header.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/schedule.css') }}"/>
    <script src="{{ asset('js/scheduleHide.js')}}"></script>
    <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
    <title>Odense Danse Center</title>
</head>

<body>
<header>
    <div class="topLogoContainer">
        <a href="/">
            <img height="75" src="{{asset("img/logo/darkBlueGackgroundLogo.jpg")}}" alt="Odense Danse Center">
        </a>
    </div>
    <ul>
        <a href="/contact"><li>Kontakt</li></a>
        <div class="aboutUsDropDown">
            <a href="/aboutUs"><li class="navBarActive">Om os</li></a>
            <div class="aboutUsDropdown-content">
                <ul>
                    <a class="dropdown-link" href="/aboutUs/teachers"><li class="dropdown-element">Undervisere</li></a>
                    <a class="dropdown-link" href="/aboutUs/board"><li class="dropdown-element">Bestyrelsen</li></a>
                    <a class="dropdown-link" href="#"><li class="dropdown-element">Generalforsamling</li></a>
                    <a class="dropdown-link" href="#"><li class="dropdown-element">Vedtægter</li></a>
                </ul>
            </div>
        </div>
        <div class="scheduleDropDown">
            <a href="/schedule"><li>Program/Tilmelding</li></a>
            <div class="scheduleDropdown-content">
                <ul>
                    <a class="dropdown-link" href="/schedule" onclick="hide('childDance')"><li class="dropdown-element">Børnedans</li></a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('ballet')"><li class="dropdown-element">Ballet</li></a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('hipHop')"><li class="dropdown-element">HipHop - Odense</li></a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('kPop')"><li class="dropdown-element">K-Pop</li></a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('mgpDance')"><li class="dropdown-element">MGP-Dans</li></a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('showDance')"><li class="dropdown-element">Showhold</li></a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('modern')"><li class="dropdown-element">Moderne</li></a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('tikTok')"><li class="dropdown-element">TikTok-Dance</li></a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('couplesDance')"><li class="dropdown-element">Pardans</li></a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('sportsDance')"><li class="dropdown-element">Sportsdans</li></a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('studyDance')"><li class="dropdown-element">Studiedans</li></a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('danceFit')"><li class="dropdown-element">DanceFit</li></a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('funkyMoms')"><li class="dropdown-element">FunkyMoms</li></a>
                </ul>
            </div>
        </div>
        <a href="/"><li>Forside</li></a>
    </ul>
</header>

<article>
    <h1>Undervisere</h1>
    Her hos ODC har vi mange super dygtige undervisere, her kan du læse lidt om dem.
    <br><br>
    @foreach($teachers as $teacher)
        <div class="teacherContainer">
            <div class="teacherTextContainer">
                <h1 class="teacherName">{{$teacher -> name}}</h1>
                {!! $teacher -> description !!}
            </div>
            <div class="teacherImgContainer">
                <img class="teacherImg" src="{{asset("teacherDescriptionsAndPictures/" . $teacher-> imgName)}}" alt="Billede af: {{$teacher-> name}}">
            </div>
        </div>
        <hr>
    @endforeach


</article>


</body>
</html>

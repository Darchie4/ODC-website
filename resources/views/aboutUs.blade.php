<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/header.css') }}"/>
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
                    <a class="dropdown-link" href="aboutUs/teachers"><li class="dropdown-element">Undervisere</li></a>
                    <a class="dropdown-link" href="aboutUs/board"><li class="dropdown-element">Bestyrelsen</li></a>
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
<h1>ODC er en danseskole</h1>
<h2>Og den er faktisk ret god</h2>
<a>Dimmer</a>

</body>

</html>

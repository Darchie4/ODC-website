<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/frontPage.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/header.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}"/>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v15.0" nonce="7RTev8in"></script>
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
                <a href="/aboutUs"><li>Om os</li></a>
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
            <a href="/"><li class="navBarActive">Forside</li></a>
        </ul>
    </header>

<main>
    <article>
        <img width="1200" src="{{asset("img/logo/ODC_logo_blue_white_background.jpg")}}" alt="Odense Danse Center">
    </article>

    <br><br><br>

    <article class="splitInfoBox">
        <div class="leftInfoColumn">
            <h1>Vinterferie!</h1>
            ODC holder vinterferie i uge 7, så der er desværre ingen dans <br>
            Men vi vender stærkt tilbage i uge 8 med dans som det plejer.<br>
        </div>

        <div class="middleFiller">

        </div>

        <div class="fb-container">
            <div class="fb-page" data-href="https://www.facebook.com/OdenseDanseCenter" data-tabs="timeline" data-width="500" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                <blockquote cite="https://www.facebook.com/OdenseDanseCenter" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/OdenseDanseCenter">Odense Danse Center - ODC</a>
                </blockquote>
            </div>
        </div>
    </article>
</main>

</body>

</html>

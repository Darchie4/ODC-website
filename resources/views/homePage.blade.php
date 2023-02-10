<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/frontPage.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/header.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/footer.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}"/>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v15.0"
            nonce="7RTev8in"></script>
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
        <a href="/contact">
            <li>Kontakt</li>
        </a>
        <div class="aboutUsDropDown">
            <a href="/aboutUs">
                <li>Om os</li>
            </a>
            <div class="aboutUsDropdown-content">
                <ul>
                    <a class="dropdown-link" href="/aboutUs/teachers">
                        <li class="dropdown-element">Undervisere</li>
                    </a>
                    <a class="dropdown-link" href="/aboutUs/board">
                        <li class="dropdown-element">Bestyrelsen</li>
                    </a>
                    <a class="dropdown-link" href="#">
                        <li class="dropdown-element">Generalforsamling</li>
                    </a>
                    <a class="dropdown-link" href="#">
                        <li class="dropdown-element">Vedtægter</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="scheduleDropDown">
            <a href="/schedule">
                <li>Program/Tilmelding</li>
            </a>
            <div class="scheduleDropdown-content">
                <ul>
                    <a class="dropdown-link" href="/schedule" onclick="hide('childDance')">
                        <li class="dropdown-element">Børnedans</li>
                    </a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('ballet')">
                        <li class="dropdown-element">Ballet</li>
                    </a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('hipHop')">
                        <li class="dropdown-element">HipHop - Odense</li>
                    </a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('kPop')">
                        <li class="dropdown-element">K-Pop</li>
                    </a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('mgpDance')">
                        <li class="dropdown-element">MGP-Dans</li>
                    </a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('showDance')">
                        <li class="dropdown-element">Showhold</li>
                    </a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('modern')">
                        <li class="dropdown-element">Moderne</li>
                    </a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('tikTok')">
                        <li class="dropdown-element">TikTok-Dance</li>
                    </a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('couplesDance')">
                        <li class="dropdown-element">Pardans</li>
                    </a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('sportsDance')">
                        <li class="dropdown-element">Sportsdans</li>
                    </a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('studyDance')">
                        <li class="dropdown-element">Studiedans</li>
                    </a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('danceFit')">
                        <li class="dropdown-element">DanceFit</li>
                    </a>
                    <a class="dropdown-link" href="/schedule" onclick="hide('funkyMoms')">
                        <li class="dropdown-element">FunkyMoms</li>
                    </a>
                </ul>
            </div>
        </div>
        <a href="/">
            <li class="navBarActive">Forside</li>
        </a>
    </ul>
</header>

<main>
    <article class="announcmentcontainer">
        <h1>Vinterferie!</h1>
        <p>ODC holder vinterferie i uge 7, så der er desværre ingen dans i den uge. <br>
            Men vi vender stærkt tilbage i uge 8 med dans som det plejer.<br></p>
    </article>

    <article class="dancerContainer">
        <img class="centered dancerImg" src="{{asset("img/logo/ODC_Dancer.png")}}" alt="Odense Danse Center">
    </article>


    <br><br><br>

    <article class="splitInfoBox">
        <div class="leftInfoColumn">
            <h1>Undskyld vi roder...</h1>
            <p>Vores hjemmeside er pt. under ombygning, så nogle ting ser halvfærdige ud og andre mangle eller virke
                slet ikke.<br>
            <h4>Men vi arbejder på det!</h4>
            Vi arbejder på højtryk for at få hjemmesiden færdig. Intil da kan i følge os på vores
            <a href="https://www.facebook.com/OdenseDanseCenter/">FaceBook</a> og
            <a href="https://www.instagram.com/odense_danse_center/">Instagram</a>, hvor vi vil poste kommende events og
            billeder eller videoer af hvad der ellers forgår på danseskolen.


        </div>

        <div class="middleFiller">

        </div>

        <div class="fb-container">
            <div class="fb-page" data-href="https://www.facebook.com/OdenseDanseCenter" data-tabs="timeline"
                 data-width="500" data-height="" data-small-header="true" data-adapt-container-width="true"
                 data-hide-cover="false" data-show-facepile="false">
                <blockquote cite="https://www.facebook.com/OdenseDanseCenter" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/OdenseDanseCenter">Odense Danse Center - ODC</a>
                </blockquote>
            </div>
        </div>
    </article>
</main>

<footer>
    <div class="left">
        <h4>Kontakt</h4>
        <p>Odense Danse Center</p>
        <p>Dalumvej 32D, 5250 Odense SV</p>
        <p>E-mail: Formand@odensedansecenter.dk</p>
        <p>Tlf. Nr.: <a href="tel:+45-31-20-91-96">31 20 91 96</a></p>
        <p>CVR: 36286660</p>
    </div>

    <div class="right">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="529" height="250" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=Dalumvej%2032D,%205250%20Odense%20SV&t=&z=17&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://123movies-to.org">123movies</a><br>
                <style>.mapouter {
                        position: relative;
                        text-align: right;
                        height: 250px;
                        width: 529px;
                    }</style>
                <a href="https://www.embedgooglemap.net"></a>
                <style>.gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 250px;
                        width: 529px;
                    }</style>
            </div>
        </div>
    </div>
</footer>

</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/frontPage.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}"/>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v15.0"
            nonce="7RTev8in"></script>
    <title>Odense Danse Center</title>
</head>

<body>
@include("partials.navbar")

<main>
    <article class="announcmentcontainer">
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

@include("partials.footer")

</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.metatags")
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/frontPage.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
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
            <h1>Sæson 23/24</h1>
            <p>Vi er nu meget tæt på at kunne løfte sløret for et fantastisk program for 23/24! Vi vil i løbet at de næste uger kunne vise det.<br>
            <h3>Vi kan dog allerede nu afsløre vigtige datoer for sæsonen.</h3>

            <b>Lørdag den 1. Juli</b> er der mulighed for at tilmelde sig de forskellige hold. Vi planlægger også et åbenhuscarrangement i august, inden sæsonstart, hvor det er muligt at få en smagsprøve på de forskellige hold.<br><br>
            <b>Mandag den 21. August</b> er der sæsonstart for alle hold, bortset fra pardanserholdene, der starter lidt senere.<br><br>
            <b>Tirsdag den 19. December</b> vil vi holde vores Julebal<br><br>
            <b>Lørdag den 4. Maj 2024</b> holder vi vores store sæsonopvisning<br><br>


            Vi glæder os meget til i nærmeste fremtid at kunne vise det fantastiske spændende program for den kommende sæson.

            <h4>Vi glæder os til at se jer i den kommende sæson.</h4>

            <br><br>


            <h2>Husk at følge os på de scoiale medier!</h2>
            Vi er både på <a href="https://www.facebook.com/OdenseDanseCenter/">FaceBook</a> og
            <a href="https://www.instagram.com/odense_danse_center/">Instagram</a>, hvor vi poster kommende events og
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

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
            <h3>Tilmeldingen er åben!</h3>

            <p>Så er vi klar med programmet for næste sæson. <a href="{{route("schedule")}}">Klik her</a> eller på Program 23/24 i toppen og se de mange spændende hold vi tilbyder i sæson 23/24. Vi har både klassisk pardans
            som fra Vild Med Dans, børnedans, K-pop og alt derimellem så vi kan næsten med garanti sige at der også er noget for dig!</p>

            <h3>Vi kan derudover de afsløre vigtige datoer for sæsonen.</h3>

            <b>Lørdag den 1. Juli</b> er der mulighed for at tilmelde sig de forskellige hold. Vi planlægger også et åbenhuscarrangement i august, inden sæsonstart, hvor det er muligt at få en smagsprøve på de forskellige hold.<br><br>
            <b>Mandag den 14 august</b> starter sportsdans<br><br>
            <b>Mandag den 21. August</b> er der sæsonstart for alle andre hold, bortset fra pardanserholdene, der starter den 4 september.<br><br>
            <b>Søndag den 17. December</b> vil vi holde vores Julebal<br><br>
            <b>Lørdag den 4. Maj 2024</b> holder vi vores store sæsonopvisning<br><br>



            <h4>Vi glæder os til at se jer i den kommende sæson.</h4>

            <br><br>


            <h2>Husk at følge os på de sociale medier!</h2>
            Vi er både på <a href="https://www.facebook.com/OdenseDanseCenter/">Facebook</a> og
            <a href="https://www.instagram.com/odense_danse_center/">Instagram</a>, hvor vi poster kommende events og
            billeder eller videoer af hvad der ellers forgår på danseskolen.
        </div>

        <div class="fb-container">
            <h1>Talent hold audition</h1>
            <br>

            <img src="{{asset("img/other/Ad_for_show.jpeg")}}" alt="">

            <br>
            <br>

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

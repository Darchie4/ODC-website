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
            Vi er godt i gang med sæsonen, men hvis du kan tænke dig en prøvetime, så ring og forhør om mulighederne.<br>
            Står du for at skulle giftes eller blot ønsker hjælp til et danseevent, så står vi også klar. Ring og få en snak med os, så finder vi ud af noget.<br><br>

            <h3>Vi kan derudover de afsløre vigtige datoer for sæsonen</h3>
            <b>Se vores kalender</b> under fanebladet <a href="{{route("about.calendar")}}">Om os</a>, hvor ferie, lukkedag og øvrige begivenheder er markeret<br><br>
            <b>Mandag den 27 november </b>starter billetsalget til Juleballet, og sidste salgsdag er den 9 december<br><br>
            <b>Søndag den 17. December</b> vil vi holde vores Julebal<br><br>
            <b>Lørdag den 4. Maj</b> holder vi vores store sæsonopvisning<br><br>

            <br><br>


            <h2>Husk at følge os på de sociale medier!</h2>
            Vi er både på <a href="https://www.facebook.com/OdenseDanseCenter/">Facebook</a> og
            <a href="https://www.instagram.com/odense_danse_center/">Instagram</a>, hvor vi poster kommende events og
            billeder eller videoer af hvad der ellers forgår på danseskolen.
        </div>

        <div class="rightInfoColumn">

            <h1>Workshops</h1>
            ODC tilstræber at afholde et antal workshops i løbet af sæsonen, hvor vi ofte vil invitere eksterne trænere til at stå for undervisningen. I workshops vil der være bestemte temaer for dagen, hvor der er fokus på at udvikle sin dans og lære nyt på en anden måde end ved den daglige træning. Derudover er det altid super hyggelige dage, hvor vi bliver blandet på tværs af holdene og ofte også med par ude fra andre foreninger og danseskoler. Alle er velkomne og der er også mulighed for at tilkøbe enetimer med vores instruktører.<br><br>

            <b>Lørdag den 27. januar</b> holder vi Workshop med Peter og Helena, <b><a href="https://odensedansecenter.klub-modul.dk/cms/EventOverview.aspx">tilmeld her</a></b>.<br>
            Odense Danse center inviterer til spændende og lærerig workshop med Peter Kristensen og Helena Bakholm, den 27 januar 2024. Peter og Helena vil give den maks gas og øse af deres store erfaring som dansere på højt niveau.<br><br>
            Booking af enetimer, ring eller skriv til Flemming på 51613748.<br>

            <b>Lørdag den 2. marts</b> holder vi Workshop med Julie Graversen<br><br>

            <b>Lørdag den 20 april</b> holder vi workshop med Anders Koch<br><br><br>


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

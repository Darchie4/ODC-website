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

            Vi kan derudover de afsløre vigtige datoer for sæsonen. Se vores kalender under fanebladet <a href="{{route("about.calendar")}}">Om os</a><br><br>
            <b>Lørdag den 28. Oktober</b> er der Halloween fest. Se invitationen på <a href="https://www.facebook.com/OdenseDanseCenter/">Facebook</a> og <a href="https://www.instagram.com/odense_danse_center/">Instagram</a><br><br>
            <b>Fredag den 3. November</b> er der dansecafe for alle pardansere og andre der kan tænke sig en dejlig danseaften. Vi stiller musik og dansegulv til rådighed, og i skal blot komme med dansesko og godt humør.<br><br>
            <b>Søndag den 17. December</b> vil vi holde vores Julebal<br><br>
            <b>Lørdag den 4. Maj</b> holder vi vores store sæsonopvisning<br><br>



            <h4>Vi glæder os til at se jer i den kommende sæson.</h4>

            <br><br>


            <h2>Husk at følge os på de sociale medier!</h2>
            Vi er både på <a href="https://www.facebook.com/OdenseDanseCenter/">Facebook</a> og
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

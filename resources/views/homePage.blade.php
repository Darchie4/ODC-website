@extends('layout.publicFull')

@section('head')
    <link rel="stylesheet" href="{{ asset('styles/frontPage.css') }}"/>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v15.0"
            nonce="7RTev8in"></script>
@endsection

@section('content')
    <article class="announcmentcontainer">
    </article>

    <article class="dancerContainer">
        <img class="centered dancerImg" src="{{asset("img/logo/ODC_Dancer.png")}}" alt="Odense Danse Center">
    </article>

    <br><br><br>

    <article class="splitInfoBox">
        <div class="leftInfoColumn">
            <h1>Tilmeldingen er åben!</h1>
                Så er vi klar med <b>programmet for 24/25 sæsonen</b> Og tilmeldingen er åben!<br>
                Skynd dig ind og tilmeld dig til dit yndlingshold eller se hvilke nye spændende ting vi har på programmet <b><a href="{{route("schedule")}}">her</a></b><br>
                Vi glæder os meget til at se dig igen eller byde dig velkommen for første gang i den kommende sæson.

            <h2>Husk at følge os på de sociale medier!</h2>
            Vi er både på <a href="https://www.facebook.com/OdenseDanseCenter/">Facebook</a> og
            <a href="https://www.instagram.com/odense_danse_center/">Instagram</a>, hvor vi poster kommende events og
            billeder eller videoer af hvad der ellers forgår på danseskolen.
        </div>
        <div class="rightInfoColumn">

            <h1>Workshops</h1>
            Vi kan allerede nu løfte sløret for at vi i den kommende sæson afholder workshop;<br>
            <b>den 25 januar</b>, hvor <b>Peter Poder Christen</b> kommer til Odense<br>
            <b>den 8 marts</b>, hvor vores egen <b>Julie Graversen </b> står for undervisningen. <br>
            Husk allerede nu at sætte kryds i kalenderen på de datoer<br><br>

{{--            <b>Lørdag den 6. april</b> holder vi workshop med Anders Koch <b class="blueText"><a--}}
{{--                    href="https://odensedansecenter.klub-modul.dk/cms/EventOverview.aspx">Tilmed dig--}}
{{--                    her!</a></b><br><br>--}}

            <div class="fb-page" data-href="https://www.facebook.com/OdenseDanseCenter" data-tabs="timeline"
                 data-width="500" data-height="" data-small-header="true" data-adapt-container-width="true"
                 data-hide-cover="false" data-show-facepile="false">
                <blockquote cite="https://www.facebook.com/OdenseDanseCenter" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/OdenseDanseCenter">Odense Danse Center - ODC</a>
                </blockquote>
            </div>
        </div>
    </article>
@endsection

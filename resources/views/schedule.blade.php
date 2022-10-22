<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
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
            <a href="/schedule"><li class="navBarActive">Program/Tilmelding</li></a>
            <div class="scheduleDropdown-content">
                <ul>
                    <a class="dropdown-link" onclick="hide('childDance')"><li class="dropdown-element">Børnedans</li></a>
                    <a class="dropdown-link" onclick="hide('ballet')"><li class="dropdown-element">Ballet</li></a>
                    <a class="dropdown-link" onclick="hide('hipHop')"><li class="dropdown-element">HipHop - Odense</li></a>
                    <a class="dropdown-link" onclick="hide('kPop')"><li class="dropdown-element">K-Pop</li></a>
                    <a class="dropdown-link" onclick="hide('mgpDance')"><li class="dropdown-element">MGP-Dans</li></a>
                    <a class="dropdown-link" onclick="hide('showDance')"><li class="dropdown-element">Showhold</li></a>
                    <a class="dropdown-link" onclick="hide('modern')"><li class="dropdown-element">Moderne</li></a>
                    <a class="dropdown-link" onclick="hide('tikTok')"><li class="dropdown-element">TikTok-Dance</li></a>
                    <a class="dropdown-link" onclick="hide('couplesDance')"><li class="dropdown-element">Pardans</li></a>
                    <a class="dropdown-link" onclick="hide('sportsDance')"><li class="dropdown-element">Sportsdans</li></a>
                    <a class="dropdown-link" onclick="hide('studyDance')"><li class="dropdown-element">Studiedans</li></a>
                    <a class="dropdown-link" onclick="hide('danceFit')"><li class="dropdown-element">DanceFit</li></a>
                    <a class="dropdown-link" onclick="hide('funkyMoms')"><li class="dropdown-element">FunkyMoms</li></a>
                </ul>
            </div>
        </div>
        <a href="/"><li>Forside</li></a>
    </ul>
</header>

<nav>
    <div class="navBoarder">

        <h2 class="navbarTittle">Kategorier</h2>

        <ul>
            <!--<li class="showDanceSport"><a onclick="hide('childDance')">Show Sport (Konkurrencehold)</a></li> -->
            <!-- <li class="showDanceG"><a onclick="hide('childDance')">Showhold i Glamsbjerg</a></li> -->
            <!--<li class="hipHopG"><a onclick="hide('childDance')">HipHop - Glamsbjerg</a></li>-->
            <!--<li class="couplesDance"><a onclick="hide('childDance')">Pardans - begynder</a></li> -->
            <!--<li class="couplesDance"><a onclick="hide('childDance')">Pardans - Let øvet</a></li> -->
            <!--<li class="couplesDance"><a onclick="hide('childDance')">Pardans - Øvet / Rutineret</a></li> -->

            <li><a href="/schedule">Alle hold</a></li>
            <li class="childDance"><a onclick="hide('childDance')">Børnedans</a></li>
            <li class="ballet"><a onclick="hide('ballet')">Ballet</a></li>
            <li class="hipHop"><a onclick="hide('hipHop')">HipHop - Odense</a></li>
            <li class="kPop"><a onclick="hide('kPop')">K-Pop</a></li>
            <li class="mgpDance"><a onclick="hide('mgpDance')">MGP-Dans</a></li>
            <li class="showDance"><a onclick="hide('showDance')">Showhold</a></li>
            <li class="modern"><a onclick="hide('modern')">Moderne</a></li>
            <li class="tikTok"><a onclick="hide('tikTok')">TikTok-Dance</a></li>
            <li class="couplesDance"><a onclick="hide('couplesDance')">Pardans</a></li>
            <li class="sportsDance"><a onclick="hide('sportsDance')">Sportsdans</a></li>
            <li class="studyDance"><a onclick="hide('studyDance')">Studiedans</a></li>
            <li class="danceFit"><a onclick="hide('danceFit')">DanceFit</a></li>
            <li class="funkyMoms"><a onclick="hide('funkyMoms')">FunkyMoms</a></li>
        </ul>
    </div>
</nav>

<article>
    <div class="programTextContainer">
        <h1>Program</h1>
        Her kan du se en oversigt over hvilke hold Odense Danse Center tilbyder. <br>
        Tilmelding til hold forgår på <a href="https://odensedansecenter.klub-modul.dk/cms/TeamOverviewAlt.aspx">Klubmodul</a>. <br>
        Psst! du kan også bare trykke på holdet i tabellen her uden ;)
    </div>

    <hr>

    <div id="lessonDescriptionContainer">

    </div>

    <table class="tg sortable">
        <thead>
        <tr>
            <th class="scheduleTableHead">Hold navn</th>
            <th class="scheduleTableHead">Alder</th>
            <th class="scheduleTableHead">Dag</th>
            <th class="scheduleTableHead">Tid</th>
            <th class="scheduleTableHead">Instruktør</th>
            <th class="scheduleTableHead">Sted</th>
        </tr>
        </thead>
        <tbody>

        <tr class="scheduleTableElementContainer childDanceContainer">
            <td class="scheduleTableElement childDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=122">Børnedans Klasisk</a></td>
            <td class="scheduleTableElement childDance">3-5 År</td>
            <td class="scheduleTableElement childDance">Mandag</td>
            <td class="scheduleTableElement childDance">16:30 - 17:15</td>
            <td class="scheduleTableElement childDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=122">Lisa</a></td>
            <td class="scheduleTableElement childDance"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 2</a></td>

        </tr>
        <tr class="scheduleTableElementContainer childDanceContainer">
            <td class="scheduleTableElement childDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=137">Børnedans Klasisk</a></td>
            <td class="scheduleTableElement childDance">3-5 År</td>
            <td class="scheduleTableElement childDance">Tirsdag</td>
            <td class="scheduleTableElement childDance">16:30 - 17:15</td>
            <td class="scheduleTableElement childDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=137">Sandra</a></td>
            <td class="scheduleTableElement childDance"><a href="https://www.google.com/maps/place/M%C3%A5gevej+7,+5620+Glamsbjerg/@55.2794949,10.1074629,18.62z/data=!4m5!3m4!1s0x464cdac5cdd0a887:0xd4222e14116d07b!8m2!3d55.2791133!4d10.107526">Mågevej 7 - Spejlsalen</a></td>
        </tr>
        <tr class="scheduleTableElementContainer balletContainer">
            <td class="scheduleTableElement ballet"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=129">Børneballet</a></td>
            <td class="scheduleTableElement ballet">3-5 År</td>
            <td class="scheduleTableElement ballet">Onsdag</td>
            <td class="scheduleTableElement ballet">16:30 - 17:15</td>
            <td class="scheduleTableElement ballet"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=129">Melanie</a></td>
            <td class="scheduleTableElement ballet"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        <tr class="scheduleTableElementContainer mgpDanceContainer">
            <td class="scheduleTableElement mgpDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=123">MGP</a></td>
            <td class="scheduleTableElement mgpDance">5-8 År</td>
            <td class="scheduleTableElement mgpDance">Mandag</td>
            <td class="scheduleTableElement mgpDance">17:20 - 18:10</td>
            <td class="scheduleTableElement mgpDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=123">Lisa</a></td>
            <td class="scheduleTableElement mgpDance"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 2</a></td>
        </tr>
        <tr class="scheduleTableElementContainer mgpDanceContainer">
            <td class="scheduleTableElement mgpDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=138">MGP</a></td>
            <td class="scheduleTableElement mgpDance">5-8 År</td>
            <td class="scheduleTableElement mgpDance">Tirsdag</td>
            <td class="scheduleTableElement mgpDance">17:20 - 18:10</td>
            <td class="scheduleTableElement mgpDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=138">Sandra</a></td>
            <td class="scheduleTableElement mgpDance"><a href="https://www.google.com/maps/place/M%C3%A5gevej+7,+5620+Glamsbjerg/@55.2794949,10.1074629,18.62z/data=!4m5!3m4!1s0x464cdac5cdd0a887:0xd4222e14116d07b!8m2!3d55.2791133!4d10.107526">Mågevej 7 - Spejlsalen</a></td>
        </tr>
        <tr class="scheduleTableElementContainer balletContainer">
            <td class="scheduleTableElement ballet"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=130">Junior ballet</a></td>
            <td class="scheduleTableElement ballet">5-8 År</td>
            <td class="scheduleTableElement ballet">Onsdag</td>
            <td class="scheduleTableElement ballet">17:20 - 18:10</td>
            <td class="scheduleTableElement ballet"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=130">Melanie</a></td>
            <td class="scheduleTableElement ballet"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        <tr class="scheduleTableElementContainer showDanceContainer">
            <td class="scheduleTableElement showDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=124">Showhold 1</a></td>
            <td class="scheduleTableElement showDance">8 - 10 År</td>
            <td class="scheduleTableElement showDance">Tirsdag</td>
            <td class="scheduleTableElement showDance">16:30 - 17:20</td>
            <td class="scheduleTableElement showDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=124">Summer</a></td>
            <td class="scheduleTableElement showDance"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        <tr class="scheduleTableElementContainer tikTokContainer">
            <td class="scheduleTableElement tikTok"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=141">TikTok-Dance</a></td>
            <td class="scheduleTableElement tikTok">8 - 10 År</td>
            <td class="scheduleTableElement tikTok">Onsdag</td>
            <td class="scheduleTableElement tikTok">16:30 - 17:20</td>
            <td class="scheduleTableElement tikTok"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=141">Sandra</a></td>
            <td class="scheduleTableElement tikTok"><a href="https://www.google.com/maps/place/M%C3%A5gevej+7,+5620+Glamsbjerg/@55.2794949,10.1074629,18.62z/data=!4m5!3m4!1s0x464cdac5cdd0a887:0xd4222e14116d07b!8m2!3d55.2791133!4d10.107526">Mågevej 7 - Spejlsalen</a></td>
        </tr>
        <tr class="scheduleTableElementContainer hipHopContainer">
            <td class="scheduleTableElement hipHop"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=144">HipHop Girlz Only</a></td>
            <td class="scheduleTableElement hipHop">7 - 10 År</td>
            <td class="scheduleTableElement hipHop">Tirsdag</td>
            <td class="scheduleTableElement hipHop">16:30 - 17:20</td>
            <td class="scheduleTableElement hipHop"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=144">Lisa</a></td>
            <td class="scheduleTableElement hipHop"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 2</a></td>
        </tr>
        <tr class="scheduleTableElementContainer hipHopContainer">
            <td class="scheduleTableElement hipHop"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=145">HipHop Boyz Only</a></td>
            <td class="scheduleTableElement hipHop">7 - 10 År</td>
            <td class="scheduleTableElement hipHop">Tirsdag</td>
            <td class="scheduleTableElement hipHop">17:20 - 18:10</td>
            <td class="scheduleTableElement hipHop"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=145">Lisa</a></td>
            <td class="scheduleTableElement hipHop"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 2</a></td>
        </tr>
        <tr class="scheduleTableElementContainer sportsDanceContainer">
            <td class="scheduleTableElement sportsDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=118">Sportsdans</a></td>
            <td class="scheduleTableElement sportsDance">7 - 15 År</td>
            <td class="scheduleTableElement sportsDance">Mandag + Torsdag</td>
            <td class="scheduleTableElement sportsDance">16:30 - 18:10</td>
            <td class="scheduleTableElement sportsDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=118">Simon H</a></td>
            <td class="scheduleTableElement sportsDance"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        <tr class="scheduleTableElementContainer showDanceContainer">
            <td class="scheduleTableElement showDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=125">Showhold 2</a></td>
            <td class="scheduleTableElement showDance">10 - 12 År</td>
            <td class="scheduleTableElement showDance">Tirsdag</td>
            <td class="scheduleTableElement showDance">17:20 - 18:10</td>
            <td class="scheduleTableElement showDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=125">Summer</a></td>
            <td class="scheduleTableElement showDance"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        <tr class="scheduleTableElementContainer showDanceContainer">
            <td class="scheduleTableElement showDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=142">Showdance Junior</a></td>
            <td class="scheduleTableElement showDance">10 - 12 År</td>
            <td class="scheduleTableElement showDance">Onsdag</td>
            <td class="scheduleTableElement showDance">17:20 - 18:10</td>
            <td class="scheduleTableElement showDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=142">Sandra</a></td>
            <td class="scheduleTableElement showDance"><a href="https://www.google.com/maps/place/M%C3%A5gevej+7,+5620+Glamsbjerg/@55.2794949,10.1074629,18.62z/data=!4m5!3m4!1s0x464cdac5cdd0a887:0xd4222e14116d07b!8m2!3d55.2791133!4d10.107526">Mågevej 7 - Spejlsalen</a></td>
        </tr>
        <tr class="scheduleTableElementContainer showDanceContainer">
            <td class="scheduleTableElement showDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=147">Showdance Konkurrence</a></td>
            <td class="scheduleTableElement showDance">11 - 15 År</td>
            <td class="scheduleTableElement showDance">Mandag</td>
            <td class="scheduleTableElement showDance">18:10 - 19:00</td>
            <td class="scheduleTableElement showDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=147">Amalie</a></td>
            <td class="scheduleTableElement showDance"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 2</a></td>
        </tr>
        <tr class="scheduleTableElementContainer hipHopContainer">
            <td class="scheduleTableElement hipHop"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=143">HipHop Teens</a></td>
            <td class="scheduleTableElement hipHop">10 - 13 År</td>
            <td class="scheduleTableElement hipHop">Tirsdag</td>
            <td class="scheduleTableElement hipHop">18:10 - 19:00</td>
            <td class="scheduleTableElement hipHop"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=143">Sandra</a></td>
            <td class="scheduleTableElement hipHop"><a href="https://www.google.com/maps/place/M%C3%A5gevej+7,+5620+Glamsbjerg/@55.2794949,10.1074629,18.62z/data=!4m5!3m4!1s0x464cdac5cdd0a887:0xd4222e14116d07b!8m2!3d55.2791133!4d10.107526">Mågevej 7 - Spejlsalen</a></td>
        </tr>
        <tr class="scheduleTableElementContainer hipHopContainer">
            <td class="scheduleTableElement hipHop"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=146">HipHop Teens</a></td>
            <td class="scheduleTableElement hipHop">11 - 16 År</td>
            <td class="scheduleTableElement hipHop">Tirsdag</td>
            <td class="scheduleTableElement hipHop">18:10 - 19:00</td>
            <td class="scheduleTableElement hipHop"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=146">Lisa</a></td>
            <td class="scheduleTableElement hipHop"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 2</a></td>
        </tr>
        <tr class="scheduleTableElementContainer showDanceContainer">
            <td class="scheduleTableElement showDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=126">Showhold 3</a></td>
            <td class="scheduleTableElement showDance">12 - 16 År</td>
            <td class="scheduleTableElement showDance">Tirsdag</td>
            <td class="scheduleTableElement showDance">18:10 - 19:00</td>
            <td class="scheduleTableElement showDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=126">Summer</a></td>
            <td class="scheduleTableElement showDance"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        <tr class="scheduleTableElementContainer kPopContainer">
            <td class="scheduleTableElement kPop"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=127">K-Pop</a></td>
            <td class="scheduleTableElement kPop">12 - 16 År</td>
            <td class="scheduleTableElement kPop">Tirsdag</td>
            <td class="scheduleTableElement kPop">19:00 - 19:50</td>
            <td class="scheduleTableElement kPop"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=127">Summer</a></td>
            <td class="scheduleTableElement kPop"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        <tr class="scheduleTableElementContainer modernContainer">
            <td class="scheduleTableElement modern"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=131">Moderne</a></td>
            <td class="scheduleTableElement modern">12 - 16 År</td>
            <td class="scheduleTableElement modern">Onsdag</td>
            <td class="scheduleTableElement modern">18:10 - 19:00</td>
            <td class="scheduleTableElement modern"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=131">Melanie</a></td>
            <td class="scheduleTableElement modern"><a href="https://www.google.com/maps/place/M%C3%A5gevej+7,+5620+Glamsbjerg/@55.2794949,10.1074629,18.62z/data=!4m5!3m4!1s0x464cdac5cdd0a887:0xd4222e14116d07b!8m2!3d55.2791133!4d10.107526">Mågevej 7 - Spejlsalen</a></td>
        </tr>
        <tr class="scheduleTableElementContainer showDanceContainer">
            <td class="scheduleTableElement showDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=143">Showdance Teens</a></td>
            <td class="scheduleTableElement showDance">???????</td>
            <td class="scheduleTableElement showDance">Onsdag</td>
            <td class="scheduleTableElement showDance">18:10 - 19:00</td>
            <td class="scheduleTableElement showDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=143">Sandra</a></td>
            <td class="scheduleTableElement showDance"><a href="https://www.google.com/maps/place/M%C3%A5gevej+7,+5620+Glamsbjerg/@55.2794949,10.1074629,18.62z/data=!4m5!3m4!1s0x464cdac5cdd0a887:0xd4222e14116d07b!8m2!3d55.2791133!4d10.107526">Mågevej 7 - Spejlsalen</a></td>
        </tr>
        <tr class="scheduleTableElementContainer sportsDanceContainer">
            <td class="scheduleTableElement sportsDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=119">Sportsdans</a></td>
            <td class="scheduleTableElement sportsDance">14 - 19 År + Voksne</td>
            <td class="scheduleTableElement sportsDance">Mandag + Torsdag</td>
            <td class="scheduleTableElement sportsDance">17:20 - 19:50</td>
            <td class="scheduleTableElement sportsDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=119">Simon H</a></td>
            <td class="scheduleTableElement sportsDance"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        <tr class="scheduleTableElementContainer kPopContainer">
            <td class="scheduleTableElement kPop"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=148">K-Pop</a></td>
            <td class="scheduleTableElement kPop">Voksne (16+ År)</td>
            <td class="scheduleTableElement kPop">Tirsdag</td>
            <td class="scheduleTableElement kPop">20:00 - 20:50</td>
            <td class="scheduleTableElement kPop"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=148">Summer</a></td>
            <td class="scheduleTableElement kPop"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        <tr class="scheduleTableElementContainer funkyMomsContainer">
            <td class="scheduleTableElement funkyMoms"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=140">FunkyMoms</a></td>
            <td class="scheduleTableElement funkyMoms">Voksne</td>
            <td class="scheduleTableElement funkyMoms">Tirsdag</td>
            <td class="scheduleTableElement funkyMoms">19:00 - 19:50</td>
            <td class="scheduleTableElement funkyMoms"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=140">Sandra</a></td>
            <td class="scheduleTableElement funkyMoms"><a href="https://www.google.com/maps/place/M%C3%A5gevej+7,+5620+Glamsbjerg/@55.2794949,10.1074629,18.62z/data=!4m5!3m4!1s0x464cdac5cdd0a887:0xd4222e14116d07b!8m2!3d55.2791133!4d10.107526">Mågevej 7 - Spejlsalen</a></td>
        </tr>
        <tr class="scheduleTableElementContainer danceFitContainer">
            <td class="scheduleTableElement danceFit"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=150">Dancefit</a></td>
            <td class="scheduleTableElement danceFit">Voksne</td>
            <td class="scheduleTableElement danceFit">Mandag</td>
            <td class="scheduleTableElement danceFit">19:00 - 19:50</td>
            <td class="scheduleTableElement danceFit"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=150">Amalie</a></td>
            <td class="scheduleTableElement danceFit"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 2</a></td>
        </tr>
        <tr class="scheduleTableElementContainer couplesDanceContainer">
            <td class="scheduleTableElement couplesDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=133">Pardans - Begynder</a></td>
            <td class="scheduleTableElement couplesDance">Voksne</td>
            <td class="scheduleTableElement couplesDance">Onsdag</td>
            <td class="scheduleTableElement couplesDance">19:50 - 20:40</td>
            <td class="scheduleTableElement couplesDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=133">Simon A</a></td>
            <td class="scheduleTableElement couplesDance"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        <tr class="scheduleTableElementContainer couplesDanceContainer">
            <td class="scheduleTableElement couplesDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=120">Pardans - Let øvet</a></td>
            <td class="scheduleTableElement couplesDance">Voksne</td>
            <td class="scheduleTableElement couplesDance">Mandag</td>
            <td class="scheduleTableElement couplesDance">19:50 - 20:40</td>
            <td class="scheduleTableElement couplesDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=120">Simon H</a></td>
            <td class="scheduleTableElement couplesDance"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        <tr class="scheduleTableElementContainer couplesDanceContainer">
            <td class="scheduleTableElement couplesDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=132">Pardans - Let øvet / øvet</a></td>
            <td class="scheduleTableElement couplesDance">Voksne</td>
            <td class="scheduleTableElement couplesDance">Onsdag</td>
            <td class="scheduleTableElement couplesDance">19:00 - 19:50</td>
            <td class="scheduleTableElement couplesDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=132">Simon A</a></td>
            <td class="scheduleTableElement couplesDance"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        <tr class="scheduleTableElementContainer couplesDanceContainer">
            <td class="scheduleTableElement couplesDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=135">Pardans - Let øvet</a></td>
            <td class="scheduleTableElement couplesDance">Voksne</td>
            <td class="scheduleTableElement couplesDance">Torsdag</td>
            <td class="scheduleTableElement couplesDance">19:50 - 20:40</td>
            <td class="scheduleTableElement couplesDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=135">Simon H</a></td>
            <td class="scheduleTableElement couplesDance"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        <tr class="scheduleTableElementContainer couplesDanceContainer">
            <td class="scheduleTableElement couplesDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=121">Pardans - Øvet</a></td>
            <td class="scheduleTableElement couplesDance">Voksne</td>
            <td class="scheduleTableElement couplesDance">Mandag</td>
            <td class="scheduleTableElement couplesDance">20:40 - 21:30</td>
            <td class="scheduleTableElement couplesDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=121">Simon H</a></td>
            <td class="scheduleTableElement couplesDance"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        <tr class="scheduleTableElementContainer couplesDanceContainer">
            <td class="scheduleTableElement couplesDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=136">Pardans - Rutineret (1,5 lektion)</a></td>
            <td class="scheduleTableElement couplesDance">Voksne</td>
            <td class="scheduleTableElement couplesDance">Torsdag</td>
            <td class="scheduleTableElement couplesDance">20:40 - 22:00</td>
            <td class="scheduleTableElement couplesDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=136">Simon H</a></td>
            <td class="scheduleTableElement couplesDance"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        <tr class="scheduleTableElementContainer studyDanceContainer">
            <td class="scheduleTableElement studyDance"><a href="https://odensedansecenter.klub-modul.dk/cms/ProfileMaintainEnrollment.aspx?TeamID=134">Studiedans - Standard &amp; Latin</a></td>
            <td class="scheduleTableElement studyDance">Studerende</td>
            <td class="scheduleTableElement studyDance">Onsdag</td>
            <td class="scheduleTableElement studyDance">20:40 - 21:30</td>
            <td class="scheduleTableElement studyDance"><a href="https://odensedansecenter.klub-modul.dk/cms/visinstruk.aspx?TeamID=134">Simon A</a></td>
            <td class="scheduleTableElement studyDance"><a href="https://www.google.com/maps/place/Odense+Danse+Center/@55.3728254,10.3714114,19.38z/data=!4m13!1m7!3m6!1s0x464cdf85f04cdd23:0x761b0f3a260bc84f!2sDalumvej+32D,+5250+Odense!3b1!8m2!3d55.3728272!4d10.3715401!3m4!1s0x0:0x8b00fa2a2e574f68!8m2!3d55.3726828!4d10.371547">Dalumvej 32D - Sal 1</a></td>
        </tr>
        </tbody>
    </table>
</article>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.metatags")
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/aboutUsStyles/calendar.css') }}"/>
    <title>Odense Danse Center</title>
</head>

<body>
@include("partials.navbar")

<main>

    <h1 class="centered">Kalender og Lukkedage</h1>
    Her kan du se hvilke spændende planer vi har for året og hvilke dage vi tager en pause fra dansen og holder ferie.
    <h2>Lukkedage</h2>
    Vi holder dansefri på følgende datoer:

    <ul>
        <li class="closedDate"><b>16. Oktober - 22. Oktober</b><span>, Efterårsferie</span></li>
        <li class="closedDate"><b>18. December - 3. Januar</b><span>, Juleferie</span></li>
        <li class="closedDate"><b>11. Februar - 18. Februar</b><span>, Vinterferie</span></li>
        <li class="closedDate"><b>26. Marts - 1. April</b><span>, Påske</span></li>
        <li class="closedDate"><b>9. Maj - 12. Maj</b></li>
        <li class="closedDate"><b>20. Maj</b></li>
    </ul>

    <article class="with-flex calendarsContainer">
        <div class="with-flex calendarContainer">
            <h2 class="centered">Kalender 2023</h2>
            <object data={{asset("others/pdf/calendar_Q3-Q4_2023.pdf")}} type="application/pdf" width="100%" height="500px">
                <p>Kunne ikke vise PDF. <a href={{asset("others/pdf/calendar_Q3-Q4_2023.pdf")}}>Klik her</a> for at downloade i stedet.</p>

            </object>
        </div>
        <hr>
        <div class="with-flex calendarContainer">
            <h2 class="centered">Kalender 2024</h2>
            <object data={{asset("others/pdf/calendar_Q1-Q2_2024.pdf")}} type="application/pdf" width="100%" height="500px">
                <p>Kunne ikke vise PDF. <a href={{asset("others/pdf/calendar_Q1-Q2_2024.pdf")}}>Klik her</a> for at downloade i stedet.</p>
            </object>
        </div>
    </article>
</main>

@include("partials.footer")
</body>
</html>

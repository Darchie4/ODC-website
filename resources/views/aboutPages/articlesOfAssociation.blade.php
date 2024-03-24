<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.metatags")
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/aboutUsStyles/articlesOfAssociation.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/schedule.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <script src="{{ asset('js/scheduleHide.js')}}"></script>
    <title>Odense Danse Center</title>
</head>

<body>
@include("partials.navbar")

<main>
    <section>
        <article class="centered">
            <h1>Vedtægter oversigt</h1>

            <p>
                Her kan du læse Odense Danse Centers vedtægter.<br>
                <b>Sidst opdateret: 24-03-2024</b>
            </p>
        </article>

        <object data={{asset("others/pdf/ODC-Vedtægter_24_03_2024.pdf")}} type="application/pdf" width="100%"
                height="500px">
            <p>Kunne ikke vise PDF. <a href={{asset("others/pdf/ODC-Vedtægter_24_03_2024.pdf")}}>Klik her</a> for at
                downloade i stedet.</p>
        </object>
    </section>
</main>


@include("partials.footer")
</body>
</html>

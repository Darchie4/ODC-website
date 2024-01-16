<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.metatags")
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/contact.css') }}"/>
    <title>Odense Danse Center</title>
</head>

<body>
@include("partials.navbar")
<main>
    <article>

        <h1 class="centered">Udmelding</h1>

        <hr>

        <br>


        Udmeldelse <b>SKAL</b> ske skriftligt, ved henvendelse til Odense Danse Center på kasserens mail: <a href="mailto:kasserer@odensedansecenter.dk">kasserer@odensedansecenter.dk</a> <br><br>

        <b>Udmeldelse træder i kraft med øjeblikkelig virkning ved ratebetalte medlemskaber.</b><br>

        Ved udmeldelse i løbet en rate vil der ikke være tilbagebetaling af noget af raten. Der vil dog ikke blive trukket yderligere.<br><br>

        <b>Ved månedlig betaling er der en udmeldelsesperiode på løbende måned plus 30 dage.</b><br>

        Sæsonen er gældende fra medio august 2023 til ultimo juni 2024.<br><br>

        Medlemskab ophører automatisk ved sæsonens udløb.<br>
        OBS dette gælder ikke træningsmedlemskaber, da disse er løbende abonnementer, hvor de almindelige udmeldelsesbetingelser gælder hele året.<br>
        <br>
        <br>
        <hr>

    </article>
</main>


@include("partials.footer")
</body>

</html>

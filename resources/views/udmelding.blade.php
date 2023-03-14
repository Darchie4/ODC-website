<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.metatags")
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/contact.css') }}"/>
    <title>Odense Danse Center</title>
</head>

<body>
@include("partials.navbar")
<main>
    <article>

        <h1>Udmelding</h1>

        <hr>

        <br>

        Udmelding forgår ved at kontakte os gennem de nedenstående kommunikationsveje. <br>

        Vi kan kontaktes mellem kl 16 og 20 i hverdagene mandag-torsdag. <br><br>

        Tlf. <a href="tel:+45-42-36-41-15">42 36 41 15 </a> <br><br>

        Alternativt på mail: <a href="mailto:Formand@odensedansecenter.dk">Formand@odensedansecenter.dk</a><br><br>

        <hr>

    </article>
</main>


@include("partials.footer")
</body>

</html>

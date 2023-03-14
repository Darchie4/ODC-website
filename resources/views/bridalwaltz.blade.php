<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.metatags")
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/bridalwaltz.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}"/>
    <title>Odense Danse Center</title>
</head>

<body>
@include("partials.navbar")

<main>

    <h1>Brudevals</h1>
    <article>
        Her hos Odense Danse Center tilbyder vi også timer i brudevals

        <h2>Kontakt os her</h2>
        Hvis du er interesseret i at høre mere eller bestille tider så kan vi kontaktes mellem kl 16 og 20 i hverdagene mandag-torsdag på nedenstående telefon nummer. <br>

        Tlf. <a href="tel:+45-42-36-41-15">42 36 41 15 </a> <br><br>
    </article>
</main>

@include("partials.footer")

</body>

</html>

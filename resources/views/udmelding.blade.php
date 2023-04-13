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

        Ønsker man at udmelde sig, skal det ske skriftligt via en
            <h3>mail til <a href="mailto:kasserer@odensedansecenter.dk">kasserer@odensedansecenter.dk</a><br></h3>
        NB. Husk udmeldelsesbetingelser er løbende måned + 1 måned.

        <br>
        <br>
        <hr>

    </article>
</main>


@include("partials.footer")
</body>

</html>

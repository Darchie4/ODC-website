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

    <h1>Brudevals på fyn</h1>
    <article>
        Bor du på fyn og ønsker brudevals undervisning, er Odense Danse Center det rigtige valg.<br>
        Vi ligger helt rigtigt placeret i Odense, nærmere Dalum, som er tæt på flere motorvejs til/afkørsler.<br>

        Vi er eksperter i, at undervise i brudevals, men derfor er vi absolut ikke de dyreste. Tværtimod - skal du have kyndig brudevals undervisning på fyn, så er vi i den billige ende, sammenlignet med andre udbydere på fyn og i Odense.<br>

        Om I ønsker brudevals undervisning som en klassisk brudevals eller ønsker individuelle trin, så kan vi håndtere det. Vi er vant til at undervise, både brudevals men også de klassiske standard og latin danse kendt fra fx. vild med dans.<br>

        Kontakt os gerne for en uforpligtende snak om netop jeres brudvals undervisning.<br>

        Vi kan kontaktes både telefonisk og via sms på tlf. <a href="tel:+45-42-36-41-15">42 36 41 15 </a> <br><br>
    </article>
</main>

@include("partials.footer")

</body>

</html>

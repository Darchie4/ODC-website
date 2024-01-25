<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.metatags")
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/event.css') }}"/>
    <title>Odense Danse Center</title>
</head>

<body>
@include("partials.navbar")
<main>
    <article>
        <h1 class="centered titleText">Events</h1>

        <p>
            Hos ODC Bestræber vi os på at holde en masse .......
        </p>

        <h2>Kommende events</h2>

        @foreach($events as $event)
            {{$event->name}}
        @endforeach

    </article>
</main>


@include("partials.footer")
</body>

</html>

@extends('layout.publicFull')

@section('head')
    @php($customDescription = true)
    <meta name="description"
          content="Vi tilbyder en enormt bred vifte at stilarter med hold på tværs af næsten alle niveauer så vi kan garantere at der også er et hold for dig.">
    <link rel="stylesheet" href="{{ asset('styles/schedule.css') }}"/>
    <script src="https://cdn.logwork.com/widget/countdown.js"></script>

@endsection

@section('content')
    <h1>Vi arbejder på sagen!</h1>
    Nu er 23/24 sæsonen slut og en ny sæson venter lige om hjørnet.<br>
    Det betyder selvfølgelig også et nyt program som vi lige pt. arbejder hårdt på at få klar.<br>
    Det nye program bliver offentliggjort <b>den 1. juli</b> og vi håber at se dig igen eller måske for første gang næste sæson.<br>
    God sommer!




    <article>
        <a href="https://logwork.com/countdown-timer" class="countdown-timer" data-style="columns" data-timezone="Europe/Copenhagen" data-language="da" data-date="2024-07-01 12:00">Program offentliggørelse</a>
    </article>
@endsection

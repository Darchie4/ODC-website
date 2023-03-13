<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/partialsStyles/header.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}"/>

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
        <a href="/"><li>Forside</li></a>
        <a href="{{route("admin.index")}}"><li>Admin Forside</li></a>
        <a href="{{route("teacher.index")}}"><li>Underviser Håndtering</li></a>
        <a href="/"><li>Hold håndtering</li></a>
    </ul>
</header>
<main>
    <article>
        <h1>Du er nu logget ind som admin</h1>
    </article>
</main>


</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>

    <title>Odense Danse Center</title>
</head>

<body>
@include("adminPages.adminPartials.adminHeaderPartial")
<main>
    <article>
        <h1>Du er nu logget ind som admin</h1>
    </article>
</main>


</body>
</html>

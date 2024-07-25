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

    <article>
        <h2>Links</h2>
        <ul>
            <li><a href="https://odensedansecenter.klub-modul.dk/default.aspx" target="_blank">Klubmodul</a><br><br></li>
            <li><a href="https://www.simply.com/dk/webmail/" target="_blank">Mail</a><br><br></li>
            <li><a href="https://www.simply.com/dk/controlpanel/odensedansecenter.dk/admin/" target="_blank">Simply</a><br><br></li>
            <li><a href="https://search.google.com/search-console/performance/search-analytics?resource_id=sc-domain%3Aodensedansecenter.dk" target="_blank">Google søge statistikker</a><br><br></li>
        </ul>
    </article>
</main>


</body>
</html>

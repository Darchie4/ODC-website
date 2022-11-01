<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/header.css') }}"/>
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
        <a href="/"><li>Admin Forside</li></a>
        <a href="/"><li>Underviser Håndtering</li></a>
        <a href="/"><li>Hold håndtering</li></a>
    </ul>
</header>

<article>

    <table class="tg sortable">
        <thead>
        <tr>
            <th class="scheduleTableHead">Underviser ID</th>
            <th class="scheduleTableHead">Navn</th>
            <th class="scheduleTableHead">Billede navn</th>
            <th class="scheduleTableHead">Kort beskrivelse</th>
            <th class="scheduleTableHead">Lang beskrivelse</th>
        </tr>
        </thead>
        <tbody>

        @foreach($teachers as $teacher)
        <tr class="scheduleTableElementContainer childDanceContainer">
            <td class="scheduleTableElement childDance">{{$teacher -> teacherID}}</td>
            <td class="scheduleTableElement childDance">{{$teacher -> name}}</td>
            <td class="scheduleTableElement childDance"><a>{{$teacher ->imgName}}</a></td>
            <td class="scheduleTableElement childDance">{{$teacher -> shortDescription}}</td>
            <td class="scheduleTableElement childDance">{{$teacher -> longDescription}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

</article>


</body>
</html>

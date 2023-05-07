<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/admin/teacher/teacherView.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/partialsStyles/header.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <title>Odense Danse Center</title>
</head>

<body>
@include("adminPages.adminPartials.adminHeaderPartial")

<article class="with-margin">
    <div class="createButtonContainer">
        <a href="{{route("admin.teacher.create")}}">Klik her for at oprette en ny underviser</a>
    </div>

</article>

<article class="with-margin">

    <table class="tg sortable">
        <thead>
        <tr>
            <th class="scheduleTableHead">Underviser ID</th>
            <th class="scheduleTableHead">Navn</th>
            <th class="scheduleTableHead">Billede</th>
            <th class="scheduleTableHead">Kort beskrivelse</th>
        </tr>
        </thead>
        <tbody>

        @foreach($teachers as $teacher)
        <tr class="scheduleTableElementContainer childDanceContainer">
            <td class="scheduleTableElement childDance">{{$teacher -> id}}</td>
            <td class="scheduleTableElement childDance">{{$teacher -> name}}</td>
            <td class="scheduleTableElement childDance">
                <img class="teacherImg" height="150" src="{{asset("storage/teachersData/image/" . $teacher-> imgName)}}" alt="Hmm... Der er sket en fejl med billedet af {{$teacher-> name}}">
            </td>
            <td class="scheduleTableElement childDance">{{$teacher -> shortDescription}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

</article>


</body>
</html>

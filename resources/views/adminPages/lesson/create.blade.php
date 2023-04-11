<html>
<head>
    @include("partials.metatags")
    <title>Odense Danse Center</title>
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}"/>
</head>
<body>
@include("adminPages.adminPartials.adminHeaderPartial")

<main>
    <h1>Opret Hold</h1>


    <form action="{{route('lesson.doCreate')}}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="name">Holdets navn</label> <br>
        <input name="name"><br><br>
        <label for="age">Alders krav</label> <br>
        <input name="age"><br><br>
        <label for="day">Uge dag</label><br>
        <input name="day"><br><br>
        <label for="start_time">Start tid</label><br>
        <input name="start_time"><br><br>
        <label for="end_time">Slut tid</label><br>
        <input name="end_time"><br><br>
        <label for="km_id">Klubmodul ID</label><br>
        <input name="km_id" type="number"><br><br>
        <label for="teacher">Underviser</label><br>
        <select id="teacher" name="teacher">
            @foreach($teachers as $teacher)
                <option value={{$teacher -> id}}>{{$teacher -> name}}</option>
            @endforeach
        </select>
        <label for="location">Lokation</label><br>
        <select id="location" name="location">
            @foreach($locations as $location)
                <option value={{$location -> id}}>{{$location -> room_name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Opret">
    </form>
</main>

@include("partials.footer")
</body>
</html>

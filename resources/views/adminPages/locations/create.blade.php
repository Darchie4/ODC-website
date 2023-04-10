<html>
<head>
    @include("partials.metatags")
    <title>Odense Danse Center</title>
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}"/>
</head>
<body>
@include("adminPages.adminPartials.adminHeaderPartial")

<main>
    <h1>Opret lokale</h1>


    <form action="{{route('location.doCreate')}}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="room_name">Lokales navn</label> <br>
        <input name="room_name"><br><br>
        <label for="room_description">Kort beskrivelse</label> <br>
        <textarea name="room_description">Dette er en af ODCs flotte dansesale</textarea><br><br>
        <label for="address">Addresse</label><br>
        <input name="address" type="text"> <br><br>
        <label for="g_maps_embed_link">Link til GMaps embed</label><br>
        <input name="g_maps_embed_link"> <br><br>
        <label for="roomImg">Billede</label> <br>
        <input type="file" name="roomImg" id="roomImg" accept="image/*"> <br><br>
        <input type="submit" value="Opret">
    </form>
</main>

@include("partials.footer")
</body>
</html>

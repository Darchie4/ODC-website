<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.metatags")

    <meta charset="utf-8">
    <title>Odense Danse Center</title>
    <link rel="stylesheet" href="{{ asset('styles/reusables/inputAndFormStyle.css') }}"/>

    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>

    @include('components.head.tinymce-config')
    <script>
        tinymce.init({
            selector: 'textarea#room_description',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded'
        });
    </script>
</head>
<body>
@include("adminPages.adminPartials.adminHeaderPartial")

<main>
    <h1>Opret lokale</h1>

    <form action="{{route('admin.location.doCreate')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="infoContainer">
            <div class="leftInputContainer">
                <label for="room_name">Lokales navn</label> <br>
                <input name="room_name"><br><br>
            </div>
            <div class="middelInfoContainer">
                <label for="address">Addresse</label><br>
                <input name="address" type="text"> <br><br>
            </div>
            <div class="rightInputContainer">
                <label for="g_maps_embed_link">Link til GMaps embed</label><br>
                <input name="g_maps_embed_link"> <br><br>
            </div>
        </div>
        <label for="room_description">Beskrivelse</label> <br>
        <textarea name="room_description" id="room_description"></textarea><br><br>
        <label for="roomImg">Billede</label> <br>
        <input type="file" name="roomImg" id="roomImg" accept="image/*"> <br><br>
        <input type="submit" value="Opret">
    </form>
</main>

@include("partials.footer")
</body>
</html>

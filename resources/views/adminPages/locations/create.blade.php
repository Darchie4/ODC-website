<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.metatags")
    <script src="https://cdn.tiny.cloud/1/c4jyjetaicqxo2qorxx2ygicsi7rddy4mu9rjpjd9i1hqimd/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
    <meta charset="utf-8">
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
        <textarea name="room_description" id="room_description"></textarea><br><br>

        <script>
            tinymce.init({
                selector: 'textarea#room_description',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded'
            });
        </script>
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

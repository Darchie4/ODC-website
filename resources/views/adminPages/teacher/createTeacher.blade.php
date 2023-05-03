<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script src="https://cdn.tiny.cloud/1/c4jyjetaicqxo2qorxx2ygicsi7rddy4mu9rjpjd9i1hqimd/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/partialsStyles/header.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}"/>
    <title>Odense Danse Center</title>
</head>

<body>
@include("adminPages.adminPartials.adminHeaderPartial")

<article class="with-margin">
    <form action="{{route('teacher.doCreate')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Navn</label> <br>
        <input name="name" type="text"> <br><br>
        <label for="km_id">Klubmodul ID</label> <br>
        <input name="km_id" type="number"> <br><br>
        <label for="shortDescription">Kort beskrivelse:</label> <br>
        <textarea name="shortDescription"></textarea><br><br>
        <label for="longDescription">Lang beskrivelse</label> <br>
        <textarea name="longDescription" id="longDescription"></textarea><br><br>
        <script>
            tinymce.init({
                selector: 'textarea#longDescription',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [
                    {value: 'First.Name', title: 'First Name'},
                    {value: 'Email', title: 'Email'},
                ]
            });
        </script>
        <label for="teacherImg">Billede</label> <br>
        <input type="file" name="teacherImg" id="teacherImg" accept="image/*"> <br><br>
        <input type="submit" value="Opret">
    </form>
</article>


</body>
</html>

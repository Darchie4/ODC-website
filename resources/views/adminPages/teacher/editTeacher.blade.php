<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/admin/teacher/editTeacher.css') }}"/>

    <link rel="stylesheet" href="{{ asset('styles/reusables/inputAndFormStyle.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <title>Odense Danse Center</title>

    @include('components.head.tinymce-config')
    <script>
        tinymce.init({
            selector: 'textarea#longDescription',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded'
        });
    </script>
</head>

<body>
@include("adminPages.adminPartials.adminHeaderPartial")

<article class="with-margin">
    <form action="{{route('admin.teacher.doEdit', ['teacherID' => $teacher -> id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <br>
        <h1>Rediger Underviser</h1>
        @if($errors->any())
            <b class="textRed">Der er fejl!</b>
            <ul>
                @foreach($errors->keys() as $key)
                    <li>{{$key}}: {{implode(', ', $errors->get($key))}}</li>
                @endforeach

            </ul>
        @endif
        <div class="infoContainer">
            <div class="leftInputContainer">
                <label for="name">Navn</label> <br>
                <input name="name" type="text" value="{{$teacher -> name}}"> <br>
            </div>
            <div class="middelInfoContainer">
                <label for="shortDescription">Kort beskrivelse:</label> <br>
                <textarea name="shortDescription">{{$teacher -> shortDescription}}</textarea><br>
            </div>
            <div class="rightInputContainer">
                <label for="teacherImg">Billede</label> <br>
                <img class="teacherImg" src="{{asset("storage/teachersData/image/" . $teacher -> imgName)}}"
                alt="Billede af: {{$teacher -> name}}">

                <input type="file" name="teacherImg" id="teacherImg" accept="image/*"> <br>
            </div>
        </div>

        <label for="longDescription">Lang beskrivelse</label> <br>
        <textarea name="longDescription" id="longDescription">{{$teacher -> longDescription}}</textarea><br><br>
        <input type="submit" value="Rediger">
    </form>
</article>


</body>
</html>

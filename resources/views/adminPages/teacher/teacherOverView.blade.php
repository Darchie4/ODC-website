<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/admin/teacher/teacherView.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/partialsStyles/header.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}"/>
    <title>Odense Danse Center</title>
    <script src="https://cdn.tiny.cloud/1/c4jyjetaicqxo2qorxx2ygicsi7rddy4mu9rjpjd9i1hqimd/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
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
        <a href="{{route("admin.index")}}"><li>Admin Forside</li></a>
        <a href="{{route("teacher.index")}}"><li>Underviser Håndtering</li></a>
        <a href="/"><li>Hold håndtering</li></a>
    </ul>
</header>

<article class="with-margin">
    <form action="{{route('teacher.doCreate')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Navn</label> <br>
        <input name="name" type="text"> <br><br>
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
<br><br><br>
<article>

    <table class="tg sortable">
        <thead>
        <tr>
            <th class="scheduleTableHead">Underviser ID</th>
            <th class="scheduleTableHead">Navn</th>
            <th class="scheduleTableHead">Billede</th>
            <th class="scheduleTableHead">Kort beskrivelse</th>
            <th class="scheduleTableHead">Lang beskrivelse</th>
        </tr>
        </thead>
        <tbody>

        @foreach($teachers as $teacher)
        <tr class="scheduleTableElementContainer childDanceContainer">
            <td class="scheduleTableElement childDance">{{$teacher -> id}}</td>
            <td class="scheduleTableElement childDance">{{$teacher -> name}}</td>
            <td class="scheduleTableElement childDance">
                <img class="teacherImg" height="150" src="{{asset("storage/teachersData/image/" . $teacher-> imgName)}}" alt="Hmm... Der er sket en fejl med billedet af: {{$teacher-> name}}">
            </td>
            <td class="scheduleTableElement childDance">{{$teacher -> shortDescription}}</td>
            <td class="scheduleTableElement childDance">
                <p>
                    {!! $teacher -> longDescription!!}
                </p>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

</article>


</body>
</html>

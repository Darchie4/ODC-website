<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.metatags")
    <meta charset="utf-8">
    <title>Odense Danse Center</title>
    <link rel="stylesheet" href="{{ asset('styles/admin/lesson/createLesson.css') }}"/>

    <link rel="stylesheet" href="{{ asset('styles/reusables/inputAndFormStyle.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script>
        $(document).ready(function () {
            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                maxItemCount: 5,
                searchResultLimit: 5,
                renderChoiceLimit: 5
            });
        });
    </script>
    @include('components.head.tinymce-config')
    <script>
        tinymce.init({
            selector: 'textarea#longLessonDescription',
        });
    </script>
</head>
<body>
@include("adminPages.adminPartials.adminHeaderPartial")

<main>
    <h1>Opret Hold</h1>


    <form action="{{route('admin.lesson.doCreate')}}" method="post" enctype="multipart/form-data">
        @csrf



        <div class="infoContainer">
            <div class="leftInputContainer">
                <h2>General information</h2>
                <label for="name">Holdets navn</label> <br>
                <input name="name"><br><br>
                <label for="age">Alders krav</label> <br>
                <input name="age"><br><br>
                <label for="danceStyle">Stil art</label><br>
                <input name="danceStyle" list="danceStyles"
                       placeholder="Ex. Pardans, Hip Hop osv..."/><br><br>
                <datalist id="danceStyles">
                    @foreach($danceStyles as $style)
                        <option value="{{$style->name}}">{{$style->name}}</option>
                    @endforeach
                </datalist>

                <label for="skillLevel">Dygtigheds krav</label><br>
                <input name="skillLevel" list="skillLeveles"
                       placeholder="Ex. Pardans, Hip Hop osv..."/><br><br>
                <datalist id="skillLeveles">
                    @foreach($skillLevels as $skillLevel)
                        <option value="{{$skillLevel->name}}">{{$skillLevel->name}}</option>
                    @endforeach
                </datalist>
                <label for="teachers[]">Underviser(er)</label><br>
                <select id="choices-multiple-remove-button" placeholder="Vælg undervisere" multiple id="teacher"
                        name="teachers[]">
                    @foreach($teachers as $teacher)
                        <option value={{$teacher -> id}}>{{$teacher -> name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="middelInfoContainer">
                <h2>Praktisk information</h2>
                <label for="day">Uge dag</label><br>
                <input name="day"><br><br>
                <label for="start_time">Start tid</label><br>
                <input name="start_time"><br><br>
                <label for="end_time">Slut tid</label><br>
                <input name="end_time"><br><br>
                <label for="location">Lokation</label><br>
                <select id="choices-multiple-remove-button" name="location">
                    @foreach($locations as $location)
                        <option value={{$location -> id}}>{{$location -> room_name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="rightInputContainer">
                <h2>Andet Information</h2>
                <label for="km_id">Klubmodul ID</label><br>
                <input name="km_id" type="number"><br><br>
                <label for="shortLessonDescription">Kort beskrivelse</label> <br>
                <textarea name="shortLessonDescription" id="shortLessonDescription"></textarea><br><br>
            </div>
        </div>



        <label for="longLessonDescription">Lang beskrivelse</label> <br>
        <textarea name="longLessonDescription" id="longLessonDescription"></textarea><br><br>


        <input type="submit" value="Opret">
    </form>
</main>

@include("partials.footer")
</body>
</html>

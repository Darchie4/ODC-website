<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.metatags")
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/admin/event/create.css') }}"/>
    <title>Odense Danse Center</title>

    <script src="{{ asset('js/toggleEventSignupLingField.js') }}"></script>
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
            selector: 'textarea#longDescription',
        });
    </script>
</head>

<body>
@include("adminPages.adminPartials.adminHeaderPartial")
<main>
    <article class="with-margin">
        <form action="{{route('admin.event.doCreate')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h1>Opret Underviser</h1>
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
                    <input name="name" type="text"> <br><br>

                    <label for="start_time">Start tidspunkt</label> <br>
                    <input name="start_time" id="start_time" type="datetime-local" onchange="validateDateTime()"> <br><br>

                    <label for="end_time">Slut tidspunkt</label> <br>
                    <input name="end_time" id="end_time" type="datetime-local" onchange="validateDateTime()"> <br><br>

                </div>

                <div class="middelInfoContainer">
                    <label for="oneLineDescription">En linje beskrivelse:</label> <br>
                    <textarea name="oneLineDescription"></textarea><br><br>

                    <label for="shortDescription">Kort beskrivelse:</label> <br>
                    <textarea name="shortDescription"></textarea><br><br>

                    <label for="showLocation">Ekstern Lokation:</label>
                    <input type="checkbox" id="showLocation" name="showLocation" onchange="toggleLocationFields()"> <br>

                    <div id="textLocationContainer" style="display:none;">
                        <input type="text" id="locationText" name="locationText" placeholder="Indtast Adresse"> <br><br>
                    </div>

                    <div id="selectLocationContainer">
                        <select id="locationSelect" name="location" required>
                            @foreach($locations as $location)
                                <option value={{$location -> id}}>{{$location -> room_name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="rightInputContainer">
                    <label for="teacherImg">Billeder</label> <br>
                    <input type="file" name="teacherImg[]" id="teacherImg" accept="image/*" multiple> <br><br>
                    <ul id="fileList"></ul>

                    <label for="visible">Skjult:</label>
                    <input type="checkbox" id="visible" name="visible"> <br><br>

                    <label for="internal_only">Kun for medlemmer:</label>
                    <input type="checkbox" id="internal_only" name="internal_only"> <br><br>
                    <label for="showSignup">Kræver tilmelding:</label>
                    <input type="checkbox" id="signupNeeded" name="signupNeeded" onchange="toggleSignupField()"> <br><br>

                    <div id="signupFieldContainer" style="display:none;">
                        <label for="signup_link">Tilmeldings Link:</label> <br>
                        <input type="text" id="signup_linkink" name="signup_link">
                    </div>
                </div>
            </div>



            <label for="longDescription">Lang beskrivelse</label> <br>
            <textarea name="longDescription" id="longDescription"></textarea><br><br>
            <input type="submit" value="Opret">


        </form>
    </article>
</main>


@include("partials.footer")
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/admin/location/index.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/partialsStyles/header.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <title>Odense Danse Center</title>
</head>

<body>
@include("adminPages.adminPartials.adminHeaderPartial")
<article class="with-margin with-flex">
    <br>
    <br>
    <h1>Underviser overblik</h1>
    <div class="createButtonContainer">
        <a class="createTeacher" href="{{route("admin.location.create")}}">Klik her for at oprette en ny underviser</a>
    </div>
    <br>
    <br>
    <div class="locationsContainer">
        @foreach($locations as $location)
            <div class="location">

                <div class="locationLeftInfo">
                    <h3>Navn:</h3>{{$location -> room_name}}

                    <h3>Addresse:</h3>{{$location -> address}}<br><br>

                    <h3>Beskrivelse: </h3>
                    {!! $location -> description !!}
                    @if( Auth::user() != null && Auth::user() -> can("admin"))
                        <br>
                        <a class="createTeacher" href="{{route("admin.location.edit", ['locationID' => $location -> id])}}">Rediger</a>
                        <br>
                        <a class="createTeacher red" href="{{route("admin.location.delete", ['locationID' => $location -> id])}}">Slet</a>
                    @endif
                </div>
                <div class="locationInfoRight">
                    <img class="teacherImg" src="{{asset("storage/locationsData/image/" . $location -> image_path)}}"
                         alt="Billede af: {{$location -> room_name}}" height="250">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe title="Addresse på Google Maps" width="100%" height="250" id="gmap_canvas"
                                    src={{$location -> g_maps_embed_link}}
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div> <br>
        @endforeach
    </div>
</article>


</body>
</html>

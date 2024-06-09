@extends('layout.publicFull')

@section('head')
    @php($customDescription = true)
    <meta name="description"
          content="Vi har 2 store flotte sale i Dalum samt et hyggeligt 'venterum' hvor man kan side og få en snak med de andre forældre, mens junior danser eller efter dit hold">
    <link rel="stylesheet" href="{{ asset('styles/locationStyles/locationIndex.css') }}"/>
@endsection

@section('content')
    <article>
        <h1>Lokaler</h1>
        ODC har har {{count($locations)}} flotte dansesale, her kan du se lidt om dem.
        <br><br>
        <div class="locationsContainer">
            @foreach($locations as $location)
                <div class="location">

                    <div class="locationLeftInfo">
                        <h2>{{$location -> room_name}}</h2>

                        <h3>Addresse: {{$location -> address}}</h3><br>
                        {!! $location -> description !!} <br>
                    </div>
                    <div class="locationInfoRight">
                        <img class="teacherImg" src="{{asset("storage/locationsData/image/" . $location -> image_path)}}"
                             alt="Billede af: {{$location -> room_name}}" height = "250">
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
@endsection


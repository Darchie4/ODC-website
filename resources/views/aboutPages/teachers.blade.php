@extends('layout.publicFull')

@section('head')
    @php($customDescription = true)
    <meta name="description"
          content="Vi har en stærk trop mange af dygtige undervisere som til sammen favner en bred vifte af stilarter. Vores undervisere stræber efter at skabe stor udvikling i danserene og have en fantastisk stemning på holdene">
    <link rel="stylesheet" href="{{ asset('styles/aboutUsStyles/teachers.css') }}"/>
@endsection

@section('content')
    <article>
        <h1>Undervisere</h1>
        Her hos ODC har vi mange super dygtige undervisere, her kan du læse lidt om dem.
        <br><br>
        <div class="teachersContainer">
            @foreach($teachers as $teacher)
                @if($loop->index % 4 == 0)
                    <div class="teachersRowContainer">
                @endif
                <div class="teacherContainer">
                    <a href="{{route('teacherView', ['teacherID' => $teacher -> id])}}">
                        <div class="teacherImgContainer">
                            <img class="teacherImg" src="{{asset("storage/teachersData/image/" . $teacher-> imgName)}}"
                                 alt="Billede af: {{$teacher-> name}}">
                        </div>
                        <article class="teacherInfoContainer">
                            <h1 class="teacherName">{{$teacher -> name}}</h1>
                            <p>{!! $teacher -> shortDescription !!}</p>
                        </article>
                    </a>
                </div>
                @if($loop -> last)
                    </div>
                @elseif(($loop->index+1)%4 != 0)
                    <hr class="verticalHr">
                @else
                    </div>
                    <hr>
                @endif

            @endforeach
        </div>
    </article>
@endsection

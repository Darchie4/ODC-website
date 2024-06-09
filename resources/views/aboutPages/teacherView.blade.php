@extends('layout.publicFull')

@section('head')
    <link rel="stylesheet" href="{{ asset('styles/aboutUsStyles/teacherView.css') }}"/>
@endsection

@section('content')
    <section>
        <article class="teacherContainer">
            <div class="teacherImgContainer">
                <img class="teacherImg" src="{{asset("storage/teachersData/image/" . $teacher -> imgName)}}"
                     alt="Billede af: {{$teacher -> name}}">
            </div>
            <div class="teacherText">
                <h1 class="teacherName">{{$teacher -> name}}</h1>
                <h2>Underviser på:</h2>
                <ul>
                @foreach($teacher -> lessons as $lesson)
                    <li><a href="{{route("lesson.show", ["lessonID" => $lesson->id])}}">{{$lesson->name}}</a></li>
                @endforeach
                </ul>

            </div>

        </article>
        <article class="teacherDescription">
            <h2 class="aboutTittle">Lidt om {{strtok($teacher -> name, " ")}}</h2>
            <p>{!! $teacher -> longDescription !!}</p>
        </article>
    </section>
@endsection


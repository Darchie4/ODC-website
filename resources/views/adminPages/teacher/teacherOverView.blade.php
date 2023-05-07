<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/admin/teacher/teacherView.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/partialsStyles/header.css') }}"/>
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
        <a class="createTeacher" href="{{route("admin.teacher.create")}}">Klik her for at oprette en ny underviser</a>
    </div>
    <br>
    <br>


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
                        @if( Auth::user() != null && Auth::user() -> can("admin"))
                            <br>
                            <a class="createTeacher" href="{{route("admin.teacher.edit", ['teacherID' => $teacher -> id])}}">Rediger</a>
                            <br>
                            <a class="createTeacher red" href="{{route("admin.teacher.delete", ['teacherID' => $teacher -> id])}}">Slet</a>
                        @endif
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


</body>
</html>

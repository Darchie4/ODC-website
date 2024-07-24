@extends('layout.publicFull')

@section('head')
    @php($customDescription = true)
    <meta name="description"
          content="Bestyrelsen ved Odense Danse Center består af 1 formand og 5 menige medelemmer">
    <link rel="stylesheet" href="{{ asset('styles/aboutUsStyles/board.css') }}"/>
@endsection

@section('content')
    <h1 class="centered">Bestyrelsen</h1>
    <hr>

    @foreach($boardMembers as $boardMember)
        @if($loop->index % 4 == 0)
            <div class="boardMembersRowContainer">
                @endif
                <div class="boardMemberContainer">
                    <div class="boardMemberImgContainer">
                        <img class="boardMemberImg"
                             src="{{asset("storage/boardMembersData/image/" . $boardMember-> img_path)}}"
                             alt="Billede af: {{$boardMember-> name}}">
                    </div>
                    <article class="boardMemberInfoContainer">
                        <h2 class="boardMemberName">{{$boardMember -> name}}</h2>
                        <h3 class="boardMemberTitle">{{$boardMember->boardTitle->name}} - Valgt {{$boardMember->elected_year}}</h3>
                        <p>{{$boardMember -> description }}</p>
                    </article>
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

@endsection

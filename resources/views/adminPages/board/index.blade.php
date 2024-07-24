<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Odense Danse Center</title>
</head>

<body>
@include("adminPages.adminPartials.adminHeaderPartial")
<main>
    <div class="row cols-2">
        <div class="col">
            <h1>Bestyrelse håndtering</h1>
        </div>
        <div class="col">
            <a class="btn btn-primary" href="{{route('admin.board.create')}}">Opret bestyrelses medlem</a>
        </div>
    </div>

        <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($boardMembers as $boardMember)
            <div class="col">
                <div class="card h-100">
                    <img class="card-img-top" src="{{asset("storage/boardMembersData/image/".$boardMember->img_path)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$boardMember->name}}</h5>
                        <p class="card-text text-center"><small class="text-muted"> {{$boardMember->boardTitle->name}} - Valgt {{$boardMember->elected_year}}</small></p>
                        <p class="card-text">{{$boardMember->description}}</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{route('admin.board.update', ['boardMember' => $boardMember])}}" class="btn btn-primary">Rediger</a>
                        <form class="d-inline-flex m-0 p-0" method="post"
                              action="{{route('admin.board.destroy', $boardMember)}}"
                              onsubmit="return confirm('Sikker på at du vil slette '. {{$boardMember->name}})">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Slet</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

</main>


</body>
</html>

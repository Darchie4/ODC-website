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
    <div class="container">
        <div class="row g-3">
            <div class="col-3">
                <h1>Bestyrelses roller</h1>
                @if($errors->any())
                    <b class="textRed">Der er fejl!</b>
                    <ul>
                        @foreach($errors->keys() as $key)
                            <li>{{implode(', ', $errors->get($key))}}</li>
                        @endforeach
                    </ul>
                @endif
                <h3>Lav ny</h3>
                <div class="row g3">
                    <div class="col-4">
                        <label><b>Navn</b> <b class="text-danger">*</b></label><br>
                    </div>
                    <div class="col-8">
                        <label><b>Sorting Index</b> <b class="text-danger">*</b></label><br>
                    </div>
                </div>
                <form class="row g-3" novalidate action="{{route("admin.boardTitel.doCreate")}}" method="post">
                    @csrf
                    <div class="col-5">
                        <input value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="name"
                               name="name" type="text" required>
                        @error('name')
                            <span class="invalid-feedback">Dette felt er påkrævet</span>
                        @enderror
                        <br>
                    </div>
                    <div class="col-2">
                        <input value="{{old('sorting_index')}}" class="form-control @error('sorting_index') is-invalid @enderror" id="name"
                               name="sorting_index" type="text" required>
                        @error('sorting_index')
                            <span class="invalid-feedback">Dette felt er påkrævet</span>
                        @enderror
                        <br>
                    </div>
                    <div class="col-5">
                    <button class="btn btn-success " type="submit"
                                value="Submit">Opret</button>
                    </div>
                </form>
                <hr>
                <h3>Rediger eksisterende</h3>
                <div class="row g3">
                    <div class="col-4">
                        <label><b>Navn</b> <b class="text-danger">*</b></label><br>
                    </div>
                    <div class="col-8">
                        <label><b>Sorting Index</b> <b class="text-danger">*</b></label><br>
                    </div>
                </div>
                @foreach($boardTitles as $boardTitle)
                    <form class="row g-3" novalidate action="{{route("admin.boardTitel.doUpdate", ['boardTitle' => $boardTitle])}}" method="post">
                        @csrf
                        <div class="col-5">
                            <input value="{{$boardTitle->name}}" class="form-control @error('name') is-invalid @enderror" id="name"
                                   name="name" type="text" required>
                            @error('name')
                                <span class="invalid-feedback">Dette felt er påkrævet</span>
                            @enderror
                            <br>
                        </div>
                        <div class="col-2">
                            <input value="{{$boardTitle->sorting_index}}" class="form-control @error('sorting_index') is-invalid @enderror" id="name"
                                   name="sorting_index" type="text" required>
                            @error('sorting_index')
                                <span class="invalid-feedback">Dette felt er påkrævet</span>
                            @enderror
                            <br>
                        </div>
                        <div class="col-5">
                            <button class="btn btn-success " type="submit"
                                    value="Submit">Opdater</button>

                        </div>
                    </form>
                @endforeach
            </div>
            <div class="col">
                <div class="vr"></div>
            </div>
            <div class="col-8">
                <h1>Opret bestyrelses medlem</h1>
                <form class="row g-3" action="{{route("admin.board.doCreate")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col">
                        <label for="name"><b>Navn</b> <b class="text-danger">*</b></label><br>
                        <input value="{{old('name')}}" class="form-control" id="name"
                               name="name" type="text" required>
                        <br>

                        <label for="boardTitle"><b>Bestyrelses rolle</b> <b class="text-danger">*</b></label> <br>
                        <select class="form-control" name="boardTitle">
                            <option value="" disabled selected hidden>Vælg rolle</option>
                        @foreach($boardTitles as $boardTitle)
                                <option value="{{$boardTitle->id}}">{{$boardTitle->name}}</option>
                            @endforeach
                        </select>
                        <br>

                        <label for="img"><b>Billede</b> <b class="text-danger">*</b></label> <br>
                        <input type="file" name="img" id="img" accept="image/*"> <br>
                    </div>
                    <div class="col">
                        <label for="elected_year"><b>Valgt år</b> <b class="text-danger">*</b></label><br>
                        <input type="number" min="{{now()->year-4}}" max="{{now()->year}}" step="1" value="{{old('elected_year')}}" class="form-control" id="name"
                               name="elected_year" required>
                        <br>

                        <label for="description"><b>Kort beskrivelse</b> <b class="text-danger">*</b></label><br>
                        <textarea class="form-control" id="name" name="description" required>@if(old()){{old('description')}}@endif</textarea>

                    </div>
                    <button class="btn btn-success " type="submit"
                            value="Submit">Opret</button>
                </form>
            </div>
        </div>
    </div>

</main>


</body>
</html>

{{--<form class="d-inline-flex" method="post"--}}
{{--      action="{{route('admin.boardTitel.doDelete', $boardTitle)}}"--}}
{{--      onsubmit="return confirm('Er du sikker på at du vil slette '.{{$boardTitle->name}})">--}}
{{--    @csrf--}}
{{--    @method('DELETE')--}}
{{--    <button type="submit" class="btn btn-danger">Slet</button>--}}
{{--</form>--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/header.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <title>Odense Danse Center</title>
</head>
<body>
<main>
    <form action="{{route('admin.doCreate')}}" method="post">
        @csrf
        <label for="name"><b>Navn</b></label><br>
        <input type="text" placeholder="Navn" name="name" id="name" required><br><br>

        <label for="email"><b>Email</b></label><br>
        <input type="email" placeholder="Email" name="email" id="email" required><br><br>

        <label for="psw"><b>Password</b></label><br>
        <input type="password" placeholder="Adgangskode" name="password" id="psw" required><br><br>

        <label for="psw-repeat"><b>Repeat Password</b></label><br>
        <input type="password" placeholder="Gentag Adgangskode" name="password_confirmation" id="psw-repeat" required><br>

        @if($errors -> any())
            <div class="validationError">
                <ul>
                    @foreach($errors -> all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <hr>

        <button type="submit" class="registerbtn">Register</button>
    </form>
</main>


</body>
</html>

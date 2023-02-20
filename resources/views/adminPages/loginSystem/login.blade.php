<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('styles/header.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}"/>
    <title>Odense Danse Center</title>
</head>
<body>

<form action="{{route('admin.doLogin')}}" method="post">
    @csrf
    <label for="email"><b>Email</b></label><br>
    <input type="email" placeholder="Email" name="email" id="email" required><br><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Adgangskode" name="password" id="psw" required><br><br>

    <hr>

    <button type="submit" class="registerbtn">Login</button>
</form>

</body>
</html>

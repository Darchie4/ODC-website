<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include("partials.metatags")

        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
        <title>Odense Danse Center</title>

        @yield('head')

    </head>
    <body>
    @include("partials.navbar")

        <main>
        @yield('content')
        </main>

    @include("partials.footer")
    </body>
</html>

<!--
{{--@php($customDescription = true)--}}
<meta name="description"
      content="">
-->

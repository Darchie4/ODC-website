@extends('layout.publicFull')

@section('head')
    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    @php($customDescription = true)
    <meta name="description"
          content="Vi kan kontaktes pr telefon mellem kl 18 og 20 i hverdagene mandag-torsdag på 70 60 80 12, eller alternativt på mail: Formand@odensedansecenter.dk">
    <link rel="stylesheet" href="{{ asset('styles/contact.css') }}"/>

@endsection

@section('content')
    <article>

        <h1>Kontakt os</h1>

        <hr>

        <br>

        Vi kan kontaktes mellem kl. 16 og 18 i hverdagene mandag-torsdag. <br><br>

        Tlf. <a href="tel:+45-70-60-80-12">70 60 80 12</a><br><br>

        På facebook: <a href="https://www.facebook.com/OdenseDanseCenter/"> Odense Danse Center </a><br><br>

        Alternativt på mail: <a href="mailto:Formand@odensedansecenter.dk">Formand@odensedansecenter.dk</a><br><br>

        <hr>

    </article>
@endsection

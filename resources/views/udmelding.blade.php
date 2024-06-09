@extends('layout.publicFull')

@section('head')
    @php($customDescription = true)
    <meta name="description"
          content="Udmeldelse skal ske skriftligt, ved henvendelse til Odense Danse Center på kasserens mail: kasserer@odensedansecenter.dk">
    <link rel="stylesheet" href="{{ asset('styles/contact.css') }}"/>
@endsection

@section('content')
    <article>

        <h1>Udmelding</h1>

        <hr>

        <br>


        Udmeldelse <b>SKAL</b> ske skriftligt, ved henvendelse til Odense Danse Center på kasserens mail: <a href="mailto:kasserer@odensedansecenter.dk">kasserer@odensedansecenter.dk</a> <br><br>

        <b>Mailen skal inden holde følgende:</b>
        <ul>
            <li>Fulde navn på medlemmet der skal udmeldes</li>
            <li>Hvilket hold man ønsker at blive udmeldt fra, også hvis man kun er tilmeldt et hold</li>
        </ul><br>

        <b>Udmeldelse træder i kraft med øjeblikkelig virkning ved ratebetalte medlemskaber.</b><br>

        Ved udmeldelse i løbet en rate vil der ikke være tilbagebetaling af noget af raten. Der vil dog ikke blive trukket yderligere.<br><br>

        <b>Ved månedlig betaling er der en udmeldelsesperiode på løbende måned plus 30 dage.</b><br>

        Sæsonen er gældende fra medio august 2023 til ultimo juni 2024.<br><br>

        Medlemskab ophører automatisk ved sæsonens udløb.<br>
        OBS dette gælder ikke træningsmedlemskaber, da disse er løbende abonnementer, hvor de almindelige udmeldelsesbetingelser gælder hele året.<br>
        <br>
        <br>

    </article>
@endsection


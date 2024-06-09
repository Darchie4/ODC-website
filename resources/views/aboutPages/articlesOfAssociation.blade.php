@extends('layout.publicFull')

@section('head')
    <link rel="stylesheet" href="{{ asset('styles/bridalwaltz.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/aboutUsStyles/articlesOfAssociation.css') }}"/>
@endsection

@section('content')
    <section>
        <article class="centered">
            <h1>Vedtægter oversigt</h1>

            <p>
                Her kan du læse Odense Danse Centers vedtægter.<br>
                <b>Sidst opdateret: 25-03-2024</b>
            </p>
        </article>

        <object data={{asset("others/pdf/Vedtægter_22-04-2022.pdf")}} type="application/pdf" width="100%"
                height="500px">
            <p>Kunne ikke vise PDF. <a href={{asset("others/pdf/Vedtægter_22-04-2022.pdf")}}>Klik her</a> for at
                downloade i stedet.</p>
        </object>
    </section>
@endsection

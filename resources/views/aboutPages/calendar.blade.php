@extends('layout.publicFull')

@section('head')
    @php($customDescription = true)
    <meta name="description"
          content="Vi har kalenderen godt fyldt både med ferie og lukkedage men i stor grad også med en bred vifte af fede events lige fra dansecafe for voksne til sodavandsdiskotek og halloween fest for de små.">
    <link rel="stylesheet" href="{{ asset('styles/aboutUsStyles/calendar.css') }}"/>
@endsection

@section('content')
    <h1 class="centered">Kalender og Lukkedage</h1>
    Her kan du se hvilke spændende planer vi har for året og hvilke dage vi tager en pause fra dansen og holder ferie.


    <h2>Vigtige datoer</h2>
    <ul>
        <li class="closedDate"><b>21. August</b><span>, sæsonopstart for sportsdans</span></li>
        <li class="closedDate"><b>19. August</b><span>, sæsonopstart for alle hold bortset fra pardans og dans for studerende</span></li>
        <li class="closedDate"><b>2. September</b><span>, sæsonopstart for pardans og dans for studerende</span></li>
        <li class="closedDate"><b>27 September</b><span>, Danse Cafe</span></li>
        <li class="closedDate"><b>10 November</b><span>, Workshop med Anders Koch</span></li>
        <li class="closedDate"><b>15. November</b><span>, Danse Cafe</span></li>
        <li class="closedDate"><b>15. December</b><span>, Julebal</span></li>
        <li class="closedDate"><b>25 Januar</b><span>, Workshop med Peter og Helena</span></li>
        <li class="closedDate"><b>8. Marts</b><span>, Workshop med Julie</span></li>
        <li class="closedDate"><b>17. Maj</b><span>, Sæsonopvisning</span></li>
        <li class="closedDate"><b>22. Juni</b><span>, Dansesæson slut</span></li>
    </ul>

    <h2 class="centered">Kalender for sæson 2024/2025</h2>
    <object data={{asset("others/pdf/Kalender_2024-2025.pdf")}} type="application/pdf" width="100%" height="500px">
        <p>Kunne ikke vise PDF. <a href={{asset("others/pdf/Kalender_2024-2025.pdf")}}>Klik her</a> for at downloade i stedet.</p>
    </object>
    <b>NB!</b> Dage markeret med <b>*</b> I kalenderne nedenfor er der stadig undervisning for konkurrenceholdene
@endsection

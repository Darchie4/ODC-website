<header>
    <div class="headerContentContainer">
        <link rel="stylesheet" href="{{ asset('styles/partialsStyles/header.css') }}"/>
        <div class="topLogoContainer">
            <a href="/">
                <img class="headerLogo" src="{{asset("img/logo/darkBlueGackgroundLogo.jpg")}}" alt="Odense Danse Center">
            </a>
        </div>
        <ul class="rowLinkContainer">
            <a class="headerRowLink" href="{{route('contact')}}"><li>Kontakt</li></a>
            <a class="headerRowLink" href="/udmelding"><li>Udmelding</li></a>
            <div class="aboutUsDropDown">
                <a class="headerRowLink" href="{{route('about.index')}}"><li class="navBarActive">Om os▾</li></a>
                <div class="aboutUsDropdown-content">
                    <ul>
                        <a class="dropdown-link" href="{{route('about.calendar')}}"><li class="dropdown-element">Kalender</li></a>
                        <a class="dropdown-link" href="{{route('teacher.index')}}"><li class="dropdown-element">Undervisere</li></a>
                        <a class="dropdown-link" href="{{route('location.index')}}"><li class="dropdown-element">Lokaler</li></a>
                        <a class="dropdown-link" href="http://www.jensesport.dk/danseskole-klubber/odense-dansecenter.html"><li class="dropdown-element">Klub tøj</li></a>
                        <a class="dropdown-link" href="/aboutUs/board"><li class="dropdown-element">Bestyrelsen</li></a>
                        <a class="dropdown-link" href="#"><li class="dropdown-element">Generalforsamling</li></a>
                        <a class="dropdown-link" href="#"><li class="dropdown-element">Vedtægter</li></a>
                    </ul>
                </div>
            </div>
            <a href="{{route('events.list')}}"><li>Events</li></a>
            <a href="{{route('schedule')}}"><li>Program</li></a>
            <a href="{{route('bridalwaltz')}}"><li>Brudevals</li></a>
            <a href="/"><li>Forside</li></a>
        </ul>
    </div>
</header>

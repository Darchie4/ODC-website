<header>
    <div class="headerContentContainer">
        <link rel="stylesheet" href="{{ asset('styles/partialsStyles/header.css') }}"/>
        <div class="topLogoContainer">
            <a href="/">
                <img class="headerLogo" src="{{asset("img/logo/darkBlueGackgroundLogo.jpg")}}" alt="Odense Danse Center">
            </a>
        </div>
        <ul class="rowLinkContainer">
            <a class="headerRowLink" href="/contact"><li>Kontakt</li></a>
            <a class="headerRowLink" href="/udmelding"><li>Udmelding</li></a>
            <div class="aboutUsDropDown">
                <a class="headerRowLink" href="/aboutUs"><li class="navBarActive">Om os</li></a>
                <div class="aboutUsDropdown-content">
                    <ul>
                        <a class="dropdown-link" href="/aboutUs/teachers"><li class="dropdown-element">Undervisere</li></a>
                        <a class="dropdown-link" href="/aboutUs/locations"><li class="dropdown-element">Lokaler</li></a>
                        <a class="dropdown-link" href="/aboutUs/board"><li class="dropdown-element">Bestyrelsen</li></a>
                        <a class="dropdown-link" href="#"><li class="dropdown-element">Generalforsamling</li></a>
                        <a class="dropdown-link" href="#"><li class="dropdown-element">Vedtægter</li></a>
                    </ul>
                </div>
            </div>
            <a href="http://www.jensesport.dk/danseskole-klubber/odense-dansecenter.html"><li>Klub tøj</li></a>
            <a href="/schedule"><li>Program/Tilmelding</li></a>
            <a href="/brudevals"><li>Brudevals</li></a>
            <a href="/"><li>Forside</li></a>
        </ul>
    </div>
</header>

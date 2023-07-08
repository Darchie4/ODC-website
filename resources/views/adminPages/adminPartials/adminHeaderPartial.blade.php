
<header>
    <div class="headerContentContainer">
        <link rel="stylesheet" href="{{ asset('styles/partialsStyles/header.css') }}"/>
        <div class="topLogoContainer">
            <a href="/">
                <img class="headerLogo" src="{{asset("img/logo/darkBlueGackgroundLogo.jpg")}}" alt="Odense Danse Center">
            </a>
        </div>
        <ul class="rowLinkContainer">
            <a class="headerRowLink" href="/"><li>Normal Forside</li></a>
            <a class="headerRowLink" href="{{route("admin.index")}}"><li>Admin Forside</li></a>
            <a class="headerRowLink" href="{{route("admin.teacher.index")}}"><li>Undervisere</li></a>
            <a class="headerRowLink" href="{{route("admin.lesson.index")}}"><li>Hold</li></a>
            <a class="headerRowLink" href="{{route("admin.location.index")}}"><li>Lokationer</li></a>
            <a class="headerRowLink" href="/stats"><li>Statistikker</li></a>
        </ul>
    </div>
</header>

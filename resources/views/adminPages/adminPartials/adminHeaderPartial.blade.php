<header>
    <div class="topLogoContainer">
        <a href="/">
            <img height="75" src="{{asset("img/logo/darkBlueGackgroundLogo.jpg")}}" alt="Odense Danse Center">
        </a>
    </div>
    <ul>
        <a href="/"><li>Forside</li></a>
        <a href="{{route("admin.index")}}"><li>Admin Forside</li></a>
        <a href="{{route("teacher.index")}}"><li>Underviser Håndtering</li></a>
        <a href="{{route("lesson.create")}}"><li>Hold håndtering</li></a>
        <a href="{{route("location.create")}}"><li>Lokation håndtering</li></a>
    </ul>
</header>

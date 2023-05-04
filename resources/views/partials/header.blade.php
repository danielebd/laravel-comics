<header>
    <a id="logo" href="{{route('comics')}}">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
    </a>
    <div id="menu">
        <ul>
            <li><a href="#">CHARACTERS</a></li>
            <li class="{{ Str::startsWith(Route::currentRouteName(), 'comic') ? 'active' : ''}}"><a href="{{ route('comics') }}">COMICS</a></li>
            <li><a href="#">MOVIES</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">COLLECTIBLES</a></li>
            <li><a href="#">VIDEOS</a></li>
            <li><a href="#">FANS</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="#">SHOP</a></li>
            <li><input type="text" placeholder="Search"></li>
        </ul>
    </div>
</header>
<section id="jumbo"></section>
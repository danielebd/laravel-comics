<header>
    <a id="logo" href="{{route('home')}}">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
    </a>
    <div id="menu">
        <ul>
            <li><a href="#">CHARACTERS</a></li>
            <li><a href="{{ route('comic') }}">COMICS</a></li>
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
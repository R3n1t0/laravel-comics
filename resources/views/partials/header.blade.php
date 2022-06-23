<header class="container">

  <a href="{{ route("home") }}"><img src="{{asset('img/dc-logo.png')}}" alt="DC Logo"></a>

  <nav>
    <ul>
      <li>
        <a class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}}" href="{{ route("characters") }}">CHARACTERS</a>
        <a class="{{Route::currentRouteName() === 'comics' ? 'active' : ''}}" href="{{ route("comics") }}">COMICS</a>
        <a class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{ route("movies") }}">MOVIES</a>
        <a class="{{Route::currentRouteName() === 'games' ? 'active' : ''}}" href="{{ route("games") }}">GAMES</a>
        <a class="{{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}" href="{{ route("collectibles") }}">COLLECTIBLES</a>
        <a class="{{Route::currentRouteName() === 'videos' ? 'active' : ''}}" href="{{ route("videos") }}">VIDEOS</a>
        <a class="{{Route::currentRouteName() === 'fans' ? 'active' : ''}}" href="{{ route("fans") }}">FANS</a>
        <a class="{{Route::currentRouteName() === 'news' ? 'active' : ''}}" href="{{ route("news") }}">NEWS</a>
        <a class="{{Route::currentRouteName() === 'shop' ? 'active' : ''}}" href="{{ route("shop") }}">SHOP</a>
      </li>
    </ul>
  </nav>

</header>

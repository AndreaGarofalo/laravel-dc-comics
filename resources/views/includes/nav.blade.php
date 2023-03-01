    <div class="container nav">
      <a href="{{ url('/') }}"><img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo" /></a>
      <ul>
        <li>
            <a href="{{ route('characters') }}" class=" @if(Route::is('characters')) active @endif "> CHARACTERS</a>
        </li>
        <li>
            <a href="{{ route('comics.index') }}" class=" @if(Route::is('comics.index')) active @endif "> COMICS</a>
        </li>
        <li>
            <a href="{{ route('movies') }}" class=" @if(Route::is('movies')) active @endif "> MOVIES</a>
        </li>
        <li>
            <a href="{{ route('tv') }}" class=" @if(Route::is('tv')) active @endif "> TV</a>
        </li>
        <li>
            <a href="{{ route('games') }}" class=" @if(Route::is('games')) active @endif "> GAMES</a>
        </li>
        <li>
            <a href="{{ route('collectibles') }}" class=" @if(Route::is('collectibles')) active @endif "> COLLECTIBLES</a>
        </li>
        <li>
            <a href="{{ route('videos') }}" class=" @if(Route::is('videos')) active @endif "> VIDEOS</a>
        </li>
        <li>
            <a href="{{ route('fans') }}" class=" @if(Route::is('fans')) active @endif "> FANS</a>
        </li>
        <li>
            <a href="{{ route('news') }}" class=" @if(Route::is('news')) active @endif "> NEWS</a>
        </li>
        <li>
            <a href="{{ route('shop') }}" class=" @if(Route::is('shop')) active @endif "> SHOP</a>
        </li>
      </ul>
    </div>

<header>
    <div class="header">
        <div class="container text-light d-flex justify-content-end">
            <ul>
                <li>
                    DC POWER VISA <i class="fa-regular fa-registered"></i>
                </li>
                <li>
                    ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="navbar d-flex justify-content-between align-items-center p-0">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/images/dc-logo.png') }}"
                        alt=""></a>
            </div>
            <ul class="d-flex  align-items-center">
                <li @class(['active' => Route::currentRouteName() == 'characters'])>
                    <a href="{{ route('characters') }}">CHARACTERS</a>
                </li>
                <li @class([
                    'active' => Route::currentRouteName() == 'comics.index',
                
                    //|| Route::currentRouteName() == 'comic-detail',
                ])>
                    <a href="{{ route('comics.index') }}">COMICS</a>
                </li>
                <li @class(['active' => Route::currentRouteName() == 'movies'])>
                    <a href="{{ route('movies') }}">MOVIES</a>
                </li>
                <li @class(['active' => Route::currentRouteName() == 'tv'])>
                    <a href="{{ route('tv') }}">TV</a>
                </li>
                <li @class(['active' => Route::currentRouteName() == 'games'])>
                    <a href="{{ route('games') }}">GAMES</a>
                </li>
                <li @class(['active' => Route::currentRouteName() == 'collectibles'])>
                    <a href="{{ route('collectibles') }}">COLLECTIBLES</a>
                </li>
                <li @class(['active' => Route::currentRouteName() == 'videos'])>
                    <a href="{{ route('videos') }}">VIDEOS</a>
                </li>
                <li @class(['active' => Route::currentRouteName() == 'fans'])>
                    <a href="{{ route('fans') }}">FANS</a>
                </li>
                <li @class(['active' => Route::currentRouteName() == 'news'])>
                    <a href="{{ route('news') }}">NEWS</a>
                </li>
                <li @class(['active' => Route::currentRouteName() == 'shop'])>
                    <a href="{{ route('shop') }}">SHOP</a>
                </li>
            </ul>
            <div class="d-flex align-items-center justify-content-end search-bar">
                <input type="search" name="item" id="item" placeholder="Search" class="nav-input">
                <i class="fa-solid fa-magnifying-glass ms-2"></i>
            </div>
        </div>
    </div>
    <div class="jumbo">
        <img src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
    </div>
</header>

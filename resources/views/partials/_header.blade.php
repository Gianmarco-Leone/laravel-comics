<header>
    <div class="header-top">

    </div>

    <div class="header-bottom">
        <div class="container d-flex justify-content-center align-items-center">
            <a href="#">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo" />
            </a>
            <ul>
                <li>
                    <a href="#">
                        CHARACTERS
                    </a>
                </li>
                <li>
                    <a href="{{ route('comics') }}" class="{{ request()->routeIs('comics') ? 'active' : '' }}">
                        COMICS
                    </a>
                </li>
                <li>
                    <a href="#">
                        MOVIES
                    </a>
                </li>
                <li>
                    <a href="#">
                        TV
                    </a>
                </li>
                <li>
                    <a href="#">
                        GAMES
                    </a>
                </li>
                <li>
                    <a href="#">
                        COLLECTIBLES
                    </a>
                </li>
                <li>
                    <a href="#">
                        VIDEOS
                    </a>
                </li>
                <li>
                    <a href="#">
                        FANS
                    </a>
                </li>
                <li>
                    <a href="#">
                        NEWS
                    </a>
                </li>
                <li>
                    <a href="#">
                        SHOP
                    </a>
                </li>
            </ul>
            <input type="text" placeholder="Search" class="text-end
            border-0 border-bottom">
        </div>
    </div>
    
</header>
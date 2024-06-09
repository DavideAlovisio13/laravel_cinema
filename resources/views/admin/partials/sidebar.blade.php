<nav id="sidebar" class="navbar-dark">
    <div class="logo text-center">
        <a href="#" class="nav-link text-uppercase">nome/logo cinema</a>
    </div>
    <div class="user">
        <div class="profile">
            <a class="nav-link d-flex align-items-center collapsed" href="#collapseExample" data-bs-toggle="collapse"
                aria-expanded="false">
                <img class="rounded-circle profile-picture me-2"
                    src="https://avatarfiles.alphacoders.com/373/373447.jpg"
                    alt="{{ Auth::user()->name }} profile picture">
                <span>{{ Auth::user()->name }}</span>
                <i class="fa-solid fa-caret-down ms-auto"></i>
            </a>
            <div class="collapse" id="collapseExample">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="{{ url('profile') }}">
                            <i class="fa-solid fa-user"></i> {{ __('Profile') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="#">
                            <i class="fa-solid fa-gear"></i> Settings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <i class="fa-solid fa-sign-out"></i> {{ __('Logout') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <ul id="routes-list" class="navbar-nav">
        <li>
            <a href="{{ route('admin.dashboard') }}" class="nav-link d-flex align-items-center">
                <i class="fa-solid fa-building-columns"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('admin.movies.index') }}" class="nav-link d-flex align-items-center">
                <i class="fa-solid fa-film"></i> Movies
            </a>
        </li>
        <li>
            <a href="{{ route('admin.rooms.index') }}" class="nav-link d-flex align-items-center">
                <i class="fa-solid fa-person-booth"></i> Rooms
            </a>
        </li>
        <li>
            <a href="{{ route('admin.movie_rooms.index') }}" class="nav-link d-flex align-items-center">
                <i class="fa-solid fa-video"></i> Projections
            </a>
        </li>
        <li>
            <a href="{{ route('admin.slots.index') }}" class="nav-link d-flex align-items-center">
                <i class="fa-solid fa-clock"></i> Programmations
            </a>
        </li>
    </ul>
    {{-- <a href="/" class="nav-link text-white">
        <h2 class="p-2">
            <i class="fa-solid fa-square-rss"></i> Boolpress
        </h2>
    </a>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}"
                href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dasboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  text-white {{ Route::currentRouteName() == 'admin.projects.index' ? 'active' : '' }}"
                href="#">
                <i class="fa-solid fa-newspaper fa-lg fa-fw"></i> Projects
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  text-white {{ Route::currentRouteName() == 'admin.types.index' ? 'active' : '' }}"
                href="#">
                <i class="fa-solid fa-newspaper fa-lg fa-fw"></i> Types
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  text-white {{ Route::currentRouteName() == 'admin.technologies.index' ? 'active' : '' }}"
                href="#">
                <i class="fa-solid fa-tag fa-lg fa-fw"></i> Technologies
            </a>
        </li>

    </ul> --}}
</nav>

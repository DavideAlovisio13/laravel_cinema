<header>
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light">
        <!-- Container wrapper -->
        <div class="container-fluid d-flex align-items-center justify-content-between">
            {{-- Left button --}}
            <div class="d-flex align-items-center">
                <div class="minimize-button me-3">
                    <button>
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                </div>
                <div class="main-title">
                    <p>Nome Cinema qui</p>
                </div>
            </div>
            {{-- Right buttons --}}
            <div id="navigation" class="d-flex">
                <form class="me-3">
                    <div class="input-group no-border h-100">
                        <input type="text" value="" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-shapes"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bell"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-1">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-gear"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Right links -->
            {{-- <ul class="navbar-nav ms-auto d-flex flex-row align-items-center">
                <li class="nav-item">
                    <a class="nav-link me-3 me-lg-0" href="#">
                        <i class="fas fa-bell"></i>
                        <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                </li>
                <!-- Icon -->
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="#">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img class="rounded-circle profile-picture"
                            src="https://avatarfiles.alphacoders.com/373/373447.jpg"
                            alt="{{ Auth::user()->name }} profile picture">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('admin/dashboard') }}">{{ __('Dashboard') }}</a>
                        <a class="dropdown-item" href="{{ url('profile') }}">{{ __('Profile') }}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul> --}}
        </div>
    </nav>
</header>
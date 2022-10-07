<nav class="navbar navbar-expand-lg bg-light shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="asset/image/logo.png" alt="logo" class="d-inline-block align-text-top width-icon">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav font-semibold">
                    <li class="nav-item px-2">
                        <a class="nav-link text-default" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-default" href="{{ url('fitur') }}">Fitur</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-default" href="{{ url('tema') }}">Tema</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-default" href="{{ url('harga') }}">Harga</a>
                    </li>
                    @guest
                    <li class="nav-item px-2">
                        <a class="nav-link text-default" href="{{ url('login') }}">Login</a>
                    </li>
                    <li class="nav-itam px-2 p-left">
                        <a href="{{ url('register') }}" role="button" class="btn btn-default px-2">Buat Undangan</a>
                    </li>
                    @endguest
                    @auth
                        <li class="nav-item px-2">
                            <a class="nav-link text-default" href="{{ url('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-default" href="{{ url('logout') }}">Keluar</a>
                        </li>
                    @endauth
                    {{-- <li class="nav-item px-2">
                        <a class="nav-link text-default" href="{{ url('logout') }}">{{ $user->name }}</a>
                    </li> --}}

                </ul>
            </div>
        </div>
    </nav>

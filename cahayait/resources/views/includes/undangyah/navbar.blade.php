<nav class="navbar navbar-expand-lg bg-light shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="asset/image/logo.svg" alt="logo" class="d-inline-block align-text-top width-icon">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav font-semibold">
                    <li class="nav-item px-2">
                        <a class="nav-link text-default" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle text-default" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pelayanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('pelayanan') }}">Pelayanan Kami</a></li>
                            <li><a class="dropdown-item" href="{{ url('produk') }}">Produk Kami</a></li>
                            <li><a class="dropdown-item" href="{{ url('proses') }}">Proses Kami</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle text-default" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produk
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://undangyah.cahayait.com/">UndanganYah</a></li>
                            <li><a class="dropdown-item" href="https://webcv.cahayait.com/">WEB CV</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle text-default" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('tentang') }}">Tentang Cahaya IT</a></li>
                            <li><a class="dropdown-item" href="{{ url('portofolio') }}">Portofolio</a></li>
                            <li><a class="dropdown-item" href="{{ url('team') }}">Team</a></li>
                            <li><a class="dropdown-item" href="https://linktr.ee/cahayait">Hubungi Kami</a></li>
                            <li><a class="dropdown-item" href="{{ url('faq') }}">FAQ</a></li>
                        </ul>
                    </li>
                    @guest
                    <li class="nav-item px-2">
                        <a class="nav-link text-default" href="{{ url('login') }}">Login</a>
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
                    <li class="nav-itam px-2 p-left">
                        <a href="/penawaran-clien" role="button" class="btn btn-default px-2">&nbsp;Dapatkan Penawaran
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>&nbsp;</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

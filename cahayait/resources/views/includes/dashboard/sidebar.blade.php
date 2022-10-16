<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{ url('dashboard') }}">
                                <img src="{{ asset('/') }}asset/image/logo.svg" alt="logo"> Cahaya IT
                            </a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item active">
                            <a href="{{ url('dashboard') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{ url('penawarans') }}" class='sidebar-link'>
                                <i class="bi bi-envelope-fill"></i>
                                <span>Penawaran</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{ url('management-akun') }}" class='sidebar-link'>
                                <i class="bi bi-people-fill"></i>
                                <span>Users</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{ url('logout') }}" class='sidebar-link'>
                                <i class="bi bi-arrow-left-circle-fill"></i>
                                <span>Keluar</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

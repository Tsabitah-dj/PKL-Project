<header class="header-area">
    <div class="header-nav">
        <div class="navigation">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="{{ route('Beranda') }}">
                    <img src="{{ asset('assets/images/Garut.jpg') }}" alt="Logo"
                        style="width: 80px; height: auto;">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('Beranda') ? 'active' : '' }}"
                                href="{{ route('Beranda') }}">
                                Beranda
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('Halaman.tentang') ? 'active' : '' }}"
                                href="{{ route('Halaman.tentang') }}">
                                Tentang
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('Halaman.tentang') }}#visi-misi">Visi dan Misi</a>
                                </li>
                                <li>
                                    <a href="{{ route('Halaman.tentang') }}#struktur-organisasi">Struktur Organisasi</a>
                                </li>
                                <li>
                                    <a href="{{ route('Halaman.tentang') }}#alamat">Alamat</a>
                                </li>
                                <li>
                                    <a href="{{ route('Halaman.tentang') }}#desa">Desa</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('Halaman.Pelayanan') ? 'active' : '' }}"
                                href="{{ route('Halaman.Pelayanan') }}">
                                Pelayanan
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('Halaman.Berita') ? 'active' : '' }}"
                                href="{{ route('Halaman.Berita') }}">
                                Berita
                            </a>
                        </li>

                        <!-- 🔹 Profil/Login Menu -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                @auth
                                  <span class="user-avatar">
                                     {{ substr(auth()->user()->name, 0, 1) }}
                                  </span>
                                @else
                                    Masuk
                                @endauth
                            </a>
                            <ul class="sub-menu">
                                @guest
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endguest

                                @auth
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </li>
                                @endauth
                            </ul>
                        </li>

                    </ul>
                </div> <!-- navbar collapse -->

            </nav>
        </div>
    </div>
</header>

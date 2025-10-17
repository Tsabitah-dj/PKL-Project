<header class="header-area fixed-top">
    <div class="header-nav">
        <div class="navigation">
            <!-- Topbar Start -->
<div class="topbar">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Info Kiri -->
        <div class="topbar-info">
            <i class="fa fa-map-marker-alt"></i> Jl. Suherman No.22, Tarogong, Kec. Tarogong Kaler, Kabupaten Garut, Jawa Barat 44151
            <span class="mx-3">|</span>
        </div>

        <!-- Kanan: Sosmed + Auth -->
        <div class="topbar-right d-flex align-items-center">
            <!-- Sosial Media -->
            <div class="topbar-social">
                <a href="https://www.facebook.com/share/1D4ihZfAaj/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/tarogongkaler?igsh=cGttNjV1Ym5xdG1w"><i class="fab fa-instagram"></i></a>
                <a href="mailto:kecamatan@garut.go.id"><i class="fa fa-envelope"></i></a>
            </div>

            <!-- Login / Logout -->
            <div class="topbar-auth ms-3">
                @guest
                    <a href="{{ route('login') }}" class="btn-auth">Login</a>
                @else
                    <a href="{{ route('logout') }}" class="btn-auth"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
           <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
                <a class="navbar-brand d-flex align-items-center" href="{{ route('Beranda') }}">
                    <img src="{{ asset('assets/images/Garut.jpg') }}" alt="Logo" class="logo-img">
                    <div>
                        <p class="mb-0 fw-bold brand-title">Pemerintah Kab. Garut</p>
                        <h6 class="mb-0 brand-subtitle">KECAMATAN TAROGONG KALER</h6>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <!-- Menu geser ke kanan -->
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto custom-nav">
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('Beranda') ? 'active' : '' }}"
           href="{{ route('Beranda') }}">Beranda</a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link" href="#">Profil</a>
        <ul class="sub-menu">
            <li><a href="{{route('Profil.Visimisi')}}">Visi & Misi</a></li>
            <li><a href="{{route('Profil.Struktur')}}">Struktur/Kepegawaian</a></li>
            <li><a href="{{route('Profil.Monografi')}}">Monografi Kecamatan</a></li>
            <li><a href="{{route('Profil.Bidang')}}">Sekbid</a></li>
        </ul>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle {{ request()->routeIs('Halaman.Desa*') ? 'active' : '' }}"
           href="#" id="desaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Desa
        </a>
        <ul class="sub-menu" aria-labelledby="desaDropdown">
            <li><a class="dropdown-item" href="{{ route('desa.show', 'Jati') }}">Desa Jati</a></li>
            <li><a class="dropdown-item" href="{{ route('desa.show', 'Rancabango') }}">Desa Rancabango</a></li>
            <li><a class="dropdown-item" href="{{ route('desa.show', 'Cimanganten') }}">Desa Cimanganten</a></li>
            <li><a class="dropdown-item" href="{{ route('desa.show', 'Langensari') }}">Desa Langensari</a></li>
            <li><a class="dropdown-item" href="{{ route('desa.show', 'Mekarjaya') }}">Desa Mekarjaya</a></li>
            <li><a class="dropdown-item" href="{{ route('desa.show', 'Mekarwangi') }}">Desa Mekarwangi</a></li>
            <li><a class="dropdown-item" href="{{ route('desa.show', 'KelPananjung') }}">Kel. Pananjung</a></li>
            <li><a class="dropdown-item" href="{{ route('desa.show', 'Panjiwangi') }}">Desa Panjiwangi</a></li>
            <li><a class="dropdown-item" href="{{ route('desa.show', 'Pasawahan') }}">Desa Pasawahan</a></li>
            <li><a class="dropdown-item" href="{{ route('desa.show', 'Sinarjaya') }}">Desa Sinarjaya</a></li>
            <li><a class="dropdown-item" href="{{ route('desa.show', 'Sukajadi') }}">Desa Sukajadi</a></li>
            <li><a class="dropdown-item" href="{{ route('desa.show', 'Sukawangi') }}">Desa Sukawangi</a></li>
            <li><a class="dropdown-item" href="{{ route('desa.show', 'TanjungKamuning') }}">Desa Tanjung Kamuning</a></li>
            <li><a class="dropdown-item" href="{{ route('desa.show', 'Rancamekar')}}">Desa Rancamekar</a></li>
        </ul>
    </li>

    {{-- ✅ Perbaikan di sini: hilangkan dropdown-toggle --}}
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('Halaman.Pelayanan') ? 'active' : '' }}"
           href="{{ route('Halaman.Pelayanan') }}">Pelayanan</a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('Halaman.Berita') ? 'active' : '' }}"
           href="{{ route('Halaman.Berita') }}">Berita</a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('Halaman.SKM') ? 'active' : '' }}"
           href="{{ route('Halaman.SKM') }}">SKM</a>
    </li>
</ul>

                </div>
            </nav>
        </div>
    </div>
</header>

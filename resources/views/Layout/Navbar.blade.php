<header class="header-area">
        <div class="header-nav">
            <div class="navigation">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <a class="navbar-brand" href="#"><img src="assets/images/Logo2.png" alt=""></a> <!-- logo -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button> <!-- navbar toggler -->

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('Beranda')}}">Beranda</a>
                                <!-- sub menu -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('Beranda')}}#tentang">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('Halaman.Pelayanan')}}">Pelayanan</a>
                            </li>
                          
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('Halaman.Berita')}}">Berita</a>
                                <ul class="sub-menu">
                                    <li><a href="news.html">News</a></li>
                                    <li><a href="news-details.html">News Details</a></li>
                                </ul> <!-- sub menu -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('Halaman.Alamat')}}">Alamat</a>
                            </li>
                        </ul>
                    </div> <!-- navbar collapse -->
                    <div class="navbar-social ">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div> <!-- navigation -->
        </div>
    </header>
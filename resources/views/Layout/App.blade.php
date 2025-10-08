<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>@yield('title', 'Kecamatan Tarogong Kaler')</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/Garut.jpg') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">

    <!--====== animate css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!--====== Custom css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <!--====== HEADER PART START ======-->
    @include('Layout/Navbar')
    <!--====== HEADER PART ENDS ======-->

    <section class="hero-section">
        <img src="{{ asset('assets/images/Garutkbt.jpg') }}" alt="Garutkbt" class="hero-image">

        <!-- Overlay transparan -->
        <div class="hero-overlay"></div>

        <!-- Text tengah -->
        <div class="hero-text">
            <h1>SELAMAT DATANG</h1>
            <p>Website Kecamatan Tarogong Kaler</p>
        </div>
    </section>

    <section class="sambutan-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Foto -->
            <div class="col-md-5 text-center">
                <img src="{{ asset('assets/images/Garut.jpg') }}" 
                     alt="Foto Camat" 
                     class="img-fluid rounded shadow">
            </div>

            <!--Kata-Kata Sambutan -->
            <div class="col-md-7">
                <h2 class="fw-bold mb-3">Kata Sambutan</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Curabitur id nunc vitae ligula fermentum imperdiet. 
                    Suspendisse potenti. Aliquam erat volutpat.
                </p>
                <p>
                    Vivamus et nisl ac odio congue volutpat. Sed nec felis 
                    a urna feugiat condimentum. Duis quis augue quis arcu 
                    egestas malesuada at at lorem.
                </p>
                <p>
                    Proin laoreet, nunc nec commodo accumsan, ex neque 
                    accumsan sapien, et porttitor urna augue a nibh. 
                    Integer in urna eget purus sodales accumsan.
                </p>
                <p class="fw-bold mb-0">Rakhmat Alamsyah S.Sos</p>
            </div>
        </div>
    </div>
</section>

<section class="berita-terbaru py-5">
    <div class="container">
        <h2 class="text-center mb-4">Berita Terbaru</h2>
        <div id="beritaCardCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">

                @foreach($beritas->chunk(3) as $index => $chunk)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="row">
                        @foreach($chunk as $berita)
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm">
                                <img src="{{ asset('storage/' . $berita->foto) }}" class="card-img-top" alt="Berita">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $berita->judul }}</h5>
                                    <p class="card-text text-truncate">{{ Str::limit($berita->isi, 100) }}</p>
                                    <button class="btn btn-primary btn-sm" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#beritaModal{{ $berita->id }}">
                                        Lihat Selengkapnya
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Berita -->
                        <div class="modal fade" id="beritaModal{{ $berita->id }}" tabindex="-1" aria-labelledby="beritaModalLabel{{ $berita->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="beritaModalLabel{{ $berita->id }}">{{ $berita->judul }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('storage/' . $berita->foto) }}" class="img-fluid mb-3" alt="Berita">
                                        <p>{{ $berita->isi }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Berita -->

                        @endforeach
                    </div>
                </div>
                @endforeach

            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#beritaCardCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#beritaCardCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</section>

<!-- diisi sama address/alamat , harus ada gambar mapnya, -->
<section class="alamat-section py-5 mt-5">
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-12">
                <div class="card alamat-card">
                    <div class="card-header">
                        <h4 class="mb-0">Alamat Kami</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Lokasi Kantor</h5>
                        <p class="card-text">
                            Jl. Suherman No.22, Tarogong, Kec. Tarogong Kaler, Kabupaten Garut, Jawa Barat 44151
                        </p>
                        <div class="map-container mt-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.123456789!2d107.1234567!3d-7.1234567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5b8e5b8e5b8%3A0x5b8e5b8e5b8e5b8e!2sJl.%20Suherman%20No.22%2C%20Tarogong%2C%20Kec.%20Tarogong%20Kidul%2C%20Kabupaten%20Garut%2C%20Jawa%20Barat%2044151!5e0!3m2!1sid!2sid!4v1234567890123!5m2!1sid!2sid"
                                    allowfullscreen 
                                    loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- diisi sama address/alamat , harus ada gambar mapnya, -->

    <!--====== FOOTER PART START ======-->
    @include('Layout/Footer')
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== GO TO TOP PART START ======-->
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="fa fa-angle-double-up"></i>
                    <i class="fa fa-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>
    <!--====== GO TO TOP PART ENDS ======-->

    <!--====== jquery js ======-->
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <!--====== Isotope js ======-->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

    <!--====== appear js ======-->
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>

    <!--====== counterup js ======-->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

    <!--====== wow js ======-->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <!--====== circle progress js ======-->
    <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>

    <!--====== waypoints js ======-->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{ asset('assets/js/ajax-contact.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

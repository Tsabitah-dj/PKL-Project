<!doctype html>
<html lang="en">


<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Berita</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/Garut.jpg" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/all.css">

    <!--====== animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--====== Custom css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



</head>

<body>

    <!--====== HEADER PART START ======-->
      @include('Layout/Navbar')
    <!--====== HEADER PART ENDS ======-->

    <!-- isi sama berita, beritanya terserah -->
     <section style="margin-top: 200px;">
  <div class="container">
    <div class="row">
      @foreach($beritas as $berita)
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm h-100" style="border-radius: 12px; overflow: hidden;">

            <!-- Gambar -->
            <img src="{{ asset('storage/' . $berita->foto) }}" 
                 class="card-img-top" 
                 alt="{{ $berita->judul }}" 
                 style="height: 200px; object-fit: cover;">

            <!-- Body -->
            <div class="card-body d-flex flex-column">
              <h5 class="card-title fw-bold">{{ $berita->judul }}</h5>
              <p class="card-text text-muted" style="flex-grow: 1;">
                {{ Str::limit($berita->deskripsi, 100) }}
              </p>

              <!-- Tombol -->
              <button type="button" 
                      class="btn btn-primary w-100 mt-auto" 
                      data-bs-toggle="modal" 
                      data-bs-target="#beritaModal{{ $berita->id }}">
                Lihat Selengkapnya
              </button>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="beritaModal{{ $berita->id }}" tabindex="-1" aria-labelledby="beritaModalLabel{{ $berita->id }}" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title fw-bold" id="beritaModalLabel{{ $berita->id }}">{{ $berita->judul }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <img src="{{ asset('storage/' . $berita->foto) }}" 
                     class="img-fluid rounded mb-3" 
                     alt="{{ $berita->judul }}">
                <p>{{ $berita->deskripsi }}</p>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>



 
    <!-- isi sama berita, beritanya terserah -->
    
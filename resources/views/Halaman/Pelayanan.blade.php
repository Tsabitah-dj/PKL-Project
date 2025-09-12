<!doctype html>
<html lang="en">


<!-- Mirrored from html.webtend.net/gairol/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Jul 2025 01:14:41 GMT -->
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Pelayanan</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

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

     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Bundle JS (sudah ada Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>

</head>

<body>

    <!--====== HEADER PART START ======-->
      @include('Layout/Navbar')
    <!--====== HEADER PART ENDS ======-->
    
    <!-- Diisi sama Pelayanan yang Yang Ada Dari panel admin -->
       <section style="margin-top: 200px;">
  <div class="container">
    <div class="row">
      @foreach($pelayanans as $pelayanan)
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{ $pelayanan->nama_pelayanan }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Deskripsi</h6>

            {{-- tampilkan hanya 100 karakter --}}
            <p class="card-text">
              {{ Str::limit($pelayanan->deskripsi, 100) }}
            </p>

            {{-- tombol lihat selengkapnya --}}
            <a href="#" class="card-link" data-bs-toggle="modal" data-bs-target="#deskripsiModal{{ $pelayanan->id }}">
              Lihat Syarat-Syarat
            </a>
          </div>
        </div>
      </div>

      {{-- Modal --}}
      <div class="modal fade" id="deskripsiModal{{ $pelayanan->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">{{ $pelayanan->nama_pelayanan }}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              {!! nl2br(e($pelayanan->deskripsi)) !!}
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

    <!-- Diisi sama Pelayanan Yang Ada dari panel admin -->
     
</body>


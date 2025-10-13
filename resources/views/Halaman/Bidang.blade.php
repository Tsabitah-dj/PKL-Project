<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Seksi Bidang (sekbid)</title>

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

    <section style="margin-top: 200px;">
  <h2 class="mb-5">Bidang</h2>
  <div class="container">
    <div class="row">
      @foreach($bidangs as $bidang)
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{ $bidang->nama }}</h5>
            <p class="card-text">{{ Str::limit($bidang->deskripsi, 100) }}</p>

            <!-- Tombol buka modal -->
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bidangModal{{ $bidang->id }}">
              Lihat Selengkapnya
            </button>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="bidangModal{{ $bidang->id }}" tabindex="-1" aria-labelledby="bidangModalLabel{{ $bidang->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="bidangModalLabel{{ $bidang->id }}">{{ $bidang->nama }}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
              {{ $bidang->deskripsi }}
            </div>
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

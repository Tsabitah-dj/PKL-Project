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

<section class="py-5 text-center" style="margin-top: 8rem;">
    <h2 class="display-5 mb-3" style="color: black;">Seksi Bidang</h2>
    <p class="text-muted">Sekbid Kecamatan Tarogong Kaler</p>
</section>

    <section style="margin-top: 100px;">
  <div class="container">
    <div class="row">
      @foreach($bidangs as $bidang)
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h3 class="card-title">{{ $bidang->nama }}</h3>
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

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
            
              <div class="card-body">
                <h5 class="card-title">{{ $pelayanan->nama_pelayanan }}</h5>
                <p class="card-text">Deskripsi pelayanan</p>
              </div>
              <div class="card-body">
                <a href="#" class="card-link">Lihat Detail</a>
                <a href="#" class="card-link">Hubungi Kami</a>
              </div>
            
          </div>
          @endforeach
     </section>
    <!-- Diisi sama Pelayanan Yang Ada dari panel admin -->
     
</body>


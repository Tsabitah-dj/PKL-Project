<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Visi & Misi</title>

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

<section class="py-5 text-center" style="margin-top: 5rem;">
    <h2 class="display-5 mb-4" style="margin-top: 4rem; color: black;">VISI DAN MISI</h2>
    <p>
        Visi Kecamatan Tarogong Kaler, Garut adalah "Terwujudnya Kecamatan Tarogong Kaler yang unggul,
            berdaya saing, dan sejahtera" dengan visi misi mendukungnya seperti meningkatkan kualitas SDM,
            infraksrtuktur, dan perekonomian.Berikut adalah detail lebih lanjut.
    </p>
</section>

<section class="container py-4">
    <div class="row align-items-center">
        <div class="col-md-6 text-start">
            <img src="{{ asset('assets/images/Garutkbt.jpg') }}" alt="Foto Visi Misi" class="img-fluid rounded" />
        </div>
        <div class="col-md-6 text-start">
            <h4 style="color: black">Visi</h4>
            <p>
               "Terwujudnya Kecamatan Tarogong Kaler yang Unggul,
                 Berdaya saing, dan Sejahtera"
            </p>
            <h4 style="color: black">Misi</h4>
            <ul>
                <li>Meningkatkan kualitas Sumber Daya Manusia (SDM): yang beriman, berpengetahuan, dan berakhlak mulia.</li>
                <li>Meningkatkan kualitas infrastruktur: yang memadai dan terintegrasi.</li>
                <li>Meningkatkan perekonomian masyarakat yang mandiri dan berkelanjutan.</li>
                <li>Meningkatkan pelayanan publik: yang berkualitas dan efisien.</li>
                <li>Meningkatkan partisipasi masyarakat: dalam pembangunan daerah.</li>
                <li>Mewujudkan tata kelola pemerintahan yang baik dan bersih.</li>
            </ul>
        </div>
    </div>
</section>

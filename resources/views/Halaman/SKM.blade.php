<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Survey Kepuasan Masyarakat(SKM)</title>

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
          <h2 class="display-5 mb-3" style="color: black;">Survei Kepuasan Masyarakat (SKM)</h2>
         <p class="text-muted">Survei kepuasan Masyarakat Tarkal</p>
    </section>

    <section class="py-5" style="margin-top: 100px;">
    <div class="container">

        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('skm.store') }}" method="POST" class="p-4 shadow rounded bg-light">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label">1. Bagaimana penilaian anda tentang pelayanannya</label>
                <div>
                    <input type="radio" name="penilaian" value="Sangat Baik" required> Sangat Baik<br>
                    <input type="radio" name="penilaian" value="Baik"> Baik<br>
                    <input type="radio" name="penilaian" value="Cukup Baik"> Cukup Baik<br>
                    <input type="radio" name="penilaian" value="Kurang Baik"> Kurang Baik<br>
                    <input type="radio" name="penilaian" value="Tidak Baik"> Tidak Baik
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">2. Nilai Kepuasan anda</label>
                <div>
                    <input type="radio" name="nilai" value="5" required> Sangat Puas<br>
                    <input type="radio" name="nilai" value="4"> Puas<br>
                    <input type="radio" name="nilai" value="3"> Cukup Puas<br>
                    <input type="radio" name="nilai" value="2"> Kurang Puas<br>
                    <input type="radio" name="nilai" value="1"> Tidak Puas
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Saran / Masukan</label>
                <textarea name="saran" class="form-control" rows="4" placeholder="Tuliskan saran atau masukan Anda..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Kirim Survei</button>
        </form>
    </div>
</section>
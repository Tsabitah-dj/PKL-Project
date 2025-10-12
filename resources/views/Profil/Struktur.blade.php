<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Struktur & Kepegawaian</title>

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
    <h2 class="display-5 mb-4" style="margin-top: 4rem; color: black;">STRUKTUR ORGANISASI</h3>
    <p>Struktur Pegawai Kantor Kecamatan Tarogong Kaler </p>
</section>

<section class="container py-4">
    <div class="row align-items-center">
        <div class="col-12 text-center">
            <img src="{{ asset('assets/images/struktur organisasi kec. tarkal.jpg') }}" alt="Foto Visi Misi" class="img-fluid rounded" />
        </div>
    </div>
</section>

<section class="py-5 text-center" style="margin-top: 5rem;">
    <h2 class="display-5 mb-4" style="margin-top: 4rem; color: black;">KEPEGAWAIAN</h2>
    <p>Data Pegawai</p>

    <div class="container">
        <table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th scope="col">Foto</th>
            <th scope="col">Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pegawais as $pegawai)
        <tr>
           <td>
    <img src="{{ asset('storage/' . $pegawai->foto) }}"
         alt="Foto Pegawai"
         class="img-thumbnail pegawai-foto">
</td>

            <td>
                <ul class="mb-0">
                    @foreach(explode("\n", $pegawai->keterangan) as $item)
                        @if(trim($item) != '')
                            <li>{{ $item }}</li>
                        @endif
                    @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</section


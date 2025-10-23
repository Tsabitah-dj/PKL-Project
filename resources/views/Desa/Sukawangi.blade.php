<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Desa Sukawangi</title>

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

    <!--====== MAIN CONTENT START ======-->

<section class="py-5 text-center" style="margin-top: 5rem;">
    <h2 class="display-5 mb-4" style="margin-top: 4rem; color: black;">Desa Sukawangi</h2>
    <p> Berlokasi Di </p>
</section>

    <section class="main-content">
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Desa</th>
                        <th>Link Website</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($desas as $desa)
                      @if($desa->id == 13)
                        <tr>
                            <td>{{ $desa->Nama_Desa }}</td>
                            <td><a href="{{ $desa->Link_website }}" target="_blank">{{ $desa->Link_website }}</a></td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>

             <table class="table custom-table" style="margin-top: 40px;">
            <thead>
                <tr>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sukawangis as $item)
                 
                    <tr>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->keterangan }}</td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
        </div>
    </section>
    <!--====== MAIN CONTENT ENDS ======-->

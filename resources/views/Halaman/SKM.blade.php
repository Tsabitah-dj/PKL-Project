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
                <label class="form-label">1. Bagaimana pemdapat Saudara tentang kesekuaian persyaratan pelayanan dengan jenis pelayanannya </label>
                <div>
                    <input type="radio" name="pertanyaan1" value=" Tidak sesuai" required> Tidak sesuai<br>
                    <input type="radio" name="pertanyaan1" value="Kurang baik"> Kurang baik<br>
                    <input type="radio" name="pertanyaan1" value="Sesuai"> Sesuai<br>
                    <input type="radio" name="pertanyaan1" value="Sangat baik"> Sangat baik<br>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">2. Bagaimana pemahanan Saudara tetang kemudahan prosedur pelayanan di unit ini</label>
                <div>
                    <input type="radio" name="pertanyaan2" value="Tidak Mudah" required> Tidak Mudah<br>
                    <input type="radio" name="pertanyaan2" value="Kurang Mudah"> Kurang Mudah<br>
                    <input type="radio" name="pertanyaan2" value="Mudah"> Mudah<br>
                    <input type="radio" name="pertanyaan2" value="Sangat Mudah"> Sangat Mudah<br>
                </div>
            </div>

            
            <div class="mb-3">
                <label class="form-label">3. Bagaimana pendapat Saudara tetang kecepatan waktu dalam memberikan pelayanan</label>
                <div>
                    <input type="radio" name="pertanyaan3" value="Tidak Cepat" required> Tidak Cepat<br>
                    <input type="radio" name="pertanyaan3" value="Kurang Cepat"> Kurang Cepat<br>
                    <input type="radio" name="pertanyaan3" value="Cepat"> Cepat<br>
                    <input type="radio" name="pertanyaan3" value="Sangat Cepat "> Sangat Cepat<br>
                </div>
            </div>

             <div class="mb-3">
                <label class="form-label">4. Bagaimana pendapat Saudara tetang kewajaran biaya/tarif dalam pelayanan</label>
                <div>
                    <input type="radio" name="pertanyaan4" value="Sangat Mahal" required> Sangat Mahal<br>
                    <input type="radio" name="pertanyaan4" value="Cukup Mahal"> Cukup Mahal<br>
                    <input type="radio" name="pertanyaan4" value="Murah"> Murah<br>
                    <input type="radio" name="pertanyaan4" value="Gratis"> Gratis<br>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">5. Bagaimana pendapat Saudara tetang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan</label>
                <div>
                    <input type="radio" name="pertanyaan5" value="Tidak sesuai" required> Tidak sesuai<br>
                    <input type="radio" name="pertanyaan5" value="Kurang Sesuai"> Kurang Sesuai<br>
                    <input type="radio" name="pertanyaan5" value="Sesuai"> Sesuai<br>
                    <input type="radio" name="pertanyaan5" value="Sangat Sesuai"> Sangat Sesuai<br>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">6. Bagaimana pendapat Saudara tetang kopetensi kemampuan petugas dalam pelayanan</label>
                <div>
                    <input type="radio" name="pertanyaan6" value="Tidak kompeten" required> Tidak kompeten<br>
                    <input type="radio" name="pertanyaan6" value="Kurang kompeten"> Kurang kompeten<br>
                    <input type="radio" name="pertanyaan6" value="Kompeten"> Kompeten<br>
                    <input type="radio" name="pertanyaan6" value="Sangat kompeten"> Sangat kompeten<br>
                </div>
            </div>
  
            <div class="mb-3">
                <label class="form-label">7. Bagaimana pendapat Saudara tetang perilaku petugas dalam pelayanan terkait kesopanan dan keramahan</label>
                <div>
                    <input type="radio" name="pertanyaan7" value="Tidak Sopan dan ramah" required> Tidak Sopan dan ramah<br>
                    <input type="radio" name="pertanyaan7" value="Kurang sopan dan ramah"> Kurang sopan dan ramah<br>
                    <input type="radio" name="pertanyaan7" value="Sopan dan ramah"> Sopan dan ramah<br>
                    <input type="radio" name="pertanyaan7" value="Sangat Sopan dan ramah"> Sangat Sopan dan ramah<br>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">8. Bagaimana pendapat Saudara tetang kualitas sarana dan prasarana</label>
                <div>
                    <input type="radio" name="pertanyaan8" value="Tidak Baik" required> Tidak Baik<br>
                    <input type="radio" name="pertanyaan8" value="Kurang baik"> Kurang baik<br>
                    <input type="radio" name="pertanyaan8" value="Baik dan ramah"> Baik dan ramah<br>
                    <input type="radio" name="pertanyaan8" value="Sangat baik"> Sangat baik<br>
                </div>
            </div>

             <div class="mb-3">
                <label class="form-label">9. Bagaimana pendapat Saudara tetang penanganan pengaduan pengguna layanan</label>
                <div>
                    <input type="radio" name="pertanyaan9" value="Tidak ada" required> Tidak ada<br>
                    <input type="radio" name="pertanyaan9" value="Ada tapi tidak berfungsi"> Ada tapi tidak berfungsi<br>
                    <input type="radio" name="pertanyaan9" value="Berfungsi kurang maksimal"> Berfungsi kurang maksimal<br>
                    <input type="radio" name="pertanyaan9" value="Dikelola dengan baik"> Dikelola dengan baik<br>
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
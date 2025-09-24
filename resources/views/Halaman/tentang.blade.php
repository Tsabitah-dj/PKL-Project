<!doctype html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Tentang</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">

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

    <style>
        /* 🔹 Tambahin smooth scroll biar halus */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>

    <!--====== HEADER PART START ======-->
    @include('Layout/Navbar')
    <!--====== HEADER PART ENDS ======-->

    <!--====== Tentang/About ======-->
    <section class="py-5 mt-5">

        <!-- VISI DAN MISI -->
        <h3 id="visi-misi" class="text-left display-5 mt-5 mb-4">VISI DAN MISI</h3>
        <p>
        <h4 style="padding-left: 20px;">Visi Dan Misi Kecamatan Tarogong Kaler</h4>
        <h5 style="color: black; padding-left: 20px;">
            Visi Kecamatan Tarogong Kaler, Garut adalah "Terwujudnya Kecamatan Tarogong Kaler yang unggul,
            berdaya saing, dan sejahtera" dengan visi misi mendukungnya seperti meningkatkan kualitas SDM,
            infraksrtuktur, dan perekonomian.Berikut adalah detail lebih lanjut :
        </h5>
        <h4 style=" padding-left: 20px;" class="text-left display-5 mt-4 mb-3">VISI :</h4>
        <h5 style="color: black; padding-left: 20px;">
            "Terwujudnya Kecamatan Tarogong Kaler yang Unggul,
            Berdaya saing, dan Sejahtera"
        </h5>

        <h4 style="padding-left: 20px;" class="text-left display-5 mt-4 mb-3"> MISI :</h4>
        <h5 style="color: black; padding-left: 20px;">-Meningkatkan kualitas Sumber Daya Manusia (SDM): yang beriman, berpengetahuan, dan berakhlak mulia.</h5>
        <h5 style="color: black; padding-left: 20px;">-Meningkatkan kualitas infrastruktur: yang memadai dan terintegrasi.</h5>
        <h5 style="color: black; padding-left: 20px;">-Meningkatkan perekonomian masyarakat yang mandiri dan berkelanjutan.</h5>
        <h5 style="color: black; padding-left: 20px;">-Meningkatkan pelayanan publik: yang berkualitas dan efisien.</h5>
        <h5 style="color: black; padding-left: 20px;">-Meningkatkan partisipasi masyarakat: dalam pembangunan daerah.</h5>
        <h5 style="color: black; padding-left: 20px;">-Mewujudkan tata kelola pemerintahan yang baik dan bersih.</h5>
        </p>

        <!-- STRUKTUR ORGANISASI -->
        <h3 id="struktur-organisasi" class="text-left display-5 mt-5 mb-4">STRUKTUR ORGANISASI</h3>
        <p class="text-center" class="text-left display-5 mt-5 mb-4">
            <img src="{{asset("assets/images/struktur organisasi kec. tarkal.jpg")}}" 
                 alt="Struktur Organisasi" class="img-fluid">
        </p>

        <!-- ALAMAT -->
        <h3 id="alamat" class="text-left display-5 mt-5 mb-4">Alamat</h3>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-12">
                    <div class="card border-success mb-25">
                        <div class="card-header bg-transparent border-success">
                            <h4 class="mb-0">Alamat Kami</h4>
                        </div>
                        <div class="card-body text-success">
                            <h5 class="card-title">Lokasi Kantor</h5>
                            <p class="card-text">
                                Jl. Suherman No.22, Tarogong, Kec. Tarogong Kaler, Kabupaten Garut, Jawa Barat 44151
                            </p>
                            <div class="mt-4">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.123456789!2d107.1234567!3d-7.1234567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5b8e5b8e5b8%3A0x5b8e5b8e5b8e5b8e!2sJl.%20Suherman%20No.22%2C%20Tarogong%2C%20Kec.%20Tarogong%20Kidul%2C%20Kabupaten%20Garut%2C%20Jawa%20Barat%2044151!5e0!3m2!1sid!2sid!4v1234567890123!5m2!1sid!2sid" 
                                        width="100%" 
                                        height="300" 
                                        style="border:0;" 
                                        allowfullscreen="" 
                                        loading="lazy">
                                </iframe>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-success">
                            <small class="text-muted">Hubungi kami untuk informasi lebih lanjut</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       {{-- Desa --}}
       <h3 id="desa" class="text-left display-5 mt-5 mb-4">Desa yang di Jangkau</h3>

       <!-- Table Desa -->
       <div class="container-fluid px-4">
           <div class="row">
               <div class="col-12">
                   <div class="card border-success mb-4">
                       <div class="card-header bg-transparent border-success">
                           <h4 class="mb-0">Daftar Desa yang Dijangkau</h4>
                       </div>
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-striped table-bordered table-hover">
                                   <thead class="table-success">
                                       <tr>
                                           <th scope="col" class="text-center">No</th>
                                           <th scope="col">Nama Desa</th>
                                           <th scope="col">Link Website</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @forelse($desas as $index => $desa)
                                       <tr>
                                           <td class="text-center">{{ $index + 1 }}</td>
                                           <td>{{ $desa->Nama_Desa }}</td>
                                           <td>
                                               @if($desa->Link_website)
                                                   <a href="{{ $desa->Link_website }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                                       <i class="fas fa-external-link-alt"></i> Kunjungi
                                                   </a>
                                               @else
                                                   <span class="text-muted">Tidak ada</span>
                                               @endif
                                           </td>
                                       </tr>
                                       @empty
                                       <tr>
                                           <td colspan="3" class="text-center text-muted">
                                               Belum ada data desa yang tersedia
                                           </td>
                                       </tr>
                                       @endforelse
                                   </tbody>
                               </table>
                           </div>
                       </div>
                       <div class="card-footer bg-transparent border-success">
                           <small class="text-muted">Data desa berdasarkan informasi Dari Desa Masing-masing</small>
                       </div>
                   </div>
               </div>
           </div>
       </div>

    </section>
</body>
</html>

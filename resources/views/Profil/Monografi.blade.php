<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Monografi Kecamatan</title>

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

    <!-- Bootstrap Bundle JS (Wajib, karena termasuk Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <!--====== HEADER PART START ======-->
      @include('Layout/Navbar')
    <!--====== HEADER PART ENDS ======-->


 <section class="py-5 text-center" style="margin-top: 8rem;">
    <h2 class="display-5 mb-3" style="color: black;">MONOGRAFI</h2>
    <p class="text-muted">Monografi Kecamatan Tarogong Kaler</p>
</section>

<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row align-items-start">
            <!-- Left side: Collapsible Table -->
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="accordion" id="monografiAccordion">
                    <div class="accordion-item shadow-sm border-0">
                        <h4 class="accordion-header" id="headingMonografi">
                            <button class="accordion-button collapsed fw-semibold d-flex justify-content-between"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseMonografi"
                                aria-expanded="false"
                                aria-controls="collapseMonografi">
                                 Luas Wilayah Dan Topografi
                                <i class="fa-solid fa-chevron-down ms-2 rotate-icon"></i>
                            </button>
                        </h4>
                        <div id="collapseMonografi"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingMonografi"
                            data-bs-parent="#monografiAccordion">
                            <div class="accordion-body fade-in">
                                <table class="table table-striped table-bordered align-middle">
                                    <thead class="table-primary text-center">
                                        <tr>
                                            <th width="40%">Aspek</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($luasdantopografi as $item)
                                        <tr>
                                            <td>{{ $item->aspek }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side: Gambar Wilayah -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/images/wilayahtrkl.png') }}"
                    class="img-fluid rounded shadow"
                    alt="Peta Wilayah Kecamatan Tarogong Kaler"
                    style="width: 100%; height: auto;">
            </div>
        </div>
    </div>
</section>

<!-- ====== DATA KEPENDUDUKAN SECTION ====== -->
<section class="py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="row align-items-start">
            <!-- Left side: Gambar Wilayah -->
            <div class="col-md-6 text-center mb-4 mb-md-0">
                <img src="{{ asset('assets/images/wilayahtrkl.png') }}"
                    class="img-fluid rounded shadow"
                    alt="Peta Wilayah Kecamatan Tarogong Kaler"
                    style="width: 100%; height: auto;">
            </div>

            <!-- Right side: Accordion -->
            <div class="col-md-6">
                <div class="accordion" id="kependudukanAccordion">
                    
                    <!-- 1️⃣ Data Kependudukan -->
                    <div class="accordion-item shadow-sm border-0 mb-3">
                        <h4 class="accordion-header" id="headingKependudukan">
                            <button class="accordion-button collapsed fw-semibold d-flex justify-content-between"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseKependudukan"
                                aria-expanded="false"
                                aria-controls="collapseKependudukan">
                                Data Kependudukan
                                <i class="fa-solid fa-chevron-down ms-2 rotate-icon"></i>
                            </button>
                        </h4>
                        <div id="collapseKependudukan"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingKependudukan"
                            data-bs-parent="#kependudukanAccordion">
                            <div class="accordion-body fade-in">
                                <table class="table table-striped table-bordered align-middle">
                                    <thead class="table-success text-center">
                                        <tr>
                                            <th width="40%">Kategori</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($penduduk as $item)
                                        <tr>
                                            <td>{{ $item->kategori }}</td>
                                            <td>{{ $item->jumlah }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- 2️⃣ Berdasarkan Agama -->
                    <div class="accordion-item shadow-sm border-0 mb-3">
                        <h4 class="accordion-header" id="headingAgama">
                            <button class="accordion-button collapsed fw-semibold d-flex justify-content-between"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseAgama"
                                aria-expanded="false"
                                aria-controls="collapseAgama">
                                Berdasarkan Agama
                                <i class="fa-solid fa-chevron-down ms-2 rotate-icon"></i>
                            </button>
                        </h4>
                        <div id="collapseAgama"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingAgama"
                            data-bs-parent="#kependudukanAccordion">
                            <div class="accordion-body fade-in">
                                <table class="table table-striped table-bordered align-middle">
                                    <thead class="table-info text-center">
                                        <tr>
                                            <th width="40%">Nama Agama</th>
                                            <th>Persentase</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($agama as $item)
                                        <tr>
                                            <td>{{ $item->nama_agama }}</td>
                                            <td>{{ $item->persentase }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- 3️⃣ Persentase Pekerjaan -->
                    <div class="accordion-item shadow-sm border-0 mb-3">
                        <h4 class="accordion-header" id="headingPekerjaan">
                            <button class="accordion-button collapsed fw-semibold d-flex justify-content-between"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapsePekerjaan"
                                aria-expanded="false"
                                aria-controls="collapsePekerjaan">
                                Persentase Pekerjaan
                                <i class="fa-solid fa-chevron-down ms-2 rotate-icon"></i>
                            </button>
                        </h4>
                        <div id="collapsePekerjaan"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingPekerjaan"
                            data-bs-parent="#kependudukanAccordion">
                            <div class="accordion-body fade-in">
                                 <table class="table table-striped table-bordered align-middle">
                                    <thead class="table-warning text-center">
                                        <tr>
                                            <th width="40%">Jenis Pekerjaan</th>
                                            <th>Persentase</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pekerjaan as $item)
                                        <tr>
                                            <td>{{ $item->jenis_pekerjaan }}</td>
                                            <td>{{ $item->persentase }}%</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- 4️⃣ Usia 5 Terbanyak -->
                    <div class="accordion-item shadow-sm border-0">
                        <h4 class="accordion-header" id="headingUsia">
                            <button class="accordion-button collapsed fw-semibold d-flex justify-content-between"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseUsia"
                                aria-expanded="false"
                                aria-controls="collapseUsia">
                                Usia 5 Terbanyak
                                <i class="fa-solid fa-chevron-down ms-2 rotate-icon"></i>
                            </button>
                        </h4>
                        <div id="collapseUsia"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingUsia"
                            data-bs-parent="#kependudukanAccordion">
                            <div class="accordion-body fade-in">
                                <table class="table table-striped table-bordered align-middle">
                                    <thead class="table-secondary text-center">
                                        <tr>
                                            <th width="40%">Kategori</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($usia as $item)
                                        <tr>
                                            <td>{{ $item->kategori }}</td>
                                            <td>{{ $item->jumlah }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div> <!-- End Accordion -->
            </div>
        </div>
    </div>
</section>



</body>
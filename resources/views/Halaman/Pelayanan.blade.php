<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Pelayanan</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/Garut.jpg" type="image/png">

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

     <!--====== Custom css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    

</head>

<body>

    <!--====== HEADER PART START ======-->
      @include('Layout/Navbar')
    <!--====== HEADER PART ENDS ======-->
    
    <!-- Diisi sama Pelayanan yang Yang Ada Dari panel admin -->
      <section style="margin-top:200px;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow border-0">
          <div class="card-body">
            <h4 class="mb-3 fw-bold text-center">LAYANAN</h4>
            <p class="text-muted text-center"> Daftar Pelayanan yang ada Di Kecamatan Tarkal </p>

            {{-- Pilih pelayanan --}}
            <div class="mb-3">
              <label for="pelayananSelect" class="form-label">Pilih Pelayanan</label>
              <select id="pelayananSelect" class="form-select">
                <option value="">-- Pilih Pelayanan --</option>
                @foreach($pelayanans as $pelayanan)
                  <option value="{{ $pelayanan->id }}" 
                          data-deskripsi="{{ htmlentities($pelayanan->deskripsi) }}">
                    {{ $pelayanan->nama_pelayanan }}
                  </option>
                @endforeach
              </select>
            </div>

            {{-- Hasil syarat --}}
            <div id="syaratContainer" class="mt-4" style="display:none;">
              <h5 class="fw-bold">Syarat-Syarat:</h5>
              <ul class="list-group" id="syaratList"></ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const select = document.getElementById("pelayananSelect");
  const syaratContainer = document.getElementById("syaratContainer");
  const syaratList = document.getElementById("syaratList");

  select.addEventListener("change", function() {
    const selectedOption = select.options[select.selectedIndex];
    const deskripsi = selectedOption.getAttribute("data-deskripsi");

    if (deskripsi) {
      syaratList.innerHTML = "";

      // pisahkan per baris
      deskripsi.split("\n").forEach(syarat => {
        if (syarat.trim() !== "") {
          const li = document.createElement("li");
          li.classList.add("list-group-item");
          li.textContent = syarat.trim();
          syaratList.appendChild(li);
        }
      });

      syaratContainer.style.display = "block";
    } else {
      syaratContainer.style.display = "none";
    }
  });
});
</script>


    <!-- Diisi sama Pelayanan Yang Ada dari panel admin -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>


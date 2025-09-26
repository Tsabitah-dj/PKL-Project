<section style="margin-top: 200px;">
  <h2 class="mb-5">Bidang</h2>
  <div class="container">
    <div class="row">
      @foreach($bidangs as $bidang)
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{ $bidang->nama }}</h5>
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

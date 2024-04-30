<?php include "layout/header.php" ?>

  <div class="container md-3"> 
    <div class="col-12 col-md-9">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat</strong> Pesanan anda berhasil disimpan.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

      <div class="card">
        <div class="card-header text-center">BUKTI PEMESANAN PAKET WISATA</div>
        <div class="card-body">
          <table class="table">
            <tr>
              <td>Nama</td>
              <td>Zulfa Ramadani</td>
            </tr>
            <tr>
              <td>Jumlah Peserta</td>
              <td>2</td>
            </tr>
            <tr>
              <td>Waktu Perjalanan</td>
              <td>5</td>
            </tr>
            <tr>
              <td>Layanan Paket</td>
              <td>Penginapan, Transportasi</td>
            </tr>
            <tr>
              <td>Harga</td>
              <td>Rp. 900.000</td>
            </tr>
            <tr>
              <td>Jumlah Tagihan</td>
              <td>Rp. 1.000.000</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="card text-center">
        <span>Pesan Lagi?</span>
        <row>
          <a href="pendaftaran.php" class="btn btn-primary">Ya</a>
          <a href="index.php" class="btn btn-danger">Tidak</a>
        </row>
      </div>
    </div>    
  </div>

  <!-- Footer -->
  <?php include "layout/footer.php"?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
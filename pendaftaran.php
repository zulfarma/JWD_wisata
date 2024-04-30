<?php include "layout/header.php" ?>

  <div class="container md-3"> 
    <h2>Pemesanan Paket Wisata</h2>
    <form action="" method="post" autocomplete="off">
      <div class="row">
        <div class="mb-3 col-12 col-md-6">
          <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control form-control-sm" id="nama-lengkap" name="nama-lengkap" placeholder="" required>
        </div>
        <div class="mb-3 col-12 col-md-6">
          <label for="no-hp" class="form-label">No.telp</label>
          <input type="text" class="form-control form-control-sm" id="no-hp" name="no-hp" placeholder="" required>
        </div>
      </div>

      <div class="row">
        <div class="mb-3 col-12 col-md-6">
          <label for="tanggal-pesan" class="form-label">Tanggal Pesanan</label>
          <input type="date" class="form-control form-control-sm" id="tanggal-pesan" name="tanggal-pesan" placeholder="" required>
        </div>
        <div class="mb-3 col-12 col-md-6">
          <label for="durasi" class="form-label">Durasi</label>
          <div class="input-group input-group-sm">
            <input type="text" class="form-control form-control-sm" id="durasi" name="durasi" placeholder="" aria-describedby="basic-addon2" required>
            <span class="input-group-text" id="basic-addon2">hari</span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="mb-3 col-12 col-md-3">
          <label for="jml-peserta" class="form-label">Jumlah Peserta</label>
          <div class="input-group input-group-sm">
            <input type="text" class="form-control form-control-sm" id="jml-peserta" name="jml-peserta" placeholder="" aria-describedby="basic-addon2" required>
            <span class="input-group-text" id="basic-addon2">orang</span>
          </div>
        </div>
        <div class="mb-3 col-12 col-lg-9">
          <div>
            <label for="">Pilih Layanan Perjalanan</label>
            <div class="d-lg-flex justify-content-between">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Y" id="penginapan" name="penginapan" onclick="handlePenginapan(this)">
                <label class="form-check-label" for="penginapan">Penginapan (Rp. 1.000.000)</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Y" id="transportasi" name="transportasi" onclick="handleTransportasi(this)">
                <label class="form-check-label" for="transportasi">Transportasi (Rp. 1.200.000)</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Y" id="konsumsi" name="konsumsi" onclick="handleKonsumsi(this)">
                <label class="form-check-label" for="konsumsi">Konsumsi (Rp. 500.000)</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="mb-3 col-12 col-md-6">
          <label for="harga-paket" class="form-label">Harga Paket</label>
          <div class="input-group input-group-sm">
            <span class="input-group-text" id="basic-addon2">Rp</span>
            <input type="text" class="form-control form-control-sm" id="harga-paket" name="harga-paket" placeholder="" aria-describedby="basic-addon2" required>
          </div>
        </div>
        <div class="mb-3 col-12 col-md-6">
          <label for="jml-tagihan" class="form-label">Jumlah Tagihan</label>
          <div class="input-group input-group-sm">
            <span class="input-group-text" id="basic-addon2">Rp</span>
            <input type="text" class="form-control form-control-sm" id="jml-tagihan" name="jml-tagihan" placeholder="" aria-describedby="basic-addon2" required>
          </div>
        </div>
      </div>

      <input type="submit" class="btn btn-sm btn-primary" value="simpan">
      <button type="button" class="btn btn-sm btn-success" onclick="hitung()">Hitung</button>
      <button type="reset" class="btn btn-sm btn-danger">Reset</button>
    </form>
  </div>

  <!-- Footer -->
  <?php include "layout/footer.php"?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
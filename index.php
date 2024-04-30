<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JWD wisata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Beranda</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav me-auto mb-log-0">
          <a class="nav-link" aria-current="page" href="pendaftaran.php">Pendaftaran Paket</a>
          <a class="nav-link" aria-current="page" href="daftar.php">Daftar Paket</a>
          <a class="nav-link" aria-current="page"href="tentangkami.php">Tentang Kami</a>
        </div>
      </div>
    </div>
  </nav>
    <div class="px-5 py-4 text-white rounded" style="background-color: #79beff;">
      <h1>Wisata Indonesia</h1>
        <p>Wonderful Indonesia</p>
    </div>
  <div class="container">
      <div class="row mt-3">
        <div class="col-12 col-md-9">
          <div class="row row-cols-1 row-cols-3 g-4">
            <div class="col">
              <div class="card">
                <img src="assets/image/bromo.jpeg" height="145" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">BROMO</h5>
                  <p class="card-text">Gunung Bromo disebut juga Kaldera Tengger, adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini berada dalam empat wilayah kabupaten.</p>
                  <a href="pendaftaran.html" class="btn btn-danger">Daftar Paket</a>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <img src="assets/image/borobudur.jpeg" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">BOROBUDUR</h5>
                  <p class="card-text">Candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah. Borobudur dibangun dengan gaya Mandala yang mencerminkan alam semesta dalam kepercayaan Buddha.</p>
                  <a href="pendaftaran.html" class="btn btn-danger">Daftar Paket</a>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <img src="assets/image/lawang_sewu.jpg" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">LAWANG SEWU</h5>
                  <p class="card-text">Tempat ini bekas gedung perkantoran di Semarang, Jawa Tengah, Indonesia. Saat ini, bangunan ini digunakan sebagai museum dan galeri kereta api.</p>
                  <a href="pendaftaran.html" class="btn btn-danger">Daftar Paket</a>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <img src="assets/image/prambanan.jpeg" height="137" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">PRAMBANAN</h5>
                  <p class="card-text">Candi Prambanan merupakan candi Hindu yang terbesar di Indonesia. Candi ini terletak di desa Bokoharjo, Prambanan, Sleman, Yogyakarta.</p>
                  <a href="pendaftaran.html" class="btn btn-danger">Daftar Paket</a>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <img src="assets/image/raja_ampat.jpeg" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">RAJA AMPAT</h5>
                  <p class="card-text">Kepulauan Raja Ampat adalah gugusan kepulauan yang berlokasi di barat bagian Semenanjung Kepala Burung Pulau Papua.</p>
                  <a href="pendaftaran.html" class="btn btn-danger">Daftar Paket</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Paket Wisata 1</h5>
              <div class="text-center ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/oKDh404dE44?si=Vcl7c8mIyD8nC1pU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Paket Wisata 2</h5>
              <div class="text-center ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/oKDh404dE44?si=Vcl7c8mIyD8nC1pU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include "layout/footer.php"?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
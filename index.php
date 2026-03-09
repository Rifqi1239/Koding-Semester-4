<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Portal Berita</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body data-bs-theme="dark">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <!-- hederrr -->

  <header class="text-center py-4">
    <h1>RNews</h1>
    <p class="text-secondary">Portal Berita Teknologi & Informasi</p>
  </header>


  <!-- navigasi -->

  <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
    <div class="container">

      <a class="navbar-brand" href="#">RNews</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav me-auto">

          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Contact.php">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Pricing.php">Pricing</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Blog.php">Blog</a>
          </li>

        </ul>

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search berita">
          <button class="btn btn-outline-light">Search</button>
        </form>

      </div>
    </div>
  </nav>



  <!-- headline -->

  <div class="container mb-5">

    <div id="headlineNews" class="carousel slide">

      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="gambar1.jfif" class="d-block w-100" style="height:350px; object-fit:cover;">
          <div class="carousel-caption">
            <h3>Teknologi AI Semakin Berkembang</h3>
            <p>Perkembangan kecerdasan buatan membuka peluang baru di berbagai bidang industri.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="gambar2.jfif" class="d-block w-100" style="height:350px; object-fit:cover;">
          <div class="carousel-caption">
            <h3>Startup Baru Bermunculan</h3>
            <p>Banyak startup teknologi muncul membawa inovasi baru.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="gambar3.jfif" class="d-block w-100" style="height:350px; object-fit:cover;">
          <div class="carousel-caption">
            <h3>Perkembangan Internet Global</h3>
            <p>Jaringan internet dunia semakin cepat dan luas.</p>
          </div>
        </div>

      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#headlineNews" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#headlineNews" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>

    </div>
  </div>


  <!--card -->

  <div class="container mb-5">

    <h3 class="mb-4">Berita Terkini</h3>

    <div class="row g-4">

      <div class="col-md-4">

        <div class="card h-100 shadow">
          <img src="gambar1.jfif" class="card-img-top" style="height:200px; object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title">Perkembangan Teknologi AI</h5>
            <p class="card-text">Artificial Intelligence mulai digunakan di berbagai sektor industri modern.</p>
            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>

      </div>


      <div class="col-md-4">

        <div class="card h-100 shadow">
          <img src="gambar2.jfif" class="card-img-top" style="height:200px; object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title">Inovasi Smartphone Terbaru</h5>
            <p class="card-text">Perusahaan teknologi menghadirkan smartphone dengan fitur AI terbaru.</p>
            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>

      </div>


      <div class="col-md-4">

        <div class="card h-100 shadow">
          <img src="gambar3.jfif" class="card-img-top" style="height:200px; object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title">Internet Semakin Cepat</h5>
            <p class="card-text">Teknologi jaringan baru membuat koneksi internet lebih stabil dan cepat.</p>
            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

    </div>
  </div>


  <!-- berita -->

  <div class="container mb-5">

    <h3 class="mb-4">Artikel Terbaru</h3>

    <div class="card mb-3 shadow">
      <div class="card-body">
        <h5 class="card-title">Bagaimana AI Mengubah Dunia Kerja</h5>
        <p class="card-text">Perkembangan teknologi kecerdasan buatan membuat banyak perubahan pada dunia kerja modern.
        </p>
        <a href="#" class="btn btn-outline-light">Baca Artikel</a>
      </div>
    </div>

    <div class="card mb-3 shadow">
      <div class="card-body">
        <h5 class="card-title">Tren Teknologi 2026</h5>
        <p class="card-text">Beberapa teknologi diprediksi akan menjadi tren besar dalam beberapa tahun ke depan.</p>
        <a href="#" class="btn btn-outline-light">Baca Artikel</a>
      </div>
    </div>

    <div class="card mb-3 shadow">
      <div class="card-body">
        <h5 class="card-title">Keamanan Data di Era Digital</h5>
        <p class="card-text">Pentingnya menjaga keamanan data pribadi di tengah perkembangan teknologi.</p>
        <a href="#" class="btn btn-outline-light">Baca Artikel</a>
      </div>
    </div>

    <div class="card mb-3 shadow">
      <div class="card-body">
        <h5 class="card-title">Dampak MBG pada perkembangan pelajar</h5>
        <p class="card-text"> antusiasme peserta didik terhadap mbg </p>
        <a href="#" class="btn btn-outline-light">Baca Artikel</a>
      </div>
    </div>

  </div>


  <!--copyright-->

  <footer class="bg-dark text-center p-4 mt-5">

    <p class="mb-1">© 2026 Rifqi Mahdhika Rindani</p>

    <p class="text-secondary mb-0">
      Website berita sederhana menggunakan Bootstrap
    </p>

  </footer>


</body>

</html>
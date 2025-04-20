<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SPK Vape</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
    }

    .carousel-caption {
      background-color: rgba(0, 0, 0, 0.6);
      border-radius: 10px;
      padding: 10px 20px;
    }

    .vape-img {
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .vape-img:hover {
      transform: scale(1.02);
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-result {
      animation: fadeInUp 1s ease forwards;
    }

    .vape-img-fixed {
      height: 400px;
      object-fit: cover;
      width: 100%;
    }

    .carousel-item {
      transition: opacity 0.6s ease-in-out;
    }

    .carousel-fade .carousel-item {
      opacity: 0;
      transition-duration: .6s;
    }

    .carousel-fade .carousel-item.active {
      opacity: 1;
    }

    .fadeIn {
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: scale(0.98);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }
  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="#">
        <i class="bi bi-fire"></i> Vape Cuy
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav align-items-center">
            <li class="nav-item">
            <a class="nav-link" href="/login">
                <button class="btn btn-primary fw-semibold">
                <i class="bi bi-box-arrow-in-right me-1"></i> Masuk
                </button>
            </a>
            </li>
        </ul>
        </div>
    </div>
</nav>

  <!-- Carousel Vape -->
  <div id="carouselVape" class="carousel slide mt-2" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="container">
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
              <img src="{{asset ('assets/img/img1.png')}}" class="vape-img-fixed" alt="Vape 1" />
              <div class="carousel-caption d-none d-md-block">

                <p>Cari Vape Pilihan Anda!</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset ('assets/img/img2.png')}}" class="vape-img-fixed" alt="Vape 2" />
              <div class="carousel-caption d-none d-md-block">

                <p>Sesuikan Dengan Selera Anda</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset ('assets/img/img3.jpg')}}" class="vape-img-fixed" alt="Vape 3" />
              <div class="carousel-caption d-none d-md-block">

                <p>SPK Vape Cuy Pilihan Yang Tepat!</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselVape" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselVape" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </button>
    </div>
  </div>



    <div class="container py-5">
        <div class="row g-4">
          <!-- Kiri: Form SPK -->
          <div class="col-lg-6">
            <div class="card shadow rounded-4 border-0">
              <div class="card-body p-4">
                <h2 class="fw-bold mb-4 text-primary text-center">SPK Pemilihan Vape</h2>
                <form action="{{ route('vape.cari') }}" method="POST">
                    @csrf
                  <div class="mb-3">
                    <label for="harga_maks" class="form-label">Harga Maksimal</label>
                    <input type="number" name="harga_maks" id="harga_maks" class="form-control form-control-lg" required>
                  </div>

                  <div class="mb-3">
                    <label for="baterai_min" class="form-label">Baterai Minimal</label>
                    <input type="number" name="baterai_min" id="baterai_min" class="form-control form-control-lg" required>
                  </div>

                  <div class="mb-3">
                    <label for="pengisian_daya" class="form-label">Pengisian Daya</label>
                    <select name="pengisian_daya" id="pengisian_daya" class="form-select form-select-lg" required>
                      <option value="Cepat">Cepat</option>
                      <option value="Normal">Normal</option>
                    </select>
                  </div>

                  <div class="mb-4">
                    <label for="kemudahan_penggunaan" class="form-label">Kemudahan Penggunaan</label>
                    <select name="kemudahan_penggunaan" id="kemudahan_penggunaan" class="form-select form-select-lg" required>
                      <option value="Mudah">Mudah</option>
                      <option value="Sedang">Sedang</option>
                      <option value="Expert">Expert</option>
                    </select>
                  </div>

                  <button type="submit" class="btn btn-primary w-100 btn-lg">Cari Vape</button>
                </form>
              </div>
            </div>
          </div>

          <!-- Kanan: Info Aplikasi -->
          <div class="col-lg-6">
            <div class="card shadow-sm rounded-4 bg-light border-0 h-100">
              <div class="card-body p-4 d-flex flex-column justify-content-center">
                <h4 class="text-secondary fw-bold mb-3">Tentang Aplikasi</h4>
                <p class="mb-2">
                  Aplikasi ini merupakan Sistem Pendukung Keputusan (SPK) untuk membantu pengguna memilih vape terbaik berdasarkan beberapa kriteria seperti harga, kapasitas baterai, jenis pengisian daya, dan kemudahan penggunaan.
                </p>
                <p class="mb-2">
                  Metode yang digunakan adalah <strong>SMART (Simple Multi Attribute Rating Technique)</strong> yang memberikan nilai skor pada setiap pilihan berdasarkan bobot preferensi pengguna.
                </p>
                <p class="text-muted small mt-3">Dikembangkan untuk tujuan pembelajaran dan pengambilan keputusan yang lebih cerdas dan cepat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

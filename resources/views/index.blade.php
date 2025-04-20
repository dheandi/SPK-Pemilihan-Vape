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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">SPK Vape cuy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="/login">Masuk</a>
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

  <!-- Konten SPK -->
  <div class="container py-4">
    <h1 class="text-center mb-4">SPK Pemilihan Vape</h1>
    <form action="{{ route('vape.cari') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label>Harga Maksimal</label>
            <input type="number" name="harga_maks" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label>Baterai Minimal</label>
            <input type="number" name="baterai_min" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label>Pengisian Daya</label>
            <select name="pengisian_daya" class="form-control" required>
                <option value="Cepat">Cepat</option>
                <option value="Normal">Normal</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label>Kemudahan Penggunaan</label>
            <select name="kemudahan_penggunaan" class="form-control" required>
                <option value="Mudah">Mudah</option>
                <option value="Sedang">Sedang</option>
                <option value="Expert">Expert</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Cari Vape</button>
    </form>
  </div>


  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

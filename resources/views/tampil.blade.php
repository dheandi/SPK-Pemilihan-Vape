<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Rekomendasi Vape - SPK Vape</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .vape-card {
      transition: transform 0.3s ease;
    }

    .vape-card:hover {
      transform: scale(1.05);
    }

    .vape-img {
      height: 200px;
      object-fit: cover;
      width: 100%;
    }

    .vape-score {
      font-size: 1.2rem;
      font-weight: bold;
      color: #28a745;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">SPK Vape Cuy</a>
    </div>
  </nav>

  <!-- Rekomendasi Vape -->
  <div class="container py-4">
    <h1 class="text-center mb-4">Rekomendasi Vape Terbaik untuk Anda</h1>

    @if(count($vapeScores) > 0)
    <div class="row">
        @foreach($vapeScores->take(10) as $vape)
        <div class="col-md-4 mb-4">
          <div class="card vape-card shadow-sm">
            <img src="{{ asset('storage/' . $vape->foto) }}" class="vape-img card-img-top" alt="Vape Image">
            <div class="card-body">
              <h5 class="card-title">{{ $vape->nama }}</h5>
              <p class="card-text">Harga: Rp {{ number_format($vape->harga, 0, ',', '.') }}</p>
              <p class="card-text">Baterai: {{ $vape->baterai }} mAh</p>
              <p class="card-text">Pengisian Daya: {{ $vape->pengisian_daya }}</p>
              <p class="card-text">Kemudahan Penggunaan: {{ $vape->kemudahan_penggunaan }}</p>
              <p class="vape-score">Skor: {{ $vape->score }}</p>
            </div>
          </div>
        </div>
        @endforeach
    </div>
    @else
        <p class="text-center">Tidak ada vape yang memenuhi kriteria.</p>
    @endif

    <!-- Tombol Kembali -->
    <div class="text-center mt-4">
        <a href="{{ route('hitungan.showForm') }}" class="btn btn-danger btn-lg">Kembali ke Menu Awal</a>
      </div>
    </div>
  </div>

  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

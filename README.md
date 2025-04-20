# SPK Pemilihan Vape

## Features

- Login Admin
- CRUD Data Vape
- Validation
- Sweat Alert
- Datatable
- Javascript Validation
- FontAwesome 6

## Required

- Laravel 10
- PHP newer version
- Composer
- Datatable
- Sweetalert
- Javascript
- FontAwesome 6
- Server Xampp/Laragon

## Installation

## 📂 Clone Project

Untuk menyalin repository ini ke komputer lokal, jalankan perintah berikut di terminal:

```bash
git clone https://github.com/dheandi/SPK-Pemilihan-Vape.git
```

## ⚙️ Instalasi & Setup (Laravel)

Jika ini merupakan project Laravel, ikuti langkah-langkah berikut:

### 1. Install Dependency
```bash
composer install
```

### 2. Salin File Environment
```bash
cp .env.example .env
```

### 3. Generate Key Aplikasi
```bash
php artisan key:generate
```

### 4. Setup Database
- Buat database baru di MySQL.
- Edit konfigurasi database di file `.env` sesuai dengan setting MySQL kamu:
  ```env
  DB_DATABASE=nama_database
  DB_USERNAME=root
  DB_PASSWORD=
  ```

### 5. Jalankan Migrasi
```bash
php artisan migrate
```

### 6. Jalankan DB Seeder
```bash
php artisan db:seed 
```

### 7. Jalankan Server Lokal
```bash
php artisan serve
```

Akses melalui browser: [http://localhost:8000](http://localhost:8000)

## ✅ Fitur Utama
- Penilaian dengan metode SMART
- Input data alternatif dan kriteria
- Perhitungan nilai akhir dan rekomendasi


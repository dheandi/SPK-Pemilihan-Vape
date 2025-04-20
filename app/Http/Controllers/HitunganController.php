<?php

namespace App\Http\Controllers;

use App\Models\Vape;
use Illuminate\Http\Request;

class HitunganController extends Controller
{
    // Menampilkan Form Input
    public function showForm()
    {
        return view('index');
    }

    // Fungsi untuk melakukan perhitungan berdasarkan input pengguna
    public function cari(Request $request)
    {
        // Ambil data dari form input
        $hargaMax = $request->input('harga_maks');
        $bateraiMin = $request->input('baterai_min');
        $pengisianDaya = $request->input('pengisian_daya');
        $kemudahanPenggunaan = $request->input('kemudahan_penggunaan');

        // Ambil semua data vape dari database
        $vapes = Vape::all();

        // Hitung skor SMART untuk setiap vape
        $vapeScores = $vapes->map(function ($vape) use ($hargaMax, $bateraiMin, $pengisianDaya, $kemudahanPenggunaan) {
            // Hitung skor untuk setiap atribut dengan menggunakan fungsi hitung untuk masing-masing
            $hargaScore = $this->hitungHargaScore($vape->harga, $hargaMax, $vape->bobot_harga);
            $bateraiScore = $this->hitungBateraiScore($vape->baterai, $bateraiMin, $vape->bobot_baterai);
            $pengisianDayaScore = $this->hitungPengisianDayaScore($vape->pengisian_daya, $pengisianDaya, $vape->bobot_pengisian_daya);
            $kemudahanScore = $this->hitungKemudahanScore($vape->kemudahan_penggunaan, $kemudahanPenggunaan, $vape->bobot_kemudahan_penggunaan);

            // Total skor untuk vape tersebut (menambahkan semua skor atribut)
            $totalScore = $hargaScore + $bateraiScore + $pengisianDayaScore + $kemudahanScore;

            // Menambahkan skor total ke objek vape
            $vape->score = $totalScore;
            return $vape;
        });

        // Urutkan berdasarkan skor tertinggi
        $vapeScores = $vapeScores->sortByDesc('score');

        // Kirimkan hasil pencarian ke view
        return view('tampil', compact('vapeScores'));
    }

    // Fungsi untuk menghitung skor harga
    private function hitungHargaScore($harga, $hargaMax, $bobot)
    {
        if ($harga <= $hargaMax) {
            return $bobot * (1 - ($harga / $hargaMax)); // Semakin murah, semakin tinggi skornya
        }
        return 0;
    }

    // Fungsi untuk menghitung skor baterai
    private function hitungBateraiScore($baterai, $bateraiMin, $bobot)
    {
        if ($baterai >= $bateraiMin) {
            return $bobot * ($baterai / $bateraiMin); // Semakin besar baterai, semakin tinggi skornya
        }
        return 0;
    }

    // Fungsi untuk menghitung skor pengisian daya
    private function hitungPengisianDayaScore($pengisianDaya, $pengisianDayaInput, $bobot)
    {
        if ($pengisianDaya == $pengisianDayaInput) {
            return $bobot; // Skor penuh jika pengisian daya sesuai input pengguna
        }
        return 0;
    }

    // Fungsi untuk menghitung skor kemudahan penggunaan
    private function hitungKemudahanScore($kemudahan, $kemudahanInput, $bobot)
    {
        if ($kemudahan == $kemudahanInput) {
            return $bobot; // Skor penuh jika kemudahan sesuai dengan input pengguna
        }
        return 0;
    }
}

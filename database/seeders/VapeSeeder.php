<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class VapeSeeder extends Seeder
{
    public function run()
    {
        DB::table('vapes')->insert([
            [
                'baterai' => 600,
                'bobot_baterai' => 0.3,
                'bobot_harga' => 0.4,
                'bobot_kemudahan_penggunaan' => 0.2,
                'bobot_pengisian_daya' => 0.3,
                'pengisian_daya' => 'Cepat',
                'kemudahan_penggunaan' => 'Mudah',  // Sesuaikan dengan nilai enum
                'harga' => 1500,
                'nama' => 'Vape Alpha',
                'foto' => 'uploads/foto-vape/RuaZOa3Xosc0H9xOEIZtha6cVu8j8r.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'baterai' => 550,
                'bobot_baterai' => 0.25,
                'bobot_harga' => 0.35,
                'bobot_kemudahan_penggunaan' => 0.15,
                'bobot_pengisian_daya' => 0.25,
                'pengisian_daya' => 'Normal',
                'kemudahan_penggunaan' => 'Sedang',  // Sesuaikan dengan nilai enum
                'harga' => 1300,
                'nama' => 'Vape Beta',
                'foto' => 'uploads/foto-vape/7W8g4MNsjqAb018RLrRFkGVj4owHlc.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'baterai' => 450,
                'bobot_baterai' => 0.2,
                'bobot_harga' => 0.3,
                'bobot_kemudahan_penggunaan' => 0.1,
                'bobot_pengisian_daya' => 0.2,
                'pengisian_daya' => 'Cepat',
                'kemudahan_penggunaan' => 'Expert',  // Sesuaikan dengan nilai enum
                'harga' => 1100,
                'nama' => 'Vape Gamma',
                'foto' => 'uploads/foto-vape/uivobr54S3phaNWnNFMoDxLHltJWGv.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'baterai' => 700,
                'bobot_baterai' => 0.35,
                'bobot_harga' => 0.45,
                'bobot_kemudahan_penggunaan' => 0.2,
                'bobot_pengisian_daya' => 0.4,
                'pengisian_daya' => 'Cepat',
                'kemudahan_penggunaan' => 'Mudah',  // Sesuaikan dengan nilai enum
                'harga' => 1700,
                'nama' => 'Vape Delta',
                'foto' => 'uploads/foto-vape/4eXYmc94yiuHP6ubRZ5QK6rrMb6WhC.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'baterai' => 400,
                'bobot_baterai' => 0.15,
                'bobot_harga' => 0.25,
                'bobot_kemudahan_penggunaan' => 0.15,
                'bobot_pengisian_daya' => 0.2,
                'pengisian_daya' => 'Normal',
                'kemudahan_penggunaan' => 'Sedang',  // Sesuaikan dengan nilai enum
                'harga' => 1000,
                'nama' => 'Vape Omega',
                'foto' => 'uploads/foto-vape/H84AsnPy1lFT6yquoSvGQhlRDojnxA.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

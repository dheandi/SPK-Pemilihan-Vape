<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vape extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_vape';  // Tentukan primary key yang digunakan
    public $incrementing = true;
    protected $table = 'vapes';

    protected $fillable = [
        'nama',
        'harga',
        'bobot_harga',
        'bobot_baterai',
        'bobot_pengisian_daya',
        'bobot_kemudahan_penggunaan',
        'baterai',
        'pengisian_daya',
        'kemudahan_penggunaan',
        'foto'];
}

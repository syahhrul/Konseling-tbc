<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckHarian extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan
    protected $table = 'check_harian';

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'user_id', 'frekuensi_batuk', 'panas', 'keringat_dingin', 
        'lupa_minum_obat', 'alasan_lupa', 'mual_saat_minum_obat', 'berat_badan_turun'
    ];
}

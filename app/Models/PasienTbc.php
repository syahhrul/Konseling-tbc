<?php

namespace App\Models;
use App\Models\PasienTbc;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

use Illuminate\Database\Eloquent\Model;

class PasienTbc extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'nama',
        'usia',
        'jenis_kelamin',
        'tanggal_diagnosis',
        'stadium',
        'status_pengobatan',
    ];
}

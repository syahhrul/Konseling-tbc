<?php

namespace App\Http\Controllers;

use App\Models\CheckHarian;
use Illuminate\Support\Facades\Auth;

class DataPasienController extends Controller
{
    public function index()
    {
        // Mengambil data CheckHarian dengan relasi User menggunakan eager loading
        $checkHarians = CheckHarian::with('user')->get(); // Ambil data dengan relasi User

        // Cek jika data kosong
        if ($checkHarians->isEmpty()) {
            return view('datapasien')->with('message', 'Tidak ada data pasien.');
        }

        // Kirim data ke view
        return view('datapasien', compact('checkHarians')); // Pastikan data dikirim ke view dengan compact
    }
}

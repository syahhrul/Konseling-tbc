<?php

namespace App\Http\Controllers;

use App\Models\User; // Pastikan untuk mengimpor model User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataPasienController extends Controller
{
    /**
     * Menampilkan daftar pengguna yang memiliki data check harian.
     */
    public function index()
    {
        // 1. whereHas: Hanya ambil user yang punya minimal 1 record.
        // 2. with('checkHarians'): Ambil SEMUA data checkHarian yang terhubung dengan user tersebut.
        // Ini adalah kunci perbaikannya.
        $users = User::whereHas('checkHarians')->with('checkHarians')->get();

        // Cek jika tidak ada pengguna yang memiliki data
        if ($users->isEmpty()) {
            return view('datapasien')->with('message', 'Tidak ada data pasien yang tersedia.');
        }

        // Kirim data ke view
        return view('datapasien', compact('users'));
    }

    /**
     * Menampilkan daftar semua pengguna yang terdaftar.
     */
    public function dataPengguna()
    {
        $users = User::all();
        return view('data_pengguna', compact('users'));
    }
}
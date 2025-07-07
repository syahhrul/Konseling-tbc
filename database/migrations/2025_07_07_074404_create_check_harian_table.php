<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CheckHarian;
use Illuminate\Support\Facades\Auth;

class CheckHarianController extends Controller
{
    // Menampilkan halaman check harian
    public function index()
    {
        return view('checkharian');  // Halaman untuk input data check harian
    }

    // Menyimpan data check harian ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'frekuensi_batuk' => 'required|boolean',
            'panas' => 'required|boolean',
            'keringat_dingin' => 'required|boolean',
            'lupa_minum_obat' => 'required|boolean',
            'alasan_lupa' => 'nullable|string',
            'mual_saat_minum_obat' => 'required|boolean',
            'berat_badan_turun' => 'required|boolean',
        ]);

        // Menyimpan data ke tabel check_harian
        CheckHarian::create([
            'user_id' => Auth::id(),  // Menggunakan ID pengguna yang sedang login
            'frekuensi_batuk' => $request->frekuensi_batuk,
            'panas' => $request->panas,
            'keringat_dingin' => $request->keringat_dingin,
            'lupa_minum_obat' => $request->lupa_minum_obat,
            'alasan_lupa' => $request->alasan_lupa,
            'mual_saat_minum_obat' => $request->mual_saat_minum_obat,
            'berat_badan_turun' => $request->berat_badan_turun,
        ]);

        // Menambahkan pesan sukses ke session
        return redirect()->back()->with('success', 'Data Check Harian Berhasil Disimpan!');
    }
}

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
        return view('checkharian');
    }

    // Menyimpan data check harian ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'frekuensi_batuk' => 'required|string', // Mengharuskan input berupa string
            'panas' => 'required|string',
            'keringat_dingin' => 'required|string',
            'lupa_minum_obat' => 'required|string',
            'alasan_lupa' => 'nullable|string',
            'mual_saat_minum_obat' => 'required|string',
            'berat_badan_turun' => 'required|string',
        ]);

        // Menyimpan data ke tabel check_harian dengan kata-kata yang lebih jelas
        CheckHarian::create([
            'user_id' => Auth::id(),
            'frekuensi_batuk' => $this->getBatukDescription($request->frekuensi_batuk),
            'panas' => $this->getPanasDescription($request->panas),
            'keringat_dingin' => $this->getKeringatDinginDescription($request->keringat_dingin),
            'lupa_minum_obat' => $this->getLupaMinumObatDescription($request->lupa_minum_obat),
            'alasan_lupa' => $request->alasan_lupa,
            'mual_saat_minum_obat' => $this->getMualDescription($request->mual_saat_minum_obat),
            'berat_badan_turun' => $this->getBeratBadanDescription($request->berat_badan_turun),
        ]);

        // Menambahkan pesan sukses ke session
        return redirect()->back()->with('success', 'Data Check Harian Berhasil Disimpan!');
    }

    // Fungsi untuk menerjemahkan input menjadi deskripsi yang lebih jelas
    private function getBatukDescription($value)
    {
        return $value === 'Batuk' ? 1 : 0;  // Mengubah string menjadi 1 atau 0
    }

    private function getPanasDescription($value)
    {
        return $value === 'Panas' ? 1 : 0;  // Mengubah string menjadi 1 atau 0
    }

    private function getKeringatDinginDescription($value)
    {
        return $value === 'Keringat Dingin' ? 1 : 0;  // Mengubah string menjadi 1 atau 0
    }

    private function getLupaMinumObatDescription($value)
    {
        return $value === 'Lupa Minum Obat' ? 1 : 0;  // Mengubah string menjadi 1 atau 0
    }

    private function getMualDescription($value)
    {
        return $value === 'Mual' ? 1 : 0;  // Mengubah string menjadi 1 atau 0
    }

    private function getBeratBadanDescription($value)
    {
        return $value === 'Berat Badan Turun' ? 1 : 0;  // Mengubah string menjadi 1 atau 0
    }
}

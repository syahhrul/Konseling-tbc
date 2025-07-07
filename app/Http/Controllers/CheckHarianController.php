<?php

namespace App\Http\Controllers;

use App\Models\CheckHarian;  // Import model CheckHarian
use Illuminate\Http\Request;

class CheckHarianController extends Controller
{
    public function index()
    {
        return view('checkharian');  // Pastikan view 'checkharian' ada di resources/views
    }

    public function store(Request $request)
    {
        // Menyimpan data ke tabel check_harian
        CheckHarian::create([
            'user_id' => auth()->id(),
            'frekuensi_batuk' => $request->frekuensi_batuk,
            'panas' => $request->panas,
            'keringat_dingin' => $request->keringat_dingin,
            'lupa_minum_obat' => $request->lupa_minum_obat,
            'alasan_lupa' => $request->alasan_lupa,
            'mual_saat_minum_obat' => $request->mual_saat_minum_obat,
            'berat_badan_turun' => $request->berat_badan_turun,
        ]);

        return redirect()->back()->with('success', 'Data Check Harian Berhasil Disimpan!');
    }
}

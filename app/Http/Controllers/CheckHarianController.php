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
        // Ambil data check_harian sesuai user yang sedang login
        $checkHarian = CheckHarian::where('user_id', Auth::id())
                                  ->orderBy('tanggal', 'desc')
                                  ->get(); // Mengambil semua data check_harian berdasarkan user yang login

        // Pastikan data diteruskan ke view 'output_pasien'
        return view('output_pasien', compact('checkHarian')); // Menampilkan data hasil cek harian
    }

    // Menampilkan form untuk mengisi data check harian
    public function create()
    {
        return view('checkharian'); // Mengarahkan ke form untuk mengisi check harian
    }

    // Menyimpan data check harian ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'tanggal' => 'required|date',
            'suhu' => 'required|numeric',
            'berat' => 'required|numeric',
            'nafsu_makan' => 'required|string',
            'minum_obat' => 'required|string',
            'catatan_pete' => 'required|string',
        ]);

        // Menyimpan data ke tabel check_harian
        CheckHarian::create([
            'user_id' => Auth::id(),
            'tanggal' => $request->tanggal,
            'suhu' => $request->suhu,
            'berat' => $request->berat,
            'nafsu_makan' => $request->nafsu_makan,
            'minum_obat' => $request->minum_obat,
            'catatan_pete' => $request->catatan_pete,
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('checkharian')->with('success', 'Data berhasil disimpan.');
    }
}

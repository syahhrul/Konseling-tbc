<?php

namespace App\Http\Controllers;
use App\Models\PasienTbc;

use Illuminate\Http\Request;

class PasienTbcController extends Controller
{
    //
     public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'usia' => 'required|integer|min:0',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_diagnosis' => 'required|date',
            'stadium' => 'required|in:Awal,Sedang,Lanjut',
            'status_pengobatan' => 'required|in:Belum Mulai,Sedang Berlangsung,Selesai',
        ]);

        PasienTbc::create($validated);

        return redirect()->back()->with('success', 'Data pasien TBC berhasil disimpan.');
    }
}

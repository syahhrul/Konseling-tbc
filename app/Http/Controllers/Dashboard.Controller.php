<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PasienTbc;

class DashboardController extends Controller
{
    public function perawatDashboard()
    {
        // Menampilkan dashboard perawat
        return view('dashboard_perawat');  // Pastikan Anda sudah memiliki view dashboard perawat
    }


    public function pasienDashboard()
    {
        // Menampilkan dashboard pasien
        return view('dashboard');  // Pastikan Anda sudah memiliki view dashboard pasien
    }

public function dataPasien()
{
    $stadiumCounts = PasienTbc::select('stadium', DB::raw('count(*) as total'))
                        ->groupBy('stadium')
                        ->pluck('total', 'stadium'); // key = stadium, value = total

    $labels = $stadiumCounts->keys();    // nama stadium
    $data = $stadiumCounts->values();    // total masing-masing stadium

    return view('datapasien', compact('labels', 'data'));
}
}

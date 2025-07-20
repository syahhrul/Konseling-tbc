<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartStadiumController extends Controller
{
    //

    public function showChart()
    {
        $stadiumCounts = PasienTbc::select('stadium', DB::raw('count(*) as total'))
                            ->groupBy('stadium')
                            ->pluck('total', 'stadium');

        $labels = $stadiumCounts->keys();    // Nama stadium
        $data = $stadiumCounts->values();    // Jumlah

        return view('datapasien', compact('labels', 'data'));
    }
}

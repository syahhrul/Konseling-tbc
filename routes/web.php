<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pusatinfotbc', function () {
    return view('pusatinfotbc');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kegiatan', function () {
    return view('kegiatan');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


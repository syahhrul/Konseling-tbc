<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CheckHarianController;


// Register multi-step
Route::get('/register/step1', [RegisterController::class, 'step1'])->name('register.step1');
Route::post('/register/step1', [RegisterController::class, 'postStep1'])->name('register.step1.post');
Route::get('/register/step2', [RegisterController::class, 'step2'])->name('register.step2');
Route::post('/register/step2', [RegisterController::class, 'submit'])->name('register.submit');


// Login
Route::post('/login', [LoginController::class, 'submitLogin'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login', function () {
    return view('login'); // atau route ke LoginController
})->name('login');
Route::get('/login', [LoginController::class, 'index'])->name('login');

// halaman dashboard setelah login
Route::get('/welcomeafterlogin', function () {
    return view('welcomeafterlogin');
})->name('welcomeafterlogin');

// Route untuk logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Halaman utama dan lainnya
Route::get('/', fn() => view('welcome'));
Route::get('/tentang', fn() => view('tentang'));
Route::get('/kegiatan', fn() => view('kegiatan'));
// Route::get('/dashboard', fn() => view('dashboard'));

Route::get('/dashboard', fn() => view('dashboard'));



// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman lain
Route::get('/pusatinfotbc', function () {
    return view('pusatinfotbc');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kegiatan', function () {
    return view('kegiatan');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Halaman login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Proses login (submit form login)
Route::post('/login', [LoginController::class, 'submitLogin'])->name('login.submit');

Route::get('/register_step1', function () {
    return view('register_step1'); // Sesuaikan nama view jika berbeda
})->name('register.step1');

Route::get('/register_step2', function () {
    return view('register_step2'); // pastikan file register_step2.blade.php ada
})->name('register.step2');


Route::get('/tentangafterlogin', function () {
    return view('tentangafterlogin');
})->name('tentangafterlogin');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard'); // pastikan file dashboard.blade.php ada di resources/views
})->name('dashboard');


// Profile route
Route::middleware('auth')->get('/profile', function () {
    return view('profile'); // Sesuaikan dengan nama view untuk profil
})->name('profile');

// Privacy route
Route::middleware('auth')->get('/privacy', function () {
    return view('privacy'); // Sesuaikan dengan nama view untuk privasi
})->name('privacy');

// Settings route
Route::middleware('auth')->get('/settings', function () {
    return view('settings'); // Sesuaikan dengan nama view untuk pengaturan
})->name('settings');

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/tentangafterlogin', function () {
    return view('tentangafterlogin');
})->name('tentangafterlogin');

Route::middleware('auth')->get('/checkharian', function () {
    return view('checkharian');
})->name('checkharian');

Route::get('/register', function () {
    return view('register'); // pastikan Anda sudah memiliki view register.blade.php
})->name('register');

Route::post('/checkharian', [CheckHarianController::class, 'store'])->name('checkharian.store');

Route::get('/bantuan', function () {
    return view('bantuan'); // pastikan Anda sudah memiliki view bantuan.blade.php
})->name('bantuan');

// Route untuk dashboard perawat
Route::get('/dashboard_perawat', function () {
    return view('dashboard_perawat');  // Mengarah ke halaman dashboard_perawat.blade.php
})->name('dashboard_perawat');

Route::get('/datapasien', function () {
    return view('datapasien');  // Mengarah ke halaman dashboardperawat.blade.php
})->name('datapasien');



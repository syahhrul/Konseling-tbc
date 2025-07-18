<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    // Tampilkan halaman login
    public function index()
    {
        return view('login');
    }
    

    // Proses form login
    public function submitLogin(Request $request)
    {
        // Validasi input
        $request->validate([
            'userId'   => 'required|string', // Menggunakan userId
            'password' => 'required', // Validasi password
            // 'role'     => 'required|in:perawat,pasien', // Validasi role
        ]);

        // Mencari user berdasarkan userId
        $user = User::where('username', $request->userId)->first(); // Cari user berdasarkan username (userId)

        // Cek jika user ada dan password valid
        if ($user && Auth::attempt(['username' => $request->userId, 'password' => $request->password])) {
        // Jika login berhasil, arahkan ke halaman yang diinginkan setelah login
        return redirect()->route('welcomeafterlogin'); // Menggunakan redirect()->route untuk pengalihan yang lebih jelas
}


        // Jika user tidak ditemukan atau password salah
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    // Logout user
    public function logout(Request $request)
    {
        Auth::logout(); // Logout user
        $request->session()->invalidate(); // Menghapus session
        $request->session()->regenerateToken(); // Regenerasi token CSRF

        // Redirect ke halaman login setelah logout
        return redirect()->route('login')->with('success', 'Berhasil logout.');
    }

    public function login(Request $request)
    {
        // Validasi input login
        $request->validate([
            'userId' => 'required',
            'password' => 'required',
            'role' => 'required', // Pastikan role terisi
        ]);

        // // Cek kredensial login
        // if (Auth::attempt(['user_id' => $request->userId, 'password' => $request->password])) {
        //     $role = Auth::user()->role;
            
        //     // Menyimpan role pada session untuk digunakan di dashboard
        //     session(['role' => $role]);

        //     // Arahkan pengguna berdasarkan role
        //     if ($role == 'perawat') {
        //         return redirect()->route('dashboard_perawat');  // Menuju ke dashboard perawat
        //     } elseif ($role == 'pasien') {
        //         return redirect()->route('dashboard');  // Menuju ke dashboard pasien
        //     } else {
        //         return redirect()->route('login')->withErrors('Peran tidak valid.');
        //     }
        // } else {
        //     // Login gagal
        //     return back()->withErrors('Gagal login. Cek kembali User ID atau Password.');
        // }
    }
}

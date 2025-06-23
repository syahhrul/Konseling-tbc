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
            'role'     => 'required|in:perawat,pasien', // Validasi role
        ]);

        // Mencari user berdasarkan userId
        $user = User::where('username', $request->userId)->first(); // Cari user berdasarkan username (userId)

        // Cek jika user ada dan password valid
        if ($user && Auth::attempt(['username' => $request->userId, 'password' => $request->password])) {
            // Jika login berhasil, cek apakah role sesuai
            if ($user->role === $request->role) {
                // Jika sesuai, arahkan ke halaman yang diinginkan setelah login
                return redirect()->route('welcomeafterlogin'); // Menggunakan redirect()->route untuk pengalihan yang lebih jelas
            } else {
                // Logout jika role tidak sesuai
                Auth::logout();
                return back()->withErrors(['role' => 'Peran tidak sesuai.']);
            }
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
}

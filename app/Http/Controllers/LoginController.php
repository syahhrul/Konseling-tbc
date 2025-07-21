<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;  // Menggunakan Hash Facade di sini
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
        // Validasi input login
        $request->validate([
            'username'   => 'required|string',  // Menggunakan username
            'password' => 'required|string', // Validasi password
        ]);

        // Mencari user berdasarkan username
        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Jika password cocok, login berhasil
            Auth::login($user); // Login user ke session
            return redirect()->route('welcomeafterlogin')->with('success', 'Login berhasil.');
        } else {
            // Jika login gagal
            return back()->withErrors(['username' => 'User ID atau password salah.']);
        }
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

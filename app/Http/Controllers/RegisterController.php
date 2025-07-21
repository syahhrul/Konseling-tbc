<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Tampilkan halaman Step 1
    public function step1()
    {
        return view('register_step1');
    }

    // Proses data Step 1 dan simpan ke session
    public function postStep1(Request $request)
    {
        // Validasi data dari step 1
        $validator = Validator::make($request->all(), [
            'nama_depan'     => 'required|string|max:50',
            'nama_belakang'  => 'nullable|string|max:50',
            'tanggal_lahir'  => 'required|date',
            'jenis_kelamin'  => 'required|in:Laki-laki,Perempuan,Lainnya',
            'alamat'         => 'required|string|max:255',
        ]);

        // Jika validasi gagal, kembalikan ke form step 1 dengan pesan error
        if ($validator->fails()) {
            return redirect()->route('register.step1')
                             ->withErrors($validator)
                             ->withInput();
        }

        // Simpan data step 1 ke session
        $request->session()->put('register_step1', $request->only([
            'nama_depan', 'nama_belakang', 'tanggal_lahir', 'jenis_kelamin', 'alamat'
        ]));

        return redirect()->route('register.step2');
    }

    // Tampilkan halaman Step 2
    public function step2()
    {
        // Pastikan user tidak bisa langsung akses step 2 tanpa isi step 1
        if (!session()->has('register_step1')) {
            return redirect()->route('register.step1')->withErrors('Silakan isi data tahap pertama terlebih dahulu.');
        }

        return view('register_step2');
    }

    // Proses submit data final (step 2)
    public function submit(Request $request)
    {
        // Ambil data dari session
        $step1 = session('register_step1');

        // Pastikan data step 1 ada
        if (!$step1) {
            return redirect()->route('register.step1')->withErrors('Data tahap 1 tidak ditemukan.');
        }

        // Validasi input dari step 2
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email|unique:users,email',
            'telepon'   => 'required|string|max:20',
            'username'  => 'required|string|max:50|unique:users,username',
            'password'  => 'required|string|confirmed|min:6',  // Password harus sesuai konfirmasi dan memiliki panjang minimal 6 karakter
        ]);

        // Jika validasi gagal, kembalikan ke form step 2 dengan pesan error
        if ($validator->fails()) {
            return redirect()->route('register.step2')
                             ->withErrors($validator)
                             ->withInput();
        }

        // Ambil user agent dari header request
        $userAgent = $request->header('User-Agent');

        try {
            // Simpan data pengguna ke database
            $user = User::create([
                'first_name' => $step1['nama_depan'],
                'last_name'  => $step1['nama_belakang'],
                'birth_date' => $step1['tanggal_lahir'],
                'gender'     => $step1['jenis_kelamin'],
                'address'    => $step1['alamat'],
                'email'      => $request->email,
                'phone'      => $request->telepon,
                'username'   => $request->username,
                'password'   => Hash::make($request->password),  // Enkripsi password dengan Hash
                'user_agent' => $userAgent, // Simpan user_agent langsung ke tabel users
            ]);

            // Hapus session step 1 setelah data disimpan
            $request->session()->forget('register_step1');

            // Log info (opsional untuk debugging)
            Log::info('User berhasil diregistrasi: ' . $request->username);

            // Redirect ke halaman login setelah pendaftaran berhasil
            return redirect()->route('login')->with('success', 'Pendaftaran berhasil, silakan login.');
        } catch (\Exception $e) {
            // Log error jika terjadi kesalahan
            Log::error('Gagal registrasi: ' . $e->getMessage());

            // Kembalikan dengan pesan kesalahan
            return back()->withErrors('Terjadi kesalahan saat registrasi. Silakan coba lagi.');
        }
    }
}

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - PKU Bantul</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="background: url('{{ asset('images/latar_belakang_login.png') }}') no-repeat center center fixed; background-size: cover;">

  <!-- Header -->
  <nav class="bg-gray-100 shadow">
    <div class="container mx-auto flex items-center justify-between px-4 py-3">
      <a href="#" class="flex items-center space-x-3">
        <img src="{{ asset('images/logouad.jpg') }}" alt="Logo UAD" class="h-10" />
        <img src="{{ asset('images/logopku.png') }}" alt="Logo PKU" class="h-10" />
        <span class="font-semibold text-lg text-gray-900">PKU BANTUL</span>
      </a>
      <ul class="hidden md:flex space-x-8" style="color: #0065A4;">
        <li><a href="#" class="hover:text-red-600">Beranda</a></li>
        <li><a href="{{ url('/tentang') }}" class="hover:text-red-600">Tentang</a></li>
        <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600">Kegiatan</a></li>
        <li><a href="{{ url('/dashboard') }}" class="hover:text-red-600">Dashboard</a></li>
      </ul>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden">
      <button id="menuBtn" class="focus:outline-none">
        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>

    <div id="mobileMenu" class="hidden md:hidden bg-white shadow-lg px-4 pt-4 pb-6">
      <ul class="space-y-4 text-gray-700 font-medium">
        <li><a href="#" class="hover:text-red-600 transition">Beranda</a></li>
        <li><a href="{{ url('/tentang') }}" class="hover:text-red-600 transition">Tentang</a></li>
        <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600 transition">Kegiatan</a></li>
        <li><a href="{{ url('/dashboard') }}" class="hover:text-red-600 transition">Dashboard</a></li>
        <li><a href="{{ url('/login') }}" class="hover:text-red-600 transition">Login</a></li>
        <li><a href="{{ url('/register') }}" class="hover:text-red-600 transition">Daftar</a></li>
      </ul>
    </div>
  </nav>



  <script>
    const menuBtn = document.getElementById("menuBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  </script>

  <!-- Login Form -->
  <div class="login-wrapper">
    <div class="card-wrapper">
      <!-- FORM LOGIN -->
      <div class="login-container">

        <!-- Alert Success -->
        @if (session('success'))
        <div class="alert alert-success" style="background-color: #4CAF50; color: white; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
          {{ session('success') }}
        </div>
        @endif

        <!-- Alert Error -->
        @if ($errors->any())
        <div class="alert alert-danger" style="background-color: #f44336; color: white; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <h2>Login</h2>
        <form action="{{ route('login.submit') }}" method="POST">
          @csrf

          <label for="userId">User ID</label>
          <input type="text" id="userId" name="userId" placeholder="masukkan User ID" required>

          <label for="referral">Kode Referal</label>
          <input type="text" id="referral" name="referral" placeholder="masukkan kode referal">

          {{-- <label for="role">Sebagai</label>
          <select id="role" name="role" required>
            <option selected disabled>Pilih login sebagai peran anda</option>
            <option value="perawat">Perawat</option>
            <option value="pasien">Pasien</option>
          </select> --}}

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="masukkan password" required>

          <div class="lupa-password font-semibold text-right text-red-600 mb-2">
          <a href="{{ route('lupapassword') }}">Lupa Password</a>
          </div>

          <button type="submit">Login</button>
        </form>

        <div class="login-footer">
         Kamu tidak memiliki akun? <a href="{{ route('register.step1') }}">Daftar Sekarang</a>
        </div>
      </div>

      <!-- GAMBAR PERAWAT -->
      <div class="nurse-illustration">
        <img src="{{ asset('images/perawat.png') }}" alt="Nurse Illustration">
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-white mt-10">
    <div class="py-8 px-4" style="background-color: #0065A4;">
      <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
          <p class="text-justify text-[12px] text-white">
            <strong>Tuberkulosis (TBC)</strong> adalah penyakit infeksi menular yang disebabkan oleh bakteri Mycobacterium tuberculosis. Penyakit ini umumnya menyerang paru-paru, namun bisa juga menyerang bagian tubuh lain seperti tulang, kelenjar getah bening, ginjal, bahkan otak. TBC termasuk salah satu penyakit infeksi paling mematikan di dunia, terutama di negara berkembang yang memiliki akses terbatas terhadap pelayanan kesehatan.
          </p>
        </div>
        <div class="pl-20">
          <h3 class="text-white text-[14px] font-bold mb-2">Kontak Kami</h3>
          <p class="text-sm">
            Jl. Jend. Sudirman No.124,<br>
            Nyangkringan, Bantul, Kec. Bantul,<br>
            Kabupaten Bantul,<br>
            Daerah Istimewa Yogyakarta<br>
            55711
          </p>
        </div>
        <div>
          <h3 class="font-bold mb-2">Temukan Kami</h3>
          <div class="flex space-x-4">
            <a href="#"><img src="{{ asset('images/logo_facebook.png') }}" alt="Facebook" class="w-6 h-6 object-contain"></a>
            <a href="#"><img src="{{ asset('images/logo_instagram.png') }}" alt="Instagram" class="w-6 h-6 object-contain"></a>
            <a href="#"><img src="{{ asset('images/logo_whatsapp.png') }}" alt="WhatsApp" class="w-6 h-6 object-contain"></a>
            <a href="#"><img src="{{ asset('images/logo_youtube.png') }}" alt="YouTube" class="w-6 h-6 object-contain"></a>
          </div>
        </div>
      </div>
    </div>

    <div class="py-4 text-center text-sm" style="background-color: #004b6b;">
      <p>Copyright © 2024 tbindonesia.or.id | All rights reserved.</p>
    </div>
  </footer>

</body>

</html>

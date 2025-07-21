<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Output</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Header -->
    <nav class="bg-gray-100 shadow">
        <div class="container mx-auto flex items-center justify-between px-4 py-3">
            <a href="#" class="flex items-center space-x-3">
                <img src="{{ asset('images/logouad.jpg') }}" alt="Logo UAD" class="h-10" />
                <img src="{{ asset('images/logopku.png') }}" alt="Logo PKU" class="h-10" />
                <span class="font-semibold text-lg text-gray-900">PKU BANTUL</span>
            </a>
            <ul class="hidden md:flex space-x-8" style="color: #0065A4;">
                <li><a href="/welcomeafterlogin" class="hover:text-red-600">Beranda</a></li>
                <li><a href="{{ url('/tentangafterlogin') }}" class="hover:text-red-600">Tentang</a></li>
                <li><a href="{{ url('/kegiatanafterlogin') }}" class="hover:text-red-600">Kegiatan</a></li>
                <!-- Link untuk dashboard berdasarkan role -->
                @if (Auth::check())
                    @if (Auth::user()->role == 'perawat')
                        <li><a href="{{ url('/dashboard_perawat') }}" class="hover:text-red-600">Dashboard</a></li>
                    @elseif (Auth::user()->role == 'pasien')
                        <li><a href="{{ url('/dashboard') }}" class="hover:text-red-600">Dashboard</a></li>
                    @endif
                @endif
                <li><a href="{{ route('logout') }}" class="px-4 py-2 text-white rounded-lg transition" style="background-color:rgb(251, 34, 5);">Logout</a></li>
            </ul>
            
            <div class="flex items-center space-x-4">
                @if (Auth::check())
                    <span class="text-gray-900">Halo, {{ Auth::user()->username }} Selamat Datang!</span>
                    <img src="{{ asset('images/ikon_profil.png') }}" alt="User Icon" class="w-8 h-8 rounded-full">
                @else
                    <a href="{{ route('login') }}" class="text-gray-900 hover:text-red-600">Login</a>
                @endif
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="md:hidden">
      <button id="menuBtn" class="focus:outline-none">
        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>

    <div id="mobileMenu" class="hidden md:hidden bg-white shadow-lg px-4 pt-4 pb-6">
      <ul class="space-y-4 text-gray-700 font-medium">
        <li><a href="#" class="hover:text-red-600 transition">Beranda</a></li>
        <li><a href="{{ url('/tentangafterlogin') }}" class="hover:text-red-600 transition">Tentang</a></li>
        <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600 transition">Kegiatan</a></li>
        <li><a href="{{ url('/dashboard') }}" class="hover:text-red-600 transition">Dashboard</a></li>
      </ul>
    </div>

  <!-- Script toggle mobile menu -->
  <script>
    const menuBtn = document.getElementById("menuBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  </script>

    <!-- Hero Section -->
  <section class="hero bg-[#003C62] text-white py-4 px-6 flex items-center justify-between">
    <!-- Logo dan Judul Dashboard di kiri -->
    <div class="flex items-center space-x-2 mr-4">
      <img src="{{ asset('images/Logo_dashboard.png') }}" alt="Logo Dashboard" class="w-8 h-8 rounded-full" />
      <h1 class="text-4xl font-semibold mb-2">Dashboard</h1>
    </div>
      <!-- Menu Ikon di bawah Search -->
      <div class="flex items-center space-x-6">
        <!-- Profile -->
        <a href="{{ url('/dashboard') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
          <img src="{{ asset('images/icon-profile.png') }}" alt="Profile Icon" class="w-6 h-6" />
          <span>Profile</span>
        </a>

        <!-- Check Harian -->
        <a href="{{ url('/checkharian') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
          <img src="{{ asset('images/icon-history.png') }}" alt="Check Harian Icon" class="w-6 h-6" />
          <span>Check Harian</span>
        </a>
        <!-- Bantuan -->
        <a href="{{ url('/bantuan') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
          <img src="{{ asset('images/icon-support.png') }}" alt="Help Icon" class="w-6 h-6" />
          <span>Bantuan</span>
        </a>
      </div>
    </div>
  </section>
<div class="container mt-8">
    <!-- Dashboard Title -->
    <div class="text-center mb-8">
        <h2 class="text-3xl font-semibold text-blue-600">DASHBOARD PASIEN TBC</h2>
    </div>

    <!-- Identitas Pasien dan Status Pengobatan -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Identitas Pasien -->
        <div class="bg-blue-500 text-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-4 text-center">Identitas Pasien</h3>
            <ul class="space-y-3">
                <li><strong>Nama:</strong> R.A.</li>
                <li><strong>No. Rekam Medis:</strong> RM0021</li>
                <li><strong>Umur:</strong> 28 Tahun</li>
                <li><strong>Jenis Kelamin:</strong> Perempuan</li>
                <li><strong>Jenis TBC:</strong> TBC Paru</li>
            </ul>
        </div>

        <!-- Status Pengobatan -->
        <div class="bg-blue-500 text-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-4 text-center">Status Pengobatan</h3>
            <ul class="space-y-3">
                <li><strong>Status:</strong> Aktif</li>
                <li><strong>Fase:</strong> Intensif</li>
                <li><strong>Jadwal Kontrol Berikutnya:</strong> 24 Juli 2025</li>
                <li><strong>Kepatuhan Obat:</strong> 90%</li>
            </ul>
        </div>
    </div>

<div class="container mt-8">
    <!-- Hasil Cek Harian -->
    <div class="mt-8 bg-white p-6 rounded-lg shadow-lg">
        <table class="min-w-full table-auto border-separate border-spacing-0 border border-blue-500">
            <h4 class="text-xl font-semibold mb-4 text-center bg-blue-500 text-white">Hasil Cek Harian</h4>
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="p-3 border border-blue-600 text-center">Tanggal</th>
                    <th class="p-3 border border-blue-600 text-center">Suhu (°C)</th>
                    <th class="p-3 border border-blue-600 text-center">Berat (kg)</th>
                    <th class="p-3 border border-blue-600 text-center">Nafsu Makan</th>
                    <th class="p-3 border border-blue-600 text-center">Minum Obat</th>
                    <th class="p-3 border border-blue-600 text-center">Catatan Pete</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-blue-600">
                    <td class="p-3 border border-blue-600 text-center">19-07-2025</td>
                    <td class="p-3 border border-blue-600 text-center">36,8</td>
                    <td class="p-3 border border-blue-600 text-center">52,2</td>
                    <td class="p-3 border border-blue-600 text-center">Batuk ringan</td>
                    <td class="p-3 border border-blue-600 text-center">Ya</td>
                    <td class="p-3 border border-blue-600 text-center">Tidak ada</td>
                </tr>
                <tr class="border-t border-blue-600">
                    <td class="p-3 border border-blue-600 text-center">20-07-2025</td>
                    <td class="p-3 border border-blue-600 text-center">37,2</td>
                    <td class="p-3 border border-blue-600 text-center">51,8</td>
                    <td class="p-3 border border-blue-600 text-center">Demam, batuk</td>
                    <td class="p-3 border border-blue-600 text-center">Ya</td>
                    <td class="p-3 border border-blue-600 text-center">Mual ringan</td>
                </tr>
                <tr class="border-t border-blue-600">
                    <td class="p-3 border border-blue-600 text-center">21-07-2025</td>
                    <td class="p-3 border border-blue-600 text-center">36,9</td>
                    <td class="p-3 border border-blue-600 text-center">52</td>
                    <td class="p-3 border border-blue-600 text-center">Tidak ada</td>
                    <td class="p-3 border border-blue-600 text-center">Ya</td>
                    <td class="p-3 border border-blue-600 text-center">Kondisi</td>
                </tr>
                <tr class="border-t border-blue-600">
                    <td class="p-3 border border-blue-600 text-center">22-07-2025</td>
                    <td class="p-3 border border-blue-600 text-center">36,6</td>
                    <td class="p-3 border border-blue-600 text-center">52,2</td>
                    <td class="p-3 border border-blue-600 text-center">Baik ada</td>
                    <td class="p-3 border border-blue-600 text-center">Ya</td>
                    <td class="p-3 border border-blue-600 text-center">Membaik</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


    <!-- Durasi Pengobatan, Hari Patuh Obat, Hari Gejala Aktif -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h5 class="text-xl font-semibold text-center">Durasi Pengobatan</h5>
            <p class="text-center">1 Bulan</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h5 class="text-xl font-semibold text-center">Hari Patuh Obat</h5>
            <p class="text-center">30 dari 33</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h5 class="text-xl font-semibold text-center">Hari Gejala Aktif</h5>
            <p class="text-center">4 Hari</p>
        </div>
    </div>
</div>


</div>
   <!-- Footer -->
    <footer class="text-white">
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
                        <a href="#"><img src="images/logo_facebook.png" alt="Facebook" class="w-6 h-6 object-contain"></a>
                        <a href="#"><img src="images/logo_instagram.png" alt="Instagram" class="w-6 h-6 object-contain"></a>
                        <a href="#"><img src="images/logo_whatsapp.png" alt="WhatsApp" class="w-6 h-6 object-contain"></a>
                        <a href="#"><img src="images/logo_youtube.png" alt="YouTube" class="w-6 h-6 object-contain"></a>
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

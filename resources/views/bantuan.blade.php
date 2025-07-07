<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bantuan - PKU Bantul</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-50">

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
                <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600">Kegiatan</a></li>
                <li><a href="{{ url('/dashboard') }}" class="hover:text-red-600">Dashboard</a></li>
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

    
        <!-- Hero Section -->
    <section class="hero bg-[#003C62] text-white py-4 px-6 flex items-center justify-between">
        <div class="flex items-center space-x-2 mr-4">
            <img src="{{ asset('images/Logo_dashboard.png') }}" alt="Logo Dashboard" class="w-8 h-8 rounded-full" />
            <h1 class="text-4xl font-semibold mb-2">Dashboard</h1>
        </div>

        <div class="flex flex-col items-end space-y-4">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/search.png') }}" alt="Search Logo" class="w-6 h-6" />
                <input type="text" placeholder="Cari..." class="px-4 py-2 rounded-full w-80 bg-white text-gray-900" />
            </div>

            <div class="flex items-center space-x-6">
                <a href="{{ url('/dashboard') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-profile.png') }}" alt="Profile Icon" class="w-6 h-6" />
                    <span>Profile</span>
                </a>
                <a href="{{ url('/checkharian') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-history.png') }}" alt="Check Harian Icon" class="w-6 h-6" />
                    <span>Check Harian</span>
                </a>
                <a href="{{ url('/pengaturan') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-setting.png') }}" alt="Settings Icon" class="w-6 h-6" />
                    <span>Pengaturan</span>
                </a>
                <a href="{{ url('/bantuan') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-support.png') }}" alt="Help Icon" class="w-6 h-6" />
                    <span>Bantuan</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Hero Section -->
    <!-- Hero Section dengan gradasi biru sesuai gambar -->
    <section class="bg-gradient-to-r from-[#003C62] via-[#3C77A0] to-[#66AEDA] text-white py-20 px-10 flex flex-col items-center justify-center">
        <h2 class="text-4xl font-bold mb-6 font-poppins">Kami siap membantu Anda!</h2>
        <div class="relative flex items-center justify-center w-full">
            <input type="text" placeholder="Kami siap membantu Anda!" class="px-4 py-2 rounded-full w-80 bg-white text-gray-900" />
        </div>
    </section>

    <!-- Main Content Section -->
    <div class="container mx-auto py-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Icons and Descriptions -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <img src="{{ asset('images/memulai.png') }}" alt="Mulai" class="w-16 h-16 mx-auto mb-4" />
                <h3 class="font-bold text-lg text-gray-800">Mulai</h3>
                <p class="text-gray-600">Langkah awal mengakses layanan Anda</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <img src="{{ asset('images/personalisasi.png') }}" alt="Personalization" class="w-16 h-16 mx-auto mb-4" />
                <h3 class="font-bold text-lg text-gray-800">Personalisasi</h3>
                <p class="text-gray-600">Sesuaikan layanan sesuai kebutuhan Anda</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <img src="{{ asset('images/fitur.png') }}" alt="Fitur" class="w-16 h-16 mx-auto mb-4" />
                <h3 class="font-bold text-lg text-gray-800">Fitur</h3>
                <p class="text-gray-600">Jelajahi fitur dan layanan tambahan</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <img src="{{ asset('images/privasi.png') }}" alt="Privasi & Keamanan" class="w-16 h-16 mx-auto mb-4" />
                <h3 class="font-bold text-lg text-gray-800">Privasi & Keamanan</h3>
                <p class="text-gray-600">Lindungi data Anda dengan keamanan terbaik</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <img src="{{ asset('images/integrasi.png') }}" alt="Integrasi" class="w-16 h-16 mx-auto mb-4" />
                <h3 class="font-bold text-lg text-gray-800">Integrasi</h3>
                <p class="text-gray-600">Hubungkan layanan Anda dengan sistem lain</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <img src="{{ asset('images/situs_web.png') }}" alt="Situs Web" class="w-16 h-16 mx-auto mb-4" />
                <h3 class="font-bold text-lg text-gray-800">Situs Web</h3>
                <p class="text-gray-600">Kelola situs web Anda dengan lebih mudah</p>
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

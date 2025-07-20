<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PKU Bantul - Tentang Kami Pasien</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animasi gambar hero section masuk */
        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Gambar hero section dengan animasi slide-in */
        .hero-image {
            animation: slideIn 1.2s ease-out forwards; /* Menambahkan animasi */
        }

        /* Efek Hover - Semua gambar naik saat cursor berada di atasnya */
        img {
            transition: transform 0.3s ease-in-out; /* Transisi halus untuk efek pergeseran */
        }

        img:hover {
            transform: translateY(-10px); /* Menggeser gambar ke atas saat dihover */
        }
    </style>
</head>

<body class="font-sans text-gray-800" style="background-color: #87CEFA;">

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

    <!-- Menampilkan link Dashboard berdasarkan Role -->
    @if (Auth::check())
        @if (Auth::user()->role == 'perawat')
            <li><a href="{{ url('/dashboard_perawat') }}" class="hover:text-yellow-400 {{ Route::is('dashboard_perawat') ? 'text-yellow-300' : '' }}">Dashboard</a></li>
        @elseif (Auth::user()->role == 'pasien')
            <li><a href="{{ url('/dashboard') }}" class="hover:text-yellow-400 {{ Route::is('dashboard') ? 'text-yellow-300' : '' }}">Dashboard</a></li>
        @endif
    @endif

    <li><a href="{{ route('logout') }}" class="px-4 py-2 text-white rounded-lg transition" style="background-color:rgb(251, 34, 5);">Logout</a></li>
</ul>

            
            <!-- Header Right (User Info) -->
            <div class="flex items-center space-x-4">
                @if (Auth::check())
                    <span class="text-gray-900">Halo, {{ Auth::user()->username }} Selamat Datang!</span>
                    <img src="{{ asset('images/ikon_profil.png') }}" alt="User Icon" class="w-8 h-8 rounded-full">
                @else
                    <a href="{{ route('login') }}" class="text-gray-900 hover:text-red-600">Login</a>
                @endif
            </div>
        </div>
        
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
                <li><a href="/welcomeafterlogin" class="hover:text-red-600 transition">Beranda</a></li>
                <li><a href="{{ url('/tentangafterlogin') }}" class="hover:text-red-600 transition">Tentang</a></li>
                <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600 transition">Kegiatan</a></li>
                <li><a href="{{ route('dashboard') }}" class="hover:text-yellow-400 {{ Route::is('dashboard') ? 'text-yellow-300' : '' }}">Dashboard</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero bg-[#0f172a] text-white py-20 px-4 flex flex-col md:flex-row items-center">
        <div class="w-full md:w-1/2">
            <img src="images/fotopku.jpg" alt="Hero Image" class="w-full h-full object-cover rounded-lg shadow-lg hero-image" />
        </div>
        <div class="w-full md:w-1/2 text-center md:text-left mt-8 md:mt-0 pl-8">
            <h1 class="text-4xl font-semibold mb-4">Selamat Datang di PKU Bantul</h1>
            <p class="text-lg">Kami berkomitmen untuk memberikan layanan kesehatan terbaik untuk masyarakat Bantul.</p>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section class="bg-blue-100 py-16 px-6" style="background-color: #87CEFA;">
        <div class="max-w-7xl mx-auto">
            <!-- Kotak Luar dengan Latar Putih -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Gambar Klinik -->
                    <div class="relative">
                        <!-- Teks Berawal dari Klinik Ibu dan Anak -->
                        <h2 class="absolute top-0 left-0 right-0 text-4xl font-semibold text-center text-white py-4 bg-grey-800">
                            Berawal dari Klinik Ibu dan Anak
                        </h2>
                        <!-- Gambar Klinik -->
                        <img src="images/tentangpku.png" alt="Clinic Image" class="w-full h-auto rounded-lg shadow-lg" />
                    </div>
                    <!-- Deskripsi Sejarah -->
                    <div>
                        <h3 class="text-2xl font-semibold mb-4">Sejarah Kami</h3>
                        <p class="text-lg">PKU Bantul berawal dari Klinik Ibu dan Anak pada tahun 1990 dan berkembang menjadi rumah sakit yang melayani berbagai kebutuhan medis masyarakat dengan semangat pelayanan terbaik. Kami berkomitmen untuk menyediakan layanan kesehatan berkualitas tinggi.</p>
                        <div class="space-y-4 mt-6">
                            <!-- Poin-poin Sejarah -->
                            <div class="p-4 bg-gray-200 rounded-lg shadow-sm">
                                <h4 class="text-xl font-semibold">Klinik dan Rumah Bersalin (1966)</h4>
                                <p>Pada 1 Maret 1966 yang bertepatan tangal 09 Dzulqo'dah 1385 berdirilah sebuah Klinik dan Rumah Bersalin di kota Bantul yang diberi nama Klinik dan Rumah Bersalin PKU Muhammadiyah Bantul.</p>
                            </div>

                            <div class="p-4 bg-gray-200 rounded-lg shadow-sm">
                                <h4 class="text-xl font-semibold">Layanan Tumbuh Kembang Anak (1984)</h4>
                                <p>Seiring perjalanan waktu perkembangan Klinik dan Rumah Bersalin PKU Muhammadiyah Bantul semakin pesat ditandai adanya pengembangan pelayanan di bidang kesehatan anak baik sebagai upaya penyembuhan maupun pelayanan di bidang pertumbuhan dan perkembangan anak</p>
                            </div>
                            <div class="p-4 bg-gray-200 rounded-lg shadow-sm">
                                <h4 class="text-xl font-semibold">Rumah Sakit Khusus Ibu dan Anak (1995)</h4>
                                <p>Berdasarkan Surat Keputusan Izin Kanwil Depkes Propinsi DIY No 503/1009/PK/IV/1995, Klinik dan Rumah Bersalin PKU Muhammadiyah Bantul berubah menjadi Rumah Sakit Khusus Ibu dan Anak PKU Muhammadiyah Bantul</p>
                            </div>
                            <div class="p-4 bg-gray-200 rounded-lg shadow-sm">
                                <h4 class="text-xl font-semibold">Rumah Sakit Umum (2001)</h4>
                                <p>Perkembangan yang begitu pesat membuat kami harus berubah menjadi Rumah Sakit Umum PKU Muhammadiyah Bantul sesuai dengan diterbitkannya izin operasional dari Dinas Kesehatan No. 445/4318/2001</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Gambar Berjejer -->
    <section class="bg-blue-100 py-16 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="flex space-x-4">
                <!-- Gambar 1 -->
                <div class="flex-1">
                    <img src="images/imagetentang1.png" alt="Image 1" class="w-[510.22px] h-[287px] rounded-lg shadow-lg" />
                </div>
                <!-- Gambar 2 -->
                <div class="flex-1">
                    <img src="images/imagetentang2.png" alt="Image 2" class="w-[382.67px] h-[287px] rounded-lg shadow-lg" />
                </div>
                <!-- Gambar 3 -->
                <div class="flex-1">
                    <img src="images/imagetentang3.png" alt="Image 3" class="w-[382.67px] h-[287px] rounded-lg shadow-lg" />
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi Section -->
    <section class="py-16 px-6" style="background-color: #87CEFA;">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Visi Kami -->
            <div class="bg-blue-100 p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4 text-center">Visi Kami</h3>
                <div class="p-4 bg-white rounded-md shadow-sm">
                    <p class="text-lg font-semibold">Menjadi Rumah Sakit Islam yang mempunyai keunggulan kompetitif global dan menjadi kebanggaan umat.</p>
                </div>
            </div>
            <!-- Misi Kami -->
            <div class="bg-blue-100 p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4 text-center">Misi Kami</h3>
                <div class="space-y-4">
                    <div class="p-4 bg-white rounded-md shadow-sm">
                        <p class="text-lg font-semibold">Berdakwah melalui pelayanan kesehatan</p>
                    </div>
                    <div class="p-4 bg-white rounded-md shadow-sm">
                        <p class="text-lg font-semibold">Menyelenggarakan pelayanan kesehatan yang berkualitas</p>
                    </div>
                    <div class="p-4 bg-white rounded-md shadow-sm">
                        <p class="text-lg font-semibold">Memberikan pelayanan yang peduli pada kaum dhuafa</p>
                    </div>
                    <div class="p-4 bg-white rounded-md shadow-sm">
                        <p class="text-lg font-semibold">Menjalin kerja sama organisasi dan klinik yang baik</p>
                    </div>
                    <div class="p-4 bg-white rounded-md shadow-sm">
                        <p class="text-lg font-semibold">Menyelenggarakan pendidikan dan pelatihan secara profesional</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

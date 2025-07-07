<!DOCTYPE html>
<html lang="id">
<<<<<<< HEAD
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-50">
=======

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PKU Bantul - Penanggulangan TBC</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-white text-gray-800">
>>>>>>> f830dc3 (Initial commit)

    <!-- Header -->
    <nav class="bg-gray-100 shadow">
        <div class="container mx-auto flex items-center justify-between px-4 py-3">
            <a href="#" class="flex items-center space-x-3">
                <img src="{{ asset('images/logouad.jpg') }}" alt="Logo UAD" class="h-10" />
                <img src="{{ asset('images/logopku.png') }}" alt="Logo PKU" class="h-10" />
                <span class="font-semibold text-lg text-gray-900">PKU BANTUL</span>
            </a>
<<<<<<< HEAD
            <ul class="hidden md:flex space-x-8" style="color: #0065A4;">
                <li><a href="/welcomeafterlogin" class="hover:text-red-600">Beranda</a></li>
                <li><a href="{{ url('/tentangafterlogin') }}" class="hover:text-red-600">Tentang</a></li>
                <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600">Kegiatan</a></li>
                <li><a href="{{ url('/dashboard') }}" class="hover:text-red-600">Dashboard</a></li>
                <li> <a href="{{ route('logout') }}" class="px-4 py-2 text-white rounded-lg transition" style="background-color:rgb(251, 34, 5);">Logout</a></li>
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
                <li><a href="#" class="hover:text-red-600 transition">Beranda</a></li>
                <li><a href="{{ url('/tentangafterlogin') }}" class="hover:text-red-600 transition">Tentang</a></li>
                <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600 transition">Kegiatan</a></li>
                <li><a href="{{ url('/dashboard') }}" class="hover:text-red-600 transition">Dashboard</a></li>
=======
             <ul class="hidden md:flex space-x-8 text-gray-700">
                <li><a href="{{url('/')}}" class="hover:text-red-600">Beranda</a></li>
                <li><a href="{{ url('/tentang') }}" class="hover:text-red-600">Tentang</a></li>
                <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600">Kegiatan</a></li>
                <li><a href="#" class="hover:text-red-600">Dashboard</a></li>
>>>>>>> f830dc3 (Initial commit)
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
<<<<<<< HEAD
    <section class="hero bg-[#003C62] text-white py-4 px-6 flex items-center justify-between">
        <!-- Logo dan Judul Dashboard di kiri -->
        <div class="flex items-center space-x-2 mr-4">
            <img src="{{ asset('images/Logo_dashboard.png') }}" alt="Logo Dashboard" class="w-8 h-8 rounded-full" />
            <h1 class="text-4xl font-semibold mb-2">Dashboard</h1>
        </div>

        <!-- Search Bar dan Menu Ikon di kanan -->
        <div class="flex flex-col items-end space-y-4">
            <!-- Search Bar dengan logo di kiri -->
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/search.png') }}" alt="Search Logo" class="w-6 h-6" />
                <input type="text" placeholder="Cari..." class="px-4 py-2 rounded-full w-80 bg-white text-gray-900" />
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

                </a>

                <!-- Pengaturan -->
                <a href="#" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-setting.png') }}" alt="Settings Icon" class="w-6 h-6" />
                    <span>Pengaturan</span>
                </a>

                <!-- Bantuan -->
                <a href="#" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-support.png') }}" alt="Help Icon" class="w-6 h-6" />
                    <span>Bantuan</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Dashboard Content -->
    <section class="py-16 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Sidebar Menu -->
            <div class="bg-white rounded-lg shadow-lg p-4">
                @auth
                    <div class="text-center">
                        <img src="{{ asset('images/ikon_profil.png') }}" alt="User Icon" class="w-16 h-16 rounded-full mx-auto mb-4">
                        <span class="block text-xl font-semibold">{{ Auth::user()->username }}</span>
                        <p class="text-gray-600">{{ Auth::user()->role }}</p>
                    </div>
                @endauth
                <div class="mt-8 space-y-4">
                    @auth
                        <!-- Profile link has been removed -->
                        <!-- Privacy link has been removed -->
                        <!-- Settings link has been removed -->
                        <!-- Logout button has been removed -->
                    @else
                        <p class="text-gray-600">Please <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-700">log in</a> to view your dashboard.</p>
                    @endauth
                </div>
            </div>

            <!-- Profile and Actions Section -->
            <div class="col-span-3 bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Data Pribadi</h2>
                @auth
                    <div class="space-y-6">
                        <div class="flex justify-between items-center">
                            <span class="font-medium">Nama</span>
                            <span class="text-gray-600">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium">Alamat</span>
                            <span class="text-gray-600">{{ Auth::user()->address }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium">Nomor Handphone</span>
                            <span class="text-gray-600">{{ Auth::user()->phone }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium">Jenis Kelamin</span>
                            <span class="text-gray-600">{{ Auth::user()->gender }}</span>
                        </div>
                    </div>

                    <div class="flex justify-end mt-6">
                        <button class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Simpan</button>
                        <button class="ml-4 px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-300">Batal</button>
                    </div>
                @endauth
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-white">
        <!-- Bagian atas footer dengan warna biru langit -->
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
=======
    <section class="hero bg-[#0f172a] text-white text-center py-20 px-4">
       INI BAGIAN DASHBOARD
    </section>

    <!-- TBC Information Section -->
    <section class="py-16 px-6 bg-white">

    </section>

    <!-- Tentang Kami -->
    <section class="bg-blue-100 py-16 px-6">
 
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-lg font-semibold mb-4">Kontak Kami</h3>
                <p class="text-sm">Jl. Contoh No.123, Bantul, Yogyakarta</p>
                <p class="text-sm">Email: info@pkubantul.or.id</p>
                <p class="text-sm">Telp: +62 274 123 456</p>
            </div>
            <div class="flex md:justify-end items-start">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <!-- Icons same as before -->
                        <a href="#" class="hover:text-gray-300" aria-label="Facebook">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-2.9h2v-2.2c0-2 1.2-3.2 3-3.2.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2v1.9h2.6l-.4 2.9h-2.2v7A10 10 0 0 0 22 12z" />
                            </svg>
                        </a>
                        <a href="#" class="hover:text-gray-300" aria-label="Instagram">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3h10zm-5 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm4.5-.9a1.1 1.1 0 1 0 0 2.2 1.1 1.1 0 0 0 0-2.2z" />
                            </svg>
                        </a>
                        <a href="#" class="hover:text-gray-300" aria-label="Twitter">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M22.5 5.9c-.8.4-1.7.6-2.6.8a4.4 4.4 0 0 0 1.9-2.5 9 9 0 0 1-2.8 1.1 4.5 4.5 0 0 0-7.7 4.1 12.9 12.9 0 0 1-9.3-4.7 4.5 4.5 0 0 0 1.4 6 4.4 4.4 0 0 1-2-.5v.1c0 2.2 1.6 4.1 3.7 4.5a4.5 4.5 0 0 1-2 .1 4.5 4.5 0 0 0 4.2 3.1A9 9 0 0 1 2 19.5a12.9 12.9 0 0 0 7 2c8.3 0 12.9-6.9 12.9-12.9v-.6c.9-.6 1.6-1.4 2.1-2.3z" />
                            </svg>
                        </a>
                        <!-- ... -->
>>>>>>> f830dc3 (Initial commit)
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD

        <!-- Bagian bawah footer dengan warna biru tua -->
        <div class="py-4 text-center text-sm" style="background-color: #004b6b;">
            <p>Copyright © 2024 tbindonesia.or.id | All rights reserved.</p>
=======
        <div class="mt-8 border-t border-gray-700 pt-4 text-center text-sm text-gray-400">
            &copy; 2025 PKU Bantul. All rights reserved.
>>>>>>> f830dc3 (Initial commit)
        </div>
    </footer>

</body>
<<<<<<< HEAD
=======

>>>>>>> f830dc3 (Initial commit)
</html>

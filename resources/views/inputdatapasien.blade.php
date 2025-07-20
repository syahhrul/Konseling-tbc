<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Check Harian - PKU Bantul</title>
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
                <li><a href="{{ route('logout') }}" class="px-4 py-2 text-white rounded-lg transition"
                        style="background-color:rgb(251, 34, 5);">Logout</a></li>
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
                <input type="text" placeholder="Cari..."
                    class="px-4 py-2 rounded-full w-80 bg-white text-gray-900" />
            </div>
            <div class="flex items-center space-x-6">
                <a href="{{ url('/dashboard') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-profile.png') }}" alt="Profile Icon" class="w-6 h-6" />
                    <span>Profil</span>
                </a>
                <a href="{{ url('/checkharian') }}"
                    class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-history.png') }}" alt="Check Harian Icon" class="w-6 h-6" />
                    <span>Check Harian</span>
                </a>

                <!-- Check Harian -->
                <a href="{{ url('/datapasien') }}"
                    class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-history.png') }}" alt="Check Harian Icon" class="w-6 h-6" />
                    <span>Data Pasien</span>
                </a>

                {{-- Input Data Pasien --}}
                <a href="{{ url('/inputdatapasien') }}"
                    class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-history.png') }}" alt="Check Harian Icon" class="w-6 h-6" />
                    <span>Input Data Pasien</span>
                </a>
                <a href="{{ url('/bantuan') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-support.png') }}" alt="Help Icon" class="w-6 h-6" />
                    <span>Bantuan</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-10 px-6 bg-white shadow-md rounded-xl">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Input Data Pasien TBC</h2>
            <form action="{{ route('pasien-tbc.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama Pasien</label>
                    <input type="text" name="nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                        required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Usia</label>
                    <input type="number" name="usia" min="0"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Tanggal Diagnosis</label>
                    <input type="date" name="tanggal_diagnosis"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Stadium</label>
                    <select name="stadium" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        <option value="Awal">Awal</option>
                        <option value="Sedang">Sedang</option>
                        <option value="Lanjut">Lanjut</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Status Pengobatan</label>
                    <select name="status_pengobatan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        <option value="Belum Mulai">Belum Mulai</option>
                        <option value="Sedang Berlangsung">Sedang Berlangsung</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </div>

                <div>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                        Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </section>


    <!-- Footer -->
    <footer class="text-white">
        <div class="py-8 px-4" style="background-color: #0065A4;">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <p class="text-justify text-[12px] text-white">
                        <strong>Tuberkulosis (TBC)</strong> adalah penyakit infeksi menular yang disebabkan oleh bakteri
                        Mycobacterium tuberculosis. Penyakit ini umumnya menyerang paru-paru, namun bisa juga menyerang
                        bagian tubuh lain seperti tulang, kelenjar getah bening, ginjal, bahkan otak. TBC termasuk salah
                        satu penyakit infeksi paling mematikan di dunia, terutama di negara berkembang yang memiliki
                        akses terbatas terhadap pelayanan kesehatan.
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
                        <a href="#"><img src="{{ asset('images/logo_facebook.png') }}" alt="Facebook"
                                class="w-6 h-6 object-contain"></a>
                        <a href="#"><img src="{{ asset('images/logo_instagram.png') }}" alt="Instagram"
                                class="w-6 h-6 object-contain"></a>
                        <a href="#"><img src="{{ asset('images/logo_whatsapp.png') }}" alt="WhatsApp"
                                class="w-6 h-6 object-contain"></a>
                        <a href="#"><img src="{{ asset('images/logo_youtube.png') }}" alt="YouTube"
                                class="w-6 h-6 object-contain"></a>
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

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
                    <span>Profil</span>
                </a>
                <a href="{{ url('/checkharian') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-history.png') }}" alt="Check Harian Icon" class="w-6 h-6" />
                    <span>Check Harian</span>
                </a>
                <a href="{{ url('/bantuan') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-support.png') }}" alt="Help Icon" class="w-6 h-6" />
                    <span>Bantuan</span>
                </a>
        <a href="{{ url('/output_pasien') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
          <img src="{{ asset('images/ikon_kesehatan.png') }}" alt="Help Icon" class="w-6 h-6" />
          <span>Informasi</span>
        </a>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-10 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- History Pasien -->
            @foreach($checkHarians as $checkHarian)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-xl text-gray-800">#{{ $checkHarian->user->username }}</h3>
                <p class="text-gray-600">{{ $checkHarian->alasan_lupa }}</p>
                <div class="flex justify-between mt-4">
                    <a href="{{ route('checkharian', $checkHarian->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Lihat</a>
                </div>
            </div>
            @endforeach
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

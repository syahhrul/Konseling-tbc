<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Data Pasien - PKU Bantul</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* Menambahkan transisi untuk efek smooth open/close */
        [x-cloak] { display: none !important; }
        .transition-max-height {
            transition: max-height 0.5s ease-in-out;
        }
    </style>
</head>

<body class="font-sans bg-gray-50">

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
                <li><a href="{{ url('/dashboard_perawat') }}" class="hover:text-red-600">Dashboard</a></li>
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

    <section class="hero bg-[#003C62] text-white py-4 px-6 flex items-center justify-between">
        <div class="flex items-center space-x-2 mr-4">
            <img src="{{ asset('images/Logo_dashboard.png') }}" alt="Logo Dashboard" class="w-8 h-8 rounded-full" />
            <h1 class="text-4xl font-semibold mb-2">Data Pasien</h1>
        </div>
        <div class="flex items-center space-x-6">
            <a href="{{ url('/datapasien') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                <img src="{{ asset('images/icon-history.png') }}" alt="Check Harian Icon" class="w-6 h-6" />
                <span>Data Pasien</span>
            </a>
            <a href="{{ url('/data_pengguna') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                <img src="{{ asset('images/icon-profile.png') }}" alt="Data Pengguna Icon" class="w-6 h-6" />
                <span>Data Pengguna</span>
            </a>
            <a href="{{ url('/bantuan') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                <img src="{{ asset('images/icon-support.png') }}" alt="Help Icon" class="w-6 h-6" />
                <span>Bantuan</span>
            </a>
        </div>
    </section>

        <section class="py-10 px-6">
        <div class="max-w-7xl mx-auto space-y-4">
            @if(isset($message))
                {{-- ... pesan jika tidak ada data ... --}}
            @else
                @forelse($users as $user)
                <div class="bg-white rounded-lg shadow-md overflow-hidden" x-data="{ open: false }">
                    <div class="flex justify-between items-center p-6 cursor-pointer" @click="open = !open">
                        
                        <h3 class="font-semibold text-xl text-gray-800">
                            {{ $user->username }} ({{ $user->checkHarians->count() }} Record)
                        </h3>

                        <button class="text-blue-500 hover:text-blue-700 font-semibold">
                            <span x-show="!open">Lihat Detail</span>
                            <span x-show="open" x-cloak>Sembunyikan</span>
                        </button>
                    </div>

                    <div x-show="open" x-collapse class="px-6 pb-6 border-t border-gray-200">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                            @foreach($user->checkHarians as $checkHarian)
                            <div class="bg-gray-50 p-4 rounded-lg shadow-sm border border-gray-200">
                                <p class="font-bold text-gray-700">Tanggal: {{ $checkHarian->created_at->format('d F Y') }}</p>
                                <p class="text-gray-600 mt-2"><strong>Alasan Lupa Minum Obat:</strong><br>{{ $checkHarian->alasan_lupa ?: 'Tidak ada' }}</p>
                                <p class="text-gray-600 mt-2"><strong>Efek Samping:</strong><br>{{ $checkHarian->efek_samping ?: 'Tidak ada' }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @empty
                    {{-- ... pesan jika forelse kosong ... --}}
                @endforelse
            @endif
        </div>
    </section>

    <footer class="text-white mt-10">
        <div class="py-8 px-4" style="background-color: #0065A4;">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <p class="text-justify text-xs text-white">
                        <strong>Tuberkulosis (TBC)</strong> adalah penyakit infeksi menular yang disebabkan oleh bakteri Mycobacterium tuberculosis.
                    </p>
                </div>
                <div class="md:pl-20">
                    <h3 class="text-white text-sm font-bold mb-2">Kontak Kami</h3>
                    <p class="text-xs">
                        Jl. Jend. Sudirman No.124, Nyangkringan, Bantul, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55711
                    </p>
                </div>
                <div>
                    <h3 class="font-bold mb-2">Temukan Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#"><img src="{{ asset('images/logo_facebook.png') }}" alt="Facebook" class="w-6 h-6"></a>
                        <a href="#"><img src="{{ asset('images/logo_instagram.png') }}" alt="Instagram" class="w-6 h-6"></a>
                        <a href="#"><img src="{{ asset('images/logo_whatsapp.png') }}" alt="WhatsApp" class="w-6 h-6"></a>
                        <a href="#"><img src="{{ asset('images/logo_youtube.png') }}" alt="YouTube" class="w-6 h-6"></a>
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
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Check Harian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-50">
    <!-- Popup Success Message -->
    @if(session('success'))
    <script>
        window.onload = function() {
            alert("{{ session('success') }}");  // Menampilkan popup success message
        }
    </script>
    @endif


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
            <div class="flex items-center space-x-6">
                <a href="{{ url('/dashboard') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-profile.png') }}" alt="Profile Icon" class="w-6 h-6" />
                    <span>Profile</span>
                </a>
                <a href="{{ url('/checkharian') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-history.png') }}" alt="Check Harian Icon" class="w-6 h-6" />
                    <span>Check Harian</span>
                </a>
                <a href="{{ url('/bantuan') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                    <img src="{{ asset('images/icon-support.png') }}" alt="Help Icon" class="w-6 h-6" />
                    <span>Bantuan</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <div class="container mx-auto py-10">
        <div class="flex flex-col md:flex-row">
            <!-- Form Kiri -->
            <div class="flex-1 bg-blue-50 p-6 rounded-lg shadow-md mr-4">
                <h2 class="text-2xl font-semibold mb-6 text-gray-900">Check Harian</h2>
                <form action="{{ route('checkharian.store') }}" method="POST">
                    @csrf
                    <div class="space-y-4">
                        <!-- Frekuensi Batuk -->
                        <div>
                            <label class="block text-gray-700 font-medium">Frekuensi Batuk*</label>
                            <div class="flex items-center">
                                <input type="radio" id="batuk_parah" name="frekuensi_batuk" value="batuk" class="mr-2" required>
                                <label for="batuk_parah" class="text-gray-700">Batuk</label>
                                <input type="radio" id="batuk_tidak" name="frekuensi_batuk" value="tidak batuk" class="ml-4 mr-2" required>
                                <label for="batuk_tidak" class="text-gray-700">Tidak Batuk</label>
                            </div>
                        </div>
                        <!-- Panas -->
                        <div>
                            <label class="block text-gray-700 font-medium">Panas*</label>
                            <div class="flex items-center">
                                <input type="radio" id="panas_ya" name="panas" value="panas" class="mr-2" required>
                                <label for="panas_ya" class="text-gray-700">Ya</label>
                                <input type="radio" id="panas_tidak" name="panas" value="tidak panas" class="ml-4 mr-2" required>
                                <label for="panas_tidak" class="text-gray-700">Tidak</label>
                            </div>
                        </div>
                        <!-- Keringat Dingin Pada Malam Hari -->
                        <div>
                            <label class="block text-gray-700 font-medium">Keringat Dingin Pada Malam Hari*</label>
                            <div class="flex items-center">
                                <input type="radio" id="keringat_ya" name="keringat_dingin" value="keringat dingin" class="mr-2" required>
                                <label for="keringat_ya" class="text-gray-700">Ya</label>
                                <input type="radio" id="keringat_tidak" name="keringat_dingin" value="tidak keringat dingin" class="ml-4 mr-2" required>
                                <label for="keringat_tidak" class="text-gray-700">Tidak</label>
                            </div>
                        </div>
                        <!-- Lupa Minum Obat -->
                        <div>
                            <label class="block text-gray-700 font-medium">Lupa Minum Obat*</label>
                            <div class="flex items-center">
                                <input type="radio" id="lupa_ya" name="lupa_minum_obat" value="lupa minum obat" class="mr-2" required>
                                <label for="lupa_ya" class="text-gray-700">Ya</label>
                                <input type="radio" id="lupa_tidak" name="lupa_minum_obat" value="tidak lupa minum obat" class="ml-4 mr-2" required>
                                <label for="lupa_tidak" class="text-gray-700">Tidak</label>
                            </div>
                            <textarea name="alasan_lupa" placeholder="Isi alasan jika anda lupa minum obat" class="mt-2 w-full p-2 border rounded-md text-gray-700"></textarea>
                        </div>
                        <!-- Mual Saat Minum Obat -->
                        <div>
                            <label class="block text-gray-700 font-medium">Mual Saat Minum Obat*</label>
                            <div class="flex items-center">
                                <input type="radio" id="mual_ya" name="mual_saat_minum_obat" value="mual" class="mr-2" required>
                                <label for="mual_ya" class="text-gray-700">Ya</label>
                                <input type="radio" id="mual_tidak" name="mual_saat_minum_obat" value="tidak mual" class="ml-4 mr-2" required>
                                <label for="mual_tidak" class="text-gray-700">Tidak</label>
                            </div>
                        </div>
                        <!-- Kondisi Berat Badan -->
                        <div>
                            <label class="block text-gray-700 font-medium">Kondisi Berat Badan*</label>
                            <div class="flex items-center">
                                <input type="radio" id="berat_turun" name="berat_badan_turun" value="berat turun" class="mr-2" required>
                                <label for="berat_turun" class="text-gray-700">Turun</label>
                                <input type="radio" id="berat_tidak" name="berat_badan_turun" value="berat tidak turun" class="ml-4 mr-2" required>
                                <label for="berat_tidak" class="text-gray-700">Tidak</label>
                            </div>
                        </div>
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-full mt-4">Kirim Jawaban</button>
                    </div>
                </form>
            </div>

            <!-- Gambar Informasi Kanan -->
            <div class="flex-1 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-4 text-gray-900">Gejala & Efek Samping Obat TBC</h2>
                <img src="{{ asset('images/image_tuberkulosis.png') }}" alt="Gejala TBC" class="w-44 h-64 mx-auto mb-4">

                <div class="text-gray-700">
                    <h3 class="font-bold text-xl mb-2">Gejala TBC (Tuberkulosis)</h3>
                    <ul class="list-disc pl-5">
                        <li>Batuk Terus-Menerus (Lebih Dari 2 Minggu), Kadang Berdarah</li>
                        <li>Demam Dan Berkeringat Di Malam Hari</li>
                        <li>Penurunan Berat Badan Tanpa Sebab Jelas</li>
                        <li>Lemas Atau Mudah Lelah</li>
                        <li>Nafsu Makan Menurun</li>
                        <li>Nyeri Dada Atau Sesak Napas</li>
                    </ul>
                    <h3 class="font-bold text-xl mt-4 mb-2">Efek Samping TBC (Tuberkulosis)</h3>
                    <ul class="list-disc pl-5">
                        <li>Hati-hati terhadap kesulitan hati: mual, muntah, kuning pada kulit/mata (keterusan)</li>
                        <li>Gangguan pencernakan: mual, sakit perut, diare</li>
                        <li>Perubahan warna urin: terutamanya oleh rifampisin (jadi oranye-merah, ini normal)</li>
                        <li>Masalah mata: penglihatan kabur atau bulat (karena etambutol)</li>
                        <li>Ruam kulit atau reaksi alergi</li>
                        <li>Mati rasa di tangan/kaki (karena isoniazid, bisa dicegah dengan vitamin B6)</li>
                    </ul>
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

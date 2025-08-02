<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Informasi Pasien</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-gray-100 shadow">
        <div class="container mx-auto flex items-center justify-between px-4 py-3">
            <a href="#" class="flex items-center space-x-3">
                <img src="{{ asset('images/logouad.jpg') }}" alt="Logo UAD" class="h-10" />
                <img src="{{ asset('images/logopku.png') }}" alt="Logo PKU" class="h-10" />
            </a>
            <ul class="hidden md:flex space-x-8" style="color: #0065A4;">
                <li><a href="/welcomeafterlogin" class="hover:text-red-600">Beranda</a></li>
                <li><a href="{{ url('/tentangafterlogin') }}" class="hover:text-red-600">Tentang</a></li>
                <li><a href="{{ url('/kegiatanafterlogin') }}" class="hover:text-red-600">Kegiatan</a></li>
                <li><a href="{{ url('/dashboard') }}" class="hover:text-red-600">Dashboard</a></li>
                <li><a href="{{ route('logout') }}" class="px-4 py-2 text-white rounded-lg transition" style="background-color:rgb(251, 34, 5);">Logout</a></li>
            </ul>
            <div class="flex items-center space-x-4">
                @if (Auth::check())
                    <span class="text-gray-900">Halo, {{ Auth::user()->username }} Selamat Datang!</span>
                    <img src="{{ asset('images/ikon_profil.png') }}" alt="User Icon" class="w-8 h-8 rounded-full">
                @endif
            </div>
        </div>
    </nav>

    <section class="hero bg-[#003C62] text-white py-4 px-6 flex items-center justify-between">
        <div class="flex items-center space-x-2 mr-4">
            <img src="{{ asset('images/Logo_dashboard.png') }}" alt="Logo Dashboard" class="w-8 h-8 rounded-full" />
            <h1 class="text-4xl font-semibold mb-2">Dashboard</h1>
        </div>
        <div class="flex items-center space-x-6">
            <a href="{{ url('/output_pasien') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                <img src="{{ asset('images/ikon_kesehatan.png') }}" alt="Informasi Icon" class="w-12 h-12" />
                <span>Informasi</span>
            </a>
            <a href="{{ url('/dashboard') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                <img src="{{ asset('images/icon-profile.png') }}" alt="Profile Icon" class="w-6 h-6" />
                <span>Profile</span>
            </a>
            <a href="{{ url('/checkharian') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                <img src="{{ asset('images/icon-history.png') }}" alt="Check Harian Icon" class="w-6 h-6" />
                <span>Check Harian</span>
            </a>
            <a href="{{ url('/bantuan') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                <img src="{{ asset('images/icon-support.png') }}" alt="Bantuan Icon" class="w-6 h-6" />
                <span>Bantuan</span>
            </a>
        </div>
    </section>

    <div class="main-content flex justify-center items-center min-h-screen">
        <div class="container mt-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-6 shadow-lg rounded-lg border border-blue-500">
                    <h3 class="text-2xl font-semibold mb-4 text-blue-500">Identitas Pasien</h3>
                    <ul class="space-y-3">
                        <li><strong>Nama:</strong> {{ $user->first_name }} {{ $user->last_name }}</li>
                        <li><strong>No. Rekam Medis:</strong> {{ $rekamMedis }}</li>
                        <li><strong>Umur:</strong> {{ $age }} Tahun</li>
                        <li><strong>Jenis Kelamin:</strong> {{ $user->gender}}</li>
                        <li><strong>Jenis TBC:</strong> TBC Paru</li>
                    </ul>
                </div>

                <div class="bg-white p-6 shadow-lg rounded-lg border border-blue-500">
                    <h3 class="text-2xl font-semibold mb-4 text-blue-500">Status Pengobatan</h3>
                    <ul class="space-y-3">
                        <li><strong>Status:</strong> {{ $checkHarian->count() > 0 ? 'Aktif' : 'Belum Memulai' }}</li>
                        <li><strong>Fase:</strong> {{ $checkHarian->count() > 0 ? 'Intensif' : 'Belum Memulai' }}</li>
                        <li><strong>Jadwal Kontrol Berikutnya:</strong> {{ $jadwalKontrol }}</li>
                        <li><strong>Kepatuhan Obat:</strong> {{ number_format($compliancePercentage, 0) }}%</li>
                    </ul>
                </div>
            </div>

            <div class="mt-8 bg-white p-6 shadow-lg rounded-lg border border-blue-500">
                <h4 class="text-2xl font-semibold mb-4 text-blue-500">Hasil Cek Harian</h4>
                <div class="overflow-x-auto">
                    <table class="min-w-full table-auto border-collapse">
                        <thead>
                            <tr class="bg-blue-100">
                                <th class="p-2 border border-blue-500">Tanggal</th>
                                <th class="p-2 border border-blue-500">Suhu (°C)</th>
                                <th class="p-2 border border-blue-500">Berat (kg)</th>
                                <th class="p-2 border border-blue-500">Nafsu Makan</th>
                                <th class="p-2 border border-blue-500">Minum Obat</th>
                                <th class="p-2 border border-blue-500">Catatan Pasien</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($checkHarian as $check)
                            <tr class="border-t">
                                <td class="p-2 border border-blue-500">{{ \Carbon\Carbon::parse($check->tanggal)->format('d-m-Y') }}</td>
                                <td class="p-2 border border-blue-500">{{ $check->suhu }}</td>
                                <td class="p-2 border border-blue-500">{{ $check->berat }}</td>
                                <td class="p-2 border border-blue-500">{{ $check->nafsu_makan }}</td>
                                <td class="p-2 border border-blue-500">{{ $check->minum_obat }}</td>
                                <td class="p-2 border border-blue-500">{{ $check->catatan_pete }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="p-4 text-center border border-blue-500">Belum ada data check harian.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-6 shadow-lg rounded-lg border border-blue-500">
                    <h5 class="text-xl font-semibold text-blue-500">Durasi Pengobatan</h5>
                    <p>{{ $totalTreatmentDuration }} Hari</p>
                    
                    <h5 class="text-xl font-semibold mt-4 text-blue-500">Hari Patuh Obat</h5>
                    <p>{{ $compliantDays }} dari {{ $totalUniqueDays }} hari pengisian</p>
                </div>

                <div class="bg-white p-6 shadow-lg rounded-lg border border-blue-500">
                    <h5 class="text-xl font-semibold text-blue-500">Hari Gejala Aktif</h5>
                    <p>{{ $totalUniqueDays }} Hari</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center my-8">
        <button id="printBtn" class="px-8 py-4 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">Download Informasi</button>
    </div>

    <script>
        document.getElementById('printBtn').addEventListener('click', function () {
            const content = document.querySelector('.main-content');
            const printWindow = window.open('', '', 'height=800,width=800');
            printWindow.document.write('<html><head><title>Informasi Pasien</title>');
            // Salin style dari Tailwind untuk print
            Array.from(document.querySelectorAll('script[src*="cdn.tailwindcss.com"]')).forEach(el => {
                printWindow.document.write(el.outerHTML);
            });
            printWindow.document.write('</head><body>');
            printWindow.document.write(content.innerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            setTimeout(() => { // Beri waktu untuk CSS load
                printWindow.print();
            }, 500);
        });
    </script>

   <footer class="text-white">
        <div class="py-8 px-4" style="background-color: #0065A4;">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <p class="text-justify text-[12px] text-white">
                        <strong>Tuberkulosis (TBC)</strong> adalah penyakit infeksi menular yang disebabkan oleh bakteri Mycobacterium tuberculosis...
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
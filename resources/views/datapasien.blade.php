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
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- HEADER DASHBOARD -->
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

     <!-- Hero Section -->
    <section class="hero bg-[#003C62] text-white py-4 px-6 flex items-center justify-between">
        <div class="flex items-center space-x-2 mr-4">
            <img src="{{ asset('images/Logo_dashboard.png') }}" alt="Logo Dashboard" class="w-8 h-8 rounded-full" />
            <h1 class="text-4xl font-semibold mb-2">Dashboard</h1>
        </div>
        <div class="flex items-center space-x-6">
            <a href="{{ url('/dashboard_perawat') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                <img src="{{ asset('images/icon-profile.png') }}" alt="Profile Icon" class="w-6 h-6" />
                <span>Profile</span>
            </a>
            <a href="{{ url('/datapasien') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                <img src="{{ asset('images/icon-history.png') }}" alt="Check Harian Icon" class="w-6 h-6" />
                <span>Data Pasien</span>
            </a>
            <a href="{{ url('/bantuan_perawat') }}" class="flex items-center space-x-2 text-white hover:text-yellow-400">
                <img src="{{ asset('images/icon-support.png') }}" alt="Help Icon" class="w-6 h-6" />
                <span>Bantuan</span>
            </a>

        </a>
        </div>
    </section>

        <!-- VISUALISASI STATISTIK -->
    <section class="max-w-7xl mx-auto py-8 px-4">
        <h2 class="text-2xl font-bold text-center mb-6">Statistik Pasien TBC</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <p class="text-gray-600">Pasien Aktif</p>
                <p class="text-3xl font-bold text-blue-700" id="aktifCount">0</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <p class="text-gray-600">Pasien Sembuh</p>
                <p class="text-3xl font-bold text-green-700" id="sembuhCount">0</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <p class="text-gray-600">Pasien Putus Obat</p>
                <p class="text-3xl font-bold text-red-700" id="putusCount">0</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-4">Kepatuhan Minum Obat (Pie Chart)</h3>
                <canvas id="pieObatChart"></canvas>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-4">Sebaran Pasien Berdasarkan Jenis Kelamin (Bar Chart)</h3>
                <canvas id="barGenderChart"></canvas>
            </div>
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
                        <div class="main-content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                            <div class="col-span-3 mb-4">
                                <h2 class="text-2xl font-bold text-blue-900">Nama Pasien: {{ $user->username }}</h2>
                            </div>
                            @foreach($user->checkHarians as $checkHarian)
                            <div class="bg-gray-50 p-4 rounded-lg shadow-sm border border-gray-200">
                                <p class="font-bold text-gray-700">Tanggal: {{ \Carbon\Carbon::parse($checkHarian->tanggal)->format('d F Y') }}</p>
                                <p class="text-gray-600 mt-2"><strong>Suhu: </strong>{{ $checkHarian->suhu }}</p>
                                <p class="text-gray-600 mt-2"><strong>Berat: </strong>{{ $checkHarian->berat }}</p>
                                <p class="text-gray-600 mt-2"><strong>Nafsu Makan:</strong> {{ $checkHarian->nafsu_makan }}</p>
                                <p class="text-gray-600 mt-2"><strong>Minum Obat: </strong>{{ $checkHarian->minum_obat }}</p>
                                <p class="text-gray-600 mt-2"><strong>Catatan Pasien: </strong>{{ $checkHarian->catatan_pete }}</p>
                            </div>
                            @endforeach
                        </div>
                        <button class="printBtn mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Print Data Pasien
                        </button>
                    </div>
                </div>
                @empty
                    {{-- ... pesan jika forelse kosong ... --}}
                @endforelse
            @endif
        </div>
    </section>
        <script>
// Data statistik dari backend (Blade ke JS)
const users = @json($users);
let aktif = 0, sembuh = 0, putus = 0;
let minumObatYa = 0, minumObatTidak = 0, totalCheck = 0;
let genderLaki = 0, genderPerempuan = 0, genderLainnya = 0;

function isPutusObat(checkHarians) {
    if (!checkHarians || checkHarians.length < 1) return false;
    // Urutkan tanggal
    let dates = checkHarians.map(ch => ch.tanggal).sort();
    for (let i = 1; i < dates.length; i++) {
        let prev = new Date(dates[i - 1]);
        let curr = new Date(dates[i]);
        let diff = (curr - prev) / (1000 * 60 * 60 * 24);
        if (diff >= 3) return true;
    }
    return false;
}

users.forEach(user => {
    // Hanya pasien yang punya checkHarians (aktif, sembuh, putus) dihitung untuk visualisasi gender
    const isAktif = user.check_harians && user.check_harians.length > 0;
    const isSembuh = user.check_harians && user.check_harians.length >= 33;
    const isPutus = isPutusObat(user.check_harians);
    if(isAktif || isSembuh || isPutus) {
        if(user.gender === 'Laki-laki') genderLaki++;
        else if(user.gender === 'Perempuan') genderPerempuan++;
        else if(user.gender === 'Lainnya') genderLainnya++;
    }

    // Pasien aktif: user yang punya checkHarians
    if(isAktif) aktif++;

    // Pasien sembuh: sudah input 33 hari
    if(isSembuh) sembuh++;

    // Pasien putus obat: tidak isi checkharian selama 3 hari berturut-turut
    if(isPutus) putus++;

    // Kepatuhan minum obat
    if(user.check_harians) {
        user.check_harians.forEach(ch => {
            if(ch.minum_obat === 'Ya') minumObatYa++;
            if(ch.minum_obat === 'Tidak') minumObatTidak++;
            totalCheck++;
        });
    }
});

document.getElementById('aktifCount').textContent = aktif;
document.getElementById('sembuhCount').textContent = sembuh;
document.getElementById('putusCount').textContent = putus;

// Pie Chart Kepatuhan Minum Obat
const pieObatChart = new Chart(document.getElementById('pieObatChart'), {
    type: 'pie',
    data: {
        labels: ['Minum Obat', 'Tidak Minum Obat'],
        datasets: [{
            data: [minumObatYa, minumObatTidak],
            backgroundColor: ['#2563eb', '#ef4444'],
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { position: 'bottom' },
        }
    }
});

// Bar Chart Jenis Kelamin
const barGenderChart = new Chart(document.getElementById('barGenderChart'), {
    type: 'bar',
    data: {
        labels: ['Laki-laki', 'Perempuan', 'Lainnya'],
        datasets: [{
            label: 'Jumlah Pasien',
            data: [genderLaki, genderPerempuan, genderLainnya],
            backgroundColor: ['#2563eb', '#f472b6', '#a3a3a3'],
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false },
        },
        scales: {
            y: { beginAtZero: true }
        }
    }
});
document.querySelectorAll('.printBtn').forEach(function(btn) {
    btn.addEventListener('click', function () {
        // Ambil .main-content terdekat dari tombol yang diklik
        const content = btn.closest('.px-6.pb-6').querySelector('.main-content');
        const printWindow = window.open('', '', 'height=800,width=800');
        printWindow.document.write('<html><head><title>Informasi Pasien</title>');
        Array.from(document.querySelectorAll('script[src*="cdn.tailwindcss.com"]')).forEach(el => {
            printWindow.document.write(el.outerHTML);
        });
        printWindow.document.write('</head><body>');
        printWindow.document.write(content.innerHTML);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        setTimeout(() => {
            printWindow.print();
        }, 500);
    });
});
    </script>

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
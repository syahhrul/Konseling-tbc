<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PKU Bantul - Penanggulangan TBC</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-white text-gray-800">

    <!-- Header -->
    <nav class="bg-gray-100 shadow">
        <div class="container mx-auto flex items-center justify-between px-4 py-3">
            <a href="#" class="flex items-center space-x-3">
                <img src="{{ asset('images/logouad.jpg') }}" alt="Logo UAD" class="h-10" />
                <img src="{{ asset('images/logopku.png') }}" alt="Logo PKU" class="h-10" />
                <span class="font-semibold text-lg text-gray-900">PKU BANTUL</span>
            </a>
            <ul class="hidden md:flex space-x-8 text-gray-700">
                <li><a href="{{ url(path: '/') }}" class="hover:text-red-600">Beranda</a></li>
                <li><a href="{{ url('/tentang') }}" class="hover:text-red-600">Tentang</a></li>
                <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600">Kegiatan</a></li>
                <li><a href="{{ url('/dashboard') }}" class="hover:text-red-600">Dashboard</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-[url('/images/paru-paru.jpg')] bg-cover bg-center text-white text-center py-20 px-4">
        <div class="absolute inset-0 bg-[#0f172a]/70"></div> <!-- Overlay -->
        <div class="relative z-10">
            <h1 class="text-4xl font-bold mb-4">Pusat Informasi TBC</h1>
            <p class="text-lg max-w-2xl mx-auto">
                Dapatkan informasi lengkap tentang Tuberkulosis (TBC), gejala, pencegahan, pengobatan, dan layanan yang
                tersedia di PKU Bantul.
            </p>
        </div>
    </section>


    <!-- TBC Information Tab Navigation -->
    <section class="max-w-6xl mx-auto bg-white rounded-lg shadow-md py-8 px-6">

        <!-- Navbar mini sticky -->
        <nav class="flex space-x-4 overflow-x-auto pb-4 border-b border-gray-300 sticky top-0 bg-white z-20">
            <button class="tab-btn px-4 py-2 text-gray-700 whitespace-nowrap" data-target="deskripsi">Deskripsi</button>
            <button class="tab-btn px-4 py-2 text-gray-700 whitespace-nowrap" data-target="penyebab">Penyebab</button>
            <button class="tab-btn px-4 py-2 text-gray-700 whitespace-nowrap" data-target="gejala">Gejala</button>
            <button class="tab-btn px-4 py-2 text-gray-700 whitespace-nowrap"
                data-target="pengobatan">Pengobatan</button>
            <button class="tab-btn px-4 py-2 text-gray-700 whitespace-nowrap"
                data-target="pencegahan">Pencegahan</button>
        </nav>

        <!-- Sections -->
        <div id="deskripsi" class="py-8 grid md:grid-cols-2 gap-8 items-center">
            <img src="{{ asset('images/tbc-info.jpg') }}" alt="Ilustrasi Paru-Paru"
                class="rounded-xl shadow-lg order-2 md:order-1">
            <div class="order-1 md:order-2">
                <h2 class="text-3xl font-bold mb-4 text-gray-800">Apa Itu TBC?</h2>
                <p class="text-gray-700 leading-relaxed">
                    Tuberkulosis (TBC) adalah penyakit menular yang disebabkan oleh bakteri Mycobacterium
                    tuberculosis dan terutama menyerang paru-paru. Penyakit ini menyebar melalui udara saat
                    penderita TBC aktif batuk, bersin, atau berbicara, sehingga orang di sekitarnya bisa menghirup
                    percikan droplet yang mengandung bakteri. Gejala TBC biasanya berupa batuk yang berlangsung
                    lebih dari dua minggu, sering disertai dahak atau darah, penurunan berat badan drastis, demam
                    ringan terutama pada malam hari, keringat malam, dan rasa lelah berkepanjangan. Meski tergolong
                    penyakit serius, TBC bisa disembuhkan sepenuhnya dengan pengobatan yang tepat dan teratur selama
                    minimal enam bulan. Pemerintah Indonesia menyediakan obat TBC secara gratis melalui program DOTS
                    untuk memastikan penderita menjalani pengobatan sampai tuntas. Bila tidak diobati dengan benar,
                    TBC bisa berkembang menjadi TBC resistan obat (MDR-TB), yang lebih sulit dan mahal untuk
                    ditangani
                </p>
            </div>
        </div>

        <div id="penyebab" class="py-8 grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-4 text-gray-800">Penyebab TBC</h2>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li><strong>Infeksi Primer:</strong> Terjadi saat bakteri pertama kali masuk ke tubuh melalui
                        tetesan udara.
                        Pada tahap ini, tubuh biasanya masih bisa menahan bakteri dengan sistem kekebalan tubuh.
                        Gejala sering tidak muncul atau ringan seperti demam ringan, batuk singkat.</li>
                    <li><strong>Infeksi Laten:</strong>Bakteri berada dalam tubuh tetapi dalam kondisi "tidur"
                        (tidak aktif).
                        Tidak menimbulkan gejala dan tidak menular.
                        Berpotensi aktif kembali jika sistem kekebalan tubuh melemah.
                        Sekitar 5-10% orang dengan TB laten berisiko mengalami infeksi aktif pada suatu waktu dalam
                        hidupnya.</li>
                    <li><strong>Infeksi Aktif:</strong>Bakteri menjadi aktif, berkembang biak, dan menyebabkan
                        kerusakan jaringan.
                        Menyebabkan gejala klinis.
                        Sangat menular melalui udara.
                        Butuh pengobatan segera.</li>
                </ul>
            </div>
            <img src="{{ asset('images/bakteri-tbc.jpg') }}" alt="Ilustrasi Bakteri" class="rounded-xl shadow-lg">
        </div>

        <div id="gejala" class="py-8 grid md:grid-cols-2 gap-8 items-center">
            <img src="{{ asset('images/gejala-tbc.png') }}" alt="Orang Batuk"
                class="rounded-xl shadow-lg order-2 md:order-1">
            <div class="order-1 md:order-2">
                <h2 class="text-3xl font-bold mb-4 text-gray-800">Gejala TBC</h2>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <strong>Gejala TBC bisa berbeda tergantung organ yang terinfeksi:</strong>
                    <li>Gejala TBC Paru (TBC paling umum):
                        Batuk terus-menerus lebih dari 2 minggu (bisa berdahak atau darah).
                        Nyeri dada saat bernapas atau batuk.
                        Sesak napas.
                        Demam berkepanjangan, biasanya pada malam hari.
                        Keringat malam yang berlebihan.
                        Lemas, hilang nafsu makan, dan berat badan turun drastis.
                    </li>
                    <li>Gejala TBC Ekstra-Paru (Organ Lain):
                        TBC Tulang: Nyeri tulang, pembengkakan.
                        TBC Otak (Meningitis TB): Sakit kepala berat, kejang, kebingungan.
                        TBC Ginjal: Darah dalam urin, nyeri pinggang.
                        TBC Kelenjar: Pembengkakan kelenjar getah bening (biasanya di leher).</li>
                </ul>
            </div>
        </div>

        <div id="pengobatan" class="py-8 grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-4 text-gray-800">Pengobatan TBC</h2>
                <p class="text-gray-700 leading-relaxed mb-2">
                    <strong>a. Pengobatan TBC Paru </strong>
                    Pengobatan standar dilakukan dengan terapi kombinasi antibiotik selama minimal 6 bulan. Obat
                    utama dalam pengobatan TBC adalah:
                    Isoniazid (INH)
                    Rifampisin (RIF)
                    Pirazinamid (PZA)
                    Etambutol (EMB)
                    Tahapan pengobatan:
                    Fase Intensif (2 bulan pertama):
                    Pasien mengonsumsi 4 jenis obat (INH, RIF, PZA, EMB) setiap hari.
                    Bertujuan untuk membunuh sebagian besar bakteri dan mengurangi gejala.
                    Fase Lanjutan (4 bulan berikutnya):
                    Pasien hanya mengonsumsi 2 obat utama (INH dan RIF).
                    Bertujuan untuk memastikan bakteri benar-benar hilang dan mencegah kekambuhan.
                    Catatan: Pengobatan harus dilakukan secara teratur dan tuntas, karena jika dihentikan sebelum
                    waktunya, bakteri bisa menjadi kebal terhadap obat (resisten), yang membuat pengobatan lebih
                    sulit dan memakan waktu lebih lama.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    <strong>b. Pengobatan TBC Resisten Obat (TBC RO) </strong>
                    TBC Resisten Obat terjadi ketika bakteri menjadi kebal terhadap obat standar, terutama
                    Rifampisin dan Isoniazid. Pengobatan TBC RO lebih lama (9–24 bulan) dan menggunakan obat yang
                    lebih kuat, seperti:
                    Bedaquiline
                    Linezolid
                    Levofloxacin
                </p>
                <p class="text-gray-700 leading-relaxed">
                    <strong>c. Pengobatan TBC Laten </strong>
                    Bagi orang yang terinfeksi laten (tanpa gejala), diberikan pengobatan pencegahan dengan
                    Isoniazid atau Rifampisin selama 3–9 bulan, terutama bagi mereka yang berisiko tinggi (misalnya
                    penderita HIV atau orang dengan sistem imun lemah).
                </p>
            </div>
            <img src="{{ asset('images/obat-tbc.png') }}" alt="Obat TBC" class="rounded-xl shadow-lg">
        </div>

        <div id="pencegahan" class="py-8 grid md:grid-cols-2 gap-8 items-center">
            <img src="{{ asset('images/pencegahan-tbc.jpg') }}" alt="Pencegahan TBC"
                class="rounded-xl shadow-lg order-2 md:order-1">
            <div class="order-1 md:order-2">
                <h2 class="text-3xl font-bold mb-4 text-gray-800">Pencegahan TBC</h2>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <strong>a. Vaksinasi BCG (Bacillus Calmette-Guérin)</strong>
                    <li>Diberikan pada bayi untuk memberikan perlindungan terhadap TBC berat, seperti meningitis
                        tuberkulosis.</li>
                    <li>Tidak sepenuhnya melindungi dari TBC paru pada orang dewasa, tetapi tetap dianjurkan.</li>
                    <strong>b. Pencegahan Penularan</strong>
                    <li>Menggunakan masker bagi penderita TBC aktif.</li>
                    <li>Menjaga ventilasi ruangan agar sirkulasi udara baikk</li>
                    <li>Menutup mulut saat batuk atau bersin dengan tisu atau siku bagian dalam.</li>
                    <li>Menjalani pengobatan hingga tuntas untuk mencegah penyebaran dan resistensi obat.</li>
                </ul>
            </div>
        </div>

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
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-4 text-center text-sm text-gray-400">
            &copy; 2025 PKU Bantul. All rights reserved.
        </div>
    </footer>

</body>
{{-- <script src="{{ asset('js/tab-navigation.js') }}"></script> --}}
<script src="js/navScroll.js"></script>

</html>

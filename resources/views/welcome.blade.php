<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PKU Bantul - Penanggulangan TBC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Efek Hover - Gambar naik saat cursor berada di atasnya */
        #carousel-inner img,
        .hover-effect img {
            transition: transform 0.3s ease-in-out; /* Transisi halus */
        }

        #carousel-inner img:hover,
        .hover-effect img:hover {
            transform: translateY(-10px); /* Menggeser gambar ke atas saat dihover */
        }

        /* Efek Hover pada tombol "Lihat Selengkapnya" */
        .btn-hover {
            transition: transform 0.3s ease, background-color 0.3s ease; /* Transisi halus */
        }

        .btn-hover:hover {
            transform: translateY(-5px); /* Menggeser tombol ke atas saat dihover */
            background-color: #e53e3e; /* Mengubah warna latar belakang */
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
                <li><a href="{{ url('/') }}" class="hover:text-red-600">Beranda</a></li>
                <li><a href="{{ url('/tentang') }}" class="hover:text-red-600">Tentang</a></li>
                <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600">Kegiatan</a></li>
                <li>
                    @if (Auth::check())
                        <a href="{{ url('/dashboard') }}" class="hover:text-red-600">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-red-600">Dashboard</a>
                    @endif
                </li>
                <li>
                    @if (Auth::check())
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="px-4 py-2 text-white rounded-lg transition" style="background-color: #0065A4;">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="px-4 py-2 text-white rounded-lg transition" style="background-color: #0065A4;">Daftar</a>
                    @endif
                </li>
            </ul>
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
                <li><a href="{{ url('/') }}" class="hover:text-red-600 transition">Beranda</a></li>
                <li><a href="{{ url('/tentang') }}" class="hover:text-red-600 transition">Tentang</a></li>
                <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600 transition">Kegiatan</a></li>
                <li>
                    @if (Auth::check())
                        <a href="{{ url('/dashboard') }}" class="hover:text-red-600">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-red-600">Dashboard</a>
                    @endif
                </li>
                <li><a href="{{ route('login') }}" class="hover:text-red-600 transition">Login</a></li>
                <li><a href="{{ route('register') }}" class="hover:text-red-600 transition">Daftar</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section with Carousel -->
    <section class="hero bg-[#0f172a] text-white text-center py-6">
        <div class="relative max-w-4xl mx-auto">
            <div class="overflow-hidden rounded-lg">
                <div id="carousel-inner" class="flex transition-transform duration-700">
                    <img src="{{ asset('images/slide1.png') }}" alt="Slide 1" class="w-[500px] object-contain" />
                    <img src="{{ asset('images/hp1.jpg') }}" alt="Slide 2" class="w-[500px] object-contain" />
                    <img src="{{ asset('images/pameran-pku.jpg') }}" alt="Slide 3" class="w-[500px] object-contain" />
                    <img src="{{ asset('images/slide4.png') }}" alt="Slide 4" class="w-[500px] object-contain" />
                    <img src="{{ asset('images/slide1.png') }}" alt="Clone Slide 1" class="w-[500px] object-contain" />
                </div>
            </div>
            <button id="prevBtn" class="absolute top-1/2 left-2 -translate-y-1/2 bg-black bg-opacity-50 text-white rounded-full p-2 hover:bg-opacity-75">‹</button>
            <button id="nextBtn" class="absolute top-1/2 right-2 -translate-y-1/2 bg-black bg-opacity-50 text-white rounded-full p-2 hover:bg-opacity-75">›</button>
        </div>
    </section>

    <!-- TBC Section -->
    <section class="section py-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between gap-8 md:gap-4 px-4 max-w-6xl">
            <div class="md:w-1/2 text-gray-800">
                <p class="leading-relaxed text-lg">
                    Tuberkulosis (TBC) adalah penyakit menular yang disebabkan oleh bakteri Mycobacterium tuberculosis
                    dan menyerang paru-paru. Penyakit ini menyebar melalui udara saat penderita TBC batuk atau bersin.
                    Akibatnya, orang di sekitarnya bisa menghirup bakteri dan terinfeksi. TBC tergolong penyakit yang
                    dapat dicegah dan disembuhkan jika didiagnosis dan diobati dengan benar dan tepat waktu. Penanganan
                    TBC memerlukan kerjasama dari berbagai pihak dan edukasi kepada masyarakat luas.
                </p>
                <a href={{ url('/pusatinfotbc') }}
                    class="mt-4 inline-block bg-red-600 text-white px-5 py-2 rounded hover:bg-red-700 btn-hover">Lihat
                    Selengkapnya</a>
            </div>
            <div class="md:w-5/12 text-center hover-effect">
                <img src="{{ asset('images/paru-paru.jpg') }}" alt="Paru-paru" class="mx-auto w-72 object-contain" />
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section class="section bg-blue-100 py-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between gap-8 md:gap-4 px-4 max-w-6xl">
            <div class="md:w-1/2 text-gray-900">
                <h4 class="mb-4 text-2xl font-semibold">Tentang Kami</h4>
                <p class="leading-relaxed text-lg">
                    Kami bekerja sama dan mengembangkan kemitraan dengan Pemerintah, organisasi internasional dan organisasi lokal dalam meningkatkan peran serta masyarakat dalam upaya penanggulangan tuberkulosis secara efektif dan berkelanjutan.
                </p>
                <a href="{{ url('/tentang') }}" class="mt-4 inline-block bg-red-600 text-white px-5 py-2 rounded hover:bg-red-700 btn-hover">Selengkapnya</a>
            </div>
            <div class="md:w-5/12 text-center hover-effect">
                <img src="{{ asset('images/dinkes.jpg') }}" alt="Dinas Kesehatan" class="mx-auto w-full max-w-md object-contain" />
            </div>
        </div>
    </section>

    <!-- Footer -->
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

    <script>
        const menuBtn = document.getElementById("menuBtn");
        const mobileMenu = document.getElementById("mobileMenu");
        const carouselInner = document.getElementById("carousel-inner");
        let currentSlide = 0;

        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });

        // Fungsi untuk mengubah slide secara otomatis
        function changeSlide() {
            const slides = carouselInner.querySelectorAll("img");
            const totalSlides = slides.length;

            currentSlide = (currentSlide + 1) % totalSlides; // Menentukan slide berikutnya
            const offset = -currentSlide * 500; // Pindahkan ke slide yang sesuai (500px adalah lebar gambar)
            carouselInner.style.transform = `translateX(${offset}px)`; // Menggeser gambar
        }

        // Menjalankan fungsi changeSlide setiap 3 detik (3000ms)
        setInterval(changeSlide, 3000);
    </script>

</body>
</html>

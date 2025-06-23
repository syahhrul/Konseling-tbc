<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PKU Bantul - Penanggulangan TBC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script src="{{ asset('js/slider.js') }}"></script> --}}

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
                <li><a href="#" class="hover:text-red-600">Beranda</a></li>
                <li><a href="{{ url('/tentang') }}" class="hover:text-red-600">Tentang</a></li>
                <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600">Kegiatan</a></li>
                <li><a href="{{ url('/dashboard') }}" class="hover:text-red-600">Dashboard</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section with Carousel -->
    <section class="hero bg-[#0f172a] text-white text-center py-6">
        <div class="relative max-w-4xl mx-auto">
            <!-- Carousel using basic Tailwind + some minimal JS -->
            <div class="overflow-hidden rounded-lg">
                <div id="carousel-inner" class="flex transition-transform duration-700">
                    <img src="{{ asset('images/slide1.png') }}" alt="Slide 1" class="w-[500px] object-contain" />
                    <img src="{{ asset('images/hp1.jpg') }}" alt="Slide 2" class="w-[500px] object-contain" />
                    <img src="{{ asset('images/pameran-pku.jpg')}}" alt="Slide 3"class="w-[500px] object-contain" />
                    <img src="{{ asset('images/slide4.png')}}" alt="Slide 4"class="w-[500px] object-contain" />

                    <!-- Duplikat slide pertama di akhir -->
                    <img src="{{ asset('images/slide1.png') }}" alt="Clone Slide 1" class="w-[500px] object-contain" />
                </div>

            </div>

            <!-- Buttons -->
            <button id="prevBtn"
                class="absolute top-1/2 left-2 -translate-y-1/2 bg-black bg-opacity-50 text-white rounded-full p-2 hover:bg-opacity-75">
                ‹
            </button>
            <button id="nextBtn"
                class="absolute top-1/2 right-2 -translate-y-1/2 bg-black bg-opacity-50 text-white rounded-full p-2 hover:bg-opacity-75">
                ›
            </button>
        </div>
    </section>

    <!-- TBC Section -->
    <section class="section py-12">
        <div
            class="container mx-auto flex flex-col md:flex-row items-center justify-between gap-8 md:gap-4 px-4 max-w-6xl">
            <div class="md:w-1/2 text-gray-800">
                <p class="leading-relaxed text-lg">
                    Tuberkulosis (TBC) adalah penyakit menular yang disebabkan oleh bakteri Mycobacterium tuberculosis
                    dan menyerang paru-paru. Penyakit ini menyebar melalui udara saat penderita TBC batuk atau bersin.
                    Akibatnya, orang di sekitarnya bisa menghirup bakteri dan terinfeksi. TBC tergolong penyakit yang
                    dapat dicegah dan disembuhkan jika didiagnosis dan diobati dengan benar dan tepat waktu. Penanganan
                    TBC memerlukan kerjasama dari berbagai pihak dan edukasi kepada masyarakat luas.
                </p>
                <a href={{ url('/pusatinfotbc') }}
                    class="mt-4 inline-block bg-red-600 text-white px-5 py-2 rounded hover:bg-red-700">Lihat
                    Selengkapnya</a>
            </div>
            <div class="md:w-5/12 text-center">
                <img src="{{ asset('images/paru-paru.jpg') }}" alt="Paru-paru" class="mx-auto w-72 object-contain" />
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section class="section bg-blue-100 py-12">
        <div
            class="container mx-auto flex flex-col md:flex-row items-center justify-between gap-8 md:gap-4 px-4 max-w-6xl">
            <div class="md:w-1/2 text-gray-900">
                <h4 class="mb-4 text-2xl font-semibold">Tentang Kami</h4>
                <p class="leading-relaxed text-lg">
                    Kami bekerja sama dan mengembangkan kemitraan dengan Pemerintah, organisasi internasional dan
                    organisasi lokal dalam meningkatkan peran serta masyarakat dalam upaya penanggulangan tuberkulosis
                    secara efektif dan berkelanjutan.
                </p>
                <a href="#"
                    class="mt-4 inline-block bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">Selengkapnya</a>
            </div>
            <div class="md:w-5/12 text-center">
                <img src="{{ asset('images/dinkes.jpg') }}" alt="Dinas Kesehatan"
                    class="mx-auto w-full max-w-md object-contain" />
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Kontak -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Kontak Kami</h3>
                <p class="text-sm">Jl. Contoh No.123, Jakarta</p>
                <p class="text-sm">Email: info@example.com</p>
                <p class="text-sm">Telp: +62 812 3456 7890</p>
            </div>

            <!-- Sosial Media -->
            <div class="flex md:justify-end items-start">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
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
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-8 border-t border-gray-700 pt-4 text-center text-sm text-gray-400">
            &copy; 2025 Nama Perusahaan. All rights reserved.
        </div>
    </footer>


    <script>
        // Basic carousel logic for Tailwind version
        const carouselInner = document.getElementById('carousel-inner');
        const totalItems = carouselInner.children.length;
        let currentIndex = 0;

        document.getElementById('prevBtn').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            carouselInner.style.transform = `translateX(-${currentIndex * 500}px)`;
        });

        document.getElementById('nextBtn').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalItems;
            carouselInner.style.transform = `translateX(-${currentIndex * 500}px)`;
        });
    </script>

</body>

</html>

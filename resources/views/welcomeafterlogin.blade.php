<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PKU Bantul - Penanggulangan TBC</title>
  <script src="https://cdn.tailwindcss.com"></script>
  {{-- <script src="{{ asset('js/slider.js') }}"></script> --}}

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
<<<<<<< HEAD
<<<<<<< HEAD
                <li><a href="/welcomeafterlogin" class="hover:text-red-600">Beranda</a></li>
                <li><a href="{{ url('/tentangafterlogin') }}" class="hover:text-red-600">Tentang</a></li>
                <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600">Kegiatan</a></li>
                <li><a href="{{ route('dashboard') }}" class="hover:text-yellow-400 {{ Route::is('dashboard') ? 'text-yellow-300' : '' }}">Dashboard</a></li>
=======
                <li><a href="#" class="hover:text-red-600">Beranda</a></li>
                <li><a href="{{ url('/tentang') }}" class="hover:text-red-600">Tentang</a></li>
                <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600">Kegiatan</a></li>
                <li><a href="{{ url('/dashboard') }}" class="hover:text-red-600">Dashboard</a></li>
>>>>>>> f830dc3 (Initial commit)
=======
                <li><a href="/welcomeafterlogin" class="hover:text-red-600">Beranda</a></li>
                <li><a href="{{ url('/tentangafterlogin') }}" class="hover:text-red-600">Tentang</a></li>
                <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600">Kegiatan</a></li>
                <li><a href="{{ route('dashboard') }}" class="hover:text-yellow-400 {{ Route::is('dashboard') ? 'text-yellow-300' : '' }}">Dashboard</a></li>
>>>>>>> fa4d7d4 (tambah dashboard)
                <li> <a href="{{ route('logout') }}" class="px-4 py-2 text-white rounded-lg transition" style="background-color:rgb(251, 34, 5);">Logout</a></li>
            </ul>
            
            <!-- Header Right (User Info) -->
            <div class="flex items-center space-x-4">
                @if (Auth::check())
<<<<<<< HEAD
<<<<<<< HEAD
                    <span class="text-gray-900">Halo, {{ Auth::user()->username }} Selamat Datang!</span>
=======
                    <span class="text-gray-900">Halo, {{ Auth::user()->name }}</span>
>>>>>>> f830dc3 (Initial commit)
=======
                    <span class="text-gray-900">Halo, {{ Auth::user()->username }} Selamat Datang!</span>
>>>>>>> fa4d7d4 (tambah dashboard)
                
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
<<<<<<< HEAD
<<<<<<< HEAD
            <li><a href="{{ url('/tentangafterlogin') }}" class="hover:text-red-600 transition">Tentang</a></li>
            <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600 transition">Kegiatan</a></li>
<li><a href="{{ route('dashboard') }}" class="hover:text-yellow-400 {{ Route::is('dashboard') ? 'text-yellow-300' : '' }}">Dashboard</a></li>

=======
            <li><a href="{{ url('/tentang') }}" class="hover:text-red-600 transition">Tentang</a></li>
            <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600 transition">Kegiatan</a></li>
            <li><a href="{{ url('/dashboard') }}" class="hover:text-red-600 transition">Dashboard</a></li>
>>>>>>> f830dc3 (Initial commit)
=======
            <li><a href="{{ url('/tentangafterlogin') }}" class="hover:text-red-600 transition">Tentang</a></li>
            <li><a href="{{ url('/kegiatan') }}" class="hover:text-red-600 transition">Kegiatan</a></li>
<li><a href="{{ route('dashboard') }}" class="hover:text-yellow-400 {{ Route::is('dashboard') ? 'text-yellow-300' : '' }}">Dashboard</a></li>

>>>>>>> fa4d7d4 (tambah dashboard)
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
<<<<<<< HEAD
<<<<<<< HEAD
                <a href="/tentang" class="mt-4 inline-block bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">Selengkapnya</a>

=======
                <a href="#"
                    class="mt-4 inline-block bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">Selengkapnya</a>
>>>>>>> f830dc3 (Initial commit)
=======
                <a href="/tentang" class="mt-4 inline-block bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">Selengkapnya</a>

>>>>>>> fa4d7d4 (tambah dashboard)
            </div>
            <div class="md:w-5/12 text-center">
                <img src="{{ asset('images/dinkes.jpg') }}" alt="Dinas Kesehatan"
                    class="mx-auto w-full max-w-md object-contain" />
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
  </div>
</div>

    </div>
  </div>

  <!-- Bagian bawah footer dengan warna biru tua -->
  <div class="py-4 text-center text-sm" style="background-color: #004b6b;">
    <p>Copyright © 2024 tbindonesia.or.id | All rights reserved.</p>
  </div>
</footer>

<script>
    const menuBtn = document.getElementById("menuBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
</script>

<!-- Script Carousel -->
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

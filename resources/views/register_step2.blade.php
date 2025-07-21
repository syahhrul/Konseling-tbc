<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Tahap 2 - PKU Bantul</title>
  <link rel="stylesheet" href="{{ asset('css/register_step2.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="background: url('{{ asset('images/latar_belakang_login.png') }}') no-repeat center center fixed; background-size: cover;">

  <!-- Header -->
  <nav class="bg-gray-100 shadow">
    <div class="container mx-auto flex items-center justify-between px-4 py-3">
      <a href="#" class="flex items-center space-x-3">
        <img src="{{ asset('images/logouad.jpg') }}" alt="Logo UAD" class="h-10" />
        <img src="{{ asset('images/logopku.png') }}" alt="Logo PKU" class="h-10" />
        <span class="font-semibold text-lg text-gray-900">PKU BANTUL</span>
      </a>
    </div>
  </nav>

  <!-- Form Registrasi Tahap 2 -->
  <div class="login-wrapper">
    <div class="card-wrapper">
      <div class="login-container">
        <h2>Register</h2>
        <form action="{{ route('register.submit') }}" method="POST" id="registerForm">
          @csrf

          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Masukkan email anda" required>

          <label for="telepon">Nomor Telepon</label>
          <input type="text" id="telepon" name="telepon" placeholder="Masukkan nomor telepon" required>

          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Buat username" required>

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Buat password" required>

          <label for="password_confirmation">Konfirmasi Password</label>
          <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Ulangi password" required>

          <button type="submit">Daftar Sekarang</button>
        </form>

        <div class="login-footer">
          Sudah punya akun? <a href="{{ route('login') }}">Login sekarang</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Script validasi password -->
  <script>
    document.getElementById('registerForm').addEventListener('submit', function (e) {
      const password = document.getElementById('password').value;
      const confirm = document.getElementById('password_confirmation').value;

      if (password !== confirm) {
        e.preventDefault();
        alert("Password dan konfirmasi password tidak sama!");
      }
    });
  </script>

  <!-- Footer -->
  <footer class="text-white mt-10">
    <div class="py-8 px-4" style="background-color: #0065A4;">
      <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
          <p class="text-justify text-[12px] text-white">
            <strong>Tuberkulosis (TBC)</strong> adalah penyakit infeksi menular yang disebabkan oleh bakteri Mycobacterium tuberculosis. Penyakit ini umumnya menyerang paru-paru, namun bisa juga menyerang bagian tubuh lain seperti tulang, kelenjar getah bening, ginjal, bahkan otak.
          </p>
        </div>
        <div class="pl-20">
          <h3 class="text-white text-[14px] font-bold mb-2">Kontak Kami</h3>
          <p class="text-sm">
            Jl. Jend. Sudirman No.124,<br>
            Nyangkringan, Bantul, Kec. Bantul,<br>
            Kabupaten Bantul, DIY<br>
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

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register - PKU Bantul</title>
  <link rel="stylesheet" href="{{ asset('css/register_step1.css') }}">
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

  <!-- Form Registrasi Tahap 1 -->
  <div class="login-wrapper">
    <div class="card-wrapper">
      <div class="login-container">
        <h2>Register</h2>
        <form action="{{ route('register.step1.post') }}" method="POST">
          @csrf

          <label for="nama_depan">Nama Depan</label>
          <input type="text" id="nama_depan" name="nama_depan" placeholder="Masukkan Nama Depan" required>

          <label for="nama_belakang">Nama Belakang (Opsional)</label>
          <input type="text" id="nama_belakang" name="nama_belakang" placeholder="Masukkan Nama Belakang">

          <label for="tanggal_lahir">Tanggal Lahir</label>
          <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

          <label for="jenis_kelamin">Jenis Kelamin</label>
          <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option disabled selected>Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
            <option value="Lainnya">Lainnya</option>
          </select>

          <label for="alamat">Alamat</label>
          <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat Anda" required>

          <button type="submit">Next</button>
        </form>

        <div class="login-footer">
          Sudah punya akun? <a href="{{ route('login') }}">Login sekarang</a>
        </div>
      </div>
    </div>
  </div>

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

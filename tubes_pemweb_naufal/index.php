<?php
session_start();
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.19.0/dist/full.css" rel="stylesheet" type="text/css" />
  <style>
    .hero {
      background-image: url('image/bghome.png');
    }
  </style>
</head>
<body>
  <div class="hero min-h-screen">
    <div class="hero-overlay bg-opacity-60">
      <div class="navbar bg-base-transparent sticky">
          <div class="flex-1 ml-5">
              <a class="btn btn-ghost normal-case text-xl text-white">Kesehatan Mental Sejati</a>
          </div>
          <div class="flex-none mr-5">
              <div class="dropdown dropdown-end lg:hidden">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                  <li><a href="jiwaku/jiwaku.php" class="hover:text-[#F16A70]">Mentalku</a></li>
                  <li class="dropdown dropdown-hover">
                    <label tabindex="0" class="hover:text-[#F16A70]">Direktori</label>
                    <ul class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                      <li><a href="pages/direktori_penyakit.php">Direktori Penyakit</a></li>
                      <li><a href="pages/direktori_obat.php">Direktori Obat</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-hover">
                    <label tabindex="0" class="hover:text-[#F16A70]">Informasi</label>
                    <ul class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                      <li><a href="pages/jadwal_dokter.php">Dokter dan Jadwal</a></li>
                      <li class="dropdown dropdown-hover">
                        <label tabindex="0" class="hover:text-[#F16A70]">Bagian rehabilitas</label>
                        <ul class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                          <li><a href="pages/rehabilitas_napza.php">Napza</a></li>
                          <li><a href="pages/rehabilitas_jiwa.php">Kesehatan jiwa dan mental</a></li>
                          <li><a href="pages/rehabilitas_kognitif.php">Kognitif</a></li>
                        </ul>
                      </li>
                      <li><a href="pages/profil_website.php">Profil website</a></li>
                    </ul>
                  </li>
                  <li><a href="pages/registrasi.php" class="hover:text-[#F16A70]">Pendaftaran pasien</a></li>
                  <li><a href="pages/konsultasi.php" class="hover:text-[#F16A70]">Konsultasi Online</a></li>
                  <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 'logged_in'): ?>
                      <li><a href="pages/profile.php" class="hover:text-[#F16A70]"><?php echo $_SESSION['username']; ?></a></li>
                      <li><a href="pages/logout.php"><button class="btn bg-[#F16A70]">Keluar</button></a></li>
                  <?php else: ?>
                      <li><a href="login.php"><button class="btn bg-[#F16A70]">Masuk</button></a></li>
                  <?php endif; ?>
                </ul>
              </div>
              <ul class="menu menu-horizontal p-0 hidden lg:flex text-[#EBE9E9]">
                  <li><a href="jiwaku/jiwaku.php" class="hover:text-[#F16A70]">Mentalku</a></li>
                  <li class="dropdown dropdown-hover">
                    <label tabindex="0" class="hover:text-[#F16A70]">Direktori</label>
                    <ul class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                      <li><a href="pages/direktori_penyakit.php">Direktori Penyakit</a></li>
                      <li><a href="pages/direktori_obat.php">Direktori Obat</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-hover">
                    <label tabindex="0" class="hover:text-[#F16A70]">Informasi</label>
                    <ul class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                      <li><a href="pages/jadwal_dokter.php">Dokter dan Jadwal</a></li>
                      <li class="dropdown dropdown-hover">
                        <label tabindex="0" class="hover:text-[#F16A70]">Bagian rehabilitas</label>
                        <ul class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                          <li><a href="pages/rehabilitas_napza.php">Napza</a></li>
                          <li><a href="pages/rehabilitas_jiwa.php">Kesehatan jiwa dan mental</a></li>
                          <li><a href="pages/rehabilitas_kognitif.php">Kognitif</a></li>
                        </ul>
                      </li>
                      <li><a href="pages/profil_website.php">Profil website</a></li>
                    </ul>
                  </li>
                  <li><a href="pages/registrasi.php" class="hover:text-[#F16A70]">Pendaftaran pasien</a></li>
                  <li><a href="pages/konsultasi.php" class="hover:text-[#F16A70]">Konsultasi Online</a></li>
                  <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 'logged_in'): ?>
                      <li><a href="pages/profile.php" class="hover:text-[#F16A70]"><?php echo $_SESSION['username']; ?></a></li>
                      <li><a href="pages/logout.php"><button class="btn bg-[#F16A70]">Keluar</button></a></li>
                  <?php else: ?>
                      <li><a href="login.php"><button class="btn bg-[#F16A70]">Masuk</button></a></li>
                  <?php endif; ?>
              </ul>
          </div>
      </div>
    </div>
    <div class="hero-content text-center text-neutral-content">
      <div class="max-w-md text-[#EBE9E9]">
        <h1 class="mb-5 text-5xl font-bold">Selamat datang, <?php if(isset($_SESSION['status'])){ echo $_SESSION['username'];} ?></h1>
        <p class="mb-5">Kesehatan Mental Sejati adalah website yang menyediakan konsultasi secara online</p>
        <a href="https://wa.me/+6289513846415"><button class="btn bg-[#F16A70] text-[#EBE9E9]">Coba sekarang</button></a>
      </div>
    </div>
  </div>

  <div class="text-center mt-10">
      <h2 class="text-4xl font-bold mb-5">Jiwa Artikel</h2>

      <main class="container mx-auto mt-10">
        <section class="articles grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <article class="bg-white p-6 shadow-md rounded-md text-center">
                <img src="image/jiwaku.jpg" alt="Article 1" class="mb-4 mx-auto">
                <h2 class="text-xl font-bold mb-2">Artikel Jiwaku</h2>
                <a href="jiwaku/jiwaku.php" class="text-blue-500 hover:underline read-more">BACA DISINI</a>
            </article>
            <article class="bg-white p-6 shadow-md rounded-md text-center">
                <img src="image/mental.jpg" alt="Article 2" class="mb-4 mx-auto">
                <h2 class="text-xl font-bold mb-2">Artikel Mentalku</h2>
                <a href="jiwaku/mentalku.php" class="text-blue-500 hover:underline read-more">BACA DISINI</a>
            </article>
            <article class="bg-white p-6 shadow-md rounded-md text-center">
                <img src="image/bacaan_ku.jpg" alt="Article 3" class="mb-4 mx-auto">
                <h2 class="text-xl font-bold mb-2">Bacaanku</h2>
                <a href="jiwaku/bacaanku.php" class="text-blue-500 hover:underline read-more">BACA DISINI</a>
            </article>
        </section>
      </main>
  </div>

  <div class="text-center mt-10">
    <h2 class="text-4xl font-bold mb-5">Direktori Penyakit</h2>
    <main class="container mx-auto mt-10">
        <section class="articles grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <article class="bg-white p-6 shadow-md rounded-md text-center">
                <img src="image/diabetes.jpg" alt="Article 1" class="mb-4 mx-auto">
                <h2 class="text-xl font-bold mb-2">Diabetes Mellitus</h2>
                <p>Diabetes mellitus adalah kondisi kronis di mana kadar gula darah (glukosa) terlalu tinggi. 
                    Ada dua tipe utama: Tipe 1 (ketika tubuh tidak memproduksi insulin) dan 
                    Tipe 2 (ketika tubuh tidak menggunakan insulin dengan baik atau tidak cukup memproduksinya).</p>
                <a href="pages/artikel_diabetes.php" class="text-blue-500 hover:underline read-more">BACA DISINI</a>
            </article>
            <article class="bg-white p-6 shadow-md rounded-md text-center">
                <img src="image/hipertensi.jpg" alt="Article 2" class="mb-4 mx-auto">
                <h2 class="text-xl font-bold mb-2">Hipertensi</h2>
                <p>Hipertensi adalah kondisi di mana tekanan darah dalam arteri meningkat secara kronis, 
                    yang dapat menyebabkan masalah serius seperti penyakit jantung dan stroke.</p>
                <a href="pages/artikel_hipertensi.php" class="text-blue-500 hover:underline read-more">BACA DISINI</a>
            </article>
            <article class="bg-white p-6 shadow-md rounded-md text-center">
                <img src="image/kanker.jpg" alt="Article 3" class="mb-4 mx-auto">
                <h2 class="text-xl font-bold mb-2">Kanker</h2>
                <p>Kanker adalah kondisi medis berupa tumbuhnya sel abnormal dan ganas di dalam tubuh. 
                  Pertumbuhan sel kanker ini bisa terjadi di seluruh bagian tubuh, mulai dari kulit, mata, 
                  paru-paru, hingga organ intim. </p>
                <a href="pages/artikel_kanker.php" class="text-blue-500 hover:underline read-more">BACA DISINI</a>
            </article>
        </section>
    </main>
  </div>

    <script src="script.js"></script>
</body>
</html>

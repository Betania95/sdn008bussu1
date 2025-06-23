<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SDN 008 BUSSU</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <div id="pengumuman" class="marquee">
  📢 Penerimaan Siswa Baru Tahun Ajaran 2025/2026 telah dibuka! Daftar sekarang!
</div>
    <h1>SEKOLAH DASAR NEGERI 008 BUSSU</h1>
    <p>Unggul, Berkarakter, Berwawasan Global</p>
    <nav>
      <a href="#profil">Profil</a>
      <a href="#program">Program</a>
      <a href="#galeri">Galeri</a>
      <a href="#kontak">Kontak</a>
    </nav>
    <button id="toggleMode">🌙 Mode Gelap</button>
  </header>

  <h2>Sejrah & Visi-Misi</h2>
<ul>
  <li><a href="../Sejarah/Sejarah.html">📝 Sejarah Sekolah</a></li>
  <li><a href="../Visi-Misi/Visi-Misi.html">📂 Visi-Misi Sekolah</a></li>
  <li><a href="../berita/berita.html">📰 Kelola Berita Sekolah</a></li>
</ul>
<h2>Selamat Datang, Bapak/Ibu Guru</h2>
<ul>
  <li><a href="../nilai/lihat-nilai.html">📊 Nilai Saya</a></li>
  <li><a href="../tugas/unggah.html">📎 Upload Tugas</a></li>
  <li><a href="../berita/berita.html">📰 Berita Sekolah</a></li>
</ul>
  <main>
    <section id="profil">
      <h2>Profil Sekolah</h2>
      <p>SD NEGERI 008 BUSSU ADALAH SEKOLAH PENGGERAK YANG BAIK, UNGGUL.</p>
    </section>
    <!-- Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">SD NEGERI 008 BUSSU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#beranda">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
        <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- BERANDA -->
<section id="beranda" class="py-5 bg-light text-center">
  <div class="container">
    <h1 class="display-5">Selamat Datang di SD NEGERI 008 BUSSU</h1>
    <p class="lead">Mencetak generasi unggul dalam ilmu dan akhlak.</p>
  </div>
</section>

<!-- GALERI -->
<section id="galeri" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Galeri Kegiatan</h2>
    <div class="row g-3">
      <div class="col-md-4"><img src="https://img.freepik.com/premium-photo/pramuka-indonesia-3d-indonesian-scout-cartoon-characters_1106001-287.jpg" class="img-fluid rounded" alt="Kegiatan 1"></div>
      <div class="col-md-4"><img src="https://assets.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p3/57/2024/12/27/ai-2612261199.jpg" class="img-fluid rounded" alt="Kegiatan 2"></div>
      <div class="col-md-4"><img src="https://static.republika.co.id/uploads/member/images/news/250604234054-322.png" class="img-fluid rounded" alt="Kegiatan 3"></div>
    </div>
  </div>
</section>

<!-- KONTAK -->
<section id="kontak" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Hubungi Kami</h2>
    <p class="text-center">Jl. Poros Polewali-Mamasa, Lambanan, Desa Tadisi, Kecamatan Sumarorong, Kabupaten Mamasa, Sulawesi Barat<br>Email: info@sdn008bussu.sch.id | Telp: (+62) 0888888888</p>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-primary text-white text-center py-3">
  <div class="container">
    <small>&copy; 2025 SD Negeri 008 Bussu. All rights reserved.</small>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <section id="program">
      <h2>Program Keunggulan</h2>
      <ul>
        <li>Komputer</li>
        <li>Olahraga</li>
        <li>Kesenian</li>
        <li>Pramuka</li>
      </ul>
    </section>

    <section id="galeri">
      <h2>Galeri Sekolah</h2>
      <div class="gallery">
        <img src="https://cdn.pixabay.com/photo/2013/09/11/00/28/language-lab-181083_960_720.jpg" alt="Lab Komputer" />
        <img src="https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg" alt="Perpustakaan" />
        <img src="https://cdn.pixabay.com/photo/2016/03/16/14/09/eat-1260819_960_720.jpg" alt="Kantin" />
      </div>
    </section>

    <section id="kontak">
      <h2>Kontak Kami</h2>
      <form>
        <input type="text" placeholder="Nama" required />
        <input type="email" placeholder="Email" required />
        <textarea placeholder="Pesan Anda"></textarea>
        <button type="submit">Kirim</button>
        <a href="../php/logout.php">Logout</a>
      </form>
    </section>
  </main>
  <!-- TailwindCSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>

  <!-- Berita Terbaru -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold mb-4">Berita Terbaru</h2>
    <ul class="space-y-2">
      <li><a href="https://cdn-dapodik.kemdikbud.go.id/se/ACC_Dirjen_Surat_Dirjen_Pelaksanaan_SPMB_2025_2026_[UPT_Dinas].pdf" class="text-blue-600 hover:underline">📌 Sistem Penerimaan Murid Baru Tahun Ajaran 2025/2026</a></li>
      <li><a href="berita2.html" class="text-blue-600 hover:underline">🏆 Prestasi Siswa dalam Olimpiade Sains Nasional</a></li>
      <li><a href="berita2.html" class="text-blue-600 hover:underline">🏆 Prestasi Siswa dalam Olimpiade Sains Nasional</a></li>
      <li><a href="berita3.html" class="text-blue-600 hover:underline">🤝 Kegiatan Bakti Sosial di Desa Binaan</a></li>
    </ul>
  </section>

  <!-- Kalender Akademik -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold mb-2">Kalender Akademik</h2>
    <p class="mb-2">Lihat jadwal kegiatan sekolah dan hari libur nasional.</p>
    <a href="https://www.kalenderpendidikan.com/sulawesibarat-2025/" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Lihat Kalender</a>
  </section>

  <!-- Layanan Cepat -->
  <section>
    <h2 class="text-2xl font-bold mb-4">Layanan Cepat</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
      <a href="eraport.html" class="bg-white shadow p-4 rounded hover:bg-blue-50 text-center">📘 e-Raport</a>
      <a href="ppdb.html" class="bg-white shadow p-4 rounded hover:bg-blue-50 text-center">📝 SPMB Online</a>
      <a href="kontak.html" class="bg-white shadow p-4 rounded hover:bg-blue-50 text-center">📞 Hubungi Kami</a>
    </div>
  </section>
  
  <!-- LOKASI SEKOLAH -->
<section id="lokasi" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Lokasi Sekolah</h2>
    <h2 class="text-center mb-4">SD NEGERI 008 BUSSU</h2>
    <div class="ratio ratio-16x9">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.9169675974504!2d119.26666700000001!3d-3.1166670000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9371006e466599%3A0xdb652cabbc4dd46a!2sSDN%20008%20Bussu!5e0!3m2!1sid!2sid!4v1750685902700!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" 
        width="600" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>
</main>

  <footer>
    <p>&copy; 2025 SD  Negeri 008 Bussu. All rights reserved.</p>
    <p>&COPY; Modify By Victor B. Botta, S.Pd</p>
  </footer>
  
  <script src="script.js"></script>
</body>
</html>
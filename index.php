<?php
require_once 'config/koneksi.php';

$profil     = $conn->query("SELECT * FROM profil    LIMIT 1")->fetch_assoc();
$statistik  = $conn->query("SELECT * FROM statistik ORDER BY id ASC")->fetch_all(MYSQLI_ASSOC);
$skills     = $conn->query("SELECT * FROM skills    ORDER BY id ASC")->fetch_all(MYSQLI_ASSOC);
$pengalaman = $conn->query("SELECT * FROM pengalaman ORDER BY id ASC")->fetch_all(MYSQLI_ASSOC);
$sertifikat = $conn->query("SELECT * FROM sertifikat ORDER BY id ASC")->fetch_all(MYSQLI_ASSOC);

$cert_style = [
    1 => ['ikon' => 'bi-router',           'warna' => 'linear-gradient(135deg, #29323c, #485563)'],
    2 => ['ikon' => 'bi-briefcase-fill',   'warna' => 'linear-gradient(135deg, #1e3c72, #2a5298)'],
    3 => ['ikon' => 'bi-mortarboard-fill', 'warna' => 'linear-gradient(135deg, #0f2027, #203a43)'],
    4 => ['ikon' => 'bi-people-fill',      'warna' => 'linear-gradient(135deg, #11998e, #38ef7d)'],
    5 => ['ikon' => 'bi-building-fill',    'warna' => 'linear-gradient(135deg, #141e30, #243b55)'],
];
foreach ($sertifikat as $i => &$cert) {
    $no = $i + 1;
    $cert['ikon']  = $cert_style[$no]['ikon']  ?? 'bi-patch-check-fill';
    $cert['warna'] = $cert_style[$no]['warna'] ?? 'linear-gradient(135deg, #333, #555)';
}
unset($cert);

$conn->close();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portofolio - <?= htmlspecialchars($profil['nama']) ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <link rel="stylesheet" href="Style/style.css" />
</head>
<body>

<div id="app">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#home">{{ profil.nama }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menuNavbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
          <li class="nav-item"><a class="nav-link" href="#experience">Pengalaman</a></li>
          <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HOME -->
  <section id="home" class="hero-section">
    <div class="container">
      <div class="row align-items-center min-vh-100 py-5">

        <div class="col-lg-7 order-2 order-lg-1 mt-4 mt-lg-0">
          <p class="hero-sapaan">Halo, perkenalkan saya</p>
          <h1 class="hero-nama">{{ profil.nama }}</h1>
          <h2 class="hero-jabatan">{{ profil.jabatan }}</h2>
          <p class="hero-deskripsi mt-3">{{ profil.deskripsi }}</p>

          <div class="d-flex gap-3 mt-4 flex-wrap">
            <a href="#certificates" class="btn btn-utama">Lihat Sertifikat <i class="bi bi-arrow-right ms-1"></i></a>
            <a href="#about" class="btn btn-outline">Tentang Saya</a>
          </div>

          <div class="d-flex gap-4 mt-5 flex-wrap">
            <div class="stat-kotak" v-for="stat in statistik" :key="stat.id">
              <div class="stat-angka">{{ stat.angka }}</div>
              <div class="stat-label">{{ stat.label }}</div>
            </div>
          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 text-center">
          <div class="foto-wrapper">
            <img src="image/alip.jpeg" :alt="'Foto Profil ' + profil.nama" class="foto-profil" />
            <div class="foto-badge">
              <i class="bi bi-mortarboard-fill text-warning me-1"></i>
              {{ profil.universitas }}
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ABOUT ME -->
  <section id="about" class="about-section py-5">
    <div class="container">

      <div class="text-center mb-5">
        <span class="label-section">Kenali Lebih Dekat</span>
        <h2 class="judul-section">Tentang <span class="teks-aksen">Saya</span></h2>
      </div>

      <div class="row g-5 align-items-start">

        <div class="col-lg-5">
          <div class="about-foto-box">
            <img src="image/alip.jpeg" :alt="'Foto About ' + profil.nama"
                 class="about-foto img-fluid rounded-4 shadow" />
            <div class="about-kartu-edu">
              <i class="bi bi-mortarboard-fill text-warning"></i>
              <span>S1 {{ profil.jurusan }}</span>
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <h3 class="about-nama">{{ profil.nama }}</h3>
          <p class="hero-jabatan">{{ profil.jabatan }}</p>
          <p class="about-bio">{{ profil.bio }}</p>

          <div class="row g-3 mt-3 mb-4">
            <div class="col-12 col-sm-6">
              <div class="card info-item">
                <i class="bi bi-geo-alt-fill info-ikon"></i>
                <div class="ms-2">
                  <small class="d-block" style="color:var(--redup)">Lokasi</small>
                  <span class="fw-500" style="color:var(--redup)">{{ profil.lokasi }}</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="card info-item">
                <i class="bi bi-envelope-fill info-ikon"></i>
                <div class="ms-2">
                  <small class="d-block" style="color:var(--redup)">Email</small>
                  <span class="fw-500" style="color:var(--redup)">{{ profil.email }}</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="card info-item">
                <i class="bi bi-mortarboard-fill info-ikon"></i>
                <div class="ms-2">
                  <small class="d-block" style="color:var(--redup)">Status</small>
                  <span class="fw-500" style="color:var(--redup)">{{ profil.status }}</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="card info-item">
                <i class="bi bi-laptop info-ikon"></i>
                <div class="ms-2">
                  <small class="d-block" style="color:var(--redup)">Jurusan</small>
                  <span class="fw-500" style="color:var(--redup)">{{ profil.jurusan }}</span>
                </div>
              </div>
            </div>
          </div>

          <h5 class="judul-skills mb-3">
            <i class="bi bi-gear text-warning me-4"></i>Skills &amp; Keahlian
          </h5>
          <div class="mb-3" v-for="skill in skills" :key="skill.id">
            <div class="d-flex justify-content-between mb-1">
              <span class="skill-nama">{{ skill.nama }}</span>
              <span class="skill-persen">{{ skill.persen }}%</span>
            </div>
            <div class="progress skill-progress">
              <div class="progress-bar" role="progressbar"
                   :style="'width:' + skill.persen + '%'"
                   :aria-valuenow="skill.persen"
                   aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- PENGALAMAN -->
  <section id="experience" class="about-section py-5">
    <div class="container">

      <div class="text-center mb-5">
        <span class="label-section">Riwayat Saya</span>
        <h2 class="judul-section">Pengalaman <span class="teks-aksen">Saya</span></h2>
      </div>

      <div class="row g-4">
        <div class="col-md-6" v-for="exp in pengalaman" :key="exp.id">
          <div class="card exp-kartu h-100 border-0">
            <div class="card-body">
              <span class="exp-periode">{{ exp.periode }}</span>
              <h5 class="card-title exp-jabatan mt-2">{{ exp.jabatan }}</h5>
              <p class="exp-perusahaan"><i class="bi bi-building me-1"></i>{{ exp.organisasi }}</p>
              <p class="card-text exp-deskripsi">{{ exp.deskripsi }}</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- CERTIFICATES -->
  <section id="certificates" class="cert-section py-5">
    <div class="container">

      <div class="text-center mb-5">
        <span class="label-section">Pencapaian Saya</span>
        <h2 class="judul-section">Sertifikat <span class="teks-aksen">Saya</span></h2>
        <p class="text-muted mt-2">Kumpulan sertifikat dari berbagai platform pembelajaran dan sertifikasi kompetensi.</p>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-4" v-for="cert in sertifikat" :key="cert.id">
          <div class="card cert-kartu h-100 border-0">
            <div class="card-header" :style="'background:' + cert.warna">
              <i class="cert-ikon bi" :class="cert.ikon"></i>
              <span class="cert-badge-kat">{{ cert.kategori }}</span>
            </div>
            <div class="card-body">
              <h5 class="card-title cert-judul">{{ cert.judul }}</h5>
              <p class="cert-penerbit"><i class="bi bi-award me-1"></i>{{ cert.penerbit }}</p>
              <p class="cert-tanggal"><i class="bi bi-calendar3 me-1"></i>{{ cert.tanggal }}</p>
              <p class="card-text cert-deskripsi">{{ cert.deskripsi }}</p>
            </div>
            <div class="card-footer">
              <small class="cert-id">ID: {{ cert.cert_id }}</small>
              <a :href="cert.link_cert" target="_blank" class="btn tombol-cert">
                Lihat <i class="bi bi-box-arrow-up-right ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer-section py-5">
    <div class="container text-center">
      <p class="footer-nama">{{ profil.nama }}</p>
      <div class="d-flex justify-content-center gap-3 my-3">
        <a :href="profil.github"    class="sosmed-link" target="_blank"><i class="bi bi-github"></i></a>
        <a :href="profil.linkedin"  class="sosmed-link" target="_blank"><i class="bi bi-linkedin"></i></a>
        <a :href="profil.instagram" class="sosmed-link" target="_blank"><i class="bi bi-instagram"></i></a>
        <a :href="'mailto:' + profil.email" class="sosmed-link"><i class="bi bi-envelope"></i></a>
      </div>
      <p class="footer-copy">
        &copy; <?= date('Y') ?> {{ profil.nama }} &middot;
        Mahasiswa {{ profil.jurusan }} {{ profil.universitas }} &middot;
        Dibuat dengan <i class="bi bi-heart-fill text-danger"></i>
        PHP, MySQL, Vue.js &amp; Bootstrap 5
      </p>
    </div>
  </footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>

<script>
const { createApp } = Vue;

createApp({
  data() {
    return {
      profil:     <?= json_encode($profil,     JSON_UNESCAPED_UNICODE) ?>,
      statistik:  <?= json_encode($statistik,  JSON_UNESCAPED_UNICODE) ?>,
      skills:     <?= json_encode($skills,     JSON_UNESCAPED_UNICODE) ?>,
      pengalaman: <?= json_encode($pengalaman, JSON_UNESCAPED_UNICODE) ?>,
      sertifikat: <?= json_encode($sertifikat, JSON_UNESCAPED_UNICODE) ?>
    }
  }
}).mount('#app');
</script>

</body>
</html>

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2026 at 04:38 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int NOT NULL,
  `periode` varchar(20) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `organisasi` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `periode`, `jabatan`, `organisasi`, `deskripsi`) VALUES
(1, '2024-2025', 'Koordinator Kegiatan', 'INSAN & INSEVENT', 'Memimpin dan mengoordinasikan tim dalam kegiatan INSAN dan INSEVENT, bertanggung jawab terhadap perencanaan serta pengelolaan logistik acara.'),
(2, '2024-2025', 'Panitia Kegiatan Akademik & Pengabdian', 'Program Studi Sistem Informasi', 'Terlibat sebagai panitia dalam kegiatan Akselerasi Pengenalan Lingkungan Kampus (APLIKASI) dan pengabdian masyarakat berbasis literasi teknologi.'),
(3, '2024-2025', 'Staff Departemen RELACS', 'INFORSA', 'Berkontribusi dalam program kerja organisasi dan kegiatan sosial kemahasiswaan.'),
(4, '2024', 'Proyek Akademik', 'Program Studi Sistem Informasi', 'Mengerjakan proyek perancangan dan analisis sistem informasi berbasis studi kasus.');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` varchar(80) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `universitas` varchar(150) NOT NULL,
  `bio` text NOT NULL,
  `github` varchar(200) DEFAULT '#',
  `linkedin` varchar(200) DEFAULT '#',
  `instagram` varchar(200) DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nama`, `jabatan`, `deskripsi`, `lokasi`, `email`, `status`, `jurusan`, `universitas`, `bio`, `github`, `linkedin`, `instagram`) VALUES
(1, 'Irvan Alif', 'Mahasiswa Sistem Informasi', 'Mahasiswa aktif di Universitas Mulawarman Program Studi Sistem Informasi. Tertarik di bidang teknologi informasi dan pengembangan sistem.', 'Samarinda, Kalimantan Timur', 'irvanalifsani@gmail.com', 'Mahasiswa Aktif', 'Sistem Informasi', 'Universitas Mulawarman', 'Saya Irvan Alif, mahasiswa semester 4 Jurusan Sistem Informasi di Universitas Mulawarman. Saya memiliki latar belakang sertifikasi LSP Jaringan Komputer (MikroTik) dari SMK dan aktif berorganisasi di Information System Association (INFORSA) sebagai Staff Departemen RELACS 2025. Saya pernah menjadi Koordinator di INSAN (Information System Safari Ramadan) dan INSEVENT (Information System Event), serta aktif sebagai panitia dalam berbagai kegiatan kampus.', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id` int NOT NULL,
  `kategori` varchar(80) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `tanggal` varchar(80) NOT NULL,
  `deskripsi` text NOT NULL,
  `cert_id` varchar(100) NOT NULL,
  `link_cert` varchar(300) NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id`, `kategori`, `judul`, `penerbit`, `tanggal`, `deskripsi`, `cert_id`, `link_cert`) VALUES
(1, 'Jaringan & Infrastruktur', 'Sertifikasi LSP Jaringan Komputer - MikroTik', 'Lembaga Sertifikasi Profesi (SMK)', '2023', 'Sertifikasi kompetensi bidang jaringan komputer dengan fokus pada perangkat MikroTik, mencakup konfigurasi router, wireless, dan manajemen jaringan.', 'LSP-TKJ-MIKROTIK', '#'),
(2, 'Kepanitiaan', 'Koordinator Perlengkapan - INSEVENT 2025', 'Information System Association (INFORSA)', '17 Maret - 2 Desember 2025', 'Sebagai Koordinator Perlengkapan dalam kegiatan INSEVENT 2025 dan bertanggung jawab terhadap pengelolaan logistik serta perlengkapan acara.', '1328/INSEVENT/INFORSA/I/2026', '#'),
(3, 'Kepanitiaan', 'Panitia Akselerasi Pengenalan Lingkungan Kampus 2025', 'Program Studi Sistem Informasi', '15-16 November 2025', 'Panitia kegiatan APLIKASI 2025 dengan tema \"Aktualisasi Kemampuan Kognitif dan Resiliensi Karakter Pada Mahasiswa Baru\".', '1062/APLIKASI/INFORSA/XII/2025', '#'),
(4, 'Pengabdian Masyarakat', 'Panitia Inforsa Mengabdi 2025', 'Fakultas Teknik Universitas Mulawarman', '4 September - 5 Oktober 2025', 'Berperan sebagai panitia dalam kegiatan pengabdian masyarakat INFORSA Mengabdi 2025.', '11503/UN17.9/DL.07.00/2025', '#'),
(5, 'Organisasi', 'Pengurus INFORSA 2025 - Departemen RELACS', 'Information System Association (INFORSA)', '19 Februari - 31 Desember 2025', 'Anggota Departemen Relations and Community Services (RELACS) dalam kepengurusan INFORSA 2025.', '1534/KEPENGURUSAN2025/INFORSA', '#');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `persen` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `nama`, `persen`) VALUES
(1, 'Jaringan Komputer (MikroTik)', 90),
(2, 'Manajemen Event', 85),
(3, 'HTML & CSS', 80),
(4, 'Kerja Tim & Leadership', 88),
(5, 'Microsoft Office', 85),
(6, 'Problem Solving', 80);

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id` int NOT NULL,
  `angka` varchar(10) NOT NULL,
  `label` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id`, `angka`, `label`) VALUES
(1, '4', 'Semester'),
(2, '2', 'Koordinator'),
(3, '5', 'Sertifikat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

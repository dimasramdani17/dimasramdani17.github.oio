-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2025 at 06:26 AM
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
-- Database: `cv_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int NOT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `gelar_profesional` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tentang_saya` text COLLATE utf8mb4_general_ci,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama_lengkap`, `gelar_profesional`, `tentang_saya`, `email`, `telepon`, `linkedin`, `github`) VALUES
(1, 'Dimas Ramdani', 'UI/UX Designer', 'Saya adalah seorang pemula di bidang UI/UX Design yang memiliki minat besar dalam menciptakan tampilan dan pengalaman pengguna yang sederhana namun menarik. Saya sedang belajar tentang riset pengguna, wireframing, dan prototyping menggunakan tools seperti Figma dan Adobe XD. Meskipun belum memiliki pengalaman profesional, saya terus mengembangkan keterampilan melalui proyek pribadi dan eksplorasi desain. Saya bersemangat untuk terus belajar dan berkontribusi dalam menciptakan produk digital yang bermanfaat dan mudah digunakan.', 'dimasramdaniganteng22@gmail.com', '+6281289761630', 'https://www.linkedin.com/in/dimas-ramdani-426ab4293/', 'https://github.com/dimasramdani17');

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `id` int NOT NULL,
  `nama_keahlian` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tipe` enum('Teknis','Non-Teknis') COLLATE utf8mb4_general_ci NOT NULL,
  `rating` int NOT NULL COMMENT 'Rating dari 1-10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`id`, `nama_keahlian`, `tipe`, `rating`) VALUES
(1, 'PHP', 'Teknis', 5),
(2, 'CodeIgniter 4', 'Teknis', 5),
(3, 'JavaScript', 'Teknis', 5),
(4, 'React.js', 'Teknis', 4),
(5, 'MySQL', 'Teknis', 5),
(7, 'HTML5 & CSS3', 'Teknis', 6),
(8, 'Tailwind CSS', 'Teknis', 4),
(9, 'Komunikasi', 'Non-Teknis', 5),
(10, 'Problem Solving', 'Non-Teknis', 9),
(11, 'Manajemen Waktu', 'Non-Teknis', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int NOT NULL,
  `institusi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `jenjang_jurusan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun_mulai` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun_selesai` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `institusi`, `jenjang_jurusan`, `tahun_mulai`, `tahun_selesai`, `deskripsi`) VALUES
(1, 'Universitas Muhammadiyah Sukabumi', 'S1 - Teknik Informatika', '2023', 'Sekarang', 'Mahasiswa aktif semester 5. Fokus pada mata kuliah Pemrograman Website dengan Framework. IPK saat ini: 3.51'),
(2, 'SMA Negeri 1 Cikidang', 'SMA - IPS', '2020', '2023', 'Anggota Osis.');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int NOT NULL,
  `posisi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `perusahaan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tipe` enum('Pekerjaan','Magang','Organisasi','Proyek') COLLATE utf8mb4_general_ci NOT NULL,
  `tahun_mulai` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun_selesai` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `posisi`, `perusahaan`, `tipe`, `tahun_mulai`, `tahun_selesai`, `deskripsi`) VALUES
(1, 'Anggota Divisi Hubungan Masyarakat', 'HIMA Teknik Informatika ', 'Organisasi', '2025', 'Sekarang', 'Bertanggung jawab dalam menjalin relasi dengan pihak eksternal, dan menjadi panitia dalam acara webinar/seminar.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

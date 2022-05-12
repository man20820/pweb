-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2022 pada 15.02
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pweb_uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skills`
--

INSERT INTO `skills` (`id`, `skill`) VALUES
(7, 'Networking: Routing'),
(8, 'Networking: Traffic Control'),
(9, 'Networking: Security'),
(10, 'Networking: Wireless'),
(11, 'Networking: User Management'),
(12, 'Programming: Javascript, NodeJS'),
(13, 'Programming: PHP'),
(14, 'Programming: Bash'),
(15, 'Programming: C++'),
(16, 'Development: Docker'),
(17, 'Development: Jenkins'),
(18, 'Development: Git'),
(19, 'Development: Amazon Web Services'),
(20, 'Development: Ubuntu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `works`
--

INSERT INTO `works` (`id`, `position`, `company`, `year`, `description`) VALUES
(1, 'Internship', 'PT Citraweb Solusi Teknologi', '2019 - 2020', 'Membantu riset dan pengembangan. \r\nMembantu merakit perangkat keras router, server, dan pendukungnya serta memastikan bekerja dengan baik.\r\n'),
(2, 'Technical Support Engineer', 'PT Citraweb Solusi Teknologi', '2020 - 2021', 'Menjawab pertanyaan & konsultasi teknis pelanggan yang datang langsung maupun melalui telepon, surel, website, dan sosial media. \r\nIkut dalam pengelolaan jaringan kantor, pelaksanaan acara rutin / insidental perusahaan.\r\n'),
(3, 'Training & Support Engineer', 'PT Citraweb Solusi Teknologi', '2021 - Present', 'Menjelaskan isi materi pelatihan jaringan kepada peserta training di kelas. \r\nMembuat tutorial dan obrolan santai tentang jaringan dalam bentuk teks / artikel dan vidio / siaran langsung.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

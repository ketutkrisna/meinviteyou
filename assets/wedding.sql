-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2020 pada 09.17
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diundang`
--

CREATE TABLE `diundang` (
  `id_diundang` int(11) NOT NULL,
  `matchid_pengundang` varchar(100) NOT NULL,
  `url_diundang` varchar(30) NOT NULL,
  `nama_diundang` varchar(30) NOT NULL,
  `nomer_diundang` varchar(15) NOT NULL,
  `alamat_diundang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diundang`
--

INSERT INTO `diundang` (`id_diundang`, `matchid_pengundang`, `url_diundang`, `nama_diundang`, `nomer_diundang`, `alamat_diundang`) VALUES
(1, '1', 'ms_sari', 'sari mustika r', '082234873645', 'bandar lampung'),
(7, '1', 'mr_made', 'made krisnanda putra', '082234873645', 'labuhan dalam'),
(11, '1', 'mr_torao', 'trafalgar law', '082234873645', 'one piece');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeris`
--

CREATE TABLE `galeris` (
  `id_galeri` int(11) NOT NULL,
  `idpengundang_galeri` int(11) NOT NULL,
  `url_galeri` varchar(100) NOT NULL,
  `foto_galeri` varchar(100) NOT NULL,
  `caption_galeri` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeris`
--

INSERT INTO `galeris` (`id_galeri`, `idpengundang_galeri`, `url_galeri`, `foto_galeri`, `caption_galeri`) VALUES
(13, 1, 'krisnadanhilmah', '347c9717fe785ebd05829fab3f27536d.jpg', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengundang`
--

CREATE TABLE `pengundang` (
  `id_pengundang` int(11) NOT NULL,
  `url_pengundang` varchar(50) NOT NULL,
  `namapanggilan_priawanita` varchar(50) NOT NULL,
  `namalengkap_pria` varchar(30) NOT NULL,
  `orangtua_pria` varchar(60) NOT NULL,
  `namalengkap_wanita` varchar(30) NOT NULL,
  `orangtua_wanita` varchar(60) NOT NULL,
  `ucapan_awal` varchar(500) NOT NULL,
  `ucapan_ahir` varchar(500) NOT NULL,
  `tanggal_akad` date NOT NULL,
  `jam_akad` varchar(50) NOT NULL,
  `alamat_akad` varchar(100) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `jam_acara` varchar(50) NOT NULL,
  `alamat_acara` varchar(100) NOT NULL,
  `map_acara` varchar(500) NOT NULL,
  `foto_pria` varchar(100) NOT NULL,
  `foto_wanita` varchar(100) NOT NULL,
  `jenis_acara` enum('pernikahan','ulangtahun') NOT NULL,
  `tema_template` enum('standar','classic') NOT NULL,
  `paket_acara` enum('paketeasy','paketmedium','pakethard','paketspesial') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengundang`
--

INSERT INTO `pengundang` (`id_pengundang`, `url_pengundang`, `namapanggilan_priawanita`, `namalengkap_pria`, `orangtua_pria`, `namalengkap_wanita`, `orangtua_wanita`, `ucapan_awal`, `ucapan_ahir`, `tanggal_akad`, `jam_akad`, `alamat_akad`, `tanggal_acara`, `jam_acara`, `alamat_acara`, `map_acara`, `foto_pria`, `foto_wanita`, `jenis_acara`, `tema_template`, `paket_acara`) VALUES
(1, 'krisnadanhilmah', 'krisna & hilmah', 'ketut krisna sanjaya', 'nyoman rane & ketut neh', 'hilmah anggraini', 'hilman & putri', 'Atas nama Allah SWT yang Maha Penyayang dan Maha Penyayang, dengan senang hati kami berbagi kegembiraan di pesta pernikahan kami.', 'Sungguh suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/I berkenan hadir untuk memberikan Do\'a restunya kami sekeluarga mengucapkan terima kasih', '2020-11-30', '10:00 - 12:00', 'mulyasari', '2020-11-30', '12:00 - SELESAI', 'mulyasari', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5624.780924465671!2d104.66264965615783!3d-4.536151657356718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e38c02ce87395bd%3A0x687c6a8befeea08e!2sPura%20Buana%20Agung%20Way%20Kanan!5e0!3m2!1sen!2ssg!4v1606115826423!5m2!1sen!2ssg\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'unnamed11.jpg', 'spider-man-spider-bite.jpg', 'pernikahan', 'classic', 'pakethard');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ucapan`
--

CREATE TABLE `ucapan` (
  `id_ucapan` int(11) NOT NULL,
  `urlpengundang_ucapan` varchar(50) NOT NULL,
  `urldiundang_ucapan` varchar(50) NOT NULL,
  `isi_ucapan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ucapan`
--

INSERT INTO `ucapan` (`id_ucapan`, `urlpengundang_ucapan`, `urldiundang_ucapan`, `isi_ucapan`) VALUES
(6, 'krisnadanhilmah', 'ms_sari', 'Selamat ya :)'),
(7, 'krisnadanhilmah', 'mr_torao', 'one piece'),
(9, 'krisnadanhilmah', 'ms_sari', 'semoga bahagia ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username_user` varchar(20) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `level_user` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `username_user`, `password_user`, `level_user`) VALUES
(1, 'admin', 'admin', '123456', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diundang`
--
ALTER TABLE `diundang`
  ADD PRIMARY KEY (`id_diundang`);

--
-- Indeks untuk tabel `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `pengundang`
--
ALTER TABLE `pengundang`
  ADD PRIMARY KEY (`id_pengundang`);

--
-- Indeks untuk tabel `ucapan`
--
ALTER TABLE `ucapan`
  ADD PRIMARY KEY (`id_ucapan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `diundang`
--
ALTER TABLE `diundang`
  MODIFY `id_diundang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pengundang`
--
ALTER TABLE `pengundang`
  MODIFY `id_pengundang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ucapan`
--
ALTER TABLE `ucapan`
  MODIFY `id_ucapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

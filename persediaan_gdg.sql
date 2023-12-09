-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2023 pada 14.16
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persediaan_gdg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_input`
--

CREATE TABLE `tb_input` (
  `id` int(11) NOT NULL,
  `kd_unit` varchar(5) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jumlah_brg` int(11) NOT NULL,
  `satuan_brg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_input`
--

INSERT INTO `tb_input` (`id`, `kd_unit`, `nama_brg`, `tgl_masuk`, `jumlah_brg`, `satuan_brg`) VALUES
(1, '2Y8R6', 'Forklift', '2023-05-25', 50, 'Unit'),
(2, '5C7P9', 'Crane', '2023-06-01', 15, 'Unit'),
(3, '1D6V0', 'Drum Handler', '2023-05-10', 30, 'Unit'),
(4, '3R1J7', 'Trolley', '2023-05-01', 70, 'Unit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_output`
--

CREATE TABLE `tb_output` (
  `kd_unit` varchar(5) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `jumlah_brg` int(11) NOT NULL,
  `satuan_brg` varchar(255) NOT NULL,
  `tujuan_brg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_output`
--

INSERT INTO `tb_output` (`kd_unit`, `nama_brg`, `tgl_keluar`, `jumlah_brg`, `satuan_brg`, `tujuan_brg`) VALUES
('1D6V0', 'Drum Handler', '2023-05-22', 28, 'Unit', 'PT. Bersahaja'),
('2Y8R6', 'Forklift', '2023-05-24', 20, 'Unit', 'PT. APA AJA'),
('5C7P9', 'Crane', '2023-06-10', 11, 'Unit', 'PT. Pencari Berkah'),
('3R1J7', 'Trolley', '2023-06-12', 70, 'Unit', 'PT. Mencari Cinta Sejati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pw` varchar(25) NOT NULL,
  `tingkat` enum('Superadmin','Operator') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `nama`, `username`, `pw`, `tingkat`) VALUES
(1, 'apaaja', 'coba1', '12345', 'Operator'),
(10, 'contoh', 'coba2', '1111', 'Superadmin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_input`
--
ALTER TABLE `tb_input`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_output`
--
ALTER TABLE `tb_output`
  ADD PRIMARY KEY (`tgl_keluar`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_input`
--
ALTER TABLE `tb_input`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


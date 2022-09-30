-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2022 pada 09.32
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_update`
--

CREATE TABLE `berita_update` (
  `nomer` varchar(20) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `berita` text DEFAULT NULL,
  `tempat_kejadian` varchar(30) DEFAULT NULL,
  `tanggal_kejadian` varchar(30) DEFAULT NULL,
  `tanggal_update` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita_update`
--

INSERT INTO `berita_update` (`nomer`, `gambar`, `berita`, `tempat_kejadian`, `tanggal_kejadian`, `tanggal_update`) VALUES
('1', 'ripal', 'ripal ban bocor', 'cimanggis', '24 mei', '30 mei');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dashboard`
--

CREATE TABLE `dashboard` (
  `nomer` varchar(20) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `berita` text DEFAULT NULL,
  `tempat_kejadian` text DEFAULT NULL,
  `tanggal_kejadian` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dashboard`
--

INSERT INTO `dashboard` (`nomer`, `gambar`, `berita`, `tempat_kejadian`, `tanggal_kejadian`) VALUES
('1', '', 'nopal jatuh dari motor', 'bogor', '24 mei 2022');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita_update`
--
ALTER TABLE `berita_update`
  ADD PRIMARY KEY (`nomer`);

--
-- Indeks untuk tabel `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`nomer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

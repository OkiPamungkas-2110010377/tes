-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 09 Jun 2023 pada 01.33
-- Versi server: 8.0.31
-- Versi PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_absen`
--

DROP TABLE IF EXISTS `tbl_absen`;
CREATE TABLE IF NOT EXISTS `tbl_absen` (
  `id_absen` int NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `npm` varchar(10) NOT NULL,
  `id_materi` int NOT NULL,
  `status_absen` int NOT NULL,
  PRIMARY KEY (`id_absen`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_absen`
--

INSERT INTO `tbl_absen` (`id_absen`, `tgl`, `npm`, `id_materi`, `status_absen`) VALUES
(1, '2023-05-24', '23630001', 1, 2),
(2, '2023-06-07', '23630001', 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

DROP TABLE IF EXISTS `tbl_kelas`;
CREATE TABLE IF NOT EXISTS `tbl_kelas` (
  `id_kelas` int NOT NULL AUTO_INCREMENT,
  `nm_kelas` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `nm_kelas`) VALUES
(1, '4A'),
(2, '4B'),
(3, '4C'),
(4, '4F');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_materi`
--

DROP TABLE IF EXISTS `tbl_materi`;
CREATE TABLE IF NOT EXISTS `tbl_materi` (
  `id_materi` int NOT NULL AUTO_INCREMENT,
  `id_kelas` int NOT NULL,
  `judul` varchar(200) NOT NULL,
  `materi` text NOT NULL,
  `tgl_input` datetime NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_materi`
--

INSERT INTO `tbl_materi` (`id_materi`, `id_kelas`, `judul`, `materi`, `tgl_input`, `id_user`) VALUES
(1, 3, 'Pertemuan 12', 'Silahkan download materi pertemuan 12 dibawah ini.', '2023-05-10 05:59:17', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nm_user` varchar(200) NOT NULL,
  `npm` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_kelas` int NOT NULL,
  `level` int NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nm_user`, `npm`, `password`, `id_kelas`, `level`) VALUES
(1, 'Udin', '23630001', 'admin', 1, 2),
(2, 'Andie', '08630033', 'admin', 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

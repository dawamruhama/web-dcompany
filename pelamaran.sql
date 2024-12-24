-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2024 at 05:23 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelamaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `quisioner`
--

CREATE TABLE `quisioner` (
  `id` int NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nomor_hp` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_lengkap` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempat_lahir` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `posisi_yang_dilamar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pengalaman_kerja` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lulusan_terakhir` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_pernikahan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo` varchar(666) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cv` varchar(666) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paklaring` varchar(666) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quisioner`
--

INSERT INTO `quisioner` (`id`, `nik`, `nomor_hp`, `nama_lengkap`, `email`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `posisi_yang_dilamar`, `pengalaman_kerja`, `lulusan_terakhir`, `status_pernikahan`, `photo`, `cv`, `paklaring`) VALUES
(3, '723547239856', '081285279887', 'Muhammad Saiful Irsyad Adruh', 'dawamruhama23@gmail.com', 'karawang', '2002-07-23', 'Laki - laki', 'karawang', 'Direktur', '', 'SMA/SMK/SLTA', 'Belum Menikah', 'uploads/download (2).jpg', 'uploads/napak tilas.docx', 'uploads/gedung-bumn.jpg'),
(4, '45378908433', '42658760674', 'xhgcjgub;pcxsf', 'tcyjfyvd@gmail.com', 'fdrc', '2024-01-31', 'Perempuan', 'jdugoifdtrs', 'OfficeBoy', 'szchlkffg', 'S2', 'Sudah Menikah', 'uploads/hero-bg.jpg', 'uploads/PROPOSAL NAPAK TILAS 2023.docx', 'uploads/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `username`, `password`, `datetime`) VALUES
(1, 'Muhammad Saiful Irsyad Adruh', 'test@gmail.com', 'admin', 'admin', '2024-12-14 23:42:51'),
(3, 'test', 'testing@gmail.com', 'test', '$2y$10$0vYGqwGTY90R1MdSbos6uejpJguO3sQnp9Nj4I/H6HgwdUEbPUhHS', '2024-12-14 23:45:51'),
(4, 'testing1', 'testing1@gmail.com', 'testing1', '$2y$10$1yHblTiSOaRDYb/la.MDPeUTPgQAimLfhr7aXRmobiKX2qx9DqFPy', '2024-12-14 23:57:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quisioner`
--
ALTER TABLE `quisioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quisioner`
--
ALTER TABLE `quisioner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

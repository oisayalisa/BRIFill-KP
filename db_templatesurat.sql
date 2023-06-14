-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 12:06 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_templatesurat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `id_berkas` int(11) NOT NULL,
  `no_rek` varchar(100) NOT NULL,
  `nama_debitur` varchar(100) NOT NULL,
  `plafond` int(30) NOT NULL,
  `nama_mantri` varchar(100) NOT NULL,
  `lemari` varchar(10) NOT NULL,
  `rak` int(11) NOT NULL,
  `no_berkas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berkas`
--

INSERT INTO `tb_berkas` (`id_berkas`, `no_rek`, `nama_debitur`, `plafond`, `nama_mantri`, `lemari`, `rak`, `no_berkas`) VALUES
(1, '4927-01-11', 'Budi', 25000000, 'Lilis', 'B', 3, 4),
(2, '4927-01-02', 'COBA', 25000000, 'Yenny S', 'A', 1, 2),
(3, '4927-01-09', 'Budi doremi', 150000000, 'Misnawati', 'B', 1, 12),
(4, '4927-01-04', 'YA', 12000000, 'Yenny S', 'A', 4, 4),
(5, '4927-01-06', 'Budi', 1500000, 'Misnawati', 'A', 2, 7),
(6, '4927-01-07', 'Ani', 1000000, 'Bayu', 'A', 2, 4),
(7, '4927-01-03', 'YOW WAZAP', 10000000, 'Yenny S', 'B', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jamkrindo`
--

CREATE TABLE `tb_jamkrindo` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_ktp` int(25) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `no_sph` varchar(30) NOT NULL,
  `no_sertif` varchar(30) NOT NULL,
  `tgl_sertif` date NOT NULL,
  `plafon` int(50) NOT NULL,
  `nilai_penjaminan` int(50) NOT NULL,
  `payoff` int(50) NOT NULL,
  `pokok_kredit` int(50) NOT NULL,
  `tunggakan_bunga` int(50) NOT NULL,
  `nama_kaunit` varchar(100) NOT NULL,
  `nama_mantri` varchar(100) NOT NULL,
  `nama_cs` varchar(100) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jamkrindo`
--

INSERT INTO `tb_jamkrindo` (`id`, `nama`, `alamat`, `no_ktp`, `no_rek`, `no_sph`, `no_sertif`, `tgl_sertif`, `plafon`, `nilai_penjaminan`, `payoff`, `pokok_kredit`, `tunggakan_bunga`, `nama_kaunit`, `nama_mantri`, `nama_cs`, `tgl`) VALUES
(1, 'LISA', 'Jalan terus', 7474747, '4927-01-11', 'PKPKPK', 'KR2 2023 09', '2023-06-01', 1500000, 1000000, 1000000, 1000000, 1000000, 'Hijria Basri', 'Sahlan', 'Al', '2023-06-14'),
(2, 'Lisa', 'Jalan terus', 7474747, '4927-01-12', 'PKPKPK', 'KR2 2023 09', '2023-06-01', 1500000, 100000, 100000, 100000, 100000, 'Hijria Basri', 'Sahlan', 'Sahal', '2023-06-14'),
(3, 'Cobanah', 'Jl. Ahmad Yani', 7471008, '4927-01-08', 'PK005A', 'KR2 2023 08', '2023-05-01', 15000000, 130000000, 10000000, 9000000, 1000000, 'Hijria Basri', 'Sahlan', 'Al', '2023-05-23'),
(4, 'Coba4', 'Jl. Ahmad Yani', 7471009, '4927-01-09', 'PK009A', 'KR2 2023 10', '2023-05-01', 1000000, 1000000, 1000000, 1000000, 1000000, 'Hijria Basri', 'Budi', 'Sahlan', '2023-05-24'),
(5, 'Rahmi', 'Jl. Ahmad Yani', 7471009, '4927-01-03', 'PK009A', 'KR2 2023 10', '2023-04-19', 1000000, 1000000, 1000000, 1000000, 1000000, 'Hijria Basri', 'Yenny S', 'Sahlan', '2023-05-24'),
(6, 'd', 'Jl. Ahmad Yani', 7471009, '4927-01-03', 'PK009A', 'KR2 2023 10', '2023-05-04', 1000000, 1000000, 1000000, 1000000, 1000000, 'Hijria Basri', 'Yenny S', 'Sahlan', '2023-05-24'),
(7, 'kenapaainie', 'Jl. Ahmad Yani', 7471009, '4927-01-04', 'PK009A', 'KR2 2023 10', '2023-05-10', 1000000, 1000000, 1000000, 1000000, 1000000, 'Hijria Basri', 'Yenny S', 'Sahlan', '2023-05-24'),
(8, 'Abdul', 'Abdul', 0, 'Abdul', 'Abdul', 'Abdul', '2023-06-03', 1000000, 1000000, 1000000, 1000000, 1000000, 'Abdul', 'Abdul', 'Abdul', '2023-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'CS KUR'),
(3, 'KA Unit');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `level`, `unit`, `no_hp`, `password`) VALUES
(1, 'Budi', 'admin@gmail.com', 1, 'Unit Anduonohu', 812, '$2y$10$FPmjEW0eWzemfGtulDwKUeP4qPq3yp.0w.CQjKBFdXnQiO7FS3tiG'),
(2, 'Ani', 'cskur@gmail.com', 2, 'Unit Anduonohu', 812, '$2y$10$tAOs8PRLr6IqFcKSWANI5OKtMDlX0vcl7OQruk8vy8c4lQd0gq2ii'),
(3, 'Rima', 'kaunit@gmail.com', 3, 'Unit Anduonohu', 81278, '$2y$10$tAOs8PRLr6IqFcKSWANI5OKtMDlX0vcl7OQruk8vy8c4lQd0gq2ii'),
(4, 'Beni', 'cskur2@gmail.com', 2, 'Unit Anduonohu', 891, '$2y$10$tAOs8PRLr6IqFcKSWANI5OKtMDlX0vcl7OQruk8vy8c4lQd0gq2ii'),
(5, 'SITTI NUR HALIZA', 'yaya@gmail.com', 1, 'Anduonohu', 812234, '$2y$10$pRXrtQejMrB8HwGT98hU1es9zfEho/C7Tkeg6mF1Vgqd1u64gKCJK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `tb_jamkrindo`
--
ALTER TABLE `tb_jamkrindo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_level` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_jamkrindo`
--
ALTER TABLE `tb_jamkrindo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `fk_level` FOREIGN KEY (`level`) REFERENCES `tb_level` (`id_level`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

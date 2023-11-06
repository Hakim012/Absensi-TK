-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 11:19 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpanan_bumdesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `no_anggota` varchar(50) DEFAULT NULL,
  `no_simpanan` varchar(50) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `kelamin` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `jam` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `no_anggota`, `no_simpanan`, `nama`, `nik`, `kelamin`, `no_hp`, `alamat`, `ktp`, `status`, `jam`, `tanggal`) VALUES
(1, NULL, NULL, 'Firdaus', '4354654654', 'Laki-laki', '098776765543', 'Jl. Lembaga, Senggoro', 'RG.png', 'tarik', '16:35:55', '2022-12-04'),
(3, NULL, NULL, 'Syukron', '453464534', 'Laki-laki', '098776765543', 'Jl. Pramuka', 'SMK1.jpg', 'tarik', '17:18:10', '2022-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `no_simpan` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `nama`, `tipe`, `tgl`, `jam`, `no_simpan`, `jumlah`, `status`) VALUES
(1, 'Firdaus', 'Pokok', '2022-12-04', '04:35:53', '1', '50000', ''),
(3, 'Syukron', 'Pokok', '2022-12-04', '05:18:08', '2', '50000', 'tarik');

-- --------------------------------------------------------

--
-- Table structure for table `simpan`
--

CREATE TABLE `simpan` (
  `id_simpanan` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `no_simpanan` varchar(20) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simpan`
--

INSERT INTO `simpan` (`id_simpanan`, `status`, `no_simpanan`, `nama`, `jumlah`, `tanggal`, `jam`, `jenis`) VALUES
(1, 'tarik', '1', 'Firdaus', '50000', '2022-12-04', '16:35:55', 'Pokok'),
(3, 'tarik', '2', 'Syukron', '50000', '2022-12-04', '17:18:10', 'Pokok');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `ktp` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `level` enum('Admin','Pegawai') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `foto`, `password`, `email`, `no_hp`, `nik`, `ktp`, `alamat`, `level`, `blokir`, `id_session`) VALUES
(1, 'Admin', NULL, '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', NULL, NULL, NULL, NULL, 'Admin', 'N', ''),
(39, 'Muslimin', NULL, '21232f297a57a5a743894a0e4a801fc3', 'muslim@gmail.com', '09876644332', '12345567678', 'pngwing_com1.png', 'Jl. Meranti', 'Pegawai', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `simpan`
--
ALTER TABLE `simpan`
  ADD PRIMARY KEY (`id_simpanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `simpan`
--
ALTER TABLE `simpan`
  MODIFY `id_simpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

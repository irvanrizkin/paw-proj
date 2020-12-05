-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2020 at 10:01 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paw_proj_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendonor`
--

CREATE TABLE `pendonor` (
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `surat_sehat` varchar(255) DEFAULT NULL,
  `surat_positif` varchar(255) DEFAULT NULL,
  `surat_negatif` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `jumlah_donor` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_donor`
--

CREATE TABLE `riwayat_donor` (
  `id_donor` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_rs` int(11) NOT NULL,
  `jumlah_donor` int(11) NOT NULL,
  `tanggal_donor` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` varchar(1) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id_rs` int(11) NOT NULL,
  `nama_rs` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `ketersediaan_plasma` int(11) NOT NULL,
  `kebutuhan_plasma` int(11) NOT NULL,
  `prioritas_plasma` tinyint(4) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `id_role` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `riwayat_donor`
--
ALTER TABLE `riwayat_donor`
  ADD PRIMARY KEY (`id_donor`),
  ADD KEY `id_rs` (`id_rs`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id_rs`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD CONSTRAINT `pendonor_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION;

--
-- Constraints for table `riwayat_donor`
--
ALTER TABLE `riwayat_donor`
  ADD CONSTRAINT `riwayat_donor_ibfk_1` FOREIGN KEY (`id_rs`) REFERENCES `rumah_sakit` (`id_rs`),
  ADD CONSTRAINT `riwayat_donor_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD CONSTRAINT `rumah_sakit_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

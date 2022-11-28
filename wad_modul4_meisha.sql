-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2021 at 05:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom`
--

CREATE TABLE `showroom_meisha_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom`
--

INSERT INTO `showroom_meisha_table`
    (`id_mobil`, `nama_mobil`, `pemilik_mobil`,`merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`)
VALUES (1, 'Toyota Raize', 'meisha_1202204013', 'Raize', '12/12/2022', 'Mobil lucu lucu buat jalan bareng temen', 'Traize.jpg', 'Lunas'),
(2, 'Toyota Rocky', 'meisha_1202204013', 'Rocky', '12/12/2022', 'Untuk keluarga kecil bahagia jalan-jalan', 'Trocky.jpg', 'Lunas'),
(3, 'Toyota Veloz', 'meisha_1202204013', 'Veloz', '12/12/2022', 'Untuk keluarga besar jalan-jalan', 'Tveloz.jpg', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'meisha', 'm@gmail.com', '$2y$10$nxA/u2bQQiAg6x1PRVWs8OIY/gXBOc9xDhhKSV40Wc2sKuZMhY5hC', '1243'),
(2, 'nadra', 'n@gmail.com', '$2y$10$6CSi4rTRi1CC8kT.0/Gdl.FSoWJ03PR9wEpvXbEIwSMIHYiTm7q1O', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom`
--
ALTER TABLE `showroom_meisha_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom`
--
ALTER TABLE `showroom_meisha_table`
  MODIFY `id_mobil` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

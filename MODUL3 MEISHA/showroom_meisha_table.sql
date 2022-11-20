-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2021 pada 10.58
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

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

INSERT INTO `showroom_meisha_table`
    (`id_mobil`, `nama_mobil`, `pemilik_mobil`,`merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`)
VALUES (1, 'Toyota Raize', 'meisha_1202204013', 'Raize', '12/12/2022', 'Mobil lucu lucu buat jalan bareng temen', 'Traize.jpg', 'Lunas'),
(2, 'Toyota Rocky', 'meisha_1202204013', 'Rocky', '12/12/2022', 'Untuk keluarga kecil bahagia jalan-jalan', 'Trocky.jpg', 'Lunas'),
(3, 'Toyota Veloz', 'meisha_1202204013', 'Veloz', '12/12/2022', 'Untuk keluarga besar jalan-jalan', 'Tveloz.jpg', 'Lunas');

ALTER TABLE `showroom_meisha_table`
  ADD PRIMARY KEY (`id_mobil`);

ALTER TABLE `showroom_meisha_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
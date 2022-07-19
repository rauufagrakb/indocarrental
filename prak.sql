-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2022 pada 08.49
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
-- Database: `prak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `mobil` varchar(255) NOT NULL,
  `tarif` text NOT NULL,
  `harga` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `jenis`, `mobil`, `tarif`, `harga`) VALUES
(1, 'MPV', 'Toyota Alphard 2022', 'Rp 1.000.000,- / 4 jam', '1000000'),
(2, 'MPV', 'Toyota Avanza 2021', 'Rp 100.000,- / 4 jam', '100000'),
(3, 'MPV', 'Toyota Innova 2020', 'Rp 150.000,- / 4 jam', '150000'),
(4, 'SUV', 'Toyota Fortuner 2022', 'Rp 490.000,- / 4 jam', '490000'),
(5, 'SUV', 'Honda HR-V 2021', 'Rp 430.000,- / 4 jam', '430000'),
(6, 'SUV', 'Mitsubishi Pajero Sport Dakar 2022', 'Rp 600.000,- / 4 jam', '600000'),
(7, 'Sedan', 'Toyota Camry 2022', 'Rp 500.000,- / 4 jam', '500000'),
(8, 'Sedan', 'Toyota Vios 2021', 'Rp 450.000,- / 4 jam', '450000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `phone`, `username`, `password`) VALUES
(1, '', '', 'admin', '$2y$10$yWe0xgkqmXK1Udyi7P9mGuEfCUAqzH8cAttXgkDI5zItA/yHYJgdq'),
(2, 'Rauuf Anugerah Akbar', '081218107298', 'rauuf13', '$2y$10$xRFFJE6BLp5TtH8L2Ly5mOW4/2JZd80tX2lTfsEqJQPBPUMItkcs6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

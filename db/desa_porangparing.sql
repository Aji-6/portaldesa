-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2025 at 05:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa_porangparing`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_desa`
--

CREATE TABLE `fasilitas_desa` (
  `id` int(11) NOT NULL,
  `fasilitas` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas_desa`
--

INSERT INTO `fasilitas_desa` (`id`, `fasilitas`, `jumlah`) VALUES
(2, 'masjid', 5),
(4, 'lapangan', 1),
(5, 'musola', 2),
(8, 'kuburan', 5),
(9, 'sekolah', 6);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pkk_data`
--

CREATE TABLE `pkk_data` (
  `id` int(11) NOT NULL,
  `dusun` varchar(50) DEFAULT NULL,
  `kepala_keluarga` int(11) DEFAULT NULL,
  `laki_laki` int(11) DEFAULT NULL,
  `perempuan` int(11) DEFAULT NULL,
  `anggota_pkk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pkk_data`
--

INSERT INTO `pkk_data` (`id`, `dusun`, `kepala_keluarga`, `laki_laki`, `perempuan`, `anggota_pkk`) VALUES
(1, 'Porangparing', 262, 264, 279, 10),
(2, 'Sambirejo', 71, 132, 137, 3),
(3, 'Tempel', 55, 115, 112, 1),
(4, 'Dukoh', 290, 340, 342, 5),
(5, 'Randukuning', 140, 239, 234, 3),
(6, 'Ngrembe', 52, 107, 101, 1),
(7, 'Ngrangkang', 47, 106, 106, 1),
(8, 'Tumpang', 133, 157, 152, 2),
(15, 'ngasinan', 11, 11, 17, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '482c811da5d5b4bc6d497ffa98491e38'),
(2, 'teguh', '6e287674c58bfe5344781bcb50dda37c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas_desa`
--
ALTER TABLE `fasilitas_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pkk_data`
--
ALTER TABLE `pkk_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas_desa`
--
ALTER TABLE `fasilitas_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pkk_data`
--
ALTER TABLE `pkk_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

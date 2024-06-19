-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 04:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donasi_masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Rahmat', 'nurrahmatrahmat344@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `detail_donasi`
--

CREATE TABLE `detail_donasi` (
  `donasi_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `bukti_donasi` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` enum('ditolak','menunggu','diterima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_donasi`
--

INSERT INTO `detail_donasi` (`donasi_id`, `id`, `jumlah`, `bukti_donasi`, `date`, `status`) VALUES
(13, 13, '10', 'IMG-20230403-WA0025.jpg', '2024-06-12', 'diterima'),
(13, 14, '999', 'IMG-20230403-WA0025.jpg', '2024-06-12', 'ditolak'),
(15, 15, '10', 'IMG-20230403-WA0025.jpg', '2024-06-12', 'diterima'),
(15, 16, '100', 'IMG-20230403-WA0025.jpg', '2024-06-13', 'menunggu'),
(15, 17, '20000', 'IMG-20230403-WA0025.jpg', '2024-06-13', 'menunggu'),
(15, 18, '15', 'IMG-20230403-WA0025.jpg', '2024-06-13', 'menunggu'),
(15, 19, '90000', 'IMG-20230403-WA0025.jpg', '2024-06-13', 'menunggu'),
(14, 21, '300000', 'IMG-20230403-WA0025.jpg', '2024-06-13', 'menunggu'),
(13, 22, '1222', 'IMG-20230403-WA0025.jpg', '2024-06-19', 'menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id`, `nama`, `user_id`) VALUES
(13, 'Donasi Banjir', 1),
(14, 'Donasi Gunung Meletus', 0),
(15, 'Donasi IKN', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_donasi`
--
ALTER TABLE `detail_donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_donasi`
--
ALTER TABLE `detail_donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2025 at 07:27 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_parkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `No_kendaraan` varchar(15) NOT NULL,
  `Nama_kendaraan` text,
  `Jenis_kendaraan` varchar(27) DEFAULT NULL,
  `No_parkir` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`No_kendaraan`, `Nama_kendaraan`, `Jenis_kendaraan`, `No_parkir`) VALUES
('01', 'Ambarghini', 'mobil', 'P01'),
('02', 'Ambamio', 'motor', 'P02'),
('03', 'Vario', 'motor', 'P03'),
('04', 'beat', 'motor', 'P04'),
('05', 'Bagtata', 'mobil', 'P05');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_parkir`
--

CREATE TABLE `tempat_parkir` (
  `No_parkir` varchar(20) NOT NULL,
  `luas_parkir` varchar(25) DEFAULT NULL,
  `lokasi_parkir` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tempat_parkir`
--

INSERT INTO `tempat_parkir` (`No_parkir`, `luas_parkir`, `lokasi_parkir`) VALUES
('P01', '5m', 'Kampus 1'),
('P02', '5m', 'Kampus 2'),
('P03', '7m', 'Parkir lanud'),
('P04', '5m', 'Kampus 1'),
('P05', '7m', 'kampus 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`No_kendaraan`),
  ADD KEY `No_parkir` (`No_parkir`);

--
-- Indexes for table `tempat_parkir`
--
ALTER TABLE `tempat_parkir`
  ADD PRIMARY KEY (`No_parkir`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`No_parkir`) REFERENCES `tempat_parkir` (`No_parkir`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

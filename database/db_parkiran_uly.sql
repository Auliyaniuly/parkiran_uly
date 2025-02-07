-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2025 at 02:52 AM
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
-- Database: `db_parkiran_uly`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `no_plat` varchar(45) NOT NULL,
  `id_tempat` int DEFAULT NULL,
  `waktu_masuk` varchar(45) DEFAULT NULL,
  `jenis_kendaraan` varchar(45) DEFAULT NULL,
  `nama_pemilik` varchar(45) DEFAULT NULL,
  `waktu_keluar` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`no_plat`, `id_tempat`, `waktu_masuk`, `jenis_kendaraan`, `nama_pemilik`, `waktu_keluar`) VALUES
('C', 255, '09.00', 'mobil', 'jeno', '14.00'),
('D', 233, '09.00', 'motor', 'noel', '12.00'),
('E', 244, '09.00', 'mobil', 'jaemin', '13.00'),
('K', 266, '08.00', 'motor', 'uly', '10.00'),
('M', 233, '10.00', 'mobil', 'chenzyun', '17.30');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_parkir`
--

CREATE TABLE `tempat_parkir` (
  `id_tempat` int NOT NULL,
  `nama_tempat` varchar(45) DEFAULT NULL,
  `harga` varchar(45) DEFAULT NULL,
  `lokasi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tempat_parkir`
--

INSERT INTO `tempat_parkir` (`id_tempat`, `nama_tempat`, `harga`, `lokasi`) VALUES
(444, 'miko', '20', 'lantai 1'),
(455, 'miko', '10', 'lantai 2'),
(466, 'miko', '15', 'lantai 3'),
(477, 'miko', '10', 'lantai 4'),
(488, 'miko', '30', 'lantai 5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`no_plat`);

--
-- Indexes for table `tempat_parkir`
--
ALTER TABLE `tempat_parkir`
  ADD PRIMARY KEY (`id_tempat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

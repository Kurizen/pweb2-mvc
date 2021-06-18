-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 11:21 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_keluarga`
--

CREATE TABLE `daftar_keluarga` (
  `no_KK` varchar(16) NOT NULL,
  `Nama_Kepala` text NOT NULL,
  `Anggota_Keluarga` text NOT NULL,
  `Alamat` text DEFAULT NULL,
  `no_tlp` text DEFAULT NULL,
  `Pekerjaan` text NOT NULL,
  `Penghasilan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_keluarga`
--

INSERT INTO `daftar_keluarga` (`no_KK`, `Nama_Kepala`, `Anggota_Keluarga`, `Alamat`, `no_tlp`, `Pekerjaan`, `Penghasilan`) VALUES
('3509062009010001', 'Raufanisme', '3', 'Tanggul', '628969785746', 'dosen', '100000'),
('3509062009020001', 'Dana', '2', 'Jember', '62897654321', 'guru', '20000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_keluarga`
--
ALTER TABLE `daftar_keluarga`
  ADD PRIMARY KEY (`no_KK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

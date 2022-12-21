-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 07:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_penduduk`
--

CREATE TABLE `dt_penduduk` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dt_penduduk`
--

INSERT INTO `dt_penduduk` (`nik`, `nama`, `jenis_kelamin`, `agama`, `status`, `pekerjaan`, `alamat`) VALUES
('310783638563283', 'muhammad imam', 'Laki-laki', 'Islam', 'Belum Menikah', 'karyawan swasta', 'jakarta'),
('3173665380037728', 'Siti Maemunah', 'Wanita', 'Islam', 'Menikah', 'Programer', 'Cilincing Utara, Jakarta, Indonesia'),
('53872393863892', 'Wiki Bentrot', 'Laki-laki', ']kristen', 'Menikah', 'Wiraswasta', 'Mataram, Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`) VALUES
('admin1@gmail.com', 'e00cf25ad42683b3df678c61f42c6bda'),
('admin2@gmail.com', 'c84258e9c39059a89ab77d846ddab909'),
('admin@gmail.com', 'e00cf25ad42683b3df678c61f42c6bda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_penduduk`
--
ALTER TABLE `dt_penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 05:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb_akhir_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin_nohash', 'admin'),
(2, 'admin', '8C6976E5B5410415BDE908BD4DEE15DFB167A9C873FC4BB8A81F6F2AB448A918');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(6);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(10) UNSIGNED NOT NULL,
  `namaoperator` varchar(50) NOT NULL,
  `prefiks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_operator`, `namaoperator`, `prefiks`) VALUES
(1, 'Halo', 811),
(2, 'Simpati', 812),
(3, 'Simpati', 813),
(4, 'Simpati', 821),
(5, 'Simpati', 822),
(6, 'AS', 852),
(7, 'AS', 853),
(8, 'AS', 823),
(9, 'AS', 851),
(10, 'Indosat M2 Broadband', 814),
(11, 'Matrix', 815),
(12, 'Matrix', 816),
(13, 'Matrix', 855),
(14, 'IM3', 856),
(15, 'IM3', 857),
(16, 'Mentari', 858),
(17, 'XL', 817),
(18, 'XL', 818),
(19, 'XL', 819),
(20, 'XL', 859),
(21, 'XL', 877),
(22, 'XL', 878),
(23, 'Axis', 838),
(24, 'Axis', 831),
(25, 'Axis', 832),
(26, 'Axis', 833),
(27, '3', 895),
(28, '3', 896),
(29, '3', 897),
(30, '3', 898),
(31, '3', 899),
(32, 'Smartfren', 881),
(33, 'Smartfren', 882),
(34, 'Smartfren', 883),
(35, 'Smartfren', 884),
(36, 'Smartfren', 885),
(37, 'Smartfren', 886),
(38, 'Smartfren', 887),
(39, 'Smartfren', 888),
(40, 'Smartfren', 889);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomorhp` varchar(15) NOT NULL,
  `operator` varchar(15) NOT NULL,
  `nominal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama`, `nomorhp`, `operator`, `nominal`) VALUES
(1, 'Yuzaki Nasa', '082336535175', 'AS', 50000),
(2, 'BrandonKent Diamond', '0813150556258', 'AS', 100000),
(3, 'Modadi Joki', '087832270678', 'XL', 25000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id_operator` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

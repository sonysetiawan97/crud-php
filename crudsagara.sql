-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 05:33 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudsagara`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablekaryawan`
--

CREATE TABLE `tablekaryawan` (
  `NIK` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tempatLahir` varchar(50) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tablekeahlian`
--

CREATE TABLE `tablekeahlian` (
  `idKeahlian` int(11) NOT NULL,
  `namaKeahlian` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tablekeahliankaryawan`
--

CREATE TABLE `tablekeahliankaryawan` (
  `idKeahlian` int(11) NOT NULL,
  `NIK` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tablekaryawan`
--
ALTER TABLE `tablekaryawan`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `tablekeahlian`
--
ALTER TABLE `tablekeahlian`
  ADD PRIMARY KEY (`idKeahlian`);

--
-- Indexes for table `tablekeahliankaryawan`
--
ALTER TABLE `tablekeahliankaryawan`
  ADD KEY `idKeahlian` (`idKeahlian`),
  ADD KEY `NIK` (`NIK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tablekeahlian`
--
ALTER TABLE `tablekeahlian`
  MODIFY `idKeahlian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tablekeahliankaryawan`
--
ALTER TABLE `tablekeahliankaryawan`
  MODIFY `idKeahlian` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tablekeahliankaryawan`
--
ALTER TABLE `tablekeahliankaryawan`
  ADD CONSTRAINT `tablekeahliankaryawan_ibfk_1` FOREIGN KEY (`idKeahlian`) REFERENCES `tablekeahlian` (`idKeahlian`),
  ADD CONSTRAINT `tablekeahliankaryawan_ibfk_2` FOREIGN KEY (`NIK`) REFERENCES `tablekaryawan` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

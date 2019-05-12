-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 03:56 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simup_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi`
--

CREATE TABLE `aspirasi` (
  `idAspirasi` int(11) NOT NULL,
  `namaLengkap` varchar(30) DEFAULT NULL,
  `textAspirasi` varchar(255) DEFAULT NULL,
  `foto` text NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aspirasi`
--

INSERT INTO `aspirasi` (`idAspirasi`, `namaLengkap`, `textAspirasi`, `foto`, `status`) VALUES
(3, 'jgsrkir', 'bgfvklofvjhjfyu', '64-1.jpg', '0'),
(4, 'ty', 'yayayay', '3.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `aspirasipost`
--

CREATE TABLE `aspirasipost` (
  `idPost` int(11) NOT NULL,
  `namaLengkap` varchar(30) DEFAULT NULL,
  `textAspirasi` varchar(255) DEFAULT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aspirasipost`
--

INSERT INTO `aspirasipost` (`idPost`, `namaLengkap`, `textAspirasi`, `foto`) VALUES
(1, 'ty', 'FXGSGSGSEDS', '2.jpg'),
(2, 'huda', 'tyytytyt', '5.jpg'),
(3, 'Tyas', 'dddddd', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(225) DEFAULT NULL,
  `namaUser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `namaUser`) VALUES
('admin', '0192023a7bbd73250516f069df18b500', 'Ini Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`idAspirasi`);

--
-- Indexes for table `aspirasipost`
--
ALTER TABLE `aspirasipost`
  ADD PRIMARY KEY (`idPost`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `idAspirasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aspirasipost`
--
ALTER TABLE `aspirasipost`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

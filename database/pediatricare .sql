-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 02:47 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pediatricare`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `fullname` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `fullname`, `email`, `role`) VALUES
('andrearhmd', '123', 'andrea rahmadanisya', 'rahmadanisya.andrea@gmail.com', 1),
('asd', 'qwe', 'gas', 'gas@gmail.com', 0),
('bagas', '123', 'bagas millen', 'bagas@gmail.com', 1),
('rizkaoctv', '123', 'Rizka Nur Octaviani', 'rizkaoctv03@gmail.com', 1),
('zxc', '123', 'c', 'gas@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id_info` int(5) NOT NULL,
  `judul` varchar(100) COLLATE utf8_bin NOT NULL,
  `isi` longtext COLLATE utf8_bin NOT NULL,
  `photo` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id_info`, `judul`, `isi`, `photo`) VALUES
(4, 'Demam Tapi Tidak Berdarah', 'Saat Ibu meraba tubuh si Kecil dan suhu tubuhnya melebihi kondisi normal, ini bisa jadi bahwa tubuhnya sedang berusaha untuk mengenali dan melawan beragam virus serta bakteri. Pertolongan pertama yang bisa Ibu lakukan adalah dengan memberinya obat penurun demam. Perlu diketahui ya Bu, demam yang terlalu tinggi dapat menyebabkan kejang pada siapa', 'covid19.jpg'),
(15, 'ingus', 'ingusan', 'covid19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(5) NOT NULL,
  `judul` varchar(100) COLLATE utf8_bin NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `dokter` varchar(50) COLLATE utf8_bin NOT NULL,
  `question` text COLLATE utf8_bin NOT NULL,
  `answer` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `judul`, `username`, `dokter`, `question`, `answer`) VALUES
(6, 'flu', 'guest', 'guest', 'kenapah?', 'auah'),
(7, 'demam', 'andrearhmd', '', 'kenapah?', '');

-- --------------------------------------------------------

--
-- Table structure for table `rumahsakit`
--

CREATE TABLE `rumahsakit` (
  `id_rumahsakit` int(5) NOT NULL,
  `nama` varchar(50) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(50) COLLATE utf8_bin NOT NULL,
  `notelp` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `rumahsakit`
--

INSERT INTO `rumahsakit` (`id_rumahsakit`, `nama`, `alamat`, `notelp`) VALUES
(3, 'RS Dr. Hasan Sadikin Bandung', 'Jl. Pasteur No. 38 Kota Bandung – Jawa Barat', '(022) 2034953'),
(4, 'RS Bandung Barat', 'Bandung', '022 75676777');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  ADD PRIMARY KEY (`id_rumahsakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id_info` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  MODIFY `id_rumahsakit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

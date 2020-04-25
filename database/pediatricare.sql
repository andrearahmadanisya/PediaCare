-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 04:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

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
('ice', '123', 'ice bear', 'icebear@gmail.com', 0),
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
(4, 'Demam Berdarah', 'DBD yang tergolong ringan pada anak, seringkali berupa demam tanpa diikuti gejala tertentu. Jika muncul gejala, umumnya terjadi sekitar 4-7 hari setelah digigit nyamuk penyebab demam berdarah.', 'demam1.jpg'),
(15, 'flu', 'Banyak yang meyakini bahwa flu pada balita selama ini terjadi karena hal tersebut. Padahal bila dicermati penularan penyakit yang utama adalah terjadi kontak sumber penularan dan ada kontak yang  sakit di sekitarnya 1-2 hari sebelumnya.\r\n\r\nFaktor daya tahan tubuh juga menjadi faktor penting, karena meskipun ada kontak manusia bisa terhindar dari flu atau paling tidak gejalanya ringan yang pernah kita sadari. Bila tidak ada kontak dan sumber penularan flu tidak akan terjadi.\r\n\r\nKondisi tubuh bayi memang sangat rentan terhadap berbagai serangan penyakit. Untuk itu sebagai orang tua harus mengerti bagaimana buah hatinya terhindar dari berbagai serangan penyakit. Dr. Aditya Wicaksono spesialis telinga hidung dan tenggorokan Rumah Sakit Awal Bros Batam menjelaskan, flu atau pilek merupakan ancaman yang paling banyak dialami oleh bayi.\r\n\r\nMasalah infeksi pernafasan ini memang banyak dialami pada masa kanak-kanak. “Karena virus tersebut tidak akan berterbangan di udara bebas yang luas, sperti di jalan, di udara luas dan tertiup angina dengan jarak yang jauh. Jadi jika tidak ada kontak dengan virus yang menyebabkan terjadinya flu balita tidak akan terserang flu,” jelasnya lagi.', 'flu1.jpg'),
(18, 'Cacar', ' Beberapa ciri dan gejala cacar air pada anak harus Anda perhatikan, yaitu: Ruam kulit merah yang lama kelamaan akan berubah menjadi bintik-bintik kecil melepuh dan terisi cairan atau disebut juga lenting cacar. Setelah 1-2 hari, lenting akan mengering, mengelupas, dan menjadi keropeng.', 'cacar1.jpg'),
(19, 'Infeksi Telinga Tengah', ' Infeksi Telinga Tengah (Otitis Media)\r\nOtitis media terjadi ketika cairan terkumpul di belakang gendang telinga yang menyebabkan gendang telinga membengkak, sehingga menghasilkan rasa sakit yang hebat. Kondisi ini berisiko menyebabkan gendang telinga robek (gendang telinga pecah). Robeknya gendang telinga menimbulkan gejala keluarnya cairan kuning tebal dari telinga. Ketika terjadi, anak-anak sering merasa lebih baik, karena pembengkakan telah berhenti.\r\n\r\nPecahnya gendang telinga dapat sembuh tanpa perawatan. Anak-anak dengan infeksi telinga tengah dapat mengalami demam. Demam biasanya menjadi satu-satunya gejala infeksi telinga tengah.', 'infeksitelinga1.jpg');

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
(6, 'flu', 'guest', 'zxc', 'kenapah?', 'ss'),
(7, 'demam', 'andrearhmd', 'andrearhmd', 'kenapah?', 'gakpapah');

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
(4, 'RS Bandung Barat', 'Bandung', '022 75676777'),
(5, 'RS Khusus Bedah Halmahera Siaga', 'Jl. R. E. Martadinata No. 28, Citarum, Bandung Wet', '(022)4206061'),
(6, 'RS Hermina Arcamanik', 'Jl. A H Nasution No. 50 Kota Bandung – Jawa Barat', '(022)87242525'),
(7, 'RSIA Hermina Pasteur', 'Jl. Dr. Djunjunan No. 107 Kota Bandung – Jawa Bara', '(022)6072525'),
(8, 'RS Lanud Sulaiman', 'Jl. Pangkalan AU Sulaiman Kota Bandung – Jawa Bara', '(022)5409608'),
(9, 'Rumah Sakit Rajawali', 'Jl. Rajawali No. 38, Cimahi Kota Bandung – Jawa Ba', '(022)6031087'),
(10, 'Rumah Sakit Sariningsih', 'JL RE Martadinata No.9 Kota Bandung – Jawa Barat', '(022)4204257'),
(11, 'RS St. Borromeus', 'Jl. Juanda No. 100 Kota Bandung – Jawa Barat', '(022)2504041'),
(12, 'RSUD Ujung Berung', 'Jl. Rumah Sakit No. 22 Kota Bandung – Jawa Barat', '(022)7811794');

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
  MODIFY `id_info` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  MODIFY `id_rumahsakit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

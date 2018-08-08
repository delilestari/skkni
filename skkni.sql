-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 05:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skkni`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `nama` varchar(40) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `skema_sertifikasi` varchar(25) NOT NULL,
  `tempat_uji_kompetensi` varchar(15) NOT NULL,
  `rekomendasi` varchar(20) NOT NULL,
  `tanggal_terbit_sertifikat` date NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `organisasi` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`nama`, `nik`, `hp`, `email`, `skema_sertifikasi`, `tempat_uji_kompetensi`, `rekomendasi`, `tanggal_terbit_sertifikat`, `tanggal_lahir`, `organisasi`) VALUES
('nadya', '123456', '085211662446', 'nad@gmail.com', 'Multimedia', 'aula', 'sekolah', '2018-08-09', '1995-01-10', 'STMIK'),
('deli lestari', '123456789', '081215559934', 'delilestari94@gmail.com', 'Programming', 'aula', 'kampus', '2018-08-08', '1995-01-31', 'STIKOM DB Jambi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`nik`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

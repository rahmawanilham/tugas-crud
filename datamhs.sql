-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 12:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'baak', 'baak', 'baak'),
(3, 'mahasiswa', 'mahasiswa', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tgl_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `notlp_ayah` varchar(12) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tgl_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `notlp_ibu` varchar(12) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `slta` varchar(100) NOT NULL,
  `alamat_slta` varchar(50) NOT NULL,
  `notlp_slta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `jenis_kelamin`, `agama`, `no_tlp`, `email`, `no_ktp`, `no_kk`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `provinsi`, `kota`, `kecamatan`, `negara`, `nama_ayah`, `tgl_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `notlp_ayah`, `nama_ibu`, `tgl_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `notlp_ibu`, `nisn`, `slta`, `alamat_slta`, `notlp_slta`) VALUES
(100, 'rahmawan ilham pratama', 'Laki-laki', 'islam', '', '', '', '', '', '', '', '', '', 'jatim', 'madiun', 'sawahan', 'indonesia', '', '', 'sarjana', '', '', '', '', 'sarjana', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2024 at 03:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diskominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` int(6) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `nip`, `alamat`, `jabatan`) VALUES
(1, 'Kartika', 124563, 'SumedangUtara, jln Darandan', 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` bigint(255) NOT NULL,
  `id_perjalanan` int(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_perjalanan`, `status`, `foto`) VALUES
(1, 456, 'Selesai', '763945628_deskapp-logo_11zon.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$24qas3t52/WqKijWZDVfYO7oj.Z.0SY7MVxLowpgqkXR64kwtJ0N2');

-- --------------------------------------------------------

--
-- Table structure for table `penugasan`
--

CREATE TABLE `penugasan` (
  `id_penugasan` bigint(16) NOT NULL,
  `id_perjalanan` int(20) NOT NULL,
  `id_user` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penugasan`
--

INSERT INTO `penugasan` (`id_penugasan`, `id_perjalanan`, `id_user`) VALUES
(1, 456, 10),
(2, 123456, 11),
(3, 456, 10);

-- --------------------------------------------------------

--
-- Table structure for table `perjalanan`
--

CREATE TABLE `perjalanan` (
  `id_perjalanan` int(20) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `jenis_tugas` varchar(30) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perjalanan`
--

INSERT INTO `perjalanan` (`id_perjalanan`, `tempat`, `tanggal`, `waktu`, `jenis_tugas`, `keterangan`, `status`, `lampiran`) VALUES
(456, 'al mamun', '2024-10-07', '16:43:00', 'admin', 'rapat SKPD pendapatan daerah', 'selesai', '1393476171_IMG_0157_11zon.jpg'),
(123456, 'Alun Alun Sumedang', '2024-10-04', '10:59:57', 'giat_liputan', 'West Java Smiling Festival', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(9) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `nip` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `jabatan`, `bidang`, `telp`, `email`, `level`, `nip`) VALUES
(10, 'Alfiyah', '6789', 'PEGAWAI', 'PERSANDIAN', '08523648978', 'alfi@gmail.com', 'pegawai', '9876'),
(11, 'Muhamad Agra Rizkia Mulyana', '1203', 'KADIS', 'KOMUNIKASI', '082115402372', 'muhamad.agra70@smk.belajar.id', 'admin', '12032024'),
(56, 'Muhamad Iqbal Maulana', '3456', 'KABID', 'SERVER', '08657989456', 'iqbal@gmail.com', 'admin', '456789'),
(123, 'Aldevaro', '123', 'SEKDIS', 'UMUM', '085215464', 'aldevaro@gmail.com', 'pegawai', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD UNIQUE KEY `foto` (`id_karyawan`,`nama`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penugasan`
--
ALTER TABLE `penugasan`
  ADD PRIMARY KEY (`id_penugasan`);

--
-- Indexes for table `perjalanan`
--
ALTER TABLE `perjalanan`
  ADD PRIMARY KEY (`id_perjalanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penugasan`
--
ALTER TABLE `penugasan`
  MODIFY `id_penugasan` bigint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perjalanan`
--
ALTER TABLE `perjalanan`
  MODIFY `id_perjalanan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123457;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

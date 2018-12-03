-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2018 at 05:03 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisni2`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tpengolahan`
--

CREATE TABLE `tpengolahan` (
  `id_pengolahan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `id_tanaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpengolahan`
--

INSERT INTO `tpengolahan` (`id_pengolahan`, `nama`, `keterangan`, `id_tanaman`) VALUES
(23, 'Tumbuk', 'Tumbuk aja terus', 22),
(24, 'Bejek', 'Bejek terus', 22),
(25, 'Di Uyeg', 'Uyeg Terus', 21),
(27, 'Di Blender', 'Blender Terus', 21);

-- --------------------------------------------------------

--
-- Table structure for table `tpenyakit`
--

CREATE TABLE `tpenyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `id_tanaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpenyakit`
--

INSERT INTO `tpenyakit` (`id_penyakit`, `nama`, `keterangan`, `id_tanaman`) VALUES
(1, 'Kudis', 'Kudis kapalan', 21),
(3, 'Kutu Air', 'Banyak Kutu AIr', 22),
(4, 'Asam Urat', 'Banyak Asam Urat', 22),
(5, 'Sakit Kepala', 'Banyak sakit kepala\r\n', 21);

-- --------------------------------------------------------

--
-- Table structure for table `ttanaman`
--

CREATE TABLE `ttanaman` (
  `id_tanaman` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttanaman`
--

INSERT INTO `ttanaman` (`id_tanaman`, `nama`, `keterangan`, `id`) VALUES
(21, 'Kumis Kucing', 'Di Tempat Kering', 5),
(22, 'Cocor Bebek', 'Budidayanya di tanah basah', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg',
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `photo`, `role`) VALUES
(1, 'ardianta', 'ardianta_pargo@yahoo.co.id', '$2y$10$HIEq2w.8Et9RsJmY4TMKye4aVCxOd9xJTOtG4vyOEmo.GIBxaPQHK', 'Ardianta Pargo', 'default.svg', ''),
(3, 'petanikode', 'info@petanikode.com', '$2y$10$uXa.Hz9rr8gkv4ztaqf6FO84iW64gXHbeyEOy1tIQ5wmqMjTk0yQa', 'Petani Kode', 'default.svg', ''),
(4, 'pande', 'funday820@gmail.com', '$2y$10$jRU.6sB.u873z7J90eOzMeZl872vJT.UTRqS9oFvkrrxluAJzplXq', 'Komang Sudana Yasa Pande', 'default.svg', ''),
(5, 'funday', 'funday820@gmail.com', '$2y$10$p6imrNZvC2muCCKwX3hzY.mDIgrDh3M9TUBIXV/CYbodE0GGb6hm6', 'Komang Sudana Yasa Pande', 'default.svg', 'admin'),
(6, 'user', 'user@user.com', '$2y$10$GHwfze.zwYO9Nh2RgTctNepnm1rbszBknjRl2d1nUTngx7DBXCVQa', 'user', 'default.svg', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tpengolahan`
--
ALTER TABLE `tpengolahan`
  ADD PRIMARY KEY (`id_pengolahan`),
  ADD KEY `id_tanaman` (`id_tanaman`);

--
-- Indexes for table `tpenyakit`
--
ALTER TABLE `tpenyakit`
  ADD PRIMARY KEY (`id_penyakit`),
  ADD KEY `id_tanaman` (`id_tanaman`);

--
-- Indexes for table `ttanaman`
--
ALTER TABLE `ttanaman`
  ADD PRIMARY KEY (`id_tanaman`),
  ADD KEY `id_user` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tpengolahan`
--
ALTER TABLE `tpengolahan`
  MODIFY `id_pengolahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tpenyakit`
--
ALTER TABLE `tpenyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ttanaman`
--
ALTER TABLE `ttanaman`
  MODIFY `id_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tpengolahan`
--
ALTER TABLE `tpengolahan`
  ADD CONSTRAINT `tpengolahan_ibfk_1` FOREIGN KEY (`id_tanaman`) REFERENCES `ttanaman` (`id_tanaman`);

--
-- Constraints for table `tpenyakit`
--
ALTER TABLE `tpenyakit`
  ADD CONSTRAINT `tpenyakit_ibfk_1` FOREIGN KEY (`id_tanaman`) REFERENCES `ttanaman` (`id_tanaman`);

--
-- Constraints for table `ttanaman`
--
ALTER TABLE `ttanaman`
  ADD CONSTRAINT `ttanaman_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

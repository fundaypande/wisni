-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 04:48 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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
-- Table structure for table `ttanaman`
--

CREATE TABLE `ttanaman` (
  `id_tanaman` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttanaman`
--

INSERT INTO `ttanaman` (`id_tanaman`, `nama`, `keterangan`) VALUES
(1, 'Bayam', 'bayam adalahakjfnadf'),
(2, 'Pande', '2018-12-12'),
(3, 'Buncis', 'Buncis adalah'),
(4, 'Pinahun', 'Hebat'),
(5, 'Pinahun', 'Hebat'),
(6, 'Kucing', 'Ayam keterangan'),
(7, 'Kumis Kucing', 'Keterangan Kumis Kuing'),
(8, 'Kumis Kucing', 'Keterangan Kumis Kuing'),
(9, 'Kumis Kucing', 'Keterangan Kumis Kuing'),
(10, 'Kumis Kucing', 'Keterangan Kumis Kuing'),
(11, 'Kumis Kucing', 'Keterangan Kumis Kuing'),
(12, 'Kumis Kucing', 'Keterangan Kumis Kuing'),
(13, 'Kumis Kucing', 'Keterangan Kumis Kuing'),
(14, 'Alonsi', 'Keteranganya');

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
-- Indexes for table `ttanaman`
--
ALTER TABLE `ttanaman`
  ADD PRIMARY KEY (`id_tanaman`);

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
-- AUTO_INCREMENT for table `ttanaman`
--
ALTER TABLE `ttanaman`
  MODIFY `id_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

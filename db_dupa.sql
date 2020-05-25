-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 09:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dupa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'gdamerda', 'amerta213bali@gmail.com', '$2y$10$ihN10S/YneJP6aXZmu2DvuK6rW2IME9N1fqyZhkPxb9BCkvPOJ7Q.');

-- --------------------------------------------------------

--
-- Table structure for table `dupa`
--

CREATE TABLE `dupa` (
  `id` int(11) NOT NULL,
  `nama_dupa` varchar(225) NOT NULL,
  `harga_dupa` int(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dupa`
--

INSERT INTO `dupa` (`id`, `nama_dupa`, `harga_dupa`, `deskripsi`) VALUES
(9, 'Thurgas Baru', 400000, 'Produk yang tidak murahan dan mampu membuat pembeli terharu'),
(10, 'Melati Baru', 500000, 'Melati ini baru banget dan sangat banyak yang menyukasi produk nya hingga mampu membuat pembeli tergila gila'),
(12, 'Mawar Wangi', 50000, 'Mawar merupakan bunga yang sangat indah namun tangkai nya berduri, meskipun begitu itu merupakan cara dia untuk melindungi dirinya dari predator seperti kita manusia, nah ini produk dupa berwangi mawar yang diharapkan bisa melawan pengaruh jahat dan melindungi sekitarnya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dupa`
--
ALTER TABLE `dupa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dupa`
--
ALTER TABLE `dupa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

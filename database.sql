-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 04:00 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spine`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_sinonim`
--

CREATE TABLE `tb_sinonim` (
  `id` int(11) NOT NULL,
  `kata` varchar(50) NOT NULL,
  `sinonim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sinonim`
--

INSERT INTO `tb_sinonim` (`id`, `kata`, `sinonim`) VALUES
(1, 'aku', 'saya'),
(2, 'kamu', 'lu'),
(3, 'saya', 'gua'),
(4, 'aku', 'gua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_sinonim`
--
ALTER TABLE `tb_sinonim`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_sinonim`
--
ALTER TABLE `tb_sinonim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

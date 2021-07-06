-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 07:44 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robotmove`
--

-- --------------------------------------------------------

--
-- Table structure for table `robotmove`
--

CREATE TABLE `robotmove` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ForWard` varchar(10) NOT NULL,
  `BackWard` varchar(10) NOT NULL,
  `Right` varchar(10) NOT NULL,
  `Left` varchar(10) NOT NULL,
  `Stop` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `robotmove`
--

INSERT INTO `robotmove` (`id`, `ForWard`, `BackWard`, `Right`, `Left`, `Stop`) VALUES
(1, '0', '0', '0', '0', 'Stop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `robotmove`
--
ALTER TABLE `robotmove`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `robotmove`
--
ALTER TABLE `robotmove`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

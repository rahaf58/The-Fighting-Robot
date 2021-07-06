-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 07:43 PM
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
-- Database: `motors`
--

-- --------------------------------------------------------

--
-- Table structure for table `motors`
--

CREATE TABLE `motors` (
  `Motor1` int(11) NOT NULL,
  `Motor2` int(11) NOT NULL,
  `Motor3` int(11) NOT NULL,
  `Motor4` int(11) NOT NULL,
  `Motor5` int(11) NOT NULL,
  `Motor6` int(11) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `Running` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motors`
--

INSERT INTO `motors` (`Motor1`, `Motor2`, `Motor3`, `Motor4`, `Motor5`, `Motor6`, `id`, `Running`) VALUES
(90, 90, 90, 90, 90, 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motors`
--
ALTER TABLE `motors`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motors`
--
ALTER TABLE `motors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

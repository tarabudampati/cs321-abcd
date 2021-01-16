-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 04:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dances_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dances`
--

CREATE TABLE `dances` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `did_you_know` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL COMMENT 'classical, folk, other',
  `state_name` varchar(25) DEFAULT NULL,
  `key_words` varchar(500) DEFAULT NULL COMMENT 'any key words separate by comma',
  `status` varchar(25) NOT NULL DEFAULT 'proposed' COMMENT 'proposed, approved, writeup_done, art_work_done, designed, completed',
  `image_url` varchar(100) NOT NULL,
  `notes` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dances`
--

INSERT INTO `dances` (`id`, `name`, `description`, `did_you_know`, `type`, `state_name`, `key_words`, `status`, `image_url`, `notes`) VALUES
(1, 'Kuchipudi', 'Kuchipudi is one of the eight major Indian classical dances. It originated in a village named Kuchipudi in the Indian state of Andhra Pradesh', 'Classical', ' \'Kuchipudi\' is the only ', 'Andhra Pradesh', 'Kuchipudi, Classical, Andhra Pradesh', 'proposed', 'kuchipudi.jpg', 'notes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dances`
--
ALTER TABLE `dances`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dances`
--
ALTER TABLE `dances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

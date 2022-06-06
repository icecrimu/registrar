-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 06:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cert_gwa`
--

CREATE TABLE `cert_gwa` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `honorific` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date_graduated` date NOT NULL,
  `over_all_gwa` varchar(255) NOT NULL,
  `cert_no` varchar(255) NOT NULL,
  `res_no` int(11) NOT NULL,
  `series_of` varchar(255) NOT NULL,
  `or_no` varchar(255) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cert_gwa`
--

INSERT INTO `cert_gwa` (`id`, `firstname`, `middlename`, `lastname`, `suffix`, `honorific`, `address`, `course`, `purpose`, `date_graduated`, `over_all_gwa`, `cert_no`, `res_no`, `series_of`, `or_no`, `date_created`) VALUES
(2, 'Charles Gemuel', 'Francisco', 'Banigon', '', 'Mr.', 'Poblacion, Dasol, Pangasinan', 'Bachelor of Science in Information Technology (BSIT)', 'employment', '2022-06-15', '34332', 'Gwa-001', 4, '2018', '090343', '2022-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_code` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `user_code`, `password`) VALUES
(1, 'admin', 'Rose Dyan ', 'rds', '$2y$10$omvn7f1y3EHTTs0.1Z4VPe.eM8DwMQUQo.sr3IiJMm603/pRaClD6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cert_gwa`
--
ALTER TABLE `cert_gwa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cert_gwa`
--
ALTER TABLE `cert_gwa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2016 at 02:59 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sannidhya`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `mobile_no` int(20) NOT NULL,
  `alternate_no` int(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `rooms` int(10) NOT NULL,
  `kids` int(10) NOT NULL,
  `persons` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mobile_no`, `alternate_no`, `city`, `country`, `email`, `rooms`, `kids`, `persons`) VALUES
(1, 'dds', 'df', 23122, 22, 'ms', 'ndd', 'nishanan@gmail.com', 2, 3, 1),
(2, 'dds', 'df', 23122, 22, 'ms', 'ndd', 'nishanan@gmail.com', 2, 3, 1),
(3, 'manali', 'pathare', 100, 101, 'mumbai', 'pakistan', 'nishanan@gmail.com', 1, 2, 2),
(4, 'manali', 'pathare', 100, 101, 'mumbai', 'pakistan', 'nishanan@gmail.com', 1, 2, 2),
(5, '', '', 0, 0, '', '', '', 0, 0, 0),
(6, 'ktm', '  snns', 883, 34, 'nns', 'karja', 'nishanan@gmail.com', 3, 2, 3),
(7, 'nishan', 'pops', 817202, 1223, 'mubai', 'karja', 'nishantpathare@aol.in', 1, 2, 3),
(8, 'nishan', 'pops', 817202, 1223, 'mubai', 'karja', 'nishantpathare@aol.in', 1, 2, 3),
(9, '', '', 0, 0, '', '', '', 0, 0, 0),
(10, 'nsn', 'NENE', 0, 22, '334', '3NENE', 'NNE', 3, 2, 2),
(11, '', '', 0, 0, '', '', '', 0, 0, 0),
(12, '', '', 0, 0, '', '', '', 0, 0, 0),
(13, 'NNISHAN', '', 22, 0, '', '', '', 0, 0, 0),
(14, 'd', '', 0, 0, '', '', '', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

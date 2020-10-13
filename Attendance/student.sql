-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2017 at 09:51 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `checklogin`
--

CREATE TABLE `checklogin` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `land` varchar(35) NOT NULL,
  `table` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checklogin`
--

INSERT INTO `checklogin` (`id`, `fname`, `username`, `password`, `subject`, `land`, `table`) VALUES
(1, 'AARTI SABLE', 'asable', '7896', 'SPCC', 'attendance1', 't2'),
(2, 'SANJAY JADHAV', 'sjadhav', '1234', 'SE', 'attendance2', 't3'),
(3, 'DHANRAJ WALUNJ', 'dwalunj', 'poiuytrewq', 'MCC', 'attendance3', 't4'),
(4, 'REENA BORA', 'rbora', '6666', 'DD', 'attendance4', 't5');

-- --------------------------------------------------------

--
-- Table structure for table `t1`
--

CREATE TABLE `t1` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `roll` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1`
--

INSERT INTO `t1` (`id`, `name`, `dept`, `roll`) VALUES
(34, 'NITESH MANJAREKAR', 'COMPUTER', 35),
(35, 'NISHANT PATHARE', 'COMPUTER', 46),
(36, 'PRAJAKTA LIMJE', 'COMPUTER', 31),
(37, 'PRATEEK DHAWALE', 'COMPUTER', 15),
(38, 'SURYA SINGH', 'COMPUTER', 56),
(39, 'CHIRAG PANCHAL', 'COMPUTER', 44);

-- --------------------------------------------------------

--
-- Table structure for table `t2`
--

CREATE TABLE `t2` (
  `id` int(10) NOT NULL,
  `roll` int(10) NOT NULL,
  `present` int(10) NOT NULL,
  `absent` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `percentage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t2`
--

INSERT INTO `t2` (`id`, `roll`, `present`, `absent`, `total`, `percentage`) VALUES
(17, 35, 1, 0, 1, 100),
(18, 46, 1, 0, 1, 100),
(19, 31, 1, 0, 1, 100),
(20, 15, 1, 0, 1, 100),
(21, 56, 1, 0, 1, 100),
(22, 44, 1, 0, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `t3`
--

CREATE TABLE `t3` (
  `id` int(10) NOT NULL,
  `roll` int(10) NOT NULL,
  `present` int(10) NOT NULL,
  `absent` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `percentage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t3`
--

INSERT INTO `t3` (`id`, `roll`, `present`, `absent`, `total`, `percentage`) VALUES
(9, 35, 5, 1, 6, 83),
(10, 46, 4, 2, 6, 66),
(11, 31, 4, 2, 6, 66),
(12, 15, 3, 3, 6, 50),
(13, 56, 2, 2, 4, 50),
(14, 44, 1, 3, 4, 25);

-- --------------------------------------------------------

--
-- Table structure for table `t4`
--

CREATE TABLE `t4` (
  `id` int(10) NOT NULL,
  `roll` int(10) NOT NULL,
  `present` int(10) NOT NULL,
  `absent` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `percentage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4`
--

INSERT INTO `t4` (`id`, `roll`, `present`, `absent`, `total`, `percentage`) VALUES
(9, 35, 1, 0, 1, 100),
(10, 46, 1, 0, 1, 100),
(11, 31, 1, 0, 1, 100),
(12, 15, 1, 0, 1, 100),
(13, 56, 1, 0, 1, 100),
(14, 44, 1, 0, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `t5`
--

CREATE TABLE `t5` (
  `id` int(10) NOT NULL,
  `roll` int(10) NOT NULL,
  `present` int(10) NOT NULL,
  `absent` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `percentage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t5`
--

INSERT INTO `t5` (`id`, `roll`, `present`, `absent`, `total`, `percentage`) VALUES
(9, 35, 0, 0, 0, 0),
(10, 46, 0, 0, 0, 0),
(11, 31, 0, 0, 0, 0),
(12, 15, 0, 0, 0, 0),
(13, 56, 0, 0, 0, 0),
(14, 44, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t6`
--

CREATE TABLE `t6` (
  `id` int(10) NOT NULL,
  `roll` int(10) NOT NULL,
  `percentage` int(10) NOT NULL,
  `percentage1` int(10) NOT NULL,
  `percentage2` int(10) NOT NULL,
  `percentage3` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6`
--

INSERT INTO `t6` (`id`, `roll`, `percentage`, `percentage1`, `percentage2`, `percentage3`) VALUES
(1, 35, 100, 83, 100, 80),
(2, 46, 100, 66, 100, 60),
(3, 31, 100, 66, 100, 60),
(4, 15, 100, 50, 100, 40),
(5, 56, 100, 50, 100, 33),
(6, 44, 100, 25, 100, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checklogin`
--
ALTER TABLE `checklogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t1`
--
ALTER TABLE `t1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `t2`
--
ALTER TABLE `t2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t3`
--
ALTER TABLE `t3`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `t4`
--
ALTER TABLE `t4`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `t5`
--
ALTER TABLE `t5`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `t6`
--
ALTER TABLE `t6`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checklogin`
--
ALTER TABLE `checklogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t1`
--
ALTER TABLE `t1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `t2`
--
ALTER TABLE `t2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `t3`
--
ALTER TABLE `t3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `t4`
--
ALTER TABLE `t4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `t5`
--
ALTER TABLE `t5`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `t6`
--
ALTER TABLE `t6`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 11:06 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proctorit`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkteachers`
--

CREATE TABLE `checkteachers` (
  `id` int(11) NOT NULL,
  `fusername` text NOT NULL,
  `fpassword` text NOT NULL,
  `fname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkteachers`
--

INSERT INTO `checkteachers` (`id`, `fusername`, `fpassword`, `fname`) VALUES
(1, 'rb', 'rb', 'Reena Bora'),
(2, 'dw', 'dw', 'Dhanraj Walunj'),
(3, 'sj', 'sj', 'Sanjay Jadhav'),
(4, 'as', 'as', 'Aarti Sable');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(50) NOT NULL,
  `grno` text NOT NULL,
  `branch` varchar(10) NOT NULL,
  `rollno` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `dob` text NOT NULL,
  `smob` int(10) NOT NULL,
  `email` text NOT NULL,
  `haddr` text NOT NULL,
  `paddr` text NOT NULL,
  `sibling` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `foccupation` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `moccupation` varchar(20) NOT NULL,
  `pemail` text NOT NULL,
  `ssc` text NOT NULL,
  `smedium` varchar(10) NOT NULL,
  `sboard` text NOT NULL,
  `hsc` text NOT NULL,
  `hmedium` varchar(10) NOT NULL,
  `hboard` text NOT NULL,
  `bg` text NOT NULL,
  `ht` int(10) NOT NULL,
  `wt` int(10) NOT NULL,
  `hp` int(30) NOT NULL,
  `hobbies` varchar(30) NOT NULL,
  `strengths` varchar(30) NOT NULL,
  `stgoals` varchar(30) NOT NULL,
  `ltgoals` varchar(30) NOT NULL,
  `extra` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `grno`, `branch`, `rollno`, `name`, `nickname`, `dob`, `smob`, `email`, `haddr`, `paddr`, `sibling`, `fname`, `foccupation`, `mname`, `moccupation`, `pemail`, `ssc`, `smedium`, `sboard`, `hsc`, `hmedium`, `hboard`, `bg`, `ht`, `wt`, `hp`, `hobbies`, `strengths`, `stgoals`, `ltgoals`, `extra`) VALUES
(56, '123', 'computer', 46, 'Nishant Pathare', 'pappa', '12/04/1996', 2147483647, 'nishantpathare5@gmail.com', 'D-7,Chembur Gaothan, Near chemburkar health club, Chembur Mumbai-400 071., mn', 'D-7,Chembur Gaothan, Near chemburkar health club, Chembur Mumbai-400 071., mn', 'jay', 'Niketan Pathare', 'Service', 'Varsha Pathare', 'Service', 'varsha@cleartrip.com', '85.27', 'english', 'maharashtra', '71.54', 'english', 'maharashttra', 'ab', 176, 61, 0, 'playing games', 'short tempered', 'plenty', 'plenty of them', 'table player, basketball playe'),
(57, '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(58, '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(59, '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(60, 's1430203', 'cjahfu', 232, 'fdsf', 'dfsdgs', '12/06/1996', 342576777, 'sdsiod2hfhwfh', '324fdsgheefsg', '3242fdgrdgdj', 'fgdf', 'gfsadf', 'sdfsfgafd', 'dsfdgas', 'fsfadsf', 'dsf@fsf', '77', 'english', 'dfosdhf', '60', 'fgdf', 'dfgdf', 'ab+', 164, 76, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(10) NOT NULL,
  `ese` int(10) NOT NULL,
  `ese1` int(10) NOT NULL,
  `ia` int(10) NOT NULL,
  `ia1` int(10) NOT NULL,
  `tot` int(10) NOT NULL,
  `tot1` int(10) NOT NULL,
  `pr` int(10) NOT NULL,
  `pr1` int(10) NOT NULL,
  `tw` int(10) NOT NULL,
  `tw1` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `total1` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `ese`, `ese1`, `ia`, `ia1`, `tot`, `tot1`, `pr`, `pr1`, `tw`, `tw1`, `total`, `total1`) VALUES
(1, 80, 32, 20, 8, 100, 40, 25, 10, 25, 10, 50, 20),
(2, 0, 0, 0, 0, 0, 0, 50, 20, 25, 10, 75, 30),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 50, 20, 0, 0),
(4, 60, 24, 15, 6, 75, 30, 25, 10, 25, 10, 50, 20),
(5, 40, 16, 10, 4, 0, 0, 0, 0, 0, 0, 25, 10);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id1` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gr` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `proctor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id1`, `name`, `gr`, `email`, `password`, `proctor`) VALUES
(31, 'pittu', '1', 'pittu@gmail.com', 'boo', 'sj'),
(32, 'Nishant Pathare', '123', 'nishantpathare5@gmail.com', '123', 'sj'),
(33, 'rc', '7', 'rc@ha', 'rc', 'sj'),
(34, 'Surya Singh', 's1430203', 'suryadon12@gmail.com', '123456', ''),
(35, 'Nitesh Manjarekar', 'S1437209', 'msn96htc@gmail.com', '7896', '');

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE `sem1` (
  `id` int(30) NOT NULL,
  `grno` varchar(111) NOT NULL COMMENT '3',
  `scode1` text NOT NULL,
  `sub1` text NOT NULL,
  `m11` int(10) NOT NULL,
  `g11` int(10) NOT NULL,
  `m12` int(10) NOT NULL,
  `m13` int(10) NOT NULL,
  `m14` int(10) NOT NULL,
  `m15` int(10) NOT NULL,
  `m16` int(10) NOT NULL,
  `scode2` text NOT NULL,
  `sub2` text NOT NULL,
  `m21` int(10) NOT NULL,
  `m22` int(10) NOT NULL,
  `m23` int(10) NOT NULL,
  `m24` int(10) NOT NULL,
  `m25` int(10) NOT NULL,
  `m26` int(10) NOT NULL,
  `scode3` text NOT NULL,
  `sub3` text NOT NULL,
  `m31` int(10) NOT NULL,
  `m32` int(10) NOT NULL,
  `m33` int(10) NOT NULL,
  `m34` int(10) NOT NULL,
  `m35` int(10) NOT NULL,
  `m36` int(10) NOT NULL,
  `scode4` text NOT NULL,
  `sub4` text NOT NULL,
  `m41` int(10) NOT NULL,
  `m42` int(10) NOT NULL,
  `m43` int(10) NOT NULL,
  `m44` int(10) NOT NULL,
  `m45` int(10) NOT NULL,
  `m46` int(10) NOT NULL,
  `scode5` text NOT NULL,
  `sub5` text NOT NULL,
  `m51` int(10) NOT NULL,
  `m52` int(10) NOT NULL,
  `m53` int(10) NOT NULL,
  `m54` int(10) NOT NULL,
  `m55` int(10) NOT NULL,
  `m56` int(10) NOT NULL,
  `scode6` text NOT NULL,
  `sub6` text NOT NULL,
  `m61` int(10) NOT NULL,
  `m62` int(10) NOT NULL,
  `m63` int(10) NOT NULL,
  `m64` int(10) NOT NULL,
  `m65` int(10) NOT NULL,
  `m66` int(10) NOT NULL,
  `tot` int(10) NOT NULL,
  `sgpi` int(10) NOT NULL,
  `result` text NOT NULL,
  `seatno` text NOT NULL,
  `attempt` int(20) NOT NULL,
  `year` int(20) NOT NULL,
  `g12` text NOT NULL,
  `g13` text NOT NULL,
  `g14` text NOT NULL,
  `g15` text NOT NULL,
  `g16` text NOT NULL,
  `g21` text NOT NULL,
  `g22` text NOT NULL,
  `g23` text NOT NULL,
  `g24` text NOT NULL,
  `g25` text NOT NULL,
  `g26` text NOT NULL,
  `g31` text NOT NULL,
  `g32` text NOT NULL,
  `g33` text NOT NULL,
  `g34` text NOT NULL,
  `g35` text NOT NULL,
  `g36` text NOT NULL,
  `g41` text NOT NULL,
  `g42` text NOT NULL,
  `g43` text NOT NULL,
  `g44` text NOT NULL,
  `g45` text NOT NULL,
  `g46` text NOT NULL,
  `g51` text NOT NULL,
  `g52` text NOT NULL,
  `g53` text NOT NULL,
  `g54` text NOT NULL,
  `g55` text NOT NULL,
  `g56` text NOT NULL,
  `g61` text NOT NULL,
  `g62` text NOT NULL,
  `g63` text NOT NULL,
  `g64` text NOT NULL,
  `g65` text NOT NULL,
  `g66` text NOT NULL,
  `c13` text NOT NULL,
  `c16` text NOT NULL,
  `c23` text NOT NULL,
  `c26` text NOT NULL,
  `c33` text NOT NULL,
  `c36` text NOT NULL,
  `c43` text NOT NULL,
  `c46` text NOT NULL,
  `c53` text NOT NULL,
  `c56` text NOT NULL,
  `c63` text NOT NULL,
  `c66` text NOT NULL,
  `gc13` text NOT NULL,
  `gc16` text NOT NULL,
  `gc23` text NOT NULL,
  `gc26` text NOT NULL,
  `gc33` text NOT NULL,
  `gc36` text NOT NULL,
  `gc43` text NOT NULL,
  `gc46` text NOT NULL,
  `gc53` text NOT NULL,
  `gc56` text NOT NULL,
  `gc63` text NOT NULL,
  `gc66` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem1`
--

INSERT INTO `sem1` (`id`, `grno`, `scode1`, `sub1`, `m11`, `g11`, `m12`, `m13`, `m14`, `m15`, `m16`, `scode2`, `sub2`, `m21`, `m22`, `m23`, `m24`, `m25`, `m26`, `scode3`, `sub3`, `m31`, `m32`, `m33`, `m34`, `m35`, `m36`, `scode4`, `sub4`, `m41`, `m42`, `m43`, `m44`, `m45`, `m46`, `scode5`, `sub5`, `m51`, `m52`, `m53`, `m54`, `m55`, `m56`, `scode6`, `sub6`, `m61`, `m62`, `m63`, `m64`, `m65`, `m66`, `tot`, `sgpi`, `result`, `seatno`, `attempt`, `year`, `g12`, `g13`, `g14`, `g15`, `g16`, `g21`, `g22`, `g23`, `g24`, `g25`, `g26`, `g31`, `g32`, `g33`, `g34`, `g35`, `g36`, `g41`, `g42`, `g43`, `g44`, `g45`, `g46`, `g51`, `g52`, `g53`, `g54`, `g55`, `g56`, `g61`, `g62`, `g63`, `g64`, `g65`, `g66`, `c13`, `c16`, `c23`, `c26`, `c33`, `c36`, `c43`, `c46`, `c53`, `c56`, `c63`, `c66`, `gc13`, `gc16`, `gc23`, `gc26`, `gc33`, `gc36`, `gc43`, `gc46`, `gc53`, `gc56`, `gc63`, `gc66`) VALUES
(135, 's1430203', 'fdsgg', 'ggg', 54, 0, 18, 72, 16, 15, 31, 'gfg', 'fn', 0, 0, 0, 0, 0, 0, 'ggg', 'jhkhh', 0, 0, 0, 0, 0, 0, 'ghghghg', 'jhjjh', 0, 0, 0, 0, 0, 0, 'jjgg', 'khhk', 0, 0, 0, 0, 0, 0, 'gjg', 'hkhk', 0, 0, 0, 0, 0, 0, 0, 0, '', '3647634', 1, 0, '', '', '', '', '', '', '', '', '', '', ',', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(136, '123', 'cs1002', 'dd', 78, 0, 18, 96, 19, 24, 43, 'cs1022', 'mp', 76, 19, 95, 19, 19, 38, 'cs920', 'spcc', 79, 19, 98, 21, 23, 44, 'cd23', 'npl', 75, 18, 93, 21, 22, 44, 'cd0299', 'dd', 78, 16, 94, 23, 21, 44, 'cs929', 'se', 75, 12, 87, 21, 22, 43, 0, 0, '', 'A235', 2, 0, 'B', 'O', 'O', 'B', 'A', 'B', 'O', 'A', 'C', 'B', 'O,', 'A', 'B', 'C', 'A', 'B', 'A', 'O', 'C', 'A', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'OAO', 'A', 'O', 'A', '', 'A', '-', '-', '-', '2', '3', '3', '3', '2', '2', '2', '2', '2', '0', '0', '0', '2', '3', '3', '4', '5', '5', '4', '6', '4'),
(137, 'S1437209', 'CPC 501', 'MP', 49, 0, 15, 64, 22, 23, 45, 'CPC 502', 'OS', 60, 17, 77, 24, 24, 48, 'CPC 503', 'SOOAD', 55, 18, 73, 23, 24, 47, 'CPC 504', 'CN', 51, 16, 67, 24, 23, 46, 'CPL 501', 'WTL', 0, 0, 0, 48, 24, 72, 'CPL 502', 'BCE', 0, 0, 0, 0, 48, 48, 588, 9, 'P', 'CS5035', 1, 0, 'A', 'C', 'O', 'O', 'O', 'A', 'O', 'A', 'O', 'O', 'O,', 'C', 'O', 'B', 'O', 'O', 'O', 'C', 'O', 'C', 'O', 'O', 'O', '', '', '', 'O', 'O', 'O', '', '', '', '', 'O', 'O', '4', '1', '4', '1', '4', '1', '4', '1', '', '2', '', '2', '28', '10', '36', '10', '32', '10', '28', '10', '', '20', '', '20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkteachers`
--
ALTER TABLE `checkteachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id1`);

--
-- Indexes for table `sem1`
--
ALTER TABLE `sem1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id1` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `sem1`
--
ALTER TABLE `sem1`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

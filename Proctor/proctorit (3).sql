-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 09:38 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

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
-- Table structure for table `123h1`
--

CREATE TABLE `123h1` (
  `scode1` text NOT NULL,
  `sub1` text NOT NULL,
  `m11` int(10) NOT NULL,
  `m12` int(10) NOT NULL,
  `m13` int(10) NOT NULL,
  `m14` int(10) NOT NULL,
  `m15` int(10) NOT NULL,
  `m16` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `123h1`
--

INSERT INTO `123h1` (`scode1`, `sub1`, `m11`, `m12`, `m13`, `m14`, `m15`, `m16`) VALUES
('cs1002', 'dd', 78, 18, 96, 19, 24, 43);

-- --------------------------------------------------------

--
-- Table structure for table `123h2`
--

CREATE TABLE `123h2` (
  `scode2` text NOT NULL,
  `sub2` text NOT NULL,
  `m21` int(10) NOT NULL,
  `m22` int(10) NOT NULL,
  `m23` int(10) NOT NULL,
  `m24` int(10) NOT NULL,
  `m25` int(10) NOT NULL,
  `m26` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `123h2`
--

INSERT INTO `123h2` (`scode2`, `sub2`, `m21`, `m22`, `m23`, `m24`, `m25`, `m26`) VALUES
('cs1022', 'mp', 76, 19, 95, 19, 19, 38);

-- --------------------------------------------------------

--
-- Table structure for table `123h3`
--

CREATE TABLE `123h3` (
  `scode3` text NOT NULL,
  `sub3` text NOT NULL,
  `m31` int(10) NOT NULL,
  `m32` int(10) NOT NULL,
  `m33` int(10) NOT NULL,
  `m34` int(10) NOT NULL,
  `m35` int(10) NOT NULL,
  `m36` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `123h3`
--

INSERT INTO `123h3` (`scode3`, `sub3`, `m31`, `m32`, `m33`, `m34`, `m35`, `m36`) VALUES
('cs920', 'spcc', 79, 19, 98, 21, 23, 44);

-- --------------------------------------------------------

--
-- Table structure for table `123h4`
--

CREATE TABLE `123h4` (
  `scode4` text NOT NULL,
  `sub4` text NOT NULL,
  `m41` int(10) NOT NULL,
  `m42` int(10) NOT NULL,
  `m43` int(10) NOT NULL,
  `m44` int(10) NOT NULL,
  `m45` int(10) NOT NULL,
  `m46` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `123h4`
--

INSERT INTO `123h4` (`scode4`, `sub4`, `m41`, `m42`, `m43`, `m44`, `m45`, `m46`) VALUES
('cd23', 'npl', 75, 18, 93, 21, 22, 44);

-- --------------------------------------------------------

--
-- Table structure for table `123h5`
--

CREATE TABLE `123h5` (
  `scode5` text NOT NULL,
  `sub5` text NOT NULL,
  `m51` int(10) NOT NULL,
  `m52` int(10) NOT NULL,
  `m53` int(10) NOT NULL,
  `m54` int(10) NOT NULL,
  `m55` int(10) NOT NULL,
  `m56` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `123h5`
--

INSERT INTO `123h5` (`scode5`, `sub5`, `m51`, `m52`, `m53`, `m54`, `m55`, `m56`) VALUES
('cd0299', 'dd', 78, 16, 94, 23, 21, 44);

-- --------------------------------------------------------

--
-- Table structure for table `123h6`
--

CREATE TABLE `123h6` (
  `scode6` text NOT NULL,
  `sub6` text NOT NULL,
  `m61` int(10) NOT NULL,
  `m62` int(10) NOT NULL,
  `m63` int(10) NOT NULL,
  `m64` int(10) NOT NULL,
  `m65` int(10) NOT NULL,
  `m66` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `123h6`
--

INSERT INTO `123h6` (`scode6`, `sub6`, `m61`, `m62`, `m63`, `m64`, `m65`, `m66`) VALUES
('cs929', 'se', 75, 12, 87, 21, 22, 43);

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
-- Table structure for table `checkteachers1`
--

CREATE TABLE `checkteachers1` (
  `id` int(11) NOT NULL,
  `fusername` text NOT NULL,
  `fpassword` text NOT NULL,
  `fname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkteachers1`
--

INSERT INTO `checkteachers1` (`id`, `fusername`, `fpassword`, `fname`) VALUES
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
(60, 's1430203', 'cjahfu', 232, 'fdsf', 'dfsdgs', '12/06/1996', 342576777, 'sdsiod2hfhwfh', '324fdsgheefsg', '3242fdgrdgdj', 'fgdf', 'gfsadf', 'sdfsfgafd', 'dsfdgas', 'fsfadsf', 'dsf@fsf', '77', 'english', 'dfosdhf', '60', 'fgdf', 'dfgdf', 'ab+', 164, 76, 0, '', '', '', '', ''),
(61, '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(62, '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(63, 's1430202', 'comps', 33, 'Rashmi Sahoo', 'rasmi', '1223', 1313, 'n@', 'saf', 'sasd', 'assd', 'qsad', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `h1`
--

CREATE TABLE `h1` (
  `scode1` text NOT NULL,
  `sub1` text NOT NULL,
  `m11` int(10) NOT NULL,
  `m12` int(10) NOT NULL,
  `m13` int(10) NOT NULL,
  `m14` int(10) NOT NULL,
  `m15` int(10) NOT NULL,
  `m16` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `h2`
--

CREATE TABLE `h2` (
  `scode2` text NOT NULL,
  `sub2` text NOT NULL,
  `m21` int(10) NOT NULL,
  `m22` int(10) NOT NULL,
  `m23` int(10) NOT NULL,
  `m24` int(10) NOT NULL,
  `m25` int(10) NOT NULL,
  `m26` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `h3`
--

CREATE TABLE `h3` (
  `scode3` text NOT NULL,
  `sub3` text NOT NULL,
  `m31` int(10) NOT NULL,
  `m32` int(10) NOT NULL,
  `m33` int(10) NOT NULL,
  `m34` int(10) NOT NULL,
  `m35` int(10) NOT NULL,
  `m36` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `h4`
--

CREATE TABLE `h4` (
  `scode4` text NOT NULL,
  `sub4` text NOT NULL,
  `m41` int(10) NOT NULL,
  `m42` int(10) NOT NULL,
  `m43` int(10) NOT NULL,
  `m44` int(10) NOT NULL,
  `m45` int(10) NOT NULL,
  `m46` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `h5`
--

CREATE TABLE `h5` (
  `scode5` text NOT NULL,
  `sub5` text NOT NULL,
  `m51` int(10) NOT NULL,
  `m52` int(10) NOT NULL,
  `m53` int(10) NOT NULL,
  `m54` int(10) NOT NULL,
  `m55` int(10) NOT NULL,
  `m56` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `h6`
--

CREATE TABLE `h6` (
  `scode6` text NOT NULL,
  `sub6` text NOT NULL,
  `m61` int(10) NOT NULL,
  `m62` int(10) NOT NULL,
  `m63` int(10) NOT NULL,
  `m64` int(10) NOT NULL,
  `m65` int(10) NOT NULL,
  `m66` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(51, 'Nishant Pathare', 's1430185', 'nishantpathare5@gmail.com', 'nish', ''),
(52, 'Rachana Yadav', '123', 'rc@gmail.com', '123', ''),
(53, 'rashmi', 's1430202', 'rashmi@sahoo', 'rashmi', ''),
(54, 'Nishant Pathare', 's143020', 'nishantpathare5@gmail.com', 'np', '');

-- --------------------------------------------------------

--
-- Table structure for table `s1430185h1`
--

CREATE TABLE `s1430185h1` (
  `scode1` text NOT NULL,
  `sub1` text NOT NULL,
  `m11` int(10) NOT NULL,
  `m12` int(10) NOT NULL,
  `m13` int(10) NOT NULL,
  `m14` int(10) NOT NULL,
  `m15` int(10) NOT NULL,
  `m16` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s1430185h2`
--

CREATE TABLE `s1430185h2` (
  `scode2` text NOT NULL,
  `sub2` text NOT NULL,
  `m21` int(10) NOT NULL,
  `m22` int(10) NOT NULL,
  `m23` int(10) NOT NULL,
  `m24` int(10) NOT NULL,
  `m25` int(10) NOT NULL,
  `m26` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s1430185h3`
--

CREATE TABLE `s1430185h3` (
  `scode3` text NOT NULL,
  `sub3` text NOT NULL,
  `m31` int(10) NOT NULL,
  `m32` int(10) NOT NULL,
  `m33` int(10) NOT NULL,
  `m34` int(10) NOT NULL,
  `m35` int(10) NOT NULL,
  `m36` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s1430185h4`
--

CREATE TABLE `s1430185h4` (
  `scode4` text NOT NULL,
  `sub4` text NOT NULL,
  `m41` int(10) NOT NULL,
  `m42` int(10) NOT NULL,
  `m43` int(10) NOT NULL,
  `m44` int(10) NOT NULL,
  `m45` int(10) NOT NULL,
  `m46` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s1430185h5`
--

CREATE TABLE `s1430185h5` (
  `scode5` text NOT NULL,
  `sub5` text NOT NULL,
  `m51` int(10) NOT NULL,
  `m52` int(10) NOT NULL,
  `m53` int(10) NOT NULL,
  `m54` int(10) NOT NULL,
  `m55` int(10) NOT NULL,
  `m56` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s1430185h6`
--

CREATE TABLE `s1430185h6` (
  `scode6` text NOT NULL,
  `sub6` text NOT NULL,
  `m61` int(10) NOT NULL,
  `m62` int(10) NOT NULL,
  `m63` int(10) NOT NULL,
  `m64` int(10) NOT NULL,
  `m65` int(10) NOT NULL,
  `m66` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s1430202h1`
--

CREATE TABLE `s1430202h1` (
  `scode1` text NOT NULL,
  `sub1` text NOT NULL,
  `m11` int(10) NOT NULL,
  `m12` int(10) NOT NULL,
  `m13` int(10) NOT NULL,
  `m14` int(10) NOT NULL,
  `m15` int(10) NOT NULL,
  `m16` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s1430202h1`
--

INSERT INTO `s1430202h1` (`scode1`, `sub1`, `m11`, `m12`, `m13`, `m14`, `m15`, `m16`) VALUES
('s123', 'microprocessor', 23, 3, 26, 21, 0, 21);

-- --------------------------------------------------------

--
-- Table structure for table `s1430202h2`
--

CREATE TABLE `s1430202h2` (
  `scode2` text NOT NULL,
  `sub2` text NOT NULL,
  `m21` int(10) NOT NULL,
  `m22` int(10) NOT NULL,
  `m23` int(10) NOT NULL,
  `m24` int(10) NOT NULL,
  `m25` int(10) NOT NULL,
  `m26` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s1430202h2`
--

INSERT INTO `s1430202h2` (`scode2`, `sub2`, `m21`, `m22`, `m23`, `m24`, `m25`, `m26`) VALUES
('s234', 'dd', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `s1430202h3`
--

CREATE TABLE `s1430202h3` (
  `scode3` text NOT NULL,
  `sub3` text NOT NULL,
  `m31` int(10) NOT NULL,
  `m32` int(10) NOT NULL,
  `m33` int(10) NOT NULL,
  `m34` int(10) NOT NULL,
  `m35` int(10) NOT NULL,
  `m36` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s1430202h3`
--

INSERT INTO `s1430202h3` (`scode3`, `sub3`, `m31`, `m32`, `m33`, `m34`, `m35`, `m36`) VALUES
('s333', 'spm', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `s1430202h4`
--

CREATE TABLE `s1430202h4` (
  `scode4` text NOT NULL,
  `sub4` text NOT NULL,
  `m41` int(10) NOT NULL,
  `m42` int(10) NOT NULL,
  `m43` int(10) NOT NULL,
  `m44` int(10) NOT NULL,
  `m45` int(10) NOT NULL,
  `m46` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s1430202h4`
--

INSERT INTO `s1430202h4` (`scode4`, `sub4`, `m41`, `m42`, `m43`, `m44`, `m45`, `m46`) VALUES
('s213s', 'se', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `s1430202h5`
--

CREATE TABLE `s1430202h5` (
  `scode5` text NOT NULL,
  `sub5` text NOT NULL,
  `m51` int(10) NOT NULL,
  `m52` int(10) NOT NULL,
  `m53` int(10) NOT NULL,
  `m54` int(10) NOT NULL,
  `m55` int(10) NOT NULL,
  `m56` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s1430202h5`
--

INSERT INTO `s1430202h5` (`scode5`, `sub5`, `m51`, `m52`, `m53`, `m54`, `m55`, `m56`) VALUES
('s23', 'asd', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `s1430202h6`
--

CREATE TABLE `s1430202h6` (
  `scode6` text NOT NULL,
  `sub6` text NOT NULL,
  `m61` int(10) NOT NULL,
  `m62` int(10) NOT NULL,
  `m63` int(10) NOT NULL,
  `m64` int(10) NOT NULL,
  `m65` int(10) NOT NULL,
  `m66` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s1430202h6`
--

INSERT INTO `s1430202h6` (`scode6`, `sub6`, `m61`, `m62`, `m63`, `m64`, `m65`, `m66`) VALUES
('234', '', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `s1430203h1`
--

CREATE TABLE `s1430203h1` (
  `scode1` text NOT NULL,
  `sub1` text NOT NULL,
  `m11` int(10) NOT NULL,
  `m12` int(10) NOT NULL,
  `m13` int(10) NOT NULL,
  `m14` int(10) NOT NULL,
  `m15` int(10) NOT NULL,
  `m16` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s1430203h1`
--

INSERT INTO `s1430203h1` (`scode1`, `sub1`, `m11`, `m12`, `m13`, `m14`, `m15`, `m16`) VALUES
('fdsgg', 'ggg', 54, 18, 72, 16, 15, 31);

-- --------------------------------------------------------

--
-- Table structure for table `s1430203h2`
--

CREATE TABLE `s1430203h2` (
  `scode2` text NOT NULL,
  `sub2` text NOT NULL,
  `m21` int(10) NOT NULL,
  `m22` int(10) NOT NULL,
  `m23` int(10) NOT NULL,
  `m24` int(10) NOT NULL,
  `m25` int(10) NOT NULL,
  `m26` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s1430203h2`
--

INSERT INTO `s1430203h2` (`scode2`, `sub2`, `m21`, `m22`, `m23`, `m24`, `m25`, `m26`) VALUES
('gfg', 'fn', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `s1430203h3`
--

CREATE TABLE `s1430203h3` (
  `scode3` text NOT NULL,
  `sub3` text NOT NULL,
  `m31` int(10) NOT NULL,
  `m32` int(10) NOT NULL,
  `m33` int(10) NOT NULL,
  `m34` int(10) NOT NULL,
  `m35` int(10) NOT NULL,
  `m36` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s1430203h3`
--

INSERT INTO `s1430203h3` (`scode3`, `sub3`, `m31`, `m32`, `m33`, `m34`, `m35`, `m36`) VALUES
('ggg', 'jhkhh', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `s1430203h4`
--

CREATE TABLE `s1430203h4` (
  `scode4` text NOT NULL,
  `sub4` text NOT NULL,
  `m41` int(10) NOT NULL,
  `m42` int(10) NOT NULL,
  `m43` int(10) NOT NULL,
  `m44` int(10) NOT NULL,
  `m45` int(10) NOT NULL,
  `m46` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s1430203h4`
--

INSERT INTO `s1430203h4` (`scode4`, `sub4`, `m41`, `m42`, `m43`, `m44`, `m45`, `m46`) VALUES
('ghghghg', 'jhjjh', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `s1430203h5`
--

CREATE TABLE `s1430203h5` (
  `scode5` text NOT NULL,
  `sub5` text NOT NULL,
  `m51` int(10) NOT NULL,
  `m52` int(10) NOT NULL,
  `m53` int(10) NOT NULL,
  `m54` int(10) NOT NULL,
  `m55` int(10) NOT NULL,
  `m56` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s1430203h5`
--

INSERT INTO `s1430203h5` (`scode5`, `sub5`, `m51`, `m52`, `m53`, `m54`, `m55`, `m56`) VALUES
('jjgg', 'khhk', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `s1430203h6`
--

CREATE TABLE `s1430203h6` (
  `scode6` text NOT NULL,
  `sub6` text NOT NULL,
  `m61` int(10) NOT NULL,
  `m62` int(10) NOT NULL,
  `m63` int(10) NOT NULL,
  `m64` int(10) NOT NULL,
  `m65` int(10) NOT NULL,
  `m66` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s1430203h6`
--

INSERT INTO `s1430203h6` (`scode6`, `sub6`, `m61`, `m62`, `m63`, `m64`, `m65`, `m66`) VALUES
('gjg', 'hkhk', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `s1437209h1`
--

CREATE TABLE `s1437209h1` (
  `scode1` text NOT NULL,
  `sub1` text NOT NULL,
  `m11` int(10) NOT NULL,
  `m12` int(10) NOT NULL,
  `m13` int(10) NOT NULL,
  `m14` int(10) NOT NULL,
  `m15` int(10) NOT NULL,
  `m16` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s1437209h2`
--

CREATE TABLE `s1437209h2` (
  `scode2` text NOT NULL,
  `sub2` text NOT NULL,
  `m21` int(10) NOT NULL,
  `m22` int(10) NOT NULL,
  `m23` int(10) NOT NULL,
  `m24` int(10) NOT NULL,
  `m25` int(10) NOT NULL,
  `m26` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s1437209h3`
--

CREATE TABLE `s1437209h3` (
  `scode3` text NOT NULL,
  `sub3` text NOT NULL,
  `m31` int(10) NOT NULL,
  `m32` int(10) NOT NULL,
  `m33` int(10) NOT NULL,
  `m34` int(10) NOT NULL,
  `m35` int(10) NOT NULL,
  `m36` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s1437209h4`
--

CREATE TABLE `s1437209h4` (
  `scode4` text NOT NULL,
  `sub4` text NOT NULL,
  `m41` int(10) NOT NULL,
  `m42` int(10) NOT NULL,
  `m43` int(10) NOT NULL,
  `m44` int(10) NOT NULL,
  `m45` int(10) NOT NULL,
  `m46` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s1437209h5`
--

CREATE TABLE `s1437209h5` (
  `scode5` text NOT NULL,
  `sub5` text NOT NULL,
  `m51` int(10) NOT NULL,
  `m52` int(10) NOT NULL,
  `m53` int(10) NOT NULL,
  `m54` int(10) NOT NULL,
  `m55` int(10) NOT NULL,
  `m56` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s1437209h6`
--

CREATE TABLE `s1437209h6` (
  `scode6` text NOT NULL,
  `sub6` text NOT NULL,
  `m61` int(10) NOT NULL,
  `m62` int(10) NOT NULL,
  `m63` int(10) NOT NULL,
  `m64` int(10) NOT NULL,
  `m65` int(10) NOT NULL,
  `m66` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `remark` text NOT NULL,
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

INSERT INTO `sem1` (`id`, `grno`, `scode1`, `sub1`, `m11`, `g11`, `m12`, `m13`, `m14`, `m15`, `m16`, `scode2`, `sub2`, `m21`, `m22`, `m23`, `m24`, `m25`, `m26`, `scode3`, `sub3`, `m31`, `m32`, `m33`, `m34`, `m35`, `m36`, `scode4`, `sub4`, `m41`, `m42`, `m43`, `m44`, `m45`, `m46`, `scode5`, `sub5`, `m51`, `m52`, `m53`, `m54`, `m55`, `m56`, `scode6`, `sub6`, `m61`, `m62`, `m63`, `m64`, `m65`, `m66`, `tot`, `sgpi`, `result`, `seatno`, `attempt`, `year`, `remark`, `g12`, `g13`, `g14`, `g15`, `g16`, `g21`, `g22`, `g23`, `g24`, `g25`, `g26`, `g31`, `g32`, `g33`, `g34`, `g35`, `g36`, `g41`, `g42`, `g43`, `g44`, `g45`, `g46`, `g51`, `g52`, `g53`, `g54`, `g55`, `g56`, `g61`, `g62`, `g63`, `g64`, `g65`, `g66`, `c13`, `c16`, `c23`, `c26`, `c33`, `c36`, `c43`, `c46`, `c53`, `c56`, `c63`, `c66`, `gc13`, `gc16`, `gc23`, `gc26`, `gc33`, `gc36`, `gc43`, `gc46`, `gc53`, `gc56`, `gc63`, `gc66`) VALUES
(135, 's1430203', 'fdsgg', 'ggg', 54, 0, 18, 72, 16, 15, 31, 'gfg', 'fn', 0, 0, 0, 0, 0, 0, 'ggg', 'jhkhh', 0, 0, 0, 0, 0, 0, 'ghghghg', 'jhjjh', 0, 0, 0, 0, 0, 0, 'jjgg', 'khhk', 0, 0, 0, 0, 0, 0, 'gjg', 'hkhk', 0, 0, 0, 0, 0, 0, 0, 0, '', '3647634', 1, 0, '', '', '', '', '', '', '', '', '', '', '', ',', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(136, '123', 'cs1002', 'dd', 78, 0, 18, 96, 19, 24, 43, 'cs1022', 'mp', 76, 19, 95, 19, 19, 38, 'cs920', 'spcc', 79, 19, 98, 21, 23, 44, 'cd23', 'npl', 75, 18, 93, 21, 22, 44, 'cd0299', 'dd', 78, 16, 94, 23, 21, 44, 'cs929', 'se', 75, 12, 87, 21, 22, 43, 0, 0, '', 'A235', 2, 0, '', 'B', 'O', 'O', 'B', 'A', 'B', 'O', 'A', 'C', 'B', 'O,', 'A', 'B', 'C', 'A', 'B', 'A', 'O', 'C', 'A', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'OAO', 'A', 'O', 'A', '', 'A', '-', '-', '-', '2', '3', '3', '3', '2', '2', '2', '2', '2', '0', '0', '0', '2', '3', '3', '4', '5', '5', '4', '6', '4'),
(137, '123', '', '', 23, 0, 44, 67, 22, 21, 43, '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 5, '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', ',', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '23', '23', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(138, '123', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', ',', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(139, 's1430202', 's123', 'microprocessor', 23, 0, 3, 26, 21, 0, 21, 's234', 'dd', 0, 0, 0, 0, 0, 0, 's333', 'spm', 0, 0, 0, 0, 0, 0, 's213s', 'se', 0, 0, 0, 0, 0, 0, 's23', 'asd', 0, 0, 0, 0, 0, 0, '234', '', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 2, 0, '', '', '', '', '', '', '', '', '', '', '', ',', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(140, 's143020', 's12', 'microprocessor', 65, 0, 18, 83, 21, 21, 42, 's23', 'dd', 67, 2, 69, 23, 2, 25, 's24', 'spm', 21, 21, 42, 21, 23, 44, 's334', 'se', 78, 19, 97, 21, 21, 42, 's34', 'npl', 56, 2, 58, 21, 12, 33, 's34', 'spm', 67, 6, 73, 21, 12, 33, 0, 7, '', 's143020', 1, 0, '', 'O', 'B', 'A', 'B', 'A', 'A', 'O', 'A', 'A', 'B', 'C,', 'A', 'C', 'B', 'A', 'A', 'B', 'A', 'O', 'O', 'A', 'B', 'A', 'A', 'B', 'B', 'C', 'A', 'B', 'A', 'O', 'B', 'A', 'B', 'A', '-', '1', '2', '1', '1', '3', '3', '1', '1', '2', '3', '1', '8', '9', '3', '4', '2', '6', '7', '4', '6', '3', '7', '2'),
(141, 's143020', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', ',', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkteachers1`
--
ALTER TABLE `checkteachers1`
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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id1` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `sem1`
--
ALTER TABLE `sem1`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

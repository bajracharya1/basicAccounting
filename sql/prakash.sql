-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2015 at 08:40 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prakash`
--

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
`ID` int(11) NOT NULL,
  `Dept` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`ID`, `Dept`) VALUES
(32, 'Candy'),
(33, 'Candy'),
(34, 'Candy'),
(35, 'Soda'),
(36, 'Office Supplies');

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE IF NOT EXISTS `exp` (
`ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Acc` varchar(255) NOT NULL,
  `Amt` decimal(11,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`ID`, `Date`, `Acc`, `Amt`) VALUES
(13, '0000-00-00', 'Candy', '123.00'),
(14, '0000-00-00', 'Soda', '215.00'),
(15, '0000-00-00', 'Candy', '111.00'),
(16, '0000-00-00', 'Soda', '50.00'),
(17, '2015-05-14', 'Candy', '52.00'),
(18, '2015-05-14', 'Grocery', '254.00');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE IF NOT EXISTS `income` (
`ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Acc` varchar(255) NOT NULL,
  `Amt` decimal(11,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`ID`, `Date`, `Acc`, `Amt`) VALUES
(35, '0000-00-00', 'Candy', '123.00'),
(36, '0000-00-00', 'Candy', '123.00'),
(37, '0000-00-00', 'Soda', '125.00'),
(38, '0000-00-00', 'Candy', '111.00'),
(39, '0000-00-00', 'Gas', '111.00'),
(40, '2015-05-14', 'Candy', '11.00'),
(41, '2015-05-14', 'Candy', '47.00'),
(42, '2015-05-14', 'Soda', '25.00');

-- --------------------------------------------------------

--
-- Table structure for table `off_exp`
--

CREATE TABLE IF NOT EXISTS `off_exp` (
`ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Acc` varchar(255) NOT NULL,
  `Amt` decimal(11,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `off_exp`
--

INSERT INTO `off_exp` (`ID`, `Date`, `Acc`, `Amt`) VALUES
(1, '0000-00-00', 'Office Supplies', '25.00'),
(2, '0000-00-00', 'Auto Expenses', '25.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `exp`
--
ALTER TABLE `exp`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `off_exp`
--
ALTER TABLE `off_exp`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `exp`
--
ALTER TABLE `exp`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `off_exp`
--
ALTER TABLE `off_exp`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

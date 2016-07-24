-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2016 at 09:56 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katalyst`
--

-- --------------------------------------------------------

--
-- Table structure for table `mapping`
--

CREATE TABLE IF NOT EXISTS `mapping` (
  `mentor_username` varchar(255) NOT NULL,
  `mentee_username` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `no_of_meet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapping`
--

INSERT INTO `mapping` (`mentor_username`, `mentee_username`, `score`, `no_of_meet`) VALUES
('sans', 'gaurav', 9, 1),
('sans', 'tj', 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE IF NOT EXISTS `meeting` (
  `serialno` int(11) NOT NULL,
  `mentor_name` varchar(256) NOT NULL,
  `metee_name` varchar(256) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `location` varchar(256) NOT NULL,
  `approved` int(11) NOT NULL,
  `completed` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`serialno`, `mentor_name`, `metee_name`, `time`, `date`, `location`, `approved`, `completed`) VALUES
(1, 'sans', 'tj', '13:00:00', '2016-07-30', 'Mumbai', 0, 0),
(2, 'sans', 'gaurav', '13:00:00', '2016-07-28', 'Banglore', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `serialno` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `dob` date NOT NULL,
  `location` varchar(256) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `qualification` varchar(256) NOT NULL,
  `college` varchar(256) NOT NULL,
  `company` varchar(256) NOT NULL,
  `designation` varchar(256) NOT NULL,
  `compAddr` varchar(256) NOT NULL,
  `field` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `role` varchar(256) NOT NULL,
  `confirmation` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`serialno`, `name`, `dob`, `location`, `mobile`, `email`, `username`, `password`, `address`, `qualification`, `college`, `company`, `designation`, `compAddr`, `field`, `gender`, `role`, `confirmation`) VALUES
(1, 'gaurav', '0000-00-00', 'Mumbai', 2147483647, 'first', 'FirstUsername', 'firstpass', 'malad', 'bca', 'kjsom', 'jp', 'vp', 'powai', 'tempfield', 'f', 'Mentee', 0),
(2, 'snas', '0000-00-00', 'banglore', 2147483647, 'second', 'SecondUsername', 'secondpass', 'dadar', 'mca', 'djsang', 'boa', 'avp', 'prism', 'sectemp', 'm', 'Mentor', 1),
(3, 'tejal', '2016-07-19', 'mumbai', 985293203, 'dssh@hdh.com', 'tj', 'tj123', 'fhdfh', 'dfdjf', 'djsfjd', 'djfdfj', 'djfsj', 'kdsdsk', 'ffdd', 'f', 'mentee', 1),
(4, 'sans', '2002-07-11', 'ds', 1234567890, 'sanskrutirahulshah@gmail.com', 'sans', '1234', 'fgsd', 'dhsdh', 'jdjds', 'dfsdj', 'sdjdsj', 'sfjs', 'sjjs', 'F', 'Mentor', 1),
(6, 'Gaurav', '2002-07-11', 'banglore', 1234567890, 'gaurav@hotmail.com', 'gauravm', '123456', 'bangalore', 'ME', 'PES', 'JP', 'VP', 'mumbai', 'Engg', 'F', 'Mentor', 1),
(7, '', '0000-00-00', '', 0, '', 'admin', 'admin', '', '', '', '', '', '', '', '', '', 0),
(10, 'gaurav', '0000-00-00', 'Mumbai', 2147483647, 'first', 'FirstUsername1', 'firstpass', 'malad', 'bca', 'kjsom', 'jp', 'vp', 'powai', 'tempfield', 'f', 'firstrole', 1),
(11, 'snas', '0000-00-00', 'banglore', 2147483647, 'second', 'SecondUsername1', 'secondpass', 'dadar', 'mca', 'djsang', 'boa', 'avp', 'prism', 'sectemp', 'm', 'secondrole', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`serialno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`serialno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `serialno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `serialno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2016 at 11:25 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`serialno`, `name`, `dob`, `location`, `mobile`, `email`, `username`, `password`, `address`, `qualification`, `college`, `company`, `designation`, `compAddr`, `field`, `gender`, `role`, `confirmation`) VALUES
(1, 'gaurav', '0000-00-00', 'Mumbai', 2147483647, 'first', 'FirstUsername', 'firstpass', 'malad', 'bca', 'kjsom', 'jp', 'vp', 'powai', 'tempfield', 'f', 'firstrole', 0),
(2, 'snas', '0000-00-00', 'banglore', 2147483647, 'second', 'SecondUsername', 'secondpass', 'dadar', 'mca', 'djsang', 'boa', 'avp', 'prism', 'sectemp', 'm', 'secondrole', 1);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `serialno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

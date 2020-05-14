-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 06:11 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `innocent`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `c_id` int(4) NOT NULL,
  `c_department` varchar(30) NOT NULL,
  `c_course` varchar(40) NOT NULL,
  `c_fees` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `c_department`, `c_course`, `c_fees`) VALUES
(1, 'IT', 'BCA', 25000),
(2, 'IT', 'MCA', 40000),
(3, 'Management', 'BBA', 23000),
(4, 'Management', 'MBA', 40000),
(5, 'Hotel Management', 'B.Sc. (HM)', 24000),
(6, 'Hotel Management', 'ATHM', 30000),
(7, 'Agriculture', 'B.Sc. (Agr)', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `d_id` int(4) NOT NULL,
  `d_userid` int(4) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `d_gender` varchar(10) NOT NULL,
  `d_mobile` bigint(10) NOT NULL,
  `d_email` varchar(30) NOT NULL,
  `d_address` varchar(50) NOT NULL,
  `d_pincode` int(6) NOT NULL,
  `d_department` varchar(20) NOT NULL,
  `d_course` varchar(30) NOT NULL,
  `d_hostel` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`d_id`, `d_userid`, `d_name`, `d_gender`, `d_mobile`, `d_email`, `d_address`, `d_pincode`, `d_department`, `d_course`, `d_hostel`) VALUES
(19, 19, 'Loveleen Kaur', 'female', 9501423386, 'loveleen@gmail.com', 'Jalandhar', 144001, 'IT', 'MCA', 'no'),
(20, 20, 'Pranav Kumar', 'male', 7009253096, 'pranav@gmail.com', 'Ludhiana', 144002, 'IT', 'MCA', 'yes'),
(21, 21, 'Kamalpreet Kaur', 'female', 9876523489, 'kamalpreet@gmail.com', 'Jalandhar', 144009, 'Management', 'MCA', 'no'),
(22, 16, 'Gurpreet', 'male', 1234567890, 'gurpreet@gmail.com', 'Jal', 144001, 'IT', 'MCA', 'yes'),
(23, 16, 'Yashika', 'female', 1234567890, 'yashika@gmail.com', 'Jal', 144001, 'Management', '', 'no'),
(24, 16, 'aaa', 'female', 1234567890, 'aaa@gmail.com', 'Jal', 144001, 'Hotel Management', 'ATHM', 'no'),
(25, 20, 'snnk', 'female', 1234567890, 'hh@jj.com', 'knsn', 0, 'Management', 'BBA', 'no'),
(26, 24, 'gurpreet singh', 'male', 8798787987, 'gpsihgi@gmail.com', 'kyudassa', 144005, 'IT', 'MCA', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `t_id` int(4) NOT NULL,
  `t_userid` int(4) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `t_mobile` bigint(10) NOT NULL,
  `t_department` varchar(30) NOT NULL,
  `t_course` varchar(40) NOT NULL,
  `t_status` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`t_id`, `t_userid`, `t_name`, `t_mobile`, `t_department`, `t_course`, `t_status`) VALUES
(32, 31, 'abcd', 1234567890, 'IT', 'BCA', 'draft'),
(33, 32, 'abc', 1234567890, 'Management', 'BBA', 'draft');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `d_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `t_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

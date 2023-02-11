-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2018 at 04:51 PM
-- Server version: 5.5.22
-- PHP Version: 5.4.0beta2-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sagy`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhar_master`
--

CREATE TABLE IF NOT EXISTS `aadhar_master` (
  `aadhar_number` bigint(40) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone_no` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pin_code` int(40) NOT NULL,
  PRIMARY KEY (`aadhar_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, '', '', ''),
(2, 'nandini', 'ygsdha@dysh.diuh', 'wudygsh');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `complain_id` int(20) NOT NULL AUTO_INCREMENT,
  `complain_desc` varchar(100) NOT NULL,
  `complain_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `complain_image` varchar(100) NOT NULL,
  `complain_status` int(40) NOT NULL,
  `officer_id` int(40) NOT NULL,
  PRIMARY KEY (`complain_id`),
  KEY `officer_id` (`officer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mpinfo`
--

CREATE TABLE IF NOT EXISTS `mpinfo` (
  `mp_id` int(20) NOT NULL AUTO_INCREMENT,
  `mp_name` char(20) NOT NULL,
  `village` varchar(20) NOT NULL,
  `consituency` varchar(20) NOT NULL,
  `scheme_id_string` int(20) NOT NULL,
  `age` int(220) NOT NULL,
  `gender` char(20) NOT NULL,
  `score` int(20) NOT NULL DEFAULT '0',
  `addhar_no` bigint(20) NOT NULL,
  PRIMARY KEY (`mp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `mpinfo`
--

INSERT INTO `mpinfo` (`mp_id`, `mp_name`, `village`, `consituency`, `scheme_id_string`, `age`, `gender`, `score`, `addhar_no`) VALUES
(6, 'sourabh karmakar', 'nahi milega aapko', 'wued', 3243, 422, 'Male', 0, 98765432123),
(7, 'ruju patel', 'bhimpor', 'efr3', 324322222, 200, 'Female', 0, 98765432123),
(8, 'abhinity merai', 'rampur', 'efr3', 324322222, 512, 'Female', 0, 98765432123),
(9, 'nandii', 'saj', 'qwusj', 76798, 7689, 'tghg', 0, 8724853606),
(12, 'yhgkj', 'yhgj', '6788ggngf', 4565756, 456456, 'ghj', 0, 23536),
(13, 'yhgkj', 'yhgj', '6788ggngf', 4565756, 456456, 'ghj', 0, 23536),
(14, 'hjnk', 'ytyhjmn', 'dfghj', 6789, 6768, 'ghjk', 0, 789);

-- --------------------------------------------------------

--
-- Table structure for table `mps`
--

CREATE TABLE IF NOT EXISTS `mps` (
  `mp_id` int(40) NOT NULL,
  `village_id` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `constituency` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `scheme_id_string` varchar(40) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `score` int(20) NOT NULL,
  PRIMARY KEY (`mp_id`),
  KEY `village_id` (`village_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nodal_info`
--

CREATE TABLE IF NOT EXISTS `nodal_info` (
  `nodal_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  `village_name` varchar(20) NOT NULL,
  `village_pincode` bigint(20) NOT NULL,
  `addhar_no` bigint(20) NOT NULL,
  PRIMARY KEY (`nodal_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nodal_info`
--

INSERT INTO `nodal_info` (`nodal_id`, `name`, `village_name`, `village_pincode`, `addhar_no`) VALUES
(1, 'nandini', 'ghhjnhgbn', 768, 765768);

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE IF NOT EXISTS `officer` (
  `officer_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `village_id` int(20) NOT NULL,
  `constituency` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(40) NOT NULL,
  PRIMARY KEY (`officer_id`),
  KEY `village_id` (`village_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE IF NOT EXISTS `scheme` (
  `scheme_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL,
  `scheme_budget` int(20) NOT NULL,
  `document` varchar(20) NOT NULL,
  `Q_A` varchar(20) NOT NULL,
  PRIMARY KEY (`scheme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_feed_back`
--

CREATE TABLE IF NOT EXISTS `user_feed_back` (
  `feed_back_id` int(20) NOT NULL,
  `aadhar_number` bigint(20) NOT NULL,
  `scheme_id` int(20) NOT NULL,
  `mp_id` int(20) NOT NULL,
  `village_id` int(20) NOT NULL,
  `feed_desc` varchar(100) NOT NULL,
  `point` int(20) NOT NULL,
  `point_string` varchar(100) NOT NULL,
  PRIMARY KEY (`feed_back_id`),
  KEY `aadhar_number` (`aadhar_number`),
  KEY `scheme_id` (`scheme_id`),
  KEY `mp_id` (`mp_id`),
  KEY `village_id` (`village_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE IF NOT EXISTS `village` (
  `village_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pin_code` int(20) NOT NULL,
  `population` int(20) NOT NULL,
  `male` int(20) NOT NULL,
  `female` int(20) NOT NULL,
  `area` float NOT NULL,
  `school_children` int(20) NOT NULL,
  `school_male` int(20) NOT NULL,
  `school_female` int(20) NOT NULL,
  `hospital` int(20) NOT NULL,
  `school_gov` int(20) NOT NULL,
  `school_pvt` int(20) NOT NULL,
  `vdp_link` varchar(20) NOT NULL,
  `scheme_id_string` varchar(20) NOT NULL,
  `km_road` float NOT NULL,
  PRIMARY KEY (`village_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `complain_ibfk_1` FOREIGN KEY (`officer_id`) REFERENCES `officer` (`officer_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

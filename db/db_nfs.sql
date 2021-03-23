-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 06:49 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_nfs`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
`bank_id` int(11) NOT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `bank_location` text
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_name`, `bank_location`) VALUES
(2, 'Bank', 'Banko Silay'),
(3, 'UCPB', 'Bacolod City');

-- --------------------------------------------------------

--
-- Table structure for table `brand_new`
--

CREATE TABLE IF NOT EXISTS `brand_new` (
`brand_id` int(11) NOT NULL,
  `insurer` varchar(100) DEFAULT NULL,
  `ins_coverage` text,
  `delivery_date` varchar(20) DEFAULT NULL,
  `conduction_sticker` text,
  `unit` text,
  `bank_id` int(11) NOT NULL DEFAULT '0',
  `policy_no` varchar(100) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `date_paid` varchar(20) DEFAULT NULL,
  `client_name` text,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `date_encoded` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand_new`
--

INSERT INTO `brand_new` (`brand_id`, `insurer`, `ins_coverage`, `delivery_date`, `conduction_sticker`, `unit`, `bank_id`, `policy_no`, `amount`, `date_paid`, `client_name`, `image1`, `image2`, `image3`, `user_id`, `date_encoded`) VALUES
(1, 'CENPRI', '100 years', '2020-11-18', '123456', 'pc/s', 2, 'None', '100000.00', '2020-11-18', 'Stephine Severino', '1-1.png', '2-2.png', '3-3.png', 0, NULL),
(4, 'CALAPAN1', 'Insurance Truck1', '2020-11-20', 'Sticker123451', 'Unitop1', 3, 'Policy 1231', '2000001.00', '2020-11-20', 'Trial1', 'ERD-CIANOS-1.png', 'Desert-2.jpg', 'Jellyfish-3.jpg', 0, NULL),
(5, 'ENERGREEN', 'Insurance Truck', '2020-11-19', 'Sticker12345', 'Unitop', 2, 'Policy Act 32', '50000.00', '2020-11-19', 'Test', 'after_save-1.PNG', 'after_save_details-2.PNG', 'enter_new-3.PNG', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_data`
--

CREATE TABLE IF NOT EXISTS `client_data` (
`client_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL DEFAULT '0',
  `brand` varchar(100) DEFAULT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `plate_no` varchar(50) DEFAULT NULL,
  `contact` text,
  `insurance` text,
  `expiry` varchar(20) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `date_encoded` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_data`
--

INSERT INTO `client_data` (`client_id`, `brand_id`, `brand`, `unit`, `plate_no`, `contact`, `insurance`, `expiry`, `user_id`, `date_encoded`) VALUES
(1, 1, 'BrandX1', 'Unit', 'Plate', 'Contact', 'Insurance Car111', '2020-11-19', 0, NULL),
(2, 5, 'BrandY', 'Unity', 'xls-3030-56', '0912251982', 'Insurancer of all', '2020-11-22', 1, '2020-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `insurer`
--

CREATE TABLE IF NOT EXISTS `insurer` (
`insurer_id` int(11) NOT NULL,
  `insurer_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurer`
--

INSERT INTO `insurer` (`insurer_id`, `insurer_name`) VALUES
(2, 'CENPRI');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `usertype` int(11) NOT NULL DEFAULT '0',
  `fullname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `usertype`, `fullname`) VALUES
(1, 'admin', 'admin', 1, 'Admin'),
(3, 'tep', '1234', 2, 'Stephine');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
 ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `brand_new`
--
ALTER TABLE `brand_new`
 ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `client_data`
--
ALTER TABLE `client_data`
 ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `insurer`
--
ALTER TABLE `insurer`
 ADD PRIMARY KEY (`insurer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `brand_new`
--
ALTER TABLE `brand_new`
MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `client_data`
--
ALTER TABLE `client_data`
MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `insurer`
--
ALTER TABLE `insurer`
MODIFY `insurer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

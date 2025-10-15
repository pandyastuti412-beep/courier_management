-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 04, 2024 at 05:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_parcel`
--

DROP TABLE IF EXISTS `add_parcel`;
CREATE TABLE IF NOT EXISTS `add_parcel` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `refrenceno` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sendername` varchar(50) NOT NULL,
  `senderaddress` varchar(100) NOT NULL,
  `sendercontact` int(10) NOT NULL,
  `sandercity` varchar(50) NOT NULL,
  `recivername` varchar(50) NOT NULL,
  `recieveraddress` varchar(100) NOT NULL,
  `recievercontact` int(10) NOT NULL,
  `recievercity` varchar(50) NOT NULL,
  `weight` int(5) NOT NULL,
  `price` int(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

DROP TABLE IF EXISTS `adminuser`;
CREATE TABLE IF NOT EXISTS `adminuser` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
CREATE TABLE IF NOT EXISTS `branch` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `branchcode` int(10) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `contact` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `govno` int(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trackparcel`
--

DROP TABLE IF EXISTS `trackparcel`;
CREATE TABLE IF NOT EXISTS `trackparcel` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `parcel_id` int(10) NOT NULL,
  `refrenceno` int(20) NOT NULL,
  `status1` varchar(50) NOT NULL,
  `status2` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

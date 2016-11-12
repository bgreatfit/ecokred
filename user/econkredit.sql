-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2016 at 07:06 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `econkredit`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `manufacturer_id` text NOT NULL,
  `product_code` text NOT NULL,
  `thumbnail` longblob,
  `details` text,
  `points` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `used_by` text,
  `used_timestamp` text,
  `timestamp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `manufacturer_id`, `product_code`, `thumbnail`, `details`, `points`, `status`, `used_by`, `used_timestamp`, `timestamp`) VALUES
(1, 'Puma shoe', '1', '445566', NULL, NULL, '20', 1, '862071bc050b68c4fd961c4ec8b04ca3', '1474457337', ''),
(2, 'Puma shoe', '1', '445564', NULL, NULL, '20', 1, '862071bc050b68c4fd961c4ec8b04ca3', '1474455199', ''),
(3, 'Puma shoe', '1', '445544', NULL, NULL, '20', 1, '862071bc050b68c4fd961c4ec8b04ca3', '1474456767', ''),
(4, 'Innoson Vehicle', '2', '445540', NULL, NULL, '20', 1, '862071bc050b68c4fd961c4ec8b04ca3', '1474459806', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `earnings` int(11) DEFAULT '0',
  `verify` text NOT NULL,
  `account` int(11) NOT NULL DEFAULT '0',
  `timestamp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `earnings`, `verify`, `account`, `timestamp`) VALUES
(1, 'Blessed', 'Josiah', 'creativejosiah@yahoo.com', '8cb2237d0679ca88db6464eac60da96345513964', 280, '862071bc050b68c4fd961c4ec8b04ca3', 0, '1474407378'),
(2, 'Blessed', 'Josiah', 'creativejosiah@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 0, '63e8e69fcbf4cea69067aa0bc5e5e234', 1, '1474473254'),
(3, 'Blessed', 'Jerome', 'creative@yahoo.com', '8cb2237d0679ca88db6464eac60da96345513964', 0, '52424834470fd26474c0cbb846889347', 1, '1474474818');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

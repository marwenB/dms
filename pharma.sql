-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2013 at 07:50 PM
-- Server version: 5.5.34-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE IF NOT EXISTS `drugs` (
  `drug_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `strength` varchar(100) NOT NULL,
  `form` varchar(100) NOT NULL,
  `route` varchar(100) NOT NULL,
  `manufucture` varchar(100) NOT NULL,
  `purchaseprice` int(11) NOT NULL,
  `sellingprice` int(11) NOT NULL,
  `expirydate` date NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`drug_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`drug_id`, `name`, `description`, `strength`, `form`, `route`, `manufucture`, `purchaseprice`, `sellingprice`, `expirydate`, `quantity`) VALUES
(1, 'Aspirin', 'LSkfd fsdf gsdf sdfdf', '10', 'jdsfd', 'sjfsdf', 'sdkjfsdf', 58, 60, '2013-11-29', 100),
(2, 'Alecole', 'nono', 'sdfdg', 'Sfdgds', 'ewrwet', 'Vaswtrick', 56, 89, '2014-03-20', 100),
(3, 'Flagyll', 'Dawa ya kumaliza kuhara', '2', 'Tablets', '3', 'Glaxo', 20, 30, '2013-11-12', 9);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `sale_id` int(11) NOT NULL AUTO_INCREMENT,
  `drug_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_of_sale` datetime NOT NULL,
  PRIMARY KEY (`sale_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sale_id`, `drug_id`, `quantity`, `date_of_sale`) VALUES
(1, 1, 5, '2013-11-28 19:18:05'),
(2, 3, 2, '2013-11-28 19:21:27'),
(3, 3, 3, '2013-11-28 19:22:20'),
(4, 3, 4, '2013-11-28 19:23:43'),
(5, 3, 1, '2013-11-28 19:25:22'),
(6, 1, 4, '2013-11-28 19:26:16'),
(7, 3, 1, '2013-11-28 19:27:54'),
(8, 3, 70, '2013-11-28 19:31:56'),
(9, 3, 10, '2013-11-28 19:32:09'),
(10, 3, 100, '2013-11-28 19:36:50'),
(11, 3, 91, '2013-11-28 19:44:02'),
(12, 1, 78, '2013-11-28 19:45:50'),
(13, 1, 34, '2013-11-28 19:46:13'),
(14, 1, 232434, '2013-11-28 19:47:21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

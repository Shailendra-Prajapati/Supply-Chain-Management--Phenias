-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2018 at 06:43 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `supply`
--

-- --------------------------------------------------------

--
-- Table structure for table `available`
--

CREATE TABLE IF NOT EXISTS `available` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `quality` varchar(20) NOT NULL,
  `supplier` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `available`
--

INSERT INTO `available` (`id`, `prod_name`, `price`, `quantity`, `quality`, `supplier`) VALUES
(1, 'raw materials', '200', '400', 'no2', 'terimbere'),
(2, 'raw materials', '200', '300', 'no2', 'kira'),
(3, 'coffee', '1000', '-350', 'no1', 'terimbere'),
(4, 'coffee', '1000', '0', 'no2', 'kira'),
(5, 'coffee', '1000', '-23', 'no1', 'SELECT SUPPLIER'),
(6, 'raw materials n01', '300', '500', 'n01', 'abadacogora'),
(7, 'raw materials n02', '200', '800', 'n02', 'kira'),
(8, 'raw materials n03', '100', '400', 'n03', 'terimbere'),
(9, 'black cofee', '5', '', 'n01', 'terimbere');

-- --------------------------------------------------------

--
-- Table structure for table `consumation`
--

CREATE TABLE IF NOT EXISTS `consumation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(32) NOT NULL,
  `prod_name` varchar(45) NOT NULL,
  `quantity` int(32) NOT NULL,
  `quality` varchar(32) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `price` int(34) NOT NULL,
  `mounth` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `consumation`
--

INSERT INTO `consumation` (`id`, `names`, `prod_name`, `quantity`, `quality`, `date`, `price`, `mounth`) VALUES
(1, 'kalisa', 'coffee', 400, 'no1', '2015-10-18 19:29:10', 1000, ''),
(2, 'uwimana', 'coffee', 350, 'no1', '2015-10-18 19:30:16', 1000, ''),
(3, 'joli', 'coffee', 1000, 'n01', '2015-10-24 10:44:29', 1000, ''),
(4, 'joli', 'coffee', 50, 'no2', '2015-10-24 10:45:45', 1000, ''),
(5, 'kalisa', 'coffee', 200, 'no2', '2015-10-24 12:31:11', 1000, 'JANUARY 2015'),
(6, 'uwimana', 'coffee', 100, 'no2', '2015-10-24 12:33:29', 1000, 'FEB 2015'),
(7, 'joli', 'coffee', 12, 'no2', '2015-10-24 12:37:12', 1000, 'MARCH 2015'),
(8, 'joli', 'coffee', 15, 'no2', '2015-10-24 12:41:15', 1000, 'MAY 2015'),
(9, 'uwimana', 'coffee', 1200, 'no1', '2015-10-24 12:42:13', 1000, 'MARCH 2015'),
(10, 'uwimana', 'coffee', 1200, 'no1', '2015-10-24 12:45:57', 200, 'MARCH 2015'),
(11, 'uwimana', 'coffee', 1200, 'no1', '2015-10-24 12:46:16', 1000, 'MARCH 2015'),
(12, 'uwimana', 'coffee', 1200, 'no1', '2015-10-24 12:47:35', 1000, 'MARCH 2015'),
(13, 'kalisa', 'coffee', 1200, 'no1', '2015-10-24 12:48:55', 1000, 'APRIL 2015'),
(14, 'uwimana', 'coffee', 12, 'no1', '2015-10-24 12:49:30', 1000, 'MAY 2015'),
(15, 'uwimana', 'raw materials', 100, 'no2', '2015-10-24 12:50:36', 200, 'FEB 2015'),
(16, 'uwimana', 'coffee', 1200, 'no1', '2015-10-24 12:55:02', 1000, 'FEB 2015'),
(17, 'uwimana', 'coffee', 1200, 'no1', '2015-10-24 12:55:38', 1000, 'APRIL 2015'),
(18, 'uwimana', 'coffee', 1200, 'no1', '2015-10-24 13:02:49', 1000, 'FEB 2015'),
(19, 'uwimana', 'coffee', 1200, 'no1', '2015-10-24 13:09:32', 1000, 'MAY 2015'),
(20, 'uwimana', 'coffee', 1200, 'no1', '2015-10-24 13:11:40', 1000, 'APRIL 2015'),
(21, 'uwimana', 'coffee', 1200, 'no1', '2015-10-24 13:13:21', 1000, 'MARCH 2015'),
(22, 'uwimana', 'coffee', 1, 'no1', '2015-10-24 13:14:32', 1000, 'MAY 2015'),
(23, 'uwimana', 'coffee', 122, 'no1', '2015-10-24 17:31:48', 200, 'MAY 2015'),
(24, 'uwimana', 'coffee', 123, 'no1', '2015-10-24 17:34:28', 1000, 'JUN 2015'),
(25, 'uwimana', 'coffee', 130, 'no1', '2015-10-24 17:37:08', 1000, 'OCTOBER 2015'),
(26, 'uwimana', 'coffee', 444, 'no1', '2015-10-24 17:40:29', 1000, 'AUGUST 2015');

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE IF NOT EXISTS `distributors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `prod_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`id`, `names`, `contact`, `prod_name`) VALUES
(1, 'uwimana', '0711111111', 'coffee'),
(2, 'kalisa', '0755555555', 'coffee');

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterials`
--

CREATE TABLE IF NOT EXISTS `rawmaterials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(45) NOT NULL,
  `price` int(45) NOT NULL,
  `quantity` int(45) NOT NULL,
  `quality` varchar(45) NOT NULL,
  `supplier` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `quality` varchar(20) NOT NULL,
  `supplier` varchar(32) NOT NULL,
  `supcontact` varchar(43) NOT NULL,
  `address` varchar(45) NOT NULL,
  `payappointment` varchar(32) NOT NULL,
  `tot_amount` int(43) NOT NULL,
  `paystatus` varchar(32) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `prod_name`, `price`, `quantity`, `quality`, `supplier`, `supcontact`, `address`, `payappointment`, `tot_amount`, `paystatus`, `time`) VALUES
(1, 'raw materials', '200', '400', 'no2', 'kira', '078888888', 'nyanza', 'nov 2015', 80000, 'PAID', '2015-10-18 19:25:38'),
(2, 'raw materials', '200', '500', 'no2', 'terimbere', '0733333333', 'nyamagabe', 'dec 2015', 100000, 'PAID', '2015-10-24 11:54:03'),
(3, 'raw materials n01', '300', '500', 'n01', 'abadacogora', '0456', 'nyanza', 'nov 2015', 150000, 'PAID', '2015-10-24 10:37:59'),
(4, 'SELECT PRODUCT', '300', '500', 'n01', 'abadacogora', '0456', 'nyanza', 'nov 2015', 150000, 'PAID', '2015-10-25 08:57:42'),
(5, 'raw materials n01', '300', '500', 'n01', 'abadacogora', '0456', 'nyanza', 'nov 2015', 150000, 'PAID', '2016-08-03 06:00:48'),
(6, 'raw materials n02', '200', '400', 'n02', 'kira', '0456', 'nyanza', 'dec 2015', 80000, 'PAID', '2016-08-03 15:14:00'),
(7, 'raw materials n03', '200', '300', 'n03', 'terimbere', '0456', 'nyanza', 'dec 2015', 60000, 'PAID', '2015-10-24 11:55:51'),
(8, 'raw materials n03', '100', '400', 'n03', 'terimbere', '0456', 'nyamagabe', 'jan 2016', 40000, 'NOTPAID', '2015-10-24 10:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE IF NOT EXISTS `supliers` (
  `suplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `suplier_name` varchar(100) NOT NULL,
  `suplier_address` varchar(100) NOT NULL,
  `suplier_contact` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `prod_name` varchar(500) NOT NULL,
  PRIMARY KEY (`suplier_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `supliers`
--

INSERT INTO `supliers` (`suplier_id`, `suplier_name`, `suplier_address`, `suplier_contact`, `contact_person`, `prod_name`) VALUES
(1, 'terimbere', 'nyamagabe', '072222222', '0733333333', 'raw materials'),
(2, 'kira', 'nyanza', '0788888888', '0799999999', 'raw materials'),
(3, 'abadacogora', 'nyanza', '05656', '04567', 'raw materials n01');

-- --------------------------------------------------------

--
-- Table structure for table `user_levels`
--

CREATE TABLE IF NOT EXISTS `user_levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(32) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userlevel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_levels`
--

INSERT INTO `user_levels` (`id`, `names`, `username`, `password`, `userlevel`) VALUES
(1, 'Phenias', 'phenias', 'admin', 'admin'),
(2, 'Claude', 'store', 'store', 'storekeeper');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

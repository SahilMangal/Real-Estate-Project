-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2018 at 07:20 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE IF NOT EXISTS `buyers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(250) NOT NULL,
  `prop_id` int(11) NOT NULL,
  `prop_user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `user_id`, `prop_id`, `prop_user`) VALUES
(2, 'sahil.mangal@sify.com', 11, 'sahil.mangal@sify.com'),
(3, 'sahil.mangal@sify.com', 11, 'sahil.mangal@sify.com'),
(4, 'sahil.mangal@sify.com', 39, 'rg@gmail.com'),
(5, 'n@gmail.com', 5, 'sahil.mangal@sify.com'),
(6, 'n@gmail.com', 19, 'rg@gmail.com'),
(7, 'n@gmail.com', 8, 'sahil.mangal@sify.com'),
(8, 'sahil.mangal@sify.com', 41, 'n@gmail.com'),
(9, 'sahil.mangal@sify.com', 41, 'n@gmail.com'),
(10, 'sahil.mangal@sify.com', 41, 'n@gmail.com'),
(11, 'sahil.mangal@sify.com', 41, 'n@gmail.com'),
(12, 'sahil.mangal@sify.com', 41, 'n@gmail.com'),
(13, 'sahil.mangal@sify.com', 41, 'n@gmail.com'),
(14, 'sahil.mangal@sify.com', 41, 'n@gmail.com'),
(15, 'sahil.mangal@sify.com', 41, 'n@gmail.com'),
(16, 'rg@gmail.com', 41, 'n@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(500) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Comment` varchar(5000) NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `Email`, `Type`, `Comment`) VALUES
(2, 'sahil@sify.com', 'Feedback', 'Real Estate provide best services to their customers'),
(3, 'rg@gmail.com', 'Compliant', 'I was Unable to add money in my wallet');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `prop_id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(300) NOT NULL,
  `Price` int(11) NOT NULL,
  `State` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `Stories` int(11) NOT NULL,
  `Bedroom` int(11) NOT NULL,
  `Washroom` int(11) NOT NULL,
  `Basement` int(11) NOT NULL,
  `Kitchen` int(11) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `User_email` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  PRIMARY KEY (`prop_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`prop_id`, `Title`, `Price`, `State`, `City`, `Address`, `Description`, `Stories`, `Bedroom`, `Washroom`, `Basement`, `Kitchen`, `Area`, `Image`, `User_email`, `Type`) VALUES
(5, 'Houses', 200, 'Ontario', 'Toronto', '#7845 Q3R', 'Best Place to live', 2, 4, 4, 1, 2, '2BHK flat', 'Property/1.jpg', 'sahil.mangal@sify.com', 'Selling'),
(6, 'Houses', 400, 'Ontario', 'Toronto', '#784 U7', 'Best place to live in low cost ', 2, 5, 6, 1, 1, '230BHK flat', 'Property/2.jpg', 'sahil.mangal@sify.com', 'Selling'),
(7, 'Houses', 150, 'Ontario', 'Toronto', '#2185 R5JI', 'Best Place to live', 1, 2, 2, 1, 1, '3BHK Flat', 'Property/3.jpg', 'sahil.mangal@sify.com', 'Selling'),
(8, 'Houses', 300, 'Ontario', 'Toronto', '#4821 k8', 'Best place for students', 3, 6, 5, 1, 2, '3BHK Flat', 'Property/4.jpg', 'sahil.mangal@sify.com', 'Selling'),
(9, 'Houses', 700, 'Ontario', 'Toronto', '#34 T7BO', 'Best Place', 2, 5, 6, 1, 5, '2BHK flat', 'Property/5.jpg', 'sahil.mangal@sify.com', 'Selling'),
(10, 'Houses', 510, 'Ontario', 'Toronto', '#12150 LPO', 'Best Place to live', 2, 5, 5, 1, 5, '5 BKH flat', 'Property/6.png', 'sahil.mangal@sify.com', 'Selling'),
(11, 'Houses', 100, 'Ontario', 'Toronto', '#3 NU 78897', 'Best Place to Live', 2, 3, 1, 0, 1, '2BHK flat', 'Property/7.jpg', 'sahil.mangal@sify.com', 'Selling'),
(12, 'Condos', 1800, 'Ontario', 'Toronto', '#47845 BYJU', 'Super Building Near swimming pools', 0, 0, 0, 0, 0, '300 FT. ', 'Property/c1.jpg', 'sahil.mangal@sify.com', 'Selling'),
(13, 'Condos', 1800, 'Ontario', 'Toronto', '#7845 BNBHU 123', 'Super Building near swimming pool', 0, 0, 0, 0, 0, '800 FT.', 'Property/c2.JPG', 'sahil.mangal@sify.com', 'Selling'),
(14, 'Condos', 1800, 'Ontario', 'Toronto', '#7845 QE', 'Best Place', 0, 0, 0, 0, 0, '400 FT. ', 'Property/c3.jpg', 'sahil.mangal@sify.com', 'Selling'),
(15, 'Condos', 1010, 'Ontario', 'Toronto', '#7845 H4O9', 'Best Place', 0, 0, 0, 0, 0, '300 FT.', 'Property/c4.jpg', 'sahil.mangal@sify.com', 'Selling'),
(16, 'Condos', 1500, 'Ontario', 'Toronto', '#7845 UIK', 'Best Place at low price', 0, 0, 0, 0, 0, '400 FT. ', 'Property/c5.jpg', 'rg@gmail.com', 'Selling'),
(17, 'Condos', 2500, 'Ontario', 'Toronto', '#745 BHY7', 'Best Place', 0, 0, 0, 0, 0, '800 FT.', 'Property/c6.jpg', 'rg@gmail.com', 'Selling'),
(19, 'ResidentialLands', 1200, 'Ontario', 'Toronto', '#3 BG67', 'Best Place to live', 0, 0, 0, 0, 0, '450 FT.', 'Property/l1.jpg', 'rg@gmail.com', 'Selling'),
(20, 'ResidentialLands', 5500, 'Ontario', 'Toronto', '#12 RTG67', 'Best Place to live', 0, 0, 0, 0, 0, '400 FT. ', 'Property/l2.jpg', 'rg@gmail.com', 'Selling'),
(21, 'ResidentialLands', 1300, 'Ontario', 'Toronto', '#678 TYU890 N', 'Best Place', 0, 0, 0, 0, 0, '420 FT.', 'Property/l3.jpg', 'rg@gmail.com', 'Rent'),
(22, 'ResidentialLands', 2020, 'Ontario', 'Toronto', '#3216 BYT9087', 'Best Place to Live', 0, 0, 0, 0, 0, '800 FT.', 'Property/l4.jpg', 'rg@gmail.com', 'Selling'),
(23, 'ResidentialLands', 1200, 'Ontario', 'Toronto', '#5425 MLO', 'Best PLace to Live', 0, 0, 0, 0, 0, '600 FT.', 'Property/l5.jpg', 'rg@gmail.com', 'Selling'),
(24, 'Space', 1500, 'Ontario', 'Toronto', '#1250 QR', 'Best Place', 0, 0, 0, 0, 0, '200 FT.', 'Property/s1.jpg', 'rg@gmail.com', 'Selling'),
(25, 'Space', 4500, 'Ontario', 'Toronto', '#1265 TY35', 'Best Place to live in low cost', 0, 0, 0, 0, 0, '500 FT.', 'Property/s2.jpg', 'rg@gmail.com', 'Selling'),
(26, 'Space', 1620, 'Ontario', 'Toronto', '#3295 ZWE', 'Best Place', 0, 0, 0, 0, 0, '100 FT. ', 'Property/s3.jpg', 'rg@gmail.com', 'Selling'),
(27, 'Space', 800, 'Ontario', 'Toronto', '#15 MLPO', 'Best Place', 0, 0, 0, 0, 0, '800 FT.', 'Property/s4.jpg', 'sahil.mangal@sify.com', 'Selling'),
(28, 'Space', 896, 'Ontario', 'Toronto', '#3201 YU9', 'Best Place to Live in low cost', 0, 0, 0, 0, 0, '500 FT.', 'Property/s5.jpg', 'sahil.mangal@sify.com', 'Selling'),
(29, 'Buildings', 785, 'Ontario', 'Toronto', '#4521 BY1', 'Best here', 0, 0, 0, 0, 0, '250 FT.', 'Property/b1.JPG', 'sahil.mangal@sify.com', 'Selling'),
(30, 'Buildings', 1200, 'Ontario', 'Toronto', '#32065 BY0P0', 'Best Place', 0, 0, 0, 0, 0, '900 FT.', 'Property/b2.jpg', 'sahil.mangal@sify.com', 'Selling'),
(31, 'Buildings', 900, 'Ontario', 'Toronto', '#95 BUY897', 'Best Place', 0, 0, 0, 0, 0, '1510', 'Property/b3.jpg', 'sahil.mangal@sify.com', 'Selling'),
(32, 'Buildings', 900, 'Ontario', 'Toronto', '#987 ZMPO', 'Best Place at low cost', 0, 0, 0, 0, 0, '800 FT.', 'Property/b4.jpg', 'rg@gmail.com', 'Selling'),
(33, 'Buildings', 1900, 'Ontario', 'Toronto', '#985 NU', 'Best Place', 0, 0, 0, 0, 0, '600 FT.', 'Property/b5.jpg', 'rg@gmail.com', 'Selling'),
(34, 'Buildings', 1900, 'Ontario', 'Toronto', '#5215 BYT98', 'Best Place', 0, 0, 0, 0, 0, '800 FT.', 'Property/b6.jpg', 'rg@gmail.com', 'Selling'),
(39, 'CommercialLands', 6000, 'Ontario', 'Toronto', '#548 GY2', 'Best Place for Businessman', 0, 0, 0, 0, 0, '600 FT.', 'Property/cl4.jpg', 'rg@gmail.com', 'Selling'),
(38, 'CommercialLands', 9500, 'Ontario', 'Toronto', '#45 GY9', 'Best Place', 0, 0, 0, 0, 0, '415 FT.', 'Property/cl3.jpg', 'rg@gmail.com', 'Selling'),
(37, 'CommercialLands', 8000, 'Ontario', 'Toronto', '#154 GY', 'Best Place', 0, 0, 0, 0, 0, '780 FT.', 'Property/cl2.jpg', 'rg@gmail.com', 'Selling'),
(41, 'Condos', 250, 'test', 'test', 'test', 'test', 0, 0, 0, 0, 0, '250', 'Property/c7.jpg', 'n@gmail.com', 'Selling');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(5000) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Active` varchar(100) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Acc_no` bigint(20) NOT NULL,
  `Money` int(11) NOT NULL,
  PRIMARY KEY (`Reg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Reg_id`, `Name`, `Email`, `Password`, `Address`, `City`, `State`, `Image`, `Active`, `Mobile`, `Acc_no`, `Money`) VALUES
(3, 'Sahil Mangal', 'sahil.mangal@sify.com', '123', '#319 KNC bathinda', 'Bathinda', 'Punjab', 'users/chairman.png', 'No', 9870456321, 52198, 1180),
(6, 'Navneet Kaur', 'n@gmail.com', '1122', 'Bathinda', 'Bathinda', 'Punjab', 'users/57b282542b53a4f14393f744dfa2e4e5.jpg', 'No', 9876543210, 123456, 2250),
(5, 'Radhika Gupta', 'rg@gmail.com', '123', '#785 Shera wala Gate', 'Patiala', 'Punjab', 'users/head.jpg', 'No', 7854012369, 854219, 1270),
(7, 'Real Estate', 'admin@gmail.com', 'admin', 'Admin address', 'Toronto', 'Ontario', 'users/IMG_0413.JPG', 'No', 8972015492, 200150, 10000);

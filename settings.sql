-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2016 at 03:41 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `Id` int(10) unsigned NOT NULL,
  `Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Order` int(11) NOT NULL,
  `Value` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`Id`, `Type`, `Order`, `Value`) VALUES
(1, 'TopSelling', 1, 'img/top_m_1.jpg'),
(2, 'TopSelling', 2, 'img/top_m_2.jpg'),
(3, 'TopSelling', 3, 'img/top_l_1.jpg'),
(4, 'TopSelling', 4, 'img/top_l_2.jpg'),
(5, 'NewProducts', 5, 'img/new_mo_1.jpg'),
(6, 'NewProducts', 7, 'img/new_mo_2.jpg'),
(7, 'NewProducts', 7, 'img/new_tb_1.jpg'),
(8, 'NewProducts', 8, 'img/new_tb_2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

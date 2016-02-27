-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2016 at 06:34 PM
-- Server version: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `note`
--

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `id` int(5) NOT NULL,
  `heading` varchar(20) NOT NULL,
  `end` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'not completed',
  `content` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `heading`, `end`, `status`, `content`) VALUES
(1, 'ff', '2016-06-14', 'completed', 'qwerty'),
(2, ' ss ', '2016-02-09', 'completed', ' qwerttyuio '),
(3, ' zxc ', '2016-02-29', 'completed', 'sd'),
(4, ' asdf ', '2016-02-10', 'completed', ' erty '),
(5, '  fgh  ', '2016-07-11', 'not completed', '  zqq'),
(6, 'ghghgh', '2016-02-29', 'not completed', 'vbvbvbvv'),
(7, ' first ', '2016-02-09', 'not completed', ' zxvgwergqergerg '),
(8, ' BTS ', '2016-03-18', 'completed', ' Play the finals ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

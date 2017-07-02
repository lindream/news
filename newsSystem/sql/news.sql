-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2017 at 11:34 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(20) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(30) NOT NULL,
  `news_content` text NOT NULL,
  `news_issue_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_content`, `news_issue_time`) VALUES
(33, 'jaerjhfsdjsdgjsd', 'serahrsdfhdf', '2017-06-20 10:52:34'),
(34, 'jaerjhfsdjsdgjsd', 'serahrsdfhdf', '2017-06-20 10:52:37'),
(35, 'jaerjhfsdjsdgjsd', 'serahrsdfhdf', '2017-06-20 10:52:38'),
(36, 'jaerjhfsdjsdgjsd', 'serahrsdfhdf', '2017-06-20 10:52:42'),
(37, 'jaerjhfsdjsdgjsd', 'serahrsdfhdf', '2017-06-20 10:52:44'),
(38, 'jaerjhfsdjsdgjsd', 'serahrsdfhdf', '2017-06-20 10:52:45'),
(39, 'jaerjhfsdjsdgjsd', 'serahrsdfhdf', '2017-06-20 10:52:49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

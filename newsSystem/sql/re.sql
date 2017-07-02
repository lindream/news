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
-- Table structure for table `re`
--

CREATE TABLE IF NOT EXISTS `re` (
  `re_id` int(20) NOT NULL AUTO_INCREMENT,
  `reconcent` text CHARACTER SET utf8 NOT NULL,
  `retime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userName` varchar(20) CHARACTER SET utf8 NOT NULL,
  `r_id` int(11) NOT NULL,
  PRIMARY KEY (`re_id`),
  UNIQUE KEY `re_id` (`re_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `re`
--

INSERT INTO `re` (`re_id`, `reconcent`, `retime`, `userName`, `r_id`) VALUES
(27, 'qeqwe', '2017-06-11 15:01:05', '0', 0),
(28, 'wertfwetw', '2017-06-11 15:01:08', '0', 0),
(29, 'werteqwtqe', '2017-06-11 15:01:10', '0', 0),
(30, 'uiyiopo', '2017-06-11 15:01:14', '0', 0),
(31, 'gasdfgasdfa', '2017-06-11 15:01:16', '0', 0),
(32, 'gasdfgasdfa', '2017-06-11 15:02:09', '0', 0),
(33, 'wetwetw', '2017-06-11 15:02:23', '0', 0),
(34, 'twertwetqwe', '2017-06-11 15:02:25', '0', 0),
(35, ' ', '2017-06-11 15:03:30', '0', 0),
(36, 'awfttawef', '2017-06-11 15:03:32', '0', 0),
(37, '', '2017-06-11 15:04:01', '0', 0),
(38, '', '2017-06-11 15:04:04', '0', 0),
(39, 'sgtgsfgvs', '2017-06-11 16:10:11', '0', 0),
(40, 'sgtgsfgvs', '2017-06-11 16:13:21', '0', 0),
(41, 'sgtgsfgvs', '2017-06-11 16:13:54', '0', 0),
(42, '????', '2017-06-18 11:21:22', '0', 0),
(43, 'asdfasd', '2017-06-18 11:44:54', '0', 0),
(44, 'asdfasd', '2017-06-18 11:48:03', '0', 0),
(45, 'asdfasd', '2017-06-18 11:48:27', '0', 0),
(46, 'asdfasd', '2017-06-18 11:49:18', '0', 0),
(47, 'asdfasd', '2017-06-18 11:49:40', '0', 0),
(48, 'aweffrtawef', '2017-06-18 12:05:18', '0', 0),
(49, 'afafafas', '2017-06-18 12:05:34', '0', 0),
(50, 'yertyws', '2017-06-18 12:30:09', '0', 0),
(51, 'sdfgsgs', '2017-06-18 12:33:35', '', 0),
(52, 'therghwe', '2017-06-18 12:34:25', '', 0),
(53, 'dghsdgh', '2017-06-18 12:34:51', 'tfjdghj', 0),
(54, 'dthdh', '2017-06-18 12:37:25', '', 0),
(55, 'sfadfas', '2017-06-18 12:41:07', '', 0),
(56, '', '2017-06-18 12:46:07', 'a', 0),
(57, 'dhgsgadgadg', '2017-06-18 12:46:15', '', 0),
(58, 'erywezs', '2017-06-18 12:53:15', '', 0),
(59, 'sefgerfqw', '2017-06-18 12:53:18', '', 0),
(60, '', '2017-06-18 12:53:36', 'ss', 0),
(61, 'dasgafdda', '2017-06-18 13:00:04', '', 0),
(62, '', '2017-06-18 13:00:14', 'ss', 0),
(63, 'fgjdzh', '2017-06-18 13:00:21', '', 0),
(64, 'fgwetfqwer', '2017-06-18 13:12:23', '', 0),
(65, '', '2017-06-18 13:12:37', 'a', 0),
(66, '', '2017-06-18 13:17:27', 'ss', 0),
(67, '', '2017-06-18 13:19:45', 'rrr', 0),
(68, 'xdgadfa', '2017-06-18 13:19:49', 'rrr', 0),
(69, 'aefwdfwa', '2017-06-18 13:19:53', 'rrr', 0),
(70, '', '2017-06-18 13:20:01', 'ss', 0),
(71, 'asdfafa', '2017-06-18 13:20:04', 'ss', 0),
(72, '', '2017-06-18 13:21:27', 'rrr', 0),
(73, 'stfgaf', '2017-06-18 13:22:40', 'ss', 0),
(74, 'xfbsghdfafd', '2017-06-18 13:47:22', '', 0),
(75, 'sdfaasfd', '2017-06-18 13:47:50', 'rrr', 0),
(76, 'ghwatgwer', '2017-06-18 13:50:00', 'rrr', 0),
(77, 'safsdf', '2017-06-18 13:51:07', 'rrr', 0),
(78, 'wertysrt', '2017-06-18 13:54:29', 'a', 0),
(79, 'wegwefwe', '2017-06-18 15:21:05', '', 0),
(80, 'asfasfsaf', '2017-06-18 15:49:01', 'rrr', 0),
(81, 'nnnnnnnnn', '2017-06-18 15:49:08', 'rrr', 0),
(82, 'sdgsdfs', '2017-06-18 16:47:43', 'a', 0),
(83, 'dfgadfas', '2017-06-18 16:52:32', 'rrr', 0),
(84, 'xfgasdfgasd', '2017-06-18 16:58:44', 'rrr', 0),
(85, 'segasdfs', '2017-06-18 16:59:38', 'a', 0),
(86, '1111111111111111111111', '2017-06-18 17:00:38', 'rrr', 0),
(87, 'sdfgsefgsef', '2017-06-18 17:04:52', 'rrr', 0),
(88, 'sdfgsefgsef', '2017-06-18 17:06:34', 'rrr', 0),
(89, 'dhfvdhdfgf', '2017-06-18 17:07:32', 'rrr', 0),
(90, 'sdfvasdvxcbvxd', '2017-06-19 13:20:12', 'rrr', 0),
(91, 'fgbndfgsfadfgwsfwsf', '2017-06-19 13:31:50', 'rrr', 0),
(92, 'sdgbvzsdvzdv', '2017-06-19 13:34:56', 'a', 0),
(93, 'sdgbvzsdvzdv', '2017-06-19 13:37:06', 'a', 0),
(94, '性感美三', '2017-06-19 14:27:30', 'a', 0),
(95, '现宾赛三等森\r\n', '2017-06-19 14:30:29', 'a', 0),
(96, 'sdgasDG', '2017-06-20 09:34:31', 'rrr', 0),
(97, 'xcfbhfsgs', '2017-06-20 12:50:05', 'rrr', 0),
(98, 'llllllll', '2017-06-20 12:50:15', 'rrr', 0),
(99, 'adfasdfa', '2017-06-20 14:12:08', 'rrr', 0),
(100, 'zsdgadGf', '2017-06-20 14:14:15', 'rrr', 0),
(101, 'asfAdA', '2017-06-20 14:16:21', 'rrr', 0),
(102, 'aseghsARFaD', '2017-06-20 14:19:40', 'rrr', 0),
(103, 'asegAsr', '2017-06-20 14:20:54', 'rrr', 0),
(104, 'SFFTEWREqwrf', '2017-06-20 14:22:46', 'rrr', 0),
(105, 'eryraytsdr', '2017-06-20 14:30:17', '', 0),
(106, 'eryraytsdr', '2017-06-20 14:31:55', '', 0),
(107, 'sdvafFQWArfaf', '2017-06-20 14:35:49', '', 0),
(108, 'sdvafFQWArfaf', '2017-06-20 14:36:21', '', 0),
(109, 'qw35rt', '2017-06-20 14:36:23', '', 0),
(110, 'sjhadfgsdf', '2017-06-20 14:46:52', '', 0),
(111, 'sjhadfgsdf', '2017-06-20 14:47:06', '', 0),
(112, 'ahfrfgassgsfgc', '2017-06-20 14:48:28', '', 0),
(113, 'kcrtfyvvcik', '2017-06-20 15:01:24', '', 39),
(114, 'gvsdafdstewA', '2017-06-20 15:01:28', '', 39),
(115, 'zdgchbfxgvs', '2017-06-20 15:01:52', '', 40),
(116, 'sdgsdgs', '2017-06-20 15:02:45', '', 40),
(117, 'sdgsdgs', '2017-06-20 15:03:10', '', 40),
(118, 'gjdjthadfcghsedtg', '2017-06-20 15:06:18', '', 37),
(119, 'abc', '2017-06-20 15:08:23', '', 39),
(120, 'abc', '2017-06-20 15:08:28', '', 39),
(121, 'sfdgvdfgvbdfg', '2017-06-20 15:11:10', '', 36),
(122, 'eaFCZXfdwaf', '2017-06-20 15:18:37', '', 38),
(123, 'asfasDFAD', '2017-06-20 15:23:39', 'a', 37),
(124, 'sdgfhbxfdhnzd', '2017-06-20 15:25:59', 'rrr', 35);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin version: 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- PHP Version: 7.3.21

--
-- Database: `projects`
--

-- --------------------------------------------------------

--
-- Table structure for table 'userinfo'
--

CREATE TABLE `info` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

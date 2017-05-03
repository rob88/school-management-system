-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 07:52 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_management-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `school_`
--

CREATE TABLE IF NOT EXISTS `school_` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `school_name` varchar(128) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `school_`
--

INSERT INTO `school_` (`id`, `name`, `email`, `school_name`, `created`, `modified`) VALUES
(1, 'Ruben Faraj', 'reben_f@hotmail.co.uk', 'Chiswick', '2017-05-02 19:49:49', '2017-05-02 17:49:49'),
(2, 'John Smith', 'john@hotmail.com', 'Chiswick', '2017-05-02 19:50:19', '2017-05-02 17:50:19'),
(3, 'Sarah Smith', 'Sarah@hotmail.co.uk', 'Hammersmith', '2017-05-02 19:50:51', '2017-05-02 17:50:51'),
(4, 'John Smith', 'john@hotmail.com', 'Hammersmith', '2017-05-02 19:51:18', '2017-05-02 17:51:18'),
(5, 'Ben', 'ben@hotmail.co.uk', 'Ealing', '2017-05-02 19:52:04', '2017-05-02 17:52:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

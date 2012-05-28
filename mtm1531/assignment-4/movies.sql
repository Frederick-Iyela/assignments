-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2012 at 06:47 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iyel0001`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `director` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_title`, `release_date`, `director`) VALUES
(1, 'Madagascar 3', '2012-06-08', 'Eric Darnell'),
(2, 'Brave', '2012-06-22', 'Mark Andrews'),
(3, 'The Amazing Spider-Man', '2012-07-03', 'Marc Webb'),
(4, 'Ice Age 4', '2012-07-13', 'Mike Thurmeier'),
(5, 'The Dark Knight Rises ', '2012-07-20', 'Christopher Nolan'),
(6, 'The Bourne Legacy', '2012-08-03', 'Tony Gilroy'),
(7, 'Skyfall', '2012-11-09', 'Sam Mendes'),
(8, 'Snow White and the Huntsman', '2012-06-01', 'Rupert Sanders');

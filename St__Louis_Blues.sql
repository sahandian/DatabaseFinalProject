-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql212.byetcluster.com
-- Generation Time: Dec 05, 2017 at 10:31 PM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_20708161_BluesStatistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `St. Louis Blues`
--

CREATE TABLE IF NOT EXISTS `St. Louis Blues` (
  `Name` text NOT NULL,
  `GP` int(11) NOT NULL,
  `G` int(11) NOT NULL,
  `A` int(11) NOT NULL,
  `P` int(11) NOT NULL,
  `+/-` int(11) NOT NULL,
  `PIM` int(11) NOT NULL,
  `PPG` int(11) NOT NULL,
  `PPP` int(11) NOT NULL,
  `SHG` int(11) NOT NULL,
  `SHP` int(11) NOT NULL,
  `GWG` int(11) NOT NULL,
  `OTG` int(11) NOT NULL,
  `Shots` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `St. Louis Blues`
--

INSERT INTO `St. Louis Blues` (`Name`, `GP`, `G`, `A`, `P`, `+/-`, `PIM`, `PPG`, `PPP`, `SHG`, `SHP`, `GWG`, `OTG`, `Shots`) VALUES
('Jaden Schwartz', 27, 13, 19, 32, 19, 8, 4, 5, 0, 0, 2, 0, 58),
('Brayden Schenn', 27, 10, 20, 30, 19, 26, 2, 8, 0, 0, 4, 1, 72),
('Vladimir Tarasenko', 27, 12, 17, 29, 17, 9, 2, 9, 0, 0, 1, 0, 116),
('Alex Pietrangelo', 27, 7, 13, 20, 9, 10, 2, 6, 0, 1, 2, 1, 85),
('Paul Stastny', 27, 6, 14, 20, -3, 8, 2, 3, 0, 1, 0, 0, 57),
('Vladimir Sobotka', 27, 5, 10, 15, 0, 24, 0, 2, 1, 1, 1, 0, 52),
('Colton Parayko', 27, 2, 12, 14, 6, 4, 1, 5, 0, 0, 0, 0, 77),
('Alexander Steen', 21, 3, 9, 12, -6, 8, 1, 6, 0, 0, 1, 0, 54),
('Kyle Brodziak', 27, 5, 5, 10, 2, 8, 0, 0, 1, 1, 1, 0, 34),
('Scottie Upshall', 27, 3, 7, 10, -1, 20, 0, 0, 0, 0, 1, 0, 28),
('Joel Edmundson', 27, 6, 3, 9, 5, 18, 0, 0, 0, 0, 0, 0, 50),
('Dmitrij Jaskin', 24, 3, 5, 8, 5, 0, 0, 0, 0, 0, 0, 0, 37),
('Vince Dunn', 26, 2, 4, 6, 5, 8, 0, 1, 0, 0, 0, 0, 46),
('Robert Bortuzzo', 26, 1, 4, 5, 1, 16, 0, 0, 0, 0, 1, 0, 34),
('Carl Gunnarsson', 22, 3, 1, 4, 10, 4, 0, 0, 0, 0, 1, 0, 21),
('Carl Gunnarsson', 22, 3, 1, 4, 10, 4, 0, 0, 0, 0, 1, 0, 21),
('Magnus Paajarvi', 23, 2, 1, 3, -3, 8, 0, 0, 0, 0, 0, 0, 29),
('Oskar Sundqvist', 23, 0, 3, 3, -2, 6, 0, 0, 0, 0, 0, 0, 30),
('Chris Thorburn', 17, 0, 3, 3, -2, 17, 0, 0, 0, 0, 0, 0, 15),
('Patrik Berglund', 3, 2, 0, 2, -2, 4, 2, 2, 0, 0, 0, 0, 14),
('Sammy Blais', 7, 1, 1, 2, -1, 2, 1, 1, 0, 0, 0, 0, 6),
('Jay Bouwmeester', 6, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

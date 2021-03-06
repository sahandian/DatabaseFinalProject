-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql302.byetcluster.com
-- Generation Time: Dec 08, 2017 at 02:18 AM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_21190636_stats`
--

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `playerId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Team` text NOT NULL,
  `GP` int(11) NOT NULL,
  `G` int(11) NOT NULL,
  `A` int(11) NOT NULL,
  `P` int(11) NOT NULL,
  `PM` int(11) NOT NULL,
  `PIM` int(11) NOT NULL,
  `PPG` int(11) NOT NULL,
  `PPP` int(11) NOT NULL,
  `SHG` int(11) NOT NULL,
  `SHP` int(11) NOT NULL,
  `GWG` int(11) NOT NULL,
  `OTG` int(11) NOT NULL,
  `Shots` int(11) NOT NULL,
  PRIMARY KEY (`playerId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`playerId`, `Name`, `Team`, `GP`, `G`, `A`, `P`, `PM`, `PIM`, `PPG`, `PPP`, `SHG`, `SHP`, `GWG`, `OTG`, `Shots`) VALUES
(2, 'Brayden Schenn', 'STL', 27, 10, 20, 30, 19, 26, 2, 8, 0, 0, 4, 1, 72),
(3, 'Vladimir Tarasenko', 'STL', 27, 12, 17, 29, 17, 9, 2, 9, 0, 0, 1, 0, 116),
(4, 'Alex Pietrangelo', 'STL', 27, 7, 13, 20, 9, 10, 2, 6, 0, 1, 2, 1, 85),
(5, 'Paul Stastny', 'STL', 27, 6, 14, 20, -3, 8, 2, 3, 0, 1, 0, 0, 57),
(6, 'Vladimir Sobotka', 'STL', 27, 5, 10, 15, 0, 24, 0, 2, 1, 1, 1, 0, 52),
(7, 'Colton Parayko', 'STL', 27, 2, 12, 14, 6, 4, 1, 5, 0, 0, 0, 0, 77),
(8, 'Alexander Steen', 'STL', 21, 3, 9, 12, -6, 8, 1, 6, 0, 0, 1, 0, 54),
(9, 'Kyle Brodziak', 'STL', 27, 5, 5, 10, 2, 8, 0, 0, 1, 1, 1, 0, 34),
(10, 'Scottie Upshall', 'STL', 27, 3, 7, 10, -1, 20, 0, 0, 0, 0, 1, 0, 28),
(11, 'Joel Edmundson', 'STL', 27, 6, 3, 9, 5, 18, 0, 0, 0, 0, 0, 0, 50),
(12, 'Dmitrij Jaskin', 'STL', 24, 3, 5, 8, 5, 0, 0, 0, 0, 0, 0, 0, 37),
(13, 'Vince Dunn', 'STL', 26, 2, 4, 6, 5, 8, 0, 1, 0, 0, 0, 0, 46),
(14, 'Robert Bortuzzo', 'STL', 26, 1, 4, 5, 1, 16, 0, 0, 0, 0, 1, 0, 34),
(15, 'Carl Gunnarsson', 'STL', 22, 3, 1, 4, 10, 4, 0, 0, 0, 0, 1, 0, 21),
(16, 'Magnus Paajarvi', 'STL', 23, 2, 1, 3, -3, 8, 0, 0, 0, 0, 0, 0, 29),
(17, 'Oskar Sundqvist', 'STL', 23, 0, 3, 3, -2, 6, 0, 0, 0, 0, 0, 0, 30),
(18, 'Chris Thorburn', 'STL', 17, 0, 3, 3, -2, 17, 0, 0, 0, 0, 0, 0, 15),
(19, 'Patrik Berglund', 'STL', 3, 2, 0, 2, -2, 4, 2, 2, 0, 0, 0, 0, 14),
(20, 'Sammy Blais', 'STL', 7, 1, 1, 2, -1, 2, 1, 1, 0, 0, 0, 0, 6),
(22, 'Artem Anisimov', 'CHI', 28, 12, 3, 15, 0, 6, 7, 7, 1, 1, 5, 0, 6),
(23, 'Lance Bouma', 'CHI', 28, 3, 4, 7, 5, 19, 0, 0, 0, 0, 1, 0, 32),
(24, 'Alex Debrincat', 'CHI', 28, 11, 9, 20, 1, 0, 1, 4, 0, 0, 0, 0, 52),
(25, 'Ryan Hartman', 'CHI', 27, 4, 10, 14, 6, 24, 1, 2, 0, 0, 0, 0, 41),
(26, 'John Hayden', 'CHI', 27, 3, 6, 9, 1, 21, 0, 0, 1, 1, 0, 0, 35),
(27, 'Marian Hossa', 'CHI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'Patrick Kane', 'CHI', 28, 10, 17, 27, -4, 14, 2, 9, 0, 0, 0, 0, 96),
(29, 'Tanner Kero', 'CHI', 8, 1, 2, 3, 1, 0, 0, 0, 0, 0, 0, 0, 7),
(30, 'Richard Panik', 'CHI', 28, 5, 9, 14, 4, 24, 3, 3, 0, 0, 0, 0, 55),
(31, 'Brandon Saad', 'CHI', 28, 10, 4, 14, -3, 0, 1, 1, 0, 0, 6, 2, 85),
(32, 'Nick Schmaltz', 'CHI', 24, 4, 12, 16, 6, 8, 0, 5, 0, 1, 0, 0, 34),
(33, 'Patrick Sharp', 'CHI', 28, 3, 4, 7, -6, 6, 0, 1, 0, 0, 0, 0, 62),
(34, 'Jonathan Toews', 'CHI', 28, 8, 11, 19, 2, 22, 1, 4, 0, 0, 0, 0, 79),
(35, 'Tommy Wingels', 'CHI', 25, 2, 4, 6, -4, 16, 0, 0, 0, 0, 0, 0, 32),
(36, 'Gustav Forsling', 'CHI', 25, 2, 6, 8, 3, 4, 1, 3, 0, 0, 0, 0, 48),
(37, 'Cody Franson', 'CHI', 18, 1, 6, 7, -3, 6, 0, 4, 0, 0, 0, 0, 40),
(38, 'Duncan Keith', 'CHI', 28, 0, 14, 14, -11, 12, 0, 4, 0, 0, 0, 0, 69),
(39, 'Michal Kempny', 'CHI', 13, 0, 3, 3, 8, 4, 0, 0, 0, 0, 0, 0, 19),
(40, 'Connor Murphy', 'CHI', 25, 1, 4, 5, 6, 11, 0, 0, 0, 0, 0, 0, 28),
(41, 'Jordan Oesterle', 'CHI', 4, 0, 1, 1, -2, 0, 0, 0, 0, 0, 0, 0, 5),
(43, 'Jan Rutta', 'CHI', 28, 3, 9, 12, 1, 18, 1, 3, 0, 0, 0, 0, 33),
(44, 'Brent Seabrook', 'CHI', 28, 1, 8, 9, 8, 20, 0, 2, 0, 0, 0, 0, 44);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `Team` text NOT NULL,
  `City` text NOT NULL,
  `TeamCode` text NOT NULL,
  `GamesPlayed` int(11) NOT NULL,
  `Points` int(11) NOT NULL,
  `Wins` int(11) NOT NULL,
  `Losses` int(11) NOT NULL,
  `OvertimeLosses` int(11) NOT NULL,
  `Division` text NOT NULL,
  `Conferences` text NOT NULL,
  `StanleyCups` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`Team`, `City`, `TeamCode`, `GamesPlayed`, `Points`, `Wins`, `Losses`, `OvertimeLosses`, `Division`, `Conferences`, `StanleyCups`) VALUES
('Blues', 'Saint Louis', 'STL', 28, 38, 18, 8, 2, 'Central', 'Western', '0'),
('Blackhawks', 'Chicago', 'CHI', 28, 29, 12, 11, 5, 'Central', 'Western', '6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

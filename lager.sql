-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2015 at 11:05 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lager`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `AID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `KID` text NOT NULL,
  `OID` text NOT NULL,
  `reserviert` int(11) NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`AID`, `name`, `KID`, `OID`, `reserviert`) VALUES
(1, 'Computer', 'technik', 'Dresden', 3),
(2, 'Arduino', 'technik', 'Berlin', 0),
(3, 'Holz', 'baumaterial', 'Berlin', 0),
(4, 'Steine', 'baumaterial', 'Berlin', 0),
(5, 'Sand', 'baumaterial', 'Berlin', 0),
(6, 'Router', 'technik', 'Berlin', 0),
(7, 'Holz', 'baumaterial', 'Dresden', 0),
(8, 'Sand', 'baumaterial', 'Dresden', 0),
(9, 'Sand', 'baumaterial', 'Dresden', 0),
(10, 'Lautsprecher', 'technik', 'Dresden', 0),
(11, 'Phablet', 'technik', 'Dresden', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nutzer`
--

CREATE TABLE IF NOT EXISTS `nutzer` (
  `BID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `passwort` text NOT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nutzer`
--

INSERT INTO `nutzer` (`BID`, `name`, `passwort`) VALUES
(1, 'peter', 'qe'),
(2, 'Jugend', 'ha'),
(3, 'user1', 'test1'),
(4, 'abcd', 'abc');

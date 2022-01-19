-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 13, 2021 at 10:21 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

DROP TABLE IF EXISTS `inbox`;
CREATE TABLE IF NOT EXISTS `inbox` (
  `email` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL,
  `idp` int(10) NOT NULL,
  KEY `idp` (`idp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`email`, `title`, `message`, `idp`) VALUES
('vlera.j@gmail.com', 'Hello!', 'I love your page!  It helped me a lot! Thanks! ', 0),
('ardamazreku@gmail.com', 'Hello!', 'This is the best application for travelbooking!', 0),
('erisab@gmail.com', 'Hello!', 'This website is the best to book your tickets! thanks!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `emri` varchar(35) NOT NULL,
  `pershkrimi` varchar(50) NOT NULL,
  `fotografia` varchar(20) NOT NULL,
  `link` varchar(500) NOT NULL,
  `idp` int(10) NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `idp` (`idp`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`p_id`, `emri`, `pershkrimi`, `fotografia`, `link`, `idp`) VALUES
(1, ' Mumbai, India', 'Visit Mumbai!', 'images/p-1.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AMumbai%20%28BOM%20-%20Chhatrapati%20Shivaji%20Intl.%29%2Cdeparture%3A11%2F3%2F2021TANYT&leg2=from%3AMumbai%20%28BOM%20-%20Chhatrapati%20Shivaji%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A11%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(2, ' Hawaii, US', 'Visit Hawaii!', 'images/p-2.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AHonolulu%2C%20HI%20%28HNL-Daniel%20K.%20Inouye%20Intl.%29%2Cdeparture%3A11%2F3%2F2021TANYT&leg2=from%3AHonolulu%2C%20HI%20%28HNL-Daniel%20K.%20Inouye%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A11%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(3, ' Dublin, Ireland', 'Visit Dublin!', 'images/p-33.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cto%3ADublin%20%28DUB%29%2Cdeparture%3A11%2F3%2F2021TANYT&leg2=from%3ADublin%20%28DUB%29%2Cto%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cdeparture%3A11%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(4, ' Paris, France', 'Visit Paris!', 'images/p-4.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cto%3AParis%20%28PAR%20-%20All%20Airports%29%2Cdeparture%3A11%2F3%2F2021TANYT&leg2=from%3AParis%20%28PAR%20-%20All%20Airports%29%2Cto%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cdeparture%3A11%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(5, ' Tokyo, Japan', 'Visit Tokyo!', 'images/p-5.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ATokyo%20%28TYO%20-%20All%20Airports%29%2Cdeparture%3A11%2F3%2F2021TANYT&leg2=from%3ATokyo%20%28TYO%20-%20All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A11%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(6, ' Cairo, Egypt', 'Visit Cairo!', 'images/p-6.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ACairo%20%28CAI%20-%20Cairo%20Intl.%29%2Cdeparture%3A11%2F3%2F2021TANYT&leg2=from%3ACairo%20%28CAI%20-%20Cairo%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A11%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(7, ' Rome, Italy', 'Visit Rome!', 'images/f-11.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ARome%20%28ROM-All%20Airports%29%2Cdeparture%3A11%2F3%2F2021TANYT&leg2=from%3ARome%20%28ROM-All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A11%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(8, ' New York City, US', 'Visit New York City!', 'images/f-2.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cto%3ANew%20York%2C%20NY%20%28NYC-All%20Airports%29%2Cdeparture%3A11%2F3%2F2021TANYT&leg2=from%3ANew%20York%2C%20NY%20%28NYC-All%20Airports%29%2Cto%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cdeparture%3A11%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(9, ' Istanbul, Turkey', 'Visit Istanbul!', 'images/f-3.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AIstanbul%20%28IST%29%2Cdeparture%3A11%2F7%2F2021TANYT&leg2=from%3AIstanbul%20%28IST%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A11%2F14%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(10, ' London, UK', 'Visit London!', 'images/f-4.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ALondon%20%28LON-All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ALondon%20%28LON-All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(11, ' Prague, Czech Republic', 'Visit Prague!', 'images/f-5.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3APrague%20%28PRG%20-%20Vaclav%20Havel%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3APrague%20%28PRG%20-%20Vaclav%20Havel%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(12, ' Amsterdam, Netherlands', 'Visit Amsterdam!', 'images/f-6.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AAmsterdam%20%28AMS%20-%20Schiphol%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AAmsterdam%20%28AMS%20-%20Schiphol%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(13, ' Vienna, Austria', 'Visit Vienna!', 'images/h-1.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AVienna%20%28VIE%20-%20Vienna%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AVienna%20%28VIE%20-%20Vienna%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(14, ' Berlin, Germany', 'Visit Berlin!', 'images/h-2.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ABerlin%20%28BER%20-%20Brandenburg%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ABerlin%20%28BER%20-%20Brandenburg%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(15, ' Madrid, Spain', 'Visit Madrid!', 'images/h-3.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AMadrid%20%28MAD%20-%20Adolfo%20Suarez%20Madrid-Barajas%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AMadrid%20%28MAD%20-%20Adolfo%20Suarez%20Madrid-Barajas%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(16, ' Edinburgh, UK', 'Visit Edinburgh!', 'images/h-4.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AEdinburgh%20%28EDI%20-%20Edinburgh%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AEdinburgh%20%28EDI%20-%20Edinburgh%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(17, ' Bergen, Norway ', 'Visit Bergen!', 'images/h-5.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ABergen%20%28BGO%20-%20Flesland%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ABergen%20%28BGO%20-%20Flesland%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(18, ' Helsinki, Finland ', 'Visit Helsinki!', 'images/h-6.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AHelsinki%20%28HEL%20-%20Vantaa%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AHelsinki%20%28HEL%20-%20Vantaa%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(19, ' Stockholm, Sweden', 'Visit Stockholm!', 'images/j-1.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AStockholm%20%28STO%20-%20All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AStockholm%20%28STO%20-%20All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(20, ' Zurich, Switzerland ', 'Visit Zurich!', 'images/j-2.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AZurich%20%28ZRH%20-%20Zurich%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AZurich%20%28ZRH%20-%20Zurich%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(21, ' Lisbon, Portugal ', 'Visit Lisbon!', 'images/j-3.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ALisbon%20%28LIS%20-%20Humberto%20Delgado%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ALisbon%20%28LIS%20-%20Humberto%20Delgado%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(22, ' Tirana, Albania', 'Visit Tirana!', 'images/j-4.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3ALondon%20%28LON%20-%20All%20Airports%29%2Cto%3ATirana%20%28TIA-Nene%20Tereza%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ATirana%20%28TIA-Nene%20Tereza%20Intl.%29%2Cto%3ALondon%20%28LON%20-%20All%20Airports%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(23, ' Pristina, Kosovo ', 'Visit Pristina!', 'images/j-5.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3ALondon%20%28LON-All%20Airports%29%2Cto%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cto%3ALondon%20%28LON-All%20Airports%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(24, ' Skopje, Macedonia', 'Visit Skopje!', 'images/j-6.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3ALondon%20%28LON-All%20Airports%29%2Cto%3ASkopje%20%28SKP%20-%20Alexander%20the%20Great%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ASkopje%20%28SKP%20-%20Alexander%20the%20Great%29%2Cto%3ALondon%20%28LON-All%20Airports%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(25, ' Moscow, Russia', 'Visit Moscow!', 'images/i-1.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AMoscow%20%28MOW%20-%20All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AMoscow%20%28MOW%20-%20All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(26, ' Los Angeles, US', 'Visit Los Angeles!', 'images/i-2.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ALos%20Angeles%20%28LAX%20-%20Los%20Angeles%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ALos%20Angeles%20%28LAX%20-%20Los%20Angeles%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(27, ' Seoul, South Korea ', 'Visit Seoul!', 'images/i-3.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ASeoul%20%28ICN%20-%20Incheon%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ASeoul%20%28ICN%20-%20Incheon%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(28, ' Athens, Greece ', 'Visit Athens!', 'images/i-4.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AAthens%20%28ATH%20-%20Eleftherios%20Venizelos%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AAthens%20%28ATH%20-%20Eleftherios%20Venizelos%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(29, ' Mexico City, Mexico ', 'Visit Mexico!', 'images/i-5.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AMexico%20City%20%28MEX%20-%20Mexico%20City%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AMexico%20City%20%28MEX%20-%20Mexico%20City%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(30, ' Rio de Janeiro, Brazil ', 'Visit Rio de Janeiro!', 'images/i-6.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ARio%20de%20Janeiro%20%28RIO-All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ARio%20de%20Janeiro%20%28RIO-All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(31, ' Delhi, India', 'Visit Delhi!', 'images/k-1.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ADelhi%20%28DEL%20-%20Indira%20Gandhi%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ADelhi%20%28DEL%20-%20Indira%20Gandhi%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(32, ' Kuala Lumpur, Malaysia', 'Visit Kuala Lumpur!', 'images/k-2.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AKuala%20Lumpur%20%28KUL%20-%20All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AKuala%20Lumpur%20%28KUL%20-%20All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(33, ' Dubai, United Arab Emirates', 'Visit Dubai!', 'images/k-3.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ADubai%20%28DXB%20-%20All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ADubai%20%28DXB%20-%20All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(34, ' Bangkok, Thailand', 'Visit Bangkok!', 'images/k-4.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ABangkok%20%28BKK%20-%20All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ABangkok%20%28BKK%20-%20All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(35, ' Hong Kong, China', 'Visit Hong Kong!', 'images/k-5.jpeg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cto%3AHong%20Kong%20%28HKG-Hong%20Kong%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AHong%20Kong%20%28HKG-Hong%20Kong%20Intl.%29%2Cto%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(36, ' Singapore', 'Visit Singapore!', 'images/k-6.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ASingapore%20%28SIN%20-%20Changi%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ASingapore%20%28SIN%20-%20Changi%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(37, ' Toronto, Canada', 'Visit Toronto!', 'images/l-1.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AToronto%20%28YYZ%20-%20Pearson%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AToronto%20%28YYZ%20-%20Pearson%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(38, ' Warsaw, Poland', 'Visit Warsaw!', 'images/l-2.jpeg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AWarsaw%20%28WAW%20-%20Frederic%20Chopin%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AWarsaw%20%28WAW%20-%20Frederic%20Chopin%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(39, ' Kyiv, Ukraine', 'Visit Kyiv!', 'images/l-3.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AKyiv%20%28KBP%20-%20Borispol%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AKyiv%20%28KBP%20-%20Borispol%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(40, ' Bucharest, Romania', 'Visit Bucharest!', 'images/l-4.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ABucharest%20%28OTP%20-%20Henri%20Coanda%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ABucharest%20%28OTP%20-%20Henri%20Coanda%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(41, ' Copenhagen, Denmark', 'Visit Copenhagen!', 'images/l-5.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ACopenhagen%20%28CPH%20-%20Kastrup%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ACopenhagen%20%28CPH%20-%20Kastrup%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(42, ' Budapest, Hungary', 'Visit Budapest!', 'images/l-6.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ABudapest%20%28BUD%20-%20Ferenc%20Liszt%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ABudapest%20%28BUD%20-%20Ferenc%20Liszt%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(43, ' Johannesburg, South Africa', 'Visit Johannesburg!', 'images/v-1.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AJohannesburg%20%28JNB%20-%20O.R.%20Tambo%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AJohannesburg%20%28JNB%20-%20O.R.%20Tambo%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(44, ' Buenos Aires, Argentina', 'Visit Buenos Aires!', 'images/v-2.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3ANew%20York%20%28NYC%20-%20All%20Airports%29%2Cto%3ABuenos%20Aires%20%28BUE-All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ABuenos%20Aires%20%28BUE-All%20Airports%29%2Cto%3ANew%20York%20%28NYC%20-%20All%20Airports%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0),
(45, ' Auckland, New Zealand', 'Visit Auckland!', 'images/v-3.jpg', 'https://www.travelocity.com/Flights-Search?leg1=from%3ANew%20York%2C%20NY%20%28NYC-All%20Airports%29%2Cto%3AAuckland%20%28AKL%20-%20Auckland%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AAuckland%20%28AKL%20-%20Auckland%20Intl.%29%2Cto%3ANew%20York%2C%20NY%20%28NYC-All%20Airports%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip', 0);

-- --------------------------------------------------------

--
-- Table structure for table `perdoruesi`
--

DROP TABLE IF EXISTS `perdoruesi`;
CREATE TABLE IF NOT EXISTS `perdoruesi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `emri` varchar(30) NOT NULL,
  `mbiemri` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `roli` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roli` (`roli`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perdoruesi`
--

INSERT INTO `perdoruesi` (`id`, `emri`, `mbiemri`, `email`, `password`, `roli`) VALUES
(1, 'Festa', 'Mazreku', 'festamazreku@gmail.com', 'Festa99', 1),
(2, 'Vlera', 'Januzi', 'vlera.j@gmail.com', 'Vlera98', 2),
(3, 'Erisa', 'Bytyqi', 'erisab@gmail.com', 'Erisa2000', 2),
(4, 'Arda', 'Mazreku', 'ardamazreku@gmail.com', 'Arda99', 2),
(6, 'Learta', 'Spahiu', 'leartas@gmail.com', 'Learta9999', 2);

-- --------------------------------------------------------

--
-- Table structure for table `roli`
--

DROP TABLE IF EXISTS `roli`;
CREATE TABLE IF NOT EXISTS `roli` (
  `roli` int(1) NOT NULL,
  `r_pershkrimi` varchar(15) NOT NULL,
  PRIMARY KEY (`roli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roli`
--

INSERT INTO `roli` (`roli`, `r_pershkrimi`) VALUES
(1, 'Administratori'),
(2, 'Klienti');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

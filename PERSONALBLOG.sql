-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2021 at 11:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PERSONALBLOG`
--

-- --------------------------------------------------------

--
-- Table structure for table `CONTACTS`
--

CREATE TABLE `CONTACTS` (
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `MESSAGE` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CONTACTS`
--

INSERT INTO `CONTACTS` (`NAME`, `EMAIL`, `MESSAGE`) VALUES
('BOB', 'bob@gmail.com', 'Hello, this is a wonderfulsite'),
('jerry parker', 'jerry@gmail.com', 'This is Jerry testing');

-- --------------------------------------------------------

--
-- Table structure for table `PROJECTS`
--

CREATE TABLE `PROJECTS` (
  `NAME` varchar(50) NOT NULL,
  `DESCRIPTION` varchar(200) NOT NULL,
  `IMAGE` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PROJECTS`
--

INSERT INTO `PROJECTS` (`NAME`, `DESCRIPTION`, `IMAGE`) VALUES
('Zoddock', 'Zoddock is an e-commerce platform', 'zoddock.jpg'),
('Twambale', 'clothings website', 'twambale.jpg'),
('Ice Services Inc', 'Cleaning company', 'ice.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

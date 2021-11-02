-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2021 at 09:53 PM
-- Server version: 10.3.29-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bit-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bericht` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `naam`, `email`, `bericht`) VALUES
(6, 'Simon Sandberg', '2104259@talnet.nl', 'wsdrfghj'),
(7, 'tinne', '1234@talnet.nl', 'hoi ');

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL,
  `Naam` varchar(100) DEFAULT NULL,
  `Achternaam` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `wachtwoord` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `Naam`, `Achternaam`, `username`, `wachtwoord`, `email`) VALUES
(27, 'admin', 'admin', 'admin', 'admin', NULL),
(28, 'test', 'test', 'tinne', 'tinne', NULL),
(29, 'Martijn', 'Booij', 'Martijn', 'Martijn', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `producten`
--

CREATE TABLE `producten` (
  `ID` int(11) NOT NULL,
  `titel` varchar(255) DEFAULT NULL,
  `omschrijving` varchar(255) DEFAULT NULL,
  `preview` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `spec` varchar(255) DEFAULT NULL,
  `imagenaam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producten`
--

INSERT INTO `producten` (`ID`, `titel`, `omschrijving`, `preview`, `foto`, `spec`, `imagenaam`) VALUES
(1, 'Space Collection | 1', 'Het eerste exemplaar van de Space Collection! \r\n\r\n', ' https://i.ibb.co/Ybc9qBk/7.png', 'https://i.ibb.co/Ybc9qBk/7.png', 'Afmeting: 1920 x 1080 <html><br></html>\r\nPrijs: 50 Credits', 'wp1.png'),
(2, 'Space Collection | 2', 'Het tweede exemplaar van de Space Collection!', ' ', 'https://i.ibb.co/qY4ht1v/8.png', 'Afmeting: 1920 x 1080 <html><br></html>\r\nPrijs: 50 Credits', 'wp2.png'),
(3, 'Space Collection | 3', 'Het derde exemplaar van de Space Collection!', ' ', ' https://i.ibb.co/Tc3RXBC/9.png', 'Afmeting: 1920 x 1080 <html><br></html>\r\nPrijs: 50 Credits', 'wp3.png'),
(4, 'Space Collection | 4', 'Het vierde exemplaar van de Space Collection!', ' ', ' https://i.ibb.co/55vZYT2/10.png', 'Afmeting: 1920 x 1080 <html><br></html>\r\nPrijs: 50 Credits', 'wp4.png'),
(5, 'Space Collection | 5', 'Het vijfde exemplaar van de Space Collection!', ' ', ' https://i.ibb.co/9WSSy88/11.png', 'Afmeting: 1920 x 1080 <html><br></html>\r\nPrijs: 50 Credits', 'wp5.png'),
(6, 'Space Collection | 6', 'Het zesde exemplaar van de Space Collection!', ' ', ' https://i.ibb.co/ZxPVPh8/12.png', 'Afmeting: 1920 x 1080 <html><br></html>\r\nPrijs: 50 Credits', 'wp6.png'),
(7, 'Code Collection | 1', 'Het eerste exemplaar van de Code Collection!', ' ', 'https://i.ibb.co/hXrqdCc/6.png', 'Afmeting: 1920 x 1080 <html><br></html>\r\nPrijs: 50 Credits', 'wp7.png'),
(8, 'Code Collection | 2', 'Het tweede exemplaar van de Code Collection!', ' ', 'https://i.ibb.co/ySTY6nQ/2.png', 'Afmeting: 1920 x 1080 <html><br></html>\r\nPrijs: 50 Credits', 'wp8.png'),
(9, 'Code Collection | 3', 'Het derde exemplaar van de Code Collection!', ' ', ' https://i.ibb.co/5vPL5gG/3.png', 'Afmeting: 1920 x 1080 <html><br></html>\r\nPrijs: 50 Credits', 'wp9.png'),
(10, 'Code Collection | 4', 'Het vierde exemplaar van de Code Collection!', ' ', ' https://i.ibb.co/Q6T1Q5F/5.png', 'Afmeting: 1920 x 1080 <html><br></html>\r\nPrijs: 50 Credits', 'wp10.png'),
(11, 'Code Collection | 5', 'Het vijfde exemplaar van de Code Collection!', ' ', 'https://i.ibb.co/pQDpMPv/4.png', 'Afmeting: 1920 x 1080 <html><br></html>\r\nPrijs: 50 Credits', 'wp11.png'),
(12, 'Code Collection | 6', 'Het zesde exemplaar van de Code Collection!', ' ', ' https://i.ibb.co/7bL1NBT/1.png ', 'Afmeting: 1920 x 1080 <html><br></html>\r\nPrijs: 50 Credits', 'wp12.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `producten`
--
ALTER TABLE `producten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

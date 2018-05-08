-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 02:34 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengyu`
--
CREATE DATABASE IF NOT EXISTS `pengyu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pengyu`;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `Package_ID` mediumint(9) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `Starting_Price` varchar(20) NOT NULL,
  `img_src` text NOT NULL,
  `Links` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`Package_ID`, `Destination`, `Starting_Price`, `img_src`, `Links`) VALUES
(1, 'Manila', '3250', 'manila.png', ''),
(2, 'Rizal', '3470', 'rizal.png', ''),
(4, 'Laguna', '3894', 'laguna.png', ''),
(5, 'Bulacan', '3990', 'bulacan.png', ''),
(6, 'Pampanga', '4486', 'pampanga.png', ''),
(7, 'Batangas', '4608', 'batangas.png', ''),
(8, 'Quezon', '5299', 'quezon.png', ''),
(9, 'Bataan', '4704', 'bataan.png', ''),
(10, 'Zambales', '6218', 'zambales.png', ''),
(11, 'Sagada', '9434', 'sagada.png', ''),
(12, 'Bicol', '7999', 'bicol.png', ''),
(13, 'Ilocos Norte', '8288', 'vigan.png', ''),
(14, 'Isabela', '8884', 'isabela.png', ''),
(15, 'Ilocos Sur', '10388', 'ilocossur.png', ''),
(16, 'Tarlac', '5500', 'camiguin,tarlac.png', ''),
(17, 'Baguio', '7488', 'baguio.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengyu_users`
--

CREATE TABLE `pengyu_users` (
  `UserID` mediumint(9) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `psword` text NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `ContactNumber` varchar(11) NOT NULL,
  `Access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengyu_users`
--

INSERT INTO `pengyu_users` (`UserID`, `Email`, `psword`, `Lname`, `Fname`, `Address`, `ContactNumber`, `Access`) VALUES
(1, 'test@test.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'test', 'test', 'test', '12332112', 0),
(2, 'Japhet.aldunar86@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Alduñar', 'Japhet', '262 San Agustin 2 Dasmariñas City, Cavite', '09059103479', 1),
(3, 'Japhet.aldunar86@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Alduñar', 'Japhet', '262 San Agustin 2 Dasmariñas City, Cavite', '09059103479', 1),
(4, 'Japhet.aldunar86@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Alduñar', 'Japhet', '262 San Agustin 2 Dasmariñas City, Cavite', '09059103479', 1),
(5, 'a', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 'test', 'test', 'test@testtest.com', 'aaaaaaa', 1),
(6, 'a', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 'test', 'test', 'test@testtest.com', 'aaaaaaa', 1),
(8, '111@111', '17ba0791499db908433b80f37c5fbc89b870084b', 'test2', 'test2', '1234', '123', 1),
(9, 'ff@ff.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'ff', 'ff', 'ff@ff.com', 'FFf', 1),
(10, 'ff@ff.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'ff', 'ff', 'ff@ff.com', 'FFf', 1),
(11, 'ff@ff.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'ff', 'ff', 'ff@ff.com', 'FFf', 1),
(12, 'japhet@japhet.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'japhet', 'japhet', 'japhet@japhet.com', '12312312312', 1),
(13, 'qewr@dsf', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '11', '11', 'qwerqwe', 'qwer', 1),
(14, 'AIRA@AIRA.COM', '3b61df1b2a021fe617a67d7b3f6d358955deaeca', 'AIRA', 'AIRA', 'AIRAAIRAAIRAAIRAAIRA', 'AIRA', 1),
(15, 'admin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'admin', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Reservation_ID` mediumint(9) NOT NULL,
  `ClientID` mediumint(11) NOT NULL,
  `ClientFname` varchar(50) NOT NULL,
  `ClientLname` varchar(11) NOT NULL,
  `ContactNumber` varchar(11) NOT NULL,
  `Destination` varchar(15) NOT NULL,
  `DateofRent` varchar(10) NOT NULL,
  `EndofRent` varchar(10) NOT NULL,
  `PickupLocation` varchar(70) NOT NULL,
  `StartingPrice` varchar(20) NOT NULL,
  `TotalPrice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Reservation_ID`, `ClientID`, `ClientFname`, `ClientLname`, `ContactNumber`, `Destination`, `DateofRent`, `EndofRent`, `PickupLocation`, `StartingPrice`, `TotalPrice`) VALUES
(1, 14, 'AIRA', 'AIRA', 'Rizal', 'AIRA', '05/09/2018', '05/10/2018', 'Dasmariñas Municipio', 'ss', 'ss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`Package_ID`);

--
-- Indexes for table `pengyu_users`
--
ALTER TABLE `pengyu_users`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Reservation_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `Package_ID` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pengyu_users`
--
ALTER TABLE `pengyu_users`
  MODIFY `UserID` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Reservation_ID` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

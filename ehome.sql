-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 09:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehome`
--

-- --------------------------------------------------------

--
-- Table structure for table `houseinfo`
--

CREATE TABLE `houseinfo` (
  `OwnerID` int(11) UNSIGNED DEFAULT NULL,
  `HouseID` int(11) UNSIGNED NOT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Rented` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ownerlogin`
--

CREATE TABLE `ownerlogin` (
  `OwnerID` int(11) UNSIGNED NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `UserID` int(11) UNSIGNED NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Code` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`UserID`, `Email`, `Password`, `Code`) VALUES
(8, 'malwarefrondo@gmail.com', 'zxc', '59920'),
(9, 'jizzthekid4@gmail.com', '123', '0'),
(10, 'tranvaa@gmail.com', '123', '0'),
(11, 'tranvag', '123', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `houseinfo`
--
ALTER TABLE `houseinfo`
  ADD PRIMARY KEY (`HouseID`),
  ADD KEY `OwnerID` (`OwnerID`);

--
-- Indexes for table `ownerlogin`
--
ALTER TABLE `ownerlogin`
  ADD PRIMARY KEY (`OwnerID`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `houseinfo`
--
ALTER TABLE `houseinfo`
  MODIFY `HouseID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ownerlogin`
--
ALTER TABLE `ownerlogin`
  MODIFY `OwnerID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `UserID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `houseinfo`
--
ALTER TABLE `houseinfo`
  ADD CONSTRAINT `houseinfo_ibfk_1` FOREIGN KEY (`OwnerID`) REFERENCES `ownerlogin` (`OwnerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

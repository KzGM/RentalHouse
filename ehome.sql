-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 07:10 AM
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
  `image` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `HID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `HAddress` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `img0` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`HID`, `Title`, `Price`, `HAddress`, `Contact`, `Description`, `img0`, `img1`, `img2`, `img3`, `img4`) VALUES
(1, 'Apartment with kitchen and attic', '8500000.00', 'Da Nang', '0914356650', '-', '/DuyDat/img/nha1_00.png', '/DuyDat/img/nha1_01.png', '/DuyDat/img/nha1_02.png', '/DuyDat/img/nha1_03.png', '/DuyDat/img/nha1_04.png'),
(2, 'Apartment with full household appliance and a bathroom', '6879000.00', 'TP HCM', '0977757533', '-', '/DuyDat/img/nha2_00.png', '/DuyDat/img/nha2_01.png', '/DuyDat/img/nha2_02.png', '/DuyDat/img/nha2_03.png', '/DuyDat/img/nha2_04.png'),
(3, 'Boarding house with 1 bathroom and small kitchen corner', '6000000.00', 'TP HCM', '0333884567', '-', '/DuyDat/img/nha3_00.png', '/DuyDat/img/nha3_01.png', '/DuyDat/img/nha3_02.png', '/DuyDat/img/nha3_03.png', '/DuyDat/img/nha3_04.png'),
(4, 'Boarding house with small attic and a bathroom', '4250000.00', 'Da Nang', '0974742323', '-', '/DuyDat/img/nha4_00.png', '/DuyDat/img/nha4_01.png', '/DuyDat/img/nha4_02.png', '/DuyDat/img/nha4_03.png', '/DuyDat/img/nha4_04.png');

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
(12, 'khoalieudang@gmail.com', '123', ''),
(13, 'aaa@gmail.com', '123', ''),
(14, 'khoalieudang1@gmail.com', '123', ''),
(15, 'testscrum7@gmail.com', '123', '83759'),
(16, 'aa1@gmail.com', '123', '');

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
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`HID`);

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
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `HID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ownerlogin`
--
ALTER TABLE `ownerlogin`
  MODIFY `OwnerID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `UserID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2020 at 12:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Competition`
--

-- --------------------------------------------------------

--
-- Table structure for table `Members`
--

CREATE TABLE `Members` (
  `TeamName` varchar(256) DEFAULT NULL,
  `UserName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Members`
--

INSERT INTO `Members` (`TeamName`, `UserName`) VALUES
(NULL, 'asif'),
(NULL, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `Team`
--

CREATE TABLE `Team` (
  `Name` varchar(256) NOT NULL,
  `MemberCount` int(11) NOT NULL,
  `PUBLIC` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `TeamInvite`
--

CREATE TABLE `TeamInvite` (
  `Link` varchar(5000) NOT NULL,
  `TeamName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(5000) NOT NULL,
  `email` varchar(256) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `Name`, `username`, `password`, `email`, `admin`) VALUES
(1, 'Asif Rasheed', 'asif', '5f4dcc3b5aa765d61d8327deb882cf99', 'asif@linuxmail.org', 1),
(2, 'Asif Rasheed', 'test', '5f4dcc3b5aa765d61d8327deb882cf99', 'asifrasheeeed@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Verify`
--

CREATE TABLE `Verify` (
  `hash` varchar(5000) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Members`
--
ALTER TABLE `Members`
  ADD PRIMARY KEY (`UserName`) USING BTREE,
  ADD KEY `MEMBER_FK` (`TeamName`);

--
-- Indexes for table `Team`
--
ALTER TABLE `Team`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `TeamInvite`
--
ALTER TABLE `TeamInvite`
  ADD KEY `INVITE_FK` (`TeamName`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USER_NAME_FK` (`username`);

--
-- Indexes for table `Verify`
--
ALTER TABLE `Verify`
  ADD KEY `Verify` (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Members`
--
ALTER TABLE `Members`
  ADD CONSTRAINT `MEMBER_FK` FOREIGN KEY (`TeamName`) REFERENCES `Team` (`Name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `TeamInvite`
--
ALTER TABLE `TeamInvite`
  ADD CONSTRAINT `INVITE_FK` FOREIGN KEY (`TeamName`) REFERENCES `Team` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `USER_NAME_FK` FOREIGN KEY (`username`) REFERENCES `Members` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Verify`
--
ALTER TABLE `Verify`
  ADD CONSTRAINT `Verify` FOREIGN KEY (`id`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

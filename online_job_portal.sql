-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 10:53 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADMIN_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `LAST_NAME` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `EMAIL` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `PASSWORD` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `PHN_NO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `REGISTRATION_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE `confirmation` (
  `CONFIRMATION_ID` int(11) NOT NULL,
  `NOTIFICATION_NO` int(11) NOT NULL,
  `NOTIFICATION_TEXT` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FEEDBACK_ID` int(11) NOT NULL,
  `RATING` tinyint(11) NOT NULL,
  `COMMENT` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_povider_address`
--

CREATE TABLE `job_povider_address` (
  `ADDRESS_ID` int(11) NOT NULL,
  `AREA_NAME` varchar(45) NOT NULL,
  `POSTAL_CODE` varchar(45) NOT NULL,
  `CITY_NAME` varchar(45) NOT NULL,
  `HOUSE_NO` tinyint(10) NOT NULL,
  `ROAD_NO` tinyint(10) NOT NULL,
  `JOB_PROVIDER_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_provider`
--

CREATE TABLE `job_provider` (
  `JOB_PROVIDER_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(50) DEFAULT NULL,
  `LAST_NAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `PHN_NO` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `REGISTRATION_DATE` date NOT NULL,
  `CITY` tinytext DEFAULT NULL,
  `ADDRESS` mediumtext DEFAULT NULL,
  `CONFIRMATION_ID` int(11) DEFAULT NULL,
  `FEEDBACK_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_provider_has_job_seeker`
--

CREATE TABLE `job_provider_has_job_seeker` (
  `JOB_PROVIDER_ID` int(11) NOT NULL,
  `JOB_SEEKER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `JOB_SEEKER_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(50) DEFAULT NULL,
  `LAST_NAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `PHN_NO` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `REGISTRATION_DATE` date NOT NULL,
  `QUALIFICATION` mediumtext DEFAULT NULL,
  `EXPERIENCE` mediumtext DEFAULT NULL,
  `CITY` tinytext DEFAULT NULL,
  `ADDRESS` mediumtext DEFAULT NULL,
  `JOB_NAME` varchar(50) DEFAULT NULL,
  `MINIMUM_SALARY` tinytext DEFAULT NULL,
  `CONFIRMATION_ID` int(11) DEFAULT NULL,
  `FEEDBACK_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offline_job`
--

CREATE TABLE `offline_job` (
  `OFFLINE_JOB_ID` int(11) NOT NULL,
  `JOB_NAME` varchar(45) NOT NULL,
  `AGGREMENT` mediumtext NOT NULL,
  `JOB_SEEKER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `online_job`
--

CREATE TABLE `online_job` (
  `ONLINE_JOB_ID` int(11) NOT NULL,
  `JOB_NAME` varchar(45) NOT NULL,
  `JOB_SEEKER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registor`
--

CREATE TABLE `registor` (
  `REGISTRATION_ID` int(11) NOT NULL,
  `JOB_PROVIDER_ID` int(11) DEFAULT NULL,
  `JOB_SEEKER_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMIN_ID`),
  ADD KEY `REGISTRATION_ID` (`REGISTRATION_ID`);

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD PRIMARY KEY (`CONFIRMATION_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FEEDBACK_ID`);

--
-- Indexes for table `job_povider_address`
--
ALTER TABLE `job_povider_address`
  ADD PRIMARY KEY (`ADDRESS_ID`),
  ADD KEY `job_provider_1` (`JOB_PROVIDER_ID`);

--
-- Indexes for table `job_provider`
--
ALTER TABLE `job_provider`
  ADD PRIMARY KEY (`JOB_PROVIDER_ID`),
  ADD KEY `job_seeker_1` (`CONFIRMATION_ID`),
  ADD KEY `job_seeker_2` (`FEEDBACK_ID`);

--
-- Indexes for table `job_provider_has_job_seeker`
--
ALTER TABLE `job_provider_has_job_seeker`
  ADD KEY `job_provider_has_job_seeker_2` (`JOB_SEEKER_ID`),
  ADD KEY `job_provider_has_job_seeker_1` (`JOB_PROVIDER_ID`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`JOB_SEEKER_ID`),
  ADD KEY `job_seeker_1` (`CONFIRMATION_ID`),
  ADD KEY `job_seeker_2` (`FEEDBACK_ID`);

--
-- Indexes for table `offline_job`
--
ALTER TABLE `offline_job`
  ADD PRIMARY KEY (`OFFLINE_JOB_ID`),
  ADD KEY `offline_job` (`JOB_SEEKER_ID`);

--
-- Indexes for table `online_job`
--
ALTER TABLE `online_job`
  ADD PRIMARY KEY (`ONLINE_JOB_ID`),
  ADD KEY `online_job` (`JOB_SEEKER_ID`);

--
-- Indexes for table `registor`
--
ALTER TABLE `registor`
  ADD PRIMARY KEY (`REGISTRATION_ID`),
  ADD KEY `registor_2` (`JOB_SEEKER_ID`),
  ADD KEY `registor_1` (`JOB_PROVIDER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ADMIN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job_provider`
--
ALTER TABLE `job_provider`
  MODIFY `JOB_PROVIDER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `JOB_SEEKER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`REGISTRATION_ID`) REFERENCES `registor` (`REGISTRATION_ID`);

--
-- Constraints for table `job_povider_address`
--
ALTER TABLE `job_povider_address`
  ADD CONSTRAINT `job_provider_1` FOREIGN KEY (`JOB_PROVIDER_ID`) REFERENCES `job_provider` (`JOB_PROVIDER_ID`);

--
-- Constraints for table `job_provider_has_job_seeker`
--
ALTER TABLE `job_provider_has_job_seeker`
  ADD CONSTRAINT `job_provider_has_job_seeker_1` FOREIGN KEY (`JOB_PROVIDER_ID`) REFERENCES `job_provider` (`JOB_PROVIDER_ID`),
  ADD CONSTRAINT `job_provider_has_job_seeker_2` FOREIGN KEY (`JOB_SEEKER_ID`) REFERENCES `job_seeker` (`JOB_SEEKER_ID`);

--
-- Constraints for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD CONSTRAINT `job_seeker_1` FOREIGN KEY (`CONFIRMATION_ID`) REFERENCES `confirmation` (`CONFIRMATION_ID`),
  ADD CONSTRAINT `job_seeker_2` FOREIGN KEY (`FEEDBACK_ID`) REFERENCES `feedback` (`FEEDBACK_ID`);

--
-- Constraints for table `offline_job`
--
ALTER TABLE `offline_job`
  ADD CONSTRAINT `offline_job` FOREIGN KEY (`JOB_SEEKER_ID`) REFERENCES `job_seeker` (`JOB_SEEKER_ID`);

--
-- Constraints for table `online_job`
--
ALTER TABLE `online_job`
  ADD CONSTRAINT `online_job` FOREIGN KEY (`JOB_SEEKER_ID`) REFERENCES `job_seeker` (`JOB_SEEKER_ID`);

--
-- Constraints for table `registor`
--
ALTER TABLE `registor`
  ADD CONSTRAINT `registor_1` FOREIGN KEY (`JOB_PROVIDER_ID`) REFERENCES `job_provider` (`JOB_PROVIDER_ID`),
  ADD CONSTRAINT `registor_2` FOREIGN KEY (`JOB_SEEKER_ID`) REFERENCES `job_seeker` (`JOB_SEEKER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

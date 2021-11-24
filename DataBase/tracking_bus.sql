-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 11:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracking_bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'jongar', 'ma5asak');

-- --------------------------------------------------------

--
-- Table structure for table `android_dlocation`
--

CREATE TABLE `android_dlocation` (
  `bus_number` int(16) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `starttime` varchar(32) NOT NULL DEFAULT current_timestamp(),
  `endtime` varchar(32) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `complaints` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `android_dlocation`
--

INSERT INTO `android_dlocation` (`bus_number`, `latitude`, `longitude`, `starttime`, `endtime`, `date`, `complaints`) VALUES
(1, 33.8520269, 35.5066178, '13:50:15', '', '2021-01-11 13:50:15', NULL),
(3, 33.726181, 35.456841, '13:50:15', '', '2021-01-11 13:50:15', NULL),
(1, 33.8520269, 35.5066178, '00:00:00', '', '2021-01-11 14:35:16', 'test test test'),
(3, 33.33, 33.44, '00:00:12', '', '2021-01-16 14:08:48', 'aaa'),
(3, 33.33, 33.44, '00:00:12', '', '2021-01-16 14:08:48', 'aaa'),
(5, 33.8141243, 35.5125546, 'null', '', '2021-01-16 14:14:39', ''),
(4, 33.8141446, 35.5125715, '10:21 PM', '10:21 PM', '2021-01-16 22:22:31', 'sjsns'),
(4, 33.8141446, 35.5125715, '10:22 PM', '10:23 PM', '2021-01-16 22:23:37', 'sjsns'),
(4, 33.8141446, 35.5125715, '10:22 PM', '10:23 PM', '2021-01-16 22:23:37', 'sjsns'),
(4, 33.8141446, 35.5125715, 'null', '10:48 PM', '2021-01-16 22:48:07', ''),
(4, 33.8141446, 35.5125715, '10:50 PM', '10:51 PM', '2021-01-16 22:51:23', 'Everything was good');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bus_id` int(11) NOT NULL,
  `driver_uname` varchar(255) NOT NULL,
  `driver_psw` varchar(255) NOT NULL,
  `bus_number` int(22) NOT NULL,
  `driver_name` text NOT NULL,
  `driver_phone` varchar(255) NOT NULL,
  `bus_travel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `driver_uname`, `driver_psw`, `bus_number`, `driver_name`, `driver_phone`, `bus_travel`) VALUES
(3, 'daniel', 'daniel', 1, 'daniel', '70707070', 0),
(4, 'ali', 'ali', 2, 'ali', '70929693', 0),
(6, 'machaal', 'machaal', 3, 'machall al danaf', '70929292', 0),
(7, 'abbas_zein', '78900478', 6, 'Abbass Kassem Zein', '78900478', 0),
(8, 'abbas_17', '78900478', 5, 'Abbass Kassem Zein', '78900478', 0),
(15, 'abszein', '78900478', 4, 'Abbass Kassem Zein', '78900479', 0);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_id` int(11) NOT NULL,
  `parent_uname` varchar(255) NOT NULL,
  `parent_password` varchar(255) NOT NULL,
  `parent_name` varchar(255) NOT NULL,
  `parent_family` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `parent_email` varchar(255) NOT NULL,
  `bus_number` int(16) NOT NULL,
  `parent_location` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `parent_uname`, `parent_password`, `parent_name`, `parent_family`, `student_name`, `parent_email`, `bus_number`, `parent_location`) VALUES
(1, 'hazimeh', 'password', 'sami', 'hazimeh', 'ali', '', 1, 'Jamous'),
(2, 'test', 'test', 'test', 'test', 'Mohamad Sami Hazimeh', '', 0, ''),
(10, 'abbas_17', 'abbas_password', 'Abbas', 'Zein', 'Adam', '', 3, 'Chouifat'),
(13, 'rand_17', 'Ranoud123', 'Rand', 'AboudDiab', 'Ali', '', 3, 'Jehliye'),
(16, 'tttttttttt', 'password', 'test', 'test', 'Mohamad Sami Hazimeh', 'mohamad.hazime90@gmail.com', 3, 'Beirut'),
(17, 'Hazimko', 'P@ssw0rd', 'Ali', 'Hazimeh', 'Hassan', 'ahazime94@gmail.com', 3, 'Amrosieh');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `review_date` datetime NOT NULL DEFAULT current_timestamp(),
  `distance` int(255) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `review_date`, `distance`, `time_start`, `time_end`) VALUES
(1, '2021-01-09 01:54:15', 100, '00:00:00', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_username` (`admin_username`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bus_id`),
  ADD UNIQUE KEY `bus_number` (`bus_number`),
  ADD UNIQUE KEY `driver_uname` (`driver_uname`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_id`),
  ADD UNIQUE KEY `parent_uname` (`parent_uname`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD UNIQUE KEY `review_id` (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

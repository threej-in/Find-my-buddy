-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 05:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `find_my_buddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_master`
--

CREATE TABLE `activity_master` (
  `act_id` int(11) NOT NULL,
  `act_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buddy_activity`
--

CREATE TABLE `buddy_activity` (
  `buddy_emailid` varchar(64) NOT NULL,
  `act_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buddy_master`
--

CREATE TABLE `buddy_master` (
  `buddy_name` varchar(25) NOT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `buddy_type` varchar(10) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `Mobile_No` varchar(10) NOT NULL,
  `buddy_email` varchar(64) NOT NULL,
  `rating` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `fav_subject` varchar(25) NOT NULL,
  `skills` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buddy_master`
--

INSERT INTO `buddy_master` (`buddy_name`, `Gender`, `DOB`, `buddy_type`, `password`, `Mobile_No`, `buddy_email`, `rating`, `address`, `fav_subject`, `skills`) VALUES
('DEV', 'male', '2023-02-02', '', 'c6ce621f611d92132c4b9fdc80cdb8aa1711e6e4b817eeb5eadf89fab0cd20f4', '', 'sanmayuantani@gmail.com', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `place_master`
--

CREATE TABLE `place_master` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  `lattitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `place_type` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL,
  `is_verified` int(1) NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place_master`
--

INSERT INTO `place_master` (`place_id`, `place_name`, `lattitude`, `longitude`, `place_type`, `rating`, `is_verified`, `owner_id`) VALUES
(1, 'smc', 22.689768487864864, 72.78471618039336, 'library', 0, 0, 0),
(2, 'smc', 22.689768487864864, 72.78471618039336, 'library', 0, 0, 0),
(3, 'h', 22.723314627033556, 72.85228379986356, 'library', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_master`
--
ALTER TABLE `activity_master`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `buddy_activity`
--
ALTER TABLE `buddy_activity`
  ADD PRIMARY KEY (`buddy_emailid`,`act_id`);

--
-- Indexes for table `buddy_master`
--
ALTER TABLE `buddy_master`
  ADD PRIMARY KEY (`buddy_email`);

--
-- Indexes for table `place_master`
--
ALTER TABLE `place_master`
  ADD PRIMARY KEY (`place_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_master`
--
ALTER TABLE `activity_master`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `place_master`
--
ALTER TABLE `place_master`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buddy_activity`
--
ALTER TABLE `buddy_activity`
  ADD CONSTRAINT `Aadar_fk` FOREIGN KEY (`Aadhar_No`) REFERENCES `buddy_master` (`aadhar_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

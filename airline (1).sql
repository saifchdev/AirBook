-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 09:39 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `source` varchar(255) COLLATE utf32_bin NOT NULL,
  `destination` varchar(255) COLLATE utf32_bin NOT NULL,
  `fromdate` date NOT NULL,
  `username` varchar(255) COLLATE utf32_bin NOT NULL,
  `class` varchar(255) COLLATE utf32_bin NOT NULL,
  `flight` varchar(30) COLLATE utf32_bin DEFAULT NULL,
  `booking_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`source`, `destination`, `fromdate`, `username`, `class`, `flight`, `booking_id`) VALUES
('Kolkata', 'Mysore', '2019-10-04', 'maaz', 'Economy', 'jetairways', 4),
('Kolkata', 'Dubai', '2019-10-11', 'maaz', 'Economy', 'jetairways', 5),
('Mumbai', 'Kolkata', '2019-11-14', 'saif', 'Economy', 'airarabia', 6);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `f_name` varchar(50) COLLATE utf32_bin NOT NULL,
  `l_name` varchar(50) COLLATE utf32_bin NOT NULL,
  `username` varchar(30) COLLATE utf32_bin NOT NULL,
  `gender` varchar(20) COLLATE utf32_bin NOT NULL,
  `email` varchar(50) COLLATE utf32_bin NOT NULL,
  `phone` int(12) NOT NULL,
  `password` varchar(255) COLLATE utf32_bin NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`f_name`, `l_name`, `username`, `gender`, `email`, `phone`, `password`, `dob`) VALUES
('saif', 'chogle', '12co27', 'male', 'saifchogle@gmail.com', 2147483647, 'snc123', '2020-03-13'),
('maaz', 'lambe', 'maaz', 'male', 'maaz@gmail.com', 2147483647, '1234', '2019-10-24'),
('saif', 'ch', 'saif', 'male', 'saifchogle@gmail.com', 2147483647, 'snc123', '2019-11-22'),
('sajjad', 'khalfe', 'sajjad', 'male', 'sajjadk@gmail.com', 2147483647, 'password', '2019-10-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

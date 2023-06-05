-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 06:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daily_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily`
--

CREATE TABLE `daily` (
  `Index` int(200) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Group_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daily`
--

INSERT INTO `daily` (`Index`, `User_name`, `Title`, `Description`, `Date`, `Group_id`) VALUES
(1, 'Bhavya', 'Bhavya', 'Bhagat', '2023-05-29', 0),
(2, 'Bhavya', 'Hello', 'This is Bhavya', '2023-05-29', 0),
(3, 'Manav', 'Hello', 'This is Manav', '2023-05-29', 0),
(4, 'Veer', 'Hello', 'This is veer', '2023-05-29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `User_id` int(200) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `User_pass` varchar(50) NOT NULL,
  `User_email` varchar(50) NOT NULL,
  `Group_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`User_id`, `User_name`, `User_pass`, `User_email`, `Group_id`) VALUES
(9, 'Bhavya', 'Bhagat', 'Bhavya@gmail.com', 1),
(10, 'Manav', 'Manav', 'M@G.com', 1),
(11, 'Veer', 'Bhagat', 'Veer@gmail.com', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily`
--
ALTER TABLE `daily`
  ADD PRIMARY KEY (`Index`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `User_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

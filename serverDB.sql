-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 07:53 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `class` varchar(12) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `file` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `class` varchar(12) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `studentid` varchar(50) NOT NULL,
  `firstterm` varchar(50) NOT NULL,
  `secondterm` varchar(50) NOT NULL,
  `finalterm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `class`, `subject`, `studentid`, `firstterm`, `secondterm`, `finalterm`) VALUES
(1, '4', 'fxn', '1', '34', '35', '36'),
(2, '4', 'ths', '1', '35', '36', '37'),
(3, '5', 'seth', '1', '36', '37', '38'),
(4, '5', 'tshf', '2', '37', '38', '39'),
(5, '4', 'uagfuig', '2', '35', '36', '37');

-- --------------------------------------------------------

--
-- Table structure for table `studentnotices`
--

CREATE TABLE `studentnotices` (
  `id` int(11) NOT NULL,
  `class` varchar(12) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `reason` varchar(150) NOT NULL,
  `notice` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `teachername` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subjectname`, `class`, `teachername`) VALUES
(1, 'English', '4', 'MD AL-AMIN(5)'),
(2, 'Bangla', '4', 'DR. KHANDAKER TABIN HASAN (4)'),
(3, 'MATH', '1', 'DR. KHANDAKER TABIN HASAN (4)'),
(4, 'ENGLISH', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachernotices`
--

CREATE TABLE `teachernotices` (
  `id` int(11) NOT NULL,
  `teacherid` varchar(50) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `notice` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachernotices`
--

INSERT INTO `teachernotices` (`id`, `teacherid`, `subject`, `notice`) VALUES
(1, '4', 'Welcome', 'Welcome to Aiub!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `class`, `password`, `email`, `fathername`, `mothername`, `address`, `gender`, `dob`, `image`, `status`, `type`) VALUES
(1, 'Nazmul Islam', '10', '12345', 'nazmul@gmail.com', 'Nazrul Islam', 'Laily Begum', 'Mirpur 2', 'male', '07-03-1997', 'imagelink', 'a', 'student'),
(2, 'Raju', '9', '12345', 'raju@gmail.com', 'Raju\'s Father name', 'Raju\'s Mother name', 'Kuril', 'male', '01-01-1994', 'imagelink', 'a', 'student'),
(3, 'System Admin', NULL, '12345', 'admin@gmail.com', 'Admin father', 'Admin Mother', 'Dhaka', 'male', '01-01-1990', 'admin image', 'a', 'admin'),
(4, 'DR. KHANDAKER TABIN HASAN', NULL, '12345', 'tabin@aiub.edu', '*****', '*****', 'Dhaka', 'male', '01-01-1970', 'teacher image', 'a', 'teacher'),
(5, 'MD AL-AMIN', NULL, '12345', 'alamin@aiub.edu', '*****', '*****', 'Dhaka', 'male', '01-01-1987', 'teacher image', 'a', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentnotices`
--
ALTER TABLE `studentnotices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachernotices`
--
ALTER TABLE `teachernotices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studentnotices`
--
ALTER TABLE `studentnotices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachernotices`
--
ALTER TABLE `teachernotices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

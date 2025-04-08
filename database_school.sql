-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2025 at 10:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `complaint` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `reply` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `complaint`, `date`, `student_id`, `reply`) VALUES
(1, 'as', '2025-03-20', 0, ''),
(2, 'hello', '2025-03-07', 0, ''),
(3, 'haih', '2025-03-14', 0, ''),
(4, 'haih', '2025-03-14', 0, ''),
(5, 'haih', '2025-03-14', 0, ''),
(6, 'fff', '2025-03-06', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `email`, `password`, `type`) VALUES
(1, 'abc@gmail.com', 'abc', 'school'),
(2, 'divya@gmail.com', 'divya', 'teacher'),
(3, 'adarsh@gmail.com', 'adarsh', 'student'),
(4, 'bindu@gmail.com', 'bindu', 'teacher'),
(5, 'az@gmail.com', 'az', 'teacher'),
(7, 'nivya@gmail.com', 'nivya', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`, `date`) VALUES
(1, 'hello', '2025-03-15'),
(2, 'hello', '2025-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `schoolreg`
--

CREATE TABLE `schoolreg` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_phone` bigint(20) NOT NULL,
  `s_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schoolreg`
--

INSERT INTO `schoolreg` (`s_id`, `s_name`, `s_email`, `s_phone`, `s_address`) VALUES
(1, 'abc', 'abc@gmail.com', 890, 'as');

-- --------------------------------------------------------

--
-- Table structure for table `staffreg`
--

CREATE TABLE `staffreg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffreg`
--

INSERT INTO `staffreg` (`id`, `name`, `dob`, `gender`, `email`, `phone`, `address`) VALUES
(1, 'nivya', '2025-03-05', 'Female', 'nivya@gmail.com', '990', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `studentreg`
--

CREATE TABLE `studentreg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `class` int(11) NOT NULL,
  `division` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentreg`
--

INSERT INTO `studentreg` (`id`, `name`, `dob`, `gender`, `email`, `phone`, `address`, `class`, `division`) VALUES
(1, 'adarsh', '2025-03-21', 'Male', 'adarsh@gmail.com', 89, 'aa', 3, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject`, `class`) VALUES
(1, 'ss', '2'),
(2, 'ss', '2');

-- --------------------------------------------------------

--
-- Table structure for table `teacherreg`
--

CREATE TABLE `teacherreg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `class` int(11) NOT NULL,
  `division` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherreg`
--

INSERT INTO `teacherreg` (`id`, `name`, `dob`, `gender`, `email`, `phone`, `address`, `class`, `division`) VALUES
(9, 'nm', '2025-03-22', 'Female', 'nm@gmail.com', 89, 'a', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolreg`
--
ALTER TABLE `schoolreg`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `staffreg`
--
ALTER TABLE `staffreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentreg`
--
ALTER TABLE `studentreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherreg`
--
ALTER TABLE `teacherreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schoolreg`
--
ALTER TABLE `schoolreg`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staffreg`
--
ALTER TABLE `staffreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentreg`
--
ALTER TABLE `studentreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacherreg`
--
ALTER TABLE `teacherreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

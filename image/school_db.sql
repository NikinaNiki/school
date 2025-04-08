-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2025 at 12:27 PM
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
-- Database: `school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmark`
--

CREATE TABLE `addmark` (
  `id` int(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `mark` int(11) NOT NULL,
  `regno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addmark`
--

INSERT INTO `addmark` (`id`, `class`, `subject`, `mark`, `regno`, `name`) VALUES
(1, '5', 'english', 50, 0, ''),
(2, '4', 'java', 70, 0, ''),
(3, '4', 'java', 70, 567, 'binu'),
(4, '5', 'maths', 78, 56, 'athira');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `type`) VALUES
(1, 'athi@gmail.com', 'athi', 'admin'),
(5, 'deepa@gmail.com', 'deepa', 'student'),
(6, 'diya@gmail.com', 'diya', 'student'),
(7, 'athira@gmail.com', 'athira', 'student'),
(8, 'binu@gmail.com', 'binu', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `class` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `reg_no`, `name`, `age`, `mobile`, `class`, `photo`, `email`) VALUES
(5, 567, 'deepa', 78, 678, 7, 'download (1)(1).jfif', 'deepa@gmail.com'),
(6, 1234, 'diya', 12, 678, 7, 'Untitled.jpg', 'diya@gmail.com'),
(7, 56, 'athira', 10, 879, 5, 'Untitled1.jpg', 'athira@gmail.com'),
(8, 567, 'binu', 12, 899, 4, 'Untitled.jpg', 'binu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `studymaterial`
--

CREATE TABLE `studymaterial` (
  `id` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studymaterial`
--

INSERT INTO `studymaterial` (`id`, `class`, `subject`, `file`) VALUES
(2, 1, 'physics', 'download (1)(2).jfif'),
(3, 7, 'social science', 'download (1)(1).jfif'),
(4, 5, 'hindi', 'Untitled1.jpg'),
(5, 7, 'social science', 'download (1)(1).jfif'),
(6, 7, 'social science', 'download (1)(1).jfif');

-- --------------------------------------------------------

--
-- Table structure for table `studymaterial.php`
--

CREATE TABLE `studymaterial.php` (
  `id` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmark`
--
ALTER TABLE `addmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studymaterial`
--
ALTER TABLE `studymaterial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studymaterial.php`
--
ALTER TABLE `studymaterial.php`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmark`
--
ALTER TABLE `addmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `studymaterial`
--
ALTER TABLE `studymaterial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studymaterial.php`
--
ALTER TABLE `studymaterial.php`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

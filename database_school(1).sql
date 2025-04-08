-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2025 at 10:52 AM
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
  `reply` varchar(50) NOT NULL,
  `reply_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `complaint`, `date`, `student_id`, `reply`, `reply_date`) VALUES
(1, 'bnmm', '2025-03-07', 1, 'ok', '2025-03-25'),
(2, 'issue', '2025-04-03', 7, 'haiii', '2025-04-03'),
(3, 'zxx', '2025-04-03', 5, 'zxx', '2025-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `email`, `password`, `type`, `id`) VALUES
(3, 'adarsh@gmail.com', 'adarsh', 'teacher', 2),
(4, 'druv@gmail.com', 'druv', 'student', 1),
(5, 'deepa@gmail.com', 'deepa', 'staff', 0),
(6, 'akash@gmail.com', 'akash', 'student', 2),
(7, 'diya@gmail.com', 'diya', 'student', 3),
(8, 'navya@gmail.com', 'navya', 'student', 4),
(9, 'deepak@gmail.com', 'deepak', 'teacher', 3),
(10, 'drisya@gmail.com', 'drisya', 'student', 5),
(11, 'vrinda@gmail.com', 'vrinda', 'student', 6),
(12, 'ram@gmail.com', 'ram', 'student', 7),
(13, 'ebin@gmail.com', 'ebin', 'student', 8),
(14, 'niya@gmail.com', 'niya', 'teacher', 4),
(19, 'd@gmail.com', 'divya', 'staff', 1),
(20, 'hridya@gmail.com', 'hridya', 'staff', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `id` int(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `english` varchar(50) NOT NULL,
  `hindi` varchar(50) NOT NULL,
  `malayalam` varchar(50) NOT NULL,
  `science` varchar(50) NOT NULL,
  `physics` varchar(50) NOT NULL,
  `chemistry` varchar(50) NOT NULL,
  `biology` varchar(50) NOT NULL,
  `maths` varchar(50) NOT NULL,
  `socialscience` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`id`, `class`, `student_id`, `teacher_id`, `english`, `hindi`, `malayalam`, `science`, `physics`, `chemistry`, `biology`, `maths`, `socialscience`) VALUES
(1, '6', 5, 2, '56', '77', '78', '67', '', '', '', '', ''),
(2, '9', 6, 3, '56', '8', '8', '', '89', '89', '99', '99', '9'),
(3, '6', 8, 4, '56', '8', '78', '', '78', '78', '89', '78', '78'),
(4, '4', 7, 3, '56', '67', '67', '', '78', '99', '99', '9', '9'),
(5, '6', 8, 2, '56', '67', '78', '78', '', '', '', '', ''),
(6, '4', 7, 4, '', '', '', '', '', '', '', '', ''),
(7, '9', 6, 4, '23', '3', '2', '3', '', '', '', '', ''),
(8, '4', 7, 3, '9', '', '', '', '', '', '', '', ''),
(9, '4', 7, 3, '9', '', '', '', '', '', '', '', ''),
(10, '4', 7, 3, '9', '', '', '', '', '', '', '', ''),
(11, '4', 7, 3, '9', '', '', '', '', '', '', '', ''),
(12, '4', 7, 3, '9', '', '', '', '', '', '', '', '');

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
(1, 'pgm', '2025-03-27');

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
(1, 'abc', 'abc@gmail.com', 890, 'as'),
(2, 'abc', 'abc@gmail.com', 999, 'nh'),
(3, 'az', 'az@gmail.com', 90, 'rt'),
(4, 'ABC@gmail.com', 'abc@gmail.com', 7890, 'abc school');

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
  `address` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffreg`
--

INSERT INTO `staffreg` (`id`, `name`, `dob`, `gender`, `email`, `phone`, `address`, `file`) VALUES
(1, 'deepa', '2025-02-28', 'Female', 'deepa@gmail.com', '7890', 'gh', ''),
(2, 'roopa', '2025-04-18', 'Female', 'roopa@gmail.com', '790', 'ty', 'Untitled.jpg'),
(3, 'nimmi', '2025-04-22', 'Female', 'nimmi@gmail.com', '789', 'ghj', 'Untitled1.jpg'),
(4, 'hiran', '2025-04-21', 'Male', 'hiran@gmail.com', '789', 'h', 'Untitled.jpg'),
(5, 'kiran', '2025-05-01', 'Male', 'kiran@gmail.com', '8899', 'kk', 'Untitled.jpg'),
(6, 'hridya', '2025-04-19', 'Female', 'hridya@gmail.com', '6890', 'gj', 'Untitled1.jpg');

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
  `division` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentreg`
--

INSERT INTO `studentreg` (`id`, `name`, `dob`, `gender`, `email`, `phone`, `address`, `class`, `division`, `file`) VALUES
(5, 'drisya', '2025-04-15', 'Female', 'drisya@gmail.com', 8990, 'vb', 6, 'b', ''),
(6, 'vrinda', '2025-04-12', 'Female', 'vrinda@gmail.com', 78899, 'vn', 9, 'a', ''),
(7, 'ram', '2025-04-24', 'Male', 'ram@gmail.com', 7890, 'rm', 4, 'c', ''),
(8, 'ebin', '2025-04-10', 'Male', 'ebin@gmail.com', 789, 'bn', 6, 'b', 'Untitled1.jpg');

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
(1, 7, 'malayalam', 'Untitled1.jpg'),
(2, 5, 'physics', 'download (1)(2).jfif'),
(3, 9, 'hindi', 'school_db.sql'),
(4, 6, 'malayalam', 'Untitled1(1).jpg'),
(5, 6, 'social science', 'Untitled.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `class`, `subject`) VALUES
(2, 1, 'b'),
(4, 1, 'mmm'),
(5, 1, 'sc'),
(6, 2, 'english'),
(7, 2, 'h'),
(8, 2, 'sc'),
(9, 2, 'Maths'),
(11, 3, 'english'),
(12, 3, 'hindi'),
(13, 3, 'malayalam'),
(14, 3, 'Maths'),
(15, 3, 'science'),
(16, 4, 'english'),
(17, 4, 'hindi'),
(18, 4, 'malayalam'),
(19, 4, 'Maths'),
(20, 4, 'science'),
(21, 5, 'english'),
(22, 5, 'hindi'),
(23, 5, 'malayalam'),
(24, 5, 'Maths'),
(25, 5, 'science'),
(26, 6, 'english'),
(27, 6, 'hindi'),
(28, 6, 'malayalam'),
(29, 6, 'Maths'),
(30, 6, 'science'),
(31, 7, 'english'),
(32, 7, 'hindi'),
(33, 7, 'malayalam'),
(34, 7, 'Maths'),
(35, 7, 'science'),
(36, 8, 'english'),
(37, 8, 'hindi'),
(38, 8, 'malayalam'),
(39, 8, 'Maths'),
(40, 8, 'physics'),
(41, 8, 'chemistry'),
(42, 8, 'biology'),
(43, 8, 'socialscience'),
(44, 9, 'english'),
(45, 9, 'hindi'),
(46, 9, 'malayalam'),
(47, 9, 'Maths'),
(48, 9, 'physics'),
(49, 9, 'chemistry'),
(50, 9, 'biology'),
(51, 9, 'socialscience'),
(52, 10, 'english'),
(53, 10, 'hindi'),
(54, 10, 'malayalam'),
(55, 10, 'Maths'),
(56, 10, 'physics'),
(57, 10, 'chemistry'),
(58, 10, 'biology'),
(59, 10, 'socialscience'),
(60, 1, 'malayalam');

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
  `division` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherreg`
--

INSERT INTO `teacherreg` (`id`, `name`, `dob`, `gender`, `email`, `phone`, `address`, `class`, `division`, `file`) VALUES
(2, 'adarsh', '2025-03-11', 'Male', 'adarsh@gmail.com', 8890, 'a d', 5, 'B', ''),
(3, 'deepak', '2025-03-07', 'Male', 'deepak@gmail.com', 789, 'ghjj', 8, 'a', ''),
(4, 'niya', '2025-04-12', 'Female', 'niya@gmail.com', 6789, 'gjk', 8, 'c', 'Untitled.jpg');

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
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `studymaterial`
--
ALTER TABLE `studymaterial`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schoolreg`
--
ALTER TABLE `schoolreg`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staffreg`
--
ALTER TABLE `staffreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studentreg`
--
ALTER TABLE `studentreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `studymaterial`
--
ALTER TABLE `studymaterial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `teacherreg`
--
ALTER TABLE `teacherreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

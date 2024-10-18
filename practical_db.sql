-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2024 at 07:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practical_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `conduct`
--

CREATE TABLE `conduct` (
  `cid` varchar(4) NOT NULL,
  `sid` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `conduct`
--

INSERT INTO `conduct` (`cid`, `sid`) VALUES
('c002', 'S003'),
('c002', 'S002'),
('c002', 'S001'),
('c004', 'S002'),
('c004', 'S004'),
('c004', 'S005'),
('c004', 'S009'),
('c005', 'S010'),
('c005', 'S004'),
('c005', 'S002'),
('c003', 'S010'),
('C007', 'S005'),
('C007', 'S004'),
('C006', 'S006'),
('C001', 'S010');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` varchar(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `hours` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `title`, `hours`, `id`) VALUES
('C001', 'Programming Concepts', 100, 1),
('C002', 'Database ', 60, 2),
('C003', 'Object Oriented Programming', 75, 3),
('C004', 'Web Development', 100, 4),
('C005', 'Software Construction', 100, 5),
('C006', 'Software Modeling', 60, 6),
('C007', 'Graphic Designing', 80, 7);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` varchar(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `name`, `email`, `id`) VALUES
('S001', 'Vipusa Sriharan', 'vipusa@gmail.com', 1),
('S002', 'Thivani Thiruvarangan', 'thivani@gmail.com', 2),
('S003', 'Sankavy Balu', 'sanku@gmail.com', 3),
('S004', 'Suvanthika Thavakumaran', 'suvathi@gmail.com', 4),
('S005', 'Lithurshana Baskaran', 'lithu@gmail.com', 5),
('S006', 'Yazhini Manivannan', 'yazhh@gmail.com', 6),
('S007', 'Thanushiya Sethupathy', 'thanu@gmail.com', 7),
('S008', 'Piruntha Thurairasa', 'piruntha@gmail.com', 8),
('S009', 'Thushajini Yogalingam', 'thusha@gmail.com', 9),
('S010', 'Aswini Parameswaran', 'aswini@gmail.com', 10),
('S011', 'Keethi Gopalavannan', 'kerthigopal@gmail.com', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

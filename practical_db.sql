-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 06:48 AM
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
('C002', 'S003'),
('C002', 'S002'),
('C002', 'S001'),
('C004', 'S002'),
('C004', 'S004'),
('C004', 'S005'),
('C004', 'S009'),
('C005', 'S010'),
('C005', 'S004'),
('C005', 'S002'),
('C003', 'S010'),
('C001', 'S010'),
('C006', 'S006');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` varchar(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `hours` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `title`, `hours`) VALUES
('C001', 'Web Designing', 90),
('C002', 'Computer Programming', 100),
('C003', 'Computer Networking', 90),
('C004', 'Computer Hardware', 90),
('C005', 'Graphic Designing', 90),('C006',"Operating Systems",100);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` varchar(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `name`, `email`) VALUES
('S001', 'Vipusa Sriharan', 'vipusa@gmail.com'),
('S002', 'Thivani Thiruvarangan', 'thivani@gmail.com'),
('S003', 'Sankavy Balu', 'sanku@gmail.com'),
('S004', 'Suvanthika Thavakumaran', 'suvathi@gmail.com'),
('S005', 'Lithurshana Baskaran', 'lithu@gmail.com'),
('S006', 'Yazhini Manivannan', 'yazhh@gmail.com'),
('S007', 'Thanushiya Sethupathy', 'thanu@gmail.com'),
('S008', 'Piruntha Thurairasa', 'piruntha@gmail.com'),
('S009', 'Thushajini Yogalingam', 'thusha@gmail.com'),
('S010', 'Aswini Parameswaran', 'aswini@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cid` (`cid`),
  ADD KEY `cid_2` (`cid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

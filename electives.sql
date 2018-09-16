-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 09:55 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electives`
--

-- --------------------------------------------------------

--
-- Table structure for table `eigth`
--

CREATE TABLE `eigth` (
  `subcode` varchar(8) NOT NULL,
  `subject` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `elective`
--

CREATE TABLE `elective` (
  `usn` varchar(10) NOT NULL,
  `open` varchar(8) DEFAULT NULL,
  `prof` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elective`
--

INSERT INTO `elective` (`usn`, `open`, `prof`) VALUES
('', '', ''),
('1SJ15CS001', '15CS112', '15CS987'),
('1SJ15CS033', '15CS551', '15CS981'),
('1SJ15CS081', '15CS551', '15CS981'),
('1SJ15CS082', '15CS551', '15CS981'),
('1SJ15CS083', '15CS551', '15CS981');

-- --------------------------------------------------------

--
-- Table structure for table `fifth`
--

CREATE TABLE `fifth` (
  `subcode` varchar(8) NOT NULL,
  `subject` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifth`
--

INSERT INTO `fifth` (`subcode`, `subject`, `type`) VALUES
('15CS551', 'SOething', 'open'),
('15CS552', 'Demo data', 'open'),
('15CS981', 'somthing2', 'prof');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `usn` varchar(10) NOT NULL,
  `pass` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`usn`, `pass`) VALUES
('1SJ15CS033', '1SJ15CS033'),
('1SJ15CS081', '1SJ15CS081'),
('1SJ15CS082', '1SJ15CS082');

-- --------------------------------------------------------

--
-- Table structure for table `seventh`
--

CREATE TABLE `seventh` (
  `subcode` varchar(8) NOT NULL,
  `subject` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sixth`
--

CREATE TABLE `sixth` (
  `subcode` varchar(8) NOT NULL,
  `subject` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eigth`
--
ALTER TABLE `eigth`
  ADD PRIMARY KEY (`subcode`);

--
-- Indexes for table `elective`
--
ALTER TABLE `elective`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `fifth`
--
ALTER TABLE `fifth`
  ADD PRIMARY KEY (`subcode`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `seventh`
--
ALTER TABLE `seventh`
  ADD PRIMARY KEY (`subcode`);

--
-- Indexes for table `sixth`
--
ALTER TABLE `sixth`
  ADD PRIMARY KEY (`subcode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

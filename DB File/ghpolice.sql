-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 04:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghpolice`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_table`
--

CREATE TABLE `case_table` (
  `case_id` varchar(20) NOT NULL,
  `statement` varchar(200) NOT NULL,
  `caseid` int(11) NOT NULL,
  `date_added` datetime DEFAULT NULL,
  `staffid` varchar(30) NOT NULL,
  `case_type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `cid` varchar(20) NOT NULL DEFAULT 'Not Yet',
  `complete_date` date NOT NULL,
  `diaryofaction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_table`
--

INSERT INTO `case_table` (`case_id`, `statement`, `caseid`, `date_added`, `staffid`, `case_type`, `status`, `cid`, `complete_date`, `diaryofaction`) VALUES
('210728101', '<p>HelLo,</p>\r\n\r\n<p>This CID Officer yahaya and this my findings so for in the case</p>\r\n', 56, '2021-07-28 13:13:49', '333', 'Robbing', 'Completed', '005', '0000-00-00', ' This is case  '),
('210728102', '', 57, '2021-07-28 13:14:53', '333', 'Assault', '', 'cid', '0000-00-00', 'Here is anotehr acse');

-- --------------------------------------------------------

--
-- Table structure for table `complainant`
--

CREATE TABLE `complainant` (
  `case_id` varchar(20) NOT NULL,
  `comp_name` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `region` varchar(50) NOT NULL,
  `district` varchar(100) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `addrs` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `id` int(11) NOT NULL,
  `case_id` int(11) DEFAULT NULL,
  `next_hearing_date` date DEFAULT NULL,
  `hearing_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`id`, `case_id`, `next_hearing_date`, `hearing_info`) VALUES
(1, 210728101, '0000-00-00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `crime_type`
--

CREATE TABLE `crime_type` (
  `id` int(11) NOT NULL,
  `des` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crime_type`
--

INSERT INTO `crime_type` (`id`, `des`) VALUES
(1, 'Domestic Violence'),
(2, 'Murder Case'),
(3, 'Assault'),
(4, 'Theft Case'),
(5, 'Defilement'),
(6, 'Robbing'),
(7, 'Fraud'),
(8, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `investigation`
--

CREATE TABLE `investigation` (
  `case_id` varchar(20) NOT NULL,
  `investigator` varchar(20) NOT NULL,
  `statement2` text NOT NULL,
  `assigned_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status2` varchar(100) NOT NULL,
  `completed_date` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prev_complain`
--

CREATE TABLE `prev_complain` (
  `id` int(11) NOT NULL,
  `comp_name` varchar(100) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  `loc` varchar(50) DEFAULT NULL,
  `addrs` varchar(100) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `date_added` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `NID` int(11) DEFAULT NULL,
  `statement` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prev_complain`
--

INSERT INTO `prev_complain` (`id`, `comp_name`, `tel`, `occupation`, `loc`, `addrs`, `age`, `gender`, `date_added`, `NID`, `statement`, `status`) VALUES
(1, 'habdajhsia  o aishia', '21212121', 'student', 'abc', 'abuashs a sh ia asia', 12, 'Male', '2022-12-22 04:51:42', 1234, 'ijsaidjisj dasod jsaopjd osad  dsad sada s', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `staffid` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `othernames` varchar(50) NOT NULL,
  `confirmation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `staffid`, `status`, `password`, `surname`, `othernames`, `confirmation`) VALUES
(0, '005', 'CID', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Osman ', 'Wumpini', 'approve'),
(0, '1000', 'Court', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'dsdsds', 'ds', 'approve'),
(0, '1111', 'Admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Osman', 'Yahaya', 'approve'),
(0, '112', 'NCO', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Danaa', 'Shafaw', 'approve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_table`
--
ALTER TABLE `case_table`
  ADD PRIMARY KEY (`caseid`);

--
-- Indexes for table `complainant`
--
ALTER TABLE `complainant`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crime_type`
--
ALTER TABLE `crime_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investigation`
--
ALTER TABLE `investigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prev_complain`
--
ALTER TABLE `prev_complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`staffid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_table`
--
ALTER TABLE `case_table`
  MODIFY `caseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `court`
--
ALTER TABLE `court`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crime_type`
--
ALTER TABLE `crime_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `investigation`
--
ALTER TABLE `investigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `prev_complain`
--
ALTER TABLE `prev_complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

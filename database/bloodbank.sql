-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 12:38 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `passcode` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`passcode`, `username`, `id`) VALUES
('blv_me_ami_e_admin', 'Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `bbname` varchar(40) NOT NULL,
  `grno` int(20) NOT NULL,
  `bbmname` varchar(30) NOT NULL,
  `mobilenumber` int(15) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`bbname`, `grno`, `bbmname`, `mobilenumber`, `address`) VALUES
('Dhrobo Foundation Bangladesh Blood Bank', 654, 'dfggfbd', 1771917392, 'Uttara Sector-10');

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest`
--

CREATE TABLE `bloodrequest` (
  `name` varchar(50) NOT NULL,
  `rnid` int(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pno` int(15) NOT NULL,
  `bgroup` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodrequest`
--

INSERT INTO `bloodrequest` (`name`, `rnid`, `address`, `pno`, `bgroup`) VALUES
('Shaminur Rahaman', 7655, 'Uttara Sector-10,Kamarpara,House No-18,Road No-17, Uttara Sector-10,Kamarpara,House No-18,Road No-17', 1771917392, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `name` varchar(30) NOT NULL,
  `donid` int(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pno` int(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `bgroup` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`name`, `donid`, `address`, `pno`, `gender`, `dob`, `bgroup`) VALUES
('Hasan Ahmed', 53543, 'afhvduihu', 3345567, 'M', '2020-04-28', 'A+'),
('Moidul Hasan Khan', 634534, 'Kapasia,Gazipur', 2147483647, 'M', '2020-04-15', 'O+'),
('Israt Jahan Khanom Upoma', 78563756, 'Kapasia,Gazipur', 2147483647, 'F', '2020-02-05', 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_name`, `user_password`) VALUES
(1, 'john@doe.com', 'John Doe', '$2y$10$vZJy7y4uqQQTRN3zdi2RE.5ZJJzGEEPnzEjFXm4nEOx023XQ2Qe..');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`grno`);

--
-- Indexes for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD PRIMARY KEY (`rnid`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

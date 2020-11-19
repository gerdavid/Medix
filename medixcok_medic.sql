-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2019 at 12:53 AM
-- Server version: 5.5.61-cll
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medixcok_medic`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberID` int(11) NOT NULL,
  `location` varchar(80) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `active` varchar(255) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No',
  `rank` varchar(80) NOT NULL,
  `status` varchar(80) NOT NULL,
  `birth` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `location`, `username`, `password`, `email`, `avatar`, `active`, `resetToken`, `resetComplete`, `rank`, `status`, `birth`) VALUES
(4, '', 'medic', '$2y$10$nSVTWJwMe2q4/fJUTe8Mm.yZHsmTOMOfFqhA3f5M0uWIWKOOgdBEm', 'gerdavid7@gmail.com', '', 'Yes', '69fecdbb5a8fab2d2afd13a8cd3348fc', 'No', '', '', ''),
(5, '', 'dmc', '$2y$10$7fwswQoo7mdae8OGSklK3.NgQIR6sllSIvh6AnmkkXDxDFqdEP0UK', 'dmcsolutions7@gmail.com', '', 'Yes', NULL, 'No', '', '', ''),
(6, '', 'joeevanse', '$2y$10$uJIGzYtRg1TpI.hOi27nZ.LL3KXfaPV6F1IDE3Q/Sl8Npz66d28Mu', 'joeevanse@gmail.com', '', '2c31c85b155b6949cdf0edd3feb3855a', NULL, 'No', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `body` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `body`, `date`, `status`, `image`) VALUES
(93, 5, 4, 'test', 'test                                                                                               ', '2018-08-10 03:01:41', 1, 'admin3.PNG'),
(94, 5, 4, 'test', 'test                                                                                               ', '2018-08-10 03:01:41', 1, 'county1 - Copy.PNG'),
(95, 5, 4, 'memo', 'hjojo                                                                                               ', '2018-08-13 02:14:59', 1, 'county2.PNG'),
(96, 5, 4, 'memo', 'hjojo                                                                                               ', '2018-08-13 02:14:59', 1, 'judge1.PNG'),
(97, 4, 5, 'test', 'hiuhoijoij                                                                                               ', '2018-08-13 08:40:35', 1, 'judge2.PNG'),
(98, 4, 5, 'test', 'hiuhoijoij                                                                                               ', '2018-08-13 08:40:35', 1, 'national2 - Copy.PNG'),
(99, 4, 5, 'edfs', '                          sdfd                                                                     ', '2018-08-17 05:37:32', 1, 'mp-dol.png'),
(100, 5, 4, 'fdv', 'fesd                                                                                               ', '2018-08-17 05:44:58', 1, 'county1%20-%20Copy.PNG'),
(101, 4, 5, 'kjopkp', 'mlkml                                                                                               ', '2018-08-22 08:48:07', 1, 'rating%20-%20Copy.PNG'),
(102, 5, 4, 'test', '        jiji                                                                                       ', '2018-09-05 04:09:42', 1, 'judge1.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `mpesa`
--

CREATE TABLE `mpesa` (
  `id` int(11) NOT NULL,
  `TransactionType` varchar(200) NOT NULL,
  `TransID` varchar(200) NOT NULL,
  `TransTime` varchar(200) NOT NULL,
  `TransAmount` double NOT NULL,
  `BusinessShortCode` varchar(200) NOT NULL,
  `BillRefNumber` varchar(200) NOT NULL,
  `InvoiceNumber` varchar(200) NOT NULL,
  `ThirdPartyTransID` varchar(200) NOT NULL,
  `MSISDN` varchar(200) NOT NULL,
  `First_Name` varchar(200) NOT NULL,
  `Middle_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `OrgAccountBalance` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `statussms` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mpesa`
--

INSERT INTO `mpesa` (`id`, `TransactionType`, `TransID`, `TransTime`, `TransAmount`, `BusinessShortCode`, `BillRefNumber`, `InvoiceNumber`, `ThirdPartyTransID`, `MSISDN`, `First_Name`, `Middle_Name`, `Last_Name`, `OrgAccountBalance`, `status`, `statussms`) VALUES
(1, '', '', '', 0, '', '', '', '', '', '', '', '', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mpesa`
--
ALTER TABLE `mpesa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `mpesa`
--
ALTER TABLE `mpesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

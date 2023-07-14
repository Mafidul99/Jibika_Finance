-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 08:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jibika_finance`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(8, 'Mafidul Islam', 'superadmin@gmail.com', '9876545654', 'superadmin@gmail.com', 'cdscdc');

-- --------------------------------------------------------

--
-- Table structure for table `jobe_registrations`
--

CREATE TABLE `jobe_registrations` (
  `reg_id` int(11) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `pancard` varchar(255) NOT NULL,
  `aadhaarcard` varchar(255) NOT NULL,
  `bankcnumber` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `bankbranch` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `martialstatus` varchar(255) NOT NULL,
  `spname` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `houseno` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `jobes` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sign` varchar(255) NOT NULL,
  `declaration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobe_registrations`
--

INSERT INTO `jobe_registrations` (`reg_id`, `reg_no`, `name`, `fname`, `mname`, `email`, `birthdate`, `mobile`, `pancard`, `aadhaarcard`, `bankcnumber`, `ifsc`, `bankbranch`, `gender`, `qualification`, `martialstatus`, `spname`, `category`, `houseno`, `street`, `city`, `state`, `pincode`, `jobes`, `image`, `sign`, `declaration`) VALUES
(1, 'JFAJ611684612077', 'mafidul islma', 'ramjan ali', 'raushanara begum', 'mafidul22@gmail.com', '2017-06-21', '8822964555', 'AGAPI7416E', '336904466928', '34796828468', 'SBIN0014617', 'SBI BRANCH MANDIA', 'Male', 'BA', 'Married', 'HAMIDA KHATUN', 'General', 'MANDIA GAON', 'MANDIA', 'BARPETA', 'Single', '781308', 'Multitacking Jobs Vacancies', 'photo_142245208.jpeg', 'sign_1617741291.jpeg', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobe_registrations`
--
ALTER TABLE `jobe_registrations`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobe_registrations`
--
ALTER TABLE `jobe_registrations`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

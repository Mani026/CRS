-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 05:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `password`, `email`, `mobile`) VALUES
(2, 'devarsh', 'devarsh', 'devarsh@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `mobile`, `message`, `date_time`, `ip_address`) VALUES
(2, 'ankur', 'sir', 'ankur@gmail.com', '1234567890', 'uygqahjs', '17-12-2022 07:22:36', '::1'),
(4, 'deepak', 'bind', 'deepunishad18@gmail.com', '9624306009', 'x', '19-01-2023 19:04:54', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `development_form`
--

CREATE TABLE `development_form` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` bigint(100) NOT NULL,
  `development` varchar(50) NOT NULL,
  `short_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `development_form`
--

INSERT INTO `development_form` (`id`, `first_name`, `last_name`, `email`, `mobile_no`, `development`, `short_description`) VALUES
(1, 'deepak', 'bind', 'deepunishad18@gmail.com', 9624306009, 'Website Development', 's'),
(2, 'deepak', 'bind', 'deepunishad18@gmail.com', 9624306009, 'App Development', 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss'),
(3, 'deepu', 'nishad', 'deepunishad18@gmail.com', 9624306009, 'App Development', 's');

-- --------------------------------------------------------

--
-- Table structure for table `seo_form`
--

CREATE TABLE `seo_form` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` bigint(200) NOT NULL,
  `purpose` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seo_form`
--

INSERT INTO `seo_form` (`id`, `first_name`, `last_name`, `email`, `mobile_no`, `purpose`) VALUES
(1, 's', 's', 'ssdfsdf@sdfsdf.com', 55, 's'),
(2, 'deepak', 'bind', 'deepunishad18@gmail.com', 2147483647, 'ss'),
(3, 'ssss', 'ssss', 'deepunishad18@gmail.com', 2147483647, 'ssss'),
(4, 'aaaa', 'aaa', 'deepunishad18@gmail.com', 1111111111, 'aa'),
(5, 'ssssssssss', 'sssss', 'deepunishad18@gmail.com', 2147483647, 'ss'),
(6, 'deepak', 'bind', 'deepunishad18@gmail.com', 9624306009, 'x'),
(7, 'deepu', 'nishad', 'deepunishad18@gmail.com', 9624306009, 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `date_time`, `ip_address`) VALUES
(1, 'devarsh@gmail.com', '', ''),
(2, 'ankur@gmail.com', '17-12-2022 10:20:33', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `training_form`
--

CREATE TABLE `training_form` (
  `id` int(10) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` bigint(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `courses` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `training_form`
--

INSERT INTO `training_form` (`id`, `full_name`, `email`, `mobile_no`, `address`, `courses`, `occupation`, `message`) VALUES
(1, '', 'deepunishad18@gmail.com', 0, 'lksdlfkjsdflk lkjfsldkfj sdlfkjsdflkj', 'Python', 'working professional', 'ss'),
(2, '', 'deepunishad18@gmail.com', 0, 'lksdlfkjsdflk lkjfsldkfj sdlfkjsdflkj', 'ReactJS', 'working professional', 'sss'),
(3, '', 'deepunishad18@gmail.com', 0, 'lksdlfkjsdflk lkjfsldkfj sdlfkjsdflkj', 'PHP', 'working professional', 's'),
(4, 'deepu', 'deepunishad18@gmail.com', 0, 'lksdlfkjsdflk lkjfsldkfj sdlfkjsdflkj', 'ReactJS', 'working professional', 's');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `development_form`
--
ALTER TABLE `development_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_form`
--
ALTER TABLE `seo_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_form`
--
ALTER TABLE `training_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `development_form`
--
ALTER TABLE `development_form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seo_form`
--
ALTER TABLE `seo_form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `training_form`
--
ALTER TABLE `training_form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2016 at 07:37 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`id` int(11) NOT NULL,
  `name` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `age` varchar(220) NOT NULL,
  `dob` varchar(220) NOT NULL,
  `mobile` varchar(220) NOT NULL,
  `image` varchar(220) NOT NULL,
  `description` varchar(220) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `age`, `dob`, `mobile`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'TestEmployee1', 'testemail@test.com', '26', '02-05-1990', '9141916953', '', 'test1122', '2016-09-30 12:23:21', '2016-09-17 06:25:07'),
(2, 'TestEmployee2', 'mail@gmail.com', '26', '12-06-2016', '9141916953', '', 'test22', '2016-09-17 11:52:58', '2016-09-17 06:04:12'),
(3, 'TestEmployee3', 'mail1@gmail.com', '25', '12-06-1990', '9141916953', '', 'testdesc', '2016-09-17 11:34:18', '2016-09-17 06:04:18'),
(4, 'TestEmployee4', 'mail4@gmail.com', '23', '12-07-1990', '9141916953', '', 'test4', '2016-09-17 06:11:16', '2016-09-17 06:11:16'),
(5, 'TestEmployee5', 'mail5@gmail.com', '27', '12-07-1990', '9141916953', '', 'test5jj\r\n', '2016-09-17 11:49:18', '2016-09-17 06:19:18'),
(6, 'TestEmployee6', 'mail6@gmail.com', '28', '12-05-1990', '9141916953', '', 'test6', '2016-09-17 06:12:08', '2016-09-17 06:12:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
`id` int(11) NOT NULL,
  `email` varchar(220) NOT NULL,
  `token` varchar(220) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `updated_at`, `created_at`) VALUES
(6, 'nagaraj@active.agency', '7869e8d0db3449490e57daae71e1d99d773e291f', '2016-09-16 08:32:27', '2016-09-16 03:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `remember_token` varchar(220) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 'Nagaraj C', 'nagaraj@active.agency', '$2y$10$ciBH1Tpze.QSfqyBrwud..HOPKtcVzsD1YdmTZOzC9vhtrJvTrUZO', 'lTwdfBT85XyGPEQB7PXrUqW0nNo4DwNexhDCmhRLHA7W8u0EWWkL3X8ghWKa', '2016-09-30 06:29:01', '2016-09-16 01:25:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

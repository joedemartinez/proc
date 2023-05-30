-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2023 at 12:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `procdb`
--
CREATE DATABASE IF NOT EXISTS `procdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `procdb`;

-- --------------------------------------------------------

--
-- Table structure for table `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL,
  `emp_id` text NOT NULL,
  `action` text NOT NULL,
  `ip` text NOT NULL,
  `host` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `history_log`
--

INSERT INTO `history_log` (`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES
(79, 'H2020435', 'System Log In', '::1', 'localhost', '2023-05-30 10:51:20'),
(80, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-05-30 10:53:35'),
(81, 'H2020435', 'System Log In', '::1', 'localhost', '2023-05-30 10:53:44'),
(82, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-05-30 10:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE `upload_files` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `SIZE` varchar(200) NOT NULL,
  `DOWNLOAD` int(11) NOT NULL,
  `TIMERS` varchar(200) NOT NULL,
  `emp_id` text NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `created_by` text NOT NULL,
  `deleted_by` text NOT NULL,
  `date_deleted` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `upload_files`
--

INSERT INTO `upload_files` (`ID`, `NAME`, `SIZE`, `DOWNLOAD`, `TIMERS`, `emp_id`, `date_created`, `created_by`, `deleted_by`, `date_deleted`) VALUES
(2, 'css_tutorial.pdf', '910221', 3, 'May-29-2019 02:36 PM', 'Emp65294', '2023-03-29', '', '', '2023-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `user_id` int(5) NOT NULL,
  `emp_id` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` text NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `CreatedOn` date NOT NULL DEFAULT current_timestamp(),
  `CreatedBy` text NOT NULL,
  `deleted_on` date NOT NULL DEFAULT current_timestamp(),
  `deleted_by` text NOT NULL,
  `full_name` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`user_id`, `emp_id`, `password`, `user_type`, `status`, `CreatedOn`, `CreatedBy`, `deleted_on`, `deleted_by`, `full_name`, `photo`) VALUES
(1, 'H2020435', '$2y$10$60WWy.4.9XGx3IQPH2WLIObgsY04baXAW0.mN1rCxT7PyKp.xTEwa', 'admin', 0, '2020-11-13', 'Joshua Appiah Dadzie', '2023-03-29', '', 'Tom Hank', ''),
(2, 'Emp65294', '$2y$10$rVKiCXcd2DiJNZkx9bEmOO0qJ2JuMHmlvTm1fqghCdMXXHtC.coAu', 'user', 0, '2020-11-17', 'Joshua Appiah Dadzie', '2023-03-29', '', 'Kofi Ampah', 'JohnKKuma@gmail.com1avatar5.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_log`
--
ALTER TABLE `history_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

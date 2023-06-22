-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2023 at 07:08 PM
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
-- Database: `proc`
--
CREATE DATABASE IF NOT EXISTS `proc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `proc`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(30) NOT NULL,
  `cat_name` text NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `date_created`) VALUES
(1, 'Goods', '2023-06-20'),
(2, 'Works', '2023-06-20'),
(3, 'Construction', '2023-06-20'),
(4, 'Technical', '2023-06-20');

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
(82, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-05-30 10:59:28'),
(83, 'H2020435', 'System Log In', '::1', 'localhost', '2023-05-30 11:09:06'),
(84, 'H2020435', 'System Log In', '::1', 'localhost', '2023-06-19 11:47:19'),
(85, 'H2020435', 'System Log In', '::1', 'localhost', '2023-06-19 11:55:47'),
(86, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-06-19 11:56:17'),
(87, 'H2020435', 'System Log In', '::1', 'localhost', '2023-06-19 11:56:25'),
(88, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-06-19 14:50:33'),
(89, 'h2020435', 'System Log In', '::1', 'localhost', '2023-06-19 14:50:43'),
(90, 'h2020435', 'System Log In', '::1', 'localhost', '2023-06-19 15:13:40'),
(91, 'h2020435', 'System Log In', '::1', 'localhost', '2023-06-19 15:33:46'),
(92, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-06-19 16:48:32'),
(93, 'h2020435', 'System Log In', '::1', 'localhost', '2023-06-19 16:48:35'),
(94, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-06-19 16:58:28'),
(95, 'h2020435', 'System Log In', '::1', 'localhost', '2023-06-19 16:58:32'),
(96, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-06-19 17:27:20'),
(97, 'Emp65294', 'System Log In', '::1', 'localhost', '2023-06-19 17:27:41'),
(98, 'Emp65294', 'System Log Out', '::1', 'localhost', '2023-06-19 17:55:32'),
(99, 'Emp65294', 'System Log In', '::1', 'localhost', '2023-06-19 17:55:35'),
(100, 'Emp65294', 'System Log Out', '::1', 'localhost', '2023-06-19 17:55:42'),
(101, 'h2020435', 'System Log In', '::1', 'localhost', '2023-06-19 17:55:44'),
(102, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-06-19 18:24:26'),
(103, 'h2020435', 'System Log In', '::1', 'localhost', '2023-06-19 18:24:29'),
(104, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-06-19 18:33:59'),
(105, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-06-19 18:34:21'),
(106, 'h2020435', 'System Log In', '::1', 'localhost', '2023-06-20 10:39:11'),
(107, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-06-20 12:36:25'),
(108, 'h2020435', 'System Log In', '::1', 'localhost', '2023-06-20 12:36:33'),
(109, 'Tom Hank', 'New Project -  Created ', '::1', 'localhost', '2023-06-20 14:54:23'),
(110, 'Tom Hank', 'New Project -  Created ', '::1', 'localhost', '2023-06-20 14:55:17'),
(111, 'Tom Hank', 'Project - Stationary. update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Stationary\"</td>\n                        <td>\"Stationary.\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-13\"</td>\n                    <td>\"2023-06-13\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-20 15:52:56'),
(112, 'Tom Hank', 'Project - Stationary. update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Stationary\"</td>\n                        <td>\"Stationary.\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-13\"</td>\n                    <td>\"2023-06-13\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-20 15:53:46'),
(113, 'Tom Hank', 'Project - Stationary1 update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Stationary\"</td>\n                        <td>\"Stationary1\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-13\"</td>\n                    <td>\"2023-06-13\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-20 15:54:22'),
(114, 'Tom Hank', 'Project - Stationary1 update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Stationary1\"</td>\n                        <td>\"Stationary\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-13\"</td>\n                    <td>\"2023-06-13\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-20 15:54:57'),
(115, 'H2020435 - Tom Hank', 'Project - Stationary deleted', '::1', 'localhost', '2023-06-20 16:15:23'),
(116, 'H2020435 - Tom Hank', 'Project - Stationary deleted', '::1', 'localhost', '2023-06-20 16:26:51'),
(117, 'H2020435 - Tom Hank', 'Project - Stationary restored', '::1', 'localhost', '2023-06-20 16:39:34'),
(118, 'H2020435 - Tom Hank', 'Project - Stationary deleted', '::1', 'localhost', '2023-06-20 16:39:49'),
(119, 'H2020435 - Tom Hank', 'Project - Stationary restored', '::1', 'localhost', '2023-06-20 16:42:10'),
(120, 'H2020435 - Tom Hank', 'Project - Stationary deleted', '::1', 'localhost', '2023-06-20 16:42:50'),
(121, 'H2020435 - Tom Hank', 'Project -  deleted', '::1', 'localhost', '2023-06-20 16:42:56'),
(122, 'H2020435 - Tom Hank', 'Project - Stationary deleted forever', '::1', 'localhost', '2023-06-20 16:44:17'),
(123, 'H2020435 - Tom Hank', 'Project - Stationary deleted', '::1', 'localhost', '2023-06-20 16:46:59'),
(124, 'H2020435 - Tom Hank', 'Project - Stationary restored', '::1', 'localhost', '2023-06-20 16:47:25'),
(125, 'H2020435 - Tom Hank', 'Project - Stationary deleted', '::1', 'localhost', '2023-06-20 16:49:45'),
(126, 'H2020435 - Tom Hank', 'Project - Stationary restored', '::1', 'localhost', '2023-06-20 16:59:20'),
(127, 'H2020435 - Tom Hank', 'Project - Stationary deleted', '::1', 'localhost', '2023-06-20 16:59:25'),
(128, 'H2020435 - Tom Hank', 'Project - Stationary deleted forever', '::1', 'localhost', '2023-06-20 16:59:31'),
(129, 'H2020435 - Tom Hank', 'Project - Tracker deleted', '::1', 'localhost', '2023-06-20 17:36:35'),
(130, 'H2020435 - Tom Hank', 'Project - Tracker restored', '::1', 'localhost', '2023-06-20 17:36:47'),
(131, 'H2020435 - Tom Hank', 'Project - Tracker deleted', '::1', 'localhost', '2023-06-20 17:47:45'),
(132, 'H2020435 - Tom Hank', 'Project - Tracker restored', '::1', 'localhost', '2023-06-20 17:52:56'),
(133, 'H2020435 - Tom Hank', 'Project - Tracker deleted', '::1', 'localhost', '2023-06-20 17:53:22'),
(134, 'H2020435 - Tom Hank', 'Project - Tracker restored', '::1', 'localhost', '2023-06-20 17:54:24'),
(135, 'H2020435 - Tom Hank', 'Project - PPE deleted', '::1', 'localhost', '2023-06-20 17:57:11'),
(136, 'H2020435 - Tom Hank', 'Project - Tracker deleted', '::1', 'localhost', '2023-06-20 17:57:52'),
(137, 'H2020435 - Tom Hank', 'Project - PPE restored', '::1', 'localhost', '2023-06-20 17:59:05'),
(138, 'H2020435 - Tom Hank', 'Project - Tracker restored', '::1', 'localhost', '2023-06-20 17:59:20'),
(139, 'H2020435 - Tom Hank', 'Project - Tracker deleted', '::1', 'localhost', '2023-06-20 18:00:05'),
(140, 'H2020435 - Tom Hank', 'Project - Tracker restored', '::1', 'localhost', '2023-06-20 18:00:18'),
(141, 'H2020435 - Tom Hank', 'Project - PPE deleted', '::1', 'localhost', '2023-06-20 18:03:15'),
(142, 'H2020435 - Tom Hank', 'Project - PPE restored', '::1', 'localhost', '2023-06-20 18:04:16'),
(143, 'H2020435 - Tom Hank', 'Project - Tracker update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Tracker\"</td>\n                        <td>\"Tracker.\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-13\"</td>\n                    <td>\"2023-06-13\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-20 18:06:18'),
(144, 'H2020435 - Tom Hank', 'Project - Tracker. update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Tracker.\"</td>\n                        <td>\"Tracker\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-13\"</td>\n                    <td>\"2023-06-13\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-20 18:07:28'),
(145, 'H2020435 - Tom Hank', 'Project - Stationary update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Stationary\"</td>\n                        <td>\"Stationary.\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-13\"</td>\n                    <td>\"2023-06-13\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-20 18:10:01'),
(146, 'H2020435 - Tom Hank', 'Project - Stationary. update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Stationary.\"</td>\n                        <td>\"Stationary\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-13\"</td>\n                    <td>\"2023-06-13\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-20 18:16:51'),
(147, 'H2020435 - Tom Hank', 'Project - Stationary deleted', '::1', 'localhost', '2023-06-20 18:16:59'),
(148, 'H2020435 - Tom Hank', 'Project - Stationary restored', '::1', 'localhost', '2023-06-20 18:17:07'),
(149, 'H2020435', 'User Deactivation - Emp65294', '::1', 'localhost', '2023-06-20 18:46:27'),
(150, 'H2020435', 'User Activation - Emp65294', '::1', 'localhost', '2023-06-20 18:49:55'),
(151, 'H2020435', 'Password Reset for - Emp65294', '::1', 'localhost', '2023-06-20 18:50:04'),
(152, 'H2020435', 'User Deactivation - Emp65294', '::1', 'localhost', '2023-06-20 18:50:29'),
(153, 'H2020435', 'User Activation - Emp65294', '::1', 'localhost', '2023-06-20 18:50:36'),
(154, 'H2020435', 'User Deactivation - Emp65294', '::1', 'localhost', '2023-06-20 18:52:48'),
(155, 'h2020435', 'System Log In', '::1', 'localhost', '2023-06-21 10:56:53'),
(156, 'H2020435', 'User Activation - Emp65294', '::1', 'localhost', '2023-06-21 11:20:32'),
(157, 'H2020435 - Tom Hank', 'Project - Tracker deleted', '::1', 'localhost', '2023-06-21 11:21:50'),
(158, 'H2020435 - Tom Hank', 'Project - PPE update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"PPE\"</td>\n                        <td>\"PPE\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-13\"</td>\n                    <td>\"2023-06-13\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 11:23:59'),
(159, 'H2020435 - Tom Hank', 'Project - PPE update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"PPE\"</td>\n                        <td>\"PPE\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-13\"</td>\n                    <td>\"2023-06-13\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 11:29:07'),
(160, 'H2020435 - Tom Hank', 'Project - PPE update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"PPE\"</td>\n                        <td>\"PPE\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-13\"</td>\n                    <td>\"2023-06-13\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 11:31:22'),
(161, 'H2020435 - Tom Hank', 'Project - PPE update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"PPE\"</td>\n                        <td>\"PPE\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-13\"</td>\n                    <td>\"2023-06-13\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 11:34:48'),
(162, 'H2020435 - Tom Hank', 'New Project - Tracker Created ', '::1', 'localhost', '2023-06-21 11:43:59'),
(163, 'H2020435 - Tom Hank', 'Project - GALOP update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"GALOP\"</td>\n                        <td>\"GALOP\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-13\"</td>\n                    <td>\"2023-06-13\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    <td>\"2023/06/06 - 2023/07/18\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 11:44:47'),
(164, 'H2020435 - Tom Hank', 'Project - Tyres deleted', '::1', 'localhost', '2023-06-21 11:44:58'),
(165, 'H2020435 - Tom Hank', 'Project - Tyres restored', '::1', 'localhost', '2023-06-21 11:45:07'),
(166, 'H2020435 - Tom Hank', 'Project - Tyres deleted', '::1', 'localhost', '2023-06-21 11:46:29'),
(167, 'H2020435 - Tom Hank', 'Project - Tyres restored', '::1', 'localhost', '2023-06-21 11:46:37'),
(168, 'H2020435', 'User Deactivation - Emp65294', '::1', 'localhost', '2023-06-21 11:47:35'),
(169, 'H2020435', 'User Activation - Emp65294', '::1', 'localhost', '2023-06-21 11:47:59'),
(170, 'H2020435 - Tom Hank', 'Project - Stationary deleted', '::1', 'localhost', '2023-06-21 12:18:26'),
(171, 'H2020435 - Tom Hank', 'Project - Stationary restored', '::1', 'localhost', '2023-06-21 12:18:31'),
(172, 'H2020435 - Tom Hank', 'Project Phase - Initialtion/Apporval update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Initialtion/Apporval\"</td>\n                        <td>\"Initialtion/Apporval\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"\"</td>\n                    <td>\"2023-06-06\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"\"</td>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"\"</td>\n                    <td>\"\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 15:37:49'),
(173, 'H2020435 - Tom Hank', 'Project Phase - Initialtion/Apporval update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Initialtion/Apporval\"</td>\n                        <td>\"Initialtion/Apporval\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-06\"</td>\n                    <td>\"2023-06-06\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"\"</td>\n                    <td>\"ReadMe.pdf\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 15:51:02'),
(174, 'H2020435 - Tom Hank', 'Project Phase - Initialtion/Apporval update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Initialtion/Apporval\"</td>\n                        <td>\"Initialtion/Apporval\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-06\"</td>\n                    <td>\"2023-06-06\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"ReadMe.pdf\"</td>\n                    <td>\"ReadMe.pdf\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 15:53:54'),
(175, 'H2020435 - Tom Hank', 'Project Phase - Initialtion/Apporval update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Initialtion/Apporval\"</td>\n                        <td>\"Initialtion/Apporval\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-06\"</td>\n                    <td>\"2023-06-06\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"ReadMe.pdf\"</td>\n                    <td>\"ReadMe.pdf\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 15:55:09'),
(176, 'H2020435 - Tom Hank', 'Project Phase - Initialtion/Apporval update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Initialtion/Apporval\"</td>\n                        <td>\"Initialtion/Apporval\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-06\"</td>\n                    <td>\"2023-06-06\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"ReadMe.pdf\"</td>\n                    <td>\"ReadMe.pdf\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 15:55:20'),
(177, 'H2020435 - Tom Hank', 'Project Phase - Initialtion/Apporval update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Initialtion/Apporval\"</td>\n                        <td>\"Initialtion/Apporval\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-06\"</td>\n                    <td>\"2023-06-06\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"ReadMe.pdf\"</td>\n                    <td>\"ReadMe.pdf\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 15:57:01'),
(178, 'H2020435 - Tom Hank', 'Project Phase - Initialtion/Apporval update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Initialtion/Apporval\"</td>\n                        <td>\"Initialtion/Apporval\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-06\"</td>\n                    <td>\"2023-06-06\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"ReadMe.pdf\"</td>\n                    <td>\"ReadMe.pdf\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 16:00:25'),
(179, 'H2020435 - Tom Hank', 'Project Phase - Initialtion/Apporval update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Initialtion/Apporval\"</td>\n                        <td>\"Initialtion/Apporval\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-06\"</td>\n                    <td>\"2023-06-06\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"ReadMe.pdf\"</td>\n                    <td>\"\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 16:04:37'),
(180, 'H2020435 - Tom Hank', 'Project Phase - Initialtion/Apporval update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Initialtion/Apporval\"</td>\n                        <td>\"Initialtion/Apporval\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-06\"</td>\n                    <td>\"2023-06-06\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"\"</td>\n                    <td>\"ReadMe.pdf\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 16:06:34'),
(181, 'H2020435 - Tom Hank', 'Project Phase - Initialtion/Apporval update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Initialtion/Apporval\"</td>\n                        <td>\"Initialtion/Apporval\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"2023-06-06\"</td>\n                    <td>\"2023-06-07\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    <td>\"06/05/2023 - 06/23/2023\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"ReadMe.pdf\"</td>\n                    <td>\"ReadMe.pdf\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 16:25:59'),
(182, 'H2020435 - Tom Hank', 'Project Phase - Initialtion/Apporval update <br/> \n                <table>\n                    <thead>\n                    <tr>\n                        <th>Before</th>\n                        <th>After</th>\n                    </tr>\n                    </thead>\n                    <tbody>\n                    <tr>\n                        <td>\"Initialtion/Apporval\"</td>\n                        <td>\"Initialtion/Apporval\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"\"</td>\n                    <td>\"2023-06-06\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"\"</td>\n                    <td>\"06/01/2023 - 06/23/2023\"</td>\n                    </tr>\n                    <tr>\n                    <td>\"\"</td>\n                    <td>\"\"</td>\n                    </tr>\n                    </tbody>\n                </table>', '::1', 'localhost', '2023-06-21 16:32:56'),
(183, 'H2020435', 'Password Reset for - Emp65294', '::1', 'localhost', '2023-06-21 17:38:11'),
(184, 'H2020435 - Tom Hank', 'New Project - GALOP Created ', '::1', 'localhost', '2023-06-21 17:45:49'),
(185, 'H2020435 - Tom Hank', 'New Project - Tyres Created ', '::1', 'localhost', '2023-06-21 17:46:24'),
(186, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-06-21 17:46:41'),
(187, 'h2020435', 'System Log In', '::1', 'localhost', '2023-06-21 17:46:44'),
(188, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-06-21 17:47:08'),
(189, 'H2020435', 'Password Reset for - Emp65294', '::1', 'localhost', '2023-06-22 16:20:14'),
(190, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-06-22 16:20:29'),
(191, 'h2020435', 'System Log In', '::1', 'localhost', '2023-06-22 16:20:37'),
(192, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-06-22 16:26:04'),
(193, 'h2020435', 'System Log In', '::1', 'localhost', '2023-06-22 16:27:31'),
(194, 'H2020435', 'System Log Out', '::1', 'localhost', '2023-06-22 16:29:17'),
(195, 'h2020435', 'System Log In', '::1', 'localhost', '2023-06-22 16:29:20'),
(196, 'h2020435', 'System Log In', '::1', 'localhost', '2023-06-22 17:05:48'),
(197, 'H2020435 - Tom Hank', 'New Project - IT equipment Created ', '::1', 'localhost', '2023-06-22 17:06:01'),
(198, 'H2020435 - Tom Hank', 'New Project - fixtures Created ', '::1', 'localhost', '2023-06-22 17:07:02'),
(199, 'H2020435 - Tom Hank', 'New Project - infrastructure development. Created ', '::1', 'localhost', '2023-06-22 17:07:17'),
(200, 'H2020435 - Tom Hank', 'New Project - healthcare facility. Created ', '::1', 'localhost', '2023-06-22 17:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(30) NOT NULL,
  `cat_id` int(30) NOT NULL,
  `project_name` text NOT NULL,
  `project_date` date NOT NULL,
  `project_timeline` text NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `created_by` text NOT NULL,
  `delete_flag` int(2) NOT NULL DEFAULT 0 COMMENT '2 = deleted by admin; 1 = deleted by user; 0= not deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `cat_id`, `project_name`, `project_date`, `project_timeline`, `date_created`, `created_by`, `delete_flag`) VALUES
(13, 1, 'Stationary', '2023-06-13', '2023/06/06 - 2023/07/18', '2023-06-20', 'Tom Hank', 0),
(18, 4, 'Tracker', '2023-06-08', '06/06/2023 - 06/30/2023', '2023-06-21', 'H2020435 - Tom Hank', 0),
(19, 3, 'GALOP', '2023-06-23', '06/07/2023 - 07/01/2023', '2023-06-21', 'H2020435 - Tom Hank', 0),
(20, 2, 'Tyres', '2023-06-20', '06/20/2023 - 07/31/2023', '2023-06-21', 'H2020435 - Tom Hank', 0),
(21, 1, 'IT equipment', '2023-06-15', '06/22/2023 - 06/22/2023', '2023-06-22', 'H2020435 - Tom Hank', 0),
(22, 1, 'fixtures', '2023-06-14', '06/22/2023 - 06/22/2023', '2023-06-22', 'H2020435 - Tom Hank', 0),
(23, 2, 'infrastructure development.', '2023-06-06', '06/22/2023 - 06/22/2023', '2023-06-22', 'H2020435 - Tom Hank', 0),
(24, 3, 'healthcare facility.', '2023-06-19', '06/22/2023 - 06/22/2023', '2023-06-22', 'H2020435 - Tom Hank', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_phase`
--

CREATE TABLE `project_phase` (
  `phase_id` int(30) NOT NULL,
  `project_id` int(30) NOT NULL,
  `phase_name` text NOT NULL,
  `phase_date` date DEFAULT NULL,
  `phase_timeline1` text DEFAULT NULL,
  `phase_pdf` text DEFAULT NULL,
  `delete_flag` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_phase`
--

INSERT INTO `project_phase` (`phase_id`, `project_id`, `phase_name`, `phase_date`, `phase_timeline1`, `phase_pdf`, `delete_flag`) VALUES
(21, 13, 'Initialtion/Apporval', '2023-06-07', '06/05/2023 - 06/23/2023', 'ReadMe.pdf', 0),
(22, 13, 'Invitation', NULL, NULL, NULL, 0),
(23, 13, 'Tender Document', NULL, NULL, NULL, 0),
(24, 13, 'Issue Form', NULL, NULL, NULL, 0),
(25, 13, 'Opening', NULL, NULL, NULL, 0),
(26, 13, 'Submission Form', NULL, NULL, NULL, 0),
(27, 13, 'Attendance Form', NULL, NULL, NULL, 0),
(28, 13, 'Opening Records', NULL, NULL, NULL, 0),
(29, 13, 'Minutes', NULL, NULL, NULL, 0),
(30, 13, 'Tender Sumbmission', NULL, NULL, NULL, 0),
(31, 13, 'Evaluation Panel', NULL, NULL, NULL, 0),
(32, 13, 'Evaluation', NULL, NULL, NULL, 0),
(33, 13, 'Evaluation approval', NULL, NULL, NULL, 0),
(34, 13, 'Notification', NULL, NULL, NULL, 0),
(35, 13, 'Acceptance', NULL, NULL, NULL, 0),
(36, 13, 'Contract', NULL, NULL, NULL, 0),
(37, 13, 'Way Bill', NULL, NULL, NULL, 0),
(38, 13, 'SRA/Certificate', NULL, NULL, NULL, 0),
(39, 13, 'Request for Payment', NULL, NULL, NULL, 0),
(40, 13, 'PV', NULL, NULL, NULL, 0),
(41, 18, 'Initialtion/Apporval', '2023-06-06', '06/01/2023 - 06/23/2023', '', 0),
(42, 18, 'Invitation', NULL, NULL, NULL, 0),
(43, 18, 'Tender Document', NULL, NULL, NULL, 0),
(44, 18, 'Issue Form', NULL, NULL, NULL, 0),
(45, 18, 'Opening', NULL, NULL, NULL, 0),
(46, 18, 'Submission Form', NULL, NULL, NULL, 0),
(47, 18, 'Attendance Form', NULL, NULL, NULL, 0),
(48, 18, 'Opening Records', NULL, NULL, NULL, 0),
(49, 18, 'Minutes', NULL, NULL, NULL, 0),
(50, 18, 'Tender Sumbmission', NULL, NULL, NULL, 0),
(51, 18, 'Evaluation Panel', NULL, NULL, NULL, 0),
(52, 18, 'Evaluation', NULL, NULL, NULL, 0),
(53, 18, 'Evaluation approval', NULL, NULL, NULL, 0),
(54, 18, 'Notification', NULL, NULL, NULL, 0),
(55, 18, 'Acceptance', NULL, NULL, NULL, 0),
(56, 18, 'Contract', NULL, NULL, NULL, 0),
(57, 18, 'Way Bill', NULL, NULL, NULL, 0),
(58, 18, 'SRA/Certificate', NULL, NULL, NULL, 0),
(59, 18, 'Request for Payment', NULL, NULL, NULL, 0),
(60, 18, 'PV', NULL, NULL, NULL, 0),
(61, 19, 'Initialtion/Apporval', NULL, NULL, NULL, 0),
(62, 19, 'Invitation', NULL, NULL, NULL, 0),
(63, 19, 'Tender Document', NULL, NULL, NULL, 0),
(64, 19, 'Issue Form', NULL, NULL, NULL, 0),
(65, 19, 'Opening', NULL, NULL, NULL, 0),
(66, 19, 'Submission Form', NULL, NULL, NULL, 0),
(67, 19, 'Attendance Form', NULL, NULL, NULL, 0),
(68, 19, 'Opening Records', NULL, NULL, NULL, 0),
(69, 19, 'Minutes', NULL, NULL, NULL, 0),
(70, 19, 'Tender Sumbmission', NULL, NULL, NULL, 0),
(71, 19, 'Evaluation Panel', NULL, NULL, NULL, 0),
(72, 19, 'Evaluation', NULL, NULL, NULL, 0),
(73, 19, 'Evaluation approval', NULL, NULL, NULL, 0),
(74, 19, 'Notification', NULL, NULL, NULL, 0),
(75, 19, 'Acceptance', NULL, NULL, NULL, 0),
(76, 19, 'Contract', NULL, NULL, NULL, 0),
(77, 19, 'Way Bill', NULL, NULL, NULL, 0),
(78, 19, 'SRA/Certificate', NULL, NULL, NULL, 0),
(79, 19, 'Request for Payment', NULL, NULL, NULL, 0),
(80, 19, 'PV', NULL, NULL, NULL, 0),
(81, 20, 'Initialtion/Apporval', NULL, NULL, NULL, 0),
(82, 20, 'Invitation', NULL, NULL, NULL, 0),
(83, 20, 'Tender Document', NULL, NULL, NULL, 0),
(84, 20, 'Issue Form', NULL, NULL, NULL, 0),
(85, 20, 'Opening', NULL, NULL, NULL, 0),
(86, 20, 'Submission Form', NULL, NULL, NULL, 0),
(87, 20, 'Attendance Form', NULL, NULL, NULL, 0),
(88, 20, 'Opening Records', NULL, NULL, NULL, 0),
(89, 20, 'Minutes', NULL, NULL, NULL, 0),
(90, 20, 'Tender Sumbmission', NULL, NULL, NULL, 0),
(91, 20, 'Evaluation Panel', NULL, NULL, NULL, 0),
(92, 20, 'Evaluation', NULL, NULL, NULL, 0),
(93, 20, 'Evaluation approval', NULL, NULL, NULL, 0),
(94, 20, 'Notification', NULL, NULL, NULL, 0),
(95, 20, 'Acceptance', NULL, NULL, NULL, 0),
(96, 20, 'Contract', NULL, NULL, NULL, 0),
(97, 20, 'Way Bill', NULL, NULL, NULL, 0),
(98, 20, 'SRA/Certificate', NULL, NULL, NULL, 0),
(99, 20, 'Request for Payment', NULL, NULL, NULL, 0),
(100, 20, 'PV', NULL, NULL, NULL, 0),
(101, 21, 'Initialtion/Apporval', NULL, NULL, NULL, 0),
(102, 21, 'Invitation', NULL, NULL, NULL, 0),
(103, 21, 'Tender Document', NULL, NULL, NULL, 0),
(104, 21, 'Issue Form', NULL, NULL, NULL, 0),
(105, 21, 'Opening', NULL, NULL, NULL, 0),
(106, 21, 'Submission Form', NULL, NULL, NULL, 0),
(107, 21, 'Attendance Form', NULL, NULL, NULL, 0),
(108, 21, 'Opening Records', NULL, NULL, NULL, 0),
(109, 21, 'Minutes', NULL, NULL, NULL, 0),
(110, 21, 'Tender Sumbmission', NULL, NULL, NULL, 0),
(111, 21, 'Evaluation Panel', NULL, NULL, NULL, 0),
(112, 21, 'Evaluation', NULL, NULL, NULL, 0),
(113, 21, 'Evaluation approval', NULL, NULL, NULL, 0),
(114, 21, 'Notification', NULL, NULL, NULL, 0),
(115, 21, 'Acceptance', NULL, NULL, NULL, 0),
(116, 21, 'Contract', NULL, NULL, NULL, 0),
(117, 21, 'Way Bill', NULL, NULL, NULL, 0),
(118, 21, 'SRA/Certificate', NULL, NULL, NULL, 0),
(119, 21, 'Request for Payment', NULL, NULL, NULL, 0),
(120, 21, 'PV', NULL, NULL, NULL, 0),
(121, 22, 'Initialtion/Apporval', NULL, NULL, NULL, 0),
(122, 22, 'Invitation', NULL, NULL, NULL, 0),
(123, 22, 'Tender Document', NULL, NULL, NULL, 0),
(124, 22, 'Issue Form', NULL, NULL, NULL, 0),
(125, 22, 'Opening', NULL, NULL, NULL, 0),
(126, 22, 'Submission Form', NULL, NULL, NULL, 0),
(127, 22, 'Attendance Form', NULL, NULL, NULL, 0),
(128, 22, 'Opening Records', NULL, NULL, NULL, 0),
(129, 22, 'Minutes', NULL, NULL, NULL, 0),
(130, 22, 'Tender Sumbmission', NULL, NULL, NULL, 0),
(131, 22, 'Evaluation Panel', NULL, NULL, NULL, 0),
(132, 22, 'Evaluation', NULL, NULL, NULL, 0),
(133, 22, 'Evaluation approval', NULL, NULL, NULL, 0),
(134, 22, 'Notification', NULL, NULL, NULL, 0),
(135, 22, 'Acceptance', NULL, NULL, NULL, 0),
(136, 22, 'Contract', NULL, NULL, NULL, 0),
(137, 22, 'Way Bill', NULL, NULL, NULL, 0),
(138, 22, 'SRA/Certificate', NULL, NULL, NULL, 0),
(139, 22, 'Request for Payment', NULL, NULL, NULL, 0),
(140, 22, 'PV', NULL, NULL, NULL, 0),
(141, 23, 'Initialtion/Apporval', NULL, NULL, NULL, 0),
(142, 23, 'Invitation', NULL, NULL, NULL, 0),
(143, 23, 'Tender Document', NULL, NULL, NULL, 0),
(144, 23, 'Issue Form', NULL, NULL, NULL, 0),
(145, 23, 'Opening', NULL, NULL, NULL, 0),
(146, 23, 'Submission Form', NULL, NULL, NULL, 0),
(147, 23, 'Attendance Form', NULL, NULL, NULL, 0),
(148, 23, 'Opening Records', NULL, NULL, NULL, 0),
(149, 23, 'Minutes', NULL, NULL, NULL, 0),
(150, 23, 'Tender Sumbmission', NULL, NULL, NULL, 0),
(151, 23, 'Evaluation Panel', NULL, NULL, NULL, 0),
(152, 23, 'Evaluation', NULL, NULL, NULL, 0),
(153, 23, 'Evaluation approval', NULL, NULL, NULL, 0),
(154, 23, 'Notification', NULL, NULL, NULL, 0),
(155, 23, 'Acceptance', NULL, NULL, NULL, 0),
(156, 23, 'Contract', NULL, NULL, NULL, 0),
(157, 23, 'Way Bill', NULL, NULL, NULL, 0),
(158, 23, 'SRA/Certificate', NULL, NULL, NULL, 0),
(159, 23, 'Request for Payment', NULL, NULL, NULL, 0),
(160, 23, 'PV', NULL, NULL, NULL, 0),
(161, 24, 'Initialtion/Apporval', NULL, NULL, NULL, 0),
(162, 24, 'Invitation', NULL, NULL, NULL, 0),
(163, 24, 'Tender Document', NULL, NULL, NULL, 0),
(164, 24, 'Issue Form', NULL, NULL, NULL, 0),
(165, 24, 'Opening', NULL, NULL, NULL, 0),
(166, 24, 'Submission Form', NULL, NULL, NULL, 0),
(167, 24, 'Attendance Form', NULL, NULL, NULL, 0),
(168, 24, 'Opening Records', NULL, NULL, NULL, 0),
(169, 24, 'Minutes', NULL, NULL, NULL, 0),
(170, 24, 'Tender Sumbmission', NULL, NULL, NULL, 0),
(171, 24, 'Evaluation Panel', NULL, NULL, NULL, 0),
(172, 24, 'Evaluation', NULL, NULL, NULL, 0),
(173, 24, 'Evaluation approval', NULL, NULL, NULL, 0),
(174, 24, 'Notification', NULL, NULL, NULL, 0),
(175, 24, 'Acceptance', NULL, NULL, NULL, 0),
(176, 24, 'Contract', NULL, NULL, NULL, 0),
(177, 24, 'Way Bill', NULL, NULL, NULL, 0),
(178, 24, 'SRA/Certificate', NULL, NULL, NULL, 0),
(179, 24, 'Request for Payment', NULL, NULL, NULL, 0),
(180, 24, 'PV', NULL, NULL, NULL, 0);

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
(1, 'H2020435', '$2y$10$KzyJ3OCKbekuiZX/tq62e.yr0iKTMPYyw4hlQFhtwZ2omk8Haghpu', 'admin', 0, '2020-11-13', 'Joshua Appiah Dadzie', '2023-03-29', '', 'Tom Hank', ''),
(2, 'Emp65294', '$2y$10$KzyJ3OCKbekuiZX/tq62e.yr0iKTMPYyw4hlQFhtwZ2omk8Haghpu', 'user', 0, '2020-11-17', 'Joshua Appiah Dadzie', '2023-03-29', '', 'Kofi Ampah', 'JohnKKuma@gmail.com1avatar5.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `project_phase`
--
ALTER TABLE `project_phase`
  ADD PRIMARY KEY (`phase_id`),
  ADD KEY `project_id` (`project_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `history_log`
--
ALTER TABLE `history_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `project_phase`
--
ALTER TABLE `project_phase`
  MODIFY `phase_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE;

--
-- Constraints for table `project_phase`
--
ALTER TABLE `project_phase`
  ADD CONSTRAINT `project_phase_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

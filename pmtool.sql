-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2024 at 02:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmtool`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `is_deleted` bit(1) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `task_activity_id` varbinary(255) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `created_by`, `created_at`, `is_deleted`, `remarks`, `status`, `task_activity_id`, `updated_at`) VALUES
(1, 10, '2023-11-29 17:15:24.000000', b'0', 'Approved ', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000178, NULL),
(2, 10, '2023-11-29 17:18:16.000000', b'0', '', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a6578700000000077040000000078, NULL),
(3, 10, '2023-11-30 12:18:11.000000', b'0', '', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a6578700000000077040000000078, NULL),
(4, 10, '2023-11-30 12:53:23.000000', b'0', '', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a6578700000000077040000000078, NULL),
(5, 10, '2023-11-30 12:53:30.000000', b'0', '', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a6578700000000077040000000078, NULL),
(6, 10, '2023-11-30 12:55:34.000000', b'0', '', 'Reject', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a6578700000000077040000000078, NULL),
(7, 10, '2023-11-30 12:55:45.000000', b'0', '', 'Reject', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a6578700000000077040000000078, NULL),
(8, 10, '2023-11-30 12:58:29.000000', b'0', '', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a6578700000000077040000000078, NULL),
(9, 10, '2023-11-30 12:58:46.000000', b'0', '', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a6578700000000077040000000078, NULL),
(10, 10, '2023-11-30 12:58:54.000000', b'0', '', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a6578700000000077040000000078, NULL),
(11, 10, '2023-11-30 17:57:27.000000', b'0', '', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000002770400000002737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b0200007870000000057371007e00020000000378, NULL),
(12, 10, '2023-11-30 17:59:44.000000', b'0', '', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000678, NULL),
(13, 10, '2023-11-30 18:01:18.000000', b'0', '', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000278, NULL),
(14, 10, '2023-11-30 18:03:04.000000', b'0', '', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000478, NULL),
(15, 10, '2023-12-01 13:27:11.000000', b'0', '', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000002770400000002737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000b7371007e00020000000c78, NULL),
(16, 5, '2023-12-01 13:40:30.000000', b'0', '', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000378, NULL),
(17, 10, '2023-12-01 14:45:30.000000', b'0', 'Task 1', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000e78, NULL),
(18, 10, '2023-12-02 10:28:28.000000', b'0', '', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000f78, NULL),
(19, 11, '2023-12-02 13:10:25.000000', b'0', '', 'Approved', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000001078, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `activity_request`
--

CREATE TABLE `activity_request` (
  `id` int(11) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `is_deleted` bit(1) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `request_date` date DEFAULT NULL,
  `sended_to` int(11) DEFAULT NULL,
  `status` enum('Active','Approved','Assigned','Not_Yet','Pending','Rejected') DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_request`
--

INSERT INTO `activity_request` (`id`, `created_at`, `is_deleted`, `remarks`, `request_date`, `sended_to`, `status`, `updated_at`, `user_id`) VALUES
(1, '2023-11-29 17:12:34.000000', b'0', 'Permit to submit activity for these dates', '2023-11-29', 10, 'Approved', '2023-11-30 12:34:50.000000', 14),
(2, '2023-11-29 17:12:34.000000', b'0', 'Permit to submit activity for these dates', '2023-11-27', 10, 'Approved', '2023-11-30 18:03:59.000000', 14),
(3, '2023-11-29 17:12:34.000000', b'0', 'Permit to submit activity for these dates', '2023-11-28', 10, 'Approved', '2023-11-30 12:42:20.000000', 14),
(4, '2023-11-30 17:50:24.000000', b'0', 'Permit to submit activity', '2023-11-24', 10, 'Approved', '2023-12-01 12:48:06.000000', 14),
(5, '2023-12-01 13:26:31.000000', b'0', 'Permit to submitted', '2023-11-09', 10, 'Approved', '2023-12-01 13:27:38.000000', 14),
(6, '2023-12-01 14:25:46.000000', b'0', 'sumit', '2023-11-30', 10, 'Approved', '2023-12-01 14:26:28.000000', 15),
(7, '2023-12-02 10:23:47.000000', b'0', 'good', '2023-12-01', 10, 'Approved', '2023-12-02 10:25:24.000000', 15),
(8, '2023-12-02 10:30:40.000000', b'0', 'to ', '2023-12-01', 3, 'Pending', '2023-12-02 10:30:40.000000', 17),
(9, '2023-12-02 13:04:10.000000', b'0', 'request', '2023-12-01', 11, 'Approved', '2023-12-02 13:06:21.000000', 12);

-- --------------------------------------------------------

--
-- Table structure for table `bussiness_categories`
--

CREATE TABLE `bussiness_categories` (
  `id` int(11) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `is_deleted` bit(1) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bussiness_categories`
--

INSERT INTO `bussiness_categories` (`id`, `created_at`, `is_deleted`, `name`, `status`, `updated_at`) VALUES
(1, '2023-12-01 14:00:26.000000', b'0', 'UI Development ', b'1', '2023-12-01 14:00:26.000000'),
(2, '2023-12-02 10:46:13.000000', b'0', 'Software development', b'1', '2023-12-02 10:46:13.000000'),
(3, '2023-12-02 10:46:40.000000', b'0', 'Procurement', b'1', '2023-12-02 10:46:40.000000');

-- --------------------------------------------------------

--
-- Table structure for table `common_task_activities`
--

CREATE TABLE `common_task_activities` (
  `id` int(11) NOT NULL,
  `activity_date` date DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `draft` bit(1) NOT NULL,
  `hours` int(11) DEFAULT NULL,
  `is_approved` bit(1) NOT NULL,
  `is_deleted` bit(1) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `task` varchar(255) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `common_task_activities`
--

INSERT INTO `common_task_activities` (`id`, `activity_date`, `created_at`, `description`, `draft`, `hours`, `is_approved`, `is_deleted`, `status`, `task`, `updated_at`, `prod_id`, `user_id`) VALUES
(1, '2023-12-01', '2023-12-01 11:25:55.000000', 'Employee', b'0', 2, b'0', b'0', 'Pending', 'Task 1', '2023-12-01 11:25:55.000000', 1, 14),
(2, '2023-12-01', '2023-12-01 11:27:07.000000', 'Employee update', b'0', 4, b'1', b'0', 'Approved', 'Task 2', '2023-12-01 11:27:07.000000', 1, 14),
(3, '2023-12-01', '2023-12-01 13:30:15.000000', 'PMS Task', b'0', 12, b'0', b'0', 'Completed', 'PMS', '2023-12-01 13:30:15.000000', 1, 10),
(4, '2023-12-01', '2023-12-01 14:01:48.000000', 'Description', b'0', 6, b'1', b'0', 'Approved', 'PMS', '2023-12-01 14:01:48.000000', 1, 5),
(5, '2023-12-01', '2023-12-01 14:47:24.000000', 'Description', b'0', 12, b'1', b'0', 'Approved', 'PHHH', '2023-12-01 14:47:24.000000', 1, 10),
(6, '2023-12-01', '2023-12-01 14:49:37.000000', '564', b'0', 8, b'1', b'0', 'Approved', 'TTTT', '2023-12-01 14:49:37.000000', 1, 5),
(7, '2023-12-02', '2023-12-02 08:55:58.000000', 'full completed', b'0', 3, b'1', b'0', 'Approved', 'ui correction', '2023-12-02 08:55:58.000000', 1, 18),
(8, '2023-12-02', '2023-12-02 10:41:03.000000', 'Done by today', b'0', 3, b'1', b'0', 'Approved', 'sing up page', '2023-12-02 10:41:03.000000', 4, 15),
(9, '2023-12-02', '2023-12-02 10:43:03.000000', 'done', b'0', 4, b'1', b'0', 'Approved', 'today task', '2023-12-02 10:43:03.000000', 4, 10),
(10, '2023-12-02', '2023-12-02 10:43:55.000000', 'done', b'0', 6, b'1', b'0', 'Approved', 'task mail', '2023-12-02 10:43:55.000000', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `common_task_activity_log`
--

CREATE TABLE `common_task_activity_log` (
  `id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `is_deleted` bit(1) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `task_activity_id` int(11) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `common_task_activity_log`
--

INSERT INTO `common_task_activity_log` (`id`, `created_by`, `created_at`, `is_deleted`, `remarks`, `status`, `task_activity_id`, `updated_at`) VALUES
(1, 10, '2023-12-01 13:06:47.000000', b'0', '', 'Approved', 2, NULL),
(2, 10, '2023-12-01 13:10:30.000000', b'0', '', 'Approved', 2, NULL),
(3, 3, '2023-12-01 14:02:37.000000', b'0', '', 'Approved', 4, NULL),
(4, 5, '2023-12-01 14:48:44.000000', b'0', 'Product 1', 'Approved', 5, NULL),
(5, 3, '2023-12-01 14:50:12.000000', b'0', '', 'Approved', 6, NULL),
(6, 10, '2023-12-02 08:58:50.000000', b'0', '', 'Approved', 7, NULL),
(7, 10, '2023-12-02 10:41:39.000000', b'0', '', 'Approved', 8, NULL),
(8, 5, '2023-12-02 10:43:26.000000', b'0', '', 'Approved', 9, NULL),
(9, 3, '2023-12-02 10:44:25.000000', b'0', '', 'Approved', 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `id` int(11) NOT NULL,
  `logged_in` datetime(6) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`id`, `logged_in`, `user_id`) VALUES
(1, '2023-11-28 16:29:14.000000', 1),
(2, '2023-11-28 16:30:24.000000', 1),
(3, '2023-11-29 09:58:48.000000', 1),
(4, '2023-11-29 10:12:15.000000', 3),
(5, '2023-11-29 10:20:58.000000', 12),
(6, '2023-11-29 10:22:36.000000', 1),
(7, '2023-11-29 10:23:00.000000', 7),
(8, '2023-11-29 10:24:16.000000', 8),
(9, '2023-11-29 10:25:08.000000', 9),
(10, '2023-11-29 10:26:21.000000', 5),
(11, '2023-11-29 10:31:12.000000', 10),
(12, '2023-11-29 10:37:32.000000', 14),
(13, '2023-11-29 17:32:30.000000', 14),
(14, '2023-11-30 10:01:08.000000', 1),
(15, '2023-11-30 10:03:46.000000', 1),
(16, '2023-11-30 10:04:17.000000', 14),
(17, '2023-11-30 10:04:58.000000', 10),
(18, '2023-11-30 13:22:49.000000', 14),
(19, '2023-11-30 16:07:22.000000', 1),
(20, '2023-11-30 16:07:49.000000', 14),
(21, '2023-11-30 16:08:16.000000', 10),
(22, '2023-12-01 10:09:42.000000', 1),
(23, '2023-12-01 10:14:00.000000', 14),
(24, '2023-12-01 12:32:34.000000', 1),
(25, '2023-12-01 12:34:47.000000', 14),
(26, '2023-12-01 12:47:49.000000', 10),
(27, '2023-12-01 12:54:39.000000', 14),
(28, '2023-12-01 12:58:59.000000', 1),
(29, '2023-12-01 13:31:23.000000', 5),
(30, '2023-12-01 13:34:28.000000', 5),
(31, '2023-12-01 13:47:53.000000', 1),
(32, '2023-12-01 14:01:17.000000', 5),
(33, '2023-12-01 14:02:20.000000', 3),
(34, '2023-12-01 14:05:10.000000', 1),
(35, '2023-12-01 14:07:16.000000', 3),
(36, '2023-12-01 14:09:26.000000', 7),
(37, '2023-12-01 14:09:50.000000', 8),
(38, '2023-12-01 14:10:14.000000', 9),
(39, '2023-12-01 14:10:34.000000', 3),
(40, '2023-12-01 14:12:39.000000', 5),
(41, '2023-12-01 14:15:09.000000', 10),
(42, '2023-12-01 14:18:03.000000', 14),
(43, '2023-12-01 14:18:18.000000', 15),
(44, '2023-12-01 14:19:21.000000', 15),
(45, '2023-12-01 14:19:42.000000', 1),
(46, '2023-12-01 14:20:52.000000', 15),
(47, '2023-12-01 14:21:27.000000', 14),
(48, '2023-12-01 14:21:59.000000', 15),
(49, '2023-12-01 14:26:19.000000', 10),
(50, '2023-12-01 14:27:25.000000', 15),
(51, '2023-12-01 14:44:55.000000', 10),
(52, '2023-12-01 14:48:05.000000', 5),
(53, '2023-12-01 14:49:04.000000', 5),
(54, '2023-12-01 14:49:54.000000', 3),
(55, '2023-12-01 14:50:33.000000', 5),
(56, '2023-12-01 14:51:02.000000', 1),
(57, '2023-12-02 08:23:01.000000', 1),
(58, '2023-12-02 08:39:21.000000', 1),
(59, '2023-12-02 08:55:18.000000', 18),
(60, '2023-12-02 08:58:12.000000', 10),
(61, '2023-12-02 08:59:23.000000', 3),
(62, '2023-12-02 09:06:18.000000', 5),
(63, '2023-12-02 09:07:00.000000', 4),
(64, '2023-12-02 09:09:58.000000', 7),
(65, '2023-12-02 09:11:11.000000', 8),
(66, '2023-12-02 09:12:21.000000', 9),
(67, '2023-12-02 09:12:58.000000', 4),
(68, '2023-12-02 09:16:31.000000', 3),
(69, '2023-12-02 09:20:28.000000', 1),
(70, '2023-12-02 09:21:56.000000', 5),
(71, '2023-12-02 10:11:09.000000', 1),
(72, '2023-12-02 10:12:31.000000', 3),
(73, '2023-12-02 10:14:18.000000', 7),
(74, '2023-12-02 10:14:44.000000', 7),
(75, '2023-12-02 10:15:11.000000', 8),
(76, '2023-12-02 10:15:59.000000', 9),
(77, '2023-12-02 10:16:26.000000', 3),
(78, '2023-12-02 10:17:02.000000', 5),
(79, '2023-12-02 10:21:19.000000', 10),
(80, '2023-12-02 10:23:04.000000', 15),
(81, '2023-12-02 10:24:11.000000', 10),
(82, '2023-12-02 10:24:34.000000', 15),
(83, '2023-12-02 10:25:16.000000', 10),
(84, '2023-12-02 10:25:37.000000', 15),
(85, '2023-12-02 10:28:02.000000', 10),
(86, '2023-12-02 10:30:14.000000', 17),
(87, '2023-12-02 10:31:08.000000', 4),
(88, '2023-12-02 10:32:22.000000', 17),
(89, '2023-12-02 10:33:46.000000', 7),
(90, '2023-12-02 10:34:21.000000', 6),
(91, '2023-12-02 10:39:14.000000', 6),
(92, '2023-12-02 10:39:36.000000', 5),
(93, '2023-12-02 10:40:22.000000', 15),
(94, '2023-12-02 10:41:23.000000', 10),
(95, '2023-12-02 10:42:02.000000', 15),
(96, '2023-12-02 10:42:27.000000', 5),
(97, '2023-12-02 10:44:12.000000', 3),
(98, '2023-12-02 12:31:14.000000', 1),
(99, '2023-12-02 12:33:25.000000', 3),
(100, '2023-12-02 12:38:48.000000', 7),
(101, '2023-12-02 12:45:31.000000', 8),
(102, '2023-12-02 12:47:43.000000', 9),
(103, '2023-12-02 12:50:01.000000', 4),
(104, '2023-12-02 12:52:22.000000', 6),
(105, '2023-12-02 12:58:06.000000', 11),
(106, '2023-12-02 13:00:39.000000', 14),
(107, '2023-12-02 13:00:55.000000', 13),
(108, '2023-12-02 13:02:57.000000', 12),
(109, '2023-12-02 13:06:00.000000', 11),
(110, '2023-12-02 13:15:04.000000', 15);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `is_deleted` bit(1) DEFAULT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `member` int(11) DEFAULT NULL,
  `assigned_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `created_at`, `is_deleted`, `prod_id`, `role`, `status`, `updated_at`, `member`, `assigned_by`) VALUES
(1, '2023-11-29 10:28:57.000000', b'0', 1, 'Team Lead', 'Active', '2023-11-29 10:28:57.000000', 10, 5),
(2, '2023-11-29 10:28:57.000000', b'0', 1, 'Team Member', 'Active', '2023-11-29 10:28:57.000000', 14, 5),
(3, '2023-11-29 10:28:57.000000', b'0', 1, 'Team Lead', 'Active', '2023-11-29 10:28:57.000000', 15, 5),
(4, '2023-12-01 14:13:30.000000', b'0', 2, 'Team Lead', 'Active', '2023-12-01 14:13:30.000000', 10, 5),
(5, '2023-12-01 14:13:30.000000', b'0', 2, 'Team Member', 'Active', '2023-12-01 14:13:30.000000', 15, 5),
(6, '2023-12-02 10:20:40.000000', b'0', 4, 'Team Lead', 'Active', '2023-12-02 10:20:40.000000', 10, 5),
(7, '2023-12-02 10:20:40.000000', b'0', 4, 'Team Member', 'Active', '2023-12-02 10:20:40.000000', 15, 5),
(8, '2023-12-02 10:20:40.000000', b'0', 4, 'Team Member', 'Active', '2023-12-02 10:20:40.000000', 17, 0),
(9, '2023-12-02 12:54:23.000000', b'0', 5, 'Team Lead', 'Active', '2023-12-02 12:54:23.000000', 11, 6),
(10, '2023-12-02 12:54:23.000000', b'0', 5, 'Team Member', 'Active', '2023-12-02 12:54:23.000000', 12, 6),
(11, '2023-12-02 12:54:23.000000', b'0', 5, 'Team Member', 'Active', '2023-12-02 12:54:23.000000', 13, 6);

-- --------------------------------------------------------

--
-- Table structure for table `poduct_flows`
--

CREATE TABLE `poduct_flows` (
  `id` int(11) NOT NULL,
  `access_to` varbinary(255) DEFAULT NULL,
  `approval_by` varbinary(255) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `is_deleted` bit(1) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varbinary(255) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poduct_flows`
--

INSERT INTO `poduct_flows` (`id`, `access_to`, `approval_by`, `created_at`, `created_by`, `is_deleted`, `name`, `status`, `updated_at`) VALUES
(1, 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000002770400000002737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b0200007870000000047371007e00020000000378, 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000003770400000003737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b0200007870000000077371007e0002000000087371007e00020000000978, '2023-11-29 10:02:48.000000', 1, b'0', 'HEPL Approval Flow', NULL, NULL),
(2, 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000378, 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000002770400000002737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b0200007870000000077371007e00020000000878, '2023-11-29 10:11:43.000000', 1, b'0', 'CKPL Approval Flow', NULL, NULL),
(3, 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000378, 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000003770400000003737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b0200007870000000077371007e0002000000087371007e00020000000978, '2023-12-01 14:07:07.000000', 1, b'0', 'Pm approve flow', NULL, NULL),
(4, 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000378, 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000003770400000003737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b0200007870000000077371007e0002000000087371007e00020000000978, '2023-12-02 10:11:59.000000', 1, b'0', 'LN team', NULL, NULL),
(5, 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000478, 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000003770400000003737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b0200007870000000077371007e0002000000087371007e00020000000978, '2023-12-02 12:32:23.000000', 1, b'0', 'hepl New flow', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `is_deleted` bit(1) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `prod_owner` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `status` enum('CREATED','DRAFT') DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `tech_owner` int(11) NOT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `flow` int(11) DEFAULT NULL,
  `prod_head` int(11) DEFAULT NULL,
  `tech_head` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `budget`, `created_at`, `created_by`, `currency`, `end_date`, `file`, `is_deleted`, `name`, `prod_owner`, `start_date`, `status`, `summary`, `tech_owner`, `updated_at`, `category_id`, `flow`, `prod_head`, `tech_head`) VALUES
(1, '100000', '2023-11-29 10:22:04.000000', 3, 'INR', '2023-12-06', '20231129102204_8.jpg', b'0', 'Budgie', 5, '2023-11-29', 'CREATED', 'Budgie Product', 0, '2023-11-29 10:22:04.000000', 1, 1, 3, 4),
(2, '10000', '2023-12-01 14:08:33.000000', 3, 'INR', '2023-12-05', '20231201140833_8.jpg', b'0', 'capex', 5, '2023-12-01', 'CREATED', 'VALID ', 0, '2023-12-01 14:08:50.000000', 1, 3, 3, 4),
(3, '1000', '2023-12-02 09:08:49.000000', 4, 'INR', '2023-12-02', '20231202090849_20231107145651_images.jfif', b'0', 'tech support', 0, '2023-12-02', 'CREATED', 'techinal support', 6, '2023-12-02 09:08:49.000000', 1, 1, 3, 4),
(4, '10000', '2023-12-02 10:13:44.000000', 3, 'INR', '2023-12-02', '20231202101344_20231202090849_20231107145651_images.jfif', b'0', 'Agreement', 5, '2023-12-02', 'CREATED', 'Freight Agreement phase 2', 0, '2023-12-02 10:13:44.000000', 1, 4, 3, 4),
(5, '1000', '2023-12-02 12:38:25.000000', 3, 'INR', '2023-12-14', '20231202123825_20231107151035_images.jfif', b'0', 'PM tool', 0, '2023-12-02', 'CREATED', 'Front and Back end', 6, '2023-12-02 12:38:25.000000', 2, 1, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `prod_approval_history`
--

CREATE TABLE `prod_approval_history` (
  `id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `is_deleted` bit(1) NOT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `status` enum('Active','Approved','Assigned','Not_Yet','Pending','Rejected') DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prod_approval_history`
--

INSERT INTO `prod_approval_history` (`id`, `created_by`, `created_at`, `is_deleted`, `prod_id`, `remarks`, `status`, `updated_at`) VALUES
(1, 7, '2023-11-29 10:22:04.000000', b'0', 1, 'Approved', 'Approved', '2023-11-29 10:23:23.000000'),
(2, 8, '2023-11-29 10:22:04.000000', b'0', 1, 'Approved the Product', 'Approved', '2023-11-29 10:24:55.000000'),
(3, 9, '2023-11-29 10:22:04.000000', b'0', 1, 'Approved', 'Approved', '2023-11-29 10:25:36.000000'),
(4, 7, '2023-12-01 14:08:50.000000', b'0', 2, 'VALID', 'Approved', '2023-12-01 14:09:39.000000'),
(5, 8, '2023-12-01 14:08:50.000000', b'0', 2, 'KJG', 'Approved', '2023-12-01 14:09:55.000000'),
(6, 9, '2023-12-01 14:08:50.000000', b'0', 2, 'VALID', 'Approved', '2023-12-01 14:10:20.000000'),
(7, 7, '2023-12-02 09:08:49.000000', b'0', 3, 'good', 'Approved', '2023-12-02 09:10:22.000000'),
(8, 8, '2023-12-02 09:08:49.000000', b'0', 3, 'good', 'Approved', '2023-12-02 09:11:33.000000'),
(9, 9, '2023-12-02 09:08:49.000000', b'0', 3, 'good', 'Approved', '2023-12-02 09:12:31.000000'),
(10, 7, '2023-12-02 10:13:44.000000', b'0', 4, 'Good', 'Approved', '2023-12-02 10:14:27.000000'),
(11, 8, '2023-12-02 10:13:44.000000', b'0', 4, 'Good', 'Approved', '2023-12-02 10:15:33.000000'),
(12, 9, '2023-12-02 10:13:44.000000', b'0', 4, 'good', 'Approved', '2023-12-02 10:16:08.000000'),
(13, 7, '2023-12-02 12:38:25.000000', b'0', 5, 'Good', 'Approved', '2023-12-02 12:42:55.000000'),
(14, 8, '2023-12-02 12:38:25.000000', b'0', 5, 'good', 'Approved', '2023-12-02 12:45:51.000000'),
(15, 9, '2023-12-02 12:38:25.000000', b'0', 5, 'good', 'Approved', '2023-12-02 12:47:53.000000');

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` int(11) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `is_deleted` bit(1) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `created_at`, `is_deleted`, `name`, `status`, `updated_at`) VALUES
(1, '2023-11-28 16:25:23.000000', b'0', 'Business 1', b'1', '2023-11-28 16:25:23.000000'),
(2, '2023-11-28 16:25:23.000000', b'0', 'Business 2', b'1', '2023-11-28 16:25:23.000000');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `is_deleted` bit(1) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` bit(1) NOT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `created_at`, `is_deleted`, `name`, `status`, `updated_at`) VALUES
(1, '2023-11-28 16:23:06.000000', b'0', 'Super Admin', b'1', '2023-11-28 16:23:06.000000'),
(2, '2023-11-28 16:23:06.000000', b'0', 'Product Head', b'1', '2023-11-28 16:23:06.000000'),
(3, '2023-11-28 16:23:06.000000', b'0', 'Technical Head', b'1', '2023-11-28 16:23:06.000000'),
(4, '2023-11-28 16:23:06.000000', b'0', 'Product Owner', b'1', '2023-11-28 16:23:06.000000'),
(5, '2023-11-28 16:23:06.000000', b'0', 'Technical Owner', b'1', '2023-11-28 16:23:06.000000'),
(6, '2023-11-28 16:23:06.000000', b'0', 'Finance Head', b'1', '2023-11-28 16:23:06.000000'),
(7, '2023-11-28 16:23:06.000000', b'0', 'IT Manager', b'1', '2023-11-28 16:23:06.000000'),
(8, '2023-11-28 16:23:06.000000', b'0', 'Quality Asst', b'1', '2023-11-28 16:23:06.000000'),
(9, '2023-11-28 16:23:06.000000', b'0', 'Team Lead', b'1', '2023-11-28 16:23:06.000000'),
(10, '2023-11-28 16:23:06.000000', b'0', 'Developer', b'1', '2023-11-28 16:23:06.000000'),
(11, '2023-11-28 16:23:06.000000', b'0', 'Tester', b'1', '2023-11-28 16:23:06.000000'),
(12, '2023-12-01 12:34:02.000000', b'0', 'BA', b'1', '2023-12-01 12:34:02.000000'),
(13, '2023-12-01 13:59:59.000000', b'0', 'HOD', b'1', '2023-12-01 13:59:59.000000');

-- --------------------------------------------------------

--
-- Table structure for table `sub_products`
--

CREATE TABLE `sub_products` (
  `id` int(11) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `is_deleted` bit(1) DEFAULT NULL,
  `prod_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `sub_name` varchar(255) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `assigned_to` varbinary(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `is_deleted` bit(1) NOT NULL,
  `priority` varchar(255) DEFAULT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `task_name` varchar(255) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `task_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `assigned_to`, `created_by`, `created_at`, `description`, `end_date`, `file`, `is_deleted`, `priority`, `prod_id`, `start_date`, `status`, `task_name`, `updated_at`, `task_category`) VALUES
(3, 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000e78, 10, '2023-11-29 10:36:36.000000', 'Attendance', '2023-12-01', NULL, b'0', 'Medium', 1, '2023-11-29', 'CREATED', 'Attendance', '2023-11-29 10:36:36.000000', 1),
(4, 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000f78, 10, '2023-12-01 14:17:05.000000', 'GOOD ', '2023-12-07', NULL, b'0', 'High', 2, '2023-12-01', 'CREATED', 'AUTOMATION', '2023-12-01 14:17:05.000000', 2),
(5, 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000f78, 10, '2023-12-02 10:22:26.000000', 'API full Work', '2023-12-02', '20231202102226_20231202084940_man2.png', b'0', 'Medium', 4, '2023-12-02', 'CREATED', 'API Creation', '2023-12-02 10:22:26.000000', 1),
(6, 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000001178, 10, '2023-12-02 10:29:33.000000', 'FE creation', '2023-12-02', '20231202102933_download (1).jpg', b'0', 'Medium', 4, '2023-12-02', 'CREATED', 'FE', '2023-12-02 10:29:33.000000', 2),
(7, 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000c78, 11, '2023-12-02 12:59:52.000000', 'sign up page', '2023-12-05', '20231202125952_20231202090849_20231107145651_images.jfif', b'0', 'Medium', 5, '2023-12-02', 'CREATED', 'FE', '2023-12-02 12:59:52.000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `task_activities`
--

CREATE TABLE `task_activities` (
  `id` int(11) NOT NULL,
  `activity_date` date DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `draft` bit(1) NOT NULL,
  `hours` int(11) DEFAULT NULL,
  `is_approved` bit(1) NOT NULL,
  `is_deleted` bit(1) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task_activities`
--

INSERT INTO `task_activities` (`id`, `activity_date`, `created_at`, `description`, `draft`, `hours`, `is_approved`, `is_deleted`, `status`, `updated_at`, `prod_id`, `task_id`, `user_id`) VALUES
(1, '2023-11-29', '2023-11-29 11:06:21.000000', 'Create Attendance', b'0', 5, b'1', b'0', 'Approved', '2023-11-29 11:06:21.000000', 1, 3, 14),
(2, '2023-11-30', '2023-11-30 14:45:24.000000', 'testing', b'0', 4, b'0', b'0', 'Completed', '2023-11-30 14:45:24.000000', 1, 3, 14),
(3, '2023-11-30', '2023-11-30 15:13:03.000000', 'Testing Attendance', b'0', 6, b'1', b'0', 'Approved', '2023-11-30 15:13:03.000000', 1, 3, 14),
(4, '2023-11-28', '2023-11-30 15:18:42.000000', 'Task Completed', b'0', 2, b'1', b'0', 'Approved', '2023-11-30 15:18:42.000000', 1, 3, 14),
(8, '2023-12-01', '2023-12-01 13:24:06.000000', 'Testing Employee Add', b'0', 6, b'0', b'0', 'Completed', '2023-12-01 13:24:06.000000', 1, 3, 14),
(9, '2023-12-01', '2023-12-01 13:24:06.000000', 'All Employee Update', b'0', 3, b'0', b'0', 'Completed', '2023-12-01 13:24:06.000000', 1, 3, 14),
(10, '2023-12-01', '2023-12-01 13:25:04.000000', 'Attendance Created', b'0', 1, b'0', b'0', 'Pending', '2023-12-01 13:25:04.000000', 1, 3, 14),
(11, '2023-12-01', '2023-12-01 13:25:05.000000', 'Attendance leave Submit', b'0', 2, b'1', b'0', 'Approved', '2023-12-01 13:25:05.000000', 1, 3, 14),
(12, '2023-12-01', '2023-12-01 13:25:33.000000', 'Description', b'0', 6, b'1', b'0', 'Approved', '2023-12-01 13:25:33.000000', 1, 3, 14),
(13, '2023-11-09', '2023-12-01 13:28:35.000000', 'Testing', b'0', 4, b'0', b'0', 'Completed', '2023-12-01 13:28:35.000000', 1, 3, 14),
(14, '2023-11-30', '2023-12-01 14:44:18.000000', 'Description', b'0', 5, b'1', b'0', 'Approved', '2023-12-01 14:44:18.000000', 2, 4, 15),
(15, '2023-12-02', '2023-12-02 10:27:41.000000', 'work complete', b'0', 2, b'1', b'0', 'Approved', '2023-12-02 10:27:41.000000', 4, 5, 15),
(16, '2023-12-02', '2023-12-02 13:07:55.000000', 'tedti', b'0', 2, b'1', b'0', 'Approved', '2023-12-02 13:07:55.000000', 5, 7, 12);

-- --------------------------------------------------------

--
-- Table structure for table `task_categories`
--

CREATE TABLE `task_categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `is_deleted` bit(1) DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task_categories`
--

INSERT INTO `task_categories` (`id`, `category`, `created_at`, `is_deleted`, `status`, `updated_at`) VALUES
(1, 'FE', '2023-12-02 10:46:55.000000', b'0', b'1', '2023-12-02 10:46:55.000000'),
(2, 'BE', '2023-12-02 10:47:03.000000', b'0', b'1', '2023-12-02 10:47:03.000000'),
(3, 'Wire frame', '2023-12-02 10:47:12.000000', b'0', b'1', '2023-12-02 10:47:12.000000'),
(4, 'Documentation', '2023-12-02 10:47:33.000000', b'0', b'1', '2023-12-02 10:47:33.000000');

-- --------------------------------------------------------

--
-- Table structure for table `task_history`
--

CREATE TABLE `task_history` (
  `id` int(11) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `is_deleted` bit(1) NOT NULL,
  `member` varbinary(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task_history`
--

INSERT INTO `task_history` (`id`, `created_at`, `is_deleted`, `member`, `status`, `updated_at`, `created_by`, `task_id`) VALUES
(1, '2023-11-29 10:36:36.000000', b'0', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000e78, 'Assigned', NULL, 10, 3),
(2, '2023-12-01 14:17:05.000000', b'0', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000f78, 'Assigned', NULL, 10, 4),
(3, '2023-12-02 10:22:26.000000', b'0', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000f78, 'Assigned', NULL, 10, 5),
(4, '2023-12-02 10:29:33.000000', b'0', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000001178, 'Assigned', NULL, 10, 6),
(5, '2023-12-02 12:59:52.000000', b'0', 0xaced0005737200136a6176612e7574696c2e41727261794c6973747881d21d99c7619d03000149000473697a65787000000001770400000001737200116a6176612e6c616e672e496e746567657212e2a0a4f781873802000149000576616c7565787200106a6176612e6c616e672e4e756d62657286ac951d0b94e08b02000078700000000c78, 'Assigned', NULL, 11, 7);

-- --------------------------------------------------------

--
-- Table structure for table `team_leader_approval`
--

CREATE TABLE `team_leader_approval` (
  `approval_id` bigint(20) NOT NULL,
  `approved_at` date DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `is_deleted` bit(1) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `team_leader_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `final_approve` int(11) NOT NULL,
  `is_deleted` bit(1) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `role_type` varchar(255) DEFAULT NULL,
  `status` bit(1) NOT NULL,
  `supervisor` int(11) NOT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `branch`, `created_at`, `designation`, `final_approve`, `is_deleted`, `name`, `password`, `profile_pic`, `role_type`, `status`, `supervisor`, `updated_at`, `username`) VALUES
(1, 'Product', '2023-11-28 16:26:28.000000', 'Others', 0, b'0', 'Admin', '$2a$10$wcL38p6lPGygV1Ucf0B4H.uYD.IS/w55CaMdUKn9a7U.rNknVePti', 'default-profile.png', 'On Role', b'1', 3, '2023-11-28 16:26:28.000000', 'AD001'),
(3, 'Product', '2023-11-28 16:36:09.000000', 'Others', 0, b'0', 'Manikam', '$2a$10$YAgbPxieIVPKVmzRGDSdeeWj9GDK64uQwglMyUunKola2AlB0iRqu', '20231128163609_2.png', 'ON Role', b'1', 3, '2023-11-28 16:36:09.000000', 'EMP001'),
(4, 'Technical', '2023-11-28 16:36:09.000000', 'Others', 0, b'0', 'Rajendharan', '$2a$10$YAgbPxieIVPKVmzRGDSdeeWj9GDK64uQwglMyUunKola2AlB0iRqu', '20231128163609_2.png', 'ON Role', b'1', 4, '2023-11-28 16:36:09.000000', 'EMP002'),
(5, 'Product', '2023-11-28 16:36:09.000000', 'Others', 0, b'0', 'Raj', '$2a$10$YAgbPxieIVPKVmzRGDSdeeWj9GDK64uQwglMyUunKola2AlB0iRqu', '20231128163609_2.png', 'ON Role', b'1', 3, '2023-11-28 16:36:09.000000', 'EMP003'),
(6, 'Technical', '2023-11-28 16:36:09.000000', 'Others', 0, b'0', 'George', '$2a$10$YAgbPxieIVPKVmzRGDSdeeWj9GDK64uQwglMyUunKola2AlB0iRqu', '20231128163609_2.png', 'ON Role', b'1', 4, '2023-11-28 16:36:09.000000', 'EMP004'),
(7, 'Technical', '2023-11-28 16:36:09.000000', 'Head', 0, b'0', 'Arunachalam', '$2a$10$YAgbPxieIVPKVmzRGDSdeeWj9GDK64uQwglMyUunKola2AlB0iRqu', '20231128163609_2.png', 'ON Role', b'1', 7, '2023-11-28 16:36:09.000000', 'EMP005'),
(8, 'Product', '2023-11-28 16:36:09.000000', 'Head', 0, b'0', 'Parvathiswaran', '$2a$10$YAgbPxieIVPKVmzRGDSdeeWj9GDK64uQwglMyUunKola2AlB0iRqu', '20231128163609_2.png', 'ON Role', b'1', 8, '2023-11-28 16:36:09.000000', 'EMP006'),
(9, 'Product', '2023-11-28 16:36:09.000000', 'Head', 0, b'0', 'Rajalakshman', '$2a$10$YAgbPxieIVPKVmzRGDSdeeWj9GDK64uQwglMyUunKola2AlB0iRqu', '20231128163609_2.png', 'ON Role', b'1', 9, '2023-11-28 16:36:09.000000', 'EMP007'),
(10, 'Product', '2023-11-28 16:36:09.000000', 'Employee', 0, b'0', 'Murugasegan', '$2a$10$YAgbPxieIVPKVmzRGDSdeeWj9GDK64uQwglMyUunKola2AlB0iRqu', '20231128163609_2.png', 'ON Role', b'1', 5, '2023-11-28 16:36:09.000000', 'EMP008'),
(11, 'Technical', '2023-11-28 16:36:09.000000', 'Employee', 0, b'0', 'Puniyamoorthy', '$2a$10$YAgbPxieIVPKVmzRGDSdeeWj9GDK64uQwglMyUunKola2AlB0iRqu', '20231128163609_2.png', 'ON Role', b'1', 6, '2023-11-28 16:36:09.000000', 'EMP009'),
(12, 'Technical', '2023-11-28 16:36:09.000000', 'Employee', 0, b'0', 'Divya', '$2a$10$YAgbPxieIVPKVmzRGDSdeeWj9GDK64uQwglMyUunKola2AlB0iRqu', '20231128163609_2.png', 'ON Role', b'1', 11, '2023-11-28 16:36:09.000000', 'EMP010'),
(13, 'Technical', '2023-11-28 16:36:09.000000', 'Employee', 0, b'0', 'Saranraj', '$2a$10$YAgbPxieIVPKVmzRGDSdeeWj9GDK64uQwglMyUunKola2AlB0iRqu', '20231128163609_2.png', 'ON Role', b'1', 11, '2023-11-28 16:36:09.000000', 'EMP011'),
(14, 'Product', '2023-11-28 16:36:09.000000', 'Employee', 0, b'0', 'Kathija', '$2a$10$YAgbPxieIVPKVmzRGDSdeeWj9GDK64uQwglMyUunKola2AlB0iRqu', '20231128163609_2.png', 'ON Role', b'1', 10, '2023-11-28 16:36:09.000000', 'EMP012'),
(15, 'Product', '2023-11-28 16:36:09.000000', 'Employee', 0, b'0', 'Ruban', '$2a$10$YAgbPxieIVPKVmzRGDSdeeWj9GDK64uQwglMyUunKola2AlB0iRqu', '20231128163609_2.png', 'ON Role', b'1', 10, '2023-11-28 16:36:09.000000', 'EMP013'),
(16, 'Product', '2023-12-01 12:33:35.000000', 'Employee', 0, b'0', 'Emaya', '$2a$10$zSf3QAoprtyKiYbJdJXI9ucQ1NeYy58rTwMCmf2G0zXAs05BKqnUC', '20231128163609_2.png', 'ON Role', b'1', 10, '2023-12-01 12:33:35.000000', '1234'),
(17, 'Product', '2023-12-01 13:59:43.000000', 'Employee', 0, b'0', 'sanjay ', '$2a$10$z2KILCW2Jw0rSRtdWCTHJeZmeRee6KzVDelEFYN455aYPd.g2ay4e', '20231128163609_2.png', 'ON Role', b'1', 6, '2023-12-01 13:59:43.000000', 'A0999'),
(18, 'Product', '2023-12-02 08:49:40.000000', 'Employee', 3, b'0', 'Joe', '$2a$10$IsrMbcX0qe7LC9KibQf1KejiKtW61X5J4hqLqqubSohafpS2hvV5K', '20231202084940_man2.png', 'Contract', b'1', 10, '2023-12-02 08:49:40.000000', '908070');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `users_id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`users_id`, `roles_id`) VALUES
(1, 1),
(3, 2),
(4, 3),
(5, 4),
(6, 5),
(7, 7),
(8, 6),
(9, 8),
(10, 9),
(11, 9),
(12, 10),
(13, 11),
(14, 10),
(15, 11),
(16, 10),
(17, 9),
(18, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_request`
--
ALTER TABLE `activity_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bussiness_categories`
--
ALTER TABLE `bussiness_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common_task_activities`
--
ALTER TABLE `common_task_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK4lt8wty5un1ccs83bl5814jay` (`prod_id`),
  ADD KEY `FKgkkmkwh0pef4u682r6d6n4h0` (`user_id`);

--
-- Indexes for table `common_task_activity_log`
--
ALTER TABLE `common_task_activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKfoohqaq3mlh3hdwmmff0j2cdc` (`member`);

--
-- Indexes for table `poduct_flows`
--
ALTER TABLE `poduct_flows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKpo2bt157jo1xssnvvim5be121` (`category_id`),
  ADD KEY `FK8fqxr9ld0id3mbjb950pfwyld` (`flow`),
  ADD KEY `FKc5baoly7dojyhgfq9dii370pj` (`prod_head`),
  ADD KEY `FKrm687ijaxwl4cqsa4n5df5kaf` (`tech_head`);

--
-- Indexes for table `prod_approval_history`
--
ALTER TABLE `prod_approval_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_products`
--
ALTER TABLE `sub_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKb4ced4lhi3ahvsro92yxm8pos` (`category_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK1ogxu7tlbuy6plloosc200fm9` (`task_category`);

--
-- Indexes for table `task_activities`
--
ALTER TABLE `task_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKquw966ft38jjot0vbgpilt9lp` (`prod_id`),
  ADD KEY `FKkgc6x6jdghxwivve0euo67sev` (`task_id`),
  ADD KEY `FKiq22qmsokwpgy1k28yboct3u1` (`user_id`);

--
-- Indexes for table `task_categories`
--
ALTER TABLE `task_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_history`
--
ALTER TABLE `task_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK3t40j1330l5qs77csrmrp5ryl` (`created_by`),
  ADD KEY `FKjqraeud129avhcva579fhioj3` (`task_id`);

--
-- Indexes for table `team_leader_approval`
--
ALTER TABLE `team_leader_approval`
  ADD PRIMARY KEY (`approval_id`),
  ADD KEY `FK7h8yvk9b348rm27y6mjnt873g` (`team_leader_id`),
  ADD KEY `FK61w38ua8d10v8lu2viggna0v5` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`users_id`,`roles_id`),
  ADD KEY `FKa62j07k5mhgifpp955h37ponj` (`roles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `activity_request`
--
ALTER TABLE `activity_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bussiness_categories`
--
ALTER TABLE `bussiness_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `common_task_activities`
--
ALTER TABLE `common_task_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `common_task_activity_log`
--
ALTER TABLE `common_task_activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `poduct_flows`
--
ALTER TABLE `poduct_flows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prod_approval_history`
--
ALTER TABLE `prod_approval_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub_products`
--
ALTER TABLE `sub_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `task_activities`
--
ALTER TABLE `task_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `task_categories`
--
ALTER TABLE `task_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `task_history`
--
ALTER TABLE `task_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team_leader_approval`
--
ALTER TABLE `team_leader_approval`
  MODIFY `approval_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `common_task_activities`
--
ALTER TABLE `common_task_activities`
  ADD CONSTRAINT `FK4lt8wty5un1ccs83bl5814jay` FOREIGN KEY (`prod_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `FKgkkmkwh0pef4u682r6d6n4h0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `FKfoohqaq3mlh3hdwmmff0j2cdc` FOREIGN KEY (`member`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK8fqxr9ld0id3mbjb950pfwyld` FOREIGN KEY (`flow`) REFERENCES `poduct_flows` (`id`),
  ADD CONSTRAINT `FKc5baoly7dojyhgfq9dii370pj` FOREIGN KEY (`prod_head`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FKpo2bt157jo1xssnvvim5be121` FOREIGN KEY (`category_id`) REFERENCES `project_categories` (`id`),
  ADD CONSTRAINT `FKrm687ijaxwl4cqsa4n5df5kaf` FOREIGN KEY (`tech_head`) REFERENCES `users` (`id`);

--
-- Constraints for table `sub_products`
--
ALTER TABLE `sub_products`
  ADD CONSTRAINT `FKb4ced4lhi3ahvsro92yxm8pos` FOREIGN KEY (`category_id`) REFERENCES `bussiness_categories` (`id`),
  ADD CONSTRAINT `FKdubqfr46l37cv433bkycc7xlg` FOREIGN KEY (`category_id`) REFERENCES `project_categories` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `FK1ogxu7tlbuy6plloosc200fm9` FOREIGN KEY (`task_category`) REFERENCES `task_categories` (`id`);

--
-- Constraints for table `task_activities`
--
ALTER TABLE `task_activities`
  ADD CONSTRAINT `FKiq22qmsokwpgy1k28yboct3u1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FKkgc6x6jdghxwivve0euo67sev` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`),
  ADD CONSTRAINT `FKquw966ft38jjot0vbgpilt9lp` FOREIGN KEY (`prod_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `task_history`
--
ALTER TABLE `task_history`
  ADD CONSTRAINT `FK3t40j1330l5qs77csrmrp5ryl` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FKjqraeud129avhcva579fhioj3` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`);

--
-- Constraints for table `team_leader_approval`
--
ALTER TABLE `team_leader_approval`
  ADD CONSTRAINT `FK61w38ua8d10v8lu2viggna0v5` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK7h8yvk9b348rm27y6mjnt873g` FOREIGN KEY (`team_leader_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `FKa62j07k5mhgifpp955h37ponj` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `FKml90kef4w2jy7oxyqv742tsfc` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

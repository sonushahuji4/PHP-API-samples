-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 02, 2018 at 11:27 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

DROP TABLE IF EXISTS `classroom`;
CREATE TABLE IF NOT EXISTS `classroom` (
  `class_id` int(12) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(255) NOT NULL,
  `class_capacity` varchar(255) NOT NULL,
  `book_status` varchar(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pdated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`class_id`),
  UNIQUE KEY `class_name` (`class_name`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`class_id`, `class_name`, `class_capacity`, `book_status`, `created_at`, `pdated_at`) VALUES
(1, 'F21', '35', '0', '2018-10-02 08:36:01', NULL),
(2, 'F22', '35', '0', '2018-10-02 08:36:11', NULL),
(3, 'F23', '35', '0', '2018-10-02 08:36:44', NULL),
(4, 'F24', '35', '0', '2018-10-02 08:36:44', NULL),
(5, 'A12', '20', '0', '2018-10-02 10:03:41', NULL),
(14, 'A123', '20', '0', '2018-10-02 10:08:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `examdate`
--

DROP TABLE IF EXISTS `examdate`;
CREATE TABLE IF NOT EXISTS `examdate` (
  `date_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_date` date NOT NULL,
  `subject` varchar(255) NOT NULL,
  `time_start` timestamp NOT NULL,
  `time_ends` timestamp NOT NULL,
  `class_id` int(12) DEFAULT NULL,
  `teacher_id` int(12) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`date_id`),
  KEY `FK_ClassExamDate` (`class_id`),
  KEY `FK_TeacherExamDate` (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examdate`
--

INSERT INTO `examdate` (`date_id`, `exam_date`, `subject`, `time_start`, `time_ends`, `class_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, '2018-10-04', 'DS', '2018-10-04 03:30:00', '2018-10-02 05:30:00', 2, 1, '2018-10-02 09:08:31', NULL),
(2, '2018-10-04', 'DL', '2018-10-02 02:30:00', '2018-10-02 06:30:00', 2, 2, '2018-10-02 09:21:27', NULL),
(3, '2018-10-04', 'ED', '2018-10-04 03:30:00', '2018-10-04 05:30:00', 1, 1, '2018-10-02 10:43:18', NULL),
(4, '2018-10-04', 'ED', '2018-10-04 03:30:00', '2018-10-04 05:30:00', NULL, NULL, '2018-10-02 10:43:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supevisor`
--

DROP TABLE IF EXISTS `supevisor`;
CREATE TABLE IF NOT EXISTS `supevisor` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `pos` varchar(255) NOT NULL,
  `assign_status` varchar(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supevisor`
--

INSERT INTO `supevisor` (`id`, `name`, `dept`, `pos`, `assign_status`, `created_at`, `updated_at`) VALUES
(1, 'shubham', 'IT', 'HOD', '0', '2018-10-02 07:44:22', NULL),
(2, 'mukund', 'IT', 'HOD', '0', '2018-10-02 07:44:22', NULL),
(3, 'sachin', 'mech', 'HOD', '0', '2018-10-02 07:44:22', NULL),
(4, 'aruna', 'it', 'hod', '0', '2018-10-02 07:44:22', NULL),
(5, 'ghyan', 'com', 'HR', '0', '2018-10-02 10:12:36', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `examdate`
--
ALTER TABLE `examdate`
  ADD CONSTRAINT `FK_ClassExamDate` FOREIGN KEY (`class_id`) REFERENCES `classroom` (`class_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_TeacherExamDate` FOREIGN KEY (`teacher_id`) REFERENCES `supevisor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 11:22 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpdatabase2`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_profile`
--

CREATE TABLE `applicant_profile` (
  `user_account_id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant_profile`
--

INSERT INTO `applicant_profile` (`user_account_id`, `first_name`, `last_name`) VALUES
(2, 'Neil', 'Achacoso'),
(4, 'Neil', 'Achacoso'),
(5, 'neil2', 'ac'),
(6, 'sdfsdf', 'fgdfgd'),
(7, 'N', 'A'),
(8, 'emp', 'a'),
(9, 'a', 'a'),
(10, 'Neil', 'Achacoso'),
(11, 'Neil', 'achacoso');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_skill_set`
--

CREATE TABLE `applicant_skill_set` (
  `user_account_id` int(11) NOT NULL,
  `skill_set_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `user_account_id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_description` varchar(1500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `education_detail`
--

CREATE TABLE `education_detail` (
  `user_account_id` int(11) NOT NULL,
  `education_level` varchar(255) DEFAULT NULL,
  `degree_level` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `starting_date` date DEFAULT NULL,
  `completion_date` date DEFAULT NULL,
  `percentage` double DEFAULT NULL,
  `cgpa` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experience_detail`
--

CREATE TABLE `experience_detail` (
  `user_account_id` int(11) NOT NULL,
  `is_current_job` varchar(10) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `job_location_city` varchar(50) DEFAULT NULL,
  `job_location_district` varchar(50) DEFAULT NULL,
  `job_description` varchar(1500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `id` int(11) NOT NULL,
  `posted_by_id` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `job_description` varchar(500) DEFAULT NULL,
  `job_location_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skill_set`
--

CREATE TABLE `skill_set` (
  `id` int(11) NOT NULL,
  `skill_set_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_account_id` int(11) NOT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `is_active` char(1) DEFAULT NULL,
  `contact_number` int(12) DEFAULT NULL,
  `sms_notification_active` char(1) DEFAULT NULL,
  `email_notification_active` char(1) DEFAULT NULL,
  `user_image` blob,
  `registration_date` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) NOT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_account_id`, `user_type_id`, `username`, `pass`, `date_of_birth`, `gender`, `is_active`, `contact_number`, `sms_notification_active`, `email_notification_active`, `user_image`, `registration_date`, `phone`, `mobile`, `website`) VALUES
(1, 1, 'ac1@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(2, 2, 'ac3@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(3, 3, 'ac5@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(4, 4, 'achacoso.neil@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(5, 5, 'ac423@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(6, 6, 'b@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(7, 7, 'v@g.c', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(8, 8, 'd@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(9, 9, 'a@a.c', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(10, 10, 'achacoso.neil1@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(11, 11, 'achacoso.neil2@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `user_account_id` int(11) NOT NULL,
  `last_login_date` date DEFAULT NULL,
  `last_job_apply_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_account_id`, `last_login_date`, `last_job_apply_date`) VALUES
(1, '2018-10-21', NULL),
(2, '2018-10-21', NULL),
(3, '2018-10-21', NULL),
(4, '2018-10-21', NULL),
(5, '2018-10-21', NULL),
(6, '2018-10-21', NULL),
(7, '2018-10-21', NULL),
(8, '2018-10-21', NULL),
(9, '2018-10-21', NULL),
(10, '2018-10-22', NULL),
(11, '2018-10-22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_responsibilities`
--

CREATE TABLE `user_responsibilities` (
  `user_account_id` int(11) NOT NULL,
  `responsibility_desc` varchar(1500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type_name`) VALUES
(1, 'Applicant'),
(2, 'Applicant'),
(3, 'Applicant'),
(4, 'Applicant'),
(5, 'Applicant'),
(6, 'Applicant'),
(7, 'Applicant'),
(8, 'Employer'),
(9, 'Applicant'),
(10, 'Employer'),
(11, 'Employer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant_profile`
--
ALTER TABLE `applicant_profile`
  ADD PRIMARY KEY (`user_account_id`);

--
-- Indexes for table `applicant_skill_set`
--
ALTER TABLE `applicant_skill_set`
  ADD PRIMARY KEY (`user_account_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`user_account_id`);

--
-- Indexes for table `education_detail`
--
ALTER TABLE `education_detail`
  ADD PRIMARY KEY (`user_account_id`);

--
-- Indexes for table `experience_detail`
--
ALTER TABLE `experience_detail`
  ADD PRIMARY KEY (`user_account_id`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posted_by_id` (`posted_by_id`);

--
-- Indexes for table `skill_set`
--
ALTER TABLE `skill_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_account_id`),
  ADD KEY `user_type_id` (`user_type_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_account_id`);

--
-- Indexes for table `user_responsibilities`
--
ALTER TABLE `user_responsibilities`
  ADD PRIMARY KEY (`user_account_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skill_set`
--
ALTER TABLE `skill_set`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant_profile`
--
ALTER TABLE `applicant_profile`
  ADD CONSTRAINT `applicant_profile_ibfk_1` FOREIGN KEY (`user_account_id`) REFERENCES `user_account` (`user_account_id`);

--
-- Constraints for table `applicant_skill_set`
--
ALTER TABLE `applicant_skill_set`
  ADD CONSTRAINT `applicant_skill_set_ibfk_1` FOREIGN KEY (`user_account_id`) REFERENCES `applicant_profile` (`user_account_id`);

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`user_account_id`) REFERENCES `user_account` (`user_account_id`);

--
-- Constraints for table `education_detail`
--
ALTER TABLE `education_detail`
  ADD CONSTRAINT `education_detail_ibfk_1` FOREIGN KEY (`user_account_id`) REFERENCES `applicant_profile` (`user_account_id`);

--
-- Constraints for table `experience_detail`
--
ALTER TABLE `experience_detail`
  ADD CONSTRAINT `experience_detail_ibfk_1` FOREIGN KEY (`user_account_id`) REFERENCES `applicant_profile` (`user_account_id`);

--
-- Constraints for table `job_post`
--
ALTER TABLE `job_post`
  ADD CONSTRAINT `job_post_ibfk_1` FOREIGN KEY (`posted_by_id`) REFERENCES `company` (`user_account_id`);

--
-- Constraints for table `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `user_account_ibfk_1` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`user_type_id`);

--
-- Constraints for table `user_log`
--
ALTER TABLE `user_log`
  ADD CONSTRAINT `user_log_ibfk_1` FOREIGN KEY (`user_account_id`) REFERENCES `user_account` (`user_account_id`);

--
-- Constraints for table `user_responsibilities`
--
ALTER TABLE `user_responsibilities`
  ADD CONSTRAINT `user_responsibilities_ibfk_1` FOREIGN KEY (`user_account_id`) REFERENCES `applicant_profile` (`user_account_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 07:20 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_right_job`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_description` varchar(1000) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `email`, `password`, `profile_description`, `address`) VALUES
(1, 'Zartaz Fashions', 'anik.raihan@hotmail.com', 'Admin@123', 'admin', 'Dhanmondi 11'),
(6, 'anik shop', 'raihan.apurba@northsouth.edu', 'Admin@123', 'admin', 'admin'),
(8, 'evaly2', 'nujhat2.nower@northsouth.edu', 'Admin@123', 'raihan.apurba@northsouth.edu', 'Dhanmondi 11');

-- --------------------------------------------------------

--
-- Table structure for table `job_application_status`
--

CREATE TABLE `job_application_status` (
  `id` int(11) NOT NULL,
  `status_desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `job_catagory` varchar(50) NOT NULL,
  `job_description` varchar(500) NOT NULL,
  `job_type` varchar(20) NOT NULL,
  `salary` int(11) NOT NULL,
  `position` varchar(20) NOT NULL,
  `vacancy` int(11) NOT NULL,
  `expectation` varchar(500) NOT NULL,
  `job_location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`id`, `company_id`, `job_catagory`, `job_description`, `job_type`, `salary`, `position`, `vacancy`, `expectation`, `job_location`) VALUES
(2, 6, 'clothing', 'This is a full-time position. We are looking for individuals that have the ability to think laterally and possess a sound understanding, independently working and reporting capacity for the fallowing area and HR manager will be independent, objective assurance and consulting activity designed to add value and improve an organization`s operations and to accomplish its objectives by bringing a systematic, disciplined approach to evaluate and improve the effectiveness of risk management, control, a', 'Full time', 500000, 'Manager - HR & Admin', 2, 'Lead, supervise & manage HR & Admin team and ensuring all required support as per company standards.\r\nEnsuring smooth & timely delivery of all arrays of employee services, viz. confirmation, promotion, separation, final settlement, leave & attendance management, SIM & Mobile handset management, transfer - posting, HR reports, Bank A/C, ID & visiting card etc.\r\nEnsuring timely salary disbursement and all types of fund and benefit management.', 'Dhaka'),
(3, 8, 'ecommerce', 'This is a full-time position. We are looking for individuals that have the ability to think laterally and possess a sound understanding, independently working and reporting capacity for the fallowing area and HR manager will be independent, objective assurance and consulting activity designed to add value and improve an organization`s operation.', 'Full time', 500000, 'Manager - HR & Admin', 2, 'Lead, supervise & manage HR & Admin team and ensuring all required support as per company standards.\r\nEnsuring smooth & timely delivery of all arrays of employee services, viz. confirmation, promotion, separation, final settlement, leave & attendance management, SIM & Mobile handset management, transfer - posting, HR reports, Bank A/C, ID & visiting card etc.\r\nEnsuring timely salary disbursement and all types of fund and benefit management.', 'Dhaka'),
(5, 8, 'ecommerce', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'Full time', 25000, 'Manager - HR & Admin', 2, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `job_post_action`
--

CREATE TABLE `job_post_action` (
  `id` int(11) NOT NULL,
  `action_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_post_activity`
--

CREATE TABLE `job_post_activity` (
  `id` int(11) NOT NULL,
  `apply_date` date NOT NULL,
  `job_post_id` int(11) NOT NULL,
  `job_application_status_id` int(11) NOT NULL,
  `user_account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_post_activity_log`
--

CREATE TABLE `job_post_activity_log` (
  `id` int(11) NOT NULL,
  `action_date` date NOT NULL,
  `user_account_id` int(11) NOT NULL,
  `job_post_activity_id` int(11) NOT NULL,
  `job_post_action_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post_reviews`
--

CREATE TABLE `post_reviews` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `post` varchar(50) NOT NULL,
  `ambience` varchar(500) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `user_account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seeker_profile`
--

CREATE TABLE `seeker_profile` (
  `user_account_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `curent_job` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `collage` varchar(50) NOT NULL,
  `uni_name` varchar(50) DEFAULT NULL,
  `ssc_gpa` int(11) NOT NULL,
  `hsc_gpa` int(11) NOT NULL,
  `uni_cgpa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` char(1) NOT NULL,
  `contact_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `contact_number`) VALUES
(2, 'Maria', 'Amreen', 'anik.raihan@hotmail.com', 'Admin@123', 'm', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_application_status`
--
ALTER TABLE `job_application_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_post_company` (`company_id`);

--
-- Indexes for table `job_post_action`
--
ALTER TABLE `job_post_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_post_activity`
--
ALTER TABLE `job_post_activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_post_activity_job_application_status` (`job_application_status_id`),
  ADD KEY `job_post_activity_job_post` (`job_post_id`),
  ADD KEY `job_post_activity_user_account` (`user_account_id`);

--
-- Indexes for table `job_post_activity_log`
--
ALTER TABLE `job_post_activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_post_activity_log_job_post_action` (`job_post_action_id`),
  ADD KEY `job_post_activity_log_job_post_activity` (`job_post_activity_id`);

--
-- Indexes for table `post_reviews`
--
ALTER TABLE `post_reviews`
  ADD PRIMARY KEY (`user_account_id`);

--
-- Indexes for table `seeker_profile`
--
ALTER TABLE `seeker_profile`
  ADD PRIMARY KEY (`user_account_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_application_status`
--
ALTER TABLE `job_application_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_post_action`
--
ALTER TABLE `job_post_action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_post_activity`
--
ALTER TABLE `job_post_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_post_activity_log`
--
ALTER TABLE `job_post_activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_post`
--
ALTER TABLE `job_post`
  ADD CONSTRAINT `job_post_company` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`);

--
-- Constraints for table `job_post_activity`
--
ALTER TABLE `job_post_activity`
  ADD CONSTRAINT `job_post_activity_job_application_status` FOREIGN KEY (`job_application_status_id`) REFERENCES `job_application_status` (`id`),
  ADD CONSTRAINT `job_post_activity_job_post` FOREIGN KEY (`job_post_id`) REFERENCES `job_post` (`id`),
  ADD CONSTRAINT `job_post_activity_user_account` FOREIGN KEY (`user_account_id`) REFERENCES `user_account` (`id`);

--
-- Constraints for table `job_post_activity_log`
--
ALTER TABLE `job_post_activity_log`
  ADD CONSTRAINT `job_post_activity_log_job_post_action` FOREIGN KEY (`job_post_action_id`) REFERENCES `job_post_action` (`id`),
  ADD CONSTRAINT `job_post_activity_log_job_post_activity` FOREIGN KEY (`job_post_activity_id`) REFERENCES `job_post_activity` (`id`);

--
-- Constraints for table `post_reviews`
--
ALTER TABLE `post_reviews`
  ADD CONSTRAINT `post_reviews_user_account` FOREIGN KEY (`user_account_id`) REFERENCES `user_account` (`id`);

--
-- Constraints for table `seeker_profile`
--
ALTER TABLE `seeker_profile`
  ADD CONSTRAINT `seeker_profile_user_register` FOREIGN KEY (`user_account_id`) REFERENCES `user_account` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 03:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-tech-project-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_registered_users`
--

CREATE TABLE `all_registered_users` (
  `Full_Name` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `type` varchar(15) NOT NULL,
  `approved` varchar(3) NOT NULL DEFAULT 'no',
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `full_address` varchar(200) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `registration_date` date NOT NULL,
  `balance` decimal(10,0) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_registered_users`
--

INSERT INTO `all_registered_users` (`Full_Name`, `username`, `password`, `gender`, `type`, `approved`, `email`, `phone_number`, `full_address`, `profile_pic`, `birthdate`, `registration_date`, `balance`) VALUES
('Joy', 'joy004', 'qwerty#1', 'male', 'planner', 'no', 'example@gmail.com', '01234567891', 'Bangladesh', '', '0000-00-00', '0000-00-00', '0'),
('Kawsar', 'kawsar', 'qwerty#1', 'male', 'planner', 'no', 'example@gmail.com', '01234567891', 'Bangladesh', '', '0000-00-00', '0000-00-00', '0'),
('Mahim', 'mahim', 'qwerty#1', 'male', 'user', 'no', 'example@gmail.com', '01234567891', 'Bangladesh', '', '0000-00-00', '0000-00-00', '0'),
('Moin', 'moin001', 'qwerty#1', 'male', 'user', 'no', 'example@gmail.com', '01234567891', 'Bangladesh', '', '0000-00-00', '0000-00-00', '0'),
('Rabbi', 'rabbi', 'qwerty#1', 'male', 'user', 'no', 'example@gmail.com', '01234567891', 'Bangladesh', '', '0000-00-00', '0000-00-00', '0'),
('test-admin', 's1', '1', 'Male', 'admin', '', 's@g.cyyjhghyujg', '3344', 'dhakadf d fdsf fdf fsdf sdf fsdfgfdg fgsdgs fsdfds dfsdf', 'profiles/images/s1-profile-pic.jpg', '2021-01-13', '0000-00-00', '0'),
('Sabuj', 'sabuj1', 'qwerty#1', 'male', 'planner', 'no', 'example@gmail.com', '01234567891', 'Bangladesh', '', '0000-00-00', '0000-00-00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `event_categories`
--

CREATE TABLE `event_categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_categories`
--

INSERT INTO `event_categories` (`id`, `cat_name`) VALUES
(1, 'Wedding'),
(2, 'Birthday'),
(3, 'Seminars'),
(4, 'Ceremonies'),
(5, 'Job Fairs'),
(6, 'Parties'),
(7, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `sender` varchar(10) NOT NULL,
  `receiver` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `sender`, `receiver`, `message`) VALUES
(1, 'joy004', 'kawsar', 'hi kawsar'),
(2, 'kawsar', 'joy004', 'hi joy. how are you?'),
(3, 'joy004', 'kawsar', 'I am fine. how are you? I am looking for a help'),
(4, 'kawsar', 'joy004', 'I am great. What kind of help?');

-- --------------------------------------------------------

--
-- Table structure for table `planner_services_list`
--

CREATE TABLE `planner_services_list` (
  `username` varchar(10) NOT NULL,
  `service_id` int(15) NOT NULL,
  `e_category` int(11) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `status(hide/show)` varchar(10) NOT NULL,
  `overall_rating` float(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `planner_services_list`
--

INSERT INTO `planner_services_list` (`username`, `service_id`, `e_category`, `service_name`, `price`, `status(hide/show)`, `overall_rating`) VALUES
('joy004', 1, 2, 'Birthday Event', 13000, 'show', 0.00),
('kawsar', 2, 1, 'Wedding Event', 23000, 'show', 0.00),
('joy004', 3, 4, 'Sports Prize Giving Ceremonies', 23000, 'show', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `purchased_services_details`
--

CREATE TABLE `purchased_services_details` (
  `purchased_id` int(11) NOT NULL,
  `client_username` varchar(10) NOT NULL,
  `planner_username` varchar(15) NOT NULL,
  `service_id` int(11) NOT NULL,
  `status(paid/unpaid)` varchar(10) NOT NULL,
  `service_price` float NOT NULL,
  `planner_approve` varchar(3) NOT NULL DEFAULT 'no',
  `service_rating` float(3,2) NOT NULL,
  `planner_comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchased_services_details`
--

INSERT INTO `purchased_services_details` (`purchased_id`, `client_username`, `planner_username`, `service_id`, `status(paid/unpaid)`, `service_price`, `planner_approve`, `service_rating`, `planner_comment`) VALUES
(1, 'mahim', 'joy004', 3, 'unpaid', 20000, 'no', 4.50, '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `type` varchar(15) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_registered_users`
--
ALTER TABLE `all_registered_users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `event_categories`
--
ALTER TABLE `event_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `sender` (`sender`),
  ADD KEY `receiver` (`receiver`);

--
-- Indexes for table `planner_services_list`
--
ALTER TABLE `planner_services_list`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `username` (`username`),
  ADD KEY `e_category` (`e_category`);

--
-- Indexes for table `purchased_services_details`
--
ALTER TABLE `purchased_services_details`
  ADD PRIMARY KEY (`purchased_id`),
  ADD KEY `client_username` (`client_username`),
  ADD KEY `planner_username` (`planner_username`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_categories`
--
ALTER TABLE `event_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `planner_services_list`
--
ALTER TABLE `planner_services_list`
  MODIFY `service_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchased_services_details`
--
ALTER TABLE `purchased_services_details`
  MODIFY `purchased_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender`) REFERENCES `all_registered_users` (`username`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver`) REFERENCES `all_registered_users` (`username`);

--
-- Constraints for table `planner_services_list`
--
ALTER TABLE `planner_services_list`
  ADD CONSTRAINT `planner_services_list_ibfk_1` FOREIGN KEY (`username`) REFERENCES `all_registered_users` (`username`),
  ADD CONSTRAINT `planner_services_list_ibfk_2` FOREIGN KEY (`e_category`) REFERENCES `event_categories` (`id`);

--
-- Constraints for table `purchased_services_details`
--
ALTER TABLE `purchased_services_details`
  ADD CONSTRAINT `purchased_services_details_ibfk_1` FOREIGN KEY (`client_username`) REFERENCES `all_registered_users` (`username`),
  ADD CONSTRAINT `purchased_services_details_ibfk_2` FOREIGN KEY (`planner_username`) REFERENCES `all_registered_users` (`username`),
  ADD CONSTRAINT `purchased_services_details_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `planner_services_list` (`service_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`username`) REFERENCES `all_registered_users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

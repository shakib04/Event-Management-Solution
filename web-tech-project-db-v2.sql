-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 10:24 AM
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
  `password` varchar(32) NOT NULL,
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
('Ananta', 'ananta', '497bcbb6b7717bc021cf7cf5e9f725de', 'male', 'user', 'no', 'ananta@gmail.com', '01346678400', 'dhaka', '', '0000-00-00', '2020-12-21', '0'),
('Ashraf', 'ashraf', '497bcbb6b7717bc021cf7cf5e9f725de', 'male', 'user', 'no', 'ashraf@gmail.com', '01346678400', 'dhaka', '', '0000-00-00', '2020-12-14', '0'),
('Dipu', 'dipu02', '497bcbb6b7717bc021cf7cf5e9f725de', 'Male', 'user', 'yes', 'ss@g.com', '77777777777', 'hh hh gg ff fd yyy ff', '', '0000-00-00', '2020-12-30', '0'),
('Joy', 'joy004', 'c4ca4238a0b923820dcc509a6f75849b', 'Male', 'planner', 'yes', 'example@gmail.com', '01234567892', 'Bangladesh, ctg', '', '0000-00-00', '2020-12-27', '0'),
('Kawsar', 'kawsar', '497bcbb6b7717bc021cf7cf5e9f725de', 'male', 'planner', 'no', 'example@gmail.com', '01234567891', 'Bangladesh', '', '0000-00-00', '2020-12-21', '0'),
('Mahim', 'mahim', '497bcbb6b7717bc021cf7cf5e9f725de', 'Male', 'user', 'no', 'example@gmail.com', '01234567891', 'Bangladesh', '', '0000-00-00', '2020-12-08', '0'),
('dfsfsdfsdf#', 'mahim01', 'c3224fbbda30188c53d8023cf820d226', 'male', 'user', 'no', 'dfsfsdfsdf#@gm.c', '09876543212', '543534543', '', '0000-00-00', '2020-12-15', '0'),
('Mahmud', 'mahmud', '497bcbb6b7717bc021cf7cf5e9f725de', 'male', 'planner', 'no', 'mahmud@gmail.com', '01346678400', 'dhaka', '', '0000-00-00', '2020-12-16', '0'),
('Maria', 'maria', '4f813e74ed4487faa4e4210dc2a92618', 'female', 'planner', 'no', 'sss@gm.co', '12345678912', 'dd sdsd fsdfs fdsfs', '', '0000-00-00', '2021-01-03', '0'),
('Moin', 'moin001', '497bcbb6b7717bc021cf7cf5e9f725de', 'male', 'user', 'yes', 'example@gmail.com', '01234567891', 'Bangladesh', '', '0000-00-00', '2020-12-13', '0'),
('Mustafiz', 'mustafiz03', '81dc9bdb52d04dc20036dbd8313ed055', 'male', 'user', 'no', 's@g.c', '454535', 'khulna', '', '1990-06-17', '2020-12-23', '0'),
('', 'r1', 'c4ca4238a0b923820dcc509a6f75849b', '', 'planner', 'yes', '', '', '', '', '0000-00-00', '0000-00-00', '0'),
('Rabbiul', 'rabbi', 'c4ca4238a0b923820dcc509a6f75849b', 'male', 'user', 'yes', 'example@gmail.com', '01234567891', 'Bangladesh', '', '0000-00-00', '2020-12-21', '0'),
('Shakib', 's1', 'c4ca4238a0b923820dcc509a6f75849b', 'male', 'admin', '', 'example@gmail.com', '01234567891', 'Bangladesh', 'profiles/images/s1-profile-pic.png', '2021-01-13', '2020-12-22', '0'),
('Sabuj', 'sabuj1', '497bcbb6b7717bc021cf7cf5e9f725de', 'male', 'planner', 'no', 'example@gmail.com', '01234567891', 'Bangladesh', '', '0000-00-00', '2020-12-27', '0'),
('tuhin', 'tuhin', '497bcbb6b7717bc021cf7cf5e9f725de', 'male', 'user', 'yes', 'example@gmail.com', '01346678400', 'sarail bbaria', '', '0000-00-00', '2020-12-27', '0');

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
  `message` varchar(200) NOT NULL,
  `m_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `sender`, `receiver`, `message`, `m_time`) VALUES
(1, 'joy004', 'kawsar', 'hi kawsar', '2021-01-16 18:57:43'),
(2, 'kawsar', 'joy004', 'hi joy. how are you?', '2021-01-16 18:57:43'),
(3, 'joy004', 'kawsar', 'I am fine. how are you? I am looking for a help', '2021-01-16 18:57:43'),
(4, 'kawsar', 'joy004', 'I am great. What kind of help?', '2021-01-16 18:57:43'),
(5, 'ananta', 'r1', 'hi r1!!', '2021-01-16 18:52:43'),
(6, 'ananta', 'r1', 'r1 ki koro', '2021-01-16 18:57:43'),
(7, 'ashraf', 'r1', 'kire r1', '2021-01-16 19:19:29'),
(8, 'joy004', 'r1', 'hello mr. r1', '2021-01-16 19:21:23'),
(9, 'r1', 'ananta', 'hello, ananta! ami php likhi. tumi??', '2021-01-16 19:32:25');

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
('joy004', 3, 4, 'Sports Prize Giving Ceremonies', 23000, 'show', 0.00),
('r1', 4, 4, 'birthday event', 23000, 'show', 0.00),
('r1', 5, 5, 'JOB Fair 2021 ', 23000, 'show', 0.00),
('r1', 6, 6, 'Brunch Party', 13000, 'show', 0.00),
('r1', 7, 1, 'Slate & Crystal Events', 100, 'show', 0.00),
('r1', 8, 3, 'ewe', 3437, 'show', 0.00);

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
  `purchased_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `planner_comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchased_services_details`
--

INSERT INTO `purchased_services_details` (`purchased_id`, `client_username`, `planner_username`, `service_id`, `status(paid/unpaid)`, `service_price`, `planner_approve`, `service_rating`, `purchased_date`, `planner_comment`) VALUES
(1, 'mahim', 'joy004', 3, 'unpaid', 20000, 'no', 4.50, '2020-12-27 18:00:00', ''),
(2, 'ananta', 'joy004', 1, 'paid', 30000, 'yes', 4.50, '2020-12-21 18:00:00', ''),
(3, 'moin001', 'kawsar', 2, 'paid', 20000, 'yes', 4.50, '2020-12-29 18:00:00', ''),
(4, 'rabbi', 'joy004', 1, 'unpaid', 13000, 'no', 0.00, '2021-01-17 13:48:33', 'hh'),
(5, 'rabbi', 'r1', 7, 'unpaid', 100, 'no', 0.00, '0000-00-00 00:00:00', 'ff'),
(6, 'rabbi', 'joy004', 3, 'unpaid', 23000, 'no', 0.00, '2021-01-17 13:49:30', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `type` varchar(15) NOT NULL,
  `reference` varchar(32) NOT NULL,
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
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `planner_services_list`
--
ALTER TABLE `planner_services_list`
  MODIFY `service_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `purchased_services_details`
--
ALTER TABLE `purchased_services_details`
  MODIFY `purchased_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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

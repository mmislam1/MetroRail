-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 02:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metrorail`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `_password` varchar(50) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `permission` int(11) NOT NULL,
  `designation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_address`, `phone_number`, `email`, `_password`, `gender`, `age`, `permission`, `designation`) VALUES
(1, 'admin', 'Dhaka', '017709109101', 'admin@gmail.com', 'admin@123', 'male', 22, 1, 'student'),
(10, 'Sochaha', 'Dhaka', '1788002833', 'sochacha@gmail.com', '123', '', 22, 0, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `complaint_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_address` varchar(80) NOT NULL,
  `phone_number` int(13) NOT NULL,
  `complaint_message` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`complaint_id`, `user_name`, `user_address`, `phone_number`, `complaint_message`, `email`, `age`, `status`, `time`) VALUES
(9, 'Nur', 'Dhaka', 1670000001, 'I have faced miss behave from Atikur Rahman (ac officer) on 10.11.2020', 'nur@gmail.com', 22, 1, '2021-03-23 19:36:25'),
(10, 'Dola', 'rajshahi', 1759494688, 'I need help.', 'dola@gmail.com', 24, 1, '2021-04-09 10:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `fair`
--

CREATE TABLE `fair` (
  `fair_id` int(11) NOT NULL,
  `fair_unit` float NOT NULL,
  `amount_per_unit` float NOT NULL,
  `minimum_charge` float NOT NULL,
  `minimum_distance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fair`
--

INSERT INTO `fair` (`fair_id`, `fair_unit`, `amount_per_unit`, `minimum_charge`, `minimum_distance`) VALUES
(1, 6, 7, 8, 9);

-- --------------------------------------------------------

--
-- Table structure for table `metrocard`
--

CREATE TABLE `metrocard` (
  `card_number` varchar(30) NOT NULL,
  `card_status` tinyint(1) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metrocard`
--

INSERT INTO `metrocard` (`card_number`, `card_status`, `user_name`, `user_address`, `email`, `password`, `age`, `gender`, `phone_number`, `balance`) VALUES
('303', 1, 'Dola', 'Rajshahi', 'addylin.dola@gmail.com', '123', 24, '', '1759494686', 0),
('11', 1, 'Dola', 'Rajshahi', 'dola@gmail.com', '1234', 24, '', '1759494688', 700),
('111', 1, 'Natasha', 'Rajshahi', 'natasha@gmail.com', '123456789', 23, '', '1759494680', 900),
('231', 1, 'Nur', 'Dhaka', 'nur@gmail.com', '123', 22, '', '1670000001', 500),
('1832281341', 0, 'sabbir', 'rajshahi', 'sabbir@gmail.com', '990', 25, '', '1759494681', 0),
('2027548898', 0, 'shanto', 'Dhaka', 'santo@gmail.com', '1230', 22, '', '1759494680', 0),
('1', 1, 'soccho', 'Dhaka', 'soccho@gmail.com', '009', 22, '', '1759894606', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recharge`
--

CREATE TABLE `recharge` (
  `recharge_id` int(11) NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `recharge_status` int(11) NOT NULL,
  `payment_details` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recharge`
--

INSERT INTO `recharge` (`recharge_id`, `card_number`, `amount`, `date`, `recharge_status`, `payment_details`, `email`) VALUES
(25, '231', 0, '2021-04-02 17:34:21', 0, 'Rocket', 'nur@gmail.com'),
(26, '11', 500, '2021-04-09 10:09:38', 0, 'Rocket', 'dola@gmail.com'),
(27, '11', 200, '2021-04-09 10:09:56', 0, 'Rocket', 'dola@gmail.com'),
(28, '111', 200, '2021-04-09 12:46:57', 0, 'Rocket', 'natasha@gmail.com'),
(29, '111', 700, '2021-04-09 12:47:07', 0, 'Rocket', 'natasha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `reply_id` int(11) NOT NULL,
  `customer_id` varchar(30) NOT NULL,
  `reply_message` text NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`reply_id`, `customer_id`, `reply_message`, `admin_id`) VALUES
(11, '231', 'I will take the respective action as soon as possible. Sorry for the inconvenience.', 1),
(12, '11', 'please share your complaint with us.', 1),
(13, '11', 'share your problem as soon as possible.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `routedetails`
--

CREATE TABLE `routedetails` (
  `route_id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `station_order_number` int(11) NOT NULL,
  `length_from_start` int(11) NOT NULL,
  `route_details_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routedetails`
--

INSERT INTO `routedetails` (`route_id`, `station_id`, `station_order_number`, `length_from_start`, `route_details_id`) VALUES
(11, 13, 1, 30, 20),
(11, 14, 2, 40, 21),
(11, 15, 3, 46, 22),
(12, 16, 1, 51, 23),
(12, 17, 2, 59, 24),
(12, 18, 3, 67, 25);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `route_id` int(11) NOT NULL,
  `route_name` varchar(30) NOT NULL,
  `total_stations` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`route_id`, `route_name`, `total_stations`) VALUES
(11, 'UNDERGROUND AIRPORT ROUTE', 3),
(12, 'ELEVATED PURBACHAL ROUTE', 3);

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `stations_id` int(11) NOT NULL,
  `station_name` varchar(30) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`stations_id`, `station_name`, `latitude`, `longitude`) VALUES
(13, 'kamlapur', 30.06, 30.2),
(14, 'Rajarbagh', 40.44, 40.45),
(15, 'Malibagh', 45.09, 46.09),
(16, 'Bashundhara', 50.09, 50.55),
(17, 'Mastul', 55.09, 59.1),
(18, 'Purbachal West', 60.09, 66.05);

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `train-id` int(11) NOT NULL,
  `train_name` varchar(30) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`train-id`, `train_name`, `capacity`) VALUES
(12, 'MRT1', 400),
(13, 'MRT2', 450);

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `trip_code` int(11) NOT NULL,
  `train_id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`trip_code`, `train_id`, `route_id`) VALUES
(1, 12, 11),
(2, 13, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tripdetails`
--

CREATE TABLE `tripdetails` (
  `trip_details_id` int(11) NOT NULL,
  `trip_number` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `arrival_time` time NOT NULL,
  `departure_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tripdetails`
--

INSERT INTO `tripdetails` (`trip_details_id`, `trip_number`, `station_id`, `arrival_time`, `departure_time`) VALUES
(7, 1, 13, '10:00:00', '10:30:00'),
(8, 1, 14, '10:30:02', '11:30:06'),
(9, 1, 15, '11:35:07', '12:59:00'),
(10, 2, 16, '11:30:00', '12:30:00'),
(11, 2, 17, '12:40:00', '13:50:00'),
(12, 2, 18, '14:50:00', '16:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `fair`
--
ALTER TABLE `fair`
  ADD PRIMARY KEY (`fair_id`);

--
-- Indexes for table `metrocard`
--
ALTER TABLE `metrocard`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `card_number` (`card_number`),
  ADD UNIQUE KEY `card_number_2` (`card_number`),
  ADD UNIQUE KEY `card_number_3` (`card_number`),
  ADD UNIQUE KEY `card_number_4` (`card_number`);

--
-- Indexes for table `recharge`
--
ALTER TABLE `recharge`
  ADD PRIMARY KEY (`recharge_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`reply_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `routedetails`
--
ALTER TABLE `routedetails`
  ADD PRIMARY KEY (`route_details_id`),
  ADD KEY `route_id` (`route_id`),
  ADD KEY `station_id` (`station_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`stations_id`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`train-id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`trip_code`),
  ADD KEY `train_id` (`train_id`),
  ADD KEY `route_id` (`route_id`);

--
-- Indexes for table `tripdetails`
--
ALTER TABLE `tripdetails`
  ADD PRIMARY KEY (`trip_details_id`),
  ADD KEY `station_id` (`station_id`),
  ADD KEY `tripdetails_ibfk_2` (`trip_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fair`
--
ALTER TABLE `fair`
  MODIFY `fair_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recharge`
--
ALTER TABLE `recharge`
  MODIFY `recharge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `routedetails`
--
ALTER TABLE `routedetails`
  MODIFY `route_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `stations_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `trains`
--
ALTER TABLE `trains`
  MODIFY `train-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tripdetails`
--
ALTER TABLE `tripdetails`
  MODIFY `trip_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`email`) REFERENCES `metrocard` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recharge`
--
ALTER TABLE `recharge`
  ADD CONSTRAINT `recharge_ibfk_1` FOREIGN KEY (`email`) REFERENCES `metrocard` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reply_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `metrocard` (`card_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `routedetails`
--
ALTER TABLE `routedetails`
  ADD CONSTRAINT `routedetails_ibfk_1` FOREIGN KEY (`route_id`) REFERENCES `routes` (`route_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `routedetails_ibfk_2` FOREIGN KEY (`station_id`) REFERENCES `stations` (`stations_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trip`
--
ALTER TABLE `trip`
  ADD CONSTRAINT `trip_ibfk_1` FOREIGN KEY (`train_id`) REFERENCES `trains` (`train-id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trip_ibfk_2` FOREIGN KEY (`route_id`) REFERENCES `routes` (`route_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tripdetails`
--
ALTER TABLE `tripdetails`
  ADD CONSTRAINT `tripdetails_ibfk_1` FOREIGN KEY (`station_id`) REFERENCES `stations` (`stations_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tripdetails_ibfk_2` FOREIGN KEY (`trip_number`) REFERENCES `trip` (`trip_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 09:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `emp_id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `role` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `sex` text NOT NULL,
  `adress` text NOT NULL,
  `phone` int(15) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `approved_item`
--

CREATE TABLE `approved_item` (
  `req_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `cus_name` text NOT NULL,
  `itemname` text NOT NULL,
  `quantity` int(23) NOT NULL,
  `request_date` date NOT NULL,
  `college_dean` text NOT NULL,
  `manager` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approved_item`
--

INSERT INTO `approved_item` (`req_id`, `cus_id`, `cus_name`, `itemname`, `quantity`, `request_date`, `college_dean`, `manager`) VALUES
(3, 1764, 'tesfa', 'mongo', 3, '2022-07-11', 'Accept', 'reject'),
(3, 1764, 'tesfa', 'mongo', 3, '2022-07-11', 'Reject', 'reject'),
(0, 0, '', '', 0, '0000-00-00', '', 'reject'),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Accept', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Reject', ''),
(3, 1764, 'tesfa', 'mongo', 3, '2022-07-11', 'Accept', '');

-- --------------------------------------------------------

--
-- Table structure for table `borrowitem`
--

CREATE TABLE `borrowitem` (
  `borrow_id` int(11) NOT NULL,
  `cus_id` int(21) NOT NULL,
  `cus_name` text NOT NULL,
  `itemid` int(18) NOT NULL,
  `itemname` text NOT NULL,
  `model` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(23,0) NOT NULL,
  `date` date NOT NULL,
  `college` text NOT NULL,
  `returned` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowitem`
--

INSERT INTO `borrowitem` (`borrow_id`, `cus_id`, `cus_name`, `itemid`, `itemname`, `model`, `quantity`, `price`, `date`, `college`, `returned`) VALUES
(2, 999, 'ye', 0, 'mongo', '3', 0, '0', '2022-07-10', '', ''),
(3, 88, 'tesfa', 45, 'labtop', 'hp', 0, '5', '2022-07-08', 'Law', ''),
(4, 88, 'tesfa', 45, 'labtop', 'hp', 0, '5', '2022-07-08', 'Law', ''),
(6, 88, 'tesfa', 17, 'labtop', 'hp', 5, '34', '2022-07-08', 'Enginering', ''),
(7, 88, 'tesfa', 17, 'labtop', 'hp', 5, '34', '2022-07-08', 'Enginering', '');

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE `coment` (
  `coment` text NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemid` int(22) NOT NULL,
  `itemname` text NOT NULL,
  `model` varchar(22) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(23,0) NOT NULL,
  `register_date` date NOT NULL,
  `college_name` text NOT NULL,
  `shelf` int(11) NOT NULL,
  `free` int(11) NOT NULL,
  `onuse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemid`, `itemname`, `model`, `quantity`, `price`, `register_date`, `college_name`, `shelf`, `free`, `onuse`) VALUES
(16, 'labtop', 'hp', 0, '34', '2022-07-08', 'computional', 2, 0, 0),
(17, 'labtop', 'hp', 6, '34', '2022-07-08', 'Enginering', 2, 1, 5),
(18, 'labtop', 'hp', 9, '34', '2022-07-08', 'FB', 6, 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `request_item`
--

CREATE TABLE `request_item` (
  `req_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `cus_name` text NOT NULL,
  `itemname` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `approve` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_item`
--

INSERT INTO `request_item` (`req_id`, `cus_id`, `cus_name`, `itemname`, `quantity`, `date`, `approve`) VALUES
(4, 0, 'tyry', 'htrfr', 0, '2022-07-26', ''),
(5, 0, '', 'labtop', 3, '2022-07-06', '');

-- --------------------------------------------------------

--
-- Table structure for table `return_item`
--

CREATE TABLE `return_item` (
  `borrow_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `cus_name` text NOT NULL,
  `itemid` int(11) NOT NULL,
  `itemname` text NOT NULL,
  `price` decimal(23,0) NOT NULL,
  `returndate` date NOT NULL,
  `college` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_item`
--

INSERT INTO `return_item` (`borrow_id`, `cus_id`, `cus_name`, `itemid`, `itemname`, `price`, `returndate`, `college`) VALUES
(0, 1764, 'tesfa', 5, 'mongo', '0', '2022-07-14', 'computing'),
(0, 1764, 'tesfa', 5, 'mongo', '234', '2022-07-14', 'computing'),
(0, 1764, 'tesfa', 5, 'mongo', '234', '2022-07-14', 'computing'),
(3333, 1764, 'tesfa', 5, 'mongo', '234', '2022-07-14', 'computing'),
(3333, 1764, 'tesfa', 7, 'mongo', '234', '2022-07-14', 'computing'),
(3333, 999, 'tesfa', 3, 'mongo', '234', '2022-07-14', 'computing');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `req_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `s_name` text NOT NULL,
  `itemname` text NOT NULL,
  `quantity` int(23) NOT NULL,
  `requestdate` date NOT NULL,
  `college` text NOT NULL,
  `reciver_id` int(11) NOT NULL,
  `reciver_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`req_id`, `s_id`, `s_name`, `itemname`, `quantity`, `requestdate`, `college`, `reciver_id`, `reciver_name`) VALUES
(1, 12, 'tesfa', 'labtop', 2, '2022-07-08', 'Enginering', 11, 'worku'),
(2, 12, 'tesfa', 'labtop', 2, '2022-07-08', 'Enginering', 11, 'worku');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(22) NOT NULL,
  `password` varchar(33) NOT NULL,
  `role` text NOT NULL,
  `emp_id` varchar(22) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `role`, `emp_id`, `status`) VALUES
('tesfa', '123', 'manager', '1', ''),
('tesfa', '1234', 'staff', '2', 'tesfa1'),
('tesfa', '123', 'keeper', '2', ''),
('yared', '1234', 'manager', '', ''),
('tesfa', '12345', 'dean', '3', 'act');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrowitem`
--
ALTER TABLE `borrowitem`
  ADD PRIMARY KEY (`borrow_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `request_item`
--
ALTER TABLE `request_item`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`req_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrowitem`
--
ALTER TABLE `borrowitem`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemid` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `request_item`
--
ALTER TABLE `request_item`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

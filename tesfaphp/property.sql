-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 02:32 AM
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
(3, 1764, 'tesfa', 'mongo', 3, '2022-07-11', 'Accept', ''),
(3, 1764, 'tesfa', 'mongo', 3, '2022-07-11', 'Reject', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Accept', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Reject', ''),
(2, 999, 'ye', 'mongo', 2, '2022-07-10', 'Accept', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Accept', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Reject', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Accept', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Accept', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Accept', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Accept', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Accept', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Accept', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Accept', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Accept', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Accept', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Accept', ''),
(2, 999, 'ye', 'mongo', 3, '2022-07-10', 'Accept', ''),
(0, 0, '', '', 0, '0000-00-00', '', 'Reject');

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
  `price` decimal(23,0) NOT NULL,
  `date` date NOT NULL,
  `college` text NOT NULL,
  `returned` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowitem`
--

INSERT INTO `borrowitem` (`borrow_id`, `cus_id`, `cus_name`, `itemid`, `itemname`, `model`, `price`, `date`, `college`, `returned`) VALUES
(1, 1764, 'tesfa', 0, 'pc', '3', '2022', '0000-00-00', '', ''),
(1, 1764, 'tesfa', 0, 'pc', '3', '2022', '0000-00-00', '', ''),
(1, 1764, 'tesfa', 0, 'pc', '3', '0', '2022-07-10', '', ''),
(2, 999, 'ye', 0, 'mongo', '3', '0', '2022-07-10', '', ''),
(3, 1764, 'tesfa', 0, 'mongo', '3', '0', '2022-07-11', '', ''),
(3, 1764, 'tesfa', 0, 'mongo', '3', '0', '2022-07-11', '', ''),
(1, 1764, 'tesfa', 0, 'pc', '3', '0', '2022-07-10', '', ''),
(1, 1764, 'tesfa', 0, 'pc', '3', '0', '2022-07-10', '', ''),
(1, 1764, 'tesfa', 0, 'pc', '3', '0', '2022-07-10', '', ''),
(1, 1764, 'tesfa', 0, 'pc', '3', '0', '2022-07-10', '', ''),
(1, 1764, 'tesfa', 0, 'pc', '3', '0', '2022-07-10', '', ''),
(1, 1764, 'tesfa', 0, 'pc', '3', '0', '2022-07-10', '', ''),
(1, 1764, 'tesfa', 0, 'pc', '3', '0', '2022-07-10', '', ''),
(1, 1764, 'tesfa', 0, 'pc', '3', '0', '2022-07-10', '', ''),
(1, 1764, 'tesfa', 0, 'pc', '3', '0', '2022-07-10', '', ''),
(1, 1764, 'tesfa', 0, 'pc', '3', '0', '2022-07-10', '', ''),
(3, 0, '345', 0, 'hp', '0', '0', '0000-00-00', '', ''),
(1, 0, '345', 0, 'hp', '0', '0', '0000-00-00', '', ''),
(1, 1764, 'tesfa', 0, 'mongo', '', '2022', '0000-00-00', '', ''),
(1, 1764, 'tesfa', 0, 'mongo', '', '2022', '0000-00-00', '', ''),
(3, 1764, 'tesfa', 0, 'mongo', '', '2022', '0000-00-00', '', ''),
(3, 1764, 'tesfa', 0, 'mongo', '', '2022', '0000-00-00', '', ''),
(3, 900, 't23', 0, 'mongo', '', '2022', '0000-00-00', '', ''),
(3333, 999, 'tesfa', 3, 'mongo', 'toshba', '234', '2022-07-12', 'computional', ''),
(4444, 999, 'tesfa', 5, 'mongo', 'hp', '234', '2022-07-12', 'computional', ''),
(78, 90, 'oo', 5, '90', '00-', '0', '2022-07-28', 'computing', ''),
(3, 1764, 'tesfa', 5, 'mongo', 'toshba', '234', '2022-07-27', 'computing', ''),
(5555, 6666, 'tesfa', 5, 'mongo', '', '0', '2022-07-12', 'computing', ''),
(5555, 6666, 'tesfa', 5, 'mongo', '', '0', '2022-07-12', 'computing', ''),
(5500, 1764, 'tesfa', 5, 'pc', 'hp', '234', '2022-07-13', 'Enginering', ''),
(3333, 1764, 'tesfa', 5, 'table', 'hp', '234', '2022-07-13', 'FB', ''),
(3333, 1764, 'tesfa', 5, 'te', 'hp', '234', '2022-07-28', 'computing', ''),
(3333, 1764, 'tesfa', 7, 'table', 'hp', '234', '2022-07-13', 'FB', ''),
(3333, 1764, 'tesfa', 7, 'table', 'hp', '234', '2022-07-13', 'FB', ''),
(3333, 1764, 'tesfa', 5, 'table', 'hp', '234', '2022-07-14', 'Enginering', ''),
(0, 1764, 'tesfa', 5, 'labtop', 'hp', '234', '2022-07-28', 'computing', '');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemid` int(22) NOT NULL,
  `itemname` text NOT NULL,
  `serialNo` varchar(18) NOT NULL,
  `model` varchar(22) NOT NULL,
  `price` decimal(23,0) NOT NULL,
  `register_date` date NOT NULL,
  `college_name` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemid`, `itemname`, `serialNo`, `model`, `price`, `register_date`, `college_name`, `status`) VALUES
(1, 'mongo', '23656g', 'hp', '234', '2022-07-11', 'student', ''),
(3, 'labtop', '345', 'hp', '0', '0000-00-00', 'com', 'lost'),
(4, 'mongo', '23656g', 'hp', '234', '2022-07-12', 'Enginering', ''),
(5, 'bord', '344', 'we', '345', '0000-00-00', 'computing', 'free'),
(6, 'table', '684', '', '0', '0000-00-00', 'com', 'free'),
(7, 'table', '23656g', '00-', '234', '2022-07-13', 'FB', 'free'),
(8, 'bord', '23656g', '00-', '234', '2022-07-13', 'FB', 'free'),
(9, '', '', '', '0', '0000-00-00', '', 'free'),
(10, 'labtop', '23656g', 'hp', '234', '2022-07-15', 'FB', 'free'),
(11, 'labtop', '23656g', 'hp', '234', '2022-07-15', 'FB', 'free'),
(12, 'labtop', '23656g', 'hp', '234', '2022-07-15', 'FB', 'free'),
(13, '', '', '', '0', '0000-00-00', '', 'free'),
(14, 'labtop', '23656g', 'hp', '234', '2022-07-14', 'computing', 'free'),
(15, '', '', '', '0', '0000-00-00', '', 'free');

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
(2, 999, 'ye', 'mongo', 3, '2022-07-10', ''),
(3, 1764, 'tesfa', 'mongo', 3, '2022-07-11', ''),
(4, 0, 'tyry', 'htrfr', 0, '2022-07-26', '');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemid` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `request_item`
--
ALTER TABLE `request_item`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

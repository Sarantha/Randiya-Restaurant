-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 05:23 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `in_time` timestamp NULL DEFAULT NULL,
  `out_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `nic_no` varchar(12) NOT NULL,
  `age` int(11) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `designation` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `address`, `nic_no`, `age`, `phone_no`, `designation`) VALUES
(4, 'Saneth Mahadoowage', 'welimada', '961551099v', 23, '0713585633', 'Cheff'),
(5, 'Himath de Silva', 'Welimada', '958574688v', 24, '0718574966', 'Cheff'),
(7, 'Saseni Nimanda', 'welimada', '968574288v', 23, '0715847866', 'Cheff');

-- --------------------------------------------------------

--
-- Table structure for table `leave_table`
--

CREATE TABLE `leave_table` (
  `l_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `reason` varchar(100) NOT NULL,
  `days` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_table`
--

INSERT INTO `leave_table` (`l_id`, `emp_id`, `name`, `from_date`, `to_date`, `reason`, `days`, `status`) VALUES
(3, 4, 'Saneth Mahadowage', '2020-02-06', '2020-02-13', 'Attending a wedding', 7, 'approved'),
(4, 5, 'Himath de Silva', '2020-02-06', '2020-02-13', 'Attending a wedding', 7, 'approved'),
(5, 7, 'Saseni Nimanda', '2020-02-06', '2020-02-13', 'Sick', 7, 'reject');

-- --------------------------------------------------------

--
-- Table structure for table `paysheet`
--

CREATE TABLE `paysheet` (
  `p_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `load_deduction` int(11) NOT NULL,
  `festival_advance` int(11) NOT NULL,
  `over_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `s_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `bank_account` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `leave_days` int(11) NOT NULL,
  `ot_hours` int(11) NOT NULL,
  `ot_pay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`s_id`, `emp_id`, `bank_account`, `amount`, `leave_days`, `ot_hours`, `ot_pay`) VALUES
(1, 4, 123456789, 12250, 7, 10, 250);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `emp_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`emp_id`, `username`, `password`, `user_role`) VALUES
(1, 'admin', '1234', 'admin'),
(4, 'employee', '12345', 'employee'),
(5, 'himath', '123', 'employee'),
(7, 'saseni', '123456', 'employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `leave_table`
--
ALTER TABLE `leave_table`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `paysheet`
--
ALTER TABLE `paysheet`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `leave_table`
--
ALTER TABLE `leave_table`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paysheet`
--
ALTER TABLE `paysheet`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

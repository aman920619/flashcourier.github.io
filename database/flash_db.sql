-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 08:56 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flash_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s.no` int(11) NOT NULL,
  `stf_name` varchar(50) NOT NULL,
  `stf_email` varchar(50) NOT NULL,
  `stf_gender` varchar(6) NOT NULL,
  `stf_number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s.no`, `stf_name`, `stf_email`, `stf_gender`, `stf_number`) VALUES
(1, 'Faizal Khan', 'faizalkhan.tk@gmail.com', 'Male', 7869760778),
(2, 'Aman Singh', 'amansingh@gmail.com', 'Male', 9685770775),
(5, 'Piyush', 'piyush@gmail.com', 'on', 9685774777),
(6, 'hare', 'hare@gmail.com', 'Female', 7894651230);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adm_id` int(11) NOT NULL,
  `adm_username` varchar(30) NOT NULL,
  `adm_name` varchar(30) NOT NULL,
  `adm_password` varchar(20) NOT NULL,
  `adm_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adm_id`, `adm_username`, `adm_name`, `adm_password`, `adm_email`) VALUES
(1, 'ohchupapimunyanya', 'Faizal Khan', '12345Fk*', 'faizalkhan.tk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE `tbl_branch` (
  `branch_id` int(11) NOT NULL,
  `street` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip_code` bigint(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `ctr_id` int(11) NOT NULL,
  `ctr_name` varchar(50) NOT NULL,
  `ctr_username` varchar(50) NOT NULL,
  `ctr_gender` int(11) NOT NULL,
  `ctr_email` varchar(50) NOT NULL,
  `ctr_password` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`ctr_id`, `ctr_name`, `ctr_username`, `ctr_gender`, `ctr_email`, `ctr_password`, `date_created`) VALUES
(1, 'tohid khan', 'tohidkhan123', 0, 'tohidkhan@gmail.com', '12345', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cus_parcel`
--

CREATE TABLE `tbl_cus_parcel` (
  `cus_id` int(11) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `invoice_no` bigint(20) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `sender_add` varchar(50) NOT NULL,
  `sender_contact` varchar(50) NOT NULL,
  `rec_name` varchar(50) NOT NULL,
  `rec_add` varchar(50) NOT NULL,
  `rec_contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parcel`
--

CREATE TABLE `tbl_parcel` (
  `cus_id` int(11) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `invoice_no` bigint(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `height` int(10) NOT NULL,
  `weight` int(100) NOT NULL,
  `length` int(10) NOT NULL,
  `width` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`ctr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `ctr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

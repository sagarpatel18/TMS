-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 07:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(50) NOT NULL,
  `admin_lname` varchar(50) NOT NULL,
  `admin_number` varchar(20) NOT NULL,
  `admin_mail` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_reg_date` varchar(20) NOT NULL,
  `admin_reg_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `agency_id` int(11) NOT NULL,
  `agency_name` varchar(100) NOT NULL,
  `agency_number` varchar(20) NOT NULL,
  `agency_mail` varchar(100) NOT NULL,
  `agency_pass` varchar(100) NOT NULL,
  `agency_reg_date` varchar(20) NOT NULL,
  `agency_reg_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`agency_id`, `agency_name`, `agency_number`, `agency_mail`, `agency_pass`, `agency_reg_date`, `agency_reg_time`) VALUES
(1, 'dhrit', '1234567890', 'dhrit@gmail.com', '12345678', '2021-10-19', '05:11:51am');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_fname` varchar(50) NOT NULL,
  `cus_lname` varchar(50) NOT NULL,
  `cus_number` varchar(20) NOT NULL,
  `cus_mail` varchar(100) NOT NULL,
  `cus_pass` varchar(100) NOT NULL,
  `cus_reg_date` varchar(20) NOT NULL,
  `cus_reg_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_fname`, `cus_lname`, `cus_number`, `cus_mail`, `cus_pass`, `cus_reg_date`, `cus_reg_time`) VALUES
(1, 'khushi', 'prajapati', '1234567890', 'khushi@gmail.com', '12345678', '2021-10-19', '05:11:51am');

-- --------------------------------------------------------

--
-- Table structure for table `cus_package_req`
--

CREATE TABLE `cus_package_req` (
  `cus_pack_req_id` int(11) NOT NULL,
  `cus_id` varchar(10) NOT NULL,
  `pack_height` varchar(10) NOT NULL,
  `pack_width` varchar(10) NOT NULL,
  `pack_weight` varchar(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `pickup_address` varchar(100) NOT NULL,
  `delivery_address` varchar(100) NOT NULL,
  `f_address` varchar(100) NOT NULL,
  `mode_of_tras` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `price` varchar(100) DEFAULT NULL,
  `accept` varchar(10) DEFAULT NULL,
  `cdate` varchar(20) NOT NULL,
  `ctime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cus_package_req`
--

INSERT INTO `cus_package_req` (`cus_pack_req_id`, `cus_id`, `pack_height`, `pack_width`, `pack_weight`, `unit`, `pickup_address`, `delivery_address`, `f_address`, `mode_of_tras`, `status`, `price`, `accept`, `cdate`, `ctime`) VALUES
(2, '1', '100', '50', '50', 'kg', 'surat', 'ahmedabad', 'abcd', 'rail', 'Wating for Pickup', '100', 'yes', '2021-10-20', '04:43:07pm');

-- --------------------------------------------------------

--
-- Table structure for table `pickup_delivery`
--

CREATE TABLE `pickup_delivery` (
  `pck_dlv_id` int(11) NOT NULL,
  `cus_pack_req_id` varchar(10) NOT NULL,
  `where_rch` varchar(100) NOT NULL,
  `delivery_status` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `cus_package_req`
--
ALTER TABLE `cus_package_req`
  ADD PRIMARY KEY (`cus_pack_req_id`);

--
-- Indexes for table `pickup_delivery`
--
ALTER TABLE `pickup_delivery`
  ADD PRIMARY KEY (`pck_dlv_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cus_package_req`
--
ALTER TABLE `cus_package_req`
  MODIFY `cus_pack_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pickup_delivery`
--
ALTER TABLE `pickup_delivery`
  MODIFY `pck_dlv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

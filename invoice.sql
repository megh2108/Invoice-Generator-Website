-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 01:59 PM
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
-- Database: `invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `sr_no` int(5) NOT NULL,
  `ph_no` varchar(10) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `acc_no` varchar(15) NOT NULL,
  `IFSC` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`sr_no`, `ph_no`, `c_name`, `bank_name`, `acc_no`, `IFSC`) VALUES
(1, '9876543210', 'Tyre Channel Private Limited', ' HDFC BANK', '50200029022973', ' HDFC0000183');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(255) NOT NULL,
  `oc_name` varchar(255) NOT NULL,
  `GSTIN` varchar(255) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `bill_add` varchar(255) NOT NULL,
  `bstate` varchar(255) NOT NULL,
  `bcode` int(255) NOT NULL,
  `ship_add` varchar(255) NOT NULL,
  `sstate` varchar(255) NOT NULL,
  `scode` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `oc_name`, `GSTIN`, `Mobile`, `bill_add`, `bstate`, `bcode`, `ship_add`, `sstate`, `scode`) VALUES
(11, 'Tilak', '06ANWPB0816A5lk', '9876543210', 'Sanand', 'Assam', 388540, 'Sanand', 'Assam', 388540);

-- --------------------------------------------------------

--
-- Table structure for table `c_details`
--

CREATE TABLE `c_details` (
  `c_name` varchar(50) NOT NULL,
  `ph_no` varchar(10) NOT NULL,
  `add_line1` varchar(255) NOT NULL,
  `add_line2` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `GST_no` varchar(15) NOT NULL,
  `PAN_no` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_details`
--

INSERT INTO `c_details` (`c_name`, `ph_no`, `add_line1`, `add_line2`, `district`, `state`, `country`, `GST_no`, `PAN_no`, `username`, `password`, `code`) VALUES
('Tyre Channel Private Limited', '9876543210', '1st Floor,Bank of Maharastra Building,', ' Station Road,Anand-388001', 'Anand', 'Gujarat', 'India', '24AAGCT5461R1ZP', 'AAGCT5461R', 'TCPL0001', 'tcpl2003', 'TCPL0');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_name` varchar(50) NOT NULL,
  `HSN_Code` varchar(255) NOT NULL,
  `base_price` float NOT NULL,
  `GST` int(2) NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_name`, `HSN_Code`, `base_price`, `GST`, `total_price`) VALUES
('AC', '40040000', 50000, 18, 59000),
('Fan', '40040001', 5000, 10, 5500),
('Ipad', '40040006', 100000, 18, 118000),
('Laptop', '40040002', 45000, 18, 53100),
('Mobile', '40040003', 10000, 18, 11800),
('Tablet', '40040009', 50000, 5, 52500),
('TV', '40040004', 50000, 10, 55000);

-- --------------------------------------------------------

--
-- Table structure for table `order_item_detail`
--

CREATE TABLE `order_item_detail` (
  `sr_no` int(255) NOT NULL,
  `invoice_no` int(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL COMMENT 'Quantity = Weight in kg',
  `final_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item_detail`
--

INSERT INTO `order_item_detail` (`sr_no`, `invoice_no`, `item`, `quantity`, `final_price`) VALUES
(2, 5, 'tv', 2, 110000),
(5, 7, 'AC', 1, 59000),
(6, 7, 'Fan', 4, 22000),
(7, 7, 'Laptop', 2, 106200),
(11, 7, 'tv', 40, 2200000),
(13, 11, 'AC', 50, 2950000),
(14, 11, 'Fan', 10, 55000),
(15, 11, 'Laptop', 50, 2655000),
(29, 18, 'AC', 78, 4602000),
(32, 20, 'Mobile', 50, 590000),
(33, 21, 'AC', 50, 2950000),
(34, 21, 'Fan', 10, 55000),
(35, 22, 'Laptop', 15, 796500);

-- --------------------------------------------------------

--
-- Table structure for table `record_details`
--

CREATE TABLE `record_details` (
  `invoice_no` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `dc_id` int(255) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `transport_mode` varchar(255) NOT NULL,
  `vehicle_no` varchar(255) NOT NULL,
  `TCS` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record_details`
--

INSERT INTO `record_details` (`invoice_no`, `customer_id`, `dc_id`, `order_date`, `transport_mode`, `vehicle_no`, `TCS`) VALUES
(21, 11, 11, '2022-06-24', 'By Road', '789654', 0.1),
(22, 11, 11, '2022-06-24', 'By Road', '789655', 0.2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `ph_no` (`ph_no`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `c_details`
--
ALTER TABLE `c_details`
  ADD PRIMARY KEY (`ph_no`,`username`) USING BTREE,
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_name`);

--
-- Indexes for table `order_item_detail`
--
ALTER TABLE `order_item_detail`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `record_details`
--
ALTER TABLE `record_details`
  ADD PRIMARY KEY (`invoice_no`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `sr_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_item_detail`
--
ALTER TABLE `order_item_detail`
  MODIFY `sr_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `record_details`
--
ALTER TABLE `record_details`
  MODIFY `invoice_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD CONSTRAINT `bank_details_ibfk_1` FOREIGN KEY (`ph_no`) REFERENCES `c_details` (`ph_no`);

--
-- Constraints for table `record_details`
--
ALTER TABLE `record_details`
  ADD CONSTRAINT `record_details_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_details` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 06:55 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `hsn_code` int(11) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `hsn_code`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Hard Drives', 8756710, 0, '2018-08-21 15:40:58', '2018-08-28 20:00:26', '0000-00-00 00:00:00', 1, 1, 0),
(2, 'Hard Disks', 8756720, 0, '2018-08-24 14:22:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(3, 'CD Rom', 8756730, 1, '2018-08-24 15:06:53', '0000-00-00 00:00:00', '2018-09-04 16:32:50', 1, 0, 1),
(4, 'Pen drive', 8756722, 1, '2018-08-24 16:19:44', '0000-00-00 00:00:00', '2018-08-24 16:20:03', 1, 0, 1),
(5, 'Keyboard', 8756760, 0, '2018-09-17 12:23:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_address`, `customer_email`, `customer_contact`, `gst_no`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'sadhwani', 'ulhasnagar', 'sadhwani@gmail.com', '8380806866', '332323', 0, '2018-09-04 13:33:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(2, 'sanjay', 'kalyan', 'sanjay@gmail.com', '54363637', '21', 0, '2018-09-04 13:40:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(3, 'xx', '', '', '32', '', 1, '2018-09-04 13:41:01', '0000-00-00 00:00:00', '2018-09-04 14:46:19', 1, 0, 1),
(4, 'xyz', '', '', '1234', '', 1, '2018-09-04 16:23:26', '0000-00-00 00:00:00', '2018-09-04 16:32:41', 1, 0, 1),
(5, 'abc', '', '', '345', '', 1, '2018-09-04 16:23:47', '0000-00-00 00:00:00', '2018-09-04 20:35:55', 1, 0, 1),
(6, 'uvw', '', '', '18', '', 0, '2018-09-04 16:26:11', '2018-09-10 09:30:31', '0000-00-00 00:00:00', 1, 1, 0),
(7, 'sq', 'kalyan', 'ss@gmail.com', '999', '98', 1, '2018-09-04 16:29:30', '0000-00-00 00:00:00', '2018-09-04 18:00:49', 1, 0, 1),
(8, 'pq', '', '', '22', '', 0, '2018-09-04 16:33:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(9, 'sa', '', '', '66', '', 0, '2018-09-04 16:35:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(10, 'aa', '', '', '67', '', 1, '2018-09-04 16:36:09', '0000-00-00 00:00:00', '2018-09-04 20:36:21', 1, 0, 1),
(11, 'sas', '', '', '23', '', 1, '2018-09-04 19:07:36', '0000-00-00 00:00:00', '2018-09-04 20:10:13', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `employee_contact` varchar(10) NOT NULL,
  `employee_email` varchar(255) NOT NULL,
  `employee_address` text NOT NULL,
  `employee_type` int(11) NOT NULL,
  `employee_password` varchar(255) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_name`, `employee_contact`, `employee_email`, `employee_address`, `employee_type`, `employee_password`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Sahil Sadhwani', '9820098200', 'sahil@gmail.com', 'Some Huge Villa,\r\nSome Private Road,\r\nThane-W.', 1, '$2y$10$NSP6sRjItDLqJuWWQqyrheR//B0rR1u5.P35sFrirKZWCLzYn9Qtm', 0, '2018-08-15 20:42:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gst`
--

CREATE TABLE `gst` (
  `hsn_code` int(11) NOT NULL,
  `gst_rate` int(5) NOT NULL,
  `wef` date NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gst`
--

INSERT INTO `gst` (`hsn_code`, `gst_rate`, `wef`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(8756710, 12, '2018-08-21', 0, '2018-08-21 15:40:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(8756720, 18, '2018-08-24', 0, '2018-08-24 14:22:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(8756722, 4, '2018-08-24', 0, '2018-08-24 16:19:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(8756730, 12, '2018-08-24', 0, '2018-08-24 15:06:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(8756760, 6, '2018-09-17', 0, '2018-09-17 12:23:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `eoq` int(5) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `sale_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sale_quantity` int(11) NOT NULL,
  `discount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_mode`
--

CREATE TABLE `payment_mode` (
  `paymode` int(11) NOT NULL,
  `paymode_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `eoq` int(11) NOT NULL DEFAULT '0',
  `additional_specification` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `image_extension` varchar(255) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `eoq`, `additional_specification`, `category_id`, `image_extension`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Samsung Monitor 19\"', 0, 'samsung latest hd monitor', 1, '', 1, '2018-09-11 21:43:37', '0000-00-00 00:00:00', '2018-09-18 19:29:32', 1, 0, 1),
(4, 'Samsung Monitor 15', 0, 'samsung latest hd monitor', 2, '', 1, '2018-09-11 21:45:21', '0000-00-00 00:00:00', '2018-09-18 19:32:18', 1, 0, 1),
(9, 'Microsoft Keyboard', 0, '', 5, 'png', 0, '2018-09-17 13:54:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(10, 'Iball Keyboard', 0, '', 5, 'png', 0, '2018-09-18 18:50:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(11, 'hq keyboard', 2, '', 5, 'gif', 1, '2018-09-18 19:34:17', '0000-00-00 00:00:00', '2018-09-18 19:51:50', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_sale_rate`
--

CREATE TABLE `product_sale_rate` (
  `product_id` int(11) NOT NULL,
  `rate_of_sale` float NOT NULL,
  `wef` date NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_sale_rate`
--

INSERT INTO `product_sale_rate` (`product_id`, `rate_of_sale`, `wef`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 2500, '2018-09-11', 1, '2018-09-11 21:43:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(2, 2500, '2018-09-11', 0, '2018-09-11 21:43:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(3, 2500, '2018-09-11', 0, '2018-09-11 21:44:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(4, 2500, '2018-09-11', 1, '2018-09-11 21:45:21', '0000-00-00 00:00:00', '2018-09-18 19:32:18', 1, 0, 1),
(5, 2500, '2018-09-11', 0, '2018-09-11 21:47:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(6, 1200, '2018-09-17', 0, '2018-09-17 12:30:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(7, 1500, '2018-09-17', 0, '2018-09-17 13:52:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(8, 1500, '2018-09-17', 0, '2018-09-17 13:52:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(9, 1500, '2018-09-17', 0, '2018-09-17 13:54:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(10, 1300, '2018-09-18', 0, '2018-09-18 18:50:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(11, 1300, '2018-09-18', 1, '2018-09-18 19:34:17', '0000-00-00 00:00:00', '2018-09-18 19:51:50', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_supplier`
--

CREATE TABLE `product_supplier` (
  `product_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_supplier`
--

INSERT INTO `product_supplier` (`product_id`, `supplier_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 3),
(8, 3),
(9, 1),
(9, 3),
(10, 3),
(11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL,
  `date_of_purchase` date NOT NULL,
  `gst_type` int(1) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_product`
--

CREATE TABLE `purchase_product` (
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rate_of_purchase` int(11) NOT NULL,
  `quantity_purchased` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_supplier`
--

CREATE TABLE `purchase_supplier` (
  `purchase_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `employee_type` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `access_rights` text NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date_of_sale` date NOT NULL,
  `invoice_details` text NOT NULL,
  `employee_id` int(11) NOT NULL,
  `paymode` int(11) NOT NULL,
  `cheque_number` int(11) NOT NULL,
  `cheque_date` date NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `gst_type` int(11) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `currency_append_mode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_address` text NOT NULL,
  `supplier_contact` varchar(10) NOT NULL,
  `supplier_email` varchar(255) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_contact`, `supplier_email`, `gst_no`, `deleted`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'rs', 'unr', '98009800', 'sahil@gmail.com', '332323', 0, '2018-09-04 21:19:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(2, 'sahil', '', '67676', '', '', 1, '2018-09-10 09:37:01', '2018-09-10 15:53:25', '2018-09-10 15:53:32', 1, 1, 1),
(3, 'tp', '', '1234', '', '', 0, '2018-09-11 20:50:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(4, 'rs', 'kl', '9988007766', 'ls@g.com', '980990', 0, '2018-10-17 07:20:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `gst`
--
ALTER TABLE `gst`
  ADD PRIMARY KEY (`hsn_code`,`wef`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`sale_id`,`product_id`);

--
-- Indexes for table `payment_mode`
--
ALTER TABLE `payment_mode`
  ADD PRIMARY KEY (`paymode`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_sale_rate`
--
ALTER TABLE `product_sale_rate`
  ADD PRIMARY KEY (`product_id`,`wef`);

--
-- Indexes for table `product_supplier`
--
ALTER TABLE `product_supplier`
  ADD PRIMARY KEY (`product_id`,`supplier_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `purchase_product`
--
ALTER TABLE `purchase_product`
  ADD PRIMARY KEY (`purchase_id`,`product_id`);

--
-- Indexes for table `purchase_supplier`
--
ALTER TABLE `purchase_supplier`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`employee_type`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_mode`
--
ALTER TABLE `payment_mode`
  MODIFY `paymode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `employee_type` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

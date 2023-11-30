-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 05:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lebanonexpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-table`
--

CREATE TABLE `admin-table` (
  `Admin-Id` int(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'nike'),
(3, 'amazon'),
(4, 'adidass'),
(5, 'macdonalds'),
(6, 'starbucks'),
(7, 'dell'),
(8, 'master');

-- --------------------------------------------------------

--
-- Table structure for table `bussiness-table`
--

CREATE TABLE `bussiness-table` (
  `B-Id` int(100) NOT NULL,
  `B-Name` varchar(100) NOT NULL,
  `Type` text NOT NULL,
  `B-Location` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone-Number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat-ID` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat-ID`, `name`, `image`) VALUES
(1, 'fruits', ''),
(2, 'stell', ''),
(3, 'juice', ''),
(5, 'food', ''),
(6, 'foody', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer-table`
--

CREATE TABLE `customer-table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL,
  `Order-Id` varchar(100) NOT NULL,
  `user_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback-table`
--

CREATE TABLE `feedback-table` (
  `Cust-Id` int(100) NOT NULL,
  `Item-Id` int(100) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `rate` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order-details-table`
--

CREATE TABLE `order-details-table` (
  `Order-Id` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `selling-price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order-table`
--

CREATE TABLE `order-table` (
  `Order-Id` int(100) NOT NULL,
  `Date` date NOT NULL,
  `Cust-Id` int(100) NOT NULL,
  `B-Id` int(100) NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product-table`
--

CREATE TABLE `product-table` (
  `product-Id` int(255) NOT NULL,
  `Cat_ID` int(100) NOT NULL,
  `B-Id` varchar(100) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_title` int(11) NOT NULL,
  `product_keywords` int(255) NOT NULL,
  `product_image1` int(11) NOT NULL,
  `product_image2` int(11) NOT NULL,
  `product_image3` int(11) NOT NULL,
  `total-quantity` int(11) NOT NULL,
  `product_description` varchar(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `initial-quantity` int(100) NOT NULL,
  `current-quantity` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-table`
--
ALTER TABLE `admin-table`
  ADD PRIMARY KEY (`Admin-Id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`),
  ADD UNIQUE KEY `brand_id` (`brand_id`);

--
-- Indexes for table `bussiness-table`
--
ALTER TABLE `bussiness-table`
  ADD PRIMARY KEY (`B-Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat-ID`),
  ADD UNIQUE KEY `Cat-ID` (`Cat-ID`);

--
-- Indexes for table `customer-table`
--
ALTER TABLE `customer-table`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `product-table`
--
ALTER TABLE `product-table`
  ADD PRIMARY KEY (`product-Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Cat-ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer-table`
--
ALTER TABLE `customer-table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product-table`
--
ALTER TABLE `product-table`
  MODIFY `product-Id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

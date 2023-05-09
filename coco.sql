-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 09:39 AM
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
-- Database: `coco`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password1`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password1` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`username`, `email`, `password1`, `telephone`, `address`) VALUES
('Harsha', 'harshan@gmail.com', '123abc', 772312345, 'Keembiela, Baddegama'),
('Kasuni', 'Kash@gmail.com', '32123', 912343212, 'Kandy'),
('Pabodya', 'pahan@gmail.com', '12341', 912234321, 'Colombo'),
('Pasindu', 'pasi@gmail.com', '12131', 778765045, 'Galle road, Baddegama'),
('Pavani', 'paanigamya2001@gmail.com', '12345', 776570262, 'galle'),
('Rajeen', 'Rajeen@gmail.com', 'Rajeen', 754331234, 'Batapola, Galle.'),
('Sandun', 'sadun@gmail.com', '12121', 778765045, 'Galle road, Baddegama');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password1` varchar(50) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `username`, `email`, `password1`, `order_type`, `quantity`) VALUES
(1, 'Mihiliyaaaaaa', 'mimi@gmail.com', 'mimi11', '1000 ml', '6'),
(2, 'Vijani', 'raveesha@gmail.com', '456vije', '500 ml', '5'),
(3, 'pavani', 'paanigamya2001@gmail.com', '12345', '1000 ml', '1'),
(4, 'Kasuni', 'Kash@gmail.com', '32123', '500 ml', '6'),
(5, 'Kasuni', 'Kash@gmail.com', '32123', '1000 ml', '6'),
(6, 'Kasuni', 'Kash@gmail.com', '32123', '500 ml', '9'),
(7, 'Harsha', 'harsha@gmail.com', '123abc', '500 ml', '1'),
(8, 'Harsha', 'harsha@gmail.com', '123abc', '500 ml', '1'),
(9, 'Harsha', 'harsha@gmail.com', '123abc', '500 ml', '6'),
(10, 'pavani', 'paanigamya2001@gmail.com', '12345', '1000 ml', '9'),
(11, 'pavani', 'paanigamya2001@gmail.com', '12345', '500 ml', '4');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_no` int(15) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` varchar(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_no`, `product_name`, `price`, `quantity`, `image`) VALUES
(1, '100 ml - Pure', 'Rs.150.00', 12, '100ml pure.png'),
(2, '100ml - Strawberry', 'Rs.150.00', 78, '100ml straw.png'),
(3, '100ml - Kiwi', 'Rs.150.00', 60, '100ml kiwi.png'),
(4, '100ml - Mango', 'Rs.150.00', 45, '100ml mango.png'),
(5, '400ml - Pure', 'Rs.325.00', 66, '400ml pure tin.png'),
(6, '400ml - Pomangranate', 'Rs.350.00', 9, '400ml pom tin.png'),
(7, '400ml - Pineapple', 'Rs.350.00', 2, '400ml pine tin.png'),
(8, '400ml - Watermelon', 'Rs.350.00', 60, '400ml melon tin.png'),
(9, '400ml - Mango', 'Rs.350.00', 23, '400ml mango tin.png'),
(10, '500ml - Pure', 'Rs.450.00', 90, '500ml pure.png'),
(11, '500 ml - Pomangranate', 'Rs.450.00', 8, '500ml poman.png'),
(12, '500 ml - Pineapple', 'Rs.450.00', 60, '500ml pine.png'),
(13, '500ml - Watermelon', 'Rs.450.00', 44, '500ml watermelon.png'),
(14, '500ml - Mango', 'Rs.450.00', 3, '500ml mango.png'),
(15, '500ml - Kiwi', 'Rs.450.00', 489, '500ml kiwi.png'),
(16, '500ml - Lemon & Mint', 'Rs.450.00', 60, '500ml lemon.png'),
(17, '500ml - Strawberry', 'Rs.450.00', 60, '500ml straw.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2025 at 12:01 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asmphp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category_status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_status`) VALUES
(1, 'Điện thoạii', 1),
(2, 'Laptop', 1),
(3, 'Test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int NOT NULL,
  `order_user_id` int NOT NULL,
  `order_product_id` int NOT NULL,
  `order_price` int NOT NULL,
  `order_amount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `order_user_id`, `order_product_id`, `order_price`, `order_amount`) VALUES
(1, 1, 1, 1200, 2),
(2, 1, 2, 123, 1),
(3, 1, 3, 132123, 1),
(4, 1, 4, 234, 3),
(5, 2, 5, 314134134, 1),
(6, 2, 6, 654, 2),
(7, 2, 7, 234567890, 1),
(8, 3, 1, 1200, 1),
(9, 3, 3, 132123, 2),
(10, 3, 5, 314134134, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_detail` varchar(255) NOT NULL,
  `product_amount` int NOT NULL,
  `product_status` int NOT NULL DEFAULT '1',
  `product_cate_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_image`, `product_detail`, `product_amount`, `product_status`, `product_cate_id`) VALUES
(1, 'Điện hto123aij xịn', 1200, '386879197_274394835576707_5557031970033408359_n.jpg', 'Điện thoại ădawdvà đpẹ', 122, 1, 1),
(2, 'abc', 123, '386879197_274394835576707_5557031970033408359_n.jpg', 'Rát ngon', 2, 1, 3),
(3, 'âefdaf', 132123, '122959113_449563376022943_7005312100385151816_n.jpg', '34etfsfgdtgfb', 123, 1, 3),
(4, 'Test3', 234, 'mcvui.jpg', 'ưerstdfhghjbmn', 234, 1, 2),
(5, '123134134', 314134134, 'omg.jpg', 'qewrstdghvnb', 342, 1, 2),
(6, '213qerwtgd', 654, 'anh5.png', '4ergvhjnkmlpo=908ytfdxcgvhjjkl', 43, 1, 1),
(7, '8ujhnt458765tghfz', 234567890, 'anh1.jpeg', '324ertyghjbvcxzAsdrty78trdfcvb ', 234, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

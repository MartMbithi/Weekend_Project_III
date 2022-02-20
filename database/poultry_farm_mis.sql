-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2022 at 09:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poultry_farm_mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(200) NOT NULL,
  `order_number` varchar(200) NOT NULL,
  `order_supplier_id` int(200) NOT NULL,
  `order_qty` varchar(200) NOT NULL,
  `order_amount` varchar(200) NOT NULL,
  `order_product_id` int(200) NOT NULL,
  `order_date` varchar(200) NOT NULL,
  `order_status` varchar(200) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_number`, `order_supplier_id`, `order_qty`, `order_amount`, `order_product_id`, `order_date`, `order_status`) VALUES
(1, '32587OPBRN', 6, '500', '5000', 1, '20 Feb 2022', 'paid'),
(3, '89405YWZAJ', 6, '800', '12000', 2, '20 Feb 2022', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(200) NOT NULL,
  `product_code` varchar(200) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `product_qty` varchar(200) DEFAULT NULL,
  `product_price` varchar(200) DEFAULT NULL,
  `product_desc` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_code`, `product_name`, `product_qty`, `product_price`, `product_desc`) VALUES
(1, 'WEDXO09653', 'Exotic Eggs', '1500', '10', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean'),
(2, 'EBQDL38729', 'Indengenous Eggs', '2500', '15', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean'),
(3, 'PIYKT57314', 'Broilers', '900', '500', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean'),
(5, 'IFQPD46019', 'Exotic Eggs', '1500', '12', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_access_level` varchar(200) NOT NULL,
  `user_phone_no` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_access_level`, `user_phone_no`) VALUES
(1, 'System Admin', 'sysadmin@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'staff', '0987654332'),
(2, 'James Doe', 'jd@mail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'staff', '07108909012'),
(4, 'James Doe', 'jdsupplier@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'supplier', '08877666321'),
(6, 'Jane Doe', 'test@mail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'customer', '07101010107'),
(8, 'James Doe Jnr', 'jd9012@gmail.com', '67a74306b06d0c01624fe0d0249a570f4d093747', 'customer', '6677553423256'),
(9, 'Todd James', 'td@mail.com', NULL, 'customer', '9001256'),
(10, 'Supplier Doe James', 'supplier@jamesdoeinc.com', NULL, 'supplier', '456789133');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `OrderSupplier` (`order_supplier_id`),
  ADD KEY `OrderProducts` (`order_product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `OrderProducts` FOREIGN KEY (`order_product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `OrderSupplier` FOREIGN KEY (`order_supplier_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

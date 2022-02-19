-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2022 at 01:16 PM
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
-- Database: `cereal_board_mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(200) NOT NULL,
  `order_product_id` int(200) NOT NULL,
  `order_qty` varchar(200) DEFAULT NULL,
  `order_delivery_time` varchar(200) DEFAULT NULL,
  `order_payment_status` varchar(200) DEFAULT 'Pending',
  `order_status` varchar(200) DEFAULT 'Pending',
  `order_code` varchar(200) DEFAULT NULL,
  `order_created_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_product_id`, `order_qty`, `order_delivery_time`, `order_payment_status`, `order_status`, `order_code`, `order_created_at`) VALUES
(5, 1, '500', '2022-02-21', 'Paid', 'Pending', 'FWEDI27416', '13 Feb 2022'),
(6, 2, '1800', '2022-02-21', 'Paid', 'Pending', 'MLQJD90358', '13 Feb 2022');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pay_id` int(200) NOT NULL,
  `pay_order_id` int(200) NOT NULL,
  `pay_code` varchar(200) DEFAULT NULL,
  `pay_amount` varchar(200) DEFAULT NULL,
  `pay_date_posted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pay_desc` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pay_id`, `pay_order_id`, `pay_code`, `pay_amount`, `pay_date_posted`, `pay_desc`) VALUES
(2, 5, 'YT2DX1BIMS', '15000', '2022-02-17 10:49:07', ''),
(3, 6, '2YV0TEGOQB', '54000', '2022-02-17 10:49:11', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(200) NOT NULL,
  `product_category_id` int(200) NOT NULL,
  `product_user_id` int(200) NOT NULL,
  `product_code` varchar(200) DEFAULT NULL,
  `product_name` longtext DEFAULT NULL,
  `product_image_1` longtext DEFAULT NULL,
  `product_date_harvested` varchar(200) DEFAULT NULL,
  `product_quantity` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_category_id`, `product_user_id`, `product_code`, `product_name`, `product_image_1`, `product_date_harvested`, `product_quantity`) VALUES
(1, 1, 6, 'TSXOC', 'Corn', NULL, '2021-12-01', '900'),
(2, 1, 2, 'RSKTZ', 'Beans', NULL, '2022-02-01', '500'),
(3, 2, 5, 'WFBRT', 'Cow Peas', NULL, '2022-02-07', '1000'),
(4, 1, 2, 'DAYCK', 'Maize', NULL, '2022-01-31', '1500'),
(6, 2, 2, 'UDNWC', 'Cow Peas', NULL, '2022-01-31', '900');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `category_id` int(200) NOT NULL,
  `category_code` varchar(200) DEFAULT NULL,
  `category_name` longtext DEFAULT NULL,
  `category_desc` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`category_id`, `category_code`, `category_name`, `category_desc`) VALUES
(1, 'XBTRG', 'Grade 1', 'Category 001, this category holds grade 1 and high quality cereals. - Updated\r\n'),
(2, 'JSEBZ', 'Grade 2', 'Category 002, this category holds grade 2 and high quality cereals.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(200) NOT NULL,
  `user_number` varchar(200) DEFAULT NULL,
  `user_name` varchar(200) DEFAULT NULL,
  `user_idno` varchar(200) DEFAULT NULL,
  `user_email` varchar(200) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_address` longtext DEFAULT NULL,
  `user_phoneno` varchar(200) DEFAULT NULL,
  `user_access_level` varchar(200) DEFAULT NULL,
  `user_acc_status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_number`, `user_name`, `user_idno`, `user_email`, `user_password`, `user_address`, `user_phoneno`, `user_access_level`, `user_acc_status`) VALUES
(1, '001', 'System Admin', '0023', 'sysadmin@cerealboard.go.ke', 'a69681bcf334ae130217fea4505fd3c994f5683f', '90125 Eldoret Uasin Gishu', '0704031263', 'admin', 'Verified'),
(2, 'VHGEP95132', 'James Doe Jnr', '35467898', 'jamesdoe@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', '90126 Uasin Gishu', '071234567', 'Farmer', 'Verified'),
(5, 'EYJXA02541', 'Jane Doe ', '90012567', 'janedoe@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', '90125 Uasin Gishu', '0790876554', 'Farmer', 'Verified'),
(6, 'FVLAN79863', 'Doe James', '123456789', 'doejames123@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', '1256 Uasin Gishu', '0789346790', 'Staff', 'Verified'),
(7, 'VLIDQ15986', 'Test 001', '900125678', 'test@test.com', '01df1a31c67b13344638729976f33a0a8127567c', '1256 Uasin Gishu  - uPDATED', '07123456776', 'Farmer', 'Verified'),
(8, 'EAPVT29058', 'James Doe', '35590051', 'jamesde120@gmail.com', '0005dee653c31bd95daa5341a997b7763d5d5b86', '90126 Localhost', '0704031675', 'Staff', 'Verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `OrderProductID` (`order_product_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `PayOrderID` (`pay_order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `ProductCategory` (`product_category_id`),
  ADD KEY `ProductOwnerID` (`product_user_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`category_id`);

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
  MODIFY `order_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pay_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `category_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `OrderProductID` FOREIGN KEY (`order_product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `PayOrderID` FOREIGN KEY (`pay_order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `ProductCategory` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ProductOwnerID` FOREIGN KEY (`product_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

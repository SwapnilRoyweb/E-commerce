-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 04, 2023 at 09:10 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `role` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `present_address` varchar(500) NOT NULL,
  `permanent_address` varchar(500) NOT NULL,
  `contact_number` int NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `zip` int NOT NULL,
  `image` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `role`, `first_name`, `last_name`, `email`, `password`, `present_address`, `permanent_address`, `contact_number`, `gender`, `city`, `zip`, `image`, `created_at`, `updated_at`) VALUES
(40, '1', 'Swapnil', 'Roy', 'swapnil.roy1359@gmail.com', '13591011', 'Sector-6, Uttara, Dhaka', '23 no, Dewanji Pukur Par, Chittagong', 1845382614, 'Male', 'Chittagong', 1004, 'FB_IMG_15493886879901672864493.jpg', '2023-01-04 20:34:53', '2023-01-04 20:34:53'),
(41, '0', 'Swapnil', 'Roy', 'swapnilroyweb@gmail.com', '123456789', 'Sector-6, Uttara, Dhaka', '23 no, Dewanji Pukur Par, Chittagong', 1845382614, 'Male', 'Dhaka', 1230, 'FB_IMG_15493886828201672864690.jpg', '2023-01-04 20:38:10', '2023-01-04 20:38:10');

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `id` int NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `present_address` varchar(500) NOT NULL,
  `permanent_address` varchar(500) NOT NULL,
  `city` varchar(300) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `delivery_method` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `billing_details`
--

INSERT INTO `billing_details` (`id`, `first_name`, `last_name`, `present_address`, `permanent_address`, `city`, `email`, `contact_number`, `payment_method`, `delivery_method`, `created_at`, `updated_at`) VALUES
(1, 'Nil', 'Roy', 'Joynal Market, Sector-6, Uttara, Dhaka', '23 no, Dewanji Pukur Par, Chittagong', 'Chittagong', 'swapnilroyweb@gmail.com', '1845382614', 'Cash on Delivery', 'Home Delivery', '2022-12-30 18:29:32', '2022-12-30 18:29:32'),
(2, 'Swapnil', 'Roy', 'Sector-6, Uttara, Dhaka', '23 no, Dewanji Pukur Par, Chittagong', 'Dhaka', 'swapnil.roy1359@gmail.com', '1845382614', 'Cash on Delivery', 'Pick up from store', '2022-12-30 18:55:24', '2022-12-30 18:55:24'),
(5, 'Nil', 'Roy', 'Joynal Market, Sector-6, Uttara, Dhaka', '23 no, Dewanji Pukur Par, Chittagong', 'Chittagong', 'swapnilroyweb@gmail.com', '1845382614', 'Cash on Delivery', 'Home Delivery', '2022-12-30 19:43:33', '2022-12-30 19:43:33'),
(6, 'Nil', 'Roy', 'Joynal Market, Sector-6, Uttara, Dhaka', '23 no, Dewanji Pukur Par, Chittagong', 'Chittagong', 'swapnilroyweb@gmail.com', '1845382614', 'Cash on Delivery', 'Home Delivery', '2022-12-30 19:59:24', '2022-12-30 19:59:24'),
(7, 'Swapnil', 'Roy', 'Sector-6, Uttara, Dhaka', '23 no, Dewanji Pukur Par, Chittagong', 'Dhaka', 'swapnil.roy1359@gmail.com', '1845382614', 'Cash on Delivery', 'Home Delivery', '2022-12-30 20:11:03', '2022-12-30 20:11:03'),
(8, 'Swapnil', 'Roy', 'Sector-6, Uttara, Dhaka', '23 no, Dewanji Pukur Par, Chittagong', 'Dhaka', 'swapnil.roy1359@gmail.com', '1845382614', 'Cash on Delivery', 'Home Delivery', '2022-12-30 20:28:01', '2022-12-30 20:28:01'),
(9, 'Swapnil', 'Roy', 'Sector-6, Uttara, Dhaka', '23 no, Dewanji Pukur Par, Chittagong', 'Dhaka', 'swapnil.roy1359@gmail.com', '1845382614', 'Cash on Delivery', 'Home Delivery', '2023-01-04 05:56:51', '2023-01-04 05:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `c_description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `c_description`, `created_at`, `updated_at`) VALUES
(21, 'Electronics', 'Description', '2022-12-11 12:41:26', '2022-12-11 12:41:26'),
(23, 'Food', 'Food Description', '2022-12-20 11:58:31', '2022-12-20 11:58:31'),
(24, 'Fashion', 'This is category of clothing product of daily uses.', '2022-12-21 04:13:07', '2022-12-21 04:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `p_id` int NOT NULL,
  `image` varchar(250) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `price` double NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `subtotal` varchar(500) NOT NULL,
  `description` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `p_id`, `image`, `product_name`, `category_name`, `price`, `quantity`, `subtotal`, `description`, `created_at`, `updated_at`) VALUES
(27, 37, 33, '2-in-1-product-image-transparent-background.png.rendition.intel.web.480.2701670906737.webp', 'Laptop', 'Electronics', 5000, '3', '15000', 'This is laptop. Here is the Description', '2022-12-30 07:40:39', '2022-12-30 07:40:39'),
(28, 38, 65, 'PNGPIX-COM-shoes-PNG-Transparent-Image-shoebluecanvasmen1671596113.png', 'Shoes', 'Fashion', 1000, '3', '3000', 'This snikkers for young generation', '2022-12-30 08:35:57', '2022-12-30 08:35:57'),
(30, 14, 65, 'PNGPIX-COM-shoes-PNG-Transparent-Image-shoebluecanvasmen1671596113.png', 'Shoes', 'Fashion', 1000, '2', '2000', 'This snikkers for young generation', '2023-01-03 04:15:35', '2023-01-03 04:15:35');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int NOT NULL,
  `name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category_id` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `name`, `category_id`, `price`, `image`, `description`, `created_at`, `updated_at`) VALUES
(33, 'Laptop', '21', 5000, '2-in-1-product-image-transparent-background.png.rendition.intel.web.480.2701670906737.webp', 'This is laptop. Here is the Description', '2022-12-13 04:45:37', '2022-12-13 04:45:37'),
(34, 'Watch', '21', 500, 'wearables-fashion-bip21670910216.webp', 'Product Description', '2022-12-13 05:43:36', '2022-12-13 05:43:36'),
(36, 'Garage-Power', '21', 10000, 'garage-power-single-family-image1670910613.png', 'Product Description', '2022-12-13 05:50:13', '2022-12-13 05:50:13'),
(37, 'Oven', '21', 5000, 'images1670910674.jfif', 'Description', '2022-12-13 05:51:14', '2022-12-13 05:51:14'),
(38, 'Air-conditioner', '21', 5000, 'images (1)1670910857.jfif', 'Description', '2022-12-13 05:54:17', '2022-12-13 05:54:17'),
(49, 'Shirt', '21', 700, 'Formal-Plain-Full-Sleeve-Shirts-for-Men.jpg1670950874.jfif', 'Description', '2022-12-13 17:01:14', '2022-12-13 17:01:14'),
(56, 'Laptop', '21', 50000, 'Apple_16-inch-MacBook-Pro_111319.jpg.news_app_ed1671046877.jpg', 'This is a laptop of Apple Brand.', '2022-12-14 19:41:17', '2022-12-14 19:41:17'),
(57, 'Laptop', '21', 100000, 'refurb-mbp16touch-space-gallery-2019_GEO_EMEA_LANG_DE1671046957.jfif', 'This laptop is good for regular uses.', '2022-12-14 19:42:37', '2022-12-14 19:42:37'),
(58, 'Laptop', '21', 30000, 'istockphoto-1140541722-612x6121671047006.jpg', 'This is a laptop of Asus Brand.', '2022-12-14 19:43:26', '2022-12-14 19:43:26'),
(59, 'Laptop', '21', 70000, 'images (2)1671047107.jfif', 'This is a laptop of Lenevo Brand.', '2022-12-14 19:45:07', '2022-12-14 19:45:07'),
(61, 'Laptop', '21', 10000, 'Apple_16-inch-MacBook-Pro_111319.jpg.news_app_ed1671510621.jpg', 'Description', '2022-12-20 04:30:21', '2022-12-20 04:30:21'),
(63, 'Organic', '23', 50, '5-51151_heart-fruit-png-transparent-image-heart-fruits-and1671538731.png', 'There is some fruits', '2022-12-20 12:18:51', '2022-12-20 12:18:51'),
(65, 'Shoes', '24', 1000, 'PNGPIX-COM-shoes-PNG-Transparent-Image-shoebluecanvasmen1671596113.png', 'This snikkers for young generation', '2022-12-21 04:15:13', '2022-12-21 04:15:13'),
(67, 'Shoes', '24', 800, 's-l5001672290576.jpg', 'This is snikkers', '2022-12-29 05:09:36', '2022-12-29 05:09:36'),
(68, 'Shoes', '24', 500, '7f8ee038-906a-47a9-8296-be17b4bdda941672290910.webp', 'This is brand Snikkers', '2022-12-29 05:15:10', '2022-12-29 05:15:10'),
(69, 'Shoes', '24', 1000, 'ed291e67-4618-49ec-8dda-2c2221a5df411672290957.webp', 'This is Snikkers for kids', '2022-12-29 05:15:57', '2022-12-29 05:15:57'),
(70, 'Shoes', '24', 500, 'ce8a6f3aa6294de988d7abce00c4e459_93661672719260.webp', 'This is Description', '2023-01-03 04:14:20', '2023-01-03 04:14:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

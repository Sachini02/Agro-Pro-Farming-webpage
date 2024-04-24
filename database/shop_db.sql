-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 06:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(29, 'Rice Seeds (ancup)', '2500', 'rice 3.jpg', 1),
(30, 'Carrot Seeds', '250', 'carrot.jpg', 1),
(31, 'cabbage', '200', 'cabbage.jpg', 1),
(32, 'Papper', '260', 'papper.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(50) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` int(100) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'sachini deshika', '0762587103', 'sachini@123', 'credit Card', 'paranawatta road', 'kerwalapitiya', 'hendala', 'wattala', 'sri lanka', 2587, 'Rice Seeds (ancup)(3),pumkin(6),Corn(10),brinjal(3),Orange(1),Wattermelon(7),resva chemical(3)', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `price`, `image`) VALUES
(1, 'Rice Seeds', '2000', 'rice.png'),
(3, 'Rice Seeds (ancup)', '2500', 'rice 3.jpg'),
(16, 'Carrot Seeds', '250', 'carrot.jpg'),
(17, 'bahajal', '220', 'bahajal.jpg'),
(18, 'pumkin', '160', 'pumkin.PNG'),
(19, 'Tomato', '120', 'tomato.jpg'),
(20, 'brinjal', '190', 'brinjal.PNG'),
(21, 'cabbage', '200', 'cabbage.jpg'),
(22, 'Corn', '165', 'corn.jpg'),
(23, 'Red Apple', '250', 'red-apple-.png'),
(24, 'Custurd Apple', '210', 'custurd apple.jpg'),
(25, 'Orange', '250', 'orange.jpg'),
(26, 'Wattermelon', '190', 'watermelon.PNG'),
(27, 'Papper', '260', 'papper.jpg'),
(28, 'Parsley', '280', 'parsley.jpg'),
(29, 'Basil Seeds', '285', 'basil seeds.jpg'),
(30, 'Sunflower seeds', '300', 'sunflower.jpg'),
(31, 'Petunia seeds', '310', 'Petunia seeds.jpg'),
(32, 'cuctus seeds', '260', 'giant cuctus.PNG'),
(33, 'Red rose plant', '150', 'red rose plant.jpg'),
(34, 'Orange rose plant', '160', 'orange rose.jpg'),
(35, 'resva chemical', '1500', 'chemical 1.PNG'),
(36, 'agro special chemical', '2500', 'chemical3.PNG'),
(38, 'chemical', '1800', 'Chamical.PNG'),
(40, 'chemical large', '3600', 'chamical3.PNG'),
(41, 'watering tool', '1500', 'watering tool.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `email`, `password`, `user_type`) VALUES
(1, 'sachini@123', 'f647e02a69ab0e51780373f86f89a12a', 'admin'),
(2, 'deshika@456', '0b67f2d550808816e1e2b65c55a86f65', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 12:36 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cart`
--

CREATE TABLE `add_cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `tshirt_id` int(11) NOT NULL,
  `tshirt_image` varchar(100) NOT NULL,
  `tshirt_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_cart`
--

INSERT INTO `add_cart` (`cart_id`, `user_id`, `tshirt_id`, `tshirt_image`, `tshirt_price`) VALUES
(4, 'Gaurav1234', 17, 'assets/images/tshirts/6.png', 17);

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `tshirt_id` int(11) NOT NULL,
  `tshirt_title` varchar(200) NOT NULL,
  `tshirt_length` varchar(10) NOT NULL,
  `tshirt_size` varchar(20) NOT NULL,
  `tshirt_image` varchar(100) NOT NULL,
  `tshirt_price` float NOT NULL,
  `washcare` varchar(150) NOT NULL,
  `composition` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`tshirt_id`, `tshirt_title`, `tshirt_length`, `tshirt_size`, `tshirt_image`, `tshirt_price`, `washcare`, `composition`) VALUES
(16, 'NodeJs Tshirt', '28-30', 'S M XL ', 'assets/images/tshirts/5.png', 18, 'Hand wash separately in cold water. Do not soak & scrub. Dry in Shade.', 'Cambric (100% Cotton)'),
(17, 'I NEED A BREAK.', '30-34', 'S M XXL ', 'assets/images/tshirts/6.png', 17, 'Hand wash separately in cold water. Do not soak & scrub. Dry in Shade.', 'Cambric (100% Cotton)'),
(18, 'Dark Mode On T-Shirt', '28-34', 'M L XL ', 'assets/images/tshirts/7.png', 21, 'Hand wash separately in cold water. Do not soak & scrub. Dry in Shade.', 'Cambric (100% Cotton)'),
(19, 'It Works on my machine', '24-30', 'S M L ', 'assets/images/tshirts/8.png', 22, 'Hand wash separately in cold water. Do not soak & scrub. Dry in Shade.', 'Cambric (100% Cotton)'),
(20, 'I love Coding Tshirt', '30-32', 'S M ', 'assets/images/tshirts/1.jpg', 22, 'Hand wash separately in cold water. Do not soak & scrub. Dry in Shade.', 'Cambric (100% Cotton)'),
(21, 'dasddadsdasd', '28-30', 'M L XL XXL ', 'assets/images/tshirts/9.png', 28.5, 'asdasdds', 'rerwewrer');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `order_id` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `tshirt_id` int(11) NOT NULL,
  `Full Name` varchar(30) NOT NULL,
  `Size` varchar(5) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Method` varchar(20) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Zip` int(11) NOT NULL,
  `Card holder` varchar(30) DEFAULT NULL,
  `Card number` bigint(20) DEFAULT NULL,
  `Exp month` varchar(15) DEFAULT NULL,
  `Exp year` int(11) DEFAULT NULL,
  `CVV` int(11) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Mo number` bigint(20) NOT NULL,
  `Tshirt_image` varchar(70) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`order_id`, `user_id`, `tshirt_id`, `Full Name`, `Size`, `Quantity`, `Total`, `Method`, `Address`, `City`, `State`, `Zip`, `Card holder`, `Card number`, `Exp month`, `Exp year`, `CVV`, `Email`, `Mo number`, `Tshirt_image`, `date_time`) VALUES
(16, 'Gaurav123', 17, 'Gaurav Mavani', 'XXL', 2, 34, 'Cash on delivery', 'asdd sda', 'sads', 'ewew', 232323, NULL, NULL, NULL, NULL, NULL, 'gauravmavani29@gmail.com', 2323232323, '../assets/images/tshirts/6.png', '2020-10-01 00:00:00'),
(17, 'Gaurav123', 16, 'Gaurav Mavani', 'M', 2, 36, 'Cash on delivery', 'asdd sda', 'sads', 'ewew', 232323, NULL, NULL, NULL, NULL, NULL, 'gauravmavani29@gmail.com', 2323232323, '../assets/images/tshirts/5.png', '2020-10-01 00:00:00'),
(18, 'Gaurav123', 16, 'Gaurav Mavani', 'M', 3, 54, 'Net banking', 'asdd sda', 'sads', 'ewew', 232323, 'abcd', 456754321234, 'May', 2022, 422, 'gauravmavani29@gmail.com', 2323232323, '../assets/images/tshirts/5.png', '2020-10-01 00:00:00'),
(19, 'Gaurav123', 18, 'Gaurav Mavani', 'L', 2, 42, 'Cash on delivery', 'asdd sda', 'sads', 'ewew', 232323, NULL, NULL, NULL, NULL, NULL, 'gauravmavani29@gmail.com', 2323232323, '../assets/images/tshirts/7.png', '2020-10-02 00:00:00'),
(20, 'Gaurav123', 19, 'Gaurav Mavani', 'M', 2, 44, 'Cash on delivery', 'asdd sda', 'sads', 'ewew', 232323, NULL, NULL, NULL, NULL, NULL, 'gauravmavani29@gmail.com', 2323232323, '../assets/images/tshirts/8.png', '2020-10-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(50) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Error reading data for table e_website_db.user: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `e_website_db`.`user`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_cart`
--
ALTER TABLE `add_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`tshirt_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_cart`
--
ALTER TABLE `add_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `tshirt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

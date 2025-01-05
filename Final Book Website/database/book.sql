-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 04:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 1, 2),
(4, 1, 11),
(5, 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL,
  `Place` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`, `Place`, `subject`) VALUES
(1, 'Harry Potter', 'and the Philosophers Stone', 199.00, './assets/products/1.jpg', '2020-03-28 11:08:57', 'featured', 'fiction'),
(2, 'Harry Potter', 'and the Chamber of Secrets', 199.00, './assets/products/2.jpg', '2020-03-28 11:08:57', 'featured', 'fiction'),
(3, 'Harry Potter', 'and the Prisoner of Azkaban', 199.00, './assets/products/3.jpg', '2020-03-28 11:08:57', 'featured', 'fiction'),
(4, 'Harry Potter', 'and the Goblet of Fire', 199.00, './assets/products/4.jpg', '2020-03-28 11:08:57', 'featured', 'fiction'),
(5, 'Harry Potter', 'and the Order of the Phoenix', 199.00, './assets/products/5.jpg', '2020-03-28 11:08:57', 'featured', 'fiction'),
(6, 'Harry Potter', 'and the Half-Blood Prince', 199.00, './assets/products/6.jpg', '2020-03-28 11:08:57', 'featured', 'fiction'),
(7, 'Harry Potter', 'and the Deathly Hallows', 199.00, './assets/products/7.jpg', '2020-03-28 11:08:57', 'featured', 'fiction'),
(8, 'Percy Jackson', 'the Lightning Thief', 199.00, './assets/products/a1.jpg', '2020-03-28 11:08:57', 'arrival', 'fiction'),
(9, 'Percy Jackson', 'the Sea of Monsters', 199.00, './assets/products/a2.jpg', '2020-03-28 11:08:57', 'arrival', 'fiction'),
(10, 'Percy Jackson', 'the Titans Curse', 199.00, './assets/products/a3.jpg', '2020-03-28 11:08:57', 'arrival', 'fiction'),
(11, 'Shadow and Bone', 'Volume One', 199.00, './assets/products/a4.jpg', '2020-03-28 11:08:57', 'arrival', 'fiction'),
(12, 'Shadow and Bone', 'Seige and Storm', 199.00, './assets/products/a5.jpg', '2020-03-28 11:08:57', 'arrival', 'fiction'),
(13, 'Shadow and Bone', 'Ruin and Rising', 199.00, './assets/products/a6.jpg', '2020-03-28 11:08:57', 'arrival', 'fiction'),
(14, 'Uncharted', 'the Fourth Labyrinth', 199.00, './assets/products/a7.jpg', '2020-03-28 11:08:57', 'arrival', 'fiction'),
(15, 'Tomb Raider', 'Path of Apocalypse', 199.00, './assets/products/a8.jpg', '2020-03-28 11:08:57', 'arrival', 'fiction'),
(16, 'Rich Dad\'s', 'Rich Dad Poor Dad', 199.00, './assets/products/a9.jpeg', '2020-03-28 11:08:57', 'arrival', 'mindset'),
(17, 'Rich Dad\'s', 'CashFlow Quadrant', 199.00, './assets/products/a10.jpeg', '2020-03-28 11:08:57', 'arrival', 'mindset'),
(18, 'Rich Dad\'s', 'Guide to Investing', 199.00, './assets/products/a11.jpeg', '2020-03-28 11:08:57', 'arrival', 'mindset'),
(19, 'Rich Dad\'s', 'Increase Financial IQ', 199.00, './assets/products/a12.jpeg', '2020-03-28 11:08:57', 'arrival', 'mindset'),
(20, 'Rich Dad\'s', 'Retire Young Retire Rich', 199.00, './assets/products/a13.jpeg', '2020-03-28 11:08:57', 'arrival', 'mindset'),
(21, 'Rich Dad\'s', 'The Business School', 199.00, './assets/products/a14.jpg', '2020-03-28 11:08:57', 'arrival', 'mindset'),
(22, 'Rich Dad\'s', 'Business of 21 Century', 199.00, './assets/products/a15.jpg', '2020-03-28 11:08:57', 'arrival', 'mindset'),
(23, 'Rich Dad\'s', 'Rich Kid Smart Kid', 199.00, './assets/products/a16.jpeg', '2020-03-28 11:08:57', 'arrival', 'mindset'),
(24, 'Collen Hover', 'It Ends With Us', 199.00, './assets/products/8.jpg', '2020-03-28 11:08:57', 'catlog', 'love_story'),
(25, 'Rachel Schurig', 'In Search Of a Love Story', 199.00, './assets/products/9.jpg', '2020-03-28 11:08:57', 'catlog', 'love_story'),
(26, 'Rachel Schurig', 'Where your Heart is?', 199.00, './assets/products/10.jpg', '2020-03-28 11:08:57', 'arrival', 'love_story'),
(27, 'Rachel Schurig', 'The One You Want', 199.00, './assets/products/11.jpeg', '2020-03-28 11:08:57', 'arrival', 'love_story'),
(28, 'Rachel Schurig', 'An Unexpected Love Story', 199.00, './assets/products/12.jpeg', '2020-03-28 11:08:57', 'arrival', 'love_story');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

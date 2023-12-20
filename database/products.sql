-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 08:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee_shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_type` text NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_type`, `product_image`) VALUES
(1, 'Pearl Milktea', 'Milktea', 'milktea_pearl.jpg'),
(2, 'Wintermelon', 'Milktea', 'milktea_wintermelon.jpg'),
(3, 'Okinawa', 'Milktea', 'milktea_okinawa.jpg'),
(4, 'Muscovado', 'Milktea', 'milktea_muscovado.jpg'),
(5, 'Hokkaido', 'Milktea', 'milktea_hokkaido.jpg'),
(6, 'Cookies & Cream', 'Milktea', 'milktea_cookie_and_cream.jpg'),
(7, 'Taro', 'Milktea', 'milktea_taro.jpg'),
(8, 'Chocolate', 'Milktea', 'milktea_chocolate.jpg'),
(9, 'KKopi Original', 'Iced Coffee', 'coffee_kkopi_original.jpg'),
(10, 'Caramel Macchiato', 'Iced Coffee', 'coffee_caramel_macchiato_latte.jpg'),
(11, 'White Chocolate', 'Iced Coffee', 'coffee_white_chocolate.jpg'),
(12, 'Chocolate', 'Iced Coffee', 'coffee_chocolate_latte.jpg'),
(13, 'Muscovado', 'Iced Coffee', 'coffee_muscovado_latte.jpg'),
(14, 'Pastillas', 'Iced Coffee', 'coffee_pastillas_latte.jpg'),
(15, 'Vanilla', 'Iced Coffee', 'coffee_vanilla_latte.jpg'),
(16, 'Hazelnut', 'Iced Coffee', 'coffee_hazelnut_latte.jpg'),
(17, 'KKopi Barako', 'Hot Latte', 'hot_kkopi_barako.jpg'),
(18, 'Kkopi Latte', 'Hot Latte', 'hot_kkopi_latte.jpg'),
(19, 'Vanilla Latte', 'Hot Latte', 'hot_vanilla_latte.jpg'),
(20, 'Caramel Latte', 'Hot Latte', 'hot_caramel_latte.jpg'),
(21, 'Hazelnut Latte', 'Hot Latte', 'hot_hazelnut_latte.jpg'),
(22, 'Pastillas Latte', 'Hot Latte', 'hot_pastillas_latte.jpg'),
(23, 'Hot Choco', 'Hot Latte', 'hot_hot_choco.jpg'),
(24, 'Original', 'Iced Amerikano', 'amerikano_original.jpg'),
(25, 'Vanilla', 'Iced Amerikano', 'amerikano_vanilla.jpg'),
(26, 'Caramel', 'Iced Amerikano', 'amerikano_caramel.jpg'),
(27, 'Hazelnut', 'Iced Amerikano', 'amerikano_hazelnut.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

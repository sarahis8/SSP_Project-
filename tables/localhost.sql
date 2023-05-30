-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2023 at 09:40 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20793517_thecornercoffee`
--
CREATE DATABASE IF NOT EXISTS `id20793517_thecornercoffee` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id20793517_thecornercoffee`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `P_ID` int(100) NOT NULL,
  `P_NAME` varchar(250) NOT NULL DEFAULT 'No Name',
  `P_PRICE` double DEFAULT NULL,
  `P_TYPE` varchar(250) NOT NULL DEFAULT 'Coffe',
  `P_IMAGE` varchar(250) NOT NULL DEFAULT 'noImage.png'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`P_ID`, `P_NAME`, `P_PRICE`, `P_TYPE`, `P_IMAGE`) VALUES
(1, 'Cappuccino', 3, 'Coffe', 'Cappuccino.jpeg'),
(2, 'Espresso', 2.5, 'Coffe', 'Espresso.jpeg'),
(3, 'Flat White', 2.75, 'Coffe', 'FLat White.jpeg'),
(4, 'Caramel Macchiato', 2, 'Coffe', 'Caramel Macchiato.jpeg'),
(5, 'Espresso Macchiato', 2.25, 'Coffe', 'Espresso Macchiato.jpeg'),
(6, 'Americano', 2.5, 'Coffe', 'Americano.jpeg'),
(7, 'Mocha', 2, 'Coffe', 'Mocha.jpeg'),
(8, 'White Mocha', 2.25, 'Coffe', 'White Mocha.jpeg'),
(9, 'Mocha Frappuccino', 3, 'Coffe', 'Mocha Frappuccino.jpeg'),
(10, 'Cookie Frappuccino', 3.25, 'Coffe', 'Cookie Frappuccino.jpeg'),
(11, 'Wafels Honey & oats', 1.5, 'Snack & Sweets', 'Wafels Honey & oats.jpeg'),
(12, 'Vanilla & Cashew Bar', 1.5, 'Snack & Sweets', 'Vanilla & Cashew Bar.jpeg'),
(13, 'Peanut Bar Chocolate', 1.5, 'Snacks & Sweets', 'Peanut Butter Chocolate Bar.jpeg'),
(14, 'Chocolate Peanut Cup', 1.5, 'Snacks & Sweets', 'Chocolate Peanut Butter Cups.jpeg'),
(15, 'Almond & Honey Bar', 1.5, 'Snacks & Sweets', 'Almond & Honey Bar.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_ID` int(10) NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `u_email` varchar(250) NOT NULL,
  `u_password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_ID`, `u_name`, `u_email`, `u_password`) VALUES
(1, 'waseem', 'waseem@gmail.com', '123'),
(2, 'wswww', 'swsws@gmaiil.com', '123'),
(4, 'waseem', 'waseeeem@gmail.com', '12222'),
(5, 'fadi9', 'fadimlak00@gmail.com', '258963'),
(6, 'fadi', 'fadi232@gmial.com', '123'),
(7, 'sara', 'saraa@gmail.com', '123'),
(8, 'abdala', 'abdla123@gmail', '123'),
(11, 'fadi', 'wmalak@gmail.com', '123'),
(18, 'waseem', 'waseem1222@gmail.com', 'asdfghjklaaaaaaaa'),
(50, 'TEST', 'TEST@gggmail.com', 'hello'),
(20, 'fadi', 'mlakwaseem@gmail.com', '12359789754'),
(21, 'noor firas', 'noor@gmail.com', 'noorfiras2001'),
(22, 'yarashahadeh', 'yarashahadeh2002@gmail.com', 'yara2002*'),
(27, 'rasheed ayman ', 'rasheed@gmail.com', 'ras1111'),
(30, 'sarahissa', 'sarrah.alqaisi@gmail.com', 'sdasdasdsadsada'),
(32, 'noorkhalil', 'noorkhalil@gmail.com', 'ilovesarah101'),
(44, 'omaralfawareh', 'omar@gmail.com', 'omarrrrr123'),
(39, 'laith abusada', 'laith@gmail.com', 'laithabu123'),
(45, 'sarahalqaisi', 'sa@gmail.com', 'sarahissa12'),
(43, 'sarahissa', 'sarrah.alqaisi@gmail.com', 'dfsefefefefe'),
(48, 'yara', 'ya@gmail.com', 'yaraaaa123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `P_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

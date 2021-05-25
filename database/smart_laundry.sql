-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 11:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fullname`, `phone`, `dob`, `address`, `email`, `username`, `password`, `id`) VALUES
('Shafin Ahmed', '01515652926', '1998-01-15', 'Merul Badda', 'shafinbro@gmail.com', 'ShafinNaf', '123456', 5),
('Jahid Taki', '01957320224', '2002-05-04', 'Bogra', 'jahidbro@takibro.com', 'JB', '1234', 6),
('Taki Tahmid', '01458558565', '1996-12-08', 'Bogra', 'takibro@takibro.com', 'hittertaki', '123456', 9),
('Nowrin Mumtaz', '1715454454', '1998-06-12', 'Oman', 'mumtazbro@gmail.com', 'mumtaz', '111111', 10),
('Fariha Nowshin', '0185457858', '2000-12-12', 'Shantinagar', 'pasa_nowshin@gmail.com', 'SpankMyAss', '222222', 11),
('Jakiul Habib', '5400014411', '1996-02-12', 'Los Angeles', 'jakiulbro@gmail.com', 'JakiulBhai', '111111', 12),
('Konika Gotti', '0195732022', '2025-12-12', 'AIUB', 'gotti@gmail.com', 'gotti@amazingbody.com', '555555', 13),
('Hossain Mohammed Mothers', '0154588585', '1998-12-14', 'Mohammadpur', 'mothers@gmail.com', 'hmammar', '111111', 15);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `order_type` varchar(20) NOT NULL,
  `total_price` int(10) NOT NULL,
  `total_qty` int(10) NOT NULL,
  `shop_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `name`, `order_type`, `total_price`, `total_qty`, `shop_name`) VALUES
(106, 'hmammar', 'Shirt', 'Dry Wash', 20, 1, 'toplaundry'),
(107, 'hmammar', 'Shirt', 'Dry Wash', 20, 1, 'toplaundry'),
(108, 'hmammar', 'Shirt', 'Dry Wash', 20, 1, 'wareslaundry'),
(109, 'hmammar', 'Shirt', 'Iron', 10, 1, 'wareslaundry'),
(110, 'hmammar', 'Shirt', 'Dry Wash', 20, 1, 'mababardowa'),
(111, 'hmammar', 'Shirt', 'Iron', 10, 1, 'mababardowa');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `username`, `address`, `logo`, `phone`, `password`) VALUES
(5, 'malaundry', 'abcd', 'Ma-38jjfh', '898234.png', '+8801794911274', '4875'),
(8, 'topclean', 'topclean', 'gulshan', '745931.png', '01957320224', '1234'),
(15, 'mababardowa', 'mababardowa', 'bashabo', '268447.jpg', '01957320224', '9437'),
(17, 'wareslaundry', 'WL', 'Mohammadpur', '997662.jpg', '01957320224', '5939');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `order_type` varchar(100) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `order_type`, `price`) VALUES
(3, 'Shirt', 'Dry Wash', 20),
(4, 'Shirt', 'Iron', 10),
(6, 'Pant', 'Dry Wash', 20),
(7, 'Pant', 'Iron', 10),
(8, 'Saree', 'Dry Wash', 100),
(9, 'Saree', 'Iron', 50),
(10, 'Sherwani', 'Dry Wash', 250),
(11, 'Sherwani', 'Iron', 100),
(12, 'Carpet', 'Wash', 1000),
(13, 'Suit', 'Dry Wash', 250),
(14, 'Suit', 'Iron', 100),
(15, 'Curtain', 'Wash', 150),
(16, 'Curtain', 'Iron', 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

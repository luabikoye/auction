-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 24, 2021 at 02:50 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(20) NOT NULL,
  `product_id` varchar(30) DEFAULT NULL,
  `product_name` varchar(20) DEFAULT NULL,
  `bidder_name` varchar(80) NOT NULL,
  `bidder_email` varchar(80) NOT NULL,
  `bidder_phone` varchar(20) NOT NULL,
  `bid_amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `product_id`, `product_name`, `bidder_name`, `bidder_email`, `bidder_phone`, `bid_amount`) VALUES
(1, '', '', 'Akerele John', 'akerelejohn6@gmail.com', '08130619499', '3000'),
(2, '', '', 'Akerele John', 'akerelejohn6@gmail.com', '08130619499', '100000'),
(3, '', '', 'Akerele John', 'akerelejohn6@gmail.com', '08130619499', '123'),
(4, '', '', 'Akerele John', 'akerelejohn6@gmail.com', '08130619499', '123'),
(5, '', '', 'Akerele John', 'akerelejohn6@gmail.com', '08130619499', '1212'),
(6, '', '', 'Akerele John', 'akerelejohn6@gmail.com', '08130619499', '5000'),
(7, '', '', 'Akerele John', 'akerelejohn6@gmail.com', '08130619499', '100000'),
(8, '', '', 'Akerele John', 'akerelejohn6@gmail.com', '08130619499', '100000'),
(9, '', '', 'Akerele John', 'akerelejohn6@gmail.com', '08130619499', '100000'),
(10, '', '', 'Akerele John', 'akerelejohn6@gmail.com', '08130619499', '100000'),
(11, '', '', 'Akerele John', 'akerelejohn6@gmail.com', '08130619499', '100000'),
(12, '', '', 'Akerele John', 'akerelejohn6@gmail.com', '08130619499', '100000'),
(13, '', '', 'Akerele John', 'akerelejohn6@gmail.com', '08130619499', '123'),
(14, '', '', 'Akerele John', 'akerelejohn6@gmail.com', '08130619499', '5000'),
(15, '', '', 'Akerele John', 'akerelejohn6@gmail.com', '08130619499', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(1, 'administrator', 'akerelejohn6@gmail.com', 'Akerele@1231'),
(2, 'samuel', 'Samuel@gmail.com', 'Akerele@1231');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `description` blob NOT NULL,
  `image` varchar(100) NOT NULL,
  `deadline` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `image`, `deadline`) VALUES
(1, 'Website Services', 0x4c6f72656d20697073756d20646f6c6f722073697420616d65742c20636f6e73656374657475722061646970697363696e6720656c69742e20416d6574206e756c6c61206e6f6e2076656c2061726375206e65632e2050656c6c656e746573717565207072657469756d20636f6e64696d656e74756d2070656c6c656e746573717565206567657420717569732076656c20696e74656765722074696e636964756e742e, 'website services_pic.jpg', '2021-09-17 02:09:00.000000'),
(2, 'Plumbing Services', 0x506c756d62696e67205365727669636573, 'plumbing services_pic7.png', '2021-09-21 19:49:00.000000'),
(3, 'Laptop Computers', 0x4c6170746f7020436f6d707574657273, 'laptop computers_pic8.png', '2021-09-21 19:49:00.000000'),
(4, 'Air Conditioners', 0x41697220436f6e646974696f6e657273, 'air conditioners_pic9.png', '2021-09-21 19:49:00.000000'),
(5, 'Imported Cars', 0x4c6f72656d20697073756d20646f6c6f722073697420616d65742c20636f6e73656374657475722061646970697363696e6720656c69742e20416d6574206e756c6c61206e6f6e2076656c2061726375206e65632e2050656c6c656e746573717565207072657469756d20636f6e64696d656e74756d2070656c6c656e746573717565206567657420717569732076656c20696e74656765722074696e636964756e742e, 'imported cars_pic3.png', '2021-09-16 02:16:00.000000'),
(6, 'Household Furnitures', 0x486f757365686f6c64204675726e697475726573, 'household furnitures_pic2.png', '2021-09-21 19:49:00.000000'),
(7, 'Mattress', 0x4d61747472657373, 'mattress_pic4.png', '2021-09-21 19:49:00.000000'),
(8, 'Luxury Shoes', 0x4c75787572792053686f6573, 'luxury shoes_pic5.png', '2021-09-21 19:49:00.000000'),
(9, 'Logistics Bikes', 0x4c6f676973746963732042696b6573, 'logistics bikes_pic6.png', '2021-09-21 19:49:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

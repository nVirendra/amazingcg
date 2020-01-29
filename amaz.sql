-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2020 at 08:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `shop_id` int(11) NOT NULL,
  `shop` text NOT NULL,
  `owner` text NOT NULL,
  `number` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `c_password` varchar(255) NOT NULL,
  `services` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `shop`, `owner`, `number`, `email`, `password`, `c_password`, `services`, `address`) VALUES
(1, 'ram natural', 'ram', '9340709358', 'ram@gmail.com', '$2y$10$0CUy/K66s8m193WXNvsXBe.Q.1fvMc87WJVZeE4GyZ656mcBjGdlS', '$2y$10$ftzBpm.Gc39Lt3FRl/noyO2X49qWx6QMXOa7JVVBSRvMsBhBb2yBu', '', 'mowa'),
(2, '', '', '', '', '$2y$10$ud9UDBlPejf3GOs/FP205em9LK1bpQuC5NqNJwm2tcRl0V/Afycj.', '$2y$10$Y51d2XU4V32ZwemnuDONWuMh8CKX0QuYHkbb81bxf3xc5UistnQju', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2021 at 11:54 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16323129_store_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `items_tb`
--

CREATE TABLE `items_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `descryption` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items_tb`
--

INSERT INTO `items_tb` (`id`, `name`, `price`, `quantity`, `descryption`) VALUES
(4, 'Lays', 50, 500, 'description provides customers with details around features,'),
(5, 'Snacker', 60, 600, 'description provides customers with details around features,'),
(6, 'OyeHoye', 50, 1000, 'description provides customers with details around features,'),
(7, 'Lazy', 100, 1000, 'description provides customers with details around features,'),
(8, 'Lazy', 100, 1000, 'description provides customers with details around features,'),
(12, 'Test', 50, 500, 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items_tb`
--
ALTER TABLE `items_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items_tb`
--
ALTER TABLE `items_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 07:56 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `operationcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_crud`
--

CREATE TABLE `tbl_crud` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_crud`
--

INSERT INTO `tbl_crud` (`id`, `name`, `category`, `size`, `quantity`, `price`, `image`) VALUES
(8, 'Acer', 'Laptop', ' inch', 20, 50000, 'A000005-Arduino-Nano-2tri - Copy.jpg'),
(10, 'Acer', 'Laptop', ' inch', 20, 50000, 'A000005-Arduino-Nano-2tri - Copy.jpg'),
(11, 'Acer', 'Laptop', ' inch', 20, 50000, 'A000005-Arduino-Nano-2tri - Copy.jpg'),
(12, 'Acer', 'Laptop', ' inch', 20, 50000, 'A000005-Arduino-Nano-2tri - Copy.jpg'),
(15, 'Acer', 'Laptop', ' inch', 20, 50000, 'A000005-Arduino-Nano-2tri - Copy.jpg'),
(17, 'Tie', 'school', 'small', 12, 11, 'images (1).jpg'),
(18, 'hhh', 'jhgkg', 'hjj', 77, 88, 'images (1).png'),
(19, 'hhh', 'jhgkg', 'hjj', 77, 88, 'images (1).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_crud`
--
ALTER TABLE `tbl_crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_crud`
--
ALTER TABLE `tbl_crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

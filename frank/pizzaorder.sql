-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 06:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frank`
--

-- --------------------------------------------------------

--
-- Table structure for table `pizzaorder`
--

CREATE TABLE `pizzaorder` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `toppings` varchar(100) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pizzaorder`
--

INSERT INTO `pizzaorder` (`id`, `firstname`, `lastname`, `address`, `toppings`, `comments`) VALUES
(1, 'Jures', 'Valmomo', 'dsa@asdas', 'on', 'asdasdzxcxz'),
(2, 'Jures', 'Valmomo', 'dsa@asdas', 'on', 'asdasdzxcxz'),
(3, 'dasd', 'asdsad', 'sadasdasda', 'Mushrooms[]', 'dsadzxcxzc'),
(4, 'sdad', 'asdsad', 'asdas', 'Array', 'asdxczx c '),
(5, 'sdzxcxzc', 'asdsad', 'cxzcx', 'Cheese,Pepperoni', 'asdzxcxzcreqw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pizzaorder`
--
ALTER TABLE `pizzaorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pizzaorder`
--
ALTER TABLE `pizzaorder`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

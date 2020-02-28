-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 04:02 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samir`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `personal_id` int(7) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `brand` varchar(1) NOT NULL,
  `email_list_flag` int(11) NOT NULL,
  `ship` varchar(100) NOT NULL,
  `sail_date` date NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`personal_id`, `first_name`, `last_name`, `email_address`, `brand`, `email_list_flag`, `ship`, `sail_date`, `comments`) VALUES
(3124, 'asd asd', 'asd', 'asdasd@as.com', 'C', 1, 'ship2b', '2020-02-20', 'asd'),
(1231, 'aad', 'asd', 'cr@eca-am.de', 'C', 1, 'ship1a', '2020-01-29', 'asd'),
(1234567, '123', 'asd', 'asdasd@as.com', 'C', 1, 'ship1a', '2020-01-30', 'asd'),
(2345678, 'asd asd', 'ad asd', 'samirbenzada@gmail.com', 'R', 1, 'ship1a', '2020-01-29', 'asd'),
(3456789, 'asd', 'asd', 'cr@eca-am.de', 'Z', 0, 'ship2a', '2020-02-14', 'asd'),
(1234569, 'asd', 'asd', 'asdasd@as.com', 'Z', 1, 'ship2a', '2020-02-12', 'asd'),
(1234890, 'asd asd', 'asd', 'asdasd@as.com', 'Z', 1, 'ship1a', '2020-01-31', 'asd'),
(1231231, 'asd asd', 'asd', 'cr@eca-am.de', 'C', 1, 'ship1b', '2020-02-29', 'asd'),
(1234123, 'asd asd', 'asd', 'samirbenzadaweb@gmail.com', 'C', 1, 'ship1a', '2020-02-29', 'asd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

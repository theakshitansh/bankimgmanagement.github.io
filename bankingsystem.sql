-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 09:09 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Akshit ansh', 'akshitansh711@gmail.com', '10000'),
(2, 'akash gupta', 'akashgupta@gmail.com', '3000'),
(3, 'shambhav kumar', 'sam.jha@gmail.com', '73000'),
(4, 'shubham khuntia', 'shubhamkhuntia@gmail.com', '70000'),
(5, 'saurav kumar', 'sauravkumar@gmail.com', '17000'),
(6, 'shashank mishra', 'sashankmishra@gmail.com', '5000'),
(7, 'shlok ray', 'shlokray@gmail.com', '9500'),
(8, 'prince choudhary', 'princechoudhary@gmail.com', '6000'),
(9, 'gopal gupta', 'gopalgupta@gmail.com', '26500'),
(10, 'saptarshi mondal', 'saptarshimondal@gmail.com', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sl. no.` int(5) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `date and time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sl. no.`, `sender`, `receiver`, `amount`, `date and time`) VALUES
(1, 'Akshit ansh', 'saurav kumar', 1000, '2021-08-07 15:27:18.000000'),
(2, 'akash gupta', 'shashank mishra', 3000, '2021-08-06 12:58:54.000000'),
(3, 'shubham khuntia', 'prince chaudhary', 7000, '2021-08-06 20:59:27.000000'),
(4, 'gopal gupta', 'saptarshi mondal', 3000, '2021-08-07 00:00:24.000000'),
(5, 'Akshit ansh', 'shashank mishra', 3000, '2021-08-05 00:01:25.000000'),
(6, 'akash gupta', 'shambhav kumar', 500, '2021-08-06 08:01:54.000000'),
(7, 'Akshit ansh', 'gopal gupta', 2000, '0000-00-00 00:00:00.000000'),
(8, 'shambhav kumar', 'Akshit ansh', 2000, '0000-00-00 00:00:00.000000'),
(9, 'Akshit ansh', 'gopal gupta', 5000, '0000-00-00 00:00:00.000000'),
(10, 'shambhav kumar', 'Akshit ansh', 5000, '0000-00-00 00:00:00.000000'),
(11, 'gopal gupta', 'shlok ray', 500, '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sl. no.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sl. no.` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

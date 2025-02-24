-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2024 at 10:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amazon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `fname`, `lname`, `email`, `pass`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `uid` int(30) DEFAULT NULL,
  `pid` int(30) DEFAULT NULL,
  `quantity` int(30) DEFAULT NULL,
  `isOrdered` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`uid`, `pid`, `quantity`, `isOrdered`, `date`, `time`) VALUES
(11, 309, 1, 0, '0000-00-00', '00:00:00'),
(11, 357, 5, 0, '0000-00-00', '00:00:00'),
(2, 372, 1, 1, '2022-10-01', '14:29:48'),
(2, 384, 1, 1, '2022-10-01', '14:29:48'),
(2, 380, 1, 1, '2022-10-01', '14:29:48'),
(2, 372, 1, 1, '2022-10-01', '14:54:19'),
(2, 385, 1, 1, '2022-10-01', '14:54:19'),
(2, 384, 1, 1, '2022-10-01', '14:54:19'),
(2, 372, 1, 0, '0000-00-00', '00:00:00'),
(2, 382, 1, 0, '0000-00-00', '00:00:00'),
(3, 396, 0, 0, '0000-00-00', '00:00:00'),
(3, 401, 1, 1, '2024-09-16', '15:21:51'),
(4, 401, 1, 1, '2024-09-16', '15:33:30'),
(4, 400, 1, 1, '2024-09-16', '15:33:30'),
(5, 407, 2, 0, '0000-00-00', '00:00:00'),
(5, 400, 1, 0, '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `faq` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `msg`, `faq`, `date`, `time`, `answer`) VALUES
(11, 'abc', 'abc@gmail.com', 'Products is nice', 0, '2017-06-26', '14:02:01', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(30) NOT NULL,
  `type` int(10) NOT NULL,
  `location` varchar(120) NOT NULL,
  `price` int(30) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `type`, `location`, `price`, `name`) VALUES
(407, 2, 'images/Womens/J5.jpg', 350, 'Leggins'),
(406, 6, 'images//1.jpg', 199, 'Clip'),
(405, 5, 'images//c1.jpg', 25000, 'Computer'),
(404, 4, 'images/gifts/F1.jpg', 15000, 'Fridge'),
(403, 3, 'images//H4.jpg', 420, 'Bags'),
(402, 3, 'images//H1.jpg', 350, 'Bags'),
(401, 3, 'images//Wa5.jpg', 600, 'Watch'),
(400, 3, 'images//Wa1.jpg', 745, 'Watch'),
(399, 2, 'images/Womens/K1.jpg', 410, 'Kurti Set'),
(398, 2, 'images/Womens/C2.jpg', 560, 'Chudithar'),
(393, 2, 'images/Womens/J1.jpg', 699, 'Jean'),
(397, 2, 'images/Womens/J2.jpg', 720, 'Jeans'),
(396, 1, 'images/Mens/6.jpg', 3500, 'Kurti Set'),
(395, 1, 'images/Mens/2.jpg', 895, 'Cotton Formals'),
(394, 1, 'images/Mens/1.jpg', 999, 'Full Sleve');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `uname` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `image` varchar(100) DEFAULT 'images/users/3.jpg'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `fname`, `lname`, `email`, `pass`, `image`) VALUES
(1, 'abc', 'a', 'c', 'abc@gmail.com', 'abc', ''),
(2, 'xyz', 'xyz', 'x', 'xyz@gmail.com', 'xyz', ''),
(3, 'aaa', 'aaa', 'a', 'aaa@gmail.com', '123', ''),
(4, 'new', 'new', 'b', 'new@gmail.com', '123', ''),
(5, 'shalini', 'shalini', 'a', 'shalini@gmail.com', '12345', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=408;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

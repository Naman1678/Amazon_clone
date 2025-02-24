-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 12:08 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plant`
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(2, 382, 1, 0, '0000-00-00', '00:00:00');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `type`, `location`, `price`, `name`) VALUES
(372, 1, 'images/plants/Money Plant_1.jpg', 400, 'Money Plant_1'),
(373, 1, 'images/plants/Money Plant_2.jpg', 300, 'Money Plant_2'),
(374, 1, 'images/plants/Peace lilly_1.jpg', 250, 'Peace Lily_1'),
(375, 1, 'images/plants/Peace lily4.jpg', 300, 'Peace Lily_2'),
(376, 1, 'images/plants/PeaceLily_2.jpg', 300, 'Peace Lily_3'),
(377, 1, 'images/plants/peace-lily3.jpg', 350, 'Peace Lily_4'),
(378, 1, 'images/plants/Rose plant_1.jpg', 250, 'Rose plant_1'),
(379, 1, 'images/plants/Rose plant_2.jpg', 400, 'Rose plant_2'),
(380, 1, 'images/plants/Rose plant_3.jpg', 100, 'Rose plant_3'),
(381, 1, 'images/plants/Rose_4.jpg', 250, 'Rose plant_4'),
(382, 1, 'images/plants/Rose_5.jpg', 250, 'Rose plant_5'),
(383, 1, 'images/plants/Rose_6.jpg', 220, 'Rose plant_6'),
(384, 1, 'images/plants/Rose_7.jpg', 240, 'Rose plant_7'),
(385, 1, 'images/plants/Sanke plant.jpg', 260, 'Sanke plant_1'),
(386, 1, 'images/plants/Snake 1.jpg', 210, 'Sanke plant_2'),
(387, 1, 'images/plants/Snake 3.jpg', 215, 'Sanke plant_3');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `fname`, `lname`, `email`, `pass`, `image`) VALUES
(1, 'abc', 'a', 'c', 'abc@gmail.com', 'abc', ''),
(2, 'xyz', 'xyz', 'x', 'xyz@gmail.com', 'xyz', '');

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=388;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

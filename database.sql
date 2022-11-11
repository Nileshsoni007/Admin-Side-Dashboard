-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 12:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mywebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` int(6) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Product_Price` int(6) NOT NULL,
  `Product_Company` varchar(30) NOT NULL,
  `Product_Category` varchar(30) NOT NULL,
  `Product_Image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Product_Name`, `Product_Price`, `Product_Company`, `Product_Category`, `Product_Image`) VALUES
(1, 'Laptop', 1000, 'Lenovo', 'Electronic', 'images.jpg'),
(2, 'Mouse', 500, 'Dell', 'Electronic', 'mouse.jpg'),
(3, 'Mobile', 1000, 'Samsung', 'MobilePhone', 'mobile.jpg'),
(4, 'Laptop', 1000, 'Lenovo', 'Electronic', 'images.jpg'),
(5, 'Mouse', 3545, 'Dell', 'Electronic', 'mouse.jpg'),
(7, 'Keyboard', 1000, 'dell', 'Electronic', 'keybord.jpg'),
(8, 'Watch', 1000, 'Apple', 'Watch', 'watch.jpg'),
(9, 'Laptop', 5000, 'Apple', 'Laptop', 'apple.jpg'),
(10, 'Goggles', 500, 'Rayban', 'Googles', 'gogglws.jpg'),
(11, 'Laptop', 1000, 'Lenovo', 'Laptop', 'image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Reg_id` int(6) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `EmailId` varchar(30) DEFAULT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `MobileNo` int(10) DEFAULT NULL,
  `Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Reg_id`, `Username`, `Password`, `EmailId`, `FirstName`, `LastName`, `MobileNo`, `Address`) VALUES
(1, 'Nilesh555', '555', 'nilesh55@gmail.com', 'Soni', 'Nilesh', 2147483647, 'Rajkot'),
(2, 'pritank100', '100', 'priyank@gmail.com', 'Rathod', 'Priyank', 1233654210, 'Rajkot'),
(3, 'satish222', '222', 'satish@gmail.com', 'koringa', 'Satish', 2147483647, 'R'),
(4, '', '121', 'yagnik121@gmail.com', 'Pithva', 'Yagnik', 990, 'Mumbai'),
(5, 'parth007', '7', 'parth007@gmail.com', 'Vinchi', 'Parth', 2147483647, 'Vakaner'),
(6, 'kalu1234', '1234', 'kalu@gmail.com', 'kalu', 'pipaliya', 1234567891, 'Mumbai'),
(7, 'mansi111', '111', 'mansi@gmail.com', 'mansi', 'kansagra', 1234567891, 'Rajkot'),
(8, 'satish222', '123', 'soham@gmail.com', 'Sojitra', 'satish', 2147483647, 'Surat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Reg_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

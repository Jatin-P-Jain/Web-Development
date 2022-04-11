-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 03:56 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--
CREATE DATABASE IF NOT EXISTS `shopping` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shopping`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ref_id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(10000) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` mediumint(100) NOT NULL,
  `phone` bigint(200) NOT NULL,
  `toa` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ref_id`, `name`, `address`, `city`, `state`, `pin`, `phone`, `toa`) VALUES
(1, 'Jatin', '13,Soldevanahalli', 'Bengaluru', 'Karnataka', 560107, 9636245681, 'Home'),
(2, 'Anjali', '13,Soldevanahalli,Bengaluru,Karnataka', 'Bengaluru', 'Karnataka', 560107, 9636245681, 'Office'),
(3, 'Jatin', '13,Soldevanahalli', 'Bengaluru', 'Karnataka', 560107, 9636245681, 'Home'),
(4, '', '', '', '', 0, 0, ''),
(5, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(6, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(7, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(8, 'Mona', 'Temple road', 'Bangalore ', 'Acharya Institute', 560107, 9402990100, 'Office'),
(9, 'Mona', 'Temple road', 'Bangalore', 'Acharya Institute', 560107, 9402990100, 'Home'),
(10, 'Anushka', 'Ornate hill', 'Guwahati', 'Assam', 781034, 8636246518, 'Home'),
(11, 'Mun', 'Ornate hill', 'Guwahati', 'Assam', 781034, 9402955045, 'Home'),
(12, 'Minika', 'Mlv pg, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(13, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(14, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(15, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(16, 'akshi', 'Mlv pg, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(17, 'akshi', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(18, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(19, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(20, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(21, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(22, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(23, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(24, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(25, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(28, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(29, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(30, 'Anushka', 'Ornate hill', 'Guwahati', 'Assam', 781034, 8636246518, 'Home');

-- --------------------------------------------------------

--
-- Stand-in structure for view `highestorder`
-- (See below for the actual view)
--
CREATE TABLE `highestorder` (
`name` varchar(500)
,`phone` bigint(200)
,`type` varchar(100)
,`size` varchar(10)
,`amount` int(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `ref_id` int(200) NOT NULL,
  `prod_id` bigint(200) NOT NULL,
  `price` int(200) NOT NULL,
  `amount` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`ref_id`, `prod_id`, `price`, `amount`) VALUES
(9, 1, 799, 943),
(17, 2, 299, 353),
(6, 3, 599, 707),
(2, 4, 450, 531),
(1, 5, 950, 1121),
(18, 6, 599, 707),
(7, 8, 999, 1179),
(14, 9, 999, 1179),
(3, 10, 249, 294),
(5, 12, 670, 791),
(8, 13, 450, 531),
(11, 14, 500, 590),
(10, 15, 700, 826),
(13, 23, 299, 353);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `sell_id` bigint(100) NOT NULL,
  `prod_id` bigint(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(10) NOT NULL,
  `cost` mediumint(100) NOT NULL,
  `count` int(10) NOT NULL,
  `gender` varchar(1000) NOT NULL,
  `img` varbinary(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`sell_id`, `prod_id`, `name`, `type`, `size`, `cost`, `count`, `gender`, `img`) VALUES
(1, 1, 'Blue Jeans', 'jeans', 'Small', 599, 0, 'Male', 0x2e2f7265736f7572636573322f696d67322f75706c6f6164732f6a322e6a666966),
(1, 2, 'Blue Jeans', 'jeans', 'Small', 599, 10, 'Male', 0x2e2f7265736f7572636573322f696d67322f75706c6f6164732f6a322e6a666966),
(1, 3, 'jeans', 'jeans', 'Small', 899, 5, 'Female', 0x2e2f7265736f7572636573322f696d67322f75706c6f6164732f776a312e6a706567),
(1, 4, 'Blue Denim Shirt', 'shirt', 'Large', 575, 20, 'Male', 0x2e2f7265736f7572636573322f696d67322f75706c6f6164732f342e6a7067),
(1, 16, 'Blue Jeans', 'jeans', 'Small', 999, 10, 'Female', 0x2e2f7265736f7572636573322f696d67322f75706c6f6164732f776a312e6a706567),
(13, 10, 'Men Cotton Shirt', 'shirt', 'Large', 750, 10, 'Male', 0x2e2f7265736f7572636573322f696d67322f75706c6f6164732f312e6a7067),
(13, 11, 'Blue jeans', 'jeans', 'Small', 999, 8, 'Female', 0x2e2f7265736f7572636573322f696d67322f75706c6f6164732f776a322e6a706567),
(13, 12, 'Green T-Shirt', 'TShirt', 'Small', 250, 10, 'Male', 0x2e2f7265736f7572636573322f696d67322f75706c6f6164732f74322e6a7067),
(13, 13, 'Women cotton kurti', 'kurti', 'Large', 325, 10, 'Female', 0x2e2f7265736f7572636573322f696d67322f75706c6f6164732f6b74342e6a706567),
(13, 14, 'Blue Checked top', 'top', 'Large', 560, 5, 'Female', 0x2e2f7265736f7572636573322f696d67322f75706c6f6164732f7774322e6a7067),
(13, 15, 'Black Jeans', 'jeans', 'Small', 1024, 20, 'Male', 0x2e2f7265736f7572636573322f696d67322f75706c6f6164732f6a332e6a666966),
(15, 5, 'Checked Kurti', 'kurti', 'Medium', 325, 10, 'Female', 0x2e2f7265736f7572636573322f696d67322f75706c6f6164732f6b74322e6a706567),
(15, 7, 'White t-shirt', 'TShirt', 'Medium', 250, 5, 'Male', 0x2e2f7265736f7572636573322f696d67322f75706c6f6164732f74312e6a666966),
(15, 8, 'Women Top', 'top', 'Small', 455, 7, 'Female', 0x2e2f7265736f7572636573322f696d67322f75706c6f6164732f7774342e6a706567),
(15, 9, 'Women layered kurti', 'kurti', 'Small', 655, 5, 'Female', 0x2e2f7265736f7572636573322f696d67322f75706c6f6164732f6b74332e6a666966);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpass` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`name`, `email`, `password`, `cpass`, `mobile`, `city`) VALUES
('Anjali Sinha', 'anjali@gmail.com', '123', '123', 9402990169, 'Bengaluru'),
('Anjali Sinha', 'anjali@gmail.com', '123', '123', 9402990169, 'Bengaluru'),
('anjali', 'anjali123@gmail.com', '123', '123', 32564789, 'Bengaluru'),
('Scott', 'scott123@gmail.com', '1234', '1234', 7788994450, 'Bengaluru'),
('Jay', 'jay123@gmail.com', '456', '456', 7788994450, 'Mumbai'),
('Anushka Sinha ', 'anu123@gmail.com', '1607', '1607', 8636246518, 'Bengaluru'),
('Mun', 'Mun24@gmail.com', '789', '789', 940295504544444, 'Bengaluru'),
('Anushka', 'anjali@gmail.com', '123', '123', 8636246518, 'Bengaluru');

--
-- Triggers `seller`
--
DELIMITER $$
CREATE TRIGGER `inc` AFTER INSERT ON `seller` FOR EACH ROW INSERT INTO sellernew VALUES(null,new.name,new.email,new.password,new.cpass,new.mobile,new.city)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sellernew`
--

CREATE TABLE `sellernew` (
  `sell_id` bigint(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpass` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellernew`
--

INSERT INTO `sellernew` (`sell_id`, `name`, `email`, `password`, `cpass`, `mobile`, `city`) VALUES
(1, 'Anjali Sinha', 'anjali@gmail.com', '123', '123', 9402990169, 'Bengaluru'),
(10, 'Anjali Sinha', 'anjali@gmail.com', '123', '123', 9402990169, 'Bengaluru'),
(11, 'anjali', 'anjali123@gmail.com', '123', '123', 32564789, 'Bengaluru'),
(12, 'Scott', 'scott123@gmail.com', '1234', '1234', 7788994450, 'Bengaluru'),
(13, 'Jay', 'jay123@gmail.com', '456', '456', 7788994450, 'Mumbai'),
(14, 'Anushka Sinha ', 'anu123@gmail.com', '1607', '1607', 8636246518, 'Bengaluru'),
(15, 'Mun', 'Mun24@gmail.com', '789', '789', 940295504544444, 'Bengaluru'),
(16, 'Anushka', 'anjali@gmail.com', '123', '123', 8636246518, 'Bengaluru');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `cust_id` bigint(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`cust_id`, `name`, `email`, `password`, `phone`, `gender`) VALUES
(1, 'Jatin', 'jatinbittu13@gmail.com', '123', 9636245681, 'Male'),
(2, 'Anjali', 'anjali27@gmail.com', '789', 9402990169, 'Female'),
(3, 'xyz', 'xyz@gmail.com', '456', 9402299123, 'Female'),
(4, 'Anjali Sinha', 'anjali@gmail.com', '1234', 9402990169, 'Female'),
(5, 'Anjali Sinha', 'anjali@gmail.com', '1234', 9402990169, 'Female'),
(6, 'james', 'james@gmail.com', '789', 9636245688, 'Male'),
(7, 'Mona', 'mona123@gmail.com', '12345', 7889954120, 'Female'),
(8, 'Anushka', 'Anushka8@gmail.com', '123', 8636246518, 'Female'),
(9, 'Mun', 'Mun24@gmail.com', '789', 9402955045, 'Female'),
(10, 'Minika', 'Minika213@gmail.com', '852', 940885500, 'Female'),
(11, 'Anushka', 'anjali@gmail.com', '123', 8636246518, 'Female');

-- --------------------------------------------------------

--
-- Structure for view `highestorder`
--
DROP TABLE IF EXISTS `highestorder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `highestorder`  AS  select `c`.`name` AS `name`,`c`.`phone` AS `phone`,`p`.`type` AS `type`,`p`.`size` AS `size`,`i`.`amount` AS `amount` from ((`customers` `c` join `products` `p`) join `invoices` `i`) where ((`c`.`ref_id` = `i`.`ref_id`) and (`i`.`prod_id` = `p`.`prod_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`sell_id`,`prod_id`);

--
-- Indexes for table `sellernew`
--
ALTER TABLE `sellernew`
  ADD PRIMARY KEY (`sell_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sellernew`
--
ALTER TABLE `sellernew`
  MODIFY `sell_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `a` FOREIGN KEY (`sell_id`) REFERENCES `sellernew` (`sell_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

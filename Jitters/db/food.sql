-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 03:57 AM
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
-- Database: `food`
--
CREATE DATABASE IF NOT EXISTS `food` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `food`;

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `cust_id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `pin` mediumint(200) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `toa` varchar(20) NOT NULL DEFAULT 'Office'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`cust_id`, `name`, `address`, `city`, `state`, `pin`, `phone`, `toa`) VALUES
(19, 'Jatin', '13,Soldevanahalli', 'Bengaluru', 'Karnataka', 560107, 9636245681, 'Home'),
(27, 'Anjali', '13,abc street', 'Mangalore', 'Karnataka', 123456, 9402990169, 'Home'),
(26, 'Jatin', '13,Soldevanahalli', 'Bengaluru', 'Karnataka', 560107, 9636245681, 'Home'),
(26, 'Jatin', '13,Soldevanahalli', 'Bengaluru', 'Karnataka', 560107, 9636245681, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Jatin prakash Jain', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(0, '', '', '', '', 0, 0, ''),
(0, '', '', '', '', 0, 0, ''),
(0, '', '', '', '', 0, 0, ''),
(0, '', '', '', '', 0, 0, ''),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(26, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home'),
(27, 'Anjali Sinha', 'Achit Nagar,near himalaya gym, Acharya Institutes of technol', 'Bangalore Rural', 'Acharya Institute', 560107, 9402990169, 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `cust_id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `quality` varchar(100) NOT NULL,
  `speed` int(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `msg` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`cust_id`, `name`, `quality`, `speed`, `source`, `msg`) VALUES
(19, 'Jatin', 'Good', 74, 'internet', 'Good :)'),
(27, 'Anjali', 'Excellent', 100, 'other', 'A Good Food Delivering App. '),
(26, 'Jatin', 'Good', 82, 'ad', 'Good :)');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `cust_id` int(200) NOT NULL,
  `total` bigint(200) NOT NULL,
  `vat` int(200) NOT NULL,
  `gtotal` bigint(200) NOT NULL,
  `coupon` varchar(100) DEFAULT NULL,
  `amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`cust_id`, `total`, `vat`, `gtotal`, `coupon`, `amount`) VALUES
(26, 900, 45, 945, '', 'â‚¹252'),
(26, 900, 45, 945, '', 'â‚¹252'),
(26, 900, 45, 945, '', 'â‚¹252'),
(26, 900, 45, 945, '', 'â‚¹252'),
(27, 840, 42, 882, 'OMNIFOOD10', 'â‚¹113.40'),
(27, 1188, 59, 1247, 'OMNIFOOD10', 'â‚¹113.40'),
(26, 240, 12, 252, '', 'â‚¹252'),
(26, 240, 12, 252, '', 'â‚¹252'),
(26, 240, 12, 252, '', 'â‚¹252'),
(26, 240, 12, 252, '', 'â‚¹252'),
(26, 240, 12, 252, '', 'â‚¹252'),
(26, 240, 12, 252, '', 'â‚¹252'),
(26, 240, 12, 252, '', 'â‚¹252'),
(26, 240, 12, 252, '', 'â‚¹252'),
(26, 240, 12, 252, '', 'â‚¹252'),
(26, 240, 12, 252, '', 'â‚¹252'),
(26, 240, 12, 252, '', 'â‚¹252'),
(26, 240, 12, 252, '', 'â‚¹252'),
(26, 0, 0, 0, NULL, ''),
(27, 258, 13, 271, 'OMNIFOOD10', 'â‚¹113.40'),
(27, 0, 0, 0, 'OMNIFOOD10', 'â‚¹113.40'),
(27, 120, 6, 126, 'OMNIFOOD10', 'â‚¹113.40');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE `kitchen` (
  `cust_id` int(200) NOT NULL,
  `item_no` bigint(100) NOT NULL,
  `prod_type` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `unit_price` int(100) NOT NULL,
  `price` int(200) NOT NULL,
  `order_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kitchen`
--

INSERT INTO `kitchen` (`cust_id`, `item_no`, `prod_type`, `product`, `quantity`, `unit_price`, `price`, `order_time`) VALUES
(19, 1, 'starter', 'Cheese Rolls', 1, 60, 60, '2018-11-14 20:24:33'),
(19, 2, 'bev', 'Chocolate Shake', 2, 40, 80, '2018-11-14 20:24:47'),
(22, 1, 'mc', 'Dosa', 2, 99, 198, '2018-11-15 15:29:17'),
(22, 2, 'des', 'Gulab Jamun', 1, 75, 75, '2018-11-15 15:29:31'),
(22, 1, 'des', 'Gulab Jamun', 1, 75, 75, '2018-11-15 15:32:33'),
(19, 1, 'mc', 'Dosa', 1, 99, 99, '2018-11-15 15:58:48'),
(19, 2, 'starter', 'Cheese Rolls', 1, 60, 60, '2018-11-16 11:21:06'),
(19, 3, 'starter', 'French Fries', 2, 60, 120, '2018-11-16 11:21:27'),
(24, 4, 'starter', 'Paneer Chilly', 1, 60, 60, '2018-11-16 11:28:28'),
(24, 5, 'bev', 'Chocolate Shake', 1, 40, 40, '2018-11-16 11:28:42'),
(25, 4, 'starter', 'French Fries', 2, 60, 120, '2018-11-25 14:14:56'),
(25, 5, 'bev', 'Chocolate Shake', 3, 40, 120, '2018-11-25 14:15:13'),
(19, 4, 'mc', 'Dosa', 1, 99, 99, '2018-11-30 13:50:43'),
(27, 1, 'mc', 'Aloo Matar', 1, 99, 99, '2018-11-30 16:05:50'),
(27, 2, 'des', 'Coconut Barfi', 3, 75, 225, '2018-11-30 16:06:00'),
(0, 1, 'mc', 'Dosa', 2, 99, 198, '2018-11-30 19:08:14'),
(26, 2, 'mc', 'Dosa', 2, 99, 198, '2018-11-30 19:13:04'),
(26, 3, 'des', 'Custurd', 4, 75, 300, '2018-11-30 19:13:26'),
(26, 2, 'mc', 'Idli Sambhar', 1, 99, 99, '2018-12-03 09:27:06'),
(26, 3, 'starter', 'French Fries', 2, 60, 120, '2018-12-03 09:27:17'),
(26, 2, 'mc', 'Dosa', 20, 99, 1980, '2019-10-11 21:59:28'),
(26, 3, 'starter', 'French Fries', 1, 60, 60, '2019-10-11 21:59:40'),
(26, 2, 'des', 'Gulab Jamun', 2, 75, 150, '2019-10-12 15:02:05'),
(26, 3, 'bev', 'Chocolate Shake', 3, 40, 120, '2019-10-12 15:02:38'),
(26, 4, 'mc', 'Biryani', 15, 99, 1485, '2019-10-12 15:03:19'),
(27, 2, 'mc', 'Dosa', 1, 99, 99, '2019-11-08 13:03:52'),
(27, 3, 'mc', 'Biryani', 5, 99, 495, '2019-11-08 13:04:07'),
(27, 2, 'mc', 'Dosa', 1, 99, 99, '2019-11-08 14:45:10'),
(27, 2, 'mc', 'Dosa', 2, 99, 198, '2019-11-08 15:34:32'),
(27, 3, 'starter', 'French Fries', 2, 60, 120, '2019-11-08 15:34:44'),
(27, 4, 'bev', 'Chocolate Shake', 1, 40, 40, '2019-11-08 15:34:54'),
(27, 2, 'starter', 'Cheese Rolls', 21, 60, 1260, '2019-11-13 16:35:58'),
(27, 3, 'starter', 'Cheese Rolls', 21, 60, 1260, '2019-11-13 21:31:30'),
(27, 2, 'starter', 'Cheese Rolls', 12, 60, 720, '2019-11-14 13:41:54'),
(26, 3, 'starter', 'Cheese Rolls', 15, 60, 900, '2019-11-14 15:12:46'),
(27, 3, 'starter', 'French Fries', 2, 60, 120, '2019-11-14 15:25:36'),
(27, 2, 'mc', 'Dosa', 12, 99, 1188, '2019-11-14 19:02:04'),
(26, 3, 'starter', 'French Fries', 4, 60, 240, '2019-11-14 19:55:15'),
(27, 3, 'starter', 'Cheese Rolls', 1, 60, 60, '2019-11-14 20:02:15'),
(27, 4, 'mc', 'Idli Sambhar', 2, 99, 198, '2019-11-14 20:02:35'),
(27, 2, 'starter', 'Cheese Rolls', 2, 60, 120, '2019-11-15 15:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `cust_id` int(200) NOT NULL,
  `item_no` bigint(100) NOT NULL,
  `prod_type` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `unit_price` int(100) NOT NULL,
  `price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`cust_id`, `item_no`, `prod_type`, `product`, `quantity`, `unit_price`, `price`) VALUES
(0, 1, 'mc', 'Dosa', 2, 99, 198);

--
-- Triggers `orders`
--
DELIMITER $$
CREATE TRIGGER `kitchen` AFTER INSERT ON `orders` FOR EACH ROW INSERT INTO kitchen
VALUES (new.cust_id,new.item_no,new.prod_type,new.product,new.quantity,new.unit_price,new.price,CURRENT_TIME)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(100) NOT NULL,
  `email` mediumtext NOT NULL,
  `pass` varchar(100) NOT NULL,
  `rpass` varchar(10000) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `pass`, `rpass`, `phone`) VALUES
('Anjali', 'anjali27@gmail.com', '2798', '2798', 9402990169),
('XYZ', 'jatin@123xyz.com', '000', '000', 9636245681),
('XYZ', 'xyz@sdf.com', '456', '456', 9636245681),
('XYZ', 'ghi@gmail.com', '000', '000', 9636245681),
('XYZ', 'kpkumarpratik@gmail.com', '789', '789', 9636245681),
('jinkle', 'stylusj@gmail.com', '1234', '1234', 999999999),
('ameya', 'ameya@gmil.com', '123', '123', 9636245681),
('XYZ', 'xyz@sdf.com', '000', '000', 9636245681),
('XYZ', 'xyz@sdf.com', '000', '000', 9636245681),
('soumiya', 'acb@gmai.com', '123', '123', 21654613546),
('Ishani', 'ishani@gmail.com', '12345', '12345', 9636245681),
('Jatin', 'jatinbittu13@gmail.com', '000', '000', 9636245681),
('Anjali', 'anjali27@gmail.com', '123', '123', 9636245681);

--
-- Triggers `signup`
--
DELIMITER $$
CREATE TRIGGER `generate_custid` BEFORE INSERT ON `signup` FOR EACH ROW INSERT INTO signupcid VALUES(null,new.name,new.email,new.pass,new.rpass,new.phone)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `signupcid`
--

CREATE TABLE `signupcid` (
  `cust_id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` mediumtext NOT NULL,
  `pass` varchar(100) NOT NULL,
  `rpass` varchar(10000) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signupcid`
--

INSERT INTO `signupcid` (`cust_id`, `name`, `email`, `pass`, `rpass`, `phone`) VALUES
(20, 'jinkle', 'stylusj@gmail.com', '1234', '1234', 999999999),
(21, 'ameya', 'ameya@gmil.com', '123', '123', 9636245681),
(22, 'XYZ', 'xyz@sdf.com', '000', '000', 9636245681),
(23, 'XYZ', 'xyz@sdf.com', '000', '000', 9636245681),
(24, 'soumiya', 'acb@gmai.com', '123', '123', 21654613546),
(25, 'Ishani', 'ishani@gmail.com', '12345', '12345', 9636245681),
(26, 'Jatin', 'jatinbittu13@gmail.com', '000', '000', 9636245681),
(27, 'Anjali', 'anjali27@gmail.com', '123', '123', 9636245681);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signupcid`
--
ALTER TABLE `signupcid`
  ADD PRIMARY KEY (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signupcid`
--
ALTER TABLE `signupcid`
  MODIFY `cust_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

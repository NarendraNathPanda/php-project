-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 03:38 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project php`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `country` varchar(200) NOT NULL,
  `state` varchar(15) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email_id`, `password`, `gender`, `date_of_birth`, `country`, `state`, `phone_number`, `image`, `status`) VALUES
(44, 'NARENDRA NATH PANDA', 'mr.narendranathpanda@gmail.com', '123456', 'male', '14/04/2000', 'india', 'west bengal', '7432828388', 'ramayana1.jpg', 1),
(45, 'NARENDRA NATH PANDA', 'narendranathpanda16@gmail.com', '000000', 'male', '07/02/2000', 'india', 'maharastra', '7586029980', '4azlKJM.jpg', 1),
(46, 'jio', 'jio@gmail.com', '000000', 'male', '15/10/2015', 'india', 'delhi', '8634333686', '1587367177phpFgrPMo.jpg', 1),
(47, 'somnath mondal', 'somnath@gmail.com', '696969', 'male', '11/12/13', 'egypt', 'west bengal', '8858562307', 'om.png', 1),
(48, 'NNP', 'nnp@gmail.com', '12345678', 'male', '14/04/2000', 'india', 'delhi', '7586029980', '0.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

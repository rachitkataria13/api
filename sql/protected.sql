-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2018 at 05:28 PM
-- Server version: 10.2.19-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chingani_bombitup`
--

-- --------------------------------------------------------

--
-- Table structure for table `protected`
--

CREATE TABLE `protected` (
  `id` int(4) NOT NULL,
  `number` varchar(11) NOT NULL,
  `name` varchar(65) NOT NULL,
  `message` text NOT NULL,
  `tvab` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `protected`
--

INSERT INTO `protected` (`id`, `number`, `name`, `message`, `tvab`) VALUES
(1, '7977296105', 'Rachit', 'is Permanently Protected! Please Stop Wasting Your Precious Time Trying To Bomb Rachit ', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `protected`
--
ALTER TABLE `protected`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `protected`
--
ALTER TABLE `protected`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

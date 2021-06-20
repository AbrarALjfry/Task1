-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 11:42 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task1`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `Motor1` int(180) NOT NULL,
  `Motor2` int(180) NOT NULL,
  `Motor3` int(180) NOT NULL,
  `Motor4` int(180) NOT NULL,
  `Motor5` int(180) NOT NULL,
  `Motor6` int(180) NOT NULL,
  `RUN` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`Motor1`, `Motor2`, `Motor3`, `Motor4`, `Motor5`, `Motor6`, `RUN`) VALUES
(90, 90, 90, 90, 90, 90, 0),
(135, 90, 4, 149, 50, 94, 1),
(135, 90, 4, 149, 50, 94, 1),
(35, 155, 29, 149, 115, 59, 1),
(89, 155, 116, 50, 35, 10, 0),
(162, 53, 161, 77, 130, 180, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

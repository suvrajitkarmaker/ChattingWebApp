-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 12:33 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chattingapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `userregi`
--

CREATE TABLE `userregi` (
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregi`
--

INSERT INTO `userregi` (`first_name`, `last_name`, `email`, `password`) VALUES
('Jannatul', 'ferdous', 'jannatul@gmail.com', 'jn'),
('Suvrajit', 'karmaker', 'suvrajitkarmaker2016@gmail.com', 'ss'),
('Tonmoy', 'Ahmed', 'tonmoy@gmail.com', 'tn'),
('Fahim', 'Mridha', 'fahim@gmail.com', 'fm');

-- --------------------------------------------------------

--
-- Table structure for table `usertime`
--

CREATE TABLE `usertime` (
  `email` varchar(200) NOT NULL,
  `last_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertime`
--

INSERT INTO `usertime` (`email`, `last_time`) VALUES
('tonmoy@gmail.com', '2019-04-10 00:22:57'),
('fahim@gmail.com', '2019-04-10 00:02:57'),
('jannatul@gmail.com', '2019-04-10 00:32:36'),
('suvrajitkarmaker2016@gmail.com', '2019-04-10 00:32:34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

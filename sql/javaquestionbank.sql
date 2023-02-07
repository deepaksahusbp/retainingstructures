-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2019 at 02:28 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharmasirlearningcenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `javaquestionbank`
--

CREATE TABLE `javaquestionbank` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `question` varchar(10000) NOT NULL,
  `program` mediumtext NOT NULL,
  `output1` varchar(100) NOT NULL,
  `output2` varchar(100) NOT NULL,
  `output3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `javaquestionbank`
--

INSERT INTO `javaquestionbank` (`id`, `title`, `question`, `program`, `output1`, `output2`, `output3`) VALUES
(1, 'hii world', 'Write a program to display hii World                                                                                                                                                                                                                                                                                                                                                                                                                                                        ', 'class Example{\r\n            public static void main(String[] args){\r\n                System.out.println("hii World");\r\n            }\r\n        }                                                                                                                                                                                                                                                                                                                                                                                                                                                        ', '1.png', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `javaquestionbank`
--
ALTER TABLE `javaquestionbank`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `javaquestionbank`
--
ALTER TABLE `javaquestionbank`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

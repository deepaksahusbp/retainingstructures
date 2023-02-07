-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2019 at 02:22 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'admin', 'sslc', 'sslc1234');

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

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`id`, `name`, `dob`, `gender`, `phone`, `email`, `image`, `username`, `password`) VALUES
(1, 'Siddharth Agrawal', '2017-08-03', 'Male', 9938272266, 'siddh.agrawal008@gmail.com', 'NULL', 'sidzzy', '202cb962ac59075b964b07152d234b70'),
(2, 'sid', '2017-08-02', 'Male', 1234567890, 'siddh.agrawal1234@gmail.com', 'NULL', 'sidzzy++', '4eae18cf9e54a0f62b44176d074cbe2f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `javaquestionbank`
--
ALTER TABLE `javaquestionbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `javaquestionbank`
--
ALTER TABLE `javaquestionbank`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stud`
--
ALTER TABLE `stud`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

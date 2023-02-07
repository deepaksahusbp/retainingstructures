-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 07:35 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wall_design`
--

--
-- Dumping data for table `cantiproportioning`
--

INSERT INTO `cantiproportioning` (`USERNAME`, `DATE`, `DOF`, `LOB`, `TOP`, `SW`, `LH`, `F1`, `F2`, `P1`, `P2`) VALUES
('d.sahu', '2019-04-19 01:22:08', 1.25, 5, 1.667, 625, 2.708, 86.326, 28.775, 86.326, 89.923),
('d.sahu', '2019-04-19 01:24:41', 1.25, 5, 1.667, 625, 2.708, 86.326, 28.775, 86.326, 89.923),
('subham.ghosh99', '2019-04-19 18:46:31', 1.25, 5, 1.667, 625, 2.708, 86.326, 28.775, 86.326, 89.923),
('d.sahu', '2019-04-22 04:03:12', 1.39, 7.39, 2.463, 739, 4.188, 68.94, 34.47, 68.94, 127.366),
('chints14', '2019-04-22 13:13:06', 1.25, 5, 1.667, 625, 2.708, 86.326, 28.775, 86.326, 89.923);

--
-- Dumping data for table `counterfort`
--

INSERT INTO `counterfort` (`USERNAME`, `DATE`, `S1`, `S2`, `S3`, `DWL`) VALUES
('d.sahu', '2019-04-23 00:42:39', 80, 170, 80, 2);

--
-- Dumping data for table `counterproportioning`
--

INSERT INTO `counterproportioning` (`USERNAME`, `DATE`, `DOF`, `LOB`, `TOP`, `SW`, `LOH`, `Q`, `LF`, `COUNTERD`, `P`) VALUES
('d.sahu', '2019-04-23 00:42:39', 1.39, 5.634, 1.878, 710, 3.046, 20.424, 41.909, 498.355, 186.287);

--
-- Dumping data for table `detailing`
--

INSERT INTO `detailing` (`USERNAME`, `DATE`, `FLAG`, `S1`, `S2`, `S3`, `S4`, `S5`, `S6`, `S7`) VALUES
('d.sahu', '2019-04-19 01:22:08', 0, 90, 200, 90, 170, 160, 220, 90),
('d.sahu', '2019-04-19 01:24:41', 0, 90, 200, 90, 170, 160, 220, 90),
('subham.ghosh99', '2019-04-19 18:46:31', 0, 90, 200, 90, 170, 160, 220, 90),
('d.sahu', '2019-04-22 04:03:12', 0, 80, 170, 80, 230, 230, 350, 80),
('chints14', '2019-04-22 13:13:06', 0, 90, 200, 90, 170, 160, 220, 90),
('d.sahu', '2019-04-23 00:42:39', 1, 80, 170, 80, 200, 200, 230, 80);

--
-- Dumping data for table `gravity`
--

INSERT INTO `gravity` (`USERNAME`, `DATE_TIME`, `FLAG`, `DOF`, `LOB`, `FOSS`, `PMAX`, `PMIN`, `SBC`, `LFF2`, `FP2`) VALUES
('d.sahu', '2019-04-24 02:54:32', 2, 1.55, 4.25, 1.546, 121.914, 39.86, 150, 39.281, 128.645),
('d.sahu', '2019-04-24 03:40:03', 2, 1.55, 3.75, 1.645, 105.136, 35.557, 150, 33.284, 92.3625),
('d.sahu', '2019-04-24 04:27:37', 2, 1.55, 7.1, 2.164, 125.569, 93.806, 140, 48.426, 207.023),
('d.sahu', '2019-04-24 04:28:32', 2, 1.25, 3.8, 2.199, 118.166, 39.885, 150, 30.468, 95.2128);

--
-- Dumping data for table `parameters`
--

INSERT INTO `parameters` (`USERNAME`, `Date`, `FLAG`, `HRS`, `SR`, `SBC`, `UW`, `AOR`, `MU`, `GC`, `GS`) VALUES
('d.sahu', '2019-04-19 01:22:08', 0, 5, 3, 150, 17, 35, 0.45, 25, 415),
('d.sahu', '2019-04-19 01:24:41', 0, 5, 3, 150, 17, 35, 0.45, 25, 415),
('subham.ghosh99', '2019-04-19 18:46:31', 0, 5, 3, 150, 17, 35, 0.45, 25, 415),
('d.sahu', '2019-04-22 04:03:12', 0, 6, 2, 100, 14, 30, 0.38, 30, 550),
('chints14', '2019-04-22 13:13:06', 0, 5, 3, 150, 17, 35, 0.45, 25, 415),
('d.sahu', '2019-04-23 00:42:39', 1, 7.5, 0, 145, 16, 33, 0.48, 25, 500);

--
-- Dumping data for table `parameters2`
--

INSERT INTO `parameters2` (`USERNAME`, `DATE`, `FLAG`, `HRS`, `B1`, `SBC`, `UW`, `AOR`, `Q`, `GC`) VALUES
('d.sahu', '2019-04-24 02:54:32', 2, 5, 1, 150, 18, 30, 30, 20),
('d.sahu', '2019-04-24 03:40:03', 2, 4, 1, 150, 18, 30, 30, 20),
('d.sahu', '2019-04-24 04:27:37', 2, 7, 2, 140, 17, 30, 30, 20),
('d.sahu', '2019-04-24 04:28:32', 2, 5, 1, 150, 18, 35, 35, 20);

--
-- Dumping data for table `pressure`
--

INSERT INTO `pressure` (`USERNAME`, `Date`, `FLAG`, `UDL`, `PMAX`, `PMIN`, `PB`, `PC`, `PCRITICAL`, `FOSOM`, `FOSS`, `WIDTH`, `HEIGHT`, `CD`) VALUES
('d.sahu', '2019-04-19 01:22:08', 0, 162.25, 124.093, 101.137, 116.44, 113.57, 119.08, 3.975, 1.438, 625, 625, 575),
('d.sahu', '2019-04-19 01:24:41', 0, 162.25, 124.093, 101.137, 116.44, 113.57, 119.08, 3.975, 1.438, 625, 625, 575),
('subham.ghosh99', '2019-04-19 18:46:31', 0, 162.25, 124.093, 101.137, 116.44, 113.57, 119.08, 3.975, 1.438, 625, 625, 575),
('d.sahu', '2019-04-22 04:03:12', 0, 139.589, 88.621, 118.858, 98.698, 101.722, 95.879, 6.225, 1.484, 739, 739, 689),
('chints14', '2019-04-22 13:13:06', 0, 162.25, 124.093, 101.137, 116.44, 113.57, 119.08, 3.975, 1.438, 625, 625, 575),
('d.sahu', '2019-04-23 00:42:39', 1, 148.63, 137.145, 91.417, 121.902, 116.14, 127.259, 4.066, 1.659, 710, 710, 660);

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Firstname`, `Lastname`, `Gender`, `Email`, `Username`, `Password`) VALUES
('Deepak', 'Sahu', 'male', 'deepaksahusbp@gmail.com', 'd.sahu', '288e66d3b6347f4ab9e9d934884ec27c'),
('Subham', 'Ghosh', 'male', 'subham.ghosh99@gmail.com', 'subham.ghosh99', '0de982f210d9a02cd03ff1aca6ba57da'),
('Ashish', 'Agarwal', 'male', 'ashish18agarwalla@gmail.com', 'chints14', 'e18529e1fe9149ec7f4358f2163bad46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

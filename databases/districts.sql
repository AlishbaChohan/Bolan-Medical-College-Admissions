-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2021 at 02:33 PM
-- Server version: 10.3.25-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmcqtaco_admissionform`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(1) NOT NULL,
  `district_name` varchar(100) NOT NULL,
  `division_id` int(11) NOT NULL,
  `provinces_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_name`, `division_id`, `provinces_id`) VALUES
(0, 'Quetta Urban', 1, 1),
(1, 'Quetta Rural', 1, 1),
(2, 'Pishin', 1, 1),
(3, 'Killa Abdullah', 1, 1),
(4, 'Chaman', 1, 1),
(5, 'Naseerabad', 2, 1),
(6, 'Jaffarabad', 2, 1),
(7, 'Bolan/Kachhi', 2, 1),
(8, 'Jhal Magsi', 2, 1),
(9, 'Sohbatpur', 2, 1),
(10, 'Zhob', 3, 1),
(11, 'Sherani', 3, 1),
(12, 'Killa Saifullah', 3, 1),
(13, 'Loralai', 4, 1),
(14, 'Duki', 4, 1),
(15, 'Musakhail', 4, 1),
(16, 'Barkhan', 4, 1),
(17, 'Kech', 5, 1),
(18, 'Panjgur', 5, 1),
(19, 'Gawadar', 5, 1),
(20, 'Sibi', 6, 1),
(21, 'Dera Bugti', 6, 1),
(22, 'Ziarat', 6, 1),
(23, 'Harnai', 6, 1),
(24, 'Kohlu', 6, 1),
(25, 'Kalat', 7, 1),
(26, 'Kuzdar', 7, 1),
(27, 'Mastung', 7, 1),
(28, 'Awaran', 7, 1),
(29, 'Lasbella', 7, 1),
(30, 'Shaheed Sikandarabad', 7, 1),
(31, 'Nushki', 8, 1),
(32, 'Chaghi', 8, 1),
(33, 'Washuk', 8, 1),
(34, 'Kharan', 8, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_id` (`division_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2021 at 02:32 PM
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
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(11) NOT NULL,
  `colg_name` varchar(100) NOT NULL,
  `abbr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `colg_name`, `abbr`) VALUES
(1, 'AJ&K Azad Jammu & Kashmir, Muzaffarabad', 'AJ&K'),
(2, 'Bolan Medical College, Quetta', 'BMC'),
(3, 'D.G Khan Medical College, D.G Khan.', 'DGMC'),
(4, 'Dow University of Medical & Health Sciences', 'DUHS'),
(5, 'Faisalabad Medical University Faisalabad.', 'FMU'),
(6, 'Fatima Jinnah Medical University Lahore.', 'FJMU'),
(7, 'Gujranwala Medical College, Gujranwala', 'GMC'),
(8, 'Jhalawan Medical College, Khuzdar.', 'JMC'),
(9, 'Khawaja Muhammad Safdar Medical College, Sialkot.', 'KMSMC'),
(10, 'Liaquat Medical University of Health Sciences, Jamshoro Sindh.', 'LUMHS'),
(11, 'Loralai Medical College, Loralai.', 'LMC'),
(12, 'Mekran Medical College, Turbat.', 'MMC'),
(13, 'Mohtarma Benazir Bhutto Shaheed Medical College, Mirpur.', 'MBBSMC'),
(14, 'Poonch Medical College, Rawalakot.', 'Poonch MC'),
(15, 'Quaid-e-Azam Medical College, Bahawalpur', 'QMC'),
(16, 'Rawalpindi Medical University, Rawalpindi.', 'RMC'),
(17, 'Sahiwal Medical College, Sahiwal.', 'SLMC'),
(18, 'Sargodha Medical College, Sargodha.', 'SMC'),
(19, 'Sheikh Zayed Medical College, Rahim Yar Khan.', 'SZMC'),
(20, 'Jinnah Sindh Medical University, Karachi Sindh', 'JSMU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

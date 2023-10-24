-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 08:35 PM
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
-- Database: `bmc2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bds_colleges`
--

CREATE TABLE `bds_colleges` (
  `id` int(11) NOT NULL,
  `bds_colg` varchar(200) NOT NULL,
  `abbr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bds_colleges`
--

INSERT INTO `bds_colleges` (`id`, `bds_colg`, `abbr`) VALUES
(1, 'Dow University of Medical & Health Sciences, Karachi', 'DUHS'),
(2, 'Liaquat University of Medical & Health Sciences Jamshoro', 'LUMHS'),
(3, 'Bolan Dental College, Quetta', 'BMC');

-- --------------------------------------------------------

--
-- Table structure for table `bds_priorities`
--

CREATE TABLE `bds_priorities` (
  `id` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bds_priorities`
--

INSERT INTO `bds_priorities` (`id`, `priority`, `college_id`, `student_id`) VALUES
(6, 1, 1, 5),
(8, 1, 1, 6),
(7, 2, 2, 5),
(9, 2, 2, 6),
(11, 3, 3, 5),
(10, 3, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `b_priority`
--

CREATE TABLE `b_priority` (
  `id` int(11) NOT NULL,
  `priority_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `b_priority`
--

INSERT INTO `b_priority` (`id`, `priority_no`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `challan_details`
--

CREATE TABLE `challan_details` (
  `id` int(11) NOT NULL,
  `challan_no` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `bank_name` varchar(200) NOT NULL,
  `branch_code` varchar(100) NOT NULL,
  `bank_location` varchar(200) NOT NULL,
  `deposit_date` varchar(30) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `challan_details`
--

INSERT INTO `challan_details` (`id`, `challan_no`, `student_id`, `bank_name`, `branch_code`, `bank_location`, `deposit_date`, `amount`, `status`) VALUES
(1, '1222', 6, 'jdjd', 'jdjddj', 'djjd', '2021-11-20', '233', ''),
(2, '1222', 0, 'jdjd', 'jdjddj', 'djjd', '2021-11-20', '233', ''),
(6, '215', 5, 'mcb', '990', 'lkl', '2021-11-10', '10009', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `id` int(11) NOT NULL,
  `deg_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`id`, `deg_name`) VALUES
(2, 'Inter / Fsc / A Level'),
(3, 'Mdcat');

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

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(11) NOT NULL,
  `div_name` varchar(100) NOT NULL,
  `province_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `div_name`, `province_id`) VALUES
(1, 'Quetta Division', 1),
(2, 'Naseerabad Division', 1),
(3, 'Zhob Division', 1),
(4, 'Loralai Division', 1),
(5, 'Mekran Division', 1),
(6, 'Sibi Division', 1),
(7, 'Kalat Division', 1),
(8, 'Rakhshan Division', 1);

-- --------------------------------------------------------

--
-- Table structure for table `edu_details`
--

CREATE TABLE `edu_details` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `degree_id` int(11) NOT NULL,
  `subjects_id` varchar(200) NOT NULL,
  `passing_year` varchar(20) NOT NULL,
  `annual_biannual` varchar(50) NOT NULL,
  `total_marks` varchar(20) NOT NULL,
  `obtained_marks` varchar(20) NOT NULL,
  `percentage` varchar(50) NOT NULL,
  `board_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edu_details`
--

INSERT INTO `edu_details` (`id`, `student_id`, `degree_id`, `subjects_id`, `passing_year`, `annual_biannual`, `total_marks`, `obtained_marks`, `percentage`, `board_name`) VALUES
(1, 0, 0, '', '2019', '2', '800', '500', '70', 'abcv'),
(8, 5, 0, '', '', '', '', '', '', ''),
(10, 6, 2, '', '2021', 'ann', '1100', '700', '56', 'balochistan'),
(11, 6, 0, '', '', '', '', '', '', ''),
(16, 5, 3, 'pre med', '2018', 'annual', '210', '171', '81.43', 'pmc'),
(17, 5, 2, 'pre med', '2018', 'biannual', '1100', '980', '89.09', 'fbise');

-- --------------------------------------------------------

--
-- Table structure for table `mbbs_priorities`
--

CREATE TABLE `mbbs_priorities` (
  `id` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mbbs_priorities`
--

INSERT INTO `mbbs_priorities` (`id`, `priority`, `student_id`, `college_id`) VALUES
(15, 1, 5, 1),
(19, 1, 6, 1),
(44, 2, 5, 11),
(20, 2, 6, 2),
(17, 3, 5, 7),
(21, 3, 6, 3),
(43, 4, 5, 2),
(22, 4, 6, 4),
(53, 5, 5, 20),
(23, 5, 6, 5),
(18, 6, 5, 4),
(24, 6, 6, 6),
(38, 7, 5, 6),
(25, 7, 6, 7),
(41, 8, 5, 9),
(26, 8, 6, 8),
(48, 9, 5, 18),
(27, 9, 6, 9),
(42, 10, 5, 10),
(28, 10, 6, 10),
(39, 11, 5, 12),
(29, 11, 6, 11),
(47, 12, 5, 5),
(30, 12, 6, 12),
(50, 13, 5, 16),
(31, 13, 6, 13),
(45, 14, 5, 15),
(32, 14, 6, 14),
(46, 15, 5, 17),
(33, 15, 6, 15),
(16, 16, 5, 13),
(34, 16, 6, 16),
(51, 17, 5, 19),
(35, 17, 6, 17),
(40, 18, 5, 14),
(36, 18, 6, 18),
(49, 19, 5, 8),
(37, 19, 6, 19),
(52, 20, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `m_priority`
--

CREATE TABLE `m_priority` (
  `id` int(11) NOT NULL,
  `priority_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_priority`
--

INSERT INTO `m_priority` (`id`, `priority_no`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(23, 20);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `province_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `province_name`) VALUES
(1, 'Balochistan');

-- --------------------------------------------------------

--
-- Table structure for table `seat_reservation`
--

CREATE TABLE `seat_reservation` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat_reservation`
--

INSERT INTO `seat_reservation` (`id`, `title`) VALUES
(1, 'General'),
(2, 'Minority'),
(3, 'Disabled');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_cnic` varchar(20) NOT NULL,
  `father_occupation` varchar(50) NOT NULL,
  `employer_address` varchar(100) NOT NULL,
  `tehsils_id` int(11) NOT NULL,
  `domicile_no` varchar(20) NOT NULL,
  `date_of_issue` varchar(20) NOT NULL,
  `father_domicile` varchar(20) NOT NULL,
  `present_address` varchar(100) NOT NULL,
  `present_districts_id` varchar(20) NOT NULL,
  `present_divisions_id` varchar(20) NOT NULL,
  `permanent_address` varchar(100) NOT NULL,
  `permanent_districts_id` varchar(11) NOT NULL,
  `permanent_divisions_id` varchar(10) NOT NULL,
  `landline_no` varchar(30) NOT NULL,
  `cell_no` varchar(30) NOT NULL,
  `whatsapp_no` varchar(30) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `academic` varchar(100) NOT NULL,
  `registration_no` varchar(50) NOT NULL,
  `board` varchar(100) NOT NULL,
  `mdcat_roll_no` varchar(50) NOT NULL,
  `t_service` varchar(200) NOT NULL,
  `seat_reservation_id` varchar(10) NOT NULL,
  `program` varchar(100) NOT NULL,
  `verification_code` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `gender`, `religion`, `age`, `date_of_birth`, `cnic`, `father_name`, `father_cnic`, `father_occupation`, `employer_address`, `tehsils_id`, `domicile_no`, `date_of_issue`, `father_domicile`, `present_address`, `present_districts_id`, `present_divisions_id`, `permanent_address`, `permanent_districts_id`, `permanent_divisions_id`, `landline_no`, `cell_no`, `whatsapp_no`, `email_id`, `password`, `academic`, `registration_no`, `board`, `mdcat_roll_no`, `t_service`, `seat_reservation_id`, `program`, `verification_code`, `status`, `profile_pic`, `created_at`) VALUES
(1, 'sheere', 'female', 'Islam', '2', '2021-10-21', '1124', 'Jalil', '767676767676767', 'Doctor', 'F-10 Markaz', 0, '12346789', '2021-10-09', '34678098765', 'Balochistan', '7', '3', 'rrrrrrrrrrrrr', '11', '5', '1111', '2222', '3333jjjj', 'fatimaazahir@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '0878', '', '09090', '', '1', '', '0', 'active', '', '2021-10-28 11:21:07'),
(2, 'JALIL BARKAT', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 'saddiqa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '0878', '', '09090', '', '1', '', '0', 'active', '', '2021-10-29 23:45:48'),
(3, 'JALIL BARKAT', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 'alishbajalil2@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '0878', '', '09090', '', '1', '', 'bmc1635533233', 'active', '', '2021-10-29 23:47:13'),
(4, 'jjjj', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 'king@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '0878', '', '09090', '', '1', '', 'bmcking@yahoo.com1635533280', 'active', '', '2021-10-29 23:48:00'),
(5, 'JALIL BARKAT', 'female', 'Islam', '45', '2021-11-26', '1234567', 'jalil', '444444444444444', 'doctor', 'STREET 37 HOUSE 129-B  F-10/1', 0, '129019', '2021-11-17', 'ss', 'STREET 37 HOUSE 129-B  F-10/1', '10', '3', 'STREET 37 HOUSE 129-B  F-10/1', '20', '6', '00', '12345', '000', 'alishbajalil@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '2021', 'abc', 'fbise', '09090', 'pmc', '1', 'BDS', 'bmcalishbajalil@yahoo.com1635614573', 'active', 'user_files/logo192.png1636219698.png', '2021-10-30 22:22:53'),
(6, 'najeeb', 'male', 'islam', '23', '2021-11-25', '54400-7852621-7', 'fateh Muhammad', '544007852621', 'officer', 'some text', 0, '7867', '2021-11-23', 'kalat', 'some text', '5', '5', 'some text', '2', '1', '77777777', '777777777', '03337779642', 'shahzor007@yahoo.com', 'cf48de425702d8994c763ee8efe32266', '', 'ntc', '', '1210', '', '1', 'MBBS', 'bmcshahzor007@yahoo.com1635872484', 'active', 'user_files/me.jpg', '2021-11-02 13:01:24'),
(7, 'alis', 'aa', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-12-01 17:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `c_obt` varchar(20) NOT NULL,
  `c_total` varchar(20) NOT NULL,
  `c_per` varchar(20) NOT NULL,
  `p_obt` varchar(20) NOT NULL,
  `p_total` varchar(20) NOT NULL,
  `p_per` varchar(20) NOT NULL,
  `b_obt` varchar(20) NOT NULL,
  `b_total` varchar(20) NOT NULL,
  `b_per` varchar(20) NOT NULL,
  `m_obt` varchar(20) NOT NULL,
  `m_total` varchar(20) NOT NULL,
  `m_per` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `student_id`, `c_obt`, `c_total`, `c_per`, `p_obt`, `p_total`, `p_per`, `b_obt`, `b_total`, `b_per`, `m_obt`, `m_total`, `m_per`) VALUES
(1, 5, '50', '100', '50', '99', '100', '99', '50', '100', '50', '40', '100', '40');

-- --------------------------------------------------------

--
-- Table structure for table `tehsils`
--

CREATE TABLE `tehsils` (
  `id` int(11) NOT NULL,
  `districts_id` int(11) NOT NULL,
  `tehsil_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tehsils`
--

INSERT INTO `tehsils` (`id`, `districts_id`, `tehsil_name`) VALUES
(1, 1, 'PANJPAI SUB-TEHSIL'),
(2, 1, 'QUETTA CITY'),
(3, 1, 'QUETTA SADDAR'),
(4, 2, 'BARSHORE SUB-TEHSIL'),
(5, 2, 'HURRAMZAI'),
(6, 2, 'KAREZAT'),
(7, 2, 'PISHIN'),
(8, 2, 'SARANAN'),
(9, 3, 'CHAMAN'),
(10, 3, 'DOBANDI SUB-TEHSIL'),
(11, 3, 'GULISTAN'),
(12, 3, 'KILLA ABDULLAH'),
(13, 10, 'ASHWAT SUB-TEHSIL'),
(14, 10, 'KASHATU SUB-TEHSIL'),
(15, 10, 'QAMAR DIN KAREZ'),
(16, 10, 'SAMBAZA SUB-TEHSIL'),
(17, 10, 'ZHOB'),
(18, 16, 'BARKHAN'),
(19, 15, 'DRUG'),
(20, 15, 'KINGRI'),
(21, 15, 'MUSAKHEL'),
(22, 12, 'BADINI SUB-TEHSIL'),
(23, 12, 'KANMETHARZAI SUB-TEHSIL'),
(24, 12, 'KILLA SAIFULLAH'),
(25, 12, 'LOIBAND'),
(26, 12, 'MUSLIM BAGH'),
(27, 12, 'SHINKI SUB-TEHSIL'),
(28, 13, 'DUKI'),
(29, 13, 'LORALAI'),
(30, 13, 'MEKHTAR'),
(31, 11, 'SHEERANI SUB-TEHSIL'),
(32, 20, 'KUTMANDAI SUB-TEHSIL'),
(33, 20, 'SANGAN SUB-TEHSIL'),
(34, 20, 'SIBI'),
(35, 23, 'HARNAI'),
(36, 23, 'KHOAST SUB-TEHSIL'),
(37, 23, 'SHARIGH'),
(38, 22, 'SINJAWI SUB-TEHSIL'),
(39, 22, 'ZIARAT'),
(40, 24, 'GRISINI SUB-TEHSIL'),
(41, 24, 'KAHAN'),
(42, 24, 'KOHLU'),
(43, 24, 'MAWAND'),
(44, 24, 'TAMBOO'),
(45, 21, 'BAIKER SUB-TEHSIL'),
(46, 21, 'DERA BUGTI'),
(47, 21, 'LOTI SUB-TEHSIL'),
(48, 21, 'MALAM SUB-TEHSIL'),
(49, 21, 'PHELAWAGH'),
(50, 21, 'PIR KOH SUB-TEHSIL'),
(51, 21, 'SANGSILLAH SUB-TEHSIL'),
(52, 21, 'SUI'),
(53, 5, 'BABA KOT'),
(54, 5, 'CHATTAR SUB-TEHSIL'),
(55, 5, 'DERA MURAD JAMALI'),
(56, 5, 'TAMBOO'),
(57, 6, 'GANDAKHA'),
(58, 6, 'JHAT PAT'),
(59, 6, 'USTA MOHAMMAD'),
(60, 7, 'BALANARI SUB-TEHSIL'),
(61, 7, 'DHADAR'),
(62, 7, 'KHATTAN SUB-TEHSIL'),
(63, 7, 'MACH SUB-TEHSIL'),
(64, 7, 'SANNI SUB-TEHSIL'),
(65, 8, 'GANDAWA'),
(66, 8, 'JHAL MAGSI'),
(67, 8, 'MIRPUR SUB-TEHSIL'),
(68, 9, 'SOHBATPUR'),
(69, 9, 'FARIDABAD'),
(70, 9, 'SANHRI'),
(71, 25, 'GAZG SUB-TEHSIL'),
(72, 25, 'JOHAN SUB-TEHSIL'),
(73, 25, 'KALAT'),
(74, 25, 'MANGOCHAR'),
(75, 25, 'SURAB'),
(76, 27, 'DASHT'),
(77, 27, 'KHAD KOOCHA SUB-TEHSIL'),
(78, 27, 'KIRDGAP SUB-TEHSIL'),
(79, 27, 'MASTUNG'),
(80, 26, 'ARANJI SUB-TEHSIL'),
(81, 26, 'GRESHEK SUB-TEHSIL'),
(82, 26, 'GRASHA SUB-TEHSIL'),
(83, 26, 'KARAKH SUB-TEHSIL'),
(84, 26, 'KHUZDAR'),
(85, 26, 'MOOLA SUB-TEHSIL'),
(86, 26, 'NAL TEHSIL'),
(87, 26, 'ORNACH SUB-TEHSIL'),
(88, 26, 'SAROONA SUB-TEHSIL'),
(89, 26, 'WADH'),
(90, 26, 'ZEHRI'),
(91, 28, 'AWARAN'),
(92, 28, 'GISHKORE'),
(93, 28, 'JHAL JAO'),
(94, 28, 'KORAK JAHOO'),
(95, 28, 'MASHKAI'),
(96, 34, 'KHARAN'),
(97, 34, 'SAR-KHARAN'),
(98, 34, 'TOHUMULK SUB-TEHSIL'),
(99, 33, 'BESIMA'),
(100, 33, 'MASHKHEL'),
(101, 33, 'NAG SUB-TEHSIL'),
(102, 33, 'SHAHGORI SUB-TEHSIL'),
(103, 33, 'WASHUK'),
(104, 29, 'BELA'),
(105, 29, 'DUREJI'),
(106, 29, 'GADDANI'),
(107, 29, 'HUB'),
(108, 29, 'KANRAJ'),
(109, 29, 'LAKHRA'),
(110, 29, 'LIARI SUB-TEHSIL'),
(111, 29, 'SONMIANI/WINDER'),
(112, 29, 'UTHAL'),
(113, 17, 'BALNIGOR SUB-TEHSIL'),
(114, 17, 'BULEDA SUB-TEHSIL'),
(115, 17, 'DASHT SUB-TEHSIL'),
(116, 17, 'HOSHAB SUB-TEHSIL'),
(117, 17, 'ZAMURAN SUB-TEHSIL'),
(118, 17, 'MAND'),
(119, 17, 'TUMP'),
(120, 17, 'TURBAT'),
(121, 19, 'GWADAR'),
(122, 19, 'JIWANI'),
(123, 19, 'ORMARA'),
(124, 19, 'PASNI'),
(125, 19, 'SUNTSAR SUB-TEHSIL'),
(126, 18, 'GICHK SUB-TEHSIL'),
(127, 18, 'GOWARGO'),
(128, 18, 'PANJGUR'),
(129, 18, 'PAROME');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bds_colleges`
--
ALTER TABLE `bds_colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bds_priorities`
--
ALTER TABLE `bds_priorities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `priority` (`priority`,`college_id`,`student_id`);

--
-- Indexes for table `b_priority`
--
ALTER TABLE `b_priority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `challan_details`
--
ALTER TABLE `challan_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `province_id` (`province_id`);

--
-- Indexes for table `edu_details`
--
ALTER TABLE `edu_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`,`degree_id`);

--
-- Indexes for table `mbbs_priorities`
--
ALTER TABLE `mbbs_priorities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `priority` (`priority`,`student_id`,`college_id`);

--
-- Indexes for table `m_priority`
--
ALTER TABLE `m_priority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_reservation`
--
ALTER TABLE `seat_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD KEY `gender_id` (`gender`),
  ADD KEY `seat_reservation_id` (`seat_reservation_id`),
  ADD KEY `present_districts_id` (`present_districts_id`),
  ADD KEY `present_tehsils_id` (`present_divisions_id`),
  ADD KEY `permanent_districts_id` (`permanent_districts_id`),
  ADD KEY `permanent_tehsils_id` (`permanent_divisions_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tehsils`
--
ALTER TABLE `tehsils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_id` (`districts_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bds_colleges`
--
ALTER TABLE `bds_colleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bds_priorities`
--
ALTER TABLE `bds_priorities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `b_priority`
--
ALTER TABLE `b_priority`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `challan_details`
--
ALTER TABLE `challan_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `edu_details`
--
ALTER TABLE `edu_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mbbs_priorities`
--
ALTER TABLE `mbbs_priorities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `m_priority`
--
ALTER TABLE `m_priority`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tehsils`
--
ALTER TABLE `tehsils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`);

--
-- Constraints for table `divisions`
--
ALTER TABLE `divisions`
  ADD CONSTRAINT `divisions_ibfk_2` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`);

--
-- Constraints for table `tehsils`
--
ALTER TABLE `tehsils`
  ADD CONSTRAINT `tehsils_ibfk_1` FOREIGN KEY (`districts_id`) REFERENCES `districts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

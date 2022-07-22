-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 07:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `designeremran`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashbord`
--

CREATE TABLE `dashbord` (
  `ID` int(255) NOT NULL,
  `fName` text NOT NULL,
  `lName` text NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(14) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `addr` text NOT NULL,
  `avater_first_person` text NOT NULL,
  `avater_second_person` text NOT NULL,
  `avater_third_person` text NOT NULL,
  `avater_forth_person` text NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `arrive_date` text NOT NULL,
  `depart_date` text NOT NULL,
  `nid_first_avater_fornt_photo` text NOT NULL,
  `nid_first_avater_back_photo` text NOT NULL,
  `nid_second_avater_fornt_photo` text NOT NULL,
  `nid_second_avater_back_photo` text NOT NULL,
  `nid_third_avater_fornt_photo` text NOT NULL,
  `nid_third_avater_back_photo` text NOT NULL,
  `nid_forth_avater_fornt_photo` date NOT NULL,
  `nid_forth_avater_back_photo` text NOT NULL,
  `city` text NOT NULL,
  `total_person` text NOT NULL,
  `paid_unpaid` text NOT NULL,
  `token` text NOT NULL,
  `nid_no` int(255) NOT NULL,
  `check_out_code` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `display` text NOT NULL,
  `billNo` text NOT NULL,
  `cash` text NOT NULL,
  `extraChange` text NOT NULL,
  `disCount` text NOT NULL,
  `due` text NOT NULL,
  `paymentBy` text NOT NULL,
  `pymentNumbear` text NOT NULL,
  `extraCharges_descript` text NOT NULL,
  `billBy_phone_no` text NOT NULL,
  `billBy` text NOT NULL,
  `bill` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashbord`
--

INSERT INTO `dashbord` (`ID`, `fName`, `lName`, `email`, `phone`, `gender`, `addr`, `avater_first_person`, `avater_second_person`, `avater_third_person`, `avater_forth_person`, `room_type`, `arrive_date`, `depart_date`, `nid_first_avater_fornt_photo`, `nid_first_avater_back_photo`, `nid_second_avater_fornt_photo`, `nid_second_avater_back_photo`, `nid_third_avater_fornt_photo`, `nid_third_avater_back_photo`, `nid_forth_avater_fornt_photo`, `nid_forth_avater_back_photo`, `city`, `total_person`, `paid_unpaid`, `token`, `nid_no`, `check_out_code`, `price`, `display`, `billNo`, `cash`, `extraChange`, `disCount`, `due`, `paymentBy`, `pymentNumbear`, `extraCharges_descript`, `billBy_phone_no`, `billBy`, `bill`) VALUES
(15, 'Emran', 'Alam', 'shaheyalam74@gmail.com', '01998878742', 'Male', 'Jalai 2/a electric supply road', 'EmranAlam1251364261.png', '', '', '', 'Single', '21-03-2021', '', 'EmranAlam1519930049_fornt.jpeg', 'EmranAlam1767427388_back.jpeg', '', '', '', '', '0000-00-00', '', 'Sylhet', '1', 'Un Paid', '8f19bd81133a35aca9a298dc043f253e', 0, '2132002', 1600, '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'Tarin', 'Mushnad', 'tarin45@gmail.com', '0124574274', 'Female', 'Jalai 2/a electric supply raod sylhet', 'TarinMushnad1003194135.jpeg', '', '', '', 'Delux', '21-03-2021', ' 25, March, 2022', 'TarinMushnad662203830_fornt.jpeg', 'TarinMushnad1145607741_back.jpeg', '', '', '', '', '0000-00-00', '', 'Dhaka', '1', 'Paid', 'dcf333590b0be45e17e436a489e4bc81', 0, '102569', 5000, '0', '#000620437', '10000', '745', '2%', '4369.9', 'Bkash', '052247274', 'Cofe, Water', '01254151', 'Emran', '5630.1');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `fName` text NOT NULL,
  `lName` text NOT NULL,
  `profile_title` text NOT NULL,
  `address` text NOT NULL,
  `profile_phone_no` text NOT NULL,
  `user_email` text NOT NULL,
  `user_name` text NOT NULL,
  `user_pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`fName`, `lName`, `profile_title`, `address`, `profile_phone_no`, `user_email`, `user_name`, `user_pwd`) VALUES
('Emran', 'Alam', 'Graphic & Web Designer. Also a web developer', 'Jalali 2/A electric Supply road sylhet', '+8801998878742', 'shaheyalam74@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ID` int(255) NOT NULL,
  `roomName` text NOT NULL,
  `roomPrice` text NOT NULL,
  `freeWifii` text NOT NULL,
  `tv` text NOT NULL,
  `freeBreakfast` text NOT NULL,
  `balcony` text NOT NULL,
  `attachBathroom` text NOT NULL,
  `freeParking` text NOT NULL,
  `token` text NOT NULL,
  `haveRoom` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ID`, `roomName`, `roomPrice`, `freeWifii`, `tv`, `freeBreakfast`, `balcony`, `attachBathroom`, `freeParking`, `token`, `haveRoom`) VALUES
(7, 'Double', '2600', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '', 'd909d38d705ce75386dd86e611a82f5b4738150ce41dc05c4888b3cb778b060c044741b100565', 30),
(8, 'Single', '1800', 'Yes', 'Yes', '', 'Yes', '', '', '66ba162102bbf6ae31b522aec561735e85400a129261ef1c88ada8b9611d79cd7e0a112c9d4f7', 15),
(9, 'Delux', '5000', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '', 'd9a0cd9a2497737750af7cbb6555c6e084852f8237d8959e03355010bb85cc3dc46a46fb31110', 10),
(10, 'Super Dulex', '10000', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'ffa2b1908c07df4bfb8fc1d42bda1def395128a12a315082a345f1a9d3ad14b214cd36d310cf8', 7);

-- --------------------------------------------------------

--
-- Table structure for table `stafs`
--

CREATE TABLE `stafs` (
  `ID` int(255) NOT NULL,
  `fName` text NOT NULL,
  `lName` text NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(14) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `addr` text NOT NULL,
  `avater_first_person` text NOT NULL,
  `arrive_date` text NOT NULL,
  `depart_date` text NOT NULL,
  `nid_first_avater_fornt_photo` text NOT NULL,
  `nid_first_avater_back_photo` text NOT NULL,
  `city` text NOT NULL,
  `token` text NOT NULL,
  `nid_no` int(255) NOT NULL,
  `staf_id` varchar(255) NOT NULL,
  `display` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stafs`
--

INSERT INTO `stafs` (`ID`, `fName`, `lName`, `email`, `phone`, `gender`, `addr`, `avater_first_person`, `arrive_date`, `depart_date`, `nid_first_avater_fornt_photo`, `nid_first_avater_back_photo`, `city`, `token`, `nid_no`, `staf_id`, `display`) VALUES
(14, 'Emran', 'Alam', 'shaheyalam74@gmail.com', '01998878742', 'Male', 'jalai 2/a elcetric supplya road sylhet', 'Emran Alam-stafs-1289148282.png', '29/03/2021', '', 'Emran Alam2121933327-stafs-nid-_fornt.jpeg', 'Emran Alam633436013-stafs-nid-_back.jpeg', 'Sylhet', '8f19bd81133a35aca9a298dc043f253e869673788', 2147483647, '348', '0'),
(15, 'shahey', 'alam', 'shaheyalam74@gmail.com', '01712071287', 'Male', 'sylet', 'shahey alam-stafs-442663100.jpeg', '02/04/2021', '', 'shahey alam316473802-stafs-nid-_fornt.png', 'shahey alam1848184128-stafs-nid-_back.png', 'Sylhet', 'ca78c30f286a57b5e022ff23e88de76b1220420875', 2147483647, '75166', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashbord`
--
ALTER TABLE `dashbord`
  ADD UNIQUE KEY `ID` (`ID`,`fName`,`lName`,`email`,`phone`,`gender`,`addr`,`avater_first_person`,`avater_second_person`,`avater_third_person`,`avater_forth_person`,`room_type`,`arrive_date`,`depart_date`,`nid_first_avater_fornt_photo`,`nid_first_avater_back_photo`,`nid_second_avater_fornt_photo`,`nid_second_avater_back_photo`,`nid_third_avater_fornt_photo`,`nid_third_avater_back_photo`,`nid_forth_avater_fornt_photo`,`nid_forth_avater_back_photo`,`city`,`total_person`,`paid_unpaid`,`token`,`nid_no`,`check_out_code`) USING HASH;

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `stafs`
--
ALTER TABLE `stafs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dashbord`
--
ALTER TABLE `dashbord`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stafs`
--
ALTER TABLE `stafs`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

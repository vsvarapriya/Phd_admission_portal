-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2021 at 04:39 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13683540_phd`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`Email`, `Password`, `Name`) VALUES
('admin@gmail.com', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `ApplicationId` varchar(100) NOT NULL,
  `DocStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`ApplicationId`, `DocStatus`) VALUES
('NIT_AP_2020_1', 'Submitted'),
('NIT_AP_2020_2', 'Submitted'),
('NIT_AP_2020_3', 'Submitted');

-- --------------------------------------------------------

--
-- Table structure for table `otherdetails`
--

CREATE TABLE `otherdetails` (
  `ApplicationId` varchar(100) NOT NULL,
  `Exam` varchar(100) NOT NULL,
  `Score` varchar(100) NOT NULL,
  `Rank` varchar(100) NOT NULL,
  `OtherStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otherdetails`
--

INSERT INTO `otherdetails` (`ApplicationId`, `Exam`, `Score`, `Rank`, `OtherStatus`) VALUES
('NIT_AP_2020_1', 'GATE', '320', '10000', 'Submitted'),
('NIT_AP_2020_2', 'GATE', '230', '25000', 'Submitted'),
('NIT_AP_2020_3', 'GATE', '230', '20000', 'Submitted'),
('NIT_AP_2020_4', 'GATE', '230', '25000', 'Submitted');

-- --------------------------------------------------------

--
-- Table structure for table `personaldetails`
--

CREATE TABLE `personaldetails` (
  `ApplicationId` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Aadhaar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Nationality` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `State` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaritalStatus` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Disability` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MobileNo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `personalStatus` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personaldetails`
--

INSERT INTO `personaldetails` (`ApplicationId`, `Name`, `Aadhaar`, `DOB`, `Gender`, `Category`, `Nationality`, `State`, `MaritalStatus`, `Disability`, `MobileNo`, `personalStatus`) VALUES
('NIT_AP_2020_1', 'priya vakalapudi', '497136463001', '2001-06-01', 'Female', 'General', 'Male', 'Andhra Pradesh', 'Single', 'No', '9381056206', 'Submitted'),
('NIT_AP_2020_2', 'satya Kambala', '646567893456', '2001-08-17', 'Female', 'General', 'Male', 'Andhra Pradesh', 'Single', 'No', '9493344231', 'Submitted'),
('NIT_AP_2020_3', 'prasuna Pulivendula', '647623415678', '2001-01-01', 'Female', 'General', 'Male', 'Andhra Pradesh', 'Single', 'No', '9848675634', 'Submitted'),
('NIT_AP_2020_4', 'xyz', '5326', '2000-07-05', 'Male', 'General', 'Male', 'Andhra Pradesh', 'Single', 'Yes', '9876957865', 'Submitted');

-- --------------------------------------------------------

--
-- Table structure for table `pg`
--

CREATE TABLE `pg` (
  `ApplicationId` varchar(100) NOT NULL,
  `Degree` varchar(100) NOT NULL,
  `Branch` varchar(100) NOT NULL,
  `cgpa` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `College` varchar(100) NOT NULL,
  `YearOfPassing` varchar(100) NOT NULL,
  `pgStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pg`
--

INSERT INTO `pg` (`ApplicationId`, `Degree`, `Branch`, `cgpa`, `class`, `College`, `YearOfPassing`, `pgStatus`) VALUES
('NIT_AP_2020_1', 'M.Tech', 'computers', '9.0', 'Distinction', 'NIT-Warangal', '2019', 'Submitted'),
('NIT_AP_2020_2', 'M.Tech', 'Mechanics', '9.0', 'Distinction', 'NIT-Trichy', '2019', 'Submitted'),
('NIT_AP_2020_3', 'M.Tech', 'computers', '9.0', 'Distinction', 'NIT-Trichy', '2019', 'Submitted'),
('NIT_AP_2020_4', 'M.Tech', 'computers', '9.0', 'Distinction', 'NIT-Trichy', '2019', 'Submitted');

-- --------------------------------------------------------

--
-- Table structure for table `ug`
--

CREATE TABLE `ug` (
  `ApplicationId` varchar(100) NOT NULL,
  `Degree` varchar(100) NOT NULL,
  `Branch` varchar(100) NOT NULL,
  `cgpa` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `College` varchar(100) NOT NULL,
  `YearOfPassing` varchar(100) NOT NULL,
  `ugStatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ug`
--

INSERT INTO `ug` (`ApplicationId`, `Degree`, `Branch`, `cgpa`, `class`, `College`, `YearOfPassing`, `ugStatus`) VALUES
('NIT_AP_2020_1', 'B.Tech', 'CSE', '8.7', 'Distinction', 'NIT-AndhraPradesh', '2016', 'Submitted'),
('NIT_AP_2020_2', 'B.Tech', 'CSE', '8.7', 'Distinction', 'NIT-AndhraPradesh', '2016', 'Submitted'),
('NIT_AP_2020_3', 'B.Tech', 'CSE', '8.7', 'Distinction', 'NIT-AndhraPradesh', '2016', 'Submitted');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `ApplicationId` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Department` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Research` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Programme` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TestResult` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`ApplicationId`, `Date`, `Name`, `Email`, `Department`, `Research`, `Programme`, `Password`, `Status`, `TestResult`) VALUES
('NIT_AP_2020_1', '2020-06-04', 'priya', 'VSVARAPRIYA@gmail.com', 'Computer Science and Engineering', 'Soft Computing', 'Stipendary', 'srinivasa', 'Pending', ''),
('NIT_AP_2020_2', '2020-06-04', 'satya', 'kambala.satyasri@gmail.com', 'Mechanical Engineering', 'Fluid Mechanics', 'Non Stipendary', 'satya', 'Pending', ''),
('NIT_AP_2020_3', '2020-06-04', 'prasuna Pulivendula', 'prasuna@gmail.com', 'Computer Science and Engineering', 'Soft Computing', 'Non Stipendary', 'prasuna', 'Pending', ''),
('NIT_AP_2020_4', '2020-06-04', 'xyz', 'xyz@gmail.com', 'Computer Science and Engineering', 'Data Mining', 'Non Stipendary', 'srinivasa', 'Not Submitted', ''),
('NIT_AP_2020_5', '2020-06-04', 'abc', 'abc@gmail.com', 'Computer Science and Engineering', 'Soft Computing', 'Non Stipendary', 'abc', 'Not Submitted', ''),
('NIT_AP_2020_6', '2020-08-19', 'Priya Vadluru', 'V@gmail.com', 'Chemical Engineering', 'Fluid Mechanics', 'On Campus', 'fg', 'Not Submitted', '');

-- --------------------------------------------------------

--
-- Table structure for table `workexperience`
--

CREATE TABLE `workexperience` (
  `ApplicationId` varchar(100) NOT NULL,
  `Institute` varchar(100) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workexperience`
--

INSERT INTO `workexperience` (`ApplicationId`, `Institute`, `Position`, `StartDate`, `EndDate`, `status`) VALUES
('NIT_AP_2020_1', 'NA', 'NA', '2001-01-02', '2001-03-02', 'submitted'),
('NIT_AP_2020_2', 'xyz', 'lecturer', '2019-06-06', '2019-09-07', 'submitted'),
('NIT_AP_2020_3', 'xyz', 'lecturer', '2019-02-01', '2019-09-20', 'submitted'),
('NIT_AP_2020_3', 'abc', 'lecturer', '2019-10-01', '2020-05-02', 'submitted'),
('NIT_AP_2020_3', 'xyz', 'lecturer', '2018-12-03', '2018-12-31', 'submitted'),
('NIT_AP_2020_4', 'NA', 'NA', '2001-01-01', '2001-01-01', 'submitted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `personaldetails`
--
ALTER TABLE `personaldetails`
  ADD KEY `ApplicationId` (`ApplicationId`);

--
-- Indexes for table `ug`
--
ALTER TABLE `ug`
  ADD KEY `ApplicationId` (`ApplicationId`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`ApplicationId`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `personaldetails`
--
ALTER TABLE `personaldetails`
  ADD CONSTRAINT `PersonalDetails_ibfk_1` FOREIGN KEY (`ApplicationId`) REFERENCES `userlogin` (`ApplicationId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

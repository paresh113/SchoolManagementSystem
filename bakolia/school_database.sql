-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 02:36 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Class_ID` varchar(2) DEFAULT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `Student_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Class_ID`, `Location`, `Student_ID`) VALUES
('1A', 'North Building', 2110002),
('1B', 'South Building', 2110003),
('2A', 'North Building', 2110004),
('2B', 'South Building', 2110005),
('3A', 'North Building', 2110006),
('3B', 'South Building', 2110007),
('4A', 'North Building', 2110001);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Name` varchar(20) DEFAULT NULL,
  `ID` int(11) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Fees` int(11) DEFAULT NULL,
  `Status` varchar(1) DEFAULT NULL,
  `Class` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Name`, `ID`, `Address`, `Fees`, `Status`, `Class`) VALUES
('Md. Julkarnain Fahim', 2110002, 'Muradpur', 300, 'Y', '1A'),
('Mohammed Samin Bin S', 2110003, 'Chawkbazar', 300, 'Y', '1B'),
('Shefayet Karim', 2110004, 'Chawkbazar', 300, 'N', '2A'),
('Md. Abrar Khan Alvi', 2110005, 'Panchlish', 300, 'Y', '2B'),
('Mohammad Tohfaye', 2110006, '2 no gate', 300, 'Y', '3A'),
('Syed Abdullah Al Mas', 2110001, 'Chawkbazar', 300, 'Y', '4A');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Teacher_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`ID`, `Name`, `Teacher_ID`) VALUES
(101, 'Math', 2000005),
(102, 'Science', 2003045),
(105, 'Bangla', 2004004),
(110, 'English', 2015002),
(120, 'Sports', 2010003);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Name` varchar(40) NOT NULL,
  `ID` int(11) NOT NULL,
  `Designation` varchar(40) NOT NULL,
  `Salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Name`, `ID`, `Designation`, `Salary`) VALUES
('Sajjad Hossine', 1997001, 'Head Master', 40000),
('Mohammad kamal Hossain', 2000005, 'Senior', 35000),
('Mohammed Rashed Iqbal', 2003045, 'senior', 37000),
('Rina Dutta', 2004004, 'Senior', 32000),
('Abdul Mannan', 2010003, 'junior', 30000),
('Nasrin Ara Dewan', 2015002, 'junior', 28000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD High KEY (`ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD High KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

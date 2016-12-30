-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2016 at 11:47 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `isbn` varchar(50) NOT NULL,
  `titleOfbook` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `copyright` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `placeOfpublicity` varchar(50) NOT NULL,
  `copies` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `classnumber` int(50) NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `timeregister` varchar(50) NOT NULL,
  `dateregister` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `imageurl` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`isbn`, `titleOfbook`, `author`, `copyright`, `publisher`, `placeOfpublicity`, `copies`, `subject`, `classnumber`, `registeredby`, `timeregister`, `dateregister`, `status`, `imageurl`) VALUES
('acrsewasfec', 'Accessible EPUB 3', 'Matt Garrish', '', '', '', '10', 'Information Technology', 0, 'Abhie Faa', '', '', '1', 'AccessibleEPUB3.gif');

-- --------------------------------------------------------

--
-- Table structure for table `borrowedbook`
--

CREATE TABLE `borrowedbook` (
  `NO` int(11) NOT NULL,
  `LASTNAME` varchar(50) NOT NULL,
  `FIRSTNAME` varchar(50) NOT NULL,
  `YEAR` varchar(50) NOT NULL,
  `STUDENTID` varchar(50) NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `BOOKSTATUS` varchar(50) NOT NULL,
  `ISSUEDTIME` varchar(50) NOT NULL,
  `ISSUEDBY` varchar(50) NOT NULL,
  `ISBN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowedbook`
--

INSERT INTO `borrowedbook` (`NO`, `LASTNAME`, `FIRSTNAME`, `YEAR`, `STUDENTID`, `TITLE`, `BOOKSTATUS`, `ISSUEDTIME`, `ISSUEDBY`, `ISBN`) VALUES
(6, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'dave', 'RETURNED BOOK', '03/10/2016 -  12:59:18 AM', 'Dave Dizon', '123`'),
(7, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'Crazy', 'RETURNED BOOK', '03/10/2016 -  1:13:20 AM', 'Dave Dizon', '546534654'),
(8, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'dfgfgdgdg', 'RETURNED BOOK', '03/10/2016 -  1:14:06 AM', 'Dave Dizon', 'dfd gf'),
(9, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'awd', 'RETURNED BOOK', '03/10/2016 -  1:15:13 AM', 'Dave Dizon', 'awd'),
(10, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'ghfghf', 'RETURNED BOOK', '03/10/2016 -  1:16:08 AM', 'Dave Dizon', 'gf'),
(11, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'UYTYU', 'RETURNED BOOK', '03/10/2016 -  1:17:16 AM', 'Dave Dizon', 'hjuytTYTU'),
(12, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'dave', 'RETURNED BOOK', '03/10/2016 -  1:18:43 AM', 'Dave Dizon', '123`'),
(13, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'awd', 'RETURNED BOOK', '03/10/2016 -  1:19:53 AM', 'Dave Dizon', 'awd'),
(14, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'ghfghf', 'RETURNED BOOK', '03/10/2016 -  1:25:05 AM', 'Dave Dizon', 'gf'),
(15, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'ghfghf', 'RETURNED BOOK', '03/10/2016 -  1:25:29 AM', 'Dave Dizon', 'HAHAHA'),
(16, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'Crazy', 'RETURNED BOOK', '03/10/2016 -  1:28:35 AM', 'Dave Dizon', '546534654'),
(17, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'awd', 'RETURNED BOOK', '03/10/2016 -  1:31:30 AM', 'Dave Dizon', 'awd'),
(18, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'dfgfgdgdg', 'RETURNED BOOK', '03/10/2016 -  1:31:51 AM', 'Dave Dizon', 'dfd gf'),
(19, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'Crazy', 'RETURNED BOOK', '03/10/2016 -  1:33:14 AM', 'Dave Dizon', '546534654'),
(20, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'dave', 'RETURNED BOOK', '03/10/2016 -  1:40:58 AM', 'Dave Dizon', '123`'),
(21, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'Crazy', 'RETURNED BOOK', '03/10/2016 -  1:41:29 AM', 'Dave Dizon', '546534654'),
(22, 'Abril', 'John Mark', '3rd', 'C-008120-13', 'Crazy', 'RETURNED BOOK', '03/10/2016 -  2:45:22 AM', 'Dave Dizon', '546534654'),
(23, 'Abril', 'John Mark', '3rd', 'C-008120-13', 'awd', 'RETURNED BOOK', '03/10/2016 -  2:50:21 AM', 'Dave Dizon', 'awd'),
(24, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'ghfghf', 'RETURNED BOOK', '03/10/2016 -  2:50:25 AM', 'Dave Dizon', 'gf'),
(25, 'Abril', 'John Mark', '3rd', 'C-008120-13', 'dave', 'RETURNED BOOK', '03/10/2016 -  2:51:43 AM', 'Dave Dizon', '123`'),
(26, 'Abril', 'John Mark', '3rd', 'C-008120-13', 'dfgfgdgdg', 'RETURNED BOOK', '03/10/2016 -  2:52:11 AM', 'Dave Dizon', 'dfd gf'),
(27, 'Abril', 'John Mark', '3rd', 'C-008120-13', 'Crazy', 'RETURNED BOOK', '03/10/2016 -  2:52:57 AM', 'Dave Dizon', '546534654'),
(28, 'Abril', 'John Mark', '3rd', 'C-008120-13', 'haskdf', 'RETURNED BOOK', '03/10/2016 -  2:53:33 AM', 'Dave Dizon', 'kjasd'),
(29, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'Crazy', 'RETURNED BOOK', '03/10/2016 -  2:55:44 AM', 'Dave Dizon', '546534654'),
(30, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'Crazy', 'RETURNED BOOK', '03/10/2016 -  3:17:42 AM', 'Dave Dizon', '546534654'),
(31, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'dave', 'RETURNED BOOK', '03/10/2016 -  3:56:43 AM', 'Dave Dizon', '123`'),
(32, 'Faa', 'Abhie', '3rd', 'C-008145-13', 'awd', 'RETURNED BOOK', '03/10/2016 -  3:58:17 AM', 'Dave Dizon', 'awd'),
(33, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'Crazy', 'RETURNED BOOK', '09/22/2016 -  9:12:00 PM', 'Abhie Faa', '546534654'),
(34, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'Crazy', 'RETURNED BOOK', '10/10/2016 -  11:39:50 AM', 'Abhie Faa', '546534654'),
(35, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'CS', 'RETURNED BOOK', '10/10/2016 -  11:54:32 AM', 'Abhie Faa', '123'),
(36, 'Dizon', 'Dave', '3rd', 'C-00654-14', 'CS', 'RETURNED BOOK', '10/10/2016 -  11:55:27 AM', 'Abhie Faa', '123');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `NO` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`NO`, `NAME`, `username`, `password`) VALUES
(1, 'Dave Dizon', 'dave', '123455'),
(2, 'Abhie Faa', 'abhie', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `online_user`
--

CREATE TABLE `online_user` (
  `NO` int(11) NOT NULL,
  `FIRSTNAME` varchar(100) NOT NULL,
  `LASTNAME` varchar(100) NOT NULL,
  `YEAR` varchar(100) NOT NULL,
  `SECTION` varchar(100) NOT NULL,
  `IDNO` varchar(100) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `ADDRESS` varchar(500) NOT NULL,
  `EMAILADDRESS` varchar(100) NOT NULL,
  `PHONENUMBER` varchar(15) NOT NULL,
  `POSITION` varchar(50) NOT NULL,
  `STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_user`
--

INSERT INTO `online_user` (`NO`, `FIRSTNAME`, `LASTNAME`, `YEAR`, `SECTION`, `IDNO`, `PASSWORD`, `ADDRESS`, `EMAILADDRESS`, `PHONENUMBER`, `POSITION`, `STATUS`) VALUES
(1, 'Avegail', 'Faa', 'Fourth Year', 'A', 'C-006111-13', 'bd41076a7ad3ab2e8d8a4d2554a70a89', '140 10th st. 10th ave. Caloocan City', 'abhiefaa@gmail.com', '09123456789', 'Librarian', 'Registered'),
(2, 'Rikki Dave', 'Dizon', 'Fourth Year', 'A', 'C-007387-14', 'c677b023926f1e851fab9a43ef22a2e3', '140 10th st. 10th ave. Caloocan City', 'davedizon@gmail.com', '09123456789', 'Student', 'Registered');

-- --------------------------------------------------------

--
-- Table structure for table `registrationforstudent`
--

CREATE TABLE `registrationforstudent` (
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `midddle` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `studno` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrationforstudent`
--

INSERT INTO `registrationforstudent` (`lastname`, `firstname`, `midddle`, `year`, `section`, `address`, `studno`, `status`) VALUES
('Dizon', 'Dave', 'B', '3rd', 'A', 'Caloocan City', 'C-00654-14', 'Registered'),
('Faa', 'Abhie', ' ', '3rd', 'A', 'Caloocan City', 'C-008145-13', 'Registered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`isbn`,`classnumber`);

--
-- Indexes for table `borrowedbook`
--
ALTER TABLE `borrowedbook`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `online_user`
--
ALTER TABLE `online_user`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `registrationforstudent`
--
ALTER TABLE `registrationforstudent`
  ADD PRIMARY KEY (`studno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrowedbook`
--
ALTER TABLE `borrowedbook`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `online_user`
--
ALTER TABLE `online_user`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 17, 2023 at 12:02 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `aid` int NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `dor` varchar(10) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `email`, `password`, `dor`) VALUES
(1, 'admin@gmail.com', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

DROP TABLE IF EXISTS `tbl_answer`;
CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `aid` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `qid` int NOT NULL,
  `answer` varchar(200) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`aid`, `uid`, `qid`, `answer`, `date`) VALUES
(7, 1, 6, 'yes i am!!', '2023-09-16'),
(8, 1, 4, 'amazing teacher', '2023-09-16'),
(4, 4, 2, 'my name in poorvi', '2023-09-15'),
(5, 1, 5, 'yes i am !!', '2023-09-16'),
(6, 1, 3, 'ever green language', '2023-09-16'),
(9, 2, 1, 'php means rohit sir', '2023-09-16'),
(10, 2, 1, 'amazing', '2023-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_college`
--

DROP TABLE IF EXISTS `tbl_college`;
CREATE TABLE IF NOT EXISTS `tbl_college` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `college` varchar(60) NOT NULL,
  `status` varchar(1) NOT NULL,
  `dor` varchar(10) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_college`
--

INSERT INTO `tbl_college` (`cid`, `college`, `status`, `dor`) VALUES
(1, 'C.M College,Darbhanga', 'n', '2023-09-08'),
(2, 'B.R.B College,Samastipur', 'n', '2023-09-08'),
(3, 'R.B College,Samastipur', 'n', '2023-09-08'),
(6, 'LNMU Campus,Darbhanga', 'n', '2023-09-10'),
(7, 'C.M Science College,Darbhanga', 'n', '2023-09-13'),
(8, 'R.K College,Madhubani', 'n', '2023-09-13'),
(9, 'J.N College,Darbhanga', 'n', '2023-09-13'),
(10, 'B.M.A College,Darbhanga', 'n', '2023-09-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complain`
--

DROP TABLE IF EXISTS `tbl_complain`;
CREATE TABLE IF NOT EXISTS `tbl_complain` (
  `cmpid` int NOT NULL AUTO_INCREMENT,
  `ctid` int NOT NULL,
  `uid` int NOT NULL,
  `complain` varchar(200) NOT NULL,
  `doc` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL,
  `docomplain` varchar(10) NOT NULL,
  PRIMARY KEY (`cmpid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_complain`
--

INSERT INTO `tbl_complain` (`cmpid`, `ctid`, `uid`, `complain`, `doc`, `status`, `docomplain`) VALUES
(7, 6, 3, 'bilkul nai hoti', '2023-09-13', 'P', ''),
(5, 1, 1, 'BAHUT HAI', '2023-09-12', 'N', ''),
(6, 3, 1, 'khana nai aacha', '2023-09-13', 'P', ''),
(8, 2, 3, 'tuta-futa hai', '2023-09-13', 'N', ''),
(9, 8, 4, 'itni safai ghr me nai\r\n', '2023-09-13', 'N', ''),
(10, 4, 1, 'hai hi nai', '2023-09-13', 'C', '2023-09-13'),
(11, 6, 0, 'nai hoti', '2023-09-13', 'N', ''),
(13, 5, 1, 'techers absent rahte hai', '2023-09-13', 'C', '2023-09-13'),
(14, 3, 1, 'time pr khana nai aata', '2023-09-13', 'C', '2023-09-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complain_type`
--

DROP TABLE IF EXISTS `tbl_complain_type`;
CREATE TABLE IF NOT EXISTS `tbl_complain_type` (
  `ctid` int NOT NULL AUTO_INCREMENT,
  `complain_type` varchar(60) NOT NULL,
  `doc` varchar(10) NOT NULL,
  PRIMARY KEY (`ctid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_complain_type`
--

INSERT INTO `tbl_complain_type` (`ctid`, `complain_type`, `doc`) VALUES
(1, 'Fees', '2023-09-10'),
(2, 'Hostel', '2023-09-10'),
(3, 'Mess', '2023-09-10'),
(4, 'Bus Facility', '2023-09-10'),
(5, 'Academics', '2023-09-10'),
(6, 'Ragging', '2023-09-10'),
(8, 'Sanitary', '2023-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

DROP TABLE IF EXISTS `tbl_question`;
CREATE TABLE IF NOT EXISTS `tbl_question` (
  `qid` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `question` varchar(200) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`qid`, `uid`, `question`, `date`) VALUES
(1, 1, 'what is php?', '2023-09-15'),
(2, 1, 'what is your name?', '2023-09-15'),
(3, 4, 'what is java?', '2023-09-15'),
(4, 4, 'who is rohit kumar?', '2023-09-15'),
(5, 4, 'are you there?', '2023-09-15'),
(6, 1, 'Where are you now?', '2023-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

DROP TABLE IF EXISTS `tbl_session`;
CREATE TABLE IF NOT EXISTS `tbl_session` (
  `sid` int NOT NULL AUTO_INCREMENT,
  `session` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL,
  `dor` varchar(10) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_session`
--

INSERT INTO `tbl_session` (`sid`, `session`, `status`, `dor`) VALUES
(1, '2019-2021', 'n', '2023-09-07'),
(2, '2020-2023', 'n', '2023-09-07'),
(3, '2022-2024', 'n', '2023-09-07'),
(4, '2023-2025', 'n', '2023-09-07'),
(10, '2024-2026', 'n', '2023-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `mobile` bigint NOT NULL,
  `dob` varchar(10) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` int NOT NULL,
  `course` varchar(20) NOT NULL,
  `sid` int NOT NULL,
  `cid` int NOT NULL,
  `status` varchar(1) NOT NULL,
  `dor` varchar(20) NOT NULL,
  `profile` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`,`name`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `name`, `fname`, `gender`, `email`, `password`, `mobile`, `dob`, `address`, `city`, `pincode`, `course`, `sid`, `cid`, `status`, `dor`, `profile`) VALUES
(1, 'Poorvi Bajpai ', 'Mr.ShriNarayan Bajpai', 'female', 'poorvi@gmail.com', '9999', 6391192006, '2005-02-09', 'unnao', 'Samastipur', 209831, 'PHD', 1, 2, 'Y', '2023-09-08', '4.jpeg'),
(2, ' Aryan Shukla', 'Mr. Chandra Bhan Shukla', 'male', 'aryan@gmail.com', 'aryan123', 9140308462, '2002-07-12', 'unnao', 'Darbhanga', 209831, 'PHD', 3, 3, 'N', '2023-09-08', 'aryan.jpeg'),
(4, 'Ram Dwivedi', 'Dwivedi', 'male', 'ram@gmail.com', '2001', 8218155051, '2004-10-15', 'mathura', 'Madhubani', 281204, 'B.Sc', 2, 3, 'Y', '2023-09-08', 'pix3.jpg'),
(5, 'Trisha Mishra', 'Mr. Rajesh Kumar Mishra', 'female', 'trisha@gmail.com', 't@123', 6393087117, '2005-08-26', 'Prayagraj', 'Muzaffarpur', 212303, 'B.Com', 3, 1, 'N', '2023-09-08', ''),
(6, 'Rahul Singh Parihar', 'Arvind Kumar Singh', 'male', 'rahul@gmail.com', 'Rahul123', 7380558551, '1999-03-19', 'Ballia', 'Samastipur', 277304, 'M.Com', 1, 1, 'N', '2023-09-08', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

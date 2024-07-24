-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 06:36 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cno` int(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `dno` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cno`, `cname`, `dno`) VALUES
(2001, 'MCA', 1001),
(2002, 'BCA', 1001),
(2003, 'MBA', 1002),
(2004, 'BBA', 1002),
(2005, 'BTECH', 1003);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `dno` int(20) NOT NULL,
  `dname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dno`, `dname`) VALUES
(1001, 'CCSA'),
(1002, 'CMS'),
(1003, 'DUIET');

-- --------------------------------------------------------

--
-- Table structure for table `enrolfor`
--

CREATE TABLE `enrolfor` (
  `id` int(20) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `cno` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolfor`
--

INSERT INTO `enrolfor` (`id`, `doj`, `cno`) VALUES
(3001, '01-04-2021', 2001),
(3002, '14-04-2021', 2001);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('test', '123');

-- --------------------------------------------------------

--
-- Table structure for table `studentt`
--

CREATE TABLE `studentt` (
  `id` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `dno` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentt`
--

INSERT INTO `studentt` (`id`, `fname`, `mname`, `lname`, `dob`, `sex`, `phno`, `email`, `religion`, `caste`, `state`, `city`, `dno`) VALUES
(3001, 'Surajit', '', 'Baruah', '28-02-2021', 'Male', '8987867787', 'test@gmail.com', 'Hinduism', 'General', 'Assam', 'Dibrugarh', 1001),
(3002, 'Chandan', '', 'Koiri', '22/07/1997', 'Male', '9999999999', 'test@g', 'Hinduism', 'General', 'Assam', 'Tinsukia', 1001);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

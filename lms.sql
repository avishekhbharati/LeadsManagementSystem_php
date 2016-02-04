-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2016 at 02:12 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(2) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(50) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
(1, 'Computing'),
(2, 'Multimedia'),
(3, 'Networking'),
(4, 'BBA');

-- --------------------------------------------------------

--
-- Table structure for table `followup`
--

CREATE TABLE IF NOT EXISTS `followup` (
  `followup_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `lead_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `feedback` text,
  PRIMARY KEY (`followup_id`),
  KEY `lead_id` (`lead_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `followup`
--

INSERT INTO `followup` (`followup_id`, `user_id`, `lead_id`, `date`, `feedback`) VALUES
(1, 1, 8, '2016-01-18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE IF NOT EXISTS `lead` (
  `lead_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'active',
  `is_student` tinyint(1) NOT NULL DEFAULT '0',
  `college` varchar(100) NOT NULL,
  `course_id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  PRIMARY KEY (`lead_id`),
  KEY `course_id` (`course_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`lead_id`, `fname`, `lname`, `email`, `contactno`, `address`, `date`, `status`, `is_student`, `college`, `course_id`, `user_id`) VALUES
(8, 'avi', 'bro', 'bro@yahoo.com', '1212', 'dhumbarahi', '2016-01-09', 'active', 0, 'don bosco', 1, 1),
(9, 'hello', 'world', 'helO@yahoo.com', '9899898', 'hellothere ', '2016-01-22', 'active', 0, 'sasdasdsada', 2, 1),
(10, 'harkay ', 'bahadur', 'helO@yahoo.com', '9899898', 'hellothere ', '2016-01-22', 'dismissed', 0, 'sasdasdsada', 2, 1),
(11, 'hello', 'world', 'helO@yahoo.com', '9899898', 'hellothere ', '2016-01-22', 'active', 0, 'sasdasdsada', 2, 1),
(12, 'himanshu ', 'hamal', 'him@shnu.comd', '898989898', 'sukhedhaa', '2015-02-02', 'expired', 0, 'sdsadsadasdsadasd', 3, 1),
(13, 'jiwan', 'bayalkoti', 'test@test.comd', '898989898', 'sukhedhaa', '2015-02-02', 'active', 0, 'softwarica college', 2, 1),
(14, 'hari', 'sharma', 'test@test.comd', '2121212', 'ason', '2015-02-02', 'postponed', 0, 'softwarica college', 1, 1),
(15, 'dixya', 'karki', 'xyz@xyz.com', '9849651234', 'lokanthali', '2015-02-02', 'active', 0, 'Bernherdt', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `address`, `contactno`, `email`, `password`, `role`) VALUES
(1, 'sulav ', 'budhathoki', 'new road', '21211212', 'sulav@yahoo.com', 'sulav', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `followup`
--
ALTER TABLE `followup`
  ADD CONSTRAINT `followup_ibfk_2` FOREIGN KEY (`lead_id`) REFERENCES `lead` (`lead_id`),
  ADD CONSTRAINT `followup_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `lead`
--
ALTER TABLE `lead`
  ADD CONSTRAINT `lead_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `lead_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

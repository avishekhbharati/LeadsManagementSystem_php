-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2016 at 11:09 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=538 ;

--
-- Dumping data for table `followup`
--

INSERT INTO `followup` (`followup_id`, `user_id`, `lead_id`, `date`, `feedback`) VALUES
(0, 3, 16, '0000-00-00', NULL),
(1, 1, 8, '2016-01-29', NULL),
(2, 3, 26, '2015-12-01', NULL),
(3, 3, 26, '2016-01-21', 'intereted but contact next week.\r\n\r\n'),
(5, 2, 16, '2016-01-21', 'Out of town . be back next week \r\n'),
(6, 2, 16, '2016-01-18', 'no feed back but interested\r\n'),
(7, 3, 26, '2015-11-01', NULL),
(8, 3, 26, '2015-11-09', NULL),
(10, 3, 26, '2015-11-23', NULL),
(12, 3, 8, '2016-01-21', ' feedback 1 jfjdsf sdfisd  sifhsdklhfsdkl sdfhskdlhfsld dhfklsdhflksd sdfhkjsdhf klsdhfksdhf sfhsdkjhfklsdhf sdfklsdhflksdhf kjhj kjhkasjhdkaj kjshdkjas feedback 1 jfjdsf sdfisd  sifhsdklhfsdkl sdfhskdlhfsld dhfklsdhflksd sdfhkjsdhf klsdhfksdhf sfhsdkjhfklsdhf sdfklsdhflksdhf kjhj kjhkasjhdkaj kjshdkjas feedback 1 jfjdsf sdfisd  sifhsdklhfsdkl sdfhskdlhfsld dhfklsdhflksd sdfhkjsdhf klsdhfksdhf sfhsdkjhfklsdhf sdfklsdhflksdhf kjhj kjhkasjhdkaj kjshdkjas feedback 1 jfjdsf sdfisd  sifhsdklhfsdkl sdfhskdlhfsld dhfklsdhflksd sdfhkjsdhf klsdhfksdhf sfhsdkjhfklsdhf sdfklsdhflksdhf kjhj kjhkasjhdkaj kjshdkjas '),
(13, 2, 8, '2015-12-08', 'feedback 2'),
(14, 2, 8, '2016-01-21', 'feedback 3'),
(17, 2, 9, '2016-01-23', NULL),
(19, 2, 17, '2016-01-29', '............'),
(26, 2, 17, '2016-01-01', '............'),
(32, 2, 11, '2016-01-13', NULL),
(33, 3, 16, '2016-01-28', ''),
(34, 3, 9, '2016-01-29', ''),
(35, 3, 16, '2016-01-19', ''),
(36, 3, 16, '2016-01-19', ''),
(37, 3, 16, '2016-01-30', ''),
(38, 3, 16, '2016-02-01', ''),
(39, 3, 16, '2016-01-04', ''),
(512, 2, 13, '2016-01-29', ''),
(513, 2, 13, '2016-01-20', ''),
(514, 2, 9, '2016-01-22', 'dhsdkjhfhsgfs jhsdf'),
(515, 2, 9, '2016-01-30', ''),
(516, 2, 9, '2016-01-28', ''),
(517, 2, 13, '2016-01-29', ''),
(519, 2, 8, '2016-01-22', 'test me!'),
(520, 2, 27, '2016-01-26', 'registered today !!!!'),
(521, 2, 28, '2016-01-21', 'registered today !!!!'),
(522, 2, 29, '2016-01-29', 'registered today !!!!'),
(523, 2, 28, '2016-01-29', ''),
(524, 2, 9, '2016-01-30', ''),
(525, 2, 9, '2016-01-26', ''),
(526, 2, 9, '2016-01-24', ''),
(527, 2, 9, '2016-01-27', ''),
(528, 2, 29, '2016-01-31', 'hello world vanyooo...'),
(529, 2, 29, '2016-01-30', ''),
(530, 2, 29, '2016-01-31', ''),
(531, 2, 29, '2016-02-04', ''),
(532, 2, 29, '2016-01-28', ''),
(533, 2, 29, '2016-01-28', ''),
(534, 2, 29, '2016-01-26', ''),
(535, 2, 29, '2016-01-26', ''),
(536, 2, 17, '2016-01-10', ''),
(537, 2, 17, '2016-01-11', '');

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
  `semester` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`lead_id`),
  KEY `course_id` (`course_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`lead_id`, `fname`, `lname`, `email`, `contactno`, `address`, `date`, `status`, `is_student`, `college`, `course_id`, `user_id`, `semester`) VALUES
(8, 'avishek', 'BHARATI', 'bro@yahoo.com', '9849846443', 'dhumbarahi', '2016-01-09', 'postponed', 1, 'don bosco', 1, 2, 'spring'),
(9, 'anish', 'bhandari', 'helO@yahoo.com', '9899898', 'hellothere ', '2016-01-22', 'active', 1, 'sasdasdsada', 2, 2, 'autumn'),
(10, 'harkay ', 'bahadur', 'helO@yahoo.com', '9899898', 'hellothere ', '2016-01-22', 'dismissed', 0, 'sasdasdsada', 2, 3, 'autumn'),
(11, 'hello', 'world', 'helO@yahoo.com', '9899898', 'hellothere ', '2016-01-22', 'active', 0, 'sasdasdsada', 2, 3, 'autumn'),
(12, 'himanshu ', 'hamal', 'him@shnu.comd', '898989898', 'sukhedhaa', '2015-02-02', 'expired', 0, 'sdsadsadasdsadasd', 3, 3, 'autumn'),
(13, 'jiwan', 'bayalkoti', 'test@test.comd', '898989898', 'sukhedhaa', '2015-02-02', 'active', 0, 'softwarica college', 2, 2, 'spring'),
(14, 'hari', 'sharma', 'test@test.comd', '2121212', 'ason', '2015-02-02', 'postponed', 0, 'softwarica college', 1, 3, 'spring'),
(15, 'dixya', 'karki', 'xyz@xyz.com', '9849651234', 'lokanthali', '2015-02-02', 'active', 0, 'Bernherdt', 4, 1, 'spring'),
(16, 'student_new', 'new_student', 'std@yahoo.com', '123', 'asd', '2016-01-06', 'active', 0, 'softwarica', 2, 2, 'autumn'),
(17, 'mike', 'tyson', 'abc@gmail.com', '123', 'abc', '2015-02-02', 'active', 0, 'xav', 3, 2, 'spring'),
(18, 'robin', 'khadka', 'robin@live.com', '100200', 'samakushi', '2015-02-02', 'active', 0, 'herald', 1, 3, 'autumn'),
(22, 'anish', 'karki', 'e@y.com', '898989', 'assasasas', '2015-02-02', 'active', 0, 'college 1', 1, 3, 'spring'),
(24, 'test2', 'test2', 'email@yahoo.com', '1111111', 'add1', '2015-02-02', 'active', 0, 'collwge1', 2, 3, 'spring'),
(25, 'test1', 'test1', 'email@yahoo.com', '1111111', 'add1', '2015-02-02', 'active', 0, 'collwge1', 2, 3, 'spring'),
(26, 'sabin', 'Pathak', 'email@yahoo.com', '78787878787', 'shit hole', '2015-02-02', 'active', 0, 'prime', 3, 3, 'autumn'),
(27, 'simran', 'thapa', 'q2Q@YCOM', '98989', 'chabel', '2016-01-21', 'active', 0, 'bridgewater', 1, 2, 'autumn'),
(28, 'brit', 'cafe', 'col2Y@Y.COM', '6666666', 'brit', '0000-00-00', 'active', 0, 'college ', 2, 2, 'autumn'),
(29, 'oashutosh', 'giri', 'JJJ@HH.COM', 'KJDSFHJK', 'ASDAJDK', '2016-01-21', 'dismissed', 0, 'KJSHD', 1, 2, 'autumn');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `address`, `contactno`, `email`, `password`, `role`) VALUES
(1, 'sulav', 'Budhathoki', 'hetauda', '89898989', 'sulav@yahoo.com', 'de1698dc71fe65bc9d1ece948dc0892f', 1),
(2, 'counselor', 'counselor', 'abc', '91283', 'counselor@gmail.com', '66a93aa4ab79244449a664890e1efa55', 2),
(3, 'himanshu', 'hamal', 'sukhedara', '9841254409', 'himanshu@gmail.com', '4122ea4f5490094a33d7cdba65136cf8', 2),
(6, 'avishekh', 'bharati', 'dhumbarahi', '88989898', 'avi@yahoo.com', 'a0b4836d4f3395ff821a7970bc9b8a10', 1),
(7, 'ram', 'khadka', 'dhulabari', '98989898', 'ram@gmail.com', '4641999a7679fcaef2df0e26d11e3c72', 2),
(8, 'Spandan', 'Lamshal', 'kamaplpkhari', '1235', 'spandan@yahoo.com', '4b4fe7f44b394da3f0d809bd9eb811ff', 2),
(9, 'Deepan', 'Bahun', 'tangal', '989898989', 'deepan@yahoo.com', '2171a8380ef2c424fbc80eb45cee7b91', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `followup`
--
ALTER TABLE `followup`
  ADD CONSTRAINT `followup_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `followup_ibfk_2` FOREIGN KEY (`lead_id`) REFERENCES `lead` (`lead_id`);

--
-- Constraints for table `lead`
--
ALTER TABLE `lead`
  ADD CONSTRAINT `lead_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lead_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2017 at 03:29 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ushare`
--
CREATE DATABASE IF NOT EXISTS `ushare` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ushare`;

-- --------------------------------------------------------

--
-- Table structure for table `agree`
--

CREATE TABLE `agree` (
  `id_agree` int(11) NOT NULL,
  `agree` int(11) DEFAULT NULL,
  `disagree` int(11) DEFAULT NULL,
  `id_confess_agr` int(11) DEFAULT NULL,
  `id_user_agr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `comment_text` text,
  `id_user_com` int(11) DEFAULT NULL,
  `id_confession_com` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `confession`
--

CREATE TABLE `confession` (
  `id_confession` int(11) NOT NULL,
  `id_request` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `confession_title` varchar(255) DEFAULT NULL,
  `confession_text` text,
  `hidden_name` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confession`
--

INSERT INTO `confession` (`id_confession`, `id_request`, `id_users`, `confession_title`, `confession_text`, `hidden_name`, `college`, `date`, `time`) VALUES
(15, 0, 0, 'First Kiss', 'I never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\nOur first kiss', 'A Rocket to the Moon', 'College of Science', '2017-02-14', '01:52am'),
(16, 0, 0, 'Nothing At All', 'Your love is the only thing \r\nI can\'t live without it\r\nIt\'s too good not to talk about it\r\nAbout your love\r\nAnd I wanna know\r\nHow exactly did I get around it?\r\nHow did I ever live without it?\r\nWithout your lovin\'\r\nA little bit of lovin\' \r\nBeats a whole lot of nothing at all', 'A Rocket to the Moon', 'College of Science', '2017-02-14', '01:53am'),
(17, 0, 0, 'In Our Bones', 'Bruises come and go\r\nBut our hearts beat louder than\r\nThe thunder from the storm\r\nIn our darkest hours we are\r\nNot invincible\r\nBut we are stronger than we know\r\nIn our bones, in our bones', 'Against The Current', 'College of Science', '2017-02-14', '01:53am'),
(18, 0, 0, 'With Ears To Open and Eyes To Hear', 'True friends lie underneath,\r\nThe witty words, don\'t believe\r\nI can\'t believe a damn thing they say, anymore\r\nLie! Lie! Liar! Liar you\'ll pay for your sins\r\nLie! Lie! Liar! Liar you\'ll pay for your sins', 'Sleeping With Sirens', 'College of Engineering', '2017-02-14', '01:54am'),
(26, 4, 1, 'Guess Who?', 'I am the one who can go whenever I want to ', 'Who Am I', 'College of Science', '2017-02-16', '02:51pm'),
(27, 5, 1, 'First Kiss', 'I pulled up to a drive\r\nI tightened up my tie\r\nAnd I need to make her wait\r\nNo sleep from the night before\r\nHer dad answers the front door\r\nAnd already knows my name\r\n\r\nI stand in fear\r\nAs she gets near\r\nThen everything\'s okay\r\nI hope this feeling never goes away\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\nOur first kiss\r\n\r\nHer face lit by the movie screen\r\nShe\'s leaning into me\r\nAnd time seems to slip away\r\nLater on we take a walk and\r\nGood thing she likes to talk\r\n\'Cause I can\'t think of what to say\r\n\r\nShe looks at me\r\nAnd she can see\r\nThe chance I wanna take\r\nShe moves in close\r\nAnd take my breath away\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\nOur first kiss\r\n\r\nEvery time feels like a first time\r\n\r\nLooking back on what we had it never went away\r\nShe still makes me feel it every day\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\nOur first kiss ', 'A Rocket to the Moon', 'College of Science', '2017-02-16', '02:57pm');

-- --------------------------------------------------------

--
-- Table structure for table `confession_info`
--

CREATE TABLE `confession_info` (
  `id_confession_info` int(11) NOT NULL,
  `confession_approved` int(11) NOT NULL,
  `confession_requests` int(11) NOT NULL,
  `hidden_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confession_info`
--

INSERT INTO `confession_info` (`id_confession_info`, `confession_approved`, `confession_requests`, `hidden_name`) VALUES
(1, 0, 0, 'A Rocket to the Moon'),
(2, 0, 0, ''),
(3, 0, 0, ''),
(4, 0, 0, ''),
(5, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id_personal_info` int(11) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no` int(12) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id_personal_info`, `display_name`, `first_name`, `last_name`, `middle_name`, `email`, `contact_no`, `birthdate`, `sex`) VALUES
(1, 'Hakeem Joshua Polistico', 'Hakeem', 'Polistico', 'Andaya', 'hjpolistico@gmail.com', 9123123, '1994-07-22', 'Male'),
(2, 'Aljohn Pangilinan', 'Aljohn', 'Pangilinan', 'A', 'aljohn_pangilinan@gmail.com', 2147483647, '1993-12-24', 'Male'),
(3, 'Hakeem Polistico', 'Hakeem', 'Polistico', 'Andaya', 'hjpolistico@gmail.com', 99792, '1994-06-22', 'Male'),
(4, 'reever blu', 'reever', 'blu', '', '', 0, '0000-00-00', ''),
(5, 'Yato Gami', 'Yato', 'Gami', '', '', 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id_request` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `request_title` varchar(255) DEFAULT NULL,
  `request_text` text,
  `hidden_name` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id_request`, `id_users`, `request_title`, `request_text`, `hidden_name`, `college`, `date`, `time`) VALUES
(4, 1, 'Guess Who?', 'I am the one who can go whenever I want to ', 'Who Am I', 'College of Science', '2017-02-14', '04:20pm'),
(5, 1, 'First Kiss', 'I pulled up to a drive\r\nI tightened up my tie\r\nAnd I need to make her wait\r\nNo sleep from the night before\r\nHer dad answers the front door\r\nAnd already knows my name\r\n\r\nI stand in fear\r\nAs she gets near\r\nThen everything\'s okay\r\nI hope this feeling never goes away\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\nOur first kiss\r\n\r\nHer face lit by the movie screen\r\nShe\'s leaning into me\r\nAnd time seems to slip away\r\nLater on we take a walk and\r\nGood thing she likes to talk\r\n\'Cause I can\'t think of what to say\r\n\r\nShe looks at me\r\nAnd she can see\r\nThe chance I wanna take\r\nShe moves in close\r\nAnd take my breath away\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\nOur first kiss\r\n\r\nEvery time feels like a first time\r\n\r\nLooking back on what we had it never went away\r\nShe still makes me feel it every day\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\nOur first kiss ', 'A Rocket to the Moon', 'College of Science', '2017-02-16', '02:56pm');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id_student_info` int(11) NOT NULL,
  `student_no` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `year_graduated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id_student_info`, `student_no`, `course`, `college`, `year_graduated`) VALUES
(1, '14-038-014', 'Bachelor of Science in Information System', 'College of Science', '2018-03'),
(2, '', '', '', ''),
(3, '14-038-014', 'Bachelor of Science in Information System', 'College of Science', '2018-03'),
(4, '', '', '', ''),
(5, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `log` bit(1) DEFAULT NULL,
  `admin` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `cpassword`, `firstname`, `lastname`, `log`, `admin`) VALUES
(1, 'luna_freya', 'adrii', 'adrii', 'Hakeem', 'Polistico', b'1', b'0'),
(2, 'noctis_lucis', 'adrii', 'adrii', 'hakeem', 'polistico', b'0', b'1'),
(3, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', b'0', b'0'),
(4, 'blu', 'reever', 'reever', 'reever', 'blu', b'0', b'0'),
(5, 'yato', 'yato', 'yato', 'Yato', 'Gami', b'0', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agree`
--
ALTER TABLE `agree`
  ADD PRIMARY KEY (`id_agree`),
  ADD KEY `fk_id_confess_agr_idx` (`id_confess_agr`),
  ADD KEY `fk_id_user_agr_idx` (`id_user_agr`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `fk_id_user_req_idx` (`id_user_com`),
  ADD KEY `fk_confession_com_idx` (`id_confession_com`);

--
-- Indexes for table `confession`
--
ALTER TABLE `confession`
  ADD PRIMARY KEY (`id_confession`);

--
-- Indexes for table `confession_info`
--
ALTER TABLE `confession_info`
  ADD PRIMARY KEY (`id_confession_info`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id_personal_info`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_request`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id_student_info`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agree`
--
ALTER TABLE `agree`
  MODIFY `id_agree` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `confession`
--
ALTER TABLE `confession`
  MODIFY `id_confession` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `confession_info`
--
ALTER TABLE `confession_info`
  MODIFY `id_confession_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id_personal_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id_student_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `agree`
--
ALTER TABLE `agree`
  ADD CONSTRAINT `fk_id_confess_agr` FOREIGN KEY (`id_confess_agr`) REFERENCES `confession` (`id_confession`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_confession_com` FOREIGN KEY (`id_confession_com`) REFERENCES `confession` (`id_confession`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `confession_info`
--
ALTER TABLE `confession_info`
  ADD CONSTRAINT `confession_info_ibfk_1` FOREIGN KEY (`id_confession_info`) REFERENCES `users` (`id_users`);

--
-- Constraints for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD CONSTRAINT `personal_info_ibfk_1` FOREIGN KEY (`id_personal_info`) REFERENCES `users` (`id_users`);

--
-- Constraints for table `student_info`
--
ALTER TABLE `student_info`
  ADD CONSTRAINT `student_info_ibfk_1` FOREIGN KEY (`id_student_info`) REFERENCES `users` (`id_users`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

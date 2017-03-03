-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2017 at 07:53 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ushare`
--

-- --------------------------------------------------------

--
-- Table structure for table `agree`
--

CREATE TABLE `agree` (
  `id_agree` int(11) NOT NULL,
  `agree` bit(1) DEFAULT NULL,
  `disagree` bit(1) DEFAULT NULL,
  `id_confess_agr` int(11) DEFAULT NULL,
  `id_user_agr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agree`
--

INSERT INTO `agree` (`id_agree`, `agree`, `disagree`, `id_confess_agr`, `id_user_agr`) VALUES
(58, b'1', b'0', 15, 0),
(78, b'0', b'1', 26, 1),
(83, b'1', b'0', 27, 1),
(88, b'0', b'1', 18, 0),
(89, b'0', b'1', 28, 1),
(93, b'0', b'1', 29, 8),
(95, b'0', b'1', 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `comment_text` text,
  `id_user_com` int(11) DEFAULT NULL,
  `id_confession_com` int(11) DEFAULT NULL,
  `comm_date` date NOT NULL,
  `comm_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `comment_text`, `id_user_com`, `id_confession_com`, `comm_date`, `comm_time`) VALUES
(1, 'Pacool kid ka po boss', 1, 30, '2017-02-22', '12:53am'),
(2, 'Napakahaba ng confession mo ah? Kala mo naman talaga napakaganda mo? eh sino ka ba? kapal ng mukuha mo no?', 1, 30, '2017-02-22', '12:55am'),
(3, 'Ohh Kapal ng mukha mo ', 7, 30, '2017-02-22', '12:55am'),
(4, 'edi shing', 8, 29, '2017-02-27', '10:01pm');

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
(27, 5, 1, 'First Kiss', 'I pulled up to a drive\r\nI tightened up my tie\r\nAnd I need to make her wait\r\nNo sleep from the night before\r\nHer dad answers the front door\r\nAnd already knows my name\r\n\r\nI stand in fear\r\nAs she gets near\r\nThen everything\'s okay\r\nI hope this feeling never goes away\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\nOur first kiss\r\n\r\nHer face lit by the movie screen\r\nShe\'s leaning into me\r\nAnd time seems to slip away\r\nLater on we take a walk and\r\nGood thing she likes to talk\r\n\'Cause I can\'t think of what to say\r\n\r\nShe looks at me\r\nAnd she can see\r\nThe chance I wanna take\r\nShe moves in close\r\nAnd take my breath away\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\nOur first kiss\r\n\r\nEvery time feels like a first time\r\n\r\nLooking back on what we had it never went away\r\nShe still makes me feel it every day\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\nOur first kiss ', 'A Rocket to the Moon', 'College of Science', '2017-02-16', '02:57pm'),
(28, 4, 1, 'Guess Who?', 'I am the one who can go whenever I want to ', 'Who Am I', 'College of Science', '2017-02-17', '02:09pm'),
(29, 7, 6, 'HELLO', ' HELLO WORLD!', 'hello', 'College of Science', '2017-02-21', '10:56am'),
(30, 8, 7, 'Ayoko sayo', ' Ayoko sayo dits', 'Janneh', 'College of Science', '2017-02-21', '11:17am');

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
(6, 0, 0, 'hello'),
(7, 0, 0, 'Janneh'),
(8, 0, 0, '');

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
(6, 'Adrielle Kristine Escaro', 'Adrielle Kristine', 'Escaro', 'Mestiola', 'adrielle_escaro@gmail.com', 0, '1998-06-24', 'Female'),
(7, 'Janferr Catibog', 'Janferr', 'Catibog', '', 'janferr_catibog@gmail.com', 0, '0000-00-00', 'Female'),
(8, 'Jasver Salva', 'Jasver', 'Salva', '', '', 0, '0000-00-00', '');

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
  `time` varchar(8) DEFAULT NULL,
  `approved` bit(1) NOT NULL,
  `declined` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id_request`, `id_users`, `request_title`, `request_text`, `hidden_name`, `college`, `date`, `time`, `approved`, `declined`) VALUES
(4, 1, 'Guess Who?', 'I am the one who can go whenever I want to ', 'Who Am I', 'College of Science', '2017-02-14', '04:20pm', b'1', b'0'),
(5, 1, 'First Kiss', 'I pulled up to a drive\r\nI tightened up my tie\r\nAnd I need to make her wait\r\nNo sleep from the night before\r\nHer dad answers the front door\r\nAnd already knows my name\r\n\r\nI stand in fear\r\nAs she gets near\r\nThen everything\'s okay\r\nI hope this feeling never goes away\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\nOur first kiss\r\n\r\nHer face lit by the movie screen\r\nShe\'s leaning into me\r\nAnd time seems to slip away\r\nLater on we take a walk and\r\nGood thing she likes to talk\r\n\'Cause I can\'t think of what to say\r\n\r\nShe looks at me\r\nAnd she can see\r\nThe chance I wanna take\r\nShe moves in close\r\nAnd take my breath away\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\nOur first kiss\r\n\r\nEvery time feels like a first time\r\n\r\nLooking back on what we had it never went away\r\nShe still makes me feel it every day\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\n\r\nI never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\nOur first kiss ', 'A Rocket to the Moon', 'College of Science', '2017-02-16', '02:56pm', b'1', b'0'),
(6, 1, 'Nothing At All', ' Yeah, you might have somebody\r\nNo, but you don\'t got me\r\nOh, but your thinkin\' \'bout it\r\nYeah, it\'s so easy to see\r\nI won\'t tell nobody\r\nNobody\'s gonna tell on me\r\nWe both know it baby\r\nExactly what this could be\r\n\r\nBut sometimes you can\'t hide\r\nThe way you feel inside\r\n\r\nYour love is the only thing \r\nI can\'t live without it\r\nIt\'s too good not to talk about it\r\nAbout your love\r\nAnd I wanna know\r\nHow exactly did I get around it?\r\nHow did I ever live without it?\r\nWithout your lovin\'\r\nA little bit of lovin\' \r\nBeats a whole lot of nothing at all\r\n\r\nYou\'ve got this thing about you\r\nAnd that thing is just what I need\r\nYou deserve a little something better\r\nAnd I\'ll be waiting patiently\r\nI\'ve been thinking \'bout our life together\r\nEven if it\'s the death of me\r\nAnd I know I\'ll never live forever\r\nBut I don\'t wanna wait and see', 'A Rocket to the Moon', 'College of Science', '2017-02-17', '02:09pm', b'0', b'1'),
(7, 6, 'HELLO', ' HELLO WORLD!', 'hello', 'College of Science', '2017-02-21', '06:51pm', b'1', b'0'),
(8, 7, 'Ayoko sayo', ' Ayoko sayo dits', 'Janneh', 'College of Science', '2017-02-21', '07:16pm', b'1', b'0');

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
(2, '14-038-069', 'Bachelor of Science in Information System', 'College of Science', ''),
(6, '14-038-027', 'Bachelor of Science in Information System', 'College of Science', ''),
(7, '14-038-000', 'Bachelor of Science in Information System', 'College of Science', ''),
(8, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `id_suggestion` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `suggestion_text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'luna_freya', 'adrii', 'adrii', 'Hakeem', 'Polistico', b'0', b'0'),
(2, 'noctis_lucis', 'adrii', 'adrii', 'hakeem', 'polistico', b'0', b'1'),
(6, 'adrii', 'adrii', 'adrii', 'Adrielle', 'Escaro', b'0', b'0'),
(7, 'janferr', 'janferr', 'janferr', 'Janferr', 'Catibog', b'0', b'0'),
(8, 'jassy', 'jassy', 'jassy', 'Jasver', 'Salva', b'1', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agree`
--
ALTER TABLE `agree`
  ADD PRIMARY KEY (`id_agree`),
  ADD UNIQUE KEY `id_confess_agr` (`id_confess_agr`),
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
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`id_suggestion`);

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
  MODIFY `id_agree` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `confession`
--
ALTER TABLE `confession`
  MODIFY `id_confession` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `confession_info`
--
ALTER TABLE `confession_info`
  MODIFY `id_confession_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id_personal_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id_student_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
-- Constraints for table `student_info`
--
ALTER TABLE `student_info`
  ADD CONSTRAINT `student_info_ibfk_1` FOREIGN KEY (`id_student_info`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

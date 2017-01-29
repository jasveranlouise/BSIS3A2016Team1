-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2017 at 06:20 AM
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
  `id_no` int(11) NOT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `confession_title` varchar(255) DEFAULT NULL,
  `confession_text` text,
  `anonymous` bit(1) DEFAULT NULL,
  `hidden_name` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(8) DEFAULT NULL,
  `id_user_confess` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confession`
--

INSERT INTO `confession` (`id_no`, `account_name`, `confession_title`, `confession_text`, `anonymous`, `hidden_name`, `college`, `date`, `time`, `id_user_confess`) VALUES
(1, NULL, 'I Lied', 'I said, "I love you" but I lied.', b'1', 'Sorry Not Sorry', 'College of Science', NULL, NULL, NULL),
(2, '', 'City of Stars', 'City of Stars, are you shining just for me? ', NULL, 'Emma Stone', 'La La Land', '2017-01-28', '01:23pm', NULL),
(3, '', 'First Kiss', 'I never thought I\'d find a love like this\r\nThere\'s no need to hide that feeling we get\r\nWhenever we touch we can\'t resist\r\nWe go back to our first date\r\nOur first kiss ', b'1', 'A Rocket to the Moon', 'College of Science', '2017-01-28', '05:24pm', NULL),
(4, '', 'Things I\'ll Never Say', 'If I could say what I want to see\r\nI want to see you go down on one knee\r\nMarry me today\r\nGuess I\'m wishin\' my life away\r\nWith these things I\'ll never say ', b'1', 'Avril Lavigne', 'College of Science', '2017-01-28', '05:26pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id_request` int(11) NOT NULL,
  `request_title` varchar(255) DEFAULT NULL,
  `request_text` text,
  `anonymous` bit(1) DEFAULT NULL,
  `hidden_name` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(8) DEFAULT NULL,
  `id_user_req` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `log` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `cpassword`, `fname`, `lname`, `log`) VALUES
(1234, 'jassy', 'jassy', '', 'jasver', 'salva', NULL),
(1235, 'hakeem', 'hakeem', 'hakeem', 'hakeem', 'polistico', NULL);

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
  ADD PRIMARY KEY (`id_no`),
  ADD KEY `fk_id_user_con_idx` (`id_user_confess`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `fk_id_user_req_idx` (`id_user_req`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1236;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `agree`
--
ALTER TABLE `agree`
  ADD CONSTRAINT `fk_id_confess_agr` FOREIGN KEY (`id_confess_agr`) REFERENCES `confession` (`id_no`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_user_agr` FOREIGN KEY (`id_user_agr`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_confession_com` FOREIGN KEY (`id_confession_com`) REFERENCES `confession` (`id_no`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_user_com` FOREIGN KEY (`id_user_com`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `confession`
--
ALTER TABLE `confession`
  ADD CONSTRAINT `fk_id_user_con` FOREIGN KEY (`id_user_confess`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `fk_id_user_req` FOREIGN KEY (`id_user_req`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

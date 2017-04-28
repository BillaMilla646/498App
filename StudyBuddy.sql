-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2017 at 03:40 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `StudyBuddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `Chatrooms`
--

CREATE TABLE IF NOT EXISTS `Chatrooms` (
  `Chatroom_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Chatroom_Name` varchar(255) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Chatroom_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Chatrooms`
--

INSERT INTO `Chatrooms` (`Chatroom_Id`, `Chatroom_Name`, `Password`) VALUES
(1, 'CS498 Study Buddy', NULL),
(2, 'CS405 Study Databases', NULL),
(3, 'EE221', '015be9b7530236eaa8ef770defdd5c5917fb6580a4883dd191e1882d8796a118'),
(4, 'test(Private)', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(5, 'test222', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(6, 'test2', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855');

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE IF NOT EXISTS `Comments` (
  `User_Id` int(11) NOT NULL,
  `Chatroom_Id` int(11) NOT NULL,
  `Comment_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Comment` text NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Number_Of_Likes` int(11) NOT NULL,
  PRIMARY KEY (`Comment_Id`),
  UNIQUE KEY `Comment_Id` (`Comment_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `Comments`
--

INSERT INTO `Comments` (`User_Id`, `Chatroom_Id`, `Comment_Id`, `Comment`, `Timestamp`, `Number_Of_Likes`) VALUES
(1, 1, 1, 'Look I can Make a comment', '2017-04-28 14:21:32', 2),
(2, 1, 2, 'Wow that is awesome!', '2017-04-28 14:21:32', 0),
(1, 1, 3, 'This is so much better than groupme.', '2017-04-28 14:21:32', 3),
(1, 3, 4, 'Ohm''s law is easy!', '2017-04-28 14:21:32', 1),
(4, 2, 5, 'Hi', '2017-04-28 16:33:59', 0),
(3, 2, 6, 'Hello', '2017-04-28 16:34:03', 0),
(4, 5, 7, 'hi', '2017-04-28 16:35:08', 0),
(3, 5, 8, 'Hello', '2017-04-28 16:35:10', 0),
(3, 5, 9, 'Kappa', '2017-04-28 16:35:15', 0),
(3, 5, 10, 'l', '2017-04-28 16:35:57', 0),
(2, 5, 11, 'hi', '2017-04-28 16:42:12', 0),
(2, 5, 12, 'this is weir', '2017-04-28 16:42:16', 0),
(3, 5, 13, 'Very', '2017-04-28 16:42:19', 0),
(3, 5, 14, 'a', '2017-04-28 16:42:20', 0),
(2, 5, 15, 'Why is it doing this', '2017-04-28 16:42:21', 0),
(3, 5, 16, 'What', '2017-04-28 16:42:23', 0),
(3, 5, 17, 'w.t.f', '2017-04-28 16:42:29', 0),
(2, 5, 18, 'my message disappeared', '2017-04-28 16:42:55', 0),
(2, 5, 19, 'ooh well', '2017-04-28 16:43:12', 0),
(2, 1, 20, 'Test', '2017-04-28 16:43:51', 0),
(2, 1, 21, 'test', '2017-04-28 16:43:53', 0),
(2, 1, 22, 'Hi', '2017-04-28 16:43:55', 0),
(2, 1, 23, 'This one is working..', '2017-04-28 16:43:59', 0),
(2, 3, 24, 'Hello!', '2017-04-28 16:44:05', 0),
(2, 1, 25, 'Hello', '2017-04-28 16:44:19', 0),
(3, 3, 26, 'hi', '2017-04-28 16:44:19', 0),
(3, 3, 27, 'ok', '2017-04-28 16:44:23', 0),
(2, 1, 28, 'This one works I think', '2017-04-28 16:44:34', 0),
(3, 1, 29, 'test', '2017-04-28 16:44:34', 0),
(3, 1, 30, 'a', '2017-04-28 16:44:39', 0),
(2, 6, 31, 'hello', '2017-04-28 16:44:58', 0),
(2, 6, 32, 'Why is this wrong', '2017-04-28 16:45:00', 0),
(2, 6, 33, 'Huh>', '2017-04-28 16:45:03', 0),
(2, 6, 34, '??', '2017-04-28 16:45:05', 0),
(3, 6, 35, 'ikd', '2017-04-28 16:45:19', 0),
(3, 6, 36, 'idk', '2017-04-28 16:45:20', 0),
(2, 6, 37, 'is this one workng', '2017-04-28 16:45:23', 0),
(2, 6, 38, 'kinda but not really', '2017-04-28 16:45:31', 0),
(3, 6, 39, 'Still wrong...?', '2017-04-28 16:45:33', 0),
(2, 6, 40, 'weir', '2017-04-28 16:45:40', 0),
(2, 6, 41, 'yeah it seems like', '2017-04-28 16:45:47', 0),
(2, 6, 42, 'the new ones arent working right', '2017-04-28 16:45:51', 0),
(3, 6, 43, 'True.......idk', '2017-04-28 16:45:56', 0),
(2, 6, 44, 'Go to the first chatroom', '2017-04-28 16:46:01', 0),
(2, 1, 45, 'checking for multi messages', '2017-04-28 16:46:14', 0),
(3, 6, 46, 's', '2017-04-28 16:46:15', 0),
(2, 1, 47, 'test', '2017-04-28 16:46:17', 0),
(2, 1, 48, 'ok this one is breaking too', '2017-04-28 16:46:24', 0),
(2, 1, 49, 'sdfgdfsfdgsfd''', '2017-04-28 16:46:46', 0),
(2, 1, 50, 'dsfgsdfgsdf''', '2017-04-28 16:46:52', 0),
(3, 6, 51, '"', '2017-04-28 16:47:50', 0),
(3, 6, 52, '''', '2017-04-28 16:47:53', 0),
(3, 6, 53, '`', '2017-04-28 16:48:00', 0),
(3, 6, 54, '!@@@@#$%^&*()_+', '2017-04-28 16:48:11', 0),
(4, 3, 55, 'test', '2017-04-28 17:29:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Subscribes`
--

CREATE TABLE IF NOT EXISTS `Subscribes` (
  `UID` int(11) NOT NULL,
  `Chatroom_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Subscribes`
--

INSERT INTO `Subscribes` (`UID`, `Chatroom_Id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `UID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(256) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `LastLogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UID`, `Name`, `Email`, `Password`, `LastLogin`) VALUES
(1, 'Clay Marshall', 'clay@StudyBuddy.com', '8122cba12b897aa5546baf90b6c82c9f646f976b3555033cbc5e0b72d4f7a5bc', '2017-04-28 14:21:32'),
(2, 'Testing User', 'test@StudyBuddy.com', '532eaabd9574880dbf76b9b8cc00832c20a6ec113d682299550d7a6e0f345e25', '2017-04-28 16:42:01'),
(3, 'Billamilla', 'bill@bill.com', '9834876dcfb05cb167a5c24953eba58c4ac89b1adf57f28f2f9d09af107ee8f0', '2017-04-28 16:05:18'),
(4, 'DemoUSer', 'test@test.com', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', '2017-04-28 17:28:32');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

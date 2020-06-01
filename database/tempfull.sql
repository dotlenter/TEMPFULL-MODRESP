-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 09:47 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tempfull`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutdata`
--

CREATE TABLE `aboutdata` (
  `id` int(11) NOT NULL,
  `code` varchar(2000) NOT NULL,
  `headerWelcomeMsg` varchar(2000) NOT NULL,
  `lowerWelcomeMsg` varchar(2000) NOT NULL,
  `headerBackground` varchar(2000) NOT NULL,
  `headerContent` varchar(2000) NOT NULL,
  `lowerContent` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutdata`
--

INSERT INTO `aboutdata` (`id`, `code`, `headerWelcomeMsg`, `lowerWelcomeMsg`, `headerBackground`, `headerContent`, `lowerContent`) VALUES
(1, 'mytheme01', 'Hi! I\'m John Mar Lorenzo', 'I\'m a student Web designer / Developer from Holy Cross of Davao College.', 'inrocket.jpg', 'Hi.', 'I\'m John Mar, I\'m a student studying at Holy Cross of Davao College as a third year Bachelor Of Science in Information Technology. I made this website LorenZone, for my IT10(Web Development1) Project instructed by Ms. Nancy Mozo. \r\n<br /> <br />\r\nThis portfolio aims to highlight my achievements and skills in the field of Information Technology, a glimpse of my life perhaps.');

-- --------------------------------------------------------

--
-- Table structure for table `blogcontent`
--

CREATE TABLE `blogcontent` (
  `blogNo` int(11) NOT NULL,
  `blogTitle` varchar(2000) NOT NULL,
  `blogHeaderText` varchar(2000) NOT NULL,
  `blogImage` varchar(3000) NOT NULL,
  `blogBodyText` varchar(2000) NOT NULL,
  `createdBy` varchar(2000) NOT NULL,
  `blogCategory` varchar(2000) NOT NULL,
  `blogURL` varchar(3000) NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blogVisibility` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogcontent`
--

INSERT INTO `blogcontent` (`blogNo`, `blogTitle`, `blogHeaderText`, `blogImage`, `blogBodyText`, `createdBy`, `blogCategory`, `blogURL`, `dateAdded`, `blogVisibility`) VALUES
(1, 'First Post', 'HEADER TEXT', 'code.jpeg', 'BODY TEXT', 'admin', 'TEST', '', '2017-10-05 16:50:45', 'true'),
(2, 'gif blog', 'look it\'s gif', 'people.gif', 'yep, that\'s a gif', 'admin', 'FUN', 'none', '2017-10-05 17:24:13', 'true'),
(3, 'WatchDogs GIF', '', 'watchdogs.gif', '', 'admin', 'FUN', 'none', '2017-10-05 18:57:25', 'true'),
(4, 'Kean Gabriel Hotline', 'We made an Information system for Kean Gabriel Hotline for our IT12 project.', '10_11_2017_01_29_07_am.png', '', 'Lorenzo', '', '#', '2017-10-11 07:29:07', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(3000) NOT NULL,
  `comment` varchar(3000) NOT NULL,
  `date_publish` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `date_publish`) VALUES
(14, 'John Mar', 'First comment', '2017-10-05 22:48:02'),
(15, 'John Mar', '100 char try aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2017-10-05 22:48:19'),
(17, 'No name', 'test no name', '2017-10-05 23:27:15'),
(18, 'Janmar', 'AJAX IMPLEMENTED!!!! <span style=\"color: pink;\"><:D/span>', '2017-10-05 23:30:38'),
(19, 'Janmar', 'AJAX IMPLEMENTED!!!! <span style=\"color: pink;\">:D</span>', '2017-10-05 23:30:49'),
(43, 'John Mar', 'Test interval 3s', '2017-10-06 01:59:24'),
(44, 'sad', 'asd', '2017-10-09 04:08:15'),
(45, 'IM FUCKING', 'DONE', '2017-10-09 04:09:09'),
(48, '', '', '2017-10-09 04:10:50'),
(49, 'I\'M FUCKING', 'DO\'\'NE', '2017-10-09 04:11:36'),
(50, 'te\'sst\'st\'st', 'FUCKING APOSTROPHE\'S', '2017-10-09 04:12:02'),
(51, 'Jhon Lloyd Gellica', 'HAWDA ANA NIYA UI <3', '2017-10-09 10:38:21'),
(52, 'Dandal', 'Sigeg eut', '2017-10-11 15:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `indexdata`
--

CREATE TABLE `indexdata` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `headerWelcomeMsg` varchar(2000) NOT NULL,
  `lowerWelcomeMsg` varchar(2000) NOT NULL,
  `headerBackground` varchar(2000) NOT NULL,
  `headerBackground_Hover` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indexdata`
--

INSERT INTO `indexdata` (`id`, `code`, `headerWelcomeMsg`, `lowerWelcomeMsg`, `headerBackground`, `headerBackground_Hover`) VALUES
(1, 'mytheme01', 'I am John Mar Lorenzo', 'And this is my portfolio', 'spacebg.jpg', 'spacebg_hov.jpg'),
(2, 'theme02', 'Test1', 'Tes tes', 'widebg2.png', 'widebg3.png');

-- --------------------------------------------------------

--
-- Table structure for table `personalinks`
--

CREATE TABLE `personalinks` (
  `plinksID` int(11) NOT NULL,
  `url` varchar(2000) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `validity` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personalinks`
--

INSERT INTO `personalinks` (`plinksID`, `url`, `name`, `dateAdded`, `validity`) VALUES
(1, 'https://www.facebook.com/lorenzojohnmar565', 'Facebook', '2017-10-02 23:06:39', 'true'),
(2, 'https://twitter.com/Lorenzoids', 'Twitter', '2017-10-02 23:07:00', 'true'),
(3, 'https://github.com/dotlenter', 'GitHub', '2017-10-02 23:21:00', 'true'),
(4, 'https://www.instagram.com/lrnzojanmar/', 'Instagram', '2017-10-02 23:44:13', 'true'),
(5, 'https://www.youtube.com/channel/UC96LZ3lVFN_Zi7pMbHT02kA?view_as=subscriber', 'YoutubeChannel', '2017-10-04 12:30:16', 'true'),
(6, 'http://seanhalpin.io/', 'ReferenceWebsite', '2017-10-04 12:30:59', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(11) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `date_subscribe` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `date_subscribe`) VALUES
(1, '', '2017-10-09 04:21:32'),
(2, 'lorenzojohnmar565@gmail.com', '2017-10-09 04:27:53'),
(3, 'frmadman565@gmail.com', '2017-10-09 04:32:52'),
(4, 'lorenzojohnmar321@gmail.com', '2017-10-09 04:35:47'),
(5, 'jhonlloydgellica4@gmail.com', '2017-10-09 10:40:48'),
(6, 'ad@asd', '2017-10-11 07:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutdata`
--
ALTER TABLE `aboutdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogcontent`
--
ALTER TABLE `blogcontent`
  ADD PRIMARY KEY (`blogNo`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indexdata`
--
ALTER TABLE `indexdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personalinks`
--
ALTER TABLE `personalinks`
  ADD PRIMARY KEY (`plinksID`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutdata`
--
ALTER TABLE `aboutdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogcontent`
--
ALTER TABLE `blogcontent`
  MODIFY `blogNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `indexdata`
--
ALTER TABLE `indexdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personalinks`
--
ALTER TABLE `personalinks`
  MODIFY `plinksID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2015 at 10:13 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pctresearchgroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `date` date NOT NULL,
  `subject` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `active` varchar(1) NOT NULL,
  `inactiveDate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `date`, `subject`, `description`, `active`, `inactiveDate`) VALUES
(7, '2015-09-10', 'Subject', 'My First News', 'Y', '2015-09-24'),
(8, '2015-09-10', 'Subject', 'My First News', 'Y', '2015-09-24'),
(9, '2015-09-10', '', 'My First News', 'N', '2015-09-24'),
(10, '2015-09-11', 'Subject', 'This is a news for a person sitting in the university ', 'Y', '2015-09-12'),
(11, '2015-09-11', 'Subject', 'This is a news for a person sitting on the flour', 'Y', '2015-09-02'),
(12, '2015-09-11', '', 'Its new news', 'N', '2015-09-11'),
(13, '2015-09-11', 'Subject', 'Its a news for Jef', 'N', '2015-09-12'),
(14, '2015-09-11', 'Subject', 'This is a news for my brother', 'Y', '2015-09-02'),
(15, '2015-09-11', 'New Students Announcement', 'All new students are informed that please submit there project before 15-09-2015', 'Y', '2015-09-25'),
(16, '2015-09-11', 'TIS', 'TIS', 'Y', '2015-09-18'),
(17, '2015-09-11', 'Sleep Time', 'Its a news to update on evening 02:47 to check this before my sleep time......', 'Y', '2015-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'Ata', 'ataraiwind@gmail.com', 'google.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

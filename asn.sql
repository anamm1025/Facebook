-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2015 at 02:58 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asn`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_title` varchar(25) NOT NULL,
  `ads_content` varchar(135) NOT NULL,
  `ads_pic` varchar(90) NOT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ads_id`, `ads_title`, `ads_content`, `ads_pic`) VALUES
(1, 'OLX', 'sdsdsdd', 'uploadedimage/a5512.jpg'),
(2, 'Ebay', 'fewrfewr rfererer erererere ererer erferer erer er re rererererer ererererer erererer ererere sdfdtftewrhuhuh uhuhuihuy ygygygy ygygygy', 'uploadedimage/creative-abstract-design-thumb5833954.jpg'),
(3, 'shadi.com', 'hello abcd', 'uploadedimage/abtus_clip_image001.jpg'),
(4, 'destination', 'axcbxsdaf', 'uploadedimage/6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bleh`
--

CREATE TABLE IF NOT EXISTS `bleh` (
  `bleh_id` int(11) NOT NULL AUTO_INCREMENT,
  `remarks` text NOT NULL,
  `remarksby` varchar(30) NOT NULL,
  PRIMARY KEY (`bleh_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=236 ;

--
-- Dumping data for table `bleh`
--

INSERT INTO `bleh` (`bleh_id`, `remarks`, `remarksby`) VALUES
(217, '131', 'janeeta_raj@hotmail.com'),
(229, '145', 'janeeta_raj@hotmail.com'),
(219, '136', 'janeeta_raj@hotmail.com'),
(230, '132', 'janeeta_raj@hotmail.com'),
(206, '127', 'janeeta_raj@hotmail.com'),
(225, '154', 'janeeta_raj@hotmail.com'),
(226, '158', 'janeeta_raj@hotmail.com'),
(227, '171', 'janeeta_raj@hotmail.com'),
(228, '176', 'janeeta_raj@hotmail.com'),
(231, '183', 'janeeta_raj@hotmail.com'),
(235, '139', 'janeeta_raj@hotmail.com'),
(233, '173', 'janeeta_raj@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `EventInput` varchar(255) NOT NULL,
  `datepicker` varchar(255) NOT NULL,
  `where_text` varchar(255) NOT NULL,
  `WhoInvited` varchar(255) NOT NULL,
  `users_ip` varchar(200) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `EventInput`, `datepicker`, `where_text`, `WhoInvited`, `users_ip`, `date_created`) VALUES
(1, 'lagaw', '1299295800', 'CHMSC', 'Migz &amp; sweet', '127.0.0.1', 1299301175),
(2, 'sdsdsss', '1299297600', 'sdsd', 'sdsds', '127.0.0.1', 1299301218),
(3, 'fgfgfgfgfgf', '1136440800', 'dfgfgfg', 'fgfgfg', '127.0.0.1', 1136132744),
(4, 'check program', '1300282200', 'Sa skul', 'classmates and sir pabz', '127.0.0.1', 1300248204),
(7, 'wedding ceremony', '1363231800', 'friends wedding', 'aravida', '::1', 1363245327),
(6, 'birthday', '1363233600', 'Today is my birthday', 'aravinda', '::1', 1363236072);

-- --------------------------------------------------------

--
-- Table structure for table `friendlist`
--

CREATE TABLE IF NOT EXISTS `friendlist` (
  `friends_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(80) NOT NULL,
  `contact_no` int(14) NOT NULL,
  `website` text NOT NULL,
  `gender` varchar(6) NOT NULL,
  `addby` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY (`friends_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `friendlist`
--

INSERT INTO `friendlist` (`friends_id`, `firstname`, `lastname`, `address`, `contact_no`, `website`, `gender`, `addby`, `status`, `location`) VALUES
(1, 'janeeta', 'raj', 'lahore', 2147483647, 'janeeta_raj@hotmail.com', 'Female', 'anam', 'accepted', 'uploadedimage/AbstractDesignBackgroundVector.jpg'),
(2, 'anam', 'sadiq', 'lahore', 0, 'anam@gmail.com', 'Female', 'janeeta', 'accepted', 'uploadedimage/defoult.jpg'),
(3, 'rabia', 'fazal', 'lahore', 2147483647, 'rabia@gmail.com', 'Male', 'anam', 'accepted', 'uploadedimage/AbstractDesignBackgroundVector.jpg'),
(4, 'anam', 'sadiq', 'lahore', 0, 'anam@gmail.com', 'Female', 'rabia', 'accepted', 'uploadedimage/defoult.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `friendrequest`
--

CREATE TABLE IF NOT EXISTS `friendrequest` (
  `status` varchar(50) NOT NULL,
  `sentBy` varchar(50) NOT NULL,
  `RecievedBy` varchar(50) NOT NULL,
  `senderfname` varchar(50) NOT NULL,
  `senderlname` varchar(50) NOT NULL,
  `senderdp` varchar(100) NOT NULL,
  PRIMARY KEY (`sentBy`,`RecievedBy`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friendrequest`
--

INSERT INTO `friendrequest` (`status`, `sentBy`, `RecievedBy`, `senderfname`, `senderlname`, `senderdp`) VALUES
('pending', 'ali@gmail.com', 'anam@gmail.com ', 'ali', 'mirza', 'uploadedimage/images (8).jpg'),
('pending', 'janeeta_raj@hotmail.com', 'amnah@gmail.com ', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif'),
('pending', 'mehak@gmail.com', 'janeeta_raj@hotmail.com ', 'mehak', 'ahmad', 'uploadedimage/defoult.jpg'),
('pending', 'rabia@gmail.com', 'nauman@gmail.com ', 'rabia', 'fazal', 'uploadedimage/pic10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `frnds`
--

CREATE TABLE IF NOT EXISTS `frnds` (
  `email1` varchar(50) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email1fname` varchar(50) NOT NULL,
  `email1lname` varchar(50) NOT NULL,
  `email1dp` varchar(100) NOT NULL,
  `email2fname` varchar(50) NOT NULL,
  `email2lname` varchar(50) NOT NULL,
  `email2dp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `frnds`
--

INSERT INTO `frnds` (`email1`, `email2`, `status`, `id`, `email1fname`, `email1lname`, `email1dp`, `email2fname`, `email2lname`, `email2dp`) VALUES
('janeeta_raj@hotmail.com', 'anam@gmail.com', 'accepted', 3, 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', 'anam', 'sadiq', 'uploadedimage/AbstractDesignBackgroundVector.jpg'),
('rabia@gmail.com', 'janeeta_raj@hotmail.com', 'accepted', 4, 'rabia', 'fazal', 'uploadedimage/defoult.jpg', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif'),
('ali@gmail.com', 'janeeta_raj@hotmail.com', 'accepted', 5, 'ali', 'mirza', 'uploadedimage/images (8).jpg', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif'),
('anam@gmail.com', 'rabia@gmail.com', 'accepted', 6, 'anam', 'sadiq', 'uploadedimage/AbstractDesignBackgroundVector.jpg', 'rabia', 'fazal', 'uploadedimage/pic10.jpg'),
('nimra@gmail.com', 'janeeta_raj@hotmail.com', 'accepted', 7, 'nimra', 'hamid', 'uploadedimage/defoult.jpg', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif'),
('janeeta_raj@hotmail.com', 'erum@gmail.com', 'accepted', 8, 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', 'erum', 'saba', 'uploadedimage/defoult.jpg'),
('janeeta_raj@hotmail.com', 'hira@gmail.com', 'accepted', 9, 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', 'hira', 'sana', 'uploadedimage/defoult.jpg'),
('janeeta_raj@hotmail.com', 'ayesha@gmail.com', 'accepted', 10, 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', 'ayesha', 'fatima', 'uploadedimage/defoult.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `groupmembers`
--

CREATE TABLE IF NOT EXISTS `groupmembers` (
  `member_email` varchar(100) NOT NULL,
  `groupId` int(11) NOT NULL,
  PRIMARY KEY (`member_email`,`groupId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupmembers`
--

INSERT INTO `groupmembers` (`member_email`, `groupId`) VALUES
('anam@gmail.com', 8);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `groupName` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `privacyOption` varchar(100) NOT NULL,
  `noOfmembers` int(11) NOT NULL,
  `coverpic` varchar(200) NOT NULL,
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `groupName` (`groupName`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `groupName`, `admin_email`, `description`, `privacyOption`, `noOfmembers`, `coverpic`) VALUES
(8, 'web', 'janeeta_raj@hotmail.com', '', 'public', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `invite_status`
--

CREATE TABLE IF NOT EXISTS `invite_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `ContactNo` varchar(14) NOT NULL,
  `Url` varchar(100) NOT NULL,
  `Status_ID` int(11) NOT NULL,
  `Birthdate` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `Relationship_ID` int(14) NOT NULL,
  `profImage` varchar(100) NOT NULL,
  `curcity` varchar(50) NOT NULL,
  `hometown` varchar(50) NOT NULL,
  `Interested` varchar(30) NOT NULL,
  `language` varchar(30) NOT NULL,
  `college` varchar(100) NOT NULL,
  `highschool` varchar(100) NOT NULL,
  `experiences` varchar(200) NOT NULL,
  `arts` text NOT NULL,
  `aboutme` text NOT NULL,
  `month` varchar(4) NOT NULL,
  `day` varchar(2) NOT NULL,
  `year` varchar(4) NOT NULL,
  `optionalName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `coverImage` varchar(200) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `degreeProgram` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `religiousViews` varchar(100) NOT NULL,
  `nickName` varchar(30) NOT NULL,
  `favQuote` varchar(100) NOT NULL,
  `relationsip` varchar(30) NOT NULL,
  PRIMARY KEY (`member_id`),
  UNIQUE KEY `Url` (`Url`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `UserName`, `Password`, `FirstName`, `LastName`, `Address`, `ContactNo`, `Url`, `Status_ID`, `Birthdate`, `Gender`, `DateAdded`, `Relationship_ID`, `profImage`, `curcity`, `hometown`, `Interested`, `language`, `college`, `highschool`, `experiences`, `arts`, `aboutme`, `month`, `day`, `year`, `optionalName`, `middleName`, `coverImage`, `religion`, `degreeProgram`, `country`, `religiousViews`, `nickName`, `favQuote`, `relationsip`) VALUES
(1, 'anam', 'hello12.', 'anam', 'sadiq', '4 C model town', '03000425821', 'anam@gmail.com', 0, 'Mar/19/1991', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/b1.jpg', 'Lahore', 'Lahore Pakistan', 'Men!', 'English, Urdu', 'Punjab Group of Colleges', 'Crescent Model School', 'Front Desk Officer', 'Sketching, Painting', 'I am a very passionate girl..!!', '3', '9', '1994', '', '', 'uploadedimage/pic1.jpg', 'Islam <3', 'BS(CS)', 'Pakistan', 'I love Islam <3', 'jia..!!', 'One thing I have learnt about people is if they do it once, they will do it again!!', 'Engaged <3'),
(2, 'rabia', 'hello12.', 'rabia', 'fazal', '4 C model town', '03000425821', 'rabia@gmail.com', 0, 'Jan/1/2011', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/pic10.jpg', 'Lahore', 'Lahore Pakistan', 'Men!', 'English, Urdu', 'Punjab Group of Colleges', 'Crescent Model School', 'Front Desk Officer', 'Sketching, Painting', 'I am a very passionate girl..!!', '3', '9', '1994', '', '', 'uploadedimage/pic1.jpg', 'Islam <3', 'BS(CS)', 'Pakistan', 'I love Islam <3', 'jia..!!', 'One thing I have learnt about people is if they do it once, they will do it again!!', 'Engaged <3'),
(3, 'nauman', 'hello12.', 'nauman', 'khan', '4 C model town', '03000425821', 'nauman@gmail.com', 0, 'Nov/1/2011', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/defoult.jpg', 'Lahore', 'Lahore Pakistan', 'Men!', 'English, Urdu', 'Punjab Group of Colleges', 'Crescent Model School', 'Front Desk Officer', 'Sketching, Painting', 'I am a very passionate girl..!!', '3', '9', '1994', '', '', '', 'Islam <3', 'BS(CS)', 'Pakistan', 'I love Islam <3', 'jia..!!', 'One thing I have learnt about people is if they do it once, they will do it again!!', 'Engaged <3'),
(4, 'ali', 'hello12.', 'ali', 'mirza', '4 C model town', '03000425821', 'ali@gmail.com', 0, 'May/4/1986', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/images (8).jpg', 'Lahore', 'Lahore Pakistan', 'Men!', 'English, Urdu', 'Punjab Group of Colleges', 'Crescent Model School', 'Front Desk Officer', 'Sketching, Painting', 'I am a very passionate girl..!!', '3', '9', '1994', '', '', 'uploadedimage/pic.jpg', 'Islam <3', 'BS(CS)', 'Pakistan', 'I love Islam <3', 'jia..!!', 'One thing I have learnt about people is if they do it once, they will do it again!!', 'Engaged <3'),
(5, 'janet', 'hello12.', 'janet', 'raj', '4 C model town', '03000425821', 'janeeta_raj@hotmail.com', 0, '01/06/1980', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/lightbox-ico-loading.gif', 'Lahore', 'Lahore Pakistan', 'Life', 'English, Urdu', 'Punjab Group of Colleges', 'Crescent Model School', 'Front Desk Officer', 'Sketching, Painting', '', '3', '9', '1994', 'optional', 'optional', 'uploadedimage/pic3.jpg', 'Islam <3', 'BS(CS)', 'Pakistan', 'I love Islam <3', 'jia..!!', 'One thing I have learnt about people is if they do it once, they will do it again!!', 'Single  :D'),
(7, ' amnah', 'hello12.', 'amnah', 'khan', '4 C model town', '03000425821', 'amnah@gmail.com', 0, '2/16/1998', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/defoult.jpg', 'Lahore', 'Lahore Pakistan', 'Men!', 'English, Urdu', 'Punjab Group of Colleges', 'Crescent Model School', 'Front Desk Officer', 'Sketching, Painting', 'I am a very passionate girl..!!', '3', '9', '1994', '', '', '', 'Islam <3', 'BS(CS)', 'Pakistan', 'I love Islam <3', 'jia..!!', 'One thing I have learnt about people is if they do it once, they will do it again!!', 'Engaged <3'),
(8, ' nimra', 'hello12.', 'nimra', 'hamid', '4 C model town', '03000425821', 'nimra@gmail.com', 0, '1/16/1998', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/defoult.jpg', 'Lahore', 'Lahore Pakistan', 'Men!', 'English, Urdu', 'Punjab Group of Colleges', 'Crescent Model School', 'Front Desk Officer', 'Sketching, Painting', 'I am a very passionate girl..!!', '3', '9', '1994', '', '', '', 'Islam <3', 'BS(CS)', 'Pakistan', 'I love Islam <3', 'jia..!!', 'One thing I have learnt about people is if they do it once, they will do it again!!', 'Engaged <3'),
(18, 'muneeba', 'hello12.', 'muneeba', 'mughal', '', '', 'muneeba@gmail.com', 0, '2/18/1991', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/defoult.jpg', '', '', '', '', '', '', '', '', '', '2', '18', '1991', '', '', '', '', '', '', '', '', '', ''),
(19, 'erum', 'hello12.', 'erum', 'saba', '', '', 'erum@gmail.com', 0, '6/18/1996', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/defoult.jpg', '', '', '', '', '', '', '', '', '', '6', '18', '1996', '', '', '', '', '', '', '', '', '', ''),
(26, 'hira', 'hello12.', 'hira', 'sana', '', '', 'hira@gmail.com', 0, '4/16/1990', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/defoult.jpg', '', '', '', '', '', '', '', '', '', '4', '16', '1990', '', '', '', '', '', '', '', '', '', ''),
(27, 'hira', 'hello12.', 'hira', 'khalid', '', '', 'hkhalid@gmail.com', 0, '3/19/1996', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/defoult.jpg', '', '', '', '', '', '', '', '', '', '3', '19', '1996', '', '', '', '', '', '', '', '', '', ''),
(28, 'ayesha', 'hello12.', 'ayesha', 'fatima', '', '', 'ayesha@gmail.com', 0, '3/18/1996', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/defoult.jpg', '', '', '', '', '', '', '', '', '', '3', '18', '1996', '', '', 'uploadedimage/mac_img1.png', '', '', '', '', '', '', ''),
(29, 'mahina', 'hello12.', 'mahina', 'khan', '', '', 'mahina@gmail.com', 0, '3/18/1983', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/defoult.jpg', '', '', '', '', '', '', '', '', '', '3', '18', '1983', '', '', '', '', '', '', '', '', '', ''),
(30, 'hina', 'hello12.', 'hina', 'khan', '', '', 'hina@gmail.com', 0, '1/17/1996', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/defoult.jpg', '', '', '', '', '', '', '', '', '', '1', '17', '1996', '', '', '', '', '', '', '', '', '', ''),
(31, 'Bilal', 'hello12.', 'Bilal', 'khan', '', '', 'bilal@gmail.com', 0, '3/6/1996', 'Male', '0000-00-00 00:00:00', 0, 'uploadedimage/defoult.jpg', '', '', '', '', '', '', '', '', '', '3', '6', '1996', '', '', '', '', '', '', '', '', '', ''),
(32, 'mehak', 'hello12.', 'mehak', 'ahmad', '', '', 'mehak@gmail.com', 0, '3/16/1988', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/defoult.jpg', '', '', '', '', '', '', '', '', '', '3', '16', '1988', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `member_status`
--

CREATE TABLE IF NOT EXISTS `member_status` (
  `Status_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`Status_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `member_status`
--

INSERT INTO `member_status` (`Status_ID`, `Status`) VALUES
(1, 'approved'),
(2, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `messages_id` int(11) NOT NULL AUTO_INCREMENT,
  `messages` text NOT NULL,
  `user` text NOT NULL,
  `picture` varchar(100) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `poster` varchar(30) NOT NULL,
  `postedpic` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `posterName` varchar(100) NOT NULL,
  `pageName` varchar(50) NOT NULL,
  PRIMARY KEY (`messages_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=187 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`messages_id`, `messages`, `user`, `picture`, `date_created`, `poster`, `postedpic`, `email`, `posterName`, `pageName`) VALUES
(132, 'yo yo buddy', 'janet', 'uploadedimage/lightbox-ico-loading.gif', '1418574359', 'anam@gmail.com ', '', 'janeeta_raj@hotmail.com', 'anam', ''),
(131, 'whats up buddy', 'janet', 'uploadedimage/lightbox-ico-loading.gif', '1418574313', 'anam@gmail.com ', '', 'janeeta_raj@hotmail.com', 'anam', ''),
(185, 'yo', 'janet', 'uploadedimage/lightbox-ico-loading.gif', '1418754405', 'janeeta_raj@hotmail.com', '', 'janeeta_raj@hotmail.com', 'janet', ''),
(135, 'feeling tired.. :/', 'janet', 'uploadedimage/lightbox-ico-loading.gif', '1418575933', 'janeeta_raj@hotmail.com', '', 'janeeta_raj@hotmail.com', 'janet', ''),
(136, 'missing u.. :*', 'janet', 'uploadedimage/lightbox-ico-loading.gif', '1418576848', 'nimra@gmail.com ', '', 'janeeta_raj@hotmail.com', 'nimra', ''),
(139, 'Click...:D', 'janet', 'uploadedimage/lightbox-ico-loading.gif', '1418577982', 'janeeta_raj@hotmail.com', 'uploadedimage/p5.jpg', 'janeeta_raj@hotmail.com', 'janet', ''),
(141, ':D', 'janet', 'uploadedimage/lightbox-ico-loading.gif', '1418578591', 'janeeta_raj@hotmail.com', 'uploadedimage/lightbox-ico-loading.gif', 'janeeta_raj@hotmail.com', 'janet', ''),
(144, 'lkl', 'janet', 'uploadedimage/lightbox-ico-loading.gif', '1418583739', 'janeeta_raj@hotmail.com', '', 'janeeta_raj@hotmail.com', 'janet', ''),
(145, 'yayyy', 'janet', 'uploadedimage/lightbox-ico-loading.gif', '1418583777', 'janeeta_raj@hotmail.com', 'uploadedimage/013.jpg', 'janeeta_raj@hotmail.com', 'janet', ''),
(186, '', 'janet', 'uploadedimage/3.jpg', '1418887671', 'janeeta_raj@hotmail.com', '', 'janeeta_raj@hotmail.com', 'janet', 'Gucci'),
(173, 'Opening!!', 'janet', 'uploadedimage/lightbox-ico-loading.gif', '1418598605', 'janeeta_raj@hotmail.com', '', 'janeeta_raj@hotmail.com', 'janet', 'Bank Al Falah'),
(178, 'Say something about this photo', 'Alchemi', 'uploadedimage/9984type.jpg', '1418599914', 'anam@gmail.com', 'uploadedimage/1797588_779121242117054_1200487574_n.jpg', 'anam@gmail.com', '', 'Alchemi'),
(176, 'Say something about this photo', 'janet', 'uploadedimage/lightbox-ico-loading.gif', '1418599048', 'janeeta_raj@hotmail.com', 'uploadedimage/4.jpg', 'janeeta_raj@hotmail.com', 'janet', 'Gucci');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `senderfname` varchar(50) NOT NULL,
  `senderlname` varchar(50) NOT NULL,
  `senderdp` varchar(100) NOT NULL,
  `recfname` varchar(50) NOT NULL,
  `reclname` varchar(50) NOT NULL,
  `recdp` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `sender`, `receiver`, `content`, `status`, `senderfname`, `senderlname`, `senderdp`, `recfname`, `reclname`, `recdp`, `date`) VALUES
(90, 'janeeta_raj@hotmail.com', 'anam@gmail.com ', 'tmse ho gya?', 'read', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', 'anam', 'sadiq', 'uploadedimage/b1.jpg', '1418673615'),
(89, 'erum@gmail.com', 'janeeta_raj@hotmail.com ', 'how are ur studies going?', 'unread', 'erum', 'saba', 'uploadedimage/defoult.jpg', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', '1418673615'),
(88, 'erum@gmail.com', 'janeeta_raj@hotmail.com ', 'beta kya kr raha hai mera?', 'unread', 'erum', 'saba', 'uploadedimage/defoult.jpg', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', '1418673615'),
(86, 'hira@gmail.com', 'janeeta_raj@hotmail.com ', 'gogaa mogaaaaaaaaaaa', 'read', 'hira', 'sana', 'uploadedimage/defoult.jpg', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', '1418673615'),
(87, 'hira@gmail.com', 'janeeta_raj@hotmail.com ', ':*', 'read', 'hira', 'sana', 'uploadedimage/defoult.jpg', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', '1418673615'),
(85, 'ali@gmail.com', 'anam@gmail.com ', 'mai double dholki hu.... :D', 'read', 'ali', 'mirza', 'uploadedimage/images (8).jpg', 'anam', 'sadiq', 'uploadedimage/b1.jpg', '1418673615'),
(84, 'janeeta_raj@hotmail.com', 'anam@gmail.com ', 'bs web ka project kr rahi hu... :/', 'read', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', 'anam', 'sadiq', 'uploadedimage/b1.jpg', '1418673615'),
(83, 'janeeta_raj@hotmail.com', 'anam@gmail.com ', 'kuch nae yaar..', 'read', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', 'anam', 'sadiq', 'uploadedimage/b1.jpg', '1418673615'),
(82, 'anam@gmail.com', 'janeeta_raj@hotmail.com ', 'whats up', 'read', 'anam', 'sadiq', 'uploadedimage/b1.jpg', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', '1418673615'),
(81, 'anam@gmail.com', 'janeeta_raj@hotmail.com ', 'hello', 'read', 'anam', 'sadiq', 'uploadedimage/b1.jpg', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', '1418673615'),
(91, 'anam@gmail.com', 'rabia@gmail.com ', 'kidher?', 'read', 'anam', 'sadiq', 'uploadedimage/b1.jpg', 'rabia', 'fazal', 'uploadedimage/pic10.jpg', '1418673615'),
(92, 'anam@gmail.com', 'rabia@gmail.com ', 'jhj', 'read', 'anam', 'sadiq', 'uploadedimage/b1.jpg', 'rabia', 'fazal', 'uploadedimage/pic10.jpg', '1418673878'),
(93, 'anam@gmail.com', 'ali@gmail.com ', 'pata hai sbko... :P', 'unread', 'anam', 'sadiq', 'uploadedimage/b1.jpg', 'ali', 'mirza', 'uploadedimage/images (8).jpg', '1418674063'),
(95, 'anam@gmail.com', 'janeeta_raj@hotmail.com ', 'haan saara... :P', 'read', 'anam', 'sadiq', 'uploadedimage/b1.jpg', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', '1418726088'),
(96, 'janeeta_raj@hotmail.com', 'anam@gmail.com ', 'pata tha muje, tm genius ho.. :P', 'read', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', 'anam', 'sadiq', 'uploadedimage/b1.jpg', '1418726133'),
(97, 'janeeta_raj@hotmail.com', 'anam@gmail.com ', 'theeti.. :P', 'read', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', 'anam', 'sadiq', 'uploadedimage/b1.jpg', '1418726224'),
(98, 'anam@gmail.com', 'ali@gmail.com ', ':P', 'unread', 'anam', 'sadiq', 'uploadedimage/b1.jpg', 'ali', 'mirza', 'uploadedimage/images (8).jpg', '1418726285'),
(99, 'ali@gmail.com', 'janeeta_raj@hotmail.com ', 'yo yo', 'read', 'ali', 'mirza', 'uploadedimage/images (8).jpg', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', '1418726355'),
(100, 'janeeta_raj@hotmail.com', 'anam@gmail.com ', 'buddyyyyyyyyyyyyyyyyyyyyyy', 'read', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', 'anam', 'sadiq', 'uploadedimage/b1.jpg', '1418726428'),
(101, 'anam@gmail.com', 'ali@gmail.com ', ';)', 'unread', 'anam', 'sadiq', 'uploadedimage/b1.jpg', 'ali', 'mirza', 'uploadedimage/images (8).jpg', '1418726482'),
(102, 'anam@gmail.com', 'ali@gmail.com ', ':/', 'unread', 'anam', 'sadiq', 'uploadedimage/b1.jpg', 'ali', 'mirza', 'uploadedimage/images (8).jpg', '1418726485'),
(103, 'anam@gmail.com', 'ali@gmail.com ', '//', 'unread', 'anam', 'sadiq', 'uploadedimage/b1.jpg', 'ali', 'mirza', 'uploadedimage/images (8).jpg', '1418726488'),
(104, 'anam@gmail.com', 'janeeta_raj@hotmail.com ', 'pata hai tou pucha q? O.o', 'read', 'anam', 'sadiq', 'uploadedimage/b1.jpg', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', '1418726589'),
(105, 'janeeta_raj@hotmail.com', 'anam@gmail.com ', 'ghalti ho gyi... :P', 'unread', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', 'anam', 'sadiq', 'uploadedimage/b1.jpg', '1418727071'),
(106, 'anam@gmail.com', 'rabia@gmail.com ', 'oyeeeeeeee', 'read', 'anam', 'sadiq', 'uploadedimage/b1.jpg', 'rabia', 'fazal', 'uploadedimage/pic10.jpg', '1418727242'),
(107, 'rabia@gmail.com', 'anam@gmail.com ', 'g g kya hua?', 'unread', 'rabia', 'fazal', 'uploadedimage/pic10.jpg', 'anam', 'sadiq', 'uploadedimage/b1.jpg', '1418727300'),
(108, 'janeeta_raj@hotmail.com', 'hira@gmail.com ', 'awwwwwwwwwwww mela baby... ^___^', 'unread', 'janet', 'raj', 'uploadedimage/lightbox-ico-loading.gif', 'hira', 'sana', 'uploadedimage/defoult.jpg', '1418887746');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `name` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `profImage` varchar(50) NOT NULL DEFAULT 'uploadedimage/defoult.jpg',
  `coverImage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`name`, `url`, `category`, `profImage`, `coverImage`) VALUES
('Bank Al Falah', 'janeeta_raj@hotmail.com', 'Bank', 'uploadedimage/il_fullxfull.306478833.jpg', 'uploadedimage/pic2.jpg'),
('Gucci', 'janeeta_raj@hotmail.com', 'Clothing', 'uploadedimage/3.jpg', 'uploadedimage/2nkuao8.jpg'),
('Alchemi', 'anam@gmail.com', 'Chemicals', 'uploadedimage/9984type.jpg', 'uploadedimage/1-131009152S23b.jpg'),
('Nitrogen', 'janeeta_raj@hotmail.com', 'Chemicals', 'uploadedimage/lightbox-btn-close.gif', '');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `term` varchar(30) NOT NULL,
  `location` varchar(200) NOT NULL,
  `uploadedby` int(11) NOT NULL,
  `caption` varchar(50) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `term`, `location`, `uploadedby`, `caption`) VALUES
(27, '', 'uploadedimage/b4.jpg', 5, ''),
(28, '', 'uploadedimage/pic11.jpg', 5, ''),
(29, '', 'uploadedimage/b6_small.jpg', 1, ''),
(30, '', 'uploadedimage/lightbox-ico-loading.gif', 1, ''),
(31, '', 'uploadedimage/b1.jpg', 1, ''),
(32, '', 'uploadedimage/b6.jpg', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `photoscomment`
--

CREATE TABLE IF NOT EXISTS `photoscomment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `commentby` int(100) NOT NULL,
  `PIC` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `photoscomment`
--

INSERT INTO `photoscomment` (`comment_id`, `comment`, `commentby`, `PIC`, `name`, `email`) VALUES
(29, 'wow', 32, 'uploadedimage/lightbox-ico-loading.gif', 'janet', 'janeeta_raj@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `postcomment`
--

CREATE TABLE IF NOT EXISTS `postcomment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `commentedby` varchar(30) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `id` int(40) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `postcomment`
--

INSERT INTO `postcomment` (`comment_id`, `content`, `commentedby`, `pic`, `id`, `date_created`, `email`) VALUES
(107, 'yo yo', 'janet', 'uploadedimage/lightbox-ico-loading.gif', 185, '1418755613', 'janeeta_raj@hotmail.com'),
(99, 'kya hua?', 'janet', 'uploadedimage/lightbox-ico-loading.gif', 184, '1418754236', 'janeeta_raj@hotmail.com'),
(98, 'kjkh', 'janet', 'uploadedimage/lightbox-ico-loading.gif', 183, '1418754210', 'janeeta_raj@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE IF NOT EXISTS `relationship` (
  `relationship_ID` int(11) NOT NULL AUTO_INCREMENT,
  `relationship` varchar(10) NOT NULL,
  PRIMARY KEY (`relationship_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

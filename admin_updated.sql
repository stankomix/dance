-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2018 at 05:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `abotype`
--

CREATE TABLE `abotype` (
  `abotype` int(11) NOT NULL,
  `coursetype` int(11) NOT NULL,
  `lessontype` int(11) NOT NULL,
  `abocategory` int(11) NOT NULL DEFAULT '1',
  `Location` varchar(50) DEFAULT NULL,
  `Description` varchar(70) DEFAULT NULL,
  `promodescription` varchar(10240) NOT NULL,
  `filename` varchar(64) NOT NULL,
  `printtext` varchar(255) DEFAULT NULL,
  `renewal` int(11) NOT NULL DEFAULT '0',
  `Beschreibung` varchar(255) NOT NULL,
  `preis` int(11) NOT NULL DEFAULT '0',
  `preisreduziert` int(11) NOT NULL DEFAULT '0',
  `abodays` int(11) NOT NULL DEFAULT '0',
  `abolessons` int(11) NOT NULL DEFAULT '0',
  `ratenzahlung` int(11) NOT NULL DEFAULT '0',
  `sortorder` int(11) NOT NULL DEFAULT '0',
  `invoicegrace` int(11) NOT NULL DEFAULT '0',
  `noticedays` int(11) NOT NULL DEFAULT '0',
  `invoicedays` int(11) NOT NULL DEFAULT '0',
  `minabodays` int(11) NOT NULL DEFAULT '0',
  `rates` int(11) NOT NULL DEFAULT '0',
  `inaktiv` int(11) NOT NULL DEFAULT '0',
  `based_on` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1-courses;2-lessons'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abotype`
--

INSERT INTO `abotype` (`abotype`, `coursetype`, `lessontype`, `abocategory`, `Location`, `Description`, `promodescription`, `filename`, `printtext`, `renewal`, `Beschreibung`, `preis`, `preisreduziert`, `abodays`, `abolessons`, `ratenzahlung`, `sortorder`, `invoicegrace`, `noticedays`, `invoicedays`, `minabodays`, `rates`, `inaktiv`, `based_on`) VALUES
(1, 1, 0, 1, NULL, 'test', 'test', '', NULL, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(2, 1, 2, 1, '2,3,4,5', '5 Einzellektionen Zumba | BodyPump | BodyFun', '', '', '5 Einzellektionen Zumba | BodyPump | BodyFun', 0, 'Keine Abmeldung notwendig.', 150, 130, 181, 5, 0, 100, 0, 0, 0, 0, 0, 0, 2),
(3, 1, 5, 1, '2,3,5', '12 Wochen Zumba | BodyPump | BodyFun', '', '', '12 Wochen Zumba | BodyPump | BodyFun', 1, 'Abmeldung 1 Woche vor Abo Beginn. Abo wird automatisch erneuert.', 280, 220, 83, 0, 0, 15, 0, 60, 30, 0, 0, 0, 2),
(5, 3, 4, 1, '1,2,3,5', 'Kids 4 Lektionen', '', '', 'Kids 4 Lektionen', 0, 'Lektionen 6 Wochen gültig', 80, 80, 41, 4, 0, 120, 0, 28, 30, 0, 0, 0, 2),
(7, 1, 4, 1, '1,2,3,4,5', 'Probe gehabt', '', '', 'Probe gehabt', 0, '', 0, 0, -1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 2),
(9, 2, 4, 1, '1,2,3,4,5', 'Uno Tanzabo 4 Wochen - 4 Lektionen', 'Mit diesem Abo kannst du alle unsere Kurse besuchen. Salsa, Bachata, Kizomba und viele mehr!', '', 'Uno Tanzabo 4 Wochen - 4 Lektionen', 1, 'Abmeldung 1 Woche vor Abo Beginn. Abo wird automatisch erneuert.', 100, 80, 27, 4, 0, 200, 30, 30, 30, 0, 0, 0, 1),
(10, 2, 2, 1, '1,2,3,4,5', '4x Einzellektionen', '', '', '4x Einzellektionen', 0, 'Keine Abmeldung notwendig.', 150, 120, 181, 4, 0, 300, 0, 0, 0, 0, 0, 0, 2),
(12, 1, 5, 1, '2,3,5', 'Halbjahresabo Zumba | BodyPump | BodyFun', '', '', 'Halbjahresabo Zumba | BodyPump | BodyFun', 1, 'Abmeldung 1 Woche vor Abo Beginn. Abo wird automatisch erneuert.', 480, 380, 181, 0, 0, 41, 0, 60, 30, 0, 0, 0, 2),
(13, 1, 5, 1, '2,3,5', 'Jahresabo MAX Zumba | BodyPump | BodyFun', '', '', 'Jahresabo Zumba | BodyPump | BodyFun', 1, 'Abmeldung 1 Woche vor Abo Beginn. Abo wird automatisch erneuert.', 890, 710, 365, 0, 0, 45, 0, 60, 60, 0, 0, 0, 2),
(24, 2, 4, 1, '1,2,3,4,5', 'Dos Tanzabo 8 Wochen - 16 Lektionen', '', '', 'Dos Tanzabo 8 Wochen - 16 Lektionen', 1, 'Abmeldung 1 Woche vor Abo Beginn. Abo wird automatisch erneuert.', 260, 210, 55, 16, 0, 220, 60, 60, 30, 0, 0, 0, 2),
(28, 3, 1, 1, '1,2,3,5', 'Kids 12 Wochen', '', '', 'Kids 12 Wochen', 1, 'Abmeldung 1 Woche vor Abo Beginn. Abo wird automatisch erneuert.', 180, 180, 83, 0, 0, 120, 0, 60, 30, 0, 0, 0, 2),
(34, 2, 4, 1, '1,2,3,4,5', 'Dance 4 Weeks unbreakable', '', '', 'Uno Tanzabo (ohne Erneuerung) 4 Wochen - 4 Lektionen', 0, 'Keine Abmeldung notwendig.', 100, 80, 27, 4, 0, 203, 30, 14, 30, 0, 0, 0, 2),
(42, 1, 4, 2, '4', '10 Lessons 12 Weeks unbreakable', '', '', 'Zumba & Pilates 10 Lekt. (12 Wochen)', 0, 'Abmeldung ein Tag vor Kursbeginn. Abo wird automatisch erneuert.', 180, 140, 83, 10, 0, 55, 30, 30, 30, 0, 0, 0, 2),
(47, 2, 5, 1, '1,2,3,4,5', 'Dance unlimited one year', 'Dance one year unliited', 'file_1518777406.jpg', 'MAX Jahresabo unlimitiert', 1, 'Abmeldung 1 Woche vor Abo Beginn. Abo wird automatisch erneuert.', 1500, 1200, 365, 0, 0, 250, 0, 60, 60, 0, 0, 0, 2),
(59, 1, 5, 1, '2,3,5', 'Fitness Membership Monthly', '', '', 'Jahresabo in Monatsraten  Zumba | BodyPump | BodyFun', 1, 'Jahresabo in Monatsraten.  Abmeldung 1 Woche vor Abo Beginn. Abo wird automatisch erneuert.', 80, 65, 30, 0, 0, 49, 60, 60, 60, 365, 12, 0, 2),
(67, 2, 4, 1, '1,2,3,4,5', 'Dance Twice 8 Lessons 4 weeks', '', '', 'Dos Tanzabo 4 Wochen - 8 Lektionen', 1, 'Abmeldung 1 Woche vor Abo Beginn. Abo wird automatisch erneuert.', 140, 110, 55, 8, 0, 208, 60, 30, 30, 0, 0, 0, 2),
(71, 1, 4, 1, '2,3,5', 'Fitness Membership 52 Lessons', '', '', 'Jahresabo Zumba | BodyPump | BodyFun', 1, 'Abmeldung 1 Woche vor Abo Beginn. Abo wird automatisch erneuert.', 590, 470, 365, 52, 0, 44, 0, 60, 60, 0, 0, 0, 2),
(74, 1, 2, 1, '2,3,4,5', 'One course', 'One course', 'file_1518710163.png', 'One course', 0, '', 50, 40, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(75, 0, 0, 1, NULL, 'test', 'test', '', NULL, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(76, 0, 0, 1, NULL, 'test', 'test', '', NULL, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(77, 0, 0, 1, NULL, 'test', 'test', '', NULL, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(78, 0, 0, 1, NULL, 'test', 'test', '', NULL, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(79, 1, 0, 1, NULL, 'test', 'test', '', NULL, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(80, 3, 0, 1, NULL, 'new membership', 'test mem', '', NULL, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `abotypecoursetype`
--

CREATE TABLE `abotypecoursetype` (
  `id` int(11) NOT NULL,
  `abotype` int(11) NOT NULL,
  `coursetype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abotypecoursetype`
--

INSERT INTO `abotypecoursetype` (`id`, `abotype`, `coursetype`) VALUES
(1, 39, 4),
(2, 40, 4),
(3, 50, 4),
(4, 51, 4),
(5, 23, 1),
(6, 47, 2),
(7, 44, 5),
(8, 45, 5),
(9, 49, 5),
(10, 48, 5),
(11, 43, 1),
(12, 17, 1),
(13, 6, 1),
(14, 7, 1),
(15, 34, 2),
(16, 9, 2),
(17, 24, 2),
(18, 10, 2),
(19, 41, 2),
(20, 46, 2),
(21, 27, 2),
(22, 30, 1),
(23, 3, 1),
(24, 12, 1),
(25, 1, 1),
(26, 2, 1),
(27, 13, 1),
(28, 25, 1),
(29, 14, 1),
(30, 26, 1),
(31, 8, 1),
(32, 42, 1),
(33, 29, 1),
(34, 31, 1),
(35, 11, 1),
(36, 33, 1),
(37, 32, 1),
(38, 35, 1),
(39, 4, 1),
(40, 21, 1),
(41, 18, 1),
(42, 36, 1),
(43, 20, 1),
(44, 37, 1),
(45, 28, 3),
(46, 52, 3),
(47, 5, 3),
(48, 53, 3),
(49, 38, 3),
(50, 54, 3),
(51, 15, 1),
(52, 16, 1),
(53, 22, 1),
(54, 19, 1),
(55, 47, 4),
(56, 47, 5);

-- --------------------------------------------------------

--
-- Table structure for table `anfragen`
--

CREATE TABLE `anfragen` (
  `anfrageid` int(11) NOT NULL,
  `personid` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `anfrage` text NOT NULL,
  `erledigt` int(11) NOT NULL DEFAULT '0',
  `erledigtam` datetime NOT NULL,
  `erfasstam` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `articlesale`
--

CREATE TABLE `articlesale` (
  `articlesaleid` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `articletype` int(11) NOT NULL,
  `articledescription` varchar(255) NOT NULL,
  `paymentmethod` int(11) NOT NULL,
  `teilnehmerid` int(11) NOT NULL,
  `cancelled` int(11) NOT NULL DEFAULT '0',
  `received` int(11) NOT NULL DEFAULT '0',
  `entered` datetime NOT NULL,
  `terminalid` int(11) NOT NULL DEFAULT '0',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `voucherid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `articletype`
--

CREATE TABLE `articletype` (
  `articletype` int(11) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articletype`
--

INSERT INTO `articletype` (`articletype`, `desc`) VALUES
(1, 'Kleider'),
(2, 'Schuhe'),
(3, 'Ticket'),
(7, 'Kurs'),
(6, 'Gutschein');

-- --------------------------------------------------------

--
-- Table structure for table `breaks`
--

CREATE TABLE `breaks` (
  `breakid` int(11) UNSIGNED NOT NULL,
  `Teilnahmeid` int(11) NOT NULL,
  `break_from` datetime NOT NULL,
  `break_until` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `breaks`
--

INSERT INTO `breaks` (`breakid`, `Teilnahmeid`, `break_from`, `break_until`) VALUES
(1, 29059, '2018-01-11 00:00:00', '2018-01-13 00:00:00'),
(10, 29398, '2018-01-20 00:00:00', '2018-01-24 00:00:00'),
(11, 29167, '2018-01-24 00:00:00', '2018-01-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `extension` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `type`, `file_name`, `extension`, `created_date`) VALUES
(7, 'test 1', 'image', 'file_1517429679.jpeg', '.jpeg', '2018-01-13'),
(8, 'video mp4', 'video', 'file_1517502931.mp4', 'mp4', '2018-01-09'),
(9, 'video webm', 'video', 'file_1517502954.webm', 'webm', '2018-01-04'),
(10, 'audio mp3', 'audio', 'file_1517502986.mp3', 'mp3', '2018-01-03'),
(11, 'sdfsdf', 'image', 'file_1517534982.png', 'png', '2018-02-01'),
(12, 'test online', 'image', 'file_1517583473.png', 'png', '2018-02-02'),
(13, 'test online 2', 'video', 'file_1517584653.mp4', 'mp4', '2018-02-02'),
(14, 'agb', 'document', 'file_1517584865.pdf', 'pdf', '2018-02-02'),
(15, 'burgenstock', 'image', 'file_1517587164.jpg', 'jpg', '2018-02-02'),
(16, 'test', 'video', 'file_1517587427.mp4', 'mp4', '2018-02-02'),
(17, 'Prende-la-Cadera', 'video', 'file_1517592559.mp4', 'mp4', '2018-02-02'),
(18, 'test', 'image', 'file_1519841908.png', 'png', '2018-02-28'),
(19, 'teet', 'image', 'file_1519844480.png', 'png', '2018-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `contentperson`
--

CREATE TABLE `contentperson` (
  `id` int(11) UNSIGNED NOT NULL,
  `contentid` int(11) NOT NULL DEFAULT '0',
  `kursteilnehmerid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contentperson`
--

INSERT INTO `contentperson` (`id`, `contentid`, `kursteilnehmerid`) VALUES
(1, 8, 3545),
(2, 9, 3545);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL DEFAULT '0',
  `reservation` tinyint(2) NOT NULL DEFAULT '0',
  `based_on` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1-courses;2-lessons',
  `num_places` int(8) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `startdate`, `enddate`, `description`, `type`, `categoryid`, `reservation`, `based_on`, `num_places`) VALUES
(1, 'Lessons without reservation', '2018-01-15', '2018-03-31', 'Test your zumba reflexes :)', 1, 2, 0, 2, 0),
(2, 'Course Based 1', '2018-01-30', '2018-04-26', 'Dancing the legs :)', 2, 3, 1, 1, 8),
(3, 'Lesson and Course Based', '2018-01-18', '2018-02-28', 'Bachachachata :)', 2, 4, 1, 3, 7),
(4, 'Course Based 2', '2018-01-23', '2018-02-24', 'Desc Kiz omba', 2, 1, 1, 1, 0),
(5, 'Lesson and Course Based 2 Type Fitness', '2018-01-12', '2018-01-31', 'Fitness course or lessons', 1, 2, 1, 3, 1),
(6, 'Lesson and Course Based Course Type Dance', '2018-01-21', '2018-01-31', 'Tanz course or lessons', 2, 3, 1, 3, 0),
(7, 'Tanzkurs Salsa Anfänger Mittwoch 19:30', '2018-03-01', '2018-03-22', '', 2, 2, 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `coursecategories`
--

CREATE TABLE `coursecategories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coursecategories`
--

INSERT INTO `coursecategories` (`id`, `name`) VALUES
(1, 'Zumba'),
(2, 'Salsa'),
(3, 'Bachata'),
(4, 'Kizomba'),
(5, 'wqeqe');

-- --------------------------------------------------------

--
-- Table structure for table `courseday`
--

CREATE TABLE `courseday` (
  `courseday` int(11) NOT NULL,
  `coursedaydesc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseday`
--

INSERT INTO `courseday` (`courseday`, `coursedaydesc`) VALUES
(1, 'Sonntag'),
(2, 'Montag'),
(3, 'Dienstag'),
(4, 'Mittwoch'),
(5, 'Donnerstag'),
(6, 'Freitag'),
(7, 'Samstag');

-- --------------------------------------------------------

--
-- Table structure for table `courseperson`
--

CREATE TABLE `courseperson` (
  `id` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `person` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `waiting` tinyint(2) NOT NULL DEFAULT '0',
  `waiting_since` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courseperson`
--

INSERT INTO `courseperson` (`id`, `course`, `person`, `created`, `waiting`, `waiting_since`) VALUES
(52, 2, 3545, '2018-01-24 20:56:18', 0, '0000-00-00 00:00:00'),
(56, 5, 3545, '2018-01-24 21:01:03', 0, '2018-01-24 21:01:03'),
(58, 4, 3545, '2018-01-27 20:51:33', 0, '0000-00-00 00:00:00'),
(63, 5, 12421, '2018-01-29 20:45:15', 1, '2018-01-29 20:45:15'),
(64, 1, 12424, '2018-01-30 16:15:18', 0, '0000-00-00 00:00:00'),
(65, 5, 12425, '2018-02-09 09:25:58', 1, '2018-02-09 09:25:58'),
(66, 2, 12426, '2018-02-09 21:03:54', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `coursetype`
--

CREATE TABLE `coursetype` (
  `coursetype` int(11) NOT NULL,
  `coursetypedesc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursetype`
--

INSERT INTO `coursetype` (`coursetype`, `coursetypedesc`) VALUES
(1, 'Fitness'),
(2, 'Tanz'),
(3, 'ZumbaKids');

-- --------------------------------------------------------

--
-- Stand-in structure for view `echeckin_user`
--
CREATE TABLE `echeckin_user` (
`teilnehmerid` int(11)
,`vorname` varchar(50)
,`nachname` varchar(50)
,`email` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `id`
--

CREATE TABLE `id` (
  `next_sequence` int(11) DEFAULT NULL,
  `sequence_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `id`
--

INSERT INTO `id` (`next_sequence`, `sequence_name`) VALUES
(384, 'voucherid'),
(11627, 'invoiceid');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceid` int(11) NOT NULL DEFAULT '0',
  `invoicetype` int(11) DEFAULT NULL,
  `invoicedate` datetime DEFAULT NULL,
  `invoicegrace` int(11) DEFAULT NULL,
  `payabledate` date DEFAULT NULL,
  `invoicestate` int(11) DEFAULT NULL,
  `invoiceaddress` varchar(1000) DEFAULT NULL,
  `dunning` int(11) DEFAULT NULL,
  `dunningamount` decimal(10,2) DEFAULT NULL,
  `invoiceamount` decimal(10,2) DEFAULT NULL,
  `paidamount` decimal(10,2) DEFAULT NULL,
  `invoicetext` text,
  `entered` datetime DEFAULT NULL,
  `cancelled` int(11) NOT NULL DEFAULT '0',
  `terminalid` int(11) NOT NULL DEFAULT '0',
  `kursteilnehmerid` int(11) NOT NULL,
  `teilnahmeid` int(11) NOT NULL,
  `paymentdate` date DEFAULT NULL,
  `checkeddate` date DEFAULT NULL,
  `clearingdate` datetime DEFAULT NULL,
  `voucherid` int(11) DEFAULT NULL,
  `lastedit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoiceid`, `invoicetype`, `invoicedate`, `invoicegrace`, `payabledate`, `invoicestate`, `invoiceaddress`, `dunning`, `dunningamount`, `invoiceamount`, `paidamount`, `invoicetext`, `entered`, `cancelled`, `terminalid`, `kursteilnehmerid`, `teilnahmeid`, `paymentdate`, `checkeddate`, `clearingdate`, `voucherid`, `lastedit`) VALUES
(255, NULL, '2012-12-07 00:00:00', 61, '2013-02-06', 3, 'Pascal Iacoviello\rstrassetset 12 13\r\n8304 Wallisellen', 0, '0.00', '150.00', '0.00', NULL, '2012-12-07 00:00:00', 1, 0, 1, 10758, NULL, NULL, NULL, NULL, NULL),
(398, NULL, '2013-01-15 00:00:00', 22, '2013-02-06', 3, 'Testti Person\r\nStr. 87\r\n8404 Winterthur', 0, '0.00', '100.00', '100.00', NULL, '2013-01-15 00:00:00', 0, 0, 3545, 11248, '2013-02-07', '2013-02-07', '2013-01-15 00:00:00', NULL, NULL),
(531, NULL, '2013-02-07 00:00:00', 27, '2013-04-17', 3, 'Testti Person\r\n-Str. 87\r\n8404 Winterthur', 4, '30.00', '130.00', '0.00', ' Letzte Zahlungsaufforderung: Bitte begleiche den Rechungsbetrag bis am 17.04.2013. Es wurden zusätzlich 20 CHF Mahngebühr verrechnet.', '2013-02-07 00:00:00', 0, 0, 3545, 11689, NULL, NULL, '2013-04-11 00:00:00', NULL, NULL),
(550, NULL, '2013-02-07 00:00:00', 60, '2013-04-07', 3, 'Pascal Iacoviello\rstrassetset 12 13\r\n8304 Wallisellen', 0, '0.00', '150.00', '0.00', NULL, '2013-02-07 00:00:00', 1, 0, 1, 11708, NULL, NULL, '2013-02-08 00:00:00', NULL, NULL),
(760, NULL, '2013-03-08 00:00:00', 26, '2013-04-17', 3, 'Testti Person\r\n-Str. 87\r\n8404 Winterthur', 1, '0.00', '100.00', '0.00', '1 Mahnung: Rechnungsbetrag zu begleichen bis 17.04.2013. Bei der nächsten Mahnung werden 10 CHF Mahngebühr verrechnet.', '2013-03-08 00:00:00', 0, 0, 3545, 12286, NULL, NULL, '2013-04-11 00:00:00', NULL, NULL),
(980, NULL, '2013-04-10 00:00:00', 28, '2013-05-31', 2, 'Testti Person\r\n-Str. 87\r\n8404 Winterthur', 2, '10.00', '110.00', '0.00', '2 Mahnung: Rechnungsbetrag zu begleichen bis 31.05.2013. Es wurden zusätzlich 10 CHF Mahngebühr verrechnet.', '2013-04-10 00:00:00', 1, 0, 3545, 12851, NULL, NULL, '2013-05-24 00:00:00', NULL, NULL),
(1172, NULL, '2013-05-07 00:00:00', 29, '2013-06-05', 2, 'Testti Person\r\n-Str. 87\r\n8404 Winterthur', 0, '0.00', '100.00', '0.00', NULL, '2013-05-07 00:00:00', 1, 0, 3545, 13305, NULL, NULL, NULL, NULL, NULL),
(2782, NULL, '2013-12-13 00:00:00', -564, '2013-12-20', 1, 'Pascal Iacoviello\rstrassetset 12 13\r\n8304 Wallisellen', 1, '0.00', '100.00', '0.00', '1 Mahnung: Rechnungsbetrag zu begleichen bis 20.12.2013. Bei der nächsten Mahnung werden 10 CHF Mahngebühr verrechnet.', '2013-12-13 00:00:00', 1, 0, 1, 16504, NULL, NULL, '2013-12-13 00:00:00', NULL, NULL),
(2783, NULL, '2013-12-13 00:00:00', -536, '2013-12-20', 1, 'Pascal Iacoviello\rstrassetset 12 13\r\n8304 Wallisellen', 1, '0.00', '100.00', '0.00', '1 Mahnung: Rechnungsbetrag zu begleichen bis 20.12.2013. Bei der nächsten Mahnung werden 10 CHF Mahngebühr verrechnet.', '2013-12-13 00:00:00', 1, 0, 1, 16505, NULL, NULL, '2013-12-13 00:00:00', NULL, NULL),
(2984, NULL, '2014-01-21 00:00:00', 0, '2014-02-19', 3, 'Pascal Iacoviello\rstrassetset 12 13\r\n8304 Wallisellen', 2, '10.00', '35.00', '0.00', '2 Mahnung: Rechnungsbetrag zu begleichen bis 19.02.2014. Es wurden zusätzlich 10 CHF Mahngebühr verrechnet.', '2014-01-21 00:00:00', 0, 0, 1, 16894, NULL, NULL, '2014-01-31 00:00:00', NULL, NULL),
(3165, NULL, '2014-01-31 00:00:00', 61, '2014-04-02', 3, 'Pascal Iacoviello\rstrassetset 12 13\r\n8304 Wallisellen', 0, '0.00', '395.00', '0.00', NULL, '2014-01-31 00:00:00', 1, 0, 1, 17267, NULL, NULL, '2014-01-31 00:00:00', NULL, NULL),
(4419, NULL, '2014-08-05 00:00:00', 58, '2014-10-02', 3, 'Pascal Iacoviello\rstrassetset 12 13\r\n8304 Wallisellen', 0, '0.00', '395.00', '0.00', NULL, '2014-08-05 00:00:00', 1, 0, 1, 19603, NULL, NULL, NULL, NULL, NULL),
(5469, NULL, '2015-02-03 00:00:00', 58, '2015-04-02', 3, 'Pascal Iacoviello\rstrassetset 12 13\r\n8304 Wallisellen', 0, '0.00', '790.00', '0.00', NULL, '2015-02-03 00:00:00', 0, 0, 1, 21467, NULL, NULL, NULL, NULL, '2017-08-07 15:10:18'),
(7339, NULL, '2016-02-03 00:00:00', 58, '2016-04-01', 3, 'Pascal Iacoviello\rstrassetset 12 13\r\n8304 Wallisellen', 0, '0.00', '790.00', '0.00', NULL, '2016-02-03 00:00:00', 1, 0, 1, 24979, NULL, NULL, NULL, NULL, NULL),
(7658, NULL, '2016-04-06 00:00:00', 12, '2016-04-18', 3, '\rahnhofstr. 1 58\r\n8606 Nänikon', 0, '0.00', '270.00', '270.00', NULL, '2016-04-06 00:00:00', 0, 0, 9503, 25619, '2016-04-19', '2016-04-19', '2016-04-07 00:00:00', NULL, '2016-04-18 23:00:10'),
(8091, NULL, '2016-06-20 00:00:00', 21, '2016-07-11', 3, 'Test Person\rahnhofstr. 1 58\r\n8606 Nänikon', 0, '0.00', '270.00', '270.00', NULL, '2016-06-20 00:00:00', 0, 0, 9503, 26382, '2016-07-01', '2016-07-01', '2016-06-20 00:00:00', NULL, '2016-07-01 07:33:46'),
(8498, NULL, '2016-09-13 00:00:00', 20, '2016-10-03', 3, 'Test Person\rahnhofstr. 1 58\r\n8606 Nänikon', 0, '0.00', '270.00', '270.00', NULL, '2016-09-13 00:00:00', 0, 0, 9503, 27018, '2016-10-06', '2016-10-06', '2016-09-13 00:00:00', NULL, '2016-10-05 23:00:34'),
(8972, NULL, '2016-12-15 00:00:00', 11, '2016-12-26', 2, 'Test Person\rahnhofstr. 1 58\r\n8606 Nänikon', 0, '0.00', '270.00', '0.00', NULL, '2016-12-15 00:00:00', 1, 0, 9503, 27845, NULL, NULL, '2016-12-16 00:00:00', NULL, '2016-12-23 00:00:02'),
(9359, NULL, '2017-02-21 00:00:00', 27, '2017-03-20', 3, 'Test Person\rahnhofstr. 1 58\r\n8606 Nänikon', 0, '0.00', '270.00', '270.00', NULL, '2017-02-21 00:00:00', 0, 0, 9503, 28446, '2017-03-01', '2017-03-01', '2017-02-23 00:00:00', NULL, '2017-02-28 23:00:44'),
(9796, NULL, '2017-04-21 00:00:00', 16, '2017-05-31', 2, 'Testti Person\r\nRömerstr. 142\r\n8404 Winterthur', 1, '0.00', '100.00', '0.00', '1 Erinnerung: Rechnungsbetrag zu begleichen bis 31.05.2017. Bei einer Mahnung werden 10 CHF Mahngebühr verrechnet.', '2017-04-21 00:00:00', 1, 0, 3545, 29167, NULL, NULL, '2017-05-25 00:00:00', NULL, '2017-06-08 23:00:01'),
(9920, NULL, '2017-05-08 00:00:00', 27, '2017-06-04', 2, 'Testti Person\r\nRömerstr. 142\r\n8404 Winterthur', 0, '0.00', '100.00', '0.00', NULL, '2017-05-08 00:00:00', 1, 0, 3545, 29343, NULL, NULL, '2017-05-10 00:00:00', NULL, '2017-05-25 23:00:01'),
(9943, NULL, '2017-05-16 00:00:00', -9, '2017-05-31', 3, 'Testti Person\r\nRömerstr. 142\r\n8404 Winterthur', 0, '0.00', '600.00', '600.00', NULL, '2017-05-16 00:00:00', 0, 0, 3545, 29398, '2017-05-30', '2017-05-30', '2017-05-17 00:00:00', NULL, '2017-05-29 23:00:42'),
(10769, NULL, '2017-09-18 00:00:00', 21, '2017-10-09', 3, 'Test Person\rahnhofstr. 1 58\r\n8606 Nänikon', 0, '0.00', '280.00', '280.00', NULL, '2017-09-18 00:00:00', 0, 0, 9503, 30583, '2017-09-30', '2017-10-03', '2017-09-22 00:00:00', NULL, '2017-10-02 22:06:31'),
(11413, NULL, '2017-12-07 00:00:00', 25, '2018-01-01', 1, 'Test Person\rahnhofstr. 1 58\r\n8606 Nänikon', 0, '0.00', '295.00', '0.00', NULL, '2017-12-07 00:00:00', 0, 0, 9503, 31542, NULL, NULL, '2017-12-08 00:00:00', NULL, '2017-12-21 08:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `invoicestate`
--

CREATE TABLE `invoicestate` (
  `invoicestate` int(11) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoicestate`
--

INSERT INTO `invoicestate` (`invoicestate`, `desc`) VALUES
(1, 'zuverrechnen'),
(2, 'verrechnet'),
(3, 'bezahlt'),
(4, 'kontrolle'),
(5, 'barzahlung'),
(6, 'Nicht bezahlt');

-- --------------------------------------------------------

--
-- Table structure for table `invoicetype`
--

CREATE TABLE `invoicetype` (
  `invoicetypeid` int(11) NOT NULL,
  `invoicetype` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoicetype`
--

INSERT INTO `invoicetype` (`invoicetypeid`, `invoicetype`) VALUES
(1, 'Abo'),
(2, 'Kurs'),
(3, 'Ungültige Anmeldung'),
(4, 'Gutschein'),
(5, 'Rechnung diverses'),
(6, 'Kleider');

-- --------------------------------------------------------

--
-- Stand-in structure for view `invoicev`
--
CREATE TABLE `invoicev` (
`invoiceid` int(11)
,`invoicetype` int(11)
,`invoicedate` datetime
,`invoicegrace` int(11)
,`payabledate` date
,`invoicestate` int(11)
,`invoiceaddress` varchar(1000)
,`dunning` int(11)
,`dunningamount` decimal(10,2)
,`invoiceamount` decimal(10,2)
,`paidamount` decimal(10,2)
,`invoicetext` text
,`entered` datetime
,`cancelled` int(11)
,`terminalid` int(11)
,`kursteilnehmerid` int(11)
,`teilnahmeid` int(11)
,`paymentdate` date
,`checkeddate` date
,`clearingdate` datetime
,`voucherid` int(11)
,`lastedit` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `janein`
--

CREATE TABLE `janein` (
  `janeinid` int(11) NOT NULL,
  `text` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `janein`
--

INSERT INTO `janein` (`janeinid`, `text`) VALUES
(0, 'nein'),
(1, 'ja');

-- --------------------------------------------------------

--
-- Table structure for table `kassenabschluss`
--

CREATE TABLE `kassenabschluss` (
  `id` int(11) NOT NULL,
  `kartenzahlungen` decimal(10,2) NOT NULL DEFAULT '0.00',
  `barzahlungen` decimal(10,2) NOT NULL DEFAULT '0.00',
  `kleiderbar` decimal(10,2) NOT NULL DEFAULT '0.00',
  `kleiderkarte` decimal(10,2) NOT NULL DEFAULT '0.00',
  `differenz` decimal(10,2) NOT NULL DEFAULT '0.00',
  `differenzgrund` varchar(255) DEFAULT '',
  `kasse` decimal(10,2) NOT NULL,
  `abschlussvom` datetime NOT NULL,
  `terminalid` int(11) NOT NULL DEFAULT '0',
  `pascal` decimal(10,2) NOT NULL,
  `romina` decimal(10,2) NOT NULL,
  `visiert` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kursteilnahme`
--

CREATE TABLE `kursteilnahme` (
  `Teilnahmeid` int(11) NOT NULL,
  `Kursteilnehmerid` int(11) DEFAULT NULL,
  `Kursid` int(11) DEFAULT NULL,
  `Zahlungsbetrag` decimal(10,2) DEFAULT '0.00',
  `Bemerkung` varchar(255) DEFAULT NULL,
  `Aushilfe` int(11) DEFAULT NULL,
  `Validfrom` datetime DEFAULT NULL,
  `Validuntil` datetime DEFAULT NULL,
  `invoiceid` int(11) DEFAULT NULL,
  `invoiceamount` decimal(10,2) DEFAULT NULL,
  `erfasstam` datetime DEFAULT NULL,
  `archiviert` int(11) DEFAULT NULL,
  `zahlungsart` int(11) DEFAULT NULL,
  `bezahltpunkte` int(11) DEFAULT NULL,
  `Lektionen` int(11) DEFAULT NULL,
  `GebuchteLektionen` int(11) DEFAULT NULL,
  `abotype` int(11) DEFAULT NULL,
  `coursetype` int(11) DEFAULT NULL,
  `lessontype` int(11) DEFAULT NULL,
  `Letzterbesuch` datetime DEFAULT NULL,
  `lastlessonid` int(11) DEFAULT NULL,
  `check` int(11) NOT NULL DEFAULT '0',
  `cancelled` int(11) NOT NULL DEFAULT '0',
  `cancel_reason` varchar(1024) NOT NULL,
  `terminalid` int(11) NOT NULL DEFAULT '0',
  `renewal` int(11) NOT NULL DEFAULT '0',
  `renewed` int(11) NOT NULL DEFAULT '0',
  `renewedfromteilnahme` int(11) DEFAULT NULL,
  `abotypetorenew` int(11) NOT NULL DEFAULT '0',
  `abocategory` int(11) DEFAULT '1',
  `ratesleft` int(11) NOT NULL DEFAULT '0',
  `newprice` int(11) NOT NULL DEFAULT '0',
  `paid` tinyint(2) NOT NULL DEFAULT '0',
  `breakable` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kursteilnahme`
--

INSERT INTO `kursteilnahme` (`Teilnahmeid`, `Kursteilnehmerid`, `Kursid`, `Zahlungsbetrag`, `Bemerkung`, `Aushilfe`, `Validfrom`, `Validuntil`, `invoiceid`, `invoiceamount`, `erfasstam`, `archiviert`, `zahlungsart`, `bezahltpunkte`, `Lektionen`, `GebuchteLektionen`, `abotype`, `coursetype`, `lessontype`, `Letzterbesuch`, `lastlessonid`, `check`, `cancelled`, `cancel_reason`, `terminalid`, `renewal`, `renewed`, `renewedfromteilnahme`, `abotypetorenew`, `abocategory`, `ratesleft`, `newprice`, `paid`, `breakable`) VALUES
(3558, 1, 18, '0.00', NULL, NULL, '2012-03-07 00:00:00', '2012-04-03 00:00:00', NULL, NULL, '2011-11-18 00:00:00', NULL, 1, NULL, 8, 0, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(3653, 1, 18, '0.00', NULL, NULL, '2012-04-04 00:00:00', '2012-05-01 00:00:00', NULL, NULL, '2011-11-24 00:00:00', NULL, 0, NULL, -7, 0, 4, 1, 1, '2012-04-30 18:11:49', 16, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(3654, 1, 18, '0.00', NULL, NULL, '2012-05-02 00:00:00', '2012-05-29 00:00:00', NULL, NULL, '2011-11-24 00:00:00', NULL, 0, NULL, 0, 0, 4, 1, 1, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(3655, 1, 18, '0.00', NULL, NULL, '2012-05-30 00:00:00', '2012-06-26 00:00:00', NULL, NULL, '2011-11-24 00:00:00', NULL, 0, NULL, 0, 0, 4, 1, 1, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(3656, 1, 18, '0.00', NULL, NULL, '2012-06-27 00:00:00', '2012-07-24 00:00:00', NULL, NULL, '2011-11-24 00:00:00', NULL, 0, NULL, 8, 0, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(3768, 1, 18, '70.00', NULL, NULL, '2012-07-25 00:00:00', '2012-08-21 00:00:00', NULL, NULL, '2011-12-01 00:00:00', NULL, 0, NULL, 8, 0, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(3901, 1, 18, '0.00', NULL, NULL, '2011-12-13 00:00:00', '2011-12-13 00:00:00', NULL, NULL, '2011-12-13 00:00:00', NULL, 0, NULL, 0, 0, 2, 1, 2, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(4867, 1, 18, '70.00', NULL, NULL, '2012-07-25 00:00:00', '2012-08-21 00:00:00', NULL, NULL, '2012-01-25 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(4922, 1, 18, '70.00', NULL, NULL, '2012-07-25 00:00:00', '2012-08-21 00:00:00', NULL, '100.00', '2012-01-27 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(5600, 1, 18, '70.00', NULL, NULL, '2012-07-25 00:00:00', '2012-08-21 00:00:00', NULL, NULL, '2012-03-05 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(5601, 1, 18, '50.00', 'Gutschein:12', NULL, '2012-07-25 00:00:00', '2012-08-21 00:00:00', NULL, NULL, '2012-03-05 00:00:00', NULL, 1, 0, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 1, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(5602, 1, 18, '70.00', NULL, NULL, '2012-08-22 00:00:00', '2012-09-18 00:00:00', NULL, NULL, '2012-03-05 00:00:00', NULL, 1, 0, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 1, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(5784, 1, 18, '70.00', NULL, NULL, '2012-07-25 00:00:00', '2012-08-21 00:00:00', NULL, NULL, '2012-03-20 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(5833, 1, 18, '50.00', NULL, NULL, '2012-03-22 00:00:00', '2013-03-22 00:00:00', NULL, NULL, '2012-03-22 00:00:00', NULL, 1, NULL, 5, 5, 8, 1, 3, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6302, 1, 18, '0.00', NULL, NULL, '2012-07-25 00:00:00', '2012-08-21 00:00:00', NULL, NULL, '2012-04-13 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6303, 1, 18, '0.00', NULL, NULL, '2012-04-13 00:00:00', '2013-04-13 00:00:00', NULL, NULL, '2012-04-13 00:00:00', NULL, 1, 0, 3, 5, 8, 1, 3, '2012-04-13 11:51:09', 17, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6322, 1, 18, '0.00', 'Gutschein:0', NULL, '2012-08-22 00:00:00', '2012-09-18 00:00:00', NULL, NULL, '2012-04-16 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 1, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6323, 1, 18, '80.00', NULL, NULL, '2012-09-19 00:00:00', '2012-10-16 00:00:00', NULL, NULL, '2012-04-16 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6512, 1, 0, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '2012-04-29 00:00:00', NULL, 1, 0, 8, 8, 9, 2, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6513, 1, 0, '0.00', NULL, NULL, '2012-04-29 00:00:00', '2012-05-26 00:00:00', NULL, NULL, '2012-04-29 00:00:00', NULL, 1, 0, 8, 8, 9, 2, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6519, 1, 18, '0.00', NULL, NULL, '2012-04-30 00:00:00', '2013-04-30 00:00:00', NULL, NULL, '2012-04-30 00:00:00', NULL, 1, NULL, 5, 5, 2, 1, 2, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6520, 1, 18, '0.00', NULL, NULL, '2012-09-19 00:00:00', '2012-10-16 00:00:00', NULL, NULL, '2012-04-30 00:00:00', NULL, 1, 0, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6536, 1, 0, '0.00', NULL, NULL, '2012-04-30 00:00:00', '2012-05-27 00:00:00', NULL, NULL, '2012-04-30 00:00:00', NULL, 1, 0, 8, 8, 9, 2, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6537, 1, 0, '0.00', NULL, NULL, '2012-04-30 00:00:00', '2012-05-27 00:00:00', NULL, NULL, '2012-04-30 00:00:00', NULL, 1, 0, 8, 8, 9, 2, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6538, 1, 0, '0.00', NULL, NULL, '2012-05-28 00:00:00', '2012-06-24 00:00:00', NULL, NULL, '2012-04-30 00:00:00', NULL, 1, 0, 8, 8, 9, 2, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6539, 1, 18, '100.00', NULL, NULL, '2012-04-30 00:00:00', '2012-05-27 00:00:00', NULL, NULL, '2012-04-30 00:00:00', NULL, 0, NULL, 8, 8, 9, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6540, 1, 18, '0.00', NULL, NULL, '2012-04-30 00:00:00', '2012-05-27 00:00:00', NULL, NULL, '2012-04-30 00:00:00', NULL, 1, NULL, 7, 8, 9, 2, 4, '2012-05-02 09:19:25', 18, 0, 0, '', 0, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(6593, 1, 18, '80.00', NULL, NULL, '2012-05-02 00:00:00', '2012-05-29 00:00:00', NULL, NULL, '2012-05-02 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6604, 1, 18, '80.00', NULL, NULL, '2012-05-02 00:00:00', '2012-05-29 00:00:00', NULL, NULL, '2012-05-02 00:00:00', NULL, 1, NULL, 7, 8, 1, 1, 4, '2012-05-02 15:49:06', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6605, 1, 18, '80.00', NULL, NULL, '2012-05-30 00:00:00', '2012-06-26 00:00:00', NULL, NULL, '2012-05-02 00:00:00', NULL, 1, 0, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6646, 1, 18, '80.00', NULL, NULL, '2012-05-05 00:00:00', '2012-06-01 00:00:00', NULL, NULL, '2012-05-05 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 5, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6647, 1, 18, '80.00', NULL, NULL, '2012-05-06 00:00:00', '2012-06-02 00:00:00', NULL, NULL, '2012-05-06 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 5, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6648, 1, 18, '80.00', NULL, NULL, '2012-05-06 00:00:00', '2012-06-02 00:00:00', NULL, NULL, '2012-05-06 00:00:00', NULL, 1, 0, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 5, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6649, 1, 18, '80.00', NULL, NULL, '2012-05-06 00:00:00', '2012-06-02 00:00:00', NULL, NULL, '2012-05-06 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 5, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6652, 1, 18, '80.00', NULL, NULL, '2012-05-05 00:00:00', '2012-06-01 00:00:00', NULL, NULL, '2012-05-05 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 5, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6653, 1, 18, '80.00', NULL, NULL, '2012-06-02 00:00:00', '2012-06-29 00:00:00', NULL, NULL, '2012-05-05 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 1, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6654, 1, 18, '100.00', NULL, NULL, '2012-05-05 00:00:00', '2013-05-05 00:00:00', NULL, NULL, '2012-05-05 00:00:00', NULL, 1, 0, 5, 5, 2, 1, 2, '0000-00-00 00:00:00', 0, 0, 1, '', 1, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6655, 1, 18, '240.00', NULL, NULL, '2012-06-30 00:00:00', '2012-09-21 00:00:00', NULL, NULL, '2012-05-05 00:00:00', NULL, 1, NULL, 0, 0, 3, 1, 1, '0000-00-00 00:00:00', 0, 0, 1, '', 2, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6656, 1, 18, '80.00', NULL, NULL, '2012-09-22 00:00:00', '2012-10-19 00:00:00', NULL, NULL, '2012-05-05 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 3, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6657, 1, 18, '80.00', NULL, NULL, '2012-05-06 00:00:00', '2012-06-02 00:00:00', NULL, NULL, '2012-05-06 00:00:00', NULL, 1, NULL, 6, 8, 1, 1, 4, '2012-05-06 17:27:07', 0, 0, 1, '', 1, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6658, 1, 18, '80.00', NULL, NULL, '2012-05-06 00:00:00', '2012-06-02 00:00:00', NULL, NULL, '2012-05-06 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 1, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6659, 1, 18, '100.00', NULL, NULL, '2012-05-28 00:00:00', '2012-06-24 00:00:00', NULL, NULL, '2012-05-06 00:00:00', NULL, 1, 0, 8, 8, 9, 2, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 1, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6662, 1, 18, '80.00', NULL, NULL, '2012-05-06 00:00:00', '2012-06-02 00:00:00', NULL, NULL, '2012-05-06 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 1, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6663, 1, 18, '0.00', 'Gutschein:', NULL, '2012-05-06 00:00:00', '2012-06-02 00:00:00', NULL, NULL, '2012-05-06 00:00:00', NULL, 1, NULL, 6, 8, 1, 1, 4, '2012-05-06 18:01:56', 21, 1, 0, '', 1, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(6665, 1, 18, '80.00', NULL, NULL, '2012-06-03 00:00:00', '2012-06-30 00:00:00', NULL, NULL, '2012-05-06 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 1, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(7115, 1, 18, '0.00', NULL, NULL, '2012-05-22 00:00:00', '2012-05-22 00:00:00', NULL, NULL, '2012-05-22 00:00:00', NULL, NULL, NULL, 1, 1, 7, 1, 4, '0000-00-00 00:00:00', 0, 0, 1, '', 6, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(7977, 1, 18, '450.00', NULL, NULL, '2012-06-28 00:00:00', '2013-05-29 00:00:00', NULL, NULL, '2012-06-28 00:00:00', NULL, 0, NULL, 0, 0, 14, 1, 5, NULL, NULL, 0, 1, '', 5, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(7978, 1, 18, '395.00', NULL, NULL, '2012-06-28 00:00:00', '2013-05-29 00:00:00', 1, '395.00', '2012-06-28 00:00:00', NULL, 0, 0, 0, 0, 13, 1, 1, NULL, NULL, 0, 1, '', 5, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(7979, 1, 18, '240.00', NULL, NULL, '2012-06-28 00:00:00', '2012-12-12 00:00:00', NULL, NULL, '2012-06-28 00:00:00', NULL, 0, NULL, 0, 0, 21, 1, 1, NULL, NULL, 0, 1, '', 5, 1, 0, NULL, -12, 1, 0, 0, 0, 1),
(7980, 1, 18, '240.00', NULL, NULL, '2012-12-13 00:00:00', '2013-05-29 00:00:00', NULL, NULL, '2012-06-28 00:00:00', NULL, 0, 0, 0, 0, 21, 1, 1, NULL, NULL, 0, 1, '', 5, 1, 0, NULL, -12, 1, 0, 0, 0, 1),
(7981, 1, 18, '100.00', NULL, NULL, '2012-06-28 00:00:00', '2012-07-25 00:00:00', NULL, NULL, '2012-06-28 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, NULL, NULL, 0, 1, '', 5, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(7982, 1, 18, '100.00', NULL, NULL, '2012-06-28 00:00:00', '2012-07-25 00:00:00', NULL, NULL, '2012-06-28 00:00:00', NULL, 1, 0, 7, 8, 1, 1, 4, '2012-07-02 16:29:12', 0, 0, 0, '', 5, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(8015, 1, 18, '100.00', NULL, NULL, '2012-07-26 00:00:00', '2012-08-22 00:00:00', NULL, NULL, '2012-07-02 00:00:00', NULL, 1, NULL, 8, 8, 1, 1, 4, NULL, NULL, 0, 1, '', 1, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(8212, 1, 18, '0.00', 'Gutschein:sommeraktion', NULL, '2012-07-26 00:00:00', '2012-08-22 00:00:00', NULL, NULL, '2012-07-16 00:00:00', NULL, 1, NULL, 0, 0, 11, 1, 1, NULL, NULL, 1, 1, '', 4, 0, 0, NULL, 0, 2, 0, 0, 0, 1),
(8213, 1, 18, '80.00', NULL, NULL, '2012-07-26 00:00:00', '2012-08-22 00:00:00', NULL, NULL, '2012-07-16 00:00:00', NULL, 1, 0, 0, 0, 11, 1, 1, NULL, NULL, 1, 1, '', 4, 0, 0, NULL, 0, 2, 0, 0, 0, 1),
(8229, 1, 18, '100.00', NULL, NULL, '2012-05-28 00:00:00', '2012-06-24 00:00:00', NULL, NULL, '2012-07-16 00:00:00', NULL, 1, NULL, 8, 8, 9, 2, 4, NULL, NULL, 0, 1, '', 5, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(8779, 1, 18, '100.00', NULL, NULL, '2012-05-28 00:00:00', '2012-06-24 00:00:00', NULL, NULL, '2012-09-06 00:00:00', NULL, 1, NULL, 8, 8, 9, 2, 4, NULL, NULL, 0, 1, '', 5, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(8780, 1, 18, '100.00', NULL, NULL, '2012-09-06 00:00:00', '2012-10-03 00:00:00', NULL, NULL, '2012-09-06 00:00:00', NULL, 1, 0, 8, 8, 9, 2, 4, NULL, NULL, 1, 1, '', 5, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(8781, 1, 18, '80.00', NULL, NULL, '2012-09-06 00:00:00', '2012-10-03 00:00:00', NULL, NULL, '2012-09-06 00:00:00', NULL, 1, NULL, 0, 0, 11, 1, 1, NULL, NULL, 0, 1, '', 5, 0, 0, NULL, 0, 2, 0, 0, 0, 1),
(8782, 1, 18, '80.00', NULL, NULL, '2012-09-06 00:00:00', '2012-10-03 00:00:00', NULL, NULL, '2012-09-06 00:00:00', NULL, 1, 0, 0, 0, 11, 1, 1, NULL, NULL, 0, 1, '', 5, 0, 0, NULL, 0, 2, 0, 0, 0, 1),
(8783, 1, 18, '80.00', NULL, NULL, '2012-09-06 00:00:00', '2012-10-03 00:00:00', NULL, NULL, '2012-09-06 00:00:00', NULL, 1, 0, 0, 0, 11, 1, 1, NULL, NULL, 0, 1, '', 5, 0, 0, NULL, 0, 2, 0, 0, 0, 1),
(8784, 1, 18, '100.00', NULL, NULL, '2012-10-04 00:00:00', '2012-10-31 00:00:00', NULL, NULL, '2012-09-06 00:00:00', NULL, 1, 0, 8, 8, 1, 1, 4, NULL, NULL, 0, 1, '', 5, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(8790, 1, 18, '0.00', 'Gutschein:pascal', NULL, '2012-09-07 00:00:00', '2013-09-06 00:00:00', NULL, NULL, '2012-09-07 00:00:00', NULL, 1, NULL, -5, 0, 13, 1, 1, '2012-09-20 18:16:06', 27, 1, 1, '', 1, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(8932, 3545, 18, '100.00', NULL, NULL, '2012-09-18 00:00:00', '2012-10-15 00:00:00', NULL, NULL, '2012-09-18 00:00:00', NULL, 0, 0, 5, 8, 9, 2, 4, '2012-10-09 19:46:57', 31, 0, 0, '', 4, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(10750, 1, 18, '0.00', 'Gutschein:TestWeihnachtsaktionVerlaengerung', NULL, '2012-12-07 00:00:00', '2012-02-19 00:00:00', NULL, NULL, '2012-12-07 00:00:00', NULL, 0, NULL, -5, 0, 25, 1, 1, '2013-01-03 09:03:15', 44, 1, 0, '', 0, 1, 1, NULL, 0, 1, 1, 0, 0, 1),
(10758, 1, NULL, '0.00', 'WeihnachtsaktionVerlaengerung Rueckgaengig', NULL, '2013-01-19 00:00:00', '2013-04-07 00:00:00', 255, '150.00', '2012-12-07 00:00:00', NULL, 2, NULL, -3, 0, 25, 1, 1, '2013-01-30 11:13:06', 44, 0, 0, '', 0, 1, 1, 10750, 0, 1, 5, 0, 0, 1),
(11149, 3545, 18, '100.00', NULL, NULL, '2013-01-09 00:00:00', '2013-02-05 00:00:00', NULL, NULL, '2013-01-09 00:00:00', NULL, 0, 0, 2, 8, 9, 2, 4, '2013-01-30 19:51:16', 51, 1, 0, '', 4, 0, 1, NULL, 0, 1, 0, 0, 0, 1),
(11248, 3545, NULL, '0.00', NULL, NULL, '2013-02-06 00:00:00', '2013-03-05 00:00:00', 398, '100.00', '2013-01-15 00:00:00', NULL, 2, NULL, 2, 8, 9, 2, 4, '2013-03-04 21:50:05', 28, 0, 0, '', 0, 0, 1, 11149, 0, 1, 0, 0, 0, 1),
(11679, 1, 18, '0.00', NULL, NULL, '2013-04-08 00:00:00', '2013-04-08 00:00:00', NULL, NULL, '2013-02-06 00:00:00', NULL, 0, NULL, 1, 1, 7, 1, 4, NULL, NULL, 0, 0, '', 4, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(11689, 3545, NULL, '0.00', NULL, NULL, '2013-03-06 00:00:00', '2013-04-02 00:00:00', 531, '100.00', '2013-02-06 00:00:00', NULL, 2, NULL, 5, 8, 9, 2, 4, '2013-03-27 20:32:45', 30, 0, 0, '', 0, 0, 1, 11248, 0, 1, 0, 0, 0, 1),
(11708, 1, NULL, '0.00', NULL, NULL, '2013-04-08 00:00:00', '2013-06-07 00:00:00', 550, '150.00', '2013-02-06 00:00:00', NULL, 2, NULL, 0, 0, 25, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, 10758, 0, 1, 4, 0, 0, 1),
(12286, 3545, NULL, '0.00', 'eine woche verlängert wegen osternferien 2013', NULL, '2013-04-03 00:00:00', '2013-05-07 00:00:00', 760, '100.00', '2013-03-08 00:00:00', NULL, 2, NULL, 4, 8, 9, 2, 4, '2013-04-24 20:45:40', 49, 0, 0, '', 0, 0, 1, 11689, 0, 1, 0, 0, 0, 1),
(12851, 3545, NULL, '0.00', NULL, NULL, '2013-05-08 00:00:00', '2013-06-04 00:00:00', 980, '100.00', '2013-04-10 00:00:00', NULL, 2, NULL, 8, 8, 9, 2, 4, NULL, NULL, 0, 0, '', 0, 0, 1, 12286, 0, 1, 0, 0, 0, 1),
(13305, 3545, NULL, '0.00', NULL, NULL, '2013-06-05 00:00:00', '2013-07-02 00:00:00', 1172, '100.00', '2013-05-07 00:00:00', NULL, 2, NULL, 8, 8, 9, 2, 4, NULL, NULL, 0, 0, '', 0, 0, 0, 12851, 0, 1, 0, 0, 0, 1),
(14463, 1, 18, '100.00', NULL, NULL, '2012-05-28 00:00:00', '2012-06-24 00:00:00', NULL, NULL, '2013-07-10 00:00:00', NULL, 1, NULL, 8, 8, 9, 2, 4, NULL, NULL, 0, 1, '', 4, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(15504, 1, 18, '0.00', NULL, NULL, '2013-10-01 00:00:00', '2014-04-01 00:00:00', NULL, NULL, '2013-10-01 00:00:00', NULL, 1, NULL, 0, 0, 36, 1, 1, NULL, NULL, 0, 0, '', 1, 1, 1, NULL, 0, 1, 0, 0, 0, 1),
(16504, 1, 18, '0.00', NULL, NULL, '2012-05-28 00:00:00', '2012-06-24 00:00:00', 2782, '100.00', '2013-12-11 00:00:00', NULL, 2, NULL, 8, 8, 9, 2, 4, NULL, NULL, 0, 0, '', 1, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(16505, 1, 18, '0.00', NULL, NULL, '2012-06-25 00:00:00', '2100-07-22 00:00:00', 2783, '100.00', '2013-12-11 00:00:00', NULL, 2, 0, 6, 8, 9, 2, 4, '2017-11-09 21:54:18', 91, 0, 0, '', 1, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(16506, 1, 18, '0.00', NULL, NULL, '2014-04-02 00:00:00', '2014-06-24 00:00:00', NULL, '160.00', '2013-12-11 00:00:00', NULL, 2, 0, 10, 10, 30, 1, 4, NULL, NULL, 0, 1, '', 1, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(16507, 1, 18, '160.00', NULL, NULL, '2014-06-25 00:00:00', '2014-09-16 00:00:00', NULL, '0.00', '2013-12-11 00:00:00', NULL, 0, 0, 10, 10, 30, 1, 4, NULL, NULL, 0, 1, '', 1, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(16508, 1, 18, '160.00', NULL, NULL, '2014-09-17 00:00:00', '2014-12-09 00:00:00', NULL, '0.00', '2013-12-11 00:00:00', NULL, 0, 0, 10, 10, 30, 1, 4, NULL, NULL, 0, 1, '', 1, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(16894, 1, 18, '0.00', NULL, NULL, '2014-01-14 00:00:00', '2014-01-16 00:00:00', 2984, '25.00', '2014-01-14 00:00:00', NULL, 2, NULL, 1, 1, 35, 1, 2, NULL, NULL, 0, 0, '', 1, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(16931, 1, 18, '100.00', NULL, NULL, '2012-07-23 00:00:00', '2012-08-19 00:00:00', NULL, '0.00', '2014-01-18 00:00:00', NULL, 1, NULL, 8, 8, 9, 2, 4, NULL, NULL, 0, 1, '', 3, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(17267, 1, NULL, '0.00', NULL, NULL, '2014-04-02 00:00:00', '2014-10-01 00:00:00', 3165, '395.00', '2014-01-31 00:00:00', NULL, 2, NULL, 0, 0, 36, 1, 1, NULL, NULL, 0, 1, '', 0, 1, 1, 15504, 0, 1, 1, 0, 0, 1),
(19173, 1, 18, '100.00', NULL, NULL, '2012-07-23 00:00:00', '2012-08-19 00:00:00', NULL, '0.00', '2014-06-13 00:00:00', NULL, 1, NULL, 4, 4, 9, 2, 4, NULL, NULL, 0, 1, '', 4, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(19603, 1, NULL, '0.00', NULL, NULL, '2014-10-02 00:00:00', '2015-04-02 00:00:00', 4419, '395.00', '2014-08-05 00:00:00', NULL, 2, NULL, 0, 0, 36, 1, 1, NULL, NULL, 0, 1, '', 0, 1, 0, 17267, 0, 1, 1, 0, 0, 1),
(19795, 1, 18, '80.00', 'Gutschein:test', NULL, '2012-07-23 00:00:00', '2012-08-19 00:00:00', NULL, '0.00', '2014-08-24 00:00:00', NULL, 0, NULL, 4, 4, 9, 2, 4, NULL, NULL, 1, 1, '', 4, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(20171, 1, 18, '0.00', 'Gutschein:deindeal', NULL, '2014-04-02 00:00:00', '2015-04-01 00:00:00', NULL, '0.00', '2014-10-01 00:00:00', NULL, 0, 0, -1, 0, 13, 1, 5, '2014-12-08 17:32:37', 1, 1, 0, '', 4, 1, 1, NULL, 0, 1, 0, 0, 0, 1),
(21042, 1, 18, '60.00', 'Gutschein:110 test', NULL, '2015-04-02 00:00:00', '2015-06-01 00:00:00', NULL, '0.00', '2014-12-22 00:00:00', NULL, 0, NULL, 0, 0, 33, 1, 5, NULL, NULL, 1, 1, '', 1, 1, 0, NULL, 0, 2, 0, 0, 0, 1),
(21043, 1, 18, '100.00', NULL, NULL, '2015-04-02 00:00:00', '2015-04-29 00:00:00', NULL, '0.00', '2014-12-22 00:00:00', NULL, 0, 0, 8, 8, 1, 1, 4, NULL, NULL, 1, 1, '', 1, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(21467, 1, NULL, '0.00', NULL, NULL, '2015-04-02 00:00:00', '2030-03-31 00:00:00', 5469, '790.00', '2015-02-03 00:00:00', NULL, 2, NULL, -10, 0, 13, 1, 5, '2017-10-25 15:49:16', 44, 0, 0, '', 0, 0, 1, 20171, 0, 1, 0, 0, 0, 1),
(21663, 1, 18, '120.00', NULL, NULL, '2015-02-26 00:00:00', '2015-08-26 00:00:00', NULL, '0.00', '2015-02-26 00:00:00', NULL, 1, NULL, 4, 4, 10, 2, 2, NULL, NULL, 0, 1, '', 4, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(24889, 9503, 18, '0.00', NULL, NULL, '2016-01-25 00:00:00', '2016-01-25 00:00:00', NULL, '0.00', '2016-01-25 00:00:00', NULL, 0, 0, 0, 1, 7, 1, 4, '2016-01-25 19:08:20', 2, 0, 0, '', 1, 0, 0, NULL, 0, 1, 0, 0, 0, 1),
(24891, 9503, 18, '250.00', 'Gutschein:kl', NULL, '2016-01-25 00:00:00', '2016-04-17 00:00:00', NULL, '0.00', '2016-01-25 00:00:00', NULL, 1, 0, -20, 0, 3, 1, 1, '2016-04-12 19:13:39', 4, 1, 0, '', 1, 1, 1, NULL, 0, 1, 0, 0, 0, 1),
(24979, 1, NULL, '0.00', NULL, NULL, '2016-04-01 00:00:00', '2017-04-01 00:00:00', 7339, '790.00', '2016-02-03 00:00:00', NULL, 2, NULL, 0, 0, 13, 1, 5, NULL, NULL, 0, 1, '', 0, 1, 0, 21467, 0, 1, 0, 0, 0, 1),
(25619, 9503, NULL, '0.00', NULL, NULL, '2016-04-18 00:00:00', '2016-07-10 00:00:00', 7658, '270.00', '2016-04-06 00:00:00', NULL, 2, NULL, -20, 0, 3, 1, 1, '2016-07-05 19:05:18', 4, 0, 0, '', 0, 1, 1, 24891, 0, 1, 0, 0, 0, 1),
(26382, 9503, NULL, '0.00', NULL, NULL, '2016-07-11 00:00:00', '2016-10-02 00:00:00', 8091, '270.00', '2016-06-20 00:00:00', NULL, 2, NULL, -19, 0, 3, 1, 1, '2016-09-26 17:56:45', 1, 0, 0, '', 0, 1, 1, 25619, 0, 1, 0, 0, 0, 1),
(27018, 9503, NULL, '0.00', NULL, NULL, '2016-10-03 00:00:00', '2016-12-25 00:00:00', 8498, '270.00', '2016-09-13 00:00:00', NULL, 2, NULL, -11, 0, 3, 1, 1, '2016-12-21 19:14:40', 6, 0, 0, '', 0, 1, 1, 26382, 0, 1, 0, 0, 0, 1),
(27830, 1, 18, '0.00', 'Gutschein:testaccount', NULL, '2015-04-01 00:00:00', '2031-04-01 00:00:00', NULL, '0.00', '2016-12-11 00:00:00', NULL, 0, NULL, -22, 0, 32, 1, 5, '2017-10-22 00:18:08', 200, 1, 1, '', 5, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(27845, 9503, NULL, '0.00', NULL, NULL, '2016-12-26 00:00:00', '2017-03-19 00:00:00', 8972, '270.00', '2016-12-15 00:00:00', NULL, 2, NULL, 0, 0, 3, 1, 5, NULL, NULL, 0, 1, '', 0, 1, 0, 27018, 0, 1, 0, 0, 0, 1),
(27942, 9503, 18, '270.00', NULL, NULL, '2016-12-26 00:00:00', '2017-03-19 00:00:00', NULL, '0.00', '2016-12-21 00:00:00', NULL, 1, 0, -30, 0, 3, 1, 5, '2017-03-17 18:01:44', 10, 1, 0, '', 1, 1, 1, NULL, 0, 1, 0, 0, 0, 1),
(28446, 9503, NULL, '0.00', 'Sportdispensazion Abo stopp ab 8.5.17, 3w', NULL, '2017-03-20 00:00:00', '2017-07-13 00:00:00', 9359, '270.00', '2017-02-21 00:00:00', NULL, 2, NULL, -36, 0, 3, 1, 5, '2017-06-30 17:58:00', 10, 0, 0, '', 0, 0, 0, 27942, 0, 1, 0, 0, 0, 1),
(29059, 3545, 18, '100.00', NULL, NULL, '2018-02-20 00:00:00', '2018-03-19 00:00:00', NULL, '0.00', '2017-04-09 00:00:00', NULL, 0, 0, 3, 4, 44, 5, 4, '2017-04-30 21:18:04', 70, 0, 1, 'Tesr', 4, 1, 1, NULL, 0, 1, 0, 0, 0, 1),
(29167, 3545, NULL, '0.00', NULL, NULL, '2017-05-07 00:00:00', '2018-06-05 00:00:00', 9796, '100.00', '2017-04-21 00:00:00', NULL, 2, NULL, 4, 4, 44, 5, 4, NULL, NULL, 0, 0, '', 0, 1, 1, 29059, 0, 1, 0, 0, 0, 1),
(29343, 3545, NULL, '0.00', NULL, NULL, '2017-06-04 00:00:00', '2017-07-01 00:00:00', 9920, '100.00', '2017-05-08 00:00:00', NULL, 2, NULL, 4, 4, 44, 5, 4, NULL, NULL, 0, 0, '', 0, 1, 0, 29167, 0, 1, 0, 0, 0, 1),
(29554, 1, 18, '100.00', NULL, NULL, '2100-07-23 00:00:00', '2100-08-19 00:00:00', NULL, '0.00', '2017-05-29 00:00:00', NULL, 0, 0, 4, 4, 9, 2, 4, NULL, NULL, 0, 1, '', 5, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(29560, 1, 18, '80.00', NULL, NULL, '2031-04-02 00:00:00', '2031-05-02 00:00:00', NULL, '0.00', '2017-05-31 00:00:00', NULL, 1, NULL, 0, 0, 59, 1, 5, NULL, NULL, 0, 1, '', 5, 1, 0, NULL, 0, 1, 12, 0, 0, 1),
(29561, 1, 18, '890.00', NULL, NULL, '2031-05-03 00:00:00', '2032-05-02 00:00:00', NULL, '0.00', '2017-05-31 00:00:00', NULL, 1, 0, 0, 0, 13, 1, 5, NULL, NULL, 0, 1, '', 5, 1, 0, NULL, 0, 1, 0, 0, 0, 1),
(30031, 9503, 18, '280.00', NULL, NULL, '2017-07-17 00:00:00', '2017-10-08 00:00:00', NULL, '0.00', '2017-07-17 00:00:00', NULL, 1, NULL, -36, 0, 3, 1, 5, '2017-10-06 17:54:51', 10, 0, 0, '', 1, 1, 1, NULL, 0, 1, 0, 0, 0, 1),
(30583, 9503, NULL, '0.00', NULL, NULL, '2017-10-09 00:00:00', '2017-12-31 00:00:00', 10769, '280.00', '2017-09-18 00:00:00', NULL, 2, NULL, -43, 0, 3, 1, 5, '2017-12-20 19:20:26', 84, 0, 0, '', 0, 1, 1, 30031, 0, 1, 0, 0, 0, 1),
(31542, 9503, NULL, '0.00', NULL, NULL, '2018-01-01 00:00:00', '2018-12-31 00:00:00', 11413, '280.00', '2017-12-07 00:00:00', NULL, 2, NULL, 0, 0, 13, 1, 5, NULL, NULL, 0, 0, '', 0, 1, 0, 30583, 0, 1, 0, 0, 0, 1),
(31575, 3545, NULL, '0.00', NULL, NULL, '2018-01-31 00:00:00', '2018-07-31 00:00:00', NULL, NULL, '2018-01-24 15:49:01', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31576, 3545, NULL, '0.00', NULL, NULL, '2018-01-30 00:00:00', '2018-03-26 00:00:00', NULL, NULL, '2018-01-24 16:58:07', NULL, NULL, NULL, NULL, NULL, 63, 2, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31577, 3545, NULL, '0.00', NULL, NULL, '2018-01-27 00:00:00', '2018-02-26 00:00:00', NULL, NULL, '2018-01-24 18:38:12', NULL, NULL, NULL, NULL, NULL, 60, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31578, 12421, NULL, '0.00', NULL, NULL, '2018-01-30 00:00:00', '2018-03-01 00:00:00', NULL, NULL, '2018-01-24 18:38:41', NULL, NULL, NULL, NULL, NULL, 60, 1, 1, NULL, NULL, 0, 1, 'testyy', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31579, 3545, NULL, '0.00', NULL, NULL, '2018-01-27 00:00:00', '2018-02-26 00:00:00', NULL, NULL, '2018-01-24 20:48:48', NULL, NULL, NULL, NULL, NULL, 59, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31580, 3545, NULL, '0.00', NULL, NULL, '2018-01-25 00:00:00', '2018-04-18 00:00:00', NULL, NULL, '2018-01-24 21:48:00', NULL, NULL, NULL, NULL, NULL, 29, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31581, 3545, NULL, '0.00', NULL, NULL, '2018-01-26 00:00:00', '2018-02-22 00:00:00', NULL, NULL, '2018-01-25 00:44:37', NULL, NULL, NULL, NULL, NULL, 9, 2, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31582, 3545, NULL, '0.00', NULL, NULL, '2018-01-27 00:00:00', '2019-01-27 00:00:00', NULL, NULL, '2018-01-25 00:46:10', NULL, NULL, NULL, NULL, NULL, 13, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31583, 3545, NULL, '0.00', NULL, NULL, '2018-02-03 00:00:00', '2018-03-02 00:00:00', NULL, NULL, '2018-01-25 00:50:02', NULL, NULL, NULL, NULL, NULL, 9, 2, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31584, 3545, NULL, '0.00', NULL, NULL, '2018-01-29 00:00:00', '2019-01-29 00:00:00', NULL, NULL, '2018-01-25 15:58:42', NULL, NULL, NULL, NULL, NULL, 70, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31585, 3545, NULL, '0.00', NULL, NULL, '2018-01-28 00:00:00', '2019-01-28 00:00:00', NULL, NULL, '2018-01-26 01:17:13', NULL, NULL, NULL, NULL, NULL, 13, 1, 1, NULL, NULL, 0, 1, 'not needed anymore', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31586, 3545, NULL, '0.00', NULL, NULL, '2018-01-27 00:00:00', '2018-04-20 00:00:00', NULL, NULL, '2018-01-26 15:20:01', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31587, 3545, NULL, '0.00', NULL, NULL, '2018-02-08 00:00:00', '2018-03-07 00:00:00', NULL, NULL, '2018-01-27 21:48:16', NULL, NULL, NULL, NULL, NULL, 9, 2, 1, NULL, NULL, 0, 1, 'Laka', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31588, 3545, NULL, '0.00', NULL, NULL, '2018-01-30 00:00:00', '2018-07-30 00:00:00', NULL, NULL, '2018-01-29 18:32:02', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31589, 3545, NULL, '0.00', NULL, NULL, '2018-01-30 00:00:00', '2018-07-30 00:00:00', NULL, NULL, '2018-01-29 18:32:24', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31590, 3545, NULL, '0.00', NULL, NULL, '2018-01-30 00:00:00', '2019-01-30 00:00:00', NULL, NULL, '2018-01-29 18:34:38', NULL, NULL, NULL, NULL, NULL, 47, 2, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31591, 12421, NULL, '0.00', NULL, NULL, '2018-01-30 00:00:00', '2018-07-30 00:00:00', NULL, NULL, '2018-01-29 21:22:52', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, NULL, NULL, 0, 0, '', 0, 1, 0, NULL, 0, 1, 0, 0, 0, 0),
(31592, 3545, NULL, '0.00', NULL, NULL, '2018-02-08 00:00:00', '2018-05-02 00:00:00', NULL, NULL, '2018-01-30 15:07:48', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31593, 12424, NULL, '0.00', NULL, NULL, '2018-01-31 00:00:00', '2018-07-31 00:00:00', NULL, NULL, '2018-01-30 17:08:26', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, NULL, NULL, 0, 0, '', 0, 1, 0, NULL, 0, 1, 0, 0, 0, 0),
(31594, 3545, NULL, '0.00', NULL, NULL, '2018-02-03 00:00:00', '2018-03-02 00:00:00', NULL, NULL, '2018-02-02 17:33:10', NULL, NULL, NULL, NULL, NULL, 9, 2, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31595, 3545, NULL, '0.00', NULL, NULL, '2018-03-16 00:00:00', '2018-05-10 00:00:00', NULL, NULL, '2018-02-04 21:43:37', NULL, NULL, NULL, NULL, NULL, 24, 2, 1, NULL, NULL, 0, 1, 'Chom nümm', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31596, 3545, NULL, '0.00', NULL, NULL, '2018-02-15 00:00:00', '2018-03-17 00:00:00', NULL, NULL, '2018-02-06 15:33:37', NULL, NULL, NULL, NULL, NULL, 74, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31597, 3545, NULL, '0.00', NULL, NULL, '2018-02-14 00:00:00', '2018-03-16 00:00:00', NULL, NULL, '2018-02-07 00:22:33', NULL, NULL, NULL, NULL, NULL, 74, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31598, 3545, NULL, '0.00', NULL, NULL, '2018-02-23 00:00:00', '2018-03-22 00:00:00', NULL, NULL, '2018-02-08 00:08:31', NULL, NULL, NULL, NULL, NULL, 9, 2, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31599, 12425, NULL, '0.00', NULL, NULL, '2018-02-18 00:00:00', '2019-02-18 00:00:00', NULL, NULL, '2018-02-09 10:25:58', NULL, NULL, NULL, NULL, NULL, 13, 1, 1, NULL, NULL, 0, 0, '', 0, 1, 0, NULL, 0, 1, 0, 0, 0, 0),
(31600, 12426, NULL, '0.00', NULL, NULL, '2018-03-10 00:00:00', '2018-04-06 00:00:00', NULL, NULL, '2018-02-09 22:03:54', NULL, NULL, NULL, NULL, NULL, 9, 2, 1, NULL, NULL, 0, 0, '', 0, 1, 0, NULL, 0, 1, 0, 0, 0, 0),
(31601, 3545, NULL, '0.00', NULL, NULL, '2018-02-16 00:00:00', '2018-05-10 00:00:00', NULL, NULL, '2018-02-15 15:27:29', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31602, 3545, NULL, '0.00', NULL, NULL, '2018-02-24 00:00:00', '2018-05-18 00:00:00', NULL, NULL, '2018-02-15 21:59:54', NULL, NULL, NULL, NULL, NULL, 42, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31603, 3545, NULL, '0.00', NULL, NULL, '2018-02-23 00:00:00', '2018-03-25 00:00:00', NULL, NULL, '2018-02-15 22:00:30', NULL, NULL, NULL, NULL, NULL, 74, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31604, 3545, NULL, '0.00', NULL, NULL, '2018-02-28 00:00:00', '2018-03-27 00:00:00', NULL, NULL, '2018-02-28 19:10:18', NULL, NULL, NULL, NULL, NULL, 9, 2, 1, NULL, NULL, 0, 0, '', 0, 1, 0, NULL, 0, 1, 0, 0, 0, 0),
(31605, 3545, NULL, '0.00', NULL, NULL, '2018-02-28 00:00:00', '2018-08-28 00:00:00', NULL, NULL, '2018-02-28 19:12:41', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31606, 3545, NULL, '0.00', NULL, NULL, '2018-02-28 00:00:00', '2018-08-28 00:00:00', NULL, NULL, '2018-02-28 19:12:46', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, NULL, NULL, 0, 0, '', 0, 0, 0, NULL, 0, 1, 0, 0, 0, 0),
(31607, 12427, NULL, '0.00', NULL, NULL, '2018-03-01 00:00:00', '2018-08-29 00:00:00', NULL, NULL, '2018-02-28 19:20:20', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, NULL, NULL, 0, 0, '', 0, 1, 0, NULL, 0, 1, 0, 0, 0, 0),
(31608, 3545, NULL, '0.00', NULL, NULL, '2018-02-28 00:00:00', '2018-08-28 00:00:00', NULL, NULL, '2018-02-28 19:33:16', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, NULL, NULL, 0, 0, '', 0, 1, 0, NULL, 0, 1, 0, 0, 0, 0),
(31609, 12428, NULL, '0.00', NULL, NULL, '2018-02-28 00:00:00', '2018-08-28 00:00:00', NULL, NULL, '2018-02-28 19:41:10', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, NULL, NULL, 0, 0, '', 0, 1, 0, NULL, 0, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kursteilnehmer`
--

CREATE TABLE `kursteilnehmer` (
  `Teilnehmerid` int(11) NOT NULL,
  `Anrede` varchar(50) DEFAULT NULL,
  `Vorname` varchar(50) DEFAULT NULL,
  `Nachname` varchar(50) DEFAULT NULL,
  `Passwort` varchar(255) NOT NULL,
  `login_code` varchar(128) NOT NULL,
  `login_code_time` int(11) NOT NULL,
  `language` varchar(16) NOT NULL DEFAULT 'german',
  `usertype` tinyint(2) NOT NULL DEFAULT '0',
  `Mobiltelefon` varchar(50) DEFAULT NULL,
  `Telefon` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Strasse` varchar(150) DEFAULT NULL,
  `Ort` varchar(50) DEFAULT NULL,
  `PLZ` int(11) DEFAULT NULL,
  `Geburtsdatum` datetime DEFAULT NULL,
  `Persontyp` int(11) DEFAULT NULL,
  `Newsletter` int(11) DEFAULT NULL,
  `Bemerkung` longtext,
  `Status` int(11) DEFAULT '0',
  `Eingetragen` datetime DEFAULT NULL,
  `Abgemeldet` datetime DEFAULT NULL,
  `Kursid` int(11) DEFAULT NULL,
  `Erfassung` int(11) DEFAULT NULL,
  `Vermittlungandere` varchar(50) DEFAULT NULL,
  `Vermittlung` int(11) DEFAULT NULL,
  `Rabatt` decimal(10,2) DEFAULT NULL,
  `Zumba` int(11) DEFAULT NULL,
  `Zumbaaktiv` int(11) DEFAULT NULL,
  `Startam` datetime DEFAULT NULL,
  `Revidieren` int(11) DEFAULT NULL,
  `Vermitteltdurch` int(11) DEFAULT NULL,
  `Punkte` int(11) DEFAULT NULL,
  `Cardnumber` varchar(30) DEFAULT NULL,
  `Letzterbesuch` datetime NOT NULL,
  `infoTeilnehmer` text NOT NULL,
  `historie` text NOT NULL,
  `unterschrieben` int(11) NOT NULL,
  `Elternname` varchar(255) NOT NULL,
  `bestellung` text NOT NULL,
  `geaendertam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createcard` int(11) NOT NULL DEFAULT '0',
  `invalidpresentments` int(11) NOT NULL DEFAULT '0',
  `news` int(11) NOT NULL DEFAULT '1',
  `partnername` varchar(255) DEFAULT NULL,
  `partnersuche` text,
  `hasphoto` int(11) DEFAULT NULL,
  `photonew` int(11) NOT NULL DEFAULT '0',
  `kinderbetreuung` int(11) NOT NULL DEFAULT '0',
  `tag` varchar(255) DEFAULT NULL,
  `partnerstatus` int(11) DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '0',
  `aushilfe` int(11) NOT NULL,
  `accesscode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kursteilnehmer`
--

INSERT INTO `kursteilnehmer` (`Teilnehmerid`, `Anrede`, `Vorname`, `Nachname`, `Passwort`, `login_code`, `login_code_time`, `language`, `usertype`, `Mobiltelefon`, `Telefon`, `Email`, `Strasse`, `Ort`, `PLZ`, `Geburtsdatum`, `Persontyp`, `Newsletter`, `Bemerkung`, `Status`, `Eingetragen`, `Abgemeldet`, `Kursid`, `Erfassung`, `Vermittlungandere`, `Vermittlung`, `Rabatt`, `Zumba`, `Zumbaaktiv`, `Startam`, `Revidieren`, `Vermitteltdurch`, `Punkte`, `Cardnumber`, `Letzterbesuch`, `infoTeilnehmer`, `historie`, `unterschrieben`, `Elternname`, `bestellung`, `geaendertam`, `createcard`, `invalidpresentments`, `news`, `partnername`, `partnersuche`, `hasphoto`, `photonew`, `kinderbetreuung`, `tag`, `partnerstatus`, `level`, `aushilfe`, `accesscode`) VALUES
(1, 'm', 'Pascal', 'Iacoviello', '$2y$10$UxI4xV3enX03SEcR0J0y.eEBL4go5deUhWOcIqC2z00qDNd0d82jm', '426ba637bcae219c1f808c0cf238e19d78c0cc25', 1515262104, 'german', 0, '0765624575', NULL, 'pascal@iacoviello.ch', 'c/o Mamma Zahlt\r\nTösstalstr. 160', 'Winterthur', 8400, '1986-01-27 00:00:00', 4, 1, 'karten dietlikon und winterthur', 0, NULL, NULL, NULL, 1, NULL, NULL, NULL, 13, 1, '2011-05-01 00:00:00', 0, NULL, NULL, '82BC11900', '2012-01-11 12:36:57', '', 'ab 8. juli bis 31. juli  pascalle (pascal stornieren )\r\n\r\n36.5 (6.5) bloch bestellen\r\n\r\nDeine Reservationsnummer lautet: 7305\r\n\r\nfam. Gysin löschen\r\n\r\nReservationsnummer Salsa lautet: 7305 Res Nr. Zumba Res. Nr. 7341.\r\n\r\nPartyPass kostet jetzt 94 CHF\r\nSamstag / Freitag kostet 47 CHF\r\n\r\n\r\n Haslimann Pia\r\nAlpthalerstr.4, 8840 Trachslau hat am 14.05 schuhe bestellt!!! (geliefert)\r\n\r\nschuhe grösse 42 kommen lassen.\r\n\r\nHabe bei mir ein 2 Raten abo gebucht. Überprüfen ob rechnung generiert wird beim nächsten zyklus.\r\n\r\nProbelektionen Sonntag 27.10:\r\nEveline Weilenmann\r\nCatalina Netland\r\nAnna Netland\r\n\r\nBitte stundenplan ändern karin am Mittwoch\r\n\r\nHallo!!! Kasse vom 26.02.2014 stimmt nöd.-207.- Differenz! Kei Ahnig…han alles überprüeft. Gruess Karin Tucci 26.02.2014\r\n\r\nes registriert die pics nicht..fragt immer wieder nach neuem pic wenn sie sich einbatchen.rc 21.4\r\n\r\ninstructor vida racerback schwarz\r\n\r\n14.10: sticks bestellt: bestellt am 21.10.14\r\n\r\n02.10: sticks bestellen.\r\n\r\njubiläum umsatz bar 1''470\r\n\r\nabo verlängern. undelivered email 2017-08-30 11:21:25 ', 0, '', '', '2018-01-06 17:09:00', 0, 0, 1, NULL, NULL, 1, 0, 0, NULL, 0, 0, 0, NULL),
(3545, 'm', 'Stefan', 'Testi', '$2y$10$.Lh84iWmNIbcITCpYqTWVuBdnRwEGbXn.U4XsTY28B1U8N1E4PcPW', 'eb905e5315c5b1e8b84685fe221fbc01ba071281', 1520070570, 'english', 1, '0765624575', '', 'danzareacademy@gmail.com', 'Tösstalstr. 160', 'Winterthur', 8404, '1982-01-12 00:00:00', 9, NULL, 'Kontakt per MAIL, Handy verloren', 0, '2012-05-09 14:54:32', NULL, 346, NULL, NULL, NULL, NULL, 47, 0, '0000-00-00 00:00:00', NULL, NULL, NULL, '457DE32FF5181900', '0000-00-00 00:00:00', '', 'Kommt am Dienstag 20.30 mit Celine De Buman\r\n....\r\nGibt bescheid bis Donnerstag\r\n\r\nüberprüfen wo die zahlung hin ist… Nr. 531, 760\r\n\r\nrechnung stornieren…\r\n\r\njahresabo unlimitiert rechnung in 2 raten schicken nach 4 moante 2 rate\r\n\r\nkizomba rechnig storniere\r\n\r\nMaria Bieri für schow!!\r\n\r\n0786699521 tami\r\n\r\nKM So: ab 24.09. mit Tanja M.\r\n\r\nKM DI - 19.09. mit Kintana\r\nIhre Nr. ihm gegeben 18.09.\r\nok\r\n\r\nInformieren er wäre fix mit Tanja M. am SO :)\r\n\r\nMartina Bürli zugesagt für FR- BM. Telefonnr. Gegeben. 29.09.2017 KT\r\nBM Fr (Özlem? - Martina Bürli)\r\n\r\nBM Di (Elena)\r\n\r\nBachata Fr mit Adelina? (falls Martina nicht mehr) (06.11.17)\r\n\r\n\r\nersatz 23.11.2017 für swetlana \r\n-->nein.\r\n\r\nKM So\r\n05.11. mit Daniela K. Kizomba - nein\r\nAlessandra So 03.12.17 probe', 0, '', '', '2018-03-01 22:15:21', 0, 0, 1, NULL, NULL, 1, 0, 0, NULL, 1, 0, 0, NULL),
(9503, 'w', 'Teset', 'Testlastname', '$2y$10$Xm9sOmIyU2Djl7h1ORl05..p9wIsEb3EjZ/uvxtdyQZzmjL8hGoRi', 'ebc7670e34d771eb1d2e8e1a10dfbf9193c08671', 1516068207, 'german', 0, '0763833262', '', 'pascal@danzare.ch', 'Bahnhofstr. 1', 'Zürich', 8000, '1988-02-07 00:00:00', 4, NULL, 'test', 0, '2016-01-19 14:01:13', NULL, 258, NULL, 'Debi Thoma', NULL, NULL, 3, 1, '2016-01-25 00:00:00', NULL, NULL, NULL, '418497AE94081900', '0000-00-00 00:00:00', '', 'bitte rechnung 8972 stornieren. Vor ort bezahlt. 21.12.2016 KT\r\n\r\nAbo sollte um 3 Wochen verlängert werden wegen Krankheit. Es wurde schriftlich mitgeteilt. Joisy\r\n\r\nrechnung vor ort begliechen. Gruss karin 17.07.2017', 0, '', '', '2018-02-09 01:01:55', 0, 0, 1, '', NULL, 1, 0, 0, NULL, 0, 0, 0, NULL),
(12416, 'm', 'pascal', 'test', '$2y$10$QVmFmZFS9C4VhfCgz/Z9DOzsfbCav18d2l1m1LJkF4PLkNCMciOg6', '', 0, 'german', 0, '0765624575', NULL, 'notices@danzare.ch', 'Teststr. 16', 'Testort', 80000, '0000-00-00 00:00:00', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '', '', '2017-12-30 01:09:30', 0, 0, 1, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 0, NULL),
(12417, 'm', 'test', 'test', '$2y$10$/95yGun9CsQU1GuYf/wCO.lq3z4Um8x/krnIL7GYA6ZUePVr7lnuC', '69e1ac83d80e7290e562be960a47796e290f3d38', 1521072174, 'german', 0, '0765624575', NULL, 'info@danzare.ch', 'teststr 16', 'testort', 34320, '0000-00-00 00:00:00', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '', '', '2018-02-13 00:02:54', 0, 0, 1, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 0, NULL),
(12418, 'm', 'Robert', 'Grigore', '$2y$10$LBFwgleprTukJKfQvZpQB.3C/UuVJK3r3UEgUeVMt4k/UyDbv2W1K', 'bc28c9abc9d1018ca60ef25f543db8fc018b59e2', 1516126131, 'italian', 0, '01513546345345', NULL, 'didoamylee@yahoo.com', 'Koernerstr. 14', 'Cologne', 50975, '0000-00-00 00:00:00', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '', '', '2018-01-22 14:47:49', 0, 0, 1, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 0, NULL),
(12419, 'm', 'Angelo', 'Test', '$2y$10$lXT5ZhcBO11ZxmxVEbvVxelZm55i0eX5/21P7rxZN.EdadPK.29c2', '', 0, 'german', 0, '076600000', NULL, 'angelo.vaccaro@bluewin.ch', 'teststr.', 'test ort', 8000, '0000-00-00 00:00:00', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '', '', '2017-12-31 16:41:31', 0, 0, 1, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 0, NULL),
(12420, 'w', 'Sabrina', 'Braendle', '$2y$10$iq/JNkY7BPRi3o7Q1NJBf.Xi1smCE2Yc6A0CWk0L99wAXzwvwEo3W', '04a2e4e4e957b33683067e7c7ead28e273817811', 1515711860, 'german', 0, '0786545656', NULL, 'sabrina.braendle@outlook.com', 'Rudolfstrasse 2', 'Zürich', 8008, '2015-01-08 00:00:00', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '', '', '2018-01-11 22:05:45', 0, 0, 1, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 0, NULL),
(12421, 'm', 'Vögel', 'Täve', '$2y$10$Y1/hYelIRmEK/KPRSwGgG.jho9zI4P9R4rLzKV5AlOaVP2SbQK4OG', '3e82ad7719861a13ad6a7582f2167092bfe0c7cd', 1520095384, 'german', 0, '0153643234', NULL, 'ro.online33@gmail.com', 'Test-tester-str. 18', 'Köln', 55105, '1992-05-07 00:00:00', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '', '', '2018-02-01 16:43:38', 0, 0, 1, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 0, NULL),
(12422, 'm', 'Rob', 'Grig', '$2y$10$v3b.o3e4u6bemjK6zJsHyO6jp9WJhG1G3wRSMFGBYL3CI8yAPoKIC', '', 0, 'german', 0, '01543453445', NULL, 'g.robert9@gmailtest1.com', 'Pikastr. 18', 'Troisdorf', 54323, '1988-05-13 00:00:00', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '', '', '2018-02-12 15:41:07', 0, 0, 1, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 0, NULL),
(12424, 'm', 'Rob', 'Test', '$2y$10$zwsQEzz9fUilMYgp/Wrbi.0/p94MioYVKbG9lY42nI1LxSbn5P3P2', '', 0, 'italian', 1, '0123343434', NULL, 'ro.online33@googlemail.com', 'erasd asasd 22', 'Koln', 55555, '1988-01-26 00:00:00', 1, NULL, 'Bike is broken.', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '', '', '2018-02-02 19:24:17', 0, 0, 1, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 0, NULL),
(12425, 'w', 'Karin', 'Tucci', '$2y$10$ZxghbccQNL5/OzQ6Tz2evuUzr97AdQ5YvBoZNc4g/VhTdYLxLBshe', '62166a8f1279017274e303a6f5b5ee11b1f9274c', 1520761167, 'italian', 1, '078 681 73 08', NULL, 'karin@danzare.ch', 'Bachtelweg 1', 'Volketswil', 8604, '1979-11-09 00:00:00', 6, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-09 10:25:00', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '', '', '2018-02-09 09:40:44', 0, 0, 1, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 0, NULL),
(12426, 'w', 'Fabienne', 'Zorn', '$2y$10$T24RG6UuN0YkKR5Q7TMkU.5ccnlfR3Z63IFVMdORQ0N.Z7APvAsCq', '', 0, 'german', 0, '0760000000', NULL, 'fabienne.zorn@hotmail.de', 'Dudelidtr.', 'Winti', 8000, '1994-07-01 00:00:00', 4, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-09 22:03:20', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '', '', '2018-02-09 21:03:20', 0, 0, 1, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 0, NULL),
(12428, 'm', 'firsh', 'last', '$2y$10$Wdeo1/Y0Zgi5cQFPSyBMveENa5kzvjVZIa.7Ks9XCTtYYFmivxTCe', '', 0, 'italian', 1, 'mobile number', 'telefon', 'zeeshan4971@gmail.coms', 'straassse', 'Ort', 23232, '2018-03-15 00:00:00', 3, 1, 'beme', 0, '2018-03-30 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-28 19:37:00', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '', '', '2018-03-02 12:27:20', 0, 0, 1, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `coursetype` int(11) NOT NULL,
  `courseid` int(11) NOT NULL DEFAULT '0',
  `lessonname` varchar(255) DEFAULT NULL,
  `courseday` int(11) NOT NULL,
  `starttime` int(11) NOT NULL,
  `endtime` int(11) NOT NULL,
  `validfrom` datetime NOT NULL,
  `validuntil` datetime NOT NULL,
  `terminals` varchar(255) NOT NULL,
  `abocategory` int(11) NOT NULL DEFAULT '1',
  `Instructor` varchar(255) DEFAULT NULL,
  `num_places` int(8) NOT NULL DEFAULT '0',
  `renewal` tinyint(2) NOT NULL DEFAULT '0',
  `aktiv` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id`, `coursetype`, `courseid`, `lessonname`, `courseday`, `starttime`, `endtime`, `validfrom`, `validuntil`, `terminals`, `abocategory`, `Instructor`, `num_places`, `renewal`, `aktiv`) VALUES
(1, 1, 0, NULL, 2, 1730, 1900, '2011-12-16 22:26:39', '2021-12-16 22:26:39', '1,2', 1, 'Karin', 0, 0, 1),
(2, 1, 0, NULL, 2, 1910, 2130, '2011-12-16 22:26:39', '2021-12-16 22:26:39', '1,2', 1, 'Milena', 0, 0, 1),
(3, 1, 0, NULL, 3, 1730, 1900, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '1,2', 1, 'Pascal', 0, 0, 1),
(4, 1, 0, NULL, 3, 1900, 2130, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '1,2', 1, 'Karin', 0, 0, 1),
(5, 1, 0, NULL, 4, 1730, 1900, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '1,2', 1, 'Pascal', 0, 0, 1),
(6, 1, 0, NULL, 4, 1900, 2130, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '1,2', 1, 'Karin', 0, 0, 1),
(7, 1, 0, NULL, 4, 2015, 2115, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '1,2', 1, 'Joisy', 0, 0, 1),
(8, 1, 0, NULL, 5, 1730, 1900, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '1,2', 1, 'Pascal', 0, 0, 1),
(9, 1, 0, NULL, 5, 1910, 2010, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '1,2', 1, 'Joisy', 0, 0, 1),
(10, 1, 0, NULL, 6, 1730, 1900, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '1,2', 1, 'Pascal', 0, 0, 1),
(11, 1, 0, NULL, 6, 1900, 2130, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '1,2', 1, 'Joisy', 0, 0, 1),
(12, 1, 0, NULL, 7, 1000, 2330, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '1,2', 1, 'Karin', 0, 0, 1),
(13, 1, 0, NULL, 3, 2015, 2200, '2011-12-16 22:33:29', '2011-12-16 22:33:29', '1,2', 1, 'Karin', 0, 0, 0),
(73, 2, 0, NULL, 2, 2030, 2230, '2012-05-06 17:16:36', '2022-05-06 17:16:36', '5', 1, NULL, 0, 0, 1),
(27, 1, 0, NULL, 5, 1930, 2030, '2011-12-16 22:33:29', '2011-12-16 22:33:29', '4', 2, 'Pascal', 0, 0, 0),
(16, 1, 0, NULL, 7, 1000, 1300, '2011-12-16 22:26:39', '2021-12-16 22:26:39', '4', 2, 'Pascal', 0, 0, 1),
(45, 1, 0, NULL, 1, 1000, 1300, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '1,2', 1, 'Monica', 0, 0, 1),
(26, 1, 0, NULL, 4, 1800, 1930, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '4', 2, 'Rebekka', 0, 0, 1),
(19, 1, 0, NULL, 4, 930, 1300, '2012-05-02 08:50:25', '2021-05-05 08:50:27', '1,2', 1, 'Monica', 0, 0, 1),
(20, 1, 0, NULL, 4, 1800, 2030, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '3', 1, NULL, 0, 0, 1),
(21, 1, 0, NULL, 1, 1600, 2100, '2011-12-16 22:26:39', '2021-12-16 22:26:39', '1,2', 1, NULL, 0, 0, 1),
(22, 1, 0, NULL, 3, 1910, 2010, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '3', 1, NULL, 0, 0, 1),
(23, 1, 0, NULL, 2, 1830, 2030, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '3', 1, NULL, 0, 0, 1),
(25, 1, 0, NULL, 3, 1900, 2030, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '4', 2, 'Milena', 0, 0, 1),
(28, 2, 0, NULL, 2, 1830, 1930, '2012-05-06 17:16:36', '2022-05-06 17:16:36', '5', 1, NULL, 0, 0, 1),
(29, 2, 0, NULL, 3, 1930, 2030, '2012-05-06 17:16:36', '2022-05-06 17:16:36', '5', 1, NULL, 0, 0, 1),
(30, 2, 0, NULL, 4, 1930, 2230, '2012-05-06 17:16:36', '2022-05-06 17:16:36', '3', 1, NULL, 0, 0, 1),
(31, 2, 0, NULL, 3, 2030, 2400, '2012-05-07 23:04:22', '2022-05-07 23:04:22', '4', 1, NULL, 0, 0, 1),
(68, 1, 0, NULL, 3, 1825, 1925, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '4', 2, 'Tatjana', 0, 0, 1),
(33, 2, 0, NULL, 5, 2030, 2230, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '4', 1, NULL, 0, 0, 1),
(34, 1, 0, NULL, 6, 930, 1300, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '1,2', 1, 'Monica', 0, 0, 1),
(35, 1, 0, NULL, 2, 2010, 2200, '2011-12-16 22:26:39', '2021-12-16 22:26:39', '1,2', 1, 'Valeria', 0, 0, 1),
(75, 2, 0, NULL, 6, 1930, 2030, '2015-09-01 17:16:36', '2022-05-06 17:16:36', '4', 1, NULL, 0, 0, 1),
(74, 2, 0, NULL, 3, 1830, 1930, '2012-05-06 17:16:36', '2022-05-06 17:16:36', '5', 1, NULL, 0, 0, 1),
(38, 2, 0, NULL, 2, 2030, 2230, '2012-05-06 17:16:36', '2022-05-06 17:16:36', '4', 1, NULL, 0, 0, 1),
(40, 3, 0, NULL, 4, 1600, 1800, '2012-09-05 13:08:49', '2022-09-05 13:08:49', '1,2', 1, NULL, 0, 0, 1),
(41, 1, 0, NULL, 5, 1700, 1710, '2011-12-16 22:33:29', '2016-12-01 22:33:29', '1,2', 1, 'Monica', 0, 0, 0),
(42, 2, 0, NULL, 3, 2030, 2230, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '3', 1, NULL, 0, 0, 1),
(43, 2, 0, NULL, 6, 2030, 2230, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '4', 1, NULL, 0, 0, 1),
(205, 1, 0, NULL, 5, 34, 2359, '2018-02-14 00:00:00', '2040-10-12 00:00:00', '80', 1, 'test', 0, 0, 1),
(46, 1, 0, NULL, 2, 930, 1300, '2012-05-02 08:50:25', '2021-05-05 08:50:27', '1,2', 1, 'Monica', 0, 0, 1),
(47, 3, 0, NULL, 3, 1600, 1800, '2012-09-05 13:08:49', '2022-09-05 13:08:49', '1,2', 1, NULL, 0, 0, 1),
(48, 1, 0, NULL, 2, 1930, 2130, '2012-05-06 17:16:36', '2022-01-03 17:16:36', '4', 2, 'Cristina', 0, 0, 1),
(49, 2, 0, NULL, 4, 2030, 2400, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '4', 1, NULL, 0, 0, 1),
(50, 1, 0, NULL, 2, 1830, 1930, '2012-05-06 17:16:36', '2022-05-06 17:16:36', '4', 2, 'Monica', 0, 0, 1),
(51, 2, 0, NULL, 4, 1930, 2030, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '4', 1, NULL, 0, 0, 1),
(52, 1, 0, NULL, 3, 1830, 2030, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '3', 1, NULL, 0, 0, 1),
(53, 1, 0, NULL, 5, 2000, 2100, '2011-12-16 22:33:29', '2011-12-16 22:33:29', '4', 2, 'Pascal', 0, 0, 0),
(54, 2, 0, NULL, 2, 2030, 2230, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '3', 1, NULL, 0, 0, 1),
(55, 2, 0, NULL, 5, 1900, 2100, '2011-05-06 17:16:36', '2011-05-06 17:16:36', '3', 1, NULL, 0, 0, 0),
(56, 1, 0, NULL, 5, 1000, 1230, '2012-05-02 08:50:25', '2021-05-05 08:50:27', '1,2', 1, NULL, 0, 0, 0),
(57, 1, 0, NULL, 1, 1000, 1300, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '3', 1, NULL, 0, 0, 1),
(58, 2, 0, NULL, 6, 1830, 1930, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '4', 1, '', 0, 0, 1),
(59, 1, 0, NULL, 2, 1000, 1300, '2011-12-16 22:26:39', '2021-12-16 22:26:39', '4', 2, NULL, 0, 0, 1),
(60, 2, 0, NULL, 1, 1900, 2000, '2012-05-06 17:16:36', '2022-05-06 17:16:36', '4', 1, NULL, 0, 0, 1),
(62, 1, 0, NULL, 3, 2015, 2200, '2011-12-16 22:33:29', '2010-12-16 22:33:29', '1,2', 1, 'Joachim', 0, 0, 0),
(63, 1, 0, NULL, 5, 1000, 1300, '2011-12-16 22:26:39', '2011-12-16 22:26:39', '4', 2, NULL, 0, 0, 0),
(64, 2, 0, NULL, 6, 1930, 2030, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '4', 1, NULL, 0, 0, 1),
(66, 2, 0, NULL, 3, 2030, 2230, '2012-05-06 17:16:36', '2022-05-06 17:16:36', '5', 1, NULL, 0, 0, 1),
(67, 1, 0, NULL, 5, 2015, 2230, '2011-12-16 22:33:29', '2010-12-16 22:33:29', '1,2', 1, 'Joachim', 0, 0, 0),
(69, 1, 0, NULL, 1, 800, 1330, '2011-12-16 22:26:39', '2021-12-16 22:26:39', '4', 2, 'Milena', 0, 0, 1),
(70, 2, 0, NULL, 1, 2000, 2200, '2015-09-01 17:16:36', '2022-05-06 17:16:36', '4', 1, NULL, 0, 0, 1),
(71, 2, 0, NULL, 6, 1830, 1930, '2012-05-06 17:16:36', '2022-05-06 17:16:36', '5', 1, NULL, 0, 0, 1),
(72, 2, 0, NULL, 2, 1930, 2030, '2012-05-06 17:16:36', '2022-05-06 17:16:36', '5', 1, NULL, 0, 0, 1),
(76, 3, 0, NULL, 4, 1500, 1800, '2012-09-05 13:08:49', '2022-09-05 13:08:49', '4', 2, NULL, 0, 0, 1),
(61, 2, 0, NULL, 5, 1830, 1930, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '5', 1, NULL, 0, 0, 1),
(78, 1, 0, NULL, 5, 1830, 1930, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '4', 2, 'Rebekka', 0, 0, 1),
(79, 2, 0, NULL, 5, 1930, 2030, '2011-12-16 22:33:29', '2030-12-16 22:33:29', '5', 1, 'Sabrina', 0, 0, 1),
(80, 1, 4, NULL, 2, 1810, 1910, '2018-02-09 00:00:00', '2050-10-03 00:00:00', '6', 1, 'Claudio', 0, 0, 1),
(81, 1, 0, NULL, 3, 1810, 1910, '2018-02-04 00:00:00', '2050-10-03 00:00:00', '6', 1, 'Vincenzo', 0, 0, 1),
(82, 1, 0, NULL, 2, 1930, 2030, '2018-02-08 00:00:00', '2050-10-03 00:00:00', '6', 1, 'Claudio', 0, 0, 1),
(83, 1, 0, NULL, 4, 1810, 1910, '2018-02-03 00:00:00', '2050-10-03 00:00:00', '6', 1, 'Claudio', 0, 0, 1),
(84, 1, 0, NULL, 4, 1930, 2030, '2018-02-05 00:00:00', '2050-10-03 00:00:00', '6', 1, 'Claudio', 0, 0, 1),
(85, 1, 0, NULL, 5, 1810, 1910, '2018-02-07 00:00:00', '2050-10-03 00:00:00', '6', 1, 'Vincenzo', 0, 0, 1),
(86, 1, 0, NULL, 5, 1930, 2030, '2018-02-06 00:00:00', '2050-10-03 00:00:00', '6', 1, 'Claudio', 0, 0, 1),
(200, 1, 0, NULL, 1, 34, 2359, '2018-02-16 00:00:00', '2040-10-12 00:00:00', '80', 1, 'test', 0, 0, 1),
(88, 2, 0, NULL, 4, 1930, 2030, '2012-05-06 17:16:36', '2022-05-06 17:16:36', '5', 1, NULL, 0, 0, 1),
(89, 2, 0, NULL, 4, 1830, 1930, '2012-05-06 17:16:36', '2022-05-06 17:16:36', '5', 1, NULL, 0, 0, 1),
(90, 2, 0, NULL, 4, 2030, 2230, '2012-05-06 17:16:36', '2022-05-06 17:16:36', '5', 1, NULL, 0, 0, 1),
(91, 2, 0, NULL, 5, 2040, 2300, '2011-12-16 22:33:29', '2021-12-16 22:33:29', '5', 1, NULL, 0, 0, 1),
(201, 2, 0, NULL, 1, 1900, 2000, '2012-05-06 17:16:36', '2022-05-06 17:16:36', '5', 1, NULL, 0, 0, 1),
(202, 2, 3, NULL, 2, 34, 2359, '2018-02-10 00:00:00', '2040-10-12 00:00:00', '80', 1, 'test', 0, 0, 1),
(203, 2, 3, NULL, 3, 34, 2359, '2018-02-15 00:00:00', '2040-10-12 00:00:00', '80', 1, 'test', 0, 0, 1),
(204, 1, 0, NULL, 4, 34, 2359, '2018-02-12 00:00:00', '2040-10-12 00:00:00', '80', 1, 'test', 0, 0, 1),
(206, 1, 0, NULL, 6, 34, 2359, '2018-02-13 00:00:00', '2040-10-12 00:00:00', '80', 1, 'test', 0, 0, 1),
(207, 1, 5, NULL, 7, 1835, 2359, '2018-02-11 00:00:00', '2040-10-12 00:00:00', '80', 1, 'test', 7, 0, 1),
(208, 1, 0, NULL, 1, 0, 0, '2018-02-28 00:00:00', '2018-02-28 00:00:00', 'asd', 1, 'dsadsd', 11, 1, 1),
(209, 1, 0, NULL, 1, 230, 1730, '2018-03-01 00:00:00', '2018-03-02 00:00:00', 'test', 1, '232', 12, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessongroup`
--

CREATE TABLE `lessongroup` (
  `Kursgruppeid` int(11) NOT NULL,
  `Beschreibung` varchar(50) DEFAULT NULL,
  `Bemerkung` varchar(50) DEFAULT NULL,
  `inaktiv` int(11) DEFAULT NULL,
  `zeit` int(11) DEFAULT NULL,
  `tag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lessonperson`
--

CREATE TABLE `lessonperson` (
  `id` int(20) NOT NULL,
  `cardnumber` varchar(30) NOT NULL,
  `kursteilnehmerid` int(11) NOT NULL,
  `terminal` int(11) NOT NULL DEFAULT '0',
  `coursetype` int(11) NOT NULL DEFAULT '0',
  `lessonid` int(11) NOT NULL DEFAULT '0',
  `teilnahmeid` int(11) NOT NULL,
  `valid` int(11) NOT NULL,
  `revalidate` int(11) NOT NULL DEFAULT '0',
  `planned` date DEFAULT NULL,
  `checkin` date DEFAULT NULL,
  `checkintype` int(11) DEFAULT NULL,
  `erfasstam` datetime NOT NULL,
  `revalidated` datetime DEFAULT NULL,
  `checked` int(11) DEFAULT '0',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `invoiceid` int(11) DEFAULT '0',
  `renewed` int(11) NOT NULL DEFAULT '1',
  `waiting` tinyint(2) NOT NULL DEFAULT '0',
  `waiting_since` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lessonperson`
--

INSERT INTO `lessonperson` (`id`, `cardnumber`, `kursteilnehmerid`, `terminal`, `coursetype`, `lessonid`, `teilnahmeid`, `valid`, `revalidate`, `planned`, `checkin`, `checkintype`, `erfasstam`, `revalidated`, `checked`, `updated`, `invoiceid`, `renewed`, `waiting`, `waiting_since`) VALUES
(542, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-16 14:50:59', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(543, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-16 14:51:12', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(544, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-16 14:51:26', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(545, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-16 14:52:04', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(546, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-16 14:52:16', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(547, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-16 14:52:35', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(549, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-16 14:52:46', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(550, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-16 15:09:20', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(551, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-16 15:09:50', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(554, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-17 11:17:05', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(555, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-17 11:18:34', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(556, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-17 12:49:33', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(557, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-17 12:49:47', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(558, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-17 12:50:50', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(559, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-17 12:52:48', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(560, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-17 12:53:01', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(561, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-17 12:58:52', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(562, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-17 12:59:35', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(563, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-17 12:59:41', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(564, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-17 13:08:21', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(565, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-17 13:08:28', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(566, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-17 13:08:32', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(567, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-17 13:19:01', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(568, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-17 13:35:45', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(569, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-17 13:36:51', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(570, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-17 14:01:14', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(571, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-17 14:33:55', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(572, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-17 15:29:03', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(600, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-17 18:23:04', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(601, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-17 18:37:11', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(602, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-17 18:37:48', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(603, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-17 18:37:59', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(604, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-17 18:41:12', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(634, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-18 16:36:59', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(635, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-18 16:46:55', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(690, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 10:51:24', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(703, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 11:24:21', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(704, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 11:24:54', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(705, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 11:28:26', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(706, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 11:29:53', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(707, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 11:32:52', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(708, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 11:38:04', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(709, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 11:39:35', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(710, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 11:48:11', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(711, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 11:49:11', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(712, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 11:52:03', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(713, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 11:58:08', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(714, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 11:58:14', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(715, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 11:58:19', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(716, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 12:01:47', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(719, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 12:04:30', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(720, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 12:04:34', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(721, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 12:04:37', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(724, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-19 12:59:00', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(725, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-19 12:59:42', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(726, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-19 13:01:59', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(727, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-19 13:04:41', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(728, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', 0, '2011-11-19 13:45:27', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(729, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-19 13:46:59', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(730, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-19 13:51:42', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(731, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-19 13:58:30', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(732, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-19 13:59:10', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(733, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-19 14:02:08', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(734, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-19 14:02:30', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(735, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-19 14:02:41', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(736, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-19 23:19:54', '0000-00-00 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(741, '4B21EEA462884900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-11-21 11:40:25', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(1335, '', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2011-12-01 17:29:19', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(2571, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-03 17:46:15', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(2649, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-04 17:49:38', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(2751, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-05 17:48:17', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(2783, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-05 19:42:58', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(2828, '4B48CEA462880900', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-06 20:40:39', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(3027, '', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-11 12:31:09', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(3028, '', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-11 12:31:28', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(3029, '', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-11 12:31:42', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(3030, '', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-11 12:32:57', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(3031, '', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-11 12:33:05', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(3032, '', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-11 12:34:11', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(3033, '', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-11 12:35:28', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(3034, '', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-11 12:36:31', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(3035, '', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-11 12:36:35', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(3036, '', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-11 12:36:39', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(3037, '', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-11 12:36:44', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(3038, '', 1, 1, 0, 0, 0, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-01-11 12:36:57', '2012-01-17 00:00:00', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(4194, '4B48CEA462880900', 1, 2, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-01-25 10:43:47', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(4195, '4B48CEA462880900', 1, 2, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-01-25 13:54:51', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(4339, '4B48CEA462880900', 1, 2, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-01-27 16:50:40', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(4444, '4B48CEA462880900', 1, 2, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-01-28 16:59:45', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(9229, '4B48CEA462880900', 1, 4, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-04-12 07:12:44', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(9230, '4B48CEA462880900', 1, 4, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-04-12 07:12:44', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(9231, '4B48CEA462880900', 1, 4, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-04-12 07:12:45', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(9232, '4B48CEA462880900', 1, 4, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-04-12 07:12:45', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(9233, '4B48CEA462880900', 1, 4, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-04-12 07:12:45', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(9234, '4B48CEA462880900', 1, 4, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-04-12 07:12:45', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(9235, '4B48CEA462880900', 1, 4, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-04-12 07:12:46', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(9236, '4B48CEA462880900', 1, 4, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-04-12 07:12:46', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(9237, '4B48CEA462880900', 1, 4, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-04-12 07:12:46', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(9238, '4B48CEA462880900', 1, 4, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-04-12 07:12:46', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(9239, '4B48CEA462880900', 1, 4, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-04-12 07:12:47', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(9240, '4B48CEA462880900', 1, 4, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-04-12 07:12:47', NULL, 1, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(9267, '4B48CEA462880900', 1, 4, 1, 17, 6303, 1, 0, '0000-00-00', '0000-00-00', 0, '2012-04-13 11:51:09', NULL, 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(9266, '4B48CEA462880900', 1, 4, 1, 16, 6303, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-04-13 11:25:24', '2012-04-13 11:27:15', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(9263, '4B48CEA462880900', 1, 4, 1, 15, 3653, 1, 0, '0000-00-00', '0000-00-00', 0, '2012-04-13 09:12:02', NULL, 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(10432, '', 1, 2, 0, 0, 3653, 1, 0, '0000-00-00', '0000-00-00', 0, '2012-04-30 18:11:45', NULL, 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(10433, '', 1, 1, 0, 0, 3653, 1, 0, '0000-00-00', '0000-00-00', 0, '2012-04-30 18:11:49', NULL, 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(10520, '425997ADD2681900', 1, 5, 2, 18, 6540, 1, 0, '0000-00-00', '0000-00-00', 0, '2012-05-02 09:19:25', NULL, 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(10522, '425997ADD2681900', 1, 1, 1, 19, 6604, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-05-02 10:14:46', '2012-05-02 15:49:06', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(10820, '', 1, 2, 0, 0, 6657, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-05-06 15:08:53', '2012-05-06 17:27:07', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(10821, '', 1, 1, 0, 0, 6657, 1, 1, '0000-00-00', '0000-00-00', 0, '2012-05-06 15:09:03', '2012-05-06 17:27:07', 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(10822, '', 1, 2, 0, 0, 6663, 1, 0, '0000-00-00', '0000-00-00', 0, '2012-05-06 18:02:24', NULL, 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(10823, '', 1, 1, 1, 21, 6663, 1, 0, '0000-00-00', '0000-00-00', 0, '2012-05-06 18:01:56', NULL, 0, '2012-07-02 06:29:10', 0, 1, 0, '0000-00-00 00:00:00'),
(15645, '', 1, 5, 0, 0, 7982, 1, 0, '0000-00-00', '0000-00-00', 0, '2012-07-02 16:29:12', NULL, 0, '2012-07-02 14:29:12', 0, 1, 0, '0000-00-00 00:00:00'),
(19452, '4D0997ADD2680900', 1, 1, 1, 34, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-09-07 09:16:29', NULL, 1, '2012-11-29 12:24:27', 0, 1, 0, '0000-00-00 00:00:00'),
(19454, 'null', 1, 1, 1, 34, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-09-07 09:20:41', NULL, 1, '2012-11-29 12:24:27', 0, 1, 0, '0000-00-00 00:00:00'),
(19455, 'null', 1, 1, 1, 34, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-09-07 09:20:49', NULL, 1, '2012-11-29 12:24:28', 0, 1, 0, '0000-00-00 00:00:00'),
(19536, '4D0997ADD2680900', 1, 4, 1, 16, 8790, 1, 0, '0000-00-00', '0000-00-00', 0, '2012-09-08 12:18:46', NULL, 0, '2012-09-08 10:18:46', 0, 1, 0, '0000-00-00 00:00:00'),
(19577, '4D0997ADD2680900', 1, 3, 1, 23, 8790, 1, 0, '0000-00-00', '0000-00-00', 0, '2012-09-10 18:02:54', NULL, 0, '2012-09-10 16:02:54', 0, 1, 0, '0000-00-00 00:00:00'),
(139364, '418497AE94081900', 9503, 1, 1, 5, 30583, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-25 17:35:37', NULL, 0, '2017-10-25 15:35:37', 0, 1, 0, '0000-00-00 00:00:00'),
(20009, '4D0997ADD2680900', 1, 4, 1, 16, 8790, 1, 0, '0000-00-00', '0000-00-00', 0, '2012-09-15 11:01:08', NULL, 0, '2012-09-15 09:01:08', 0, 1, 0, '0000-00-00 00:00:00'),
(20289, '4D0997ADD2680900', 1, 3, 1, 20, 8790, 1, 0, '0000-00-00', '0000-00-00', 0, '2012-09-19 18:27:25', NULL, 0, '2012-09-19 16:27:26', 0, 1, 0, '0000-00-00 00:00:00'),
(20316, '4D0997ADD2680900', 1, 5, 2, 30, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-09-19 19:11:59', NULL, 1, '2012-11-29 12:24:29', 0, 1, 0, '0000-00-00 00:00:00'),
(20374, 'null', 1, 4, 1, 27, 8790, 1, 0, '0000-00-00', '0000-00-00', 0, '2012-09-20 18:16:06', NULL, 0, '2012-09-20 16:14:48', 0, 1, 0, '0000-00-00 00:00:00'),
(139353, '4484232FF5180900', 1, 80, 1, 44, 21467, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-25 15:49:16', NULL, 0, '2017-10-25 13:49:42', 0, 1, 0, '0000-00-00 00:00:00'),
(26401, '4FC997ADD2680900', 1, 1, 1, 8, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-12-13 17:45:49', NULL, 1, '2013-02-07 16:27:57', 0, 1, 0, '0000-00-00 00:00:00'),
(26473, '4FC997ADD2680900', 1, 1, 1, 10, 10750, 1, 0, '0000-00-00', '0000-00-00', 0, '2012-12-14 17:49:30', NULL, 0, '2012-12-14 16:47:49', 0, 1, 0, '0000-00-00 00:00:00'),
(26487, '4FC997ADD2680900', 1, 3, 2, 43, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2012-12-14 20:28:16', NULL, 1, '2013-02-07 16:27:56', 0, 1, 0, '0000-00-00 00:00:00'),
(26514, '4FC997ADD2680900', 1, 1, 1, 12, 10750, 1, 0, '0000-00-00', '0000-00-00', 0, '2012-12-15 11:09:18', NULL, 0, '2012-12-15 10:07:32', 0, 1, 0, '0000-00-00 00:00:00'),
(27119, '4FC997ADD2680900', 1, 1, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2013-01-04 13:30:15', NULL, 1, '2013-02-07 16:27:53', 0, 1, 0, '0000-00-00 00:00:00'),
(27295, '4FC997ADD2680900', 1, 4, 2, 38, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2013-01-07 20:14:06', NULL, 1, '2013-02-07 16:27:52', 0, 1, 0, '0000-00-00 00:00:00'),
(27534, '4FC997ADD2680900', 1, 3, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2013-01-10 14:09:02', NULL, 1, '2013-02-07 16:27:51', 0, 1, 0, '0000-00-00 00:00:00'),
(27621, '4FC997ADD2680900', 1, 4, 2, 33, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2013-01-10 23:06:21', NULL, 1, '2013-02-07 16:27:50', 0, 1, 0, '0000-00-00 00:00:00'),
(27941, '4FC997ADD2680900', 1, 1, 1, 4, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2013-01-15 19:34:44', NULL, 1, '2013-02-07 16:27:48', 0, 1, 0, '0000-00-00 00:00:00'),
(29688, 'null', 1, 4, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2013-02-06 10:11:40', NULL, 1, '2013-02-07 16:27:47', 0, 1, 0, '0000-00-00 00:00:00'),
(38386, '4338BAA322C80900', 1, 1, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2013-05-18 14:35:38', NULL, 0, '2013-05-18 12:35:45', 0, 1, 0, '0000-00-00 00:00:00'),
(41955, '49B9EB2422A80900', 1, 1, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2013-06-30 09:20:07', NULL, 0, '2013-06-30 07:20:16', 0, 1, 0, '0000-00-00 00:00:00'),
(41956, '49B9EB2422A80900', 1, 1, 1, 45, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2013-06-30 09:31:31', NULL, 0, '2013-06-30 07:31:40', 0, 1, 0, '0000-00-00 00:00:00'),
(41983, '49B9EB2422A80900', 1, 1, 1, 46, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2013-07-01 09:06:16', NULL, 0, '2013-07-01 07:06:13', 0, 1, 0, '0000-00-00 00:00:00'),
(42097, '49B9EB2422A80900', 1, 3, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2013-07-02 08:42:53', NULL, 0, '2013-07-02 06:42:54', 0, 1, 0, '0000-00-00 00:00:00'),
(56658, '4A85BA2322C80900', 1, 5, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2014-02-18 16:47:30', NULL, 0, '2014-02-18 15:47:30', 0, 1, 0, '0000-00-00 00:00:00'),
(57730, '4A85BA2322C80900', 1, 5, 2, 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2014-03-03 18:23:23', NULL, 0, '2014-03-03 17:23:23', 0, 1, 0, '0000-00-00 00:00:00'),
(58382, '4A85BA2322C80900', 1, 5, 2, 28, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2014-03-10 18:11:25', NULL, 0, '2014-03-10 17:11:25', 0, 1, 0, '0000-00-00 00:00:00'),
(75088, '4DA225F3481900', 1, 1, 1, 1, 20171, 1, 0, '0000-00-00', '0000-00-00', 0, '2014-12-08 17:32:37', NULL, 0, '2014-12-08 16:30:41', 0, 1, 0, '0000-00-00 00:00:00'),
(75338, '4DA225F3481900', 1, 1, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2014-12-11 16:31:18', NULL, 0, '2014-12-11 15:29:11', 0, 1, 0, '0000-00-00 00:00:00'),
(78749, '4DA225F3481900', 1, 5, 4, 66, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2015-02-17 18:17:14', NULL, 0, '2015-02-17 17:17:14', 0, 1, 0, '0000-00-00 00:00:00'),
(88762, '4DA225F3481900', 1, 1, 1, 12, 21467, 1, 0, '0000-00-00', '0000-00-00', 0, '2015-07-18 13:56:58', NULL, 0, '2015-07-18 11:54:21', 0, 1, 0, '0000-00-00 00:00:00'),
(98836, 'null', 9503, 1, 1, 2, 24889, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-01-25 19:08:20', NULL, 0, '2016-01-25 18:07:50', 0, 1, 0, '0000-00-00 00:00:00'),
(99116, '418497AE94081900', 9503, 1, 1, 9, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-01-28 19:10:30', NULL, 0, '2016-01-28 18:09:48', 0, 1, 0, '0000-00-00 00:00:00'),
(99312, '418497AE94081900', 9503, 1, 1, 2, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-02-01 19:08:32', NULL, 0, '2016-02-01 18:07:36', 0, 1, 0, '0000-00-00 00:00:00'),
(99574, '418497AE94081900', 9503, 1, 1, 9, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-02-04 19:09:50', NULL, 0, '2016-02-04 18:08:42', 0, 1, 0, '0000-00-00 00:00:00'),
(100010, '418497AE94081900', 9503, 1, 1, 6, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-02-10 19:11:49', NULL, 0, '2016-02-10 18:10:19', 0, 1, 0, '0000-00-00 00:00:00'),
(100295, '418497AE94081900', 9503, 1, 1, 2, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-02-15 19:07:04', NULL, 0, '2016-02-15 18:05:15', 0, 1, 0, '0000-00-00 00:00:00'),
(100463, '418497AE94081900', 9503, 1, 1, 6, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-02-17 19:14:54', NULL, 0, '2016-02-17 18:12:57', 0, 1, 0, '0000-00-00 00:00:00'),
(100536, '418497AE94081900', 9503, 1, 1, 9, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-02-18 19:07:42', NULL, 0, '2016-02-18 18:05:42', 0, 1, 0, '0000-00-00 00:00:00'),
(100763, '418497AE94081900', 9503, 1, 1, 2, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-02-22 19:09:24', NULL, 0, '2016-02-22 18:09:13', 0, 1, 0, '0000-00-00 00:00:00'),
(101029, '418497AE94081900', 9503, 1, 1, 9, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-02-25 19:11:13', NULL, 0, '2016-02-25 18:10:52', 0, 1, 0, '0000-00-00 00:00:00'),
(101243, '418497AE94081900', 9503, 1, 1, 2, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-02-29 19:06:25', NULL, 0, '2016-02-29 18:05:49', 0, 1, 0, '0000-00-00 00:00:00'),
(101767, '418497AE94081900', 9503, 1, 1, 2, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-03-07 19:05:56', NULL, 0, '2016-03-07 18:05:52', 0, 1, 0, '0000-00-00 00:00:00'),
(102291, '418497AE94081900', 9503, 1, 1, 2, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-03-14 19:06:05', NULL, 0, '2016-03-14 18:05:59', 0, 1, 0, '0000-00-00 00:00:00'),
(102371, '418497AE94081900', 9503, 1, 1, 4, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-03-15 19:10:38', NULL, 0, '2016-03-15 18:10:29', 0, 1, 0, '0000-00-00 00:00:00'),
(102812, '418497AE94081900', 9503, 1, 1, 2, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-03-21 19:10:01', NULL, 0, '2016-03-21 18:09:30', 0, 1, 0, '0000-00-00 00:00:00'),
(102905, '418497AE94081900', 9503, 1, 1, 4, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-03-22 19:12:55', NULL, 0, '2016-03-22 18:12:20', 0, 1, 0, '0000-00-00 00:00:00'),
(103291, '418497AE94081900', 9503, 1, 1, 4, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-03-29 19:11:37', NULL, 0, '2016-03-29 17:10:35', 0, 1, 0, '0000-00-00 00:00:00'),
(103695, '418497AE94081900', 9503, 1, 1, 2, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-04-04 19:03:26', NULL, 0, '2016-04-04 17:02:02', 0, 1, 0, '0000-00-00 00:00:00'),
(103805, '418497AE94081900', 9503, 1, 1, 4, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-04-05 19:07:46', NULL, 0, '2016-04-05 17:06:18', 0, 1, 0, '0000-00-00 00:00:00'),
(104225, '418497AE94081900', 9503, 1, 1, 1, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-04-11 17:55:35', NULL, 0, '2016-04-11 15:53:44', 0, 1, 0, '0000-00-00 00:00:00'),
(104285, '418497AE94081900', 9503, 1, 1, 2, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2016-04-11 19:11:52', NULL, 0, '2016-04-11 17:10:02', 0, 1, 0, '0000-00-00 00:00:00'),
(104383, '418497AE94081900', 9503, 1, 1, 4, 24891, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-04-12 19:13:39', NULL, 0, '2016-04-12 17:11:44', 0, 1, 0, '0000-00-00 00:00:00'),
(104432, '418497AE94081900', 9503, 1, 1, 13, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2016-04-12 20:21:37', NULL, 0, '2016-04-12 18:19:43', 0, 1, 0, '0000-00-00 00:00:00'),
(104842, '418497AE94081900', 9503, 1, 1, 2, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2016-04-18 19:10:07', NULL, 0, '2016-04-18 17:10:07', 0, 1, 0, '0000-00-00 00:00:00'),
(104940, '418497AE94081900', 9503, 1, 1, 4, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-04-19 19:10:58', NULL, 0, '2016-04-19 17:10:55', 0, 1, 0, '0000-00-00 00:00:00'),
(104999, '418497AE94081900', 9503, 1, 1, 13, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2016-04-19 20:17:44', NULL, 0, '2016-04-19 18:17:41', 0, 1, 0, '0000-00-00 00:00:00'),
(105354, '418497AE94081900', 9503, 1, 1, 1, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-04-25 17:56:39', NULL, 0, '2016-04-25 15:56:19', 0, 1, 0, '0000-00-00 00:00:00'),
(105476, '418497AE94081900', 9503, 1, 1, 4, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-04-26 19:05:53', NULL, 0, '2016-04-26 17:05:30', 0, 1, 0, '0000-00-00 00:00:00'),
(105840, '418497AE94081900', 9503, 1, 1, 1, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-05-02 18:02:09', NULL, 0, '2016-05-02 16:01:24', 0, 1, 0, '0000-00-00 00:00:00'),
(105929, '418497AE94081900', 9503, 1, 1, 3, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-05-03 18:01:46', NULL, 0, '2016-05-03 16:00:57', 0, 1, 0, '0000-00-00 00:00:00'),
(106234, '418497AE94081900', 9503, 1, 1, 4, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-05-10 19:02:46', NULL, 0, '2016-05-10 17:02:42', 0, 1, 0, '0000-00-00 00:00:00'),
(106681, '418497AE94081900', 9503, 1, 1, 4, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-05-17 19:06:19', NULL, 0, '2016-05-17 17:05:50', 0, 1, 0, '0000-00-00 00:00:00'),
(107098, '418497AE94081900', 9503, 1, 1, 1, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-05-23 17:58:44', NULL, 0, '2016-05-23 15:57:52', 0, 1, 0, '0000-00-00 00:00:00'),
(107204, '418497AE94081900', 9503, 1, 1, 4, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-05-24 19:12:45', NULL, 0, '2016-05-24 17:11:49', 0, 1, 0, '0000-00-00 00:00:00'),
(107556, '418497AE94081900', 9503, 1, 1, 1, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-05-30 18:02:03', NULL, 0, '2016-05-30 16:00:45', 0, 1, 0, '0000-00-00 00:00:00'),
(107689, '418497AE94081900', 9503, 1, 1, 4, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-05-31 19:13:38', NULL, 0, '2016-05-31 17:12:16', 0, 1, 0, '0000-00-00 00:00:00'),
(108125, '418497AE94081900', 9503, 1, 1, 1, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-06-06 18:02:50', NULL, 0, '2016-06-06 16:02:35', 0, 1, 0, '0000-00-00 00:00:00'),
(108249, '418497AE94081900', 9503, 1, 1, 4, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-06-07 19:07:16', NULL, 0, '2016-06-07 17:06:58', 0, 1, 0, '0000-00-00 00:00:00'),
(108790, '418497AE94081900', 9503, 1, 1, 4, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-06-14 19:06:28', NULL, 0, '2016-06-14 17:05:43', 0, 1, 0, '0000-00-00 00:00:00'),
(109167, '418497AE94081900', 9503, 1, 1, 1, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-06-20 17:59:07', NULL, 0, '2016-06-20 15:58:01', 0, 1, 0, '0000-00-00 00:00:00'),
(109287, '418497AE94081900', 9503, 1, 1, 4, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-06-21 19:10:25', NULL, 0, '2016-06-21 17:09:15', 0, 1, 0, '0000-00-00 00:00:00'),
(109620, '418497AE94081900', 9503, 1, 1, 1, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-06-27 17:58:23', NULL, 0, '2016-06-27 15:58:15', 0, 1, 0, '0000-00-00 00:00:00'),
(109704, '418497AE94081900', 9503, 1, 1, 4, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-06-28 19:10:01', NULL, 0, '2016-06-28 17:09:49', 0, 1, 0, '0000-00-00 00:00:00'),
(110073, '418497AE94081900', 9503, 1, 1, 1, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-07-04 18:01:13', NULL, 0, '2016-07-04 16:00:59', 0, 1, 0, '0000-00-00 00:00:00'),
(110164, '418497AE94081900', 9503, 1, 1, 4, 25619, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-07-05 19:05:18', NULL, 0, '2016-07-05 17:05:00', 0, 1, 0, '0000-00-00 00:00:00'),
(110669, '418497AE94081900', 9503, 1, 1, 6, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-07-13 19:11:01', NULL, 0, '2016-07-13 17:10:13', 0, 1, 0, '0000-00-00 00:00:00'),
(110855, '418497AE94081900', 9503, 1, 1, 1, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-07-18 17:57:38', NULL, 0, '2016-07-18 15:56:31', 0, 1, 0, '0000-00-00 00:00:00'),
(111083, '418497AE94081900', 9503, 1, 1, 12, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-07-23 10:27:45', NULL, 0, '2016-07-23 08:26:21', 0, 1, 0, '0000-00-00 00:00:00'),
(111181, '418497AE94081900', 9503, 1, 1, 3, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-07-26 17:55:25', NULL, 0, '2016-07-26 15:53:48', 0, 1, 0, '0000-00-00 00:00:00'),
(111377, '418497AE94081900', 9503, 1, 1, 46, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-08-01 11:01:29', NULL, 0, '2016-08-01 08:59:31', 0, 1, 0, '0000-00-00 00:00:00'),
(111396, '418497AE94081900', 9503, 1, 1, 3, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-08-02 17:57:48', NULL, 0, '2016-08-02 15:55:45', 0, 1, 0, '0000-00-00 00:00:00'),
(111841, '418497AE94081900', 9503, 1, 1, 10, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-08-12 18:09:23', NULL, 0, '2016-08-12 16:06:42', 0, 1, 0, '0000-00-00 00:00:00'),
(111897, '418497AE94081900', 9503, 1, 1, 1, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-08-15 17:57:21', NULL, 0, '2016-08-15 15:54:29', 0, 1, 0, '0000-00-00 00:00:00'),
(111987, '418497AE94081900', 9503, 1, 1, 4, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-08-16 19:10:20', NULL, 0, '2016-08-16 17:07:25', 0, 1, 0, '0000-00-00 00:00:00'),
(112288, '418497AE94081900', 9503, 1, 1, 1, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-08-22 18:02:52', NULL, 0, '2016-08-22 15:59:34', 0, 1, 0, '0000-00-00 00:00:00'),
(112394, '418497AE94081900', 9503, 1, 1, 4, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-08-23 19:14:28', NULL, 0, '2016-08-23 17:11:07', 0, 1, 0, '0000-00-00 00:00:00'),
(112794, '418497AE94081900', 9503, 1, 1, 4, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-08-30 19:14:45', NULL, 0, '2016-08-30 17:10:57', 0, 1, 0, '0000-00-00 00:00:00'),
(113059, '418497AE94081900', 9503, 1, 1, 1, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-09-05 17:53:04', NULL, 0, '2016-09-05 15:52:58', 0, 1, 0, '0000-00-00 00:00:00'),
(113164, '418497AE94081900', 9503, 1, 1, 4, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-09-06 19:10:25', NULL, 0, '2016-09-06 17:10:15', 0, 1, 0, '0000-00-00 00:00:00'),
(113474, '418497AE94081900', 9503, 1, 1, 1, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-09-12 17:58:24', NULL, 0, '2016-09-12 15:58:05', 0, 1, 0, '0000-00-00 00:00:00'),
(113597, '418497AE94081900', 9503, 1, 1, 4, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-09-13 19:09:38', NULL, 0, '2016-09-13 17:09:15', 0, 1, 0, '0000-00-00 00:00:00'),
(113934, '418497AE94081900', 9503, 1, 1, 1, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-09-19 17:55:51', NULL, 0, '2016-09-19 15:55:05', 0, 1, 0, '0000-00-00 00:00:00'),
(114046, '418497AE94081900', 9503, 1, 1, 4, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-09-20 19:10:33', NULL, 0, '2016-09-20 17:09:44', 0, 1, 0, '0000-00-00 00:00:00'),
(114331, '418497AE94081900', 9503, 1, 1, 1, 26382, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-09-26 17:56:45', NULL, 0, '2016-09-26 15:55:33', 0, 1, 0, '0000-00-00 00:00:00'),
(115168, '418497AE94081900', 9503, 1, 1, 1, 27018, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-10-10 18:02:50', NULL, 0, '2016-10-10 16:00:46', 0, 1, 0, '0000-00-00 00:00:00'),
(115275, '418497AE94081900', 9503, 1, 1, 4, 27018, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-10-11 19:08:33', NULL, 0, '2016-10-11 17:06:25', 0, 1, 0, '0000-00-00 00:00:00'),
(115531, '418497AE94081900', 9503, 1, 1, 1, 27018, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-10-17 18:02:32', NULL, 0, '2016-10-17 16:00:02', 0, 1, 0, '0000-00-00 00:00:00'),
(115625, '418497AE94081900', 9503, 1, 1, 4, 27018, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-10-18 19:07:38', NULL, 0, '2016-10-18 17:05:04', 0, 1, 0, '0000-00-00 00:00:00'),
(116384, '418497AE94081900', 9503, 1, 1, 1, 27018, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-10-31 17:59:17', NULL, 0, '2016-10-31 16:59:16', 0, 1, 0, '0000-00-00 00:00:00'),
(116985, '418497AE94081900', 9503, 1, 1, 4, 27018, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-11-08 19:07:11', NULL, 0, '2016-11-08 18:06:40', 0, 1, 0, '0000-00-00 00:00:00'),
(117867, '418497AE94081900', 9503, 1, 1, 1, 27018, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-11-21 18:02:32', NULL, 0, '2016-11-21 17:02:20', 0, 1, 0, '0000-00-00 00:00:00'),
(117978, '418497AE94081900', 9503, 1, 1, 4, 27018, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-11-22 19:06:07', NULL, 0, '2016-11-22 18:05:51', 0, 1, 0, '0000-00-00 00:00:00'),
(118271, '418497AE94081900', 9503, 1, 1, 12, 27018, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-11-26 11:01:40', NULL, 0, '2016-11-26 10:01:11', 0, 1, 0, '0000-00-00 00:00:00'),
(118366, '418497AE94081900', 9503, 1, 1, 1, 27018, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-11-28 17:59:05', NULL, 0, '2016-11-28 16:58:27', 0, 1, 0, '0000-00-00 00:00:00'),
(119808, '418497AE94081900', 9503, 1, 1, 6, 27018, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-12-21 19:14:40', NULL, 0, '2016-12-21 18:14:28', 0, 1, 0, '0000-00-00 00:00:00'),
(119902, '418497AE94081900', 9503, 1, 1, 46, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-12-26 10:30:46', NULL, 0, '2016-12-26 09:30:16', 0, 1, 0, '0000-00-00 00:00:00'),
(120046, '418497AE94081900', 9503, 1, 1, 8, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2016-12-29 17:56:43', NULL, 0, '2016-12-29 16:56:31', 0, 1, 0, '0000-00-00 00:00:00'),
(120154, '418497AE94081900', 9503, 1, 1, 4, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-01-03 19:07:56', NULL, 0, '2017-01-03 18:07:24', 0, 1, 0, '0000-00-00 00:00:00'),
(120527, '418497AE94081900', 9503, 1, 1, 4, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-01-10 19:04:46', NULL, 0, '2017-01-10 18:03:48', 0, 1, 0, '0000-00-00 00:00:00'),
(120700, '418497AE94081900', 9503, 1, 1, 8, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-01-12 17:32:12', NULL, 0, '2017-01-12 16:31:08', 0, 1, 0, '0000-00-00 00:00:00'),
(120811, '418497AE94081900', 9503, 1, 1, 12, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-01-14 10:31:48', NULL, 0, '2017-01-14 09:30:36', 0, 1, 0, '0000-00-00 00:00:00'),
(120913, '418497AE94081900', 9503, 1, 1, 1, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-01-16 17:59:26', NULL, 0, '2017-01-16 16:58:05', 0, 1, 0, '0000-00-00 00:00:00'),
(121023, '418497AE94081900', 9503, 1, 1, 4, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-01-17 19:11:47', NULL, 0, '2017-01-17 18:10:22', 0, 1, 0, '0000-00-00 00:00:00'),
(121190, '418497AE94081900', 9503, 1, 1, 8, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-01-19 18:05:57', NULL, 0, '2017-01-19 17:04:25', 0, 1, 0, '0000-00-00 00:00:00'),
(121414, '418497AE94081900', 9503, 1, 1, 1, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-01-23 18:00:33', NULL, 0, '2017-01-23 16:58:47', 0, 1, 0, '0000-00-00 00:00:00'),
(121510, '418497AE94081900', 9503, 1, 1, 4, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-01-24 19:09:41', NULL, 0, '2017-01-24 18:07:51', 0, 1, 0, '0000-00-00 00:00:00'),
(121648, '418497AE94081900', 9503, 1, 1, 8, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-01-26 17:57:06', NULL, 0, '2017-01-26 16:55:09', 0, 1, 0, '0000-00-00 00:00:00'),
(121860, '418497AE94081900', 9503, 1, 1, 1, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-01-30 18:02:21', NULL, 0, '2017-01-30 17:00:08', 0, 1, 0, '0000-00-00 00:00:00'),
(122605, '418497AE94081900', 9503, 1, 1, 8, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-02-09 17:32:10', NULL, 0, '2017-02-09 16:31:40', 0, 1, 0, '0000-00-00 00:00:00'),
(122685, '418497AE94081900', 9503, 1, 1, 10, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-02-10 18:02:30', NULL, 0, '2017-02-10 17:01:56', 0, 1, 0, '0000-00-00 00:00:00'),
(123018, '418497AE94081900', 9503, 1, 1, 8, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-02-16 17:37:54', NULL, 0, '2017-02-16 16:36:58', 0, 1, 0, '0000-00-00 00:00:00'),
(123089, '418497AE94081900', 9503, 1, 1, 10, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-02-17 17:52:23', NULL, 0, '2017-02-17 16:51:24', 0, 1, 0, '0000-00-00 00:00:00'),
(123141, '418497AE94081900', 9503, 1, 1, 12, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-02-18 11:05:45', NULL, 0, '2017-02-18 10:04:42', 0, 1, 0, '0000-00-00 00:00:00'),
(123342, '418497AE94081900', 9503, 1, 1, 4, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-02-21 19:14:35', NULL, 0, '2017-02-21 18:13:20', 0, 1, 0, '0000-00-00 00:00:00'),
(123487, '418497AE94081900', 9503, 1, 1, 8, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-02-23 18:06:32', NULL, 0, '2017-02-23 17:05:10', 0, 1, 0, '0000-00-00 00:00:00'),
(123558, '418497AE94081900', 9503, 1, 1, 10, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-02-24 18:00:55', NULL, 0, '2017-02-24 16:59:29', 0, 1, 0, '0000-00-00 00:00:00'),
(123826, '418497AE94081900', 9503, 1, 1, 4, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-02-28 19:09:48', NULL, 0, '2017-02-28 18:08:07', 0, 1, 0, '0000-00-00 00:00:00'),
(123993, '418497AE94081900', 9503, 1, 1, 8, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-03-02 18:05:25', NULL, 0, '2017-03-02 17:03:37', 0, 1, 0, '0000-00-00 00:00:00'),
(124088, '418497AE94081900', 9503, 1, 1, 10, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-03-03 17:51:45', NULL, 0, '2017-03-03 16:49:53', 0, 1, 0, '0000-00-00 00:00:00'),
(124156, 'null', 9503, 1, 1, 12, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-03-04 11:07:22', NULL, 0, '2017-03-04 10:05:27', 0, 1, 0, '0000-00-00 00:00:00'),
(124467, '418497AE94081900', 9503, 1, 1, 8, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-03-09 17:30:02', NULL, 0, '2017-03-09 16:29:59', 0, 1, 0, '0000-00-00 00:00:00'),
(124572, '418497AE94081900', 9503, 1, 1, 10, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-03-10 17:58:05', NULL, 0, '2017-03-10 16:57:57', 0, 1, 0, '0000-00-00 00:00:00'),
(124877, '418497AE94081900', 9503, 1, 1, 4, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-03-14 19:02:24', NULL, 0, '2017-03-14 18:02:02', 0, 1, 0, '0000-00-00 00:00:00'),
(125041, '418497AE94081900', 9503, 1, 1, 8, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-03-16 17:37:11', NULL, 0, '2017-03-16 16:36:41', 0, 1, 0, '0000-00-00 00:00:00'),
(125134, '418497AE94081900', 9503, 1, 1, 10, 27942, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-03-17 18:01:44', NULL, 0, '2017-03-17 17:01:10', 0, 1, 0, '0000-00-00 00:00:00'),
(125491, '418497AE94081900', 9503, 1, 1, 5, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-03-22 17:36:21', NULL, 0, '2017-03-22 16:35:29', 0, 1, 0, '0000-00-00 00:00:00'),
(125578, '418497AE94081900', 9503, 1, 1, 8, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-03-23 17:32:44', NULL, 0, '2017-03-23 16:31:49', 0, 1, 0, '0000-00-00 00:00:00'),
(125680, '418497AE94081900', 9503, 1, 1, 10, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-03-24 18:08:45', NULL, 0, '2017-03-24 17:07:45', 0, 1, 0, '0000-00-00 00:00:00'),
(126060, '418497AE94081900', 9503, 1, 1, 5, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-03-29 17:40:41', NULL, 0, '2017-03-29 15:39:23', 0, 1, 0, '0000-00-00 00:00:00'),
(126140, '418497AE94081900', 9503, 1, 1, 8, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-03-30 17:41:17', NULL, 0, '2017-03-30 15:39:55', 0, 1, 0, '0000-00-00 00:00:00'),
(126246, '418497AE94081900', 9503, 1, 1, 10, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-03-31 17:55:14', NULL, 0, '2017-03-31 15:53:48', 0, 1, 0, '0000-00-00 00:00:00'),
(126463, '418497AE94081900', 9503, 1, 1, 3, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-04-04 17:55:18', NULL, 0, '2017-04-04 15:55:14', 0, 1, 0, '0000-00-00 00:00:00'),
(126659, '418497AE94081900', 9503, 1, 1, 8, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-04-06 17:45:53', NULL, 0, '2017-04-06 15:45:42', 0, 1, 0, '0000-00-00 00:00:00'),
(126762, '418497AE94081900', 9503, 1, 1, 10, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-04-07 17:52:24', NULL, 0, '2017-04-07 15:52:10', 0, 1, 0, '0000-00-00 00:00:00'),
(127113, '418497AE94081900', 9503, 1, 1, 5, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-04-12 17:40:33', NULL, 0, '2017-04-12 15:39:59', 0, 1, 0, '0000-00-00 00:00:00'),
(127197, '418497AE94081900', 9503, 1, 1, 8, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-04-13 17:41:59', NULL, 0, '2017-04-13 15:41:22', 0, 1, 0, '0000-00-00 00:00:00'),
(127333, '418497AE94081900', 9503, 1, 1, 46, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-04-17 11:20:23', NULL, 0, '2017-04-17 09:19:32', 0, 1, 0, '0000-00-00 00:00:00'),
(127345, '418497AE94081900', 9503, 1, 1, 3, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-04-18 18:02:22', NULL, 0, '2017-04-18 16:01:26', 0, 1, 0, '0000-00-00 00:00:00'),
(127487, '418497AE94081900', 9503, 1, 1, 8, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-04-20 17:33:22', NULL, 0, '2017-04-20 15:32:19', 0, 1, 0, '0000-00-00 00:00:00'),
(127568, '418497AE94081900', 9503, 1, 1, 10, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-04-21 18:00:15', NULL, 0, '2017-04-21 15:59:08', 0, 1, 0, '0000-00-00 00:00:00'),
(127597, '418497AE94081900', 9503, 1, 1, 12, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-04-22 10:30:02', NULL, 0, '2017-04-22 08:28:52', 0, 1, 0, '0000-00-00 00:00:00'),
(127826, '418497AE94081900', 9503, 1, 1, 5, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-04-26 18:09:53', NULL, 0, '2017-04-26 16:08:27', 0, 1, 0, '0000-00-00 00:00:00'),
(127869, '418497AE94081900', 9503, 1, 1, 8, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-04-27 17:39:42', NULL, 0, '2017-04-27 15:38:12', 0, 1, 0, '0000-00-00 00:00:00'),
(127944, '418497AE94081900', 9503, 1, 1, 10, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-04-28 17:59:11', NULL, 0, '2017-04-28 15:57:38', 0, 1, 0, '0000-00-00 00:00:00'),
(128085, '418497AE94081900', 9503, 1, 1, 46, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-05-01 11:11:32', NULL, 0, '2017-05-01 09:09:49', 0, 1, 0, '0000-00-00 00:00:00'),
(128121, '418497AE94081900', 9503, 1, 1, 3, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-05-02 18:00:29', NULL, 0, '2017-05-02 15:58:41', 0, 1, 0, '0000-00-00 00:00:00'),
(128272, '418497AE94081900', 9503, 1, 1, 6, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-05-03 19:15:39', NULL, 0, '2017-05-03 17:13:46', 0, 1, 0, '0000-00-00 00:00:00'),
(128288, '418497AE94081900', 9503, 1, 1, 8, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-05-04 17:34:43', NULL, 0, '2017-05-04 15:32:48', 0, 1, 0, '0000-00-00 00:00:00'),
(128362, '418497AE94081900', 9503, 1, 1, 10, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-05-05 17:59:55', NULL, 0, '2017-05-05 15:57:56', 0, 1, 0, '0000-00-00 00:00:00'),
(129901, '418497AE94081900', 9503, 1, 1, 10, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-05-26 17:58:08', NULL, 0, '2017-05-26 15:57:07', 0, 1, 0, '0000-00-00 00:00:00'),
(130320, '418497AE94081900', 9503, 1, 1, 8, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-06-01 18:08:20', NULL, 0, '2017-06-01 16:06:57', 0, 1, 0, '0000-00-00 00:00:00'),
(130402, '418497AE94081900', 9503, 1, 1, 10, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-06-02 17:58:01', NULL, 0, '2017-06-02 15:56:34', 0, 1, 0, '0000-00-00 00:00:00'),
(130595, '418497AE94081900', 9503, 1, 1, 3, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-06-06 18:05:16', NULL, 0, '2017-06-06 16:03:34', 0, 1, 0, '0000-00-00 00:00:00'),
(130866, '418497AE94081900', 9503, 1, 1, 10, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-06-09 17:58:25', NULL, 0, '2017-06-09 15:56:32', 0, 1, 0, '0000-00-00 00:00:00'),
(131094, '418497AE94081900', 9503, 1, 1, 3, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2017-06-13 17:34:00', NULL, 0, '2017-06-13 15:33:57', 0, 1, 0, '0000-00-00 00:00:00'),
(131270, '418497AE94081900', 9503, 1, 1, 8, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-06-15 17:37:25', NULL, 0, '2017-06-15 15:37:14', 0, 1, 0, '0000-00-00 00:00:00'),
(131351, '418497AE94081900', 9503, 1, 1, 10, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-06-16 17:58:19', NULL, 0, '2017-06-16 15:58:05', 0, 1, 0, '0000-00-00 00:00:00'),
(131436, '418497AE94081900', 9503, 1, 1, 45, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-06-18 10:58:50', NULL, 0, '2017-06-18 08:58:29', 0, 1, 0, '0000-00-00 00:00:00'),
(131537, '418497AE94081900', 9503, 1, 1, 3, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-06-20 18:06:10', NULL, 0, '2017-06-20 16:05:40', 0, 1, 0, '0000-00-00 00:00:00'),
(131755, '418497AE94081900', 9503, 1, 1, 10, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2017-06-23 17:56:52', NULL, 0, '2017-06-23 15:56:11', 0, 1, 0, '0000-00-00 00:00:00');
INSERT INTO `lessonperson` (`id`, `cardnumber`, `kursteilnehmerid`, `terminal`, `coursetype`, `lessonid`, `teilnahmeid`, `valid`, `revalidate`, `planned`, `checkin`, `checkintype`, `erfasstam`, `revalidated`, `checked`, `updated`, `invoiceid`, `renewed`, `waiting`, `waiting_since`) VALUES
(131924, '418497AE94081900', 9503, 1, 1, 3, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-06-27 17:33:22', NULL, 0, '2017-06-27 15:32:27', 0, 1, 0, '0000-00-00 00:00:00'),
(132047, '418497AE94081900', 9503, 1, 1, 5, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-06-28 18:10:48', NULL, 0, '2017-06-28 16:09:48', 0, 1, 0, '0000-00-00 00:00:00'),
(132172, '418497AE94081900', 9503, 1, 1, 10, 28446, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-06-30 17:58:00', NULL, 0, '2017-06-30 15:56:53', 0, 1, 0, '0000-00-00 00:00:00'),
(133126, '418497AE94081900', 9503, 1, 1, 1, 30031, 1, 1, '0000-00-00', '0000-00-00', 0, '2017-07-17 18:02:19', '2017-07-17 18:03:33', 0, '2017-07-17 16:03:21', 0, 1, 0, '0000-00-00 00:00:00'),
(133188, '418497AE94081900', 9503, 1, 1, 3, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-07-18 17:34:41', NULL, 0, '2017-07-18 15:34:25', 0, 1, 0, '0000-00-00 00:00:00'),
(133319, '418497AE94081900', 9503, 1, 1, 8, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-07-20 17:38:07', NULL, 0, '2017-07-20 15:37:44', 0, 1, 0, '0000-00-00 00:00:00'),
(133394, '418497AE94081900', 9503, 1, 1, 10, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-07-21 17:52:41', NULL, 0, '2017-07-21 15:52:15', 0, 1, 0, '0000-00-00 00:00:00'),
(133556, '418497AE94081900', 9503, 1, 1, 3, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-07-25 17:36:42', NULL, 0, '2017-07-25 15:36:01', 0, 1, 0, '0000-00-00 00:00:00'),
(133617, '418497AE94081900', 9503, 1, 1, 5, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-07-26 18:06:05', NULL, 0, '2017-07-26 16:05:19', 0, 1, 0, '0000-00-00 00:00:00'),
(133657, '418497AE94081900', 9503, 1, 1, 8, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-07-27 17:39:29', NULL, 0, '2017-07-27 15:38:41', 0, 1, 0, '0000-00-00 00:00:00'),
(133715, '418497AE94081900', 9503, 1, 1, 10, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-07-28 18:00:02', NULL, 0, '2017-07-28 15:59:09', 0, 1, 0, '0000-00-00 00:00:00'),
(133863, '418497AE94081900', 9503, 1, 1, 8, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-08-03 17:38:43', NULL, 0, '2017-08-03 15:37:28', 0, 1, 0, '0000-00-00 00:00:00'),
(133913, '418497AE94081900', 9503, 1, 1, 10, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-08-04 18:03:42', NULL, 0, '2017-08-04 16:02:24', 0, 1, 0, '0000-00-00 00:00:00'),
(134181, '418497AE94081900', 9503, 1, 1, 8, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-08-10 17:39:21', NULL, 0, '2017-08-10 15:37:41', 0, 1, 0, '0000-00-00 00:00:00'),
(134252, '418497AE94081900', 9503, 1, 1, 10, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-08-11 18:07:58', NULL, 0, '2017-08-11 16:06:14', 0, 1, 0, '0000-00-00 00:00:00'),
(134423, '418497AE94081900', 9503, 1, 1, 3, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-08-15 17:38:31', NULL, 0, '2017-08-15 15:36:33', 0, 1, 0, '0000-00-00 00:00:00'),
(134679, '418497AE94081900', 9503, 1, 1, 10, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-08-18 17:58:17', NULL, 0, '2017-08-18 15:56:07', 0, 1, 0, '0000-00-00 00:00:00'),
(134720, '418497AE94081900', 9503, 1, 1, 12, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-08-19 11:06:06', NULL, 0, '2017-08-19 09:03:54', 0, 1, 0, '0000-00-00 00:00:00'),
(134902, '418497AE94081900', 9503, 1, 1, 3, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-08-22 17:39:27', NULL, 0, '2017-08-22 15:37:03', 0, 1, 0, '0000-00-00 00:00:00'),
(134999, '418497AE94081900', 9503, 1, 1, 5, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-08-23 17:36:49', NULL, 0, '2017-08-23 15:34:21', 0, 1, 0, '0000-00-00 00:00:00'),
(135150, '418497AE94081900', 9503, 1, 1, 10, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-08-25 18:05:54', NULL, 0, '2017-08-25 16:03:19', 0, 1, 0, '0000-00-00 00:00:00'),
(135319, '418497AE94081900', 9503, 1, 1, 3, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-08-29 17:37:19', NULL, 0, '2017-08-29 15:34:29', 0, 1, 0, '0000-00-00 00:00:00'),
(135411, '418497AE94081900', 9503, 1, 1, 5, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-08-30 17:33:48', NULL, 0, '2017-08-30 15:30:55', 0, 1, 0, '0000-00-00 00:00:00'),
(135536, '418497AE94081900', 9503, 1, 1, 10, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-09-01 17:59:24', NULL, 0, '2017-09-01 15:56:23', 0, 1, 0, '0000-00-00 00:00:00'),
(135760, '418497AE94081900', 9503, 1, 1, 3, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-09-05 17:33:09', NULL, 0, '2017-09-05 15:33:05', 0, 1, 0, '0000-00-00 00:00:00'),
(135864, '418497AE94081900', 9503, 1, 1, 5, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-09-06 17:34:48', NULL, 0, '2017-09-06 15:34:40', 0, 1, 0, '0000-00-00 00:00:00'),
(136008, '418497AE94081900', 9503, 1, 1, 10, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-09-08 17:58:44', NULL, 0, '2017-09-08 15:58:29', 0, 1, 0, '0000-00-00 00:00:00'),
(136217, '418497AE94081900', 9503, 1, 1, 3, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-09-12 17:37:19', NULL, 0, '2017-09-12 15:36:54', 0, 1, 0, '0000-00-00 00:00:00'),
(136312, '418497AE94081900', 9503, 1, 1, 5, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-09-13 17:34:09', NULL, 0, '2017-09-13 15:33:39', 0, 1, 0, '0000-00-00 00:00:00'),
(136383, '418497AE94081900', 9503, 1, 1, 8, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-09-14 18:08:06', NULL, 0, '2017-09-14 16:07:34', 0, 1, 0, '0000-00-00 00:00:00'),
(136680, '418497AE94081900', 9503, 1, 1, 3, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-09-19 17:38:43', NULL, 0, '2017-09-19 15:37:56', 0, 1, 0, '0000-00-00 00:00:00'),
(136770, '418497AE94081900', 9503, 1, 1, 5, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-09-20 17:35:25', NULL, 0, '2017-09-20 15:34:35', 0, 1, 0, '0000-00-00 00:00:00'),
(136936, '418497AE94081900', 9503, 1, 1, 10, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-09-22 17:52:50', NULL, 0, '2017-09-22 15:51:54', 0, 1, 0, '0000-00-00 00:00:00'),
(137138, '418497AE94081900', 9503, 1, 1, 3, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-09-26 17:45:39', NULL, 0, '2017-09-26 15:45:31', 0, 1, 0, '0000-00-00 00:00:00'),
(137231, '418497AE94081900', 9503, 1, 1, 5, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-09-27 17:35:02', NULL, 0, '2017-09-27 15:34:51', 0, 1, 0, '0000-00-00 00:00:00'),
(137629, 'null', 1, 6, 1, 81, 27830, 1, 1, '0000-00-00', '0000-00-00', 0, '2017-10-03 11:45:17', '2017-10-03 17:55:15', 0, '2017-10-03 15:55:12', 0, 1, 0, '0000-00-00 00:00:00'),
(137640, '418497AE94081900', 9503, 1, 1, 3, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-03 17:33:02', NULL, 0, '2017-10-03 15:32:28', 0, 1, 0, '0000-00-00 00:00:00'),
(137740, '418497AE94081900', 9503, 1, 1, 5, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-04 17:34:50', NULL, 0, '2017-10-04 15:34:12', 0, 1, 0, '0000-00-00 00:00:00'),
(137799, '418497AE94081900', 9503, 6, 1, 84, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-04 19:21:52', NULL, 0, '2017-10-04 17:21:50', 0, 1, 0, '0000-00-00 00:00:00'),
(137907, '418497AE94081900', 9503, 1, 1, 10, 30031, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-06 17:54:51', NULL, 0, '2017-10-06 15:54:06', 0, 1, 0, '0000-00-00 00:00:00'),
(138124, '418497AE94081900', 9503, 1, 1, 3, 30583, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-10 17:39:21', NULL, 0, '2017-10-10 15:38:21', 0, 1, 0, '0000-00-00 00:00:00'),
(138223, '418497AE94081900', 9503, 1, 1, 5, 30583, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-11 17:38:06', NULL, 0, '2017-10-11 15:37:03', 0, 1, 0, '0000-00-00 00:00:00'),
(138281, '418497AE94081900', 9503, 6, 1, 84, 30583, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-11 19:22:25', NULL, 0, '2017-10-11 17:22:10', 0, 1, 0, '0000-00-00 00:00:00'),
(138415, '418497AE94081900', 9503, 1, 1, 10, 30583, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-13 17:57:14', NULL, 0, '2017-10-13 15:56:03', 0, 1, 0, '0000-00-00 00:00:00'),
(138643, '418497AE94081900', 9503, 1, 1, 3, 30583, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-17 17:36:45', NULL, 0, '2017-10-17 15:35:18', 0, 1, 0, '0000-00-00 00:00:00'),
(138764, '418497AE94081900', 9503, 1, 1, 5, 30583, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-18 17:39:09', NULL, 0, '2017-10-18 15:37:39', 0, 1, 0, '0000-00-00 00:00:00'),
(138821, '418497AE94081900', 9503, 6, 1, 84, 30583, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-18 19:18:41', NULL, 0, '2017-10-18 17:18:33', 0, 1, 0, '0000-00-00 00:00:00'),
(139237, '418497AE94081900', 9503, 1, 1, 3, 30583, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-24 17:32:44', NULL, 0, '2017-10-24 15:32:40', 0, 1, 0, '0000-00-00 00:00:00'),
(139437, '418497AE94081900', 9503, 6, 1, 84, 30583, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-25 19:18:59', NULL, 0, '2017-10-25 17:18:53', 0, 1, 0, '0000-00-00 00:00:00'),
(139558, '4484232FF5180900', 1, 5, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2017-10-27 10:53:47', NULL, 0, '2017-10-27 08:53:47', 0, 1, 0, '0000-00-00 00:00:00'),
(139559, '418497AE94081900', 9503, 1, 1, 10, 30583, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-27 18:05:42', NULL, 0, '2017-10-27 16:05:33', 0, 1, 0, '0000-00-00 00:00:00'),
(139786, '418497AE94081900', 9503, 1, 1, 3, 30583, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-10-31 17:40:34', NULL, 0, '2017-10-31 16:40:29', 0, 1, 0, '0000-00-00 00:00:00'),
(139845, '4484232FF5180900', 1, 80, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '2017-11-01 02:00:09', NULL, 0, '2017-11-01 01:00:14', 0, 1, 0, '0000-00-00 00:00:00'),
(139875, '418497AE94081900', 9503, 1, 1, 5, 30583, 1, 0, '0000-00-00', '0000-00-00', 0, '2017-11-01 17:34:31', NULL, 0, '2017-11-01 16:34:30', 0, 1, 0, '0000-00-00 00:00:00'),
(140338, '418497AE94081900', 9503, 1, 1, 3, 30583, 1, 0, NULL, NULL, NULL, '2017-11-07 17:33:25', NULL, 0, '2017-11-07 16:33:17', 0, 1, 0, '0000-00-00 00:00:00'),
(140453, '418497AE94081900', 9503, 1, 1, 5, 30583, 1, 0, NULL, NULL, NULL, '2017-11-08 17:34:06', NULL, 0, '2017-11-08 16:33:54', 0, 1, 0, '0000-00-00 00:00:00'),
(140515, '418497AE94081900', 9503, 6, 1, 84, 30583, 1, 0, NULL, NULL, NULL, '2017-11-08 19:24:48', NULL, 0, '2017-11-08 18:24:34', 0, 1, 0, '0000-00-00 00:00:00'),
(140538, '418497AE94081900', 9503, 1, 1, 8, 30583, 1, 0, NULL, NULL, NULL, '2017-11-09 17:33:33', NULL, 0, '2017-11-09 16:33:17', 0, 1, 0, '0000-00-00 00:00:00'),
(140557, '45F3F32FF5181900', 1, 5, 2, 61, 16505, 1, 0, NULL, NULL, NULL, '2017-11-09 18:04:35', NULL, 0, '2017-11-09 17:04:35', 0, 1, 0, '0000-00-00 00:00:00'),
(140645, '45F3F32FF5181900', 1, 5, 2, 91, 16505, 1, 0, NULL, NULL, NULL, '2017-11-09 21:54:18', NULL, 0, '2017-11-09 20:54:19', 0, 1, 0, '0000-00-00 00:00:00'),
(140928, '418497AE94081900', 9503, 1, 1, 3, 30583, 1, 0, NULL, NULL, NULL, '2017-11-14 17:33:13', NULL, 0, '2017-11-14 16:33:05', 0, 1, 0, '0000-00-00 00:00:00'),
(141026, '418497AE94081900', 9503, 1, 1, 5, 30583, 1, 0, NULL, NULL, NULL, '2017-11-15 17:32:23', NULL, 0, '2017-11-15 16:32:11', 0, 1, 0, '0000-00-00 00:00:00'),
(141093, '418497AE94081900', 9503, 6, 1, 84, 30583, 1, 0, NULL, NULL, NULL, '2017-11-15 19:24:36', NULL, 0, '2017-11-15 18:24:28', 0, 1, 0, '0000-00-00 00:00:00'),
(141121, '418497AE94081900', 9503, 1, 1, 8, 30583, 1, 0, NULL, NULL, NULL, '2017-11-16 17:32:26', NULL, 0, '2017-11-16 16:32:22', 0, 1, 0, '0000-00-00 00:00:00'),
(141384, '418497AE94081900', 9503, 1, 1, 3, 30583, 1, 0, NULL, NULL, NULL, '2017-11-21 17:35:59', NULL, 0, '2017-11-21 16:35:59', 0, 1, 0, '0000-00-00 00:00:00'),
(141506, '418497AE94081900', 9503, 1, 1, 5, 30583, 1, 0, NULL, NULL, NULL, '2017-11-22 17:39:33', NULL, 0, '2017-11-22 16:39:30', 0, 1, 0, '0000-00-00 00:00:00'),
(141579, '418497AE94081900', 9503, 6, 1, 84, 30583, 1, 0, NULL, NULL, NULL, '2017-11-22 19:25:29', NULL, 0, '2017-11-22 18:25:22', 0, 1, 0, '0000-00-00 00:00:00'),
(141614, '418497AE94081900', 9503, 1, 1, 8, 30583, 1, 0, NULL, NULL, NULL, '2017-11-23 17:29:43', NULL, 0, '2017-11-23 16:29:36', 0, 1, 0, '0000-00-00 00:00:00'),
(142273, '418497AE94081900', 9503, 1, 1, 10, 30583, 1, 0, NULL, NULL, NULL, '2017-12-01 17:48:27', NULL, 0, '2017-12-01 16:48:08', 0, 1, 0, '0000-00-00 00:00:00'),
(141682, '418497AE94081900', 9503, 1, 1, 10, 30583, 1, 0, NULL, NULL, NULL, '2017-11-24 17:55:43', NULL, 0, '2017-11-24 16:55:31', 0, 1, 0, '0000-00-00 00:00:00'),
(141944, '418497AE94081900', 9503, 1, 1, 3, 30583, 1, 0, NULL, NULL, NULL, '2017-11-28 17:34:03', NULL, 0, '2017-11-28 16:33:55', 0, 1, 0, '0000-00-00 00:00:00'),
(142071, '418497AE94081900', 9503, 1, 1, 5, 30583, 1, 0, NULL, NULL, NULL, '2017-11-29 17:32:55', NULL, 0, '2017-11-29 16:32:44', 0, 1, 0, '0000-00-00 00:00:00'),
(142139, '418497AE94081900', 9503, 6, 1, 84, 30583, 1, 0, NULL, NULL, NULL, '2017-11-29 19:24:32', NULL, 0, '2017-11-29 18:24:11', 0, 1, 0, '0000-00-00 00:00:00'),
(142504, '418497AE94081900', 9503, 1, 1, 3, 30583, 1, 0, NULL, NULL, NULL, '2017-12-05 17:33:11', NULL, 0, '2017-12-05 16:33:11', 0, 1, 0, '0000-00-00 00:00:00'),
(142605, '418497AE94081900', 9503, 1, 1, 5, 30583, 1, 0, NULL, NULL, NULL, '2017-12-06 17:33:53', NULL, 0, '2017-12-06 16:33:53', 0, 1, 0, '0000-00-00 00:00:00'),
(142672, '418497AE94081900', 9503, 3, 1, 20, 30583, 1, 0, NULL, NULL, NULL, '2017-12-06 19:13:38', NULL, 0, '2017-12-06 18:13:39', 0, 1, 0, '0000-00-00 00:00:00'),
(142705, '418497AE94081900', 9503, 1, 1, 8, 30583, 1, 0, NULL, NULL, NULL, '2017-12-07 17:31:24', NULL, 0, '2017-12-07 16:31:24', 0, 1, 0, '0000-00-00 00:00:00'),
(142799, '418497AE94081900', 9503, 1, 1, 10, 30583, 1, 0, NULL, NULL, NULL, '2017-12-08 17:57:36', NULL, 0, '2017-12-08 16:57:36', 0, 1, 0, '0000-00-00 00:00:00'),
(143020, '418497AE94081900', 9503, 1, 1, 3, 30583, 1, 0, NULL, NULL, NULL, '2017-12-12 17:32:51', NULL, 0, '2017-12-12 16:32:51', 0, 1, 0, '0000-00-00 00:00:00'),
(143111, '418497AE94081900', 9503, 1, 1, 5, 30583, 1, 0, NULL, NULL, NULL, '2017-12-13 17:38:15', NULL, 0, '2017-12-13 16:38:15', 0, 1, 0, '0000-00-00 00:00:00'),
(143174, '418497AE94081900', 9503, 3, 1, 20, 30583, 1, 0, NULL, NULL, NULL, '2017-12-13 19:23:22', NULL, 0, '2017-12-13 18:23:22', 0, 1, 0, '0000-00-00 00:00:00'),
(143304, '418497AE94081900', 9503, 1, 1, 10, 30583, 1, 0, NULL, NULL, NULL, '2017-12-15 18:00:49', NULL, 0, '2017-12-15 17:00:49', 0, 1, 0, '0000-00-00 00:00:00'),
(143416, '418497AE94081900', 9503, 6, 1, 80, 30583, 1, 0, NULL, NULL, NULL, '2017-12-18 17:56:17', NULL, 0, '2017-12-18 16:56:17', 0, 1, 0, '0000-00-00 00:00:00'),
(143522, '418497AE94081900', 9503, 1, 1, 3, 30583, 1, 0, NULL, NULL, NULL, '2017-12-19 17:36:17', NULL, 0, '2017-12-19 16:36:17', 0, 1, 0, '0000-00-00 00:00:00'),
(143625, '418497AE94081900', 9503, 1, 1, 5, 30583, 1, 0, NULL, NULL, NULL, '2017-12-20 17:33:29', NULL, 0, '2017-12-20 16:33:30', 0, 1, 0, '0000-00-00 00:00:00'),
(143694, '418497AE94081900', 9503, 6, 1, 84, 30583, 1, 0, NULL, NULL, NULL, '2017-12-20 19:20:26', NULL, 0, '2017-12-20 18:20:27', 0, 1, 0, '0000-00-00 00:00:00'),
(143781, '', 3545, 0, 1, 81, 31602, 0, 0, NULL, NULL, NULL, '2018-02-15 21:59:54', NULL, 0, '2018-02-15 20:59:54', 0, 1, 0, '0000-00-00 00:00:00'),
(143772, '', 3545, 0, 2, 203, 31583, 0, 0, NULL, NULL, NULL, '2018-01-27 21:51:53', NULL, 0, '2018-01-27 20:51:53', 0, 1, 0, '0000-00-00 00:00:00'),
(143773, '', 3545, 0, 2, 202, 31583, 0, 0, NULL, NULL, NULL, '2018-01-27 21:52:15', NULL, 0, '2018-01-27 20:52:15', 0, 1, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lessontype`
--

CREATE TABLE `lessontype` (
  `lessontype` int(11) NOT NULL,
  `lessontypedesc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lessontype`
--

INSERT INTO `lessontype` (`lessontype`, `lessontypedesc`) VALUES
(1, 'abo'),
(2, 'einzellektion'),
(3, 'zusatzlektion'),
(4, 'abolesson'),
(5, 'abounlimited');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Locationid` int(11) NOT NULL,
  `Location` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Locationid`, `Location`) VALUES
(1, 'Winti 2'),
(2, 'Dietlikon 2'),
(3, 'Dietlikon 1'),
(4, 'Winti 1'),
(5, 'Büro');

-- --------------------------------------------------------

--
-- Table structure for table `mailing`
--

CREATE TABLE `mailing` (
  `id` bigint(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `sqlrecipients` text NOT NULL,
  `senddate` datetime DEFAULT NULL,
  `sent` int(11) DEFAULT '0',
  `mailcontenthtml` text NOT NULL,
  `mailcontenttext` text NOT NULL,
  `mailtitle` varchar(200) NOT NULL,
  `outgoingdatetime` datetime DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mailinghistory`
--

CREATE TABLE `mailinghistory` (
  `id` bigint(20) NOT NULL,
  `mailingid` int(11) NOT NULL,
  `personid` int(11) NOT NULL,
  `senddate` datetime DEFAULT NULL,
  `sent` int(11) NOT NULL DEFAULT '0',
  `mailcontenthtml` text NOT NULL,
  `mailcontenttext` text NOT NULL,
  `mailtitle` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `outgoingdatetime` datetime NOT NULL,
  `Vorname` varchar(255) NOT NULL,
  `Nachname` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mailingparam`
--

CREATE TABLE `mailingparam` (
  `id` int(11) NOT NULL,
  `teilnehmerid` int(11) NOT NULL,
  `mailingid` int(11) NOT NULL,
  `param1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `param2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `param3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `param4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `param5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sent` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manualpresence`
--

CREATE TABLE `manualpresence` (
  `id` int(11) NOT NULL,
  `kursteilnehmerid` int(11) NOT NULL,
  `erfasst` datetime NOT NULL,
  `processed` int(11) NOT NULL DEFAULT '0',
  `terminalid` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `move`
--

CREATE TABLE `move` (
  `moveid` int(11) NOT NULL,
  `movename` varchar(50) DEFAULT NULL,
  `beschreibung` longtext,
  `pasito` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `sortnr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `move`
--

INSERT INTO `move` (`moveid`, `movename`, `beschreibung`, `pasito`, `level`, `sortnr`) VALUES
(1, 'Palante y Patraz', 'Vorner und hinten', 1, 1, 10),
(2, 'Passo', 'beide nach hinten', 1, 1, 12),
(3, 'Media Vuelta', 'Halbe Drehung', 1, 1, 14),
(4, 'De lato', 'Seitlich', 1, 1, 16),
(5, 'Crusando', 'Kreuzen', 1, 1, 18),
(6, 'Vuelta Palante Una', 'Drehung nach vorne', 1, 1, 20),
(7, 'Vuelta Palante Doble', 'Drehung nach vorne, mit zweiter drehung an ort und stelle', 1, 1, 22),
(8, 'Puerto Rico', 'Schritt seitlich nach vorne', 1, 1, 24),
(9, 'Puertoriquenno', 'Vom seitlichen schritt, abdrehen und strecken', 1, 1, 26),
(10, 'Enchufla', NULL, 0, 1, 28),
(11, 'Dile que no', NULL, 0, 1, 30),
(12, 'Vacilala', 'Frau dreht rein wie beim sombrero', 0, 1, 32),
(13, 'Sombrero', 'wie vacilala mit arme', 0, 1, 34),
(14, 'Enchufla Doble', NULL, 0, 1, 36),
(15, 'Kentucky', NULL, 0, 1, 38),
(16, 'Sombrero Doble', NULL, 0, 1, 40),
(17, 'El dos', NULL, 0, 1, 42),
(18, 'Uno', NULL, 0, 1, 44),
(19, 'Setenta', NULL, 0, 1, 46),
(20, 'Adios con vuelta', NULL, 0, 1, 48),
(21, 'Montaña', NULL, 0, 1, 50),
(22, 'Tallia', NULL, 0, 1, 52),
(23, 'Dile que si loco', NULL, 0, 2, 54),
(24, 'Three way stop', NULL, 0, 2, 56),
(25, 'Dile que no y vuelta', NULL, 0, 2, 58),
(26, 'Juana la cubana', NULL, 0, 2, 60),
(27, 'Cascada', NULL, 0, 2, 62),
(28, 'El lazo', NULL, 0, 2, 64),
(29, 'Geenie', NULL, 0, 2, 66),
(30, 'Vuelta Palante', NULL, 0, 2, 68),
(31, 'Sombrero Rapido', NULL, 0, 2, 70),
(32, 'Havana', NULL, 0, 2, 72),
(33, 'Mango', NULL, 0, 2, 74),
(34, 'Casque', NULL, 0, 2, 76),
(35, 'La rosa', NULL, 0, 2, 78),
(36, 'La Mecha', NULL, 0, 2, 80),
(37, 'Ponle Sabor', NULL, 0, 2, 82),
(38, 'Enchufla por abacho', NULL, 0, 2, 63),
(39, 'Puente', NULL, 0, 3, 84),
(40, 'Siguela', NULL, 0, 3, 86),
(41, 'Sambuca', NULL, 0, 4, 1000),
(42, 'Slide', NULL, 0, 4, 1005),
(43, 'Vuelta Doble', NULL, 0, 4, 1010),
(44, 'Titanic', NULL, 0, 3, 0),
(45, 'Setenta Loco', NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `partnerstatus`
--

CREATE TABLE `partnerstatus` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partnerstatus`
--

INSERT INTO `partnerstatus` (`id`, `status`) VALUES
(0, 'OK'),
(1, 'Noch einen Partner'),
(2, 'Keinen Partner'),
(3, 'Aushilfe'),
(4, 'Zugewiesen-Warten');

-- --------------------------------------------------------

--
-- Table structure for table `persontyp`
--

CREATE TABLE `persontyp` (
  `Persontypid` int(11) NOT NULL,
  `Persontyp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `persontyp`
--

INSERT INTO `persontyp` (`Persontypid`, `Persontyp`) VALUES
(1, 'Student'),
(2, 'Schüler'),
(3, 'Lehrling'),
(4, 'Berufstätig'),
(5, 'Sonstige'),
(6, 'Hausfrau'),
(7, 'ZIN');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `photo` longblob NOT NULL,
  `teilnehmerid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `key` varchar(255) NOT NULL,
  `StringValue` longtext,
  `IntValue` int(11) DEFAULT NULL,
  `DecimalValue` decimal(18,2) DEFAULT NULL,
  `Description` longtext,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`key`, `StringValue`, `IntValue`, `DecimalValue`, `Description`, `timestamp`) VALUES
('accountCodierzeile', '010809731', NULL, NULL, NULL, NULL),
('BESRAccount', '01-80973-1', 800000022, NULL, 'Kontonummer auf BESR', '2006-12-03 17:52:44'),
('BESRBankId', '0', 0, '0.00', 'BESR: Bank-Teil der Referenznummer', '2006-12-03 17:52:44'),
('BESRBenefitOf', NULL, 0, '0.00', 'BESR: "Zugunsten von"', '2006-12-03 17:55:29'),
('BESRInvoiceFor', 'Danzare Tanzschule GmbH\r\n8305 Dietlikon', 0, '0.00', 'BESR: "Einzahlung für"', '2006-12-03 17:55:53'),
('InvoiceAddress', 'Danzare Tanzschule GmbH\r\nIndustriestrasse 31\r\n8305 Dietlikon', NULL, NULL, 'Absender-Adresse auf der Rechnung', '2006-12-03 17:52:44'),
('mandant', 'piparfums', NULL, NULL, NULL, '2010-08-07 21:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Statusid` int(11) NOT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Statusid`, `Status`) VALUES
(0, 'Aktiv'),
(1, 'Inaktiv');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `Tagid` int(11) NOT NULL,
  `Tag` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`Tagid`, `Tag`) VALUES
(1, 'Montag'),
(2, 'Dienstag'),
(3, 'Mittwoch'),
(4, 'Donnerstag'),
(5, 'Freitag'),
(6, 'Samstag'),
(7, 'Sonntag');

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

CREATE TABLE `terminal` (
  `terminalid` int(11) NOT NULL,
  `started` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `lastnewcardnumber` varchar(255) DEFAULT NULL,
  `teilnehmerid` int(11) NOT NULL DEFAULT '0',
  `location` int(11) NOT NULL,
  `lastcardpresentmentid` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terminal`
--

INSERT INTO `terminal` (`terminalid`, `started`, `lastnewcardnumber`, `teilnehmerid`, `location`, `lastcardpresentmentid`) VALUES
(1, '2011-11-19 06:54:51', NULL, 0, 3, 143692),
(2, '2011-11-19 06:54:51', '4F0A3EA462880900', 0, 3, 41923),
(3, '2012-05-01 14:56:26', NULL, 0, 2, 143253),
(4, '2012-05-01 14:56:26', NULL, 0, 4, 143729),
(5, '2012-05-01 14:56:31', NULL, 0, 1, 143728),
(80, '2012-09-06 11:06:36', NULL, 0, 5, 143215),
(6, '2017-10-03 10:01:51', NULL, 0, 2, 143699);

-- --------------------------------------------------------

--
-- Table structure for table `undeliveredmails`
--

CREATE TABLE `undeliveredmails` (
  `email` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usermessages`
--

CREATE TABLE `usermessages` (
  `id` int(11) UNSIGNED NOT NULL,
  `parentid` int(11) NOT NULL DEFAULT '0',
  `person` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `message` varchar(10240) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usermessages`
--

INSERT INTO `usermessages` (`id`, `parentid`, `person`, `created_by`, `created_at`, `updated_by`, `updated_at`, `status`, `message`) VALUES
(13, 0, 9503, 3545, '2018-02-14 22:11:38', 0, '2018-02-14 22:11:38', 1, 'Test message'),
(14, 13, 9503, 3545, '2018-02-14 22:11:54', 0, '2018-02-14 22:11:54', 0, 'I can confirm that it''s a test.'),
(15, 0, 3545, 3545, '2018-02-28 14:11:27', 3545, '2018-02-28 19:13:02', 0, 'test'),
(16, 0, 12428, 12428, '2018-02-28 14:46:02', 3545, '2018-02-28 19:08:18', 1, 'sadsadsads'),
(17, 0, 12428, 12428, '2018-02-28 14:46:04', 3545, '2018-02-28 19:08:28', 1, 'sadsada');

-- --------------------------------------------------------

--
-- Table structure for table `vermittlung`
--

CREATE TABLE `vermittlung` (
  `Vermittlung` int(11) NOT NULL,
  `Art` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vermittlung`
--

INSERT INTO `vermittlung` (`Vermittlung`, `Art`) VALUES
(1, 'Internet'),
(2, 'Flyer'),
(3, 'Freunde'),
(4, 'Facebook'),
(5, 'Andere'),
(6, 'S4S'),
(7, 'Shows'),
(8, 'Magazin'),
(9, 'Zeitung');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `voucherid` int(11) NOT NULL,
  `articlesaleid` int(11) DEFAULT NULL,
  `invoiceid` int(11) DEFAULT NULL,
  `value` decimal(10,2) NOT NULL,
  `encashed` int(11) NOT NULL DEFAULT '0',
  `created` date NOT NULL,
  `lastedited` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`voucherid`, `articlesaleid`, `invoiceid`, `value`, `encashed`, `created`, `lastedited`) VALUES
(250, NULL, 3070, '80.00', 0, '2014-01-27', '2014-01-27 10:22:09'),
(247, NULL, 3067, '160.00', 0, '2014-01-21', '2014-01-21 15:27:38'),
(244, 1012, NULL, '100.00', 0, '2013-12-30', '2013-12-30 20:35:46'),
(243, 1011, NULL, '0.00', 0, '2013-12-30', '2013-12-30 20:35:13'),
(242, 1010, NULL, '0.00', 0, '2013-12-30', '2013-12-30 20:34:23'),
(241, 1009, NULL, '250.00', 0, '2013-12-24', '2013-12-24 13:07:55'),
(240, NULL, 2828, '100.00', 0, '2013-12-23', '2013-12-23 08:51:44'),
(237, 1006, NULL, '100.00', 1, '2013-12-20', '2014-03-04 08:30:38'),
(236, 1005, NULL, '0.00', 0, '2013-12-20', '2013-12-20 17:03:27'),
(235, 1004, NULL, '0.00', 0, '2013-12-20', '2013-12-20 17:01:27'),
(234, NULL, 2825, '200.00', 1, '2013-12-18', '2014-01-31 09:55:34'),
(165, NULL, 472, '50.00', 0, '2013-01-28', '2013-01-28 15:26:21'),
(168, NULL, 472, '50.00', 0, '2013-01-28', '2013-01-28 15:28:18'),
(171, NULL, 475, '50.00', 0, '2013-01-28', '2013-01-28 15:30:28'),
(172, 647, NULL, '10.00', 1, '2013-02-02', '2013-11-05 11:47:12'),
(175, NULL, 623, '40.00', 0, '2013-02-15', '2013-02-15 13:20:18'),
(178, NULL, 626, '40.00', 0, '2013-02-15', '2013-02-15 13:21:50'),
(179, 675, NULL, '150.00', 0, '2013-02-19', '2013-02-19 16:06:20'),
(182, NULL, 649, '100.00', 1, '2013-02-22', '2013-11-05 11:47:12'),
(183, 693, NULL, '50.00', 1, '2013-02-26', '2013-04-30 09:56:31'),
(186, NULL, 858, '100.00', 0, '2013-03-19', '2013-03-19 15:55:50'),
(189, NULL, 906, '100.00', 0, '2013-03-27', '2013-03-27 16:13:05'),
(192, NULL, 909, '100.00', 0, '2013-03-27', '2013-03-27 16:13:54'),
(193, 732, NULL, '80.00', 0, '2013-04-09', '2013-04-09 16:55:24'),
(194, 759, NULL, '150.00', 1, '2013-04-20', '2013-06-26 12:46:08'),
(196, 868, NULL, '300.00', 1, '2013-06-04', '2016-01-16 16:10:23'),
(197, 876, NULL, '100.00', 0, '2013-06-12', '2013-06-12 16:03:31'),
(198, 880, NULL, '50.00', 0, '2013-06-15', '2013-06-15 08:54:40'),
(199, 886, NULL, '100.00', 1, '2013-06-20', '2013-11-05 11:47:12'),
(200, 901, NULL, '80.00', 0, '2013-07-04', '2013-07-04 15:09:25'),
(205, 924, NULL, '120.00', 1, '2013-08-08', '2013-11-05 11:47:12'),
(206, 933, NULL, '0.00', 0, '2013-08-30', '2013-08-30 08:41:05'),
(207, 934, NULL, '0.00', 0, '2013-08-30', '2013-08-30 08:42:23'),
(208, 935, NULL, '0.00', 0, '2013-08-30', '2013-08-30 08:43:49'),
(209, 936, NULL, '0.00', 0, '2013-08-30', '2013-08-30 08:45:33'),
(210, 937, NULL, '70.00', 1, '2013-08-30', '2013-11-05 11:47:12'),
(211, 938, NULL, '70.00', 0, '2013-08-30', '2013-08-30 08:54:27'),
(212, 939, NULL, '70.00', 0, '2013-08-30', '2013-08-30 08:56:15'),
(215, NULL, 2089, '100.00', 1, '2013-09-05', '2013-11-05 11:47:12'),
(216, 948, NULL, '270.00', 0, '2013-09-11', '2013-09-11 17:11:18'),
(219, NULL, 2220, '100.00', 1, '2013-09-25', '2014-04-29 13:15:10'),
(222, NULL, 2223, '150.00', 1, '2013-09-25', '2014-09-25 11:25:18'),
(231, 995, NULL, '30.00', 1, '2013-11-15', '2013-12-02 15:48:22'),
(226, 981, NULL, '0.00', 0, '2013-10-22', '2013-10-22 09:25:48'),
(227, 982, NULL, '0.00', 0, '2013-10-22', '2013-10-22 09:26:32'),
(228, 983, NULL, '80.00', 0, '2013-10-22', '2013-10-22 09:29:34'),
(229, 984, NULL, '80.00', 0, '2013-10-22', '2013-10-22 09:30:11'),
(251, 1035, NULL, '100.00', 1, '2014-02-25', '2015-03-17 10:04:50'),
(254, NULL, 3374, '80.00', 0, '2014-02-28', '2014-02-28 16:40:32'),
(257, NULL, 3380, '80.00', 0, '2014-03-04', '2014-03-04 10:26:07'),
(258, 1056, NULL, '80.00', 1, '2014-04-11', '2014-06-26 07:24:16'),
(261, NULL, 3972, '80.00', 1, '2014-05-17', '2016-04-14 13:32:08'),
(262, 1082, NULL, '80.00', 1, '2014-05-24', '2015-03-21 15:08:12'),
(265, NULL, 4022, '200.00', 0, '2014-05-24', '2014-05-24 13:27:28'),
(266, 1100, NULL, '30.00', 0, '2014-07-18', '2014-07-18 19:50:44'),
(269, NULL, 4426, '150.00', 1, '2014-08-12', '2015-04-06 10:27:22'),
(272, NULL, 4525, '160.00', 0, '2014-08-26', '2014-08-26 13:30:31'),
(275, NULL, 4674, '100.00', 0, '2014-09-23', '2014-09-26 11:46:05'),
(278, NULL, 4720, '100.00', 0, '2014-09-29', '2014-09-29 13:55:36'),
(281, NULL, 4764, '20.00', 0, '2014-10-07', '2014-10-07 15:05:41'),
(284, NULL, 5109, '160.00', 0, '2014-11-28', '2014-11-28 15:23:34'),
(287, NULL, 5110, '80.00', 0, '2014-11-28', '2014-11-28 15:27:05'),
(299, NULL, 5262, '80.00', 0, '2014-12-23', '2014-12-23 08:58:32'),
(296, NULL, 5227, '100.00', 0, '2014-12-15', '2014-12-15 15:21:29'),
(302, NULL, 5346, '160.00', 0, '2015-01-09', '2015-01-09 14:31:48'),
(305, NULL, 5427, '40.00', 0, '2015-02-02', '2015-02-02 13:40:09'),
(306, 1163, NULL, '80.00', 0, '2015-02-12', '2015-02-12 19:55:34'),
(309, NULL, 5634, '200.00', 0, '2015-03-06', '2015-03-06 11:46:52'),
(316, NULL, 6282, '100.00', 0, '2015-07-13', '2015-07-13 14:08:52'),
(319, NULL, 6283, '100.00', 0, '2015-07-13', '2015-07-13 14:08:57'),
(322, NULL, 6284, '100.00', 0, '2015-07-13', '2015-07-13 14:09:00'),
(325, NULL, 6285, '100.00', 0, '2015-07-13', '2015-07-13 14:09:03'),
(328, NULL, 6286, '100.00', 0, '2015-07-13', '2015-07-13 14:09:06'),
(340, NULL, 6848, '80.00', 0, '2015-11-11', '2015-11-11 08:42:25'),
(339, NULL, 6847, '80.00', 0, '2015-11-11', '2015-11-11 08:41:53'),
(338, NULL, 6846, '100.00', 0, '2015-11-11', '2015-11-11 08:41:24'),
(337, NULL, 6845, '100.00', 0, '2015-11-11', '2015-11-11 08:40:58'),
(336, NULL, 6844, '100.00', 1, '2015-11-11', '2016-10-01 15:32:03'),
(335, NULL, 6843, '100.00', 0, '2015-11-11', '2015-11-11 08:39:32'),
(334, NULL, 6842, '400.00', 1, '2015-11-05', '2016-03-15 23:52:28'),
(333, NULL, 6603, '200.00', 0, '2015-10-01', '2015-10-01 14:39:39'),
(332, NULL, 6421, '160.00', 0, '2015-08-17', '2015-08-17 21:54:51'),
(331, NULL, 6362, '100.00', 0, '2015-07-21', '2015-07-21 09:05:08'),
(330, 1185, NULL, '100.00', 0, '2015-07-18', '2015-07-18 13:00:11'),
(329, NULL, 6287, '0.00', 0, '2015-07-16', '2015-07-22 09:13:00'),
(341, 1198, NULL, '0.00', 0, '2015-12-12', '2015-12-12 12:45:29'),
(342, 1199, NULL, '0.00', 0, '2015-12-12', '2015-12-12 12:46:06'),
(343, NULL, 7051, '50.00', 0, '2015-12-12', '2015-12-12 12:46:46'),
(344, NULL, 7052, '50.00', 0, '2015-12-12', '2015-12-12 12:46:54'),
(345, NULL, 7053, '50.00', 0, '2015-12-12', '2015-12-12 12:47:00'),
(346, NULL, 7054, '50.00', 0, '2015-12-12', '2015-12-12 12:47:04'),
(347, NULL, 7055, '50.00', 0, '2015-12-19', '2015-12-19 21:17:23'),
(348, NULL, 7056, '190.00', 0, '2015-12-22', '2015-12-22 15:24:38'),
(349, NULL, 7057, '190.00', 1, '2015-12-22', '2016-02-22 14:44:30'),
(350, NULL, 7058, '200.00', 0, '2015-12-22', '2015-12-22 15:26:42'),
(351, 1203, NULL, '100.00', 0, '2015-12-23', '2015-12-23 18:18:16'),
(352, NULL, 7059, '790.00', 1, '2015-12-24', '2016-03-15 23:50:48'),
(353, NULL, 7060, '80.00', 0, '2015-12-24', '2015-12-24 02:07:04'),
(354, NULL, 7061, '240.00', 0, '2015-12-24', '2015-12-24 02:07:44'),
(355, NULL, 7062, '160.00', 0, '2015-12-24', '2015-12-24 13:46:50'),
(356, NULL, 7288, '50.00', 0, '2016-02-01', '2016-02-01 10:54:54'),
(357, NULL, 7289, '480.00', 0, '2016-02-03', '2016-02-03 14:53:22'),
(358, NULL, 7383, '200.00', 1, '2016-02-03', '2016-04-21 21:38:27'),
(359, 1231, NULL, '270.00', 0, '2016-06-21', '2016-06-21 18:58:58'),
(360, 1232, NULL, '0.00', 0, '2016-07-15', '2016-07-15 09:13:36'),
(361, NULL, 8208, '45.00', 1, '2016-07-15', '2017-03-09 11:13:14'),
(362, NULL, 8482, '50.00', 0, '2016-09-09', '2016-09-09 07:42:08'),
(363, NULL, 8555, '200.00', 1, '2016-09-17', '2017-05-22 11:56:19'),
(364, 1243, NULL, '50.00', 0, '2016-09-28', '2016-09-28 12:55:21'),
(365, NULL, 8869, '200.00', 0, '2016-11-22', '2016-11-22 07:29:12'),
(366, NULL, 8961, '360.00', 1, '2016-12-06', '2017-01-10 07:42:17'),
(367, NULL, 8962, '180.00', 1, '2016-12-07', '2017-01-31 14:08:33'),
(368, 1247, NULL, '190.00', 0, '2016-12-26', '2016-12-26 11:26:28'),
(369, NULL, 9064, '150.00', 0, '2016-12-31', '2016-12-31 05:45:57'),
(370, NULL, 9415, '80.00', 0, '2017-03-01', '2017-03-01 15:33:18'),
(372, 1249, NULL, '150.00', 1, '2017-03-08', '2017-04-02 09:19:44'),
(373, 1252, NULL, '40.00', 0, '2017-03-20', '2017-03-20 19:21:30'),
(374, NULL, 9584, '200.00', 0, '2017-04-03', '2017-04-03 08:52:19'),
(375, NULL, 9714, '200.00', 0, '2017-04-10', '2017-04-10 13:35:58'),
(376, 1253, NULL, '190.00', 1, '2017-04-11', '2017-05-05 13:28:57'),
(377, NULL, 9929, '140.00', 0, '2017-05-09', '2017-05-09 12:22:54'),
(378, NULL, 9930, '190.00', 0, '2017-05-09', '2017-05-09 12:23:39'),
(379, NULL, 11365, '100.00', 0, '2017-11-21', '2017-11-21 14:17:36'),
(380, NULL, 11366, '200.00', 0, '2017-11-21', '2017-11-21 16:24:59'),
(381, NULL, 11527, '200.00', 0, '2017-12-13', '2017-12-13 14:58:41'),
(382, NULL, 11528, '100.00', 0, '2017-12-13', '2017-12-13 15:24:44'),
(383, NULL, 11529, '100.00', 0, '2017-12-13', '2017-12-13 15:25:05');

-- --------------------------------------------------------

--
-- Table structure for table `zahlungsart`
--

CREATE TABLE `zahlungsart` (
  `zahlungsartid` int(11) NOT NULL,
  `zahlungsart` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zahlungsart`
--

INSERT INTO `zahlungsart` (`zahlungsartid`, `zahlungsart`) VALUES
(0, 'Bar'),
(1, 'EC / Post'),
(2, 'Rechnung'),
(3, 'ec / bar');

-- --------------------------------------------------------

--
-- Structure for view `echeckin_user`
--
DROP TABLE IF EXISTS `echeckin_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `echeckin_user`  AS  select `kursteilnehmer`.`Teilnehmerid` AS `teilnehmerid`,`kursteilnehmer`.`Vorname` AS `vorname`,`kursteilnehmer`.`Nachname` AS `nachname`,`kursteilnehmer`.`Email` AS `email` from `kursteilnehmer` ;

-- --------------------------------------------------------

--
-- Structure for view `invoicev`
--
DROP TABLE IF EXISTS `invoicev`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `invoicev`  AS  select `invoice`.`invoiceid` AS `invoiceid`,`invoice`.`invoicetype` AS `invoicetype`,`invoice`.`invoicedate` AS `invoicedate`,`invoice`.`invoicegrace` AS `invoicegrace`,`invoice`.`payabledate` AS `payabledate`,`invoice`.`invoicestate` AS `invoicestate`,`invoice`.`invoiceaddress` AS `invoiceaddress`,`invoice`.`dunning` AS `dunning`,`invoice`.`dunningamount` AS `dunningamount`,`invoice`.`invoiceamount` AS `invoiceamount`,`invoice`.`paidamount` AS `paidamount`,`invoice`.`invoicetext` AS `invoicetext`,`invoice`.`entered` AS `entered`,`invoice`.`cancelled` AS `cancelled`,`invoice`.`terminalid` AS `terminalid`,`invoice`.`kursteilnehmerid` AS `kursteilnehmerid`,`invoice`.`teilnahmeid` AS `teilnahmeid`,`invoice`.`paymentdate` AS `paymentdate`,`invoice`.`checkeddate` AS `checkeddate`,`invoice`.`clearingdate` AS `clearingdate`,`invoice`.`voucherid` AS `voucherid`,`invoice`.`lastedit` AS `lastedit` from `invoice` where (`invoice`.`cancelled` = 0) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abotype`
--
ALTER TABLE `abotype`
  ADD PRIMARY KEY (`abotype`);

--
-- Indexes for table `abotypecoursetype`
--
ALTER TABLE `abotypecoursetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anfragen`
--
ALTER TABLE `anfragen`
  ADD PRIMARY KEY (`anfrageid`);

--
-- Indexes for table `articlesale`
--
ALTER TABLE `articlesale`
  ADD PRIMARY KEY (`articlesaleid`);

--
-- Indexes for table `breaks`
--
ALTER TABLE `breaks`
  ADD PRIMARY KEY (`breakid`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contentperson`
--
ALTER TABLE `contentperson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursecategories`
--
ALTER TABLE `coursecategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseperson`
--
ALTER TABLE `courseperson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursetype`
--
ALTER TABLE `coursetype`
  ADD PRIMARY KEY (`coursetype`);

--
-- Indexes for table `id`
--
ALTER TABLE `id`
  ADD UNIQUE KEY `sequence_name` (`sequence_name`),
  ADD KEY `invoiceid` (`next_sequence`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoiceid`);

--
-- Indexes for table `invoicestate`
--
ALTER TABLE `invoicestate`
  ADD PRIMARY KEY (`invoicestate`);

--
-- Indexes for table `invoicetype`
--
ALTER TABLE `invoicetype`
  ADD PRIMARY KEY (`invoicetypeid`);

--
-- Indexes for table `janein`
--
ALTER TABLE `janein`
  ADD PRIMARY KEY (`janeinid`),
  ADD KEY `janeinid` (`janeinid`);

--
-- Indexes for table `kassenabschluss`
--
ALTER TABLE `kassenabschluss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kursteilnahme`
--
ALTER TABLE `kursteilnahme`
  ADD PRIMARY KEY (`Teilnahmeid`),
  ADD KEY `Kursid` (`Kursid`),
  ADD KEY `Kursteilnehmerid` (`Kursteilnehmerid`),
  ADD KEY `Teilnahmeid` (`Teilnahmeid`);

--
-- Indexes for table `kursteilnehmer`
--
ALTER TABLE `kursteilnehmer`
  ADD PRIMARY KEY (`Teilnehmerid`),
  ADD UNIQUE KEY `Cardnumber` (`Cardnumber`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessongroup`
--
ALTER TABLE `lessongroup`
  ADD PRIMARY KEY (`Kursgruppeid`);

--
-- Indexes for table `lessonperson`
--
ALTER TABLE `lessonperson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kursteilnehmerid` (`kursteilnehmerid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Locationid`),
  ADD KEY `Locationid` (`Locationid`);

--
-- Indexes for table `mailing`
--
ALTER TABLE `mailing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailinghistory`
--
ALTER TABLE `mailinghistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailingparam`
--
ALTER TABLE `mailingparam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manualpresence`
--
ALTER TABLE `manualpresence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `move`
--
ALTER TABLE `move`
  ADD PRIMARY KEY (`moveid`);

--
-- Indexes for table `persontyp`
--
ALTER TABLE `persontyp`
  ADD PRIMARY KEY (`Persontypid`),
  ADD KEY `Persontypid` (`Persontypid`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Statusid`),
  ADD KEY `Statusid` (`Statusid`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`Tagid`);

--
-- Indexes for table `terminal`
--
ALTER TABLE `terminal`
  ADD PRIMARY KEY (`terminalid`),
  ADD UNIQUE KEY `terminalid` (`terminalid`);

--
-- Indexes for table `usermessages`
--
ALTER TABLE `usermessages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vermittlung`
--
ALTER TABLE `vermittlung`
  ADD PRIMARY KEY (`Vermittlung`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`voucherid`);

--
-- Indexes for table `zahlungsart`
--
ALTER TABLE `zahlungsart`
  ADD PRIMARY KEY (`zahlungsartid`),
  ADD KEY `zahlungsartid` (`zahlungsartid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abotype`
--
ALTER TABLE `abotype`
  MODIFY `abotype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `abotypecoursetype`
--
ALTER TABLE `abotypecoursetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `anfragen`
--
ALTER TABLE `anfragen`
  MODIFY `anfrageid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `articlesale`
--
ALTER TABLE `articlesale`
  MODIFY `articlesaleid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `breaks`
--
ALTER TABLE `breaks`
  MODIFY `breakid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `contentperson`
--
ALTER TABLE `contentperson`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `coursecategories`
--
ALTER TABLE `coursecategories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `courseperson`
--
ALTER TABLE `courseperson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `kassenabschluss`
--
ALTER TABLE `kassenabschluss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kursteilnahme`
--
ALTER TABLE `kursteilnahme`
  MODIFY `Teilnahmeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31610;
--
-- AUTO_INCREMENT for table `kursteilnehmer`
--
ALTER TABLE `kursteilnehmer`
  MODIFY `Teilnehmerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12429;
--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
--
-- AUTO_INCREMENT for table `lessongroup`
--
ALTER TABLE `lessongroup`
  MODIFY `Kursgruppeid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lessonperson`
--
ALTER TABLE `lessonperson`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143783;
--
-- AUTO_INCREMENT for table `mailing`
--
ALTER TABLE `mailing`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mailinghistory`
--
ALTER TABLE `mailinghistory`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mailingparam`
--
ALTER TABLE `mailingparam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manualpresence`
--
ALTER TABLE `manualpresence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `move`
--
ALTER TABLE `move`
  MODIFY `moveid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usermessages`
--
ALTER TABLE `usermessages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

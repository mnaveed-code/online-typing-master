-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2023 at 10:20 AM
-- Server version: 5.6.51
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `typing_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `compition`
--

DROP TABLE IF EXISTS `compition`;
CREATE TABLE IF NOT EXISTS `compition` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `comption_id` int(100) NOT NULL,
  `total_charachter` varchar(100) NOT NULL,
  `correct_character` varchar(100) NOT NULL,
  `wrong_character` varchar(100) NOT NULL,
  `finsh_time` varchar(100) NOT NULL,
  `acuracy` varchar(100) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0',
  `request_status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compition`
--

INSERT INTO `compition` (`id`, `user_id`, `comption_id`, `total_charachter`, `correct_character`, `wrong_character`, `finsh_time`, `acuracy`, `status`, `request_status`) VALUES
(1, 1, 4, '', '16', '', '', '', 1, ''),
(2, 4, 4, '27', '14', '11', '172', '59.25925925925925', 0, ''),
(3, 4, 4, '', '14', '', '', '', 1, ''),
(4, 4, 4, '', '', '', '', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `name`, `email`, `message`) VALUES
(1, 'frman', 'talha@haddock.com', 'asdfhifheiurfhp98rh3');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `tawiter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `gmail`, `address`, `phone_no`, `facebook`, `tawiter`, `instagram`, `github`) VALUES
(1, 'Typing Master', 'admin@gmail.com', 'Sahiwal ', '+92(02938234011)', 'ti-facebook', 'ti-twitter', 'ti-instagram', 'ti-github');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `test_title` varchar(255) NOT NULL,
  `test_paragraph` text NOT NULL,
  `total_time` varchar(255) NOT NULL COMMENT 'time in seconds',
  `test_type` varchar(255) NOT NULL COMMENT '1 for test / 2 for compition',
  `date_added` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `test_title`, `test_paragraph`, `total_time`, `test_type`, `date_added`) VALUES
(1, 'Test no 1', 'It is a long established factt', '4', 'test', '22-02-23'),
(6, 'Lesson : A S D F', 'as sd df assd sdfa fff dsa asd sssd fff dsaf sda sda saad ffds sdaf sdaf ffds saa fadsa sdfd aaa sss ddd fff fdsa asdf ds af fs da dafs adfs asdf fdsa adfs dsfa adsf afdsa ffff', '', 'p', ''),
(3, 'Test no 3', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. ', '4', 'test', '14-02-23'),
(4, 'Compition 1', 'All the Lorem Ipsum generat', '4', 'compition', '14-02-23'),
(7, 'Lesson : J K L', 'jkl lkj jjj kkk lll lkjj jkl kjlj lkj klkj jklkj kjll jklk lkj jkkk lll jjjlk lkjj kkk jjj lll kjlk lkjkj jkjl jkjj lll ljjlj jljlj klkl kjkjkj lkjl jljlj kjj lkj lkjj lkjl lkjjlj ljklkj lkjjl lkjl ', '', 'p', ''),
(5, 'Compition 2', 'There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour', '4', 'compition', '14-02-23'),
(8, 'Lesson : E I R O', 'ei ie oeir eroe eoeo  iir oe oieir eoo oeeer riiri riiri eooeiri oier oirier oeroi  oiroei erooe eririoe eoir oir orio oe oeir oeooeriir oeiriro eo oiroer eori oir oeoe rii r oeo roei oeir  ooeo', '', 'p', ''),
(9, 'Lesson : G H T Y', 'tthh ggyy htgy htgy tyg tyty hghg htht gygy htyg yygy tth yygg hgy tghgt yyhg tyytg gtht thygyt thth gygyg gygy hthth hty gyt hyt gtyh hgy tyhg thyg yttyt hggh', '', 'p', ''),
(10, 'Lesson : Q Z P M', 'qqq mmpmp zzz mzmzm pqpq mpzq pqpq zmzm mqmq pzpzp mqmq pzmqpmz pmzp zqq pqpq mzmz mqpm pqmz pqz mqpm zmp zqmp zqzmp zqpm qqq ppp mmmz zz pqmzpqm  zqzpmq zqmpm zmqpmz zmzpqmp', '', 'p', ''),
(11, 'Lesson : W X N B ', 'xbwnbx nnn xwxwwx jnbnb nxbwb nbwxb www nbbx wxwx nbb xxwwx nbb bxn nbxx nwnwn xnxn xnwb xnbx nbxw nxbwxb bxnbx nxnxn bwb bxbx wbwb xnbxw nxbwnb xnwbx xnwb xnbxwn ', '', 'p', ''),
(13, 'sdsdfsadf', 'asdfasdf', '2', 'test', '04-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `typing_lessons`
--

DROP TABLE IF EXISTS `typing_lessons`;
CREATE TABLE IF NOT EXISTS `typing_lessons` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `type` smallint(6) NOT NULL DEFAULT '1' COMMENT '1 for slide / 2 for vedio',
  `sort_order` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL COMMENT '1 for admin / 2 for user',
  `image` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `gmail`, `password`, `type`, `image`) VALUES
(1, 'Talha', 'Rasheed', 'talha@haddock.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user', ''),
(2, 'admin', 'admin', 'admin@gmail.com', '4297f44b13955235245b2497399d7a93', 'admin', ''),
(3, 'Hammad', 'Hayat', 'hammadhayat682@gmail.com', 'hammad1234', 'user', ''),
(4, 'waleed', 'Rasheed', 'mukhtarahmadpk602@gmail.com', '4297f44b13955235245b2497399d7a93', 'user', ''),
(5, 'faqia', 'abbas', 'faqia@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', 'user', ''),
(6, 'irfan', 'Rasheed', 'talha@haddock.com', 'b5532d9cad485d1c2e13ea85fe180e87', 'user', ''),
(12, 'mub', 'talha', 'mub@gmail.com', '4297f44b13955235245b2497399d7a93', 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_test`
--

DROP TABLE IF EXISTS `user_test`;
CREATE TABLE IF NOT EXISTS `user_test` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `test_id` int(255) NOT NULL,
  `total_character` int(255) NOT NULL,
  `correct_character` int(255) NOT NULL,
  `wrong_character` int(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `finsh_time` varchar(255) NOT NULL,
  `acuracy` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_test`
--

INSERT INTO `user_test` (`id`, `user_id`, `test_id`, `total_character`, `correct_character`, `wrong_character`, `start_time`, `finsh_time`, `acuracy`, `status`) VALUES
(1, 1, 1, 29, 29, 5, '', '10', '90', 'Excellent'),
(2, 1, 2, 28, 28, 2, '', '14', '92.85714285714286', 'Excellent'),
(3, 1, 2, 28, 28, 28, '', '54', '0', 'Poor'),
(4, 1, 1, 29, 29, 113, '', '53', '-289.65517241379314', 'Poor'),
(5, 3, 1, 29, 29, 3, '', '20', '89.65517241379311', 'Good'),
(6, 4, 1, 29, 29, 0, '', '23', '100', 'Excellent'),
(7, 1, 1, 30, 30, 2, '', '16', '93.33333333333333', 'Excellent'),
(8, 6, 1, 30, 30, 0, '', '13', '100', 'Excellent'),
(9, 12, 1, 30, 29, 6, '', '0', '76.66666666666666', ''),
(10, 12, 1, 30, 30, 3, '', '13', '90', 'Good');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

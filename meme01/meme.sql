-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2018 at 08:02 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meme`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `MyAns`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `MyAns` ()  BEGIN
				SELECT * FROM ANSWER A, QUESTION Q WHERE A.USER_ID=17 AND A.QUESTION_ID=Q.QUESTION_ID ORDER BY A.D_TIME DESC;
			END$$

DROP PROCEDURE IF EXISTS `MyQues`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `MyQues` ()  BEGIN
				SELECT * FROM QUESTION WHERE USER_ID=15 ORDER BY VIEWS DESC, D_TIME DESC;
			END$$

DROP PROCEDURE IF EXISTS `SelectCat`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectCat` ()  BEGIN
				SELECT * FROM CATEGORY;
			END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `ANS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ANS_DETAIL` varchar(255) NOT NULL,
  `D_TIME` date NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `QUESTION_ID` int(11) DEFAULT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'space.png',
  PRIMARY KEY (`ANS_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`ANS_ID`, `ANS_DETAIL`, `D_TIME`, `USER_ID`, `QUESTION_ID`, `image`) VALUES
(11, 'it sure is', '2018-10-11', 6, NULL, 'space.png'),
(2, 'ITS GOOD', '2018-10-09', 3, NULL, 'space.png'),
(3, 'it is not', '2018-10-10', 5, NULL, 'space.png'),
(10, 'like its just so bad', '2018-10-10', 5, NULL, 'space.png'),
(14, 'yeah im sure', '2018-10-11', 6, NULL, 'space.png'),
(13, 'i reckon', '2018-10-11', 6, NULL, 'space.png'),
(12, 'it sure is', '2018-10-11', 6, NULL, 'space.png'),
(15, 'no', '2018-10-11', 6, NULL, 'space.png'),
(16, 'ye', '2018-10-11', 7, NULL, 'space.png'),
(27, 'no', '2018-11-15', 15, 7, 'cyka 2.jpg'),
(28, 'i mean, just look at this', '2018-11-16', 16, 12, 'overwatchtiktok.jpg'),
(29, 'you should see the duets that a whole heap of trolls have done', '2018-11-16', 15, 12, 'space.png'),
(30, 'let me go and find some real quick', '2018-11-16', 15, 12, 'space.png'),
(31, 'alrighty', '2018-11-16', 16, 12, 'space.png'),
(32, 'these are some of my favourites from this video https://www.youtube.com/watch?v=Z_FskSKAel4', '2018-11-16', 16, 12, 'tiktok1.PNG'),
(33, 'jesus ', '2018-11-16', 16, 12, 'tiktok3.PNG'),
(34, 'just as good as the first one', '2018-11-16', 16, 12, 'tiktok2.PNG'),
(35, 'all of the duest of the guys just pretending to play with random shit is so good ahahahah', '2018-11-16', 15, 12, 'space.png'),
(36, 'cool', '2018-11-23', 15, 12, 'space.png'),
(47, '<p><em><strong>hahahahah</strong></em><em><strong> so good</strong></em></p>', '2018-11-25', 15, 12, 'space.png'),
(71, '<p>coooooooooooolllllll</p>', '2018-11-26', 17, 12, ''),
(70, '', '2018-11-26', 17, 12, 'Jellyfish.jpg'),
(69, '<p>wooooow</p>', '2018-11-26', 17, 12, 'Lighthouse.jpg'),
(68, '<p>yo sick <strong>koaly</strong></p>', '2018-11-26', 17, 12, ''),
(67, '<p>oofo&nbsp;boyo</p>', '2018-11-26', 17, 12, ''),
(72, '<p>sick fighting penguins</p>', '2018-11-26', 17, 12, 'Penguins.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `CAT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CAT_NAME` varchar(20) NOT NULL,
  `CAT_DESCRIPTION` varchar(100) NOT NULL,
  PRIMARY KEY (`CAT_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CAT_ID`, `CAT_NAME`, `CAT_DESCRIPTION`) VALUES
(1, 'Parody', 'This category pokes fun at, and is a humorous recreation of past events/items'),
(2, 'Animal', 'This category showcases all of the funny things animals do'),
(3, 'Conspiracy Theory ', 'This category looks at all of the crazy, and sometimes scary conspiracy theories and their memes'),
(4, 'Remix', 'This category is usually a remix or recreation of other past/current memes'),
(5, 'Photoshop', 'This category involves the use of Photoshop when creating or making memes'),
(6, 'Viral Video', 'This category looks at all current and past viral videos');

-- --------------------------------------------------------

--
-- Table structure for table `liked_by`
--

DROP TABLE IF EXISTS `liked_by`;
CREATE TABLE IF NOT EXISTS `liked_by` (
  `LIKED_BY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LIKES` int(11) NOT NULL,
  `D_TIME` datetime NOT NULL,
  `ANS_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  PRIMARY KEY (`LIKED_BY_ID`),
  UNIQUE KEY `ANS_ID` (`ANS_ID`),
  UNIQUE KEY `USER_ID` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `QUESTION_ID` int(11) NOT NULL AUTO_INCREMENT,
  `HEADING` varchar(100) NOT NULL,
  `QUESTION_DETAIL` varchar(100) NOT NULL,
  `D_TIME` date DEFAULT NULL,
  `VIEWS` int(11) DEFAULT NULL,
  `USER_ID` int(11) NOT NULL,
  `TOPIC_ID` int(11) NOT NULL,
  PRIMARY KEY (`QUESTION_ID`),
  KEY `TOPIC_ID` (`TOPIC_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`QUESTION_ID`, `HEADING`, `QUESTION_DETAIL`, `D_TIME`, `VIEWS`, `USER_ID`, `TOPIC_ID`) VALUES
(1, 'Despacito 2 is the best, dont @ me', 'Who else loves this meme??', '2018-10-02', 39, 1, 5),
(4, 'lieky?', '', '2018-10-08', 18, 5, 5),
(7, 'cool', '', NULL, NULL, 6, 6),
(12, 'TikTok parodies', 'theyre honestly the best for this meme', NULL, NULL, 15, 12);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

DROP TABLE IF EXISTS `topic`;
CREATE TABLE IF NOT EXISTS `topic` (
  `TOPIC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TOPIC_NAME` varchar(30) NOT NULL,
  `TOPIC_DESCRIPTION` varchar(225) NOT NULL,
  `CAT_ID` int(11) NOT NULL,
  PRIMARY KEY (`TOPIC_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`TOPIC_ID`, `TOPIC_NAME`, `TOPIC_DESCRIPTION`, `CAT_ID`) VALUES
(5, 'Despacito 2', 'OHHHHH BABY', 1),
(6, 'Howard The Alien', 'nice dance moves', 1),
(11, 'Howard The Alien', 'nice dance moves', 4),
(12, 'Im Already Tracer', 'dear god, why is this even a meme?', 1),
(13, 'Funny Cat Videos', 'does anyone have any?', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `USER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `FULL_NAME` tinytext NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `GENDER` text NOT NULL,
  `USER_LEVEL` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `USERNAME`, `PASSWORD`, `FULL_NAME`, `EMAIL`, `GENDER`, `USER_LEVEL`) VALUES
(1, 'anon', 'password123', 'anon', 'anon@anon.com', 'female', NULL),
(5, 'user', '$2y$10$/Abn0vLaEyWirfjh5RI1/eQMTxRB3hxUBZBe6occdM9KTje2wY32i', 'user', 'admin@admin.com', 'female', NULL),
(2, 'anon2', '$2y$10$UtzUByN2pXr9BECjo.nhvukx8tjNfVD3h3m.tRt6bOfgftT3Z/SS2', 'anonn', 'anon2@anon.com', 'female', NULL),
(3, 'anon3', '$2y$10$IlG.4sIG5JCqEyHWzMBM4.QVK1PBEiYaYRJmVvR.3phjCQjirXZm2', 'sam', 'sam@sam.com', 'female', NULL),
(4, 'admin', '$2y$10$bPX3DxfyXD81u1kCbga.j.LQ3HYJDO4rHBcQ/25Hjy3VQD9nwiNWK', 'admin', 'admin@admin.com', 'male', NULL),
(6, 'user1', '$2y$10$V7vIQTHiUlUBF6Kl3zHcNuEia9QSMbfcrSf0V/tgYwPM2rqkcsd4u', 'user1', 'user1@user1', 'male', NULL),
(7, 'user2', '$2y$10$udvY/CvdfLWaYC9HUZzDR.XsP05VDC8nxWqVY1n05BNnb1hTbPf.W', 'user2', 'user2@user2', 'female', NULL),
(14, 'alal', 'alal', 'alal', 'alal@alal', 'male', 1),
(15, 'okie', '$2y$10$nRc.aWkUO4Ww6S5GvOTL2exfLBZdpi56cT/M2Ap3jUKnGhx/255My', 'okie', 'okie@okie', 'female', NULL),
(16, 'lol', 'lol', 'lol', 'lol@lol', 'male', NULL),
(17, 'adam', 'adam', 'adam', 'adam@adam', 'male', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

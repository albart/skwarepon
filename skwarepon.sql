-- MySQL dump 10.14  Distrib 5.5.32-MariaDB, for Linux (i686)
--
-- Host: localhost    Database: skwarepon
-- ------------------------------------------------------
-- Server version	5.5.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `namelast` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namefirst` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namemi` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `corporation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobilephone` int(11) NOT NULL,
  `carrier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reporthist` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datelist` tinyint(2) DEFAULT NULL,
  `defaultthresholdtext` int(11) NOT NULL,
  `defaultthresholdemail` int(11) NOT NULL,
  `picture` blob NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'a','b','c','','1',0,'',2,'d','e@f.com','$1$/aqVTKYB$KNcZXuHjPsYreIadeZv7U.','Y',1,0,0,''),(2,'Spiner','Brent','C','','1234567890',0,'',98765,'data','support@microsoft.com','$1$/WLWmkGm$4v2sI51kmtWX0dP4PTb2.0','Y',1,0,0,''),(28,'yy','yy','y','','3146600546',0,'',63033,'anonymo','mr.anonymo@att.net','$1$yhXwIP6N$.nYpE3MXL5jTrcZCcsn.f1','N',1,0,0,''),(32,'Perry','Dennis','J','','3144235659',0,'',63074,'albart','albart@sbcglobal.net','$1$Arvuheim$LicI01y3ngUagPpaU0YLY/','N',1,0,0,''),(33,'a','b','c','','1234567890',987654321,'att',63033,'albart2','123@abc.net','$1$9Zh87GOb$Lx1ugBVNUQnit0VQkLD/f0','N',1,0,0,''),(36,'anono','anono','a','','3146600546',2147483647,'abc',63033,'anono','albartenstein@gmail.com','$1$RKbSy5P5$96PJk1MlLyWyHLrQt/UOc.','N',1,0,0,''),(38,'wayne','wayne','w','','3146600546',2147483647,'att',63031,'wayne','mr.anonymo@att.net','$1$i51zncIG$w8NbkHrW0ssnG1V7a.oRX0','N',1,0,0,'');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coupons` (
  `couponID` int(11) NOT NULL AUTO_INCREMENT,
  `customerID` int(11) NOT NULL,
  `vendormastercouponID` int(2) NOT NULL,
  `eventID` int(11) NOT NULL,
  `clientID` int(11) NOT NULL,
  `redeemed` tinyint(1) NOT NULL,
  PRIMARY KEY (`couponID`),
  UNIQUE KEY `customerID` (`customerID`,`vendormastercouponID`,`eventID`,`clientID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupons`
--

LOCK TABLES `coupons` WRITE;
/*!40000 ALTER TABLE `coupons` DISABLE KEYS */;
INSERT INTO `coupons` VALUES (13,4,7,4,33,0),(15,5,7,4,33,0),(19,3,7,4,33,0),(21,11,7,4,33,0),(22,12,8,5,38,0);
/*!40000 ALTER TABLE `coupons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` blob NOT NULL,
  `zipcode` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `mobilephone` int(11) NOT NULL,
  `carrier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reports` tinyint(1) NOT NULL,
  `reportdate` int(2) NOT NULL,
  `nameFirst` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nameLast` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nameMI` char(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (3,'abc','$1$HchG7C.9$Rnrt.WAYT6gMMBXCm9xs71','',63033,1234567890,987654321,'who','mr.anonymo@att.net',0,0,'abc','abc','a'),(4,'bcd','$1$xYnFW9Dg$mFVjHe2RH9S6XD1eb3zX30','',63033,1234567890,987654321,'att','mr.anonymo@att.net',0,0,'bcd','bcd','b'),(5,'cde','$1$k8iEn/2l$dqhjT.69RDULvoQnbBpUU1','',63033,1111111111,2147483647,'att','mr.anonymo@att.net',0,0,'cde','cde','c'),(10,'def','$1$FBTlJl5D$HojmgVMXd8jvJSVl1hpKH0','',63033,2147483647,2147483647,'att','mr.anonymo@att.net',0,0,'def','def','d'),(11,'efg','$1$5m8yrkFg$unowPkyIT0HW.b0w5TJh0/','',63033,2147483647,2147483647,'att','mr.anonymo@att.net',0,0,'efg','efg','e'),(12,'wcust1','$1$UGoowj8T$ecCeRQDkE3DQJ/MhokH3b.','',63031,2147483647,1112223333,'att','mr.anonymo@att.net',0,0,'wcust1','wcust1','w');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `clientID` int(11) NOT NULL,
  `eventID` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `zipcode` int(11) NOT NULL,
  PRIMARY KEY (`clientID`,`eventID`),
  KEY `eventID` (`eventID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (33,4,'st. charles fair','2014-04-01','2014-05-01',63033),(38,5,'april fest','2014-04-01','2014-04-30',63031),(38,6,'may fest','2014-05-01','2014-05-31',64080);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendormastercoupons`
--

DROP TABLE IF EXISTS `vendormastercoupons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendormastercoupons` (
  `clientID` int(11) NOT NULL,
  `eventID` int(11) NOT NULL,
  `vendormastercouponID` int(2) NOT NULL AUTO_INCREMENT,
  `photo` blob NOT NULL,
  `shortdesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longdesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `validfrom` date NOT NULL,
  `validthru` date NOT NULL,
  `limit` int(11) NOT NULL,
  `thresholdtext` int(11) NOT NULL,
  `thresholdemail` int(11) NOT NULL,
  PRIMARY KEY (`clientID`,`eventID`,`vendormastercouponID`),
  UNIQUE KEY `shortdesc` (`shortdesc`,`longdesc`,`validfrom`,`validthru`),
  KEY `vendormastercouponID` (`vendormastercouponID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendormastercoupons`
--

LOCK TABLES `vendormastercoupons` WRITE;
/*!40000 ALTER TABLE `vendormastercoupons` DISABLE KEYS */;
INSERT INTO `vendormastercoupons` VALUES (33,4,7,'','st','charles','2014-04-01','2014-05-01',1,2,3),(38,5,8,'','towels','imported fancy towels','2014-04-01','2014-04-30',4,1,1),(38,5,9,'','washcloths','super fancy washcloths','2014-04-01','2014-04-30',4,1,1),(38,6,11,'','mud','fresh mud','2014-05-01','2014-05-30',2,1,1),(38,6,12,'','dirt','old dirt','2014-04-04','2014-05-04',1,1,1);
/*!40000 ALTER TABLE `vendormastercoupons` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-25 12:57:08

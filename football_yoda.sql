-- MySQL dump 10.13  Distrib 5.1.53, for Win64 (unknown)
--
-- Host: localhost    Database: football_yoda
-- ------------------------------------------------------
-- Server version	5.1.53-community-log

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
-- Table structure for table `polls`
--

DROP TABLE IF EXISTS `polls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `polls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(256) NOT NULL,
  `starts` date DEFAULT NULL,
  `ends` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `polls`
--

LOCK TABLES `polls` WRITE;
/*!40000 ALTER TABLE `polls` DISABLE KEYS */;
INSERT INTO `polls` VALUES (1,'Who is the best player?','2017-07-31','2017-08-01'),(2,'Best Soccer League in the World?','2017-08-02','2017-08-02'),(3,'Are Man City right to spend so much on full-backs?','2017-08-03','2017-08-03'),(4,'Should Neymar leave the FC barcelona?','2017-08-04','2017-08-04');
/*!40000 ALTER TABLE `polls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `polls_answers`
--

DROP TABLE IF EXISTS `polls_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `polls_answers` (
  `user` int(11) NOT NULL AUTO_INCREMENT,
  `poll` int(11) NOT NULL,
  `choice` int(11) DEFAULT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `polls_answers`
--

LOCK TABLES `polls_answers` WRITE;
/*!40000 ALTER TABLE `polls_answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `polls_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `polls_choices`
--

DROP TABLE IF EXISTS `polls_choices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `polls_choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poll` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `polls_choices`
--

LOCK TABLES `polls_choices` WRITE;
/*!40000 ALTER TABLE `polls_choices` DISABLE KEYS */;
INSERT INTO `polls_choices` VALUES (1,1,'Leo Messi'),(2,1,'Critiano Ronaldo'),(3,1,'Neymar'),(4,2,'La Liga'),(5,2,'English Premier League'),(6,2,'Serie A'),(7,3,'Yes'),(8,3,'No'),(9,3,'Maybe'),(10,4,'Yes'),(11,4,'No'),(12,4,'Maybe');
/*!40000 ALTER TABLE `polls_choices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `confirmPassword` varchar(256) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Purba','abc','abc'),(2,'Sadia','sadia','sadia'),(3,'Afrin','afrin','afrin'),(4,'Nirfa','nirfa','nirfa'),(5,'Sharna','sharna','sharna');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-20 22:08:09

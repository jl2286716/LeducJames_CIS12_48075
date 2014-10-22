CREATE DATABASE  IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test`;
-- MySQL dump 10.13  Distrib 5.6.11, for Win32 (x86)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.6.11

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
-- Table structure for table `entity_movie_jl2286716`
--

DROP TABLE IF EXISTS `entity_movie_jl2286716`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_movie_jl2286716` (
  `movie_id` int(3) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `studio` varchar(50) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `rating_id` tinyint(3) DEFAULT NULL,
  `duration` float(10,2) DEFAULT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_movie_jl2286716`
--

LOCK TABLES `entity_movie_jl2286716` WRITE;
/*!40000 ALTER TABLE `entity_movie_jl2286716` DISABLE KEYS */;
INSERT INTO `entity_movie_jl2286716` VALUES (20130322,'The Croods','DreamWorks','2013-03-22',1,1.00),(20131004,'Gravity','Warner Bros.','2013-10-04',3,2.00),(20140404,'Captain America: The Winter Soldier','Marvel','2014-04-04',3,2.00),(20140502,'Amazing Spider-Man 2','Sony','2014-05-02',3,2.00),(20140516,'Godzilla','Warner Bros.','2014-05-16',3,3.00),(20140523,'X-Men: Days of Future Past','Fox','2014-05-23',3,3.00),(20140801,'Guardians of the Galaxy','Marvel','2014-08-01',3,2.00);
/*!40000 ALTER TABLE `entity_movie_jl2286716` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-22  9:03:30

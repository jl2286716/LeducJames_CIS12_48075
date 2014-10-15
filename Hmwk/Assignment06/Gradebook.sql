CREATE DATABASE  IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: test
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `entity_assignments_jl2286716`
--

DROP TABLE IF EXISTS `entity_assignments_jl2286716`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_assignments_jl2286716` (
  `ass_id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `points_possible` int(5) DEFAULT NULL,
  `weight` tinyint(3) DEFAULT NULL,
  `description` longtext,
  `start_date` date DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  PRIMARY KEY (`ass_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_assignments_jl2286716`
--

LOCK TABLES `entity_assignments_jl2286716` WRITE;
/*!40000 ALTER TABLE `entity_assignments_jl2286716` DISABLE KEYS */;
INSERT INTO `entity_assignments_jl2286716` VALUES (1,'CHW1',70,7,'Homework 1',NULL,NULL),(2,'CQ1',50,5,'Quiz 1',NULL,NULL),(3,'CHW2',70,7,'Homework 2',NULL,NULL),(4,'CQ2',50,5,'Quiz 2',NULL,NULL),(5,'CHW3',70,7,'Homework 3',NULL,NULL),(6,'CMT',100,10,'Midterm',NULL,NULL),(7,'CHW4',80,8,'Homework 4',NULL,NULL),(8,'CQ3',50,5,'Quiz 3',NULL,NULL),(9,'CHW5',80,8,'Homework 5',NULL,NULL),(10,'CQ4',50,5,'Quiz 4',NULL,NULL),(11,'CHW6',80,8,'Homework 6',NULL,NULL),(12,'CF',150,15,'Final Exam',NULL,NULL),(13,'CFP',100,10,'Final Project',NULL,NULL),(14,'MF',250,25,'Final Exam',NULL,NULL),(15,'AQ1',60,6,'Quiz 1',NULL,NULL),(16,'AQ2',60,6,'Quiz 2',NULL,NULL),(17,'AQ3',60,6,'Quiz 3',NULL,NULL),(18,'AQ4',70,7,'Quiz 4',NULL,NULL),(19,'AMT',200,20,'Midterm',NULL,NULL),(20,'AQ5',60,6,'Quiz 5',NULL,NULL),(21,'AQ6',60,6,'Quiz 6',NULL,NULL),(22,'AQ7',60,6,'Quiz 7',NULL,NULL),(23,'AQ8',70,7,'Quiz 8',NULL,NULL),(24,'AFE',300,30,'Final Exam',NULL,NULL),(25,'MHW1',70,7,'Homework 1',NULL,NULL),(26,'MQ1',50,5,'Quiz 1',NULL,NULL),(27,'MHW2',70,7,'Homework 2',NULL,NULL),(28,'MQ2',50,5,'Quiz 2',NULL,NULL),(29,'HW3',70,7,'Homework 3',NULL,NULL),(30,'MMT',100,10,'Midterm',NULL,NULL),(31,'MHW4',80,8,'Homework 4',NULL,NULL),(32,'MQ3',50,5,'Quiz 3',NULL,NULL),(33,'MHW5',80,8,'Homework 5',NULL,NULL),(34,'MQ4',50,5,'Quiz 4',NULL,NULL),(35,'MHW6',80,8,'Homework 6',NULL,NULL);
/*!40000 ALTER TABLE `entity_assignments_jl2286716` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_class_jl2286716`
--

DROP TABLE IF EXISTS `entity_class_jl2286716`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_class_jl2286716` (
  `section_id` int(10) NOT NULL,
  `time` time DEFAULT NULL,
  `bldg` tinyint(3) DEFAULT NULL,
  `day_of_Week` tinyint(3) DEFAULT NULL,
  `room` smallint(5) DEFAULT NULL,
  `semester` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_class_jl2286716`
--

LOCK TABLES `entity_class_jl2286716` WRITE;
/*!40000 ALTER TABLE `entity_class_jl2286716` DISABLE KEYS */;
INSERT INTO `entity_class_jl2286716` VALUES (48075,'08:00:00',NULL,NULL,NULL,NULL),(48515,'13:00:00',NULL,NULL,NULL,NULL),(48759,'12:00:00',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `entity_class_jl2286716` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_course_jl2286716`
--

DROP TABLE IF EXISTS `entity_course_jl2286716`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_course_jl2286716` (
  `course_id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `number` tinyint(3) DEFAULT NULL,
  `series_letter` char(1) DEFAULT NULL,
  `short_description` text,
  `description` mediumtext,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_course_jl2286716`
--

LOCK TABLES `entity_course_jl2286716` WRITE;
/*!40000 ALTER TABLE `entity_course_jl2286716` DISABLE KEYS */;
INSERT INTO `entity_course_jl2286716` VALUES (200,'CIS',1,'A','Intro Comp Info Sys','Introduction to Computer Information Systems'),(201,'AST',1,'A','Intro Ast','Introduction to Astronomy'),(202,'MAT',11,NULL,'College Alg','College Algebra');
/*!40000 ALTER TABLE `entity_course_jl2286716` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_instructor_jl2286716`
--

DROP TABLE IF EXISTS `entity_instructor_jl2286716`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_instructor_jl2286716` (
  `instructor_id` int(10) NOT NULL COMMENT 'Primary Key',
  `first_name` varchar(15) DEFAULT NULL,
  `middle_initial` char(1) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email_address` varchar(30) DEFAULT NULL,
  `area_code` smallint(5) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `office_bldg_id` tinyint(3) DEFAULT NULL,
  `office_number` smallint(5) DEFAULT NULL,
  `department_id` tinyint(3) DEFAULT NULL,
  `discipline_id` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`instructor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_instructor_jl2286716`
--

LOCK TABLES `entity_instructor_jl2286716` WRITE;
/*!40000 ALTER TABLE `entity_instructor_jl2286716` DISABLE KEYS */;
INSERT INTO `entity_instructor_jl2286716` VALUES (1150258,'Mark','E','Lehr','mark.lehr@rcc.edu',951,2228260,NULL,222,NULL,NULL),(1346852,'Scott','A','Blair','scott.blair@rcc.edu',951,5555679,NULL,208,NULL,NULL),(1649875,'Gabrielle','P','Mendoza','gabrielle.mendoza@rcc.edu',951,5559632,NULL,345,NULL,NULL);
/*!40000 ALTER TABLE `entity_instructor_jl2286716` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_student_jl2286716`
--

DROP TABLE IF EXISTS `entity_student_jl2286716`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_student_jl2286716` (
  `student_id` int(10) NOT NULL COMMENT 'Primary Key',
  `first_name` varchar(15) DEFAULT NULL,
  `middle_initial` char(1) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email_address` varchar(30) DEFAULT NULL,
  `area_code` smallint(5) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `major` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_student_jl2286716`
--

LOCK TABLES `entity_student_jl2286716` WRITE;
/*!40000 ALTER TABLE `entity_student_jl2286716` DISABLE KEYS */;
INSERT INTO `entity_student_jl2286716` VALUES (2286716,'James','A','Leduc','jleduc@student.rcc.edu',909,3635025,NULL);
/*!40000 ALTER TABLE `entity_student_jl2286716` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enum_bldg_jl2286716`
--

DROP TABLE IF EXISTS `enum_bldg_jl2286716`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enum_bldg_jl2286716` (
  `bldg_id` tinyint(3) NOT NULL,
  `building` varchar(20) DEFAULT NULL,
  `mneumonic` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`bldg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enum_bldg_jl2286716`
--

LOCK TABLES `enum_bldg_jl2286716` WRITE;
/*!40000 ALTER TABLE `enum_bldg_jl2286716` DISABLE KEYS */;
INSERT INTO `enum_bldg_jl2286716` VALUES (3,'Quadrangle','QD'),(4,'Business Education','BE'),(10,'Planetarium','PL'),(12,'Math and Science','MTSC');
/*!40000 ALTER TABLE `enum_bldg_jl2286716` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enum_department_jl2286716`
--

DROP TABLE IF EXISTS `enum_department_jl2286716`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enum_department_jl2286716` (
  `dept_id` tinyint(3) NOT NULL,
  `department` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enum_department_jl2286716`
--

LOCK TABLES `enum_department_jl2286716` WRITE;
/*!40000 ALTER TABLE `enum_department_jl2286716` DISABLE KEYS */;
INSERT INTO `enum_department_jl2286716` VALUES (1,'Computer Info Systems'),(2,'English'),(3,'Math'),(4,'Science'),(5,'Humanities');
/*!40000 ALTER TABLE `enum_department_jl2286716` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enum_discipline_jl2286716`
--

DROP TABLE IF EXISTS `enum_discipline_jl2286716`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enum_discipline_jl2286716` (
  `disc_id` tinyint(3) NOT NULL,
  `discipline` varchar(40) DEFAULT NULL,
  `menumonic` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`disc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enum_discipline_jl2286716`
--

LOCK TABLES `enum_discipline_jl2286716` WRITE;
/*!40000 ALTER TABLE `enum_discipline_jl2286716` DISABLE KEYS */;
INSERT INTO `enum_discipline_jl2286716` VALUES (100,'Computer Information Systems','CIS'),(101,'Computer Application and Technology','CAT'),(102,'Math','MAT'),(103,'English','ENG'),(104,'English as a Second Language','ESL');
/*!40000 ALTER TABLE `enum_discipline_jl2286716` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xref_class_assignments_jl2286716`
--

DROP TABLE IF EXISTS `xref_class_assignments_jl2286716`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xref_class_assignments_jl2286716` (
  `xref_class_ass_id` int(10) NOT NULL,
  `class_id` int(10) DEFAULT NULL,
  `assignment_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_class_ass_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xref_class_assignments_jl2286716`
--

LOCK TABLES `xref_class_assignments_jl2286716` WRITE;
/*!40000 ALTER TABLE `xref_class_assignments_jl2286716` DISABLE KEYS */;
INSERT INTO `xref_class_assignments_jl2286716` VALUES (1,48075,1),(2,48075,2),(3,48075,3),(4,48075,4),(5,48075,5),(6,48075,6),(7,48075,7),(8,48075,8),(9,48075,9),(10,48075,10),(11,48075,11),(12,48075,12),(13,48075,13),(14,48759,25),(15,48759,26),(16,48759,27),(17,48759,28),(18,48759,29),(19,48759,30),(20,48759,31),(21,48759,32),(22,48759,33),(23,48759,34),(24,48759,35),(25,48759,14),(26,48515,15),(27,48515,16),(28,48515,17),(29,48515,18),(30,48515,19),(31,48515,20),(32,48515,21),(33,48515,22),(34,48515,23),(35,48515,24);
/*!40000 ALTER TABLE `xref_class_assignments_jl2286716` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xref_class_course_jl2286716`
--

DROP TABLE IF EXISTS `xref_class_course_jl2286716`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xref_class_course_jl2286716` (
  `xref_class_course` int(10) NOT NULL,
  `class_id` int(10) DEFAULT NULL,
  `course_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_class_course`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xref_class_course_jl2286716`
--

LOCK TABLES `xref_class_course_jl2286716` WRITE;
/*!40000 ALTER TABLE `xref_class_course_jl2286716` DISABLE KEYS */;
INSERT INTO `xref_class_course_jl2286716` VALUES (215,48515,201),(259,48759,202),(275,48075,200);
/*!40000 ALTER TABLE `xref_class_course_jl2286716` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xref_instr_class_jl2286716`
--

DROP TABLE IF EXISTS `xref_instr_class_jl2286716`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xref_instr_class_jl2286716` (
  `xref_instr_class` int(10) NOT NULL,
  `instructor_id` int(10) DEFAULT NULL,
  `class_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_instr_class`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xref_instr_class_jl2286716`
--

LOCK TABLES `xref_instr_class_jl2286716` WRITE;
/*!40000 ALTER TABLE `xref_instr_class_jl2286716` DISABLE KEYS */;
INSERT INTO `xref_instr_class_jl2286716` VALUES (100,1150258,48075),(101,2286716,48515),(102,2656485,48759);
/*!40000 ALTER TABLE `xref_instr_class_jl2286716` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xref_student_assignments_jl2286716`
--

DROP TABLE IF EXISTS `xref_student_assignments_jl2286716`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xref_student_assignments_jl2286716` (
  `xref_stu_ass` int(10) NOT NULL,
  `student_id` int(10) DEFAULT NULL,
  `assignment_id` int(10) DEFAULT NULL,
  `score` int(10) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `comments` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`xref_stu_ass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xref_student_assignments_jl2286716`
--

LOCK TABLES `xref_student_assignments_jl2286716` WRITE;
/*!40000 ALTER TABLE `xref_student_assignments_jl2286716` DISABLE KEYS */;
INSERT INTO `xref_student_assignments_jl2286716` VALUES (501,2286716,1,50,NULL,NULL),(502,2286716,2,40,NULL,NULL),(503,2286716,3,68,NULL,NULL),(504,2286716,4,46,NULL,NULL),(505,2286716,5,66,NULL,NULL),(506,2286716,6,88,NULL,NULL),(507,2286716,7,74,NULL,NULL),(508,2286716,8,50,NULL,NULL),(509,2286716,9,78,NULL,NULL),(510,2286716,10,48,NULL,NULL),(511,2286716,11,80,NULL,NULL),(512,2286716,12,150,NULL,NULL),(513,2286716,13,100,NULL,NULL),(514,2286716,25,60,NULL,NULL),(515,2286716,26,44,NULL,NULL),(516,2286716,27,70,NULL,NULL),(517,2286716,28,50,NULL,NULL),(518,2286716,29,68,NULL,NULL),(519,2286716,30,98,NULL,NULL),(520,2286716,31,80,NULL,NULL),(521,2286716,32,50,NULL,NULL),(522,2286716,33,72,NULL,NULL),(523,2286716,34,46,NULL,NULL),(524,2286716,35,76,NULL,NULL),(525,2286716,14,245,NULL,NULL),(526,2286716,15,40,NULL,NULL),(527,2286716,16,44,NULL,NULL),(528,2286716,17,50,NULL,NULL),(529,2286716,18,64,NULL,NULL),(530,2286716,19,175,NULL,NULL),(531,2286716,20,50,NULL,NULL),(532,2286716,21,42,NULL,NULL),(533,2286716,22,58,NULL,NULL),(534,2286716,23,66,NULL,NULL),(535,2286716,24,260,NULL,NULL);
/*!40000 ALTER TABLE `xref_student_assignments_jl2286716` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-14 18:36:55

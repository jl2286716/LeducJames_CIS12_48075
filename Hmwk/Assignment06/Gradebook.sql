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
-- Table structure for table `entity_assignments`
--

DROP TABLE IF EXISTS `entity_assignments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_assignments` (
  `ass_id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `points_possible` tinyint(3) DEFAULT NULL,
  `weight` tinyint(3) DEFAULT NULL,
  `description` longtext,
  `start_date` date DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  PRIMARY KEY (`ass_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_assignments`
--

LOCK TABLES `entity_assignments` WRITE;
/*!40000 ALTER TABLE `entity_assignments` DISABLE KEYS */;
/*!40000 ALTER TABLE `entity_assignments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_class`
--

DROP TABLE IF EXISTS `entity_class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_class` (
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
-- Dumping data for table `entity_class`
--

LOCK TABLES `entity_class` WRITE;
/*!40000 ALTER TABLE `entity_class` DISABLE KEYS */;
/*!40000 ALTER TABLE `entity_class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_course`
--

DROP TABLE IF EXISTS `entity_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_course` (
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
-- Dumping data for table `entity_course`
--

LOCK TABLES `entity_course` WRITE;
/*!40000 ALTER TABLE `entity_course` DISABLE KEYS */;
/*!40000 ALTER TABLE `entity_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_instructor`
--

DROP TABLE IF EXISTS `entity_instructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_instructor` (
  `instructor_id` int(10) NOT NULL COMMENT 'Primary Key',
  `first_name` varchar(15) DEFAULT NULL,
  `middle_initial` char(1) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email_address` varchar(30) DEFAULT NULL,
  `area_code` smallint(5) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `office_bldg` tinyint(3) DEFAULT NULL,
  `office_number` smallint(5) DEFAULT NULL,
  `department` tinyint(3) DEFAULT NULL,
  `discipline` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`instructor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_instructor`
--

LOCK TABLES `entity_instructor` WRITE;
/*!40000 ALTER TABLE `entity_instructor` DISABLE KEYS */;
INSERT INTO `entity_instructor` VALUES (1150258,'Mark','E','Lehr','mark.lehr@rcc.edu',951,2228260,NULL,222,NULL,NULL);
/*!40000 ALTER TABLE `entity_instructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_student`
--

DROP TABLE IF EXISTS `entity_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_student` (
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
-- Dumping data for table `entity_student`
--

LOCK TABLES `entity_student` WRITE;
/*!40000 ALTER TABLE `entity_student` DISABLE KEYS */;
/*!40000 ALTER TABLE `entity_student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enum_bldg`
--

DROP TABLE IF EXISTS `enum_bldg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enum_bldg` (
  `bldg_id` tinyint(3) NOT NULL,
  `building` varchar(20) DEFAULT NULL,
  `mneumonic` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`bldg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enum_bldg`
--

LOCK TABLES `enum_bldg` WRITE;
/*!40000 ALTER TABLE `enum_bldg` DISABLE KEYS */;
INSERT INTO `enum_bldg` VALUES (4,'Business Education','BE'),(12,'Math and Science','MAT/SCI');
/*!40000 ALTER TABLE `enum_bldg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enum_department`
--

DROP TABLE IF EXISTS `enum_department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enum_department` (
  `dept_id` tinyint(3) NOT NULL,
  `department` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enum_department`
--

LOCK TABLES `enum_department` WRITE;
/*!40000 ALTER TABLE `enum_department` DISABLE KEYS */;
INSERT INTO `enum_department` VALUES (1,'Business Info Systems'),(2,'English');
/*!40000 ALTER TABLE `enum_department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enum_discipline`
--

DROP TABLE IF EXISTS `enum_discipline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enum_discipline` (
  `disc_id` tinyint(3) NOT NULL,
  `discipline` varchar(15) DEFAULT NULL,
  `menumonic` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`disc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enum_discipline`
--

LOCK TABLES `enum_discipline` WRITE;
/*!40000 ALTER TABLE `enum_discipline` DISABLE KEYS */;
/*!40000 ALTER TABLE `enum_discipline` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xref_class_assignments`
--

DROP TABLE IF EXISTS `xref_class_assignments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xref_class_assignments` (
  `xref_class_ass_id` int(10) NOT NULL,
  `class_id` int(10) DEFAULT NULL,
  `assignment_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_class_ass_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xref_class_assignments`
--

LOCK TABLES `xref_class_assignments` WRITE;
/*!40000 ALTER TABLE `xref_class_assignments` DISABLE KEYS */;
/*!40000 ALTER TABLE `xref_class_assignments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xref_class_course`
--

DROP TABLE IF EXISTS `xref_class_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xref_class_course` (
  `xref_class_course` int(10) NOT NULL,
  `class_id` int(10) DEFAULT NULL,
  `course_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_class_course`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xref_class_course`
--

LOCK TABLES `xref_class_course` WRITE;
/*!40000 ALTER TABLE `xref_class_course` DISABLE KEYS */;
/*!40000 ALTER TABLE `xref_class_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xref_instr_class`
--

DROP TABLE IF EXISTS `xref_instr_class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xref_instr_class` (
  `xref_instr_class` int(10) NOT NULL,
  `instructor_id` int(10) DEFAULT NULL,
  `class_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_instr_class`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xref_instr_class`
--

LOCK TABLES `xref_instr_class` WRITE;
/*!40000 ALTER TABLE `xref_instr_class` DISABLE KEYS */;
/*!40000 ALTER TABLE `xref_instr_class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xref_student_assignments`
--

DROP TABLE IF EXISTS `xref_student_assignments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xref_student_assignments` (
  `xref_stu_ass` int(10) NOT NULL,
  `student_id` int(10) DEFAULT NULL,
  `assignment_id` int(10) DEFAULT NULL,
  `score` tinyint(3) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `comments` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`xref_stu_ass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xref_student_assignments`
--

LOCK TABLES `xref_student_assignments` WRITE;
/*!40000 ALTER TABLE `xref_student_assignments` DISABLE KEYS */;
/*!40000 ALTER TABLE `xref_student_assignments` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-06  9:16:24

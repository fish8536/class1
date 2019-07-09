-- MySQL dump 10.17  Distrib 10.3.16-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: directory
-- ------------------------------------------------------
-- Server version	10.3.16-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `departmentId` int(11) NOT NULL,
  `departmentName` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`departmentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,'Corporate'),(2,'Engineering'),(3,'Sales'),(4,'Marketing'),(5,'Accounting');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `employeeId` int(11) NOT NULL,
  `firstName` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `managerId` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `departmentId` int(11) DEFAULT NULL,
  `officePhone` varchar(45) DEFAULT NULL,
  `cellPhone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `picture` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`employeeId`),
  KEY `fk_departments_employees` (`departmentId`),
  CONSTRAINT `fk_departments_employees` FOREIGN KEY (`departmentId`) REFERENCES `departments` (`departmentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'James','King',0,'President and CEO',1,'617-000-0001','781-000-0001','jking@fakemail.com','Boston, MA','james_king.jpg'),(2,'Julie','Taylor',1,'VP of Marketing',4,'617-000-0002','781-000-0002','jtaylor@fakemail.com','Boston, MA','julie_taylor.jpg'),(3,'Eugene','Lee',1,'CFO',5,'617-000-0003','781-000-0003','elee@fakemail.com','Boston, MA','eugene_lee.jpg'),(4,'John','Williams',1,'VP of Engineering',2,'617-000-0004','781-000-0004','jwilliams@fakemail.com','Boston, MA','john_williams.jpg'),(5,'Ray','Moore',1,'VP of Sales',3,'617-000-0005','781-000-0005','rmoore@fakemail.com','Boston, MA','ray_moore.jpg'),(6,'Paul','Jones',4,'QA Manager',2,'617-000-0006','781-000-0006','pjones@fakemail.com','Boston, MA','paul_jones.jpg'),(7,'Paula','Gates',4,'Software Architect',2,'617-000-0007','781-000-0007','pgates@fakemail.com','Boston, MA','paula_gates.jpg'),(8,'Lisa','Wong',2,'Marketing Manager',4,'617-000-0008','781-000-0008','lwong@fakemail.com','Boston, MA','lisa_wong.jpg'),(9,'Gary','Donovan',2,'Marketing',4,'617-000-0009','781-000-0009','gdonovan@fakemail.com','Boston, MA','gary_donovan.jpg'),(10,'Kathleen','Byrne',5,'Sales Representative',3,'617-000-0010','781-000-0010','kbyrne@fakemail.com','Boston, MA','kathleen_byrne.jpg'),(11,'Amy','Jones',5,'Sales Representative',3,'617-000-0011','781-000-0011','ajones@fakemail.com','Boston, MA','amy_jones.jpg'),(12,'Steven','Wells',4,'Software Architect',2,'617-000-0012','781-000-0012','swells@fakemail.com','Boston, MA','steven_wells.jpg');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-09 17:57:18

CREATE DATABASE  IF NOT EXISTS `labtech` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `labtech`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: labtech.acumenit.com    Database: labtech
-- ------------------------------------------------------
-- Server version	5.5.29

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
-- Table structure for table `hc_scores_monthly`
--

DROP TABLE IF EXISTS `hc_scores_monthly`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hc_scores_monthly` (
  `ClientID` int(11) NOT NULL,
  `Client Name` varchar(50) NOT NULL,
  `CARE Team` longtext NOT NULL,
  `Antivirus` double(18,1) DEFAULT NULL,
  `Disk` double(18,1) DEFAULT NULL,
  `Intrusion` double(18,1) DEFAULT NULL,
  `Usability` double(18,1) DEFAULT NULL,
  `Services` double(18,1) DEFAULT NULL,
  `Updates` double(18,1) DEFAULT NULL,
  `Event Log` double(18,1) DEFAULT NULL,
  `Avg Score` double(18,1) DEFAULT NULL,
  `AV Ex` double(18,1) DEFAULT NULL,
  `Disk Ex` double(18,1) DEFAULT NULL,
  `Intrusion Ex` double(18,1) DEFAULT NULL,
  `Usability Ex` double(18,1) DEFAULT NULL,
  `Services Ex` double(18,1) DEFAULT NULL,
  `Updates Ex` double(18,1) DEFAULT NULL,
  `Event Ex` double(18,1) DEFAULT NULL,
  `CheckDate` datetime NOT NULL,
  PRIMARY KEY (`ClientID`,`CheckDate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-25 15:30:54

-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: localhost    Database: ilcm
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `wp_wfScanners`
--

DROP TABLE IF EXISTS `wp_wfScanners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_wfScanners` (
  `eMin` int(10) unsigned NOT NULL,
  `IP` binary(16) NOT NULL DEFAULT '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',
  `hits` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`eMin`,`IP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_wfScanners`
--

LOCK TABLES `wp_wfScanners` WRITE;
/*!40000 ALTER TABLE `wp_wfScanners` DISABLE KEYS */;
INSERT INTO `wp_wfScanners` VALUES (24274248,'\0\0\0\0\0\0\0\0\0\0ÿÿ_Õ±z',1),(24274387,'\0\0\0\0\0\0\0\0\0\0ÿÿU+\ç',1),(24274420,'\0\0\0\0\0\0\0\0\0\0ÿÿ´L',1),(24274503,'\0\0\0\0\0\0\0\0\0\0ÿÿ_Õ±z',1),(24275410,'\0\0\0\0\0\0\0\0\0\0ÿÿ–F­)',1),(24275410,'\0\0\0\0\0\0\0\0\0\0ÿÿ–F­/',1),(24275411,'\0\0\0\0\0\0\0\0\0\0ÿÿ–F­-',1),(24275411,'\0\0\0\0\0\0\0\0\0\0ÿÿ–F­/',1),(24275642,'\0\0\0\0\0\0\0\0\0\0ÿÿ=\Ø\r',1),(24276615,'\0\0\0\0\0\0\0\0\0\0ÿÿ¥¹',4),(24276753,'\0\0\0\0\0\0\0\0\0\0ÿÿ®Ž=\Û',5),(24278147,'\0\0\0\0\0\0\0\0\0\0ÿÿG‡ƒ',1),(24278385,'\0\0\0\0\0\0\0\0\0\0ÿÿI\'6l',4);
/*!40000 ALTER TABLE `wp_wfScanners` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-02 23:53:15

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
-- Table structure for table `wp_wfCrawlers`
--

DROP TABLE IF EXISTS `wp_wfCrawlers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_wfCrawlers` (
  `IP` binary(16) NOT NULL DEFAULT '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',
  `patternSig` binary(16) NOT NULL,
  `status` char(8) NOT NULL,
  `lastUpdate` int(10) unsigned NOT NULL,
  `PTR` varchar(255) DEFAULT '',
  PRIMARY KEY (`IP`,`patternSig`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_wfCrawlers`
--

LOCK TABLES `wp_wfCrawlers` WRITE;
/*!40000 ALTER TABLE `wp_wfCrawlers` DISABLE KEYS */;
INSERT INTO `wp_wfCrawlers` VALUES ('\0\0\0\0\0\0\0\0\0\0ˇˇB˘@Å','ã¸¿ïê>çb0´oQ1åˆ','verified',1456109608,'crawl-66-249-64-129.googlebot.com'),('\0\0\0\0\0\0\0\0\0\0ˇˇB˘@á','ã¸¿ïê>çb0´oQ1åˆ','verified',1456141165,'crawl-66-249-64-135.googlebot.com'),('\0\0\0\0\0\0\0\0\0\0ˇˇB˘@˙','ã¸¿ïê>çb0´oQ1åˆ','verified',1456118232,'crawl-66-249-64-250.googlebot.com'),('\0\0\0\0\0\0\0\0\0\0ˇˇB˘A','ã¸¿ïê>çb0´oQ1åˆ','verified',1456427167,'crawl-66-249-65-2.googlebot.com'),('\0\0\0\0\0\0\0\0\0\0ˇˇB˘A','ã¸¿ïê>çb0´oQ1åˆ','verified',1456427168,'crawl-66-249-65-6.googlebot.com'),('\0\0\0\0\0\0\0\0\0\0ˇˇB˘B¨','ã¸¿ïê>çb0´oQ1åˆ','verified',1456256377,'crawl-66-249-66-172.googlebot.com'),('\0\0\0\0\0\0\0\0\0\0ˇˇB˘BØ','ã¸¿ïê>çb0´oQ1åˆ','verified',1456264869,'crawl-66-249-66-175.googlebot.com'),('\0\0\0\0\0\0\0\0\0\0ˇˇB˘B≤','ã¸¿ïê>çb0´oQ1åˆ','verified',1456247114,'crawl-66-249-66-178.googlebot.com'),('\0\0\0\0\0\0\0\0\0\0ˇˇB˘E:','ã¸¿ïê>çb0´oQ1åˆ','verified',1456034615,'crawl-66-249-69-58.googlebot.com'),('\0\0\0\0\0\0\0\0\0\0ˇˇB˘EJ','ã¸¿ïê>çb0´oQ1åˆ','verified',1456636585,'crawl-66-249-69-74.googlebot.com');
/*!40000 ALTER TABLE `wp_wfCrawlers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-02 23:53:32

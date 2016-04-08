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
-- Table structure for table `wp_wfNet404s`
--

DROP TABLE IF EXISTS `wp_wfNet404s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_wfNet404s` (
  `sig` binary(16) NOT NULL,
  `ctime` int(10) unsigned NOT NULL,
  `URI` varchar(1000) NOT NULL,
  PRIMARY KEY (`sig`),
  KEY `k1` (`ctime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_wfNet404s`
--

LOCK TABLES `wp_wfNet404s` WRITE;
/*!40000 ALTER TABLE `wp_wfNet404s` DISABLE KEYS */;
INSERT INTO `wp_wfNet404s` VALUES ('5ﬂé]v\ÃQ\≈›∑©j-°',1456703147,'/wp-content/themes/ilcm/assets/js/main.min.js'),('≤&9ÅfÚ∂ÛÇ\\\‡e\Ã',1456703146,'/wp-content/themes/ilcm/assets/js/vendor/navigation.js'),('–ü\ﬁ\Ëﬁ†\Èö\≈®\«|¶\r',1456703146,'/wp-content/themes/ilcm/assets/js/plugins.min.js'),('Ùıˆ™&,€ìmü\Ÿaöù\\',1456703146,'/wp-content/themes/ilcm/assets/js/vendor/skip-link-focus-fix.js');
/*!40000 ALTER TABLE `wp_wfNet404s` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-02 23:53:26

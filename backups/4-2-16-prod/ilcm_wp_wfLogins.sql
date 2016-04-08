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
-- Table structure for table `wp_wfLogins`
--

DROP TABLE IF EXISTS `wp_wfLogins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_wfLogins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ctime` double(17,6) unsigned NOT NULL,
  `fail` tinyint(3) unsigned NOT NULL,
  `action` varchar(40) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userID` int(10) unsigned NOT NULL,
  `IP` binary(16) DEFAULT NULL,
  `UA` text,
  PRIMARY KEY (`id`),
  KEY `k1` (`IP`,`fail`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_wfLogins`
--

LOCK TABLES `wp_wfLogins` WRITE;
/*!40000 ALTER TABLE `wp_wfLogins` DISABLE KEYS */;
INSERT INTO `wp_wfLogins` VALUES (1,1454381998.609600,0,'logout','amrit',2,'\0\0\0\0\0\0\0\0\0\0ÿÿ\Î7Ø•','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.97 Safari/537.36'),(2,1454626220.845106,0,'loginOK','amrit',2,'\0\0\0\0\0\0\0\0\0\0ÿÿEŠ\Z3','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.97 Safari/537.36'),(3,1454626273.804419,0,'loginOK','amrit',2,'\0\0\0\0\0\0\0\0\0\0ÿÿFcp2','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.97 Safari/537.36'),(4,1455726882.663490,0,'loginOK','admin',1,'\0\0\0\0\0\0\0\0\0\0ÿÿFcp2','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36'),(5,1455727542.832939,0,'loginOK','admin',1,'\0\0\0\0\0\0\0\0\0\0ÿÿFcp2','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0'),(6,1455898460.418850,0,'loginOK','admin',1,'\0\0\0\0\0\0\0\0\0\0ÿÿFcp2','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0'),(7,1455900552.181504,0,'logout','admin',1,'\0\0\0\0\0\0\0\0\0\0ÿÿFcp2','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0'),(8,1455930029.354457,0,'loginOK','admin',1,'\0\0\0\0\0\0\0\0\0\0ÿÿI\'6l','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.97 Safari/537.36'),(9,1456111362.222737,0,'loginOK','amrit',2,'\0\0\0\0\0\0\0\0\0\0ÿÿ\Î7Ø•','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36'),(10,1456111365.323250,0,'loginOK','amrit',2,'\0\0\0\0\0\0\0\0\0\0ÿÿ\Î7Ø•','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36'),(11,1456112969.855096,1,'loginFailInvalidUsername','root',0,'\0\0\0\0\0\0\0\0\0\0ÿÿI\'6l','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.97 Safari/537.36'),(12,1456112975.093959,1,'loginFailInvalidUsername','root',0,'\0\0\0\0\0\0\0\0\0\0ÿÿI\'6l','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.97 Safari/537.36'),(13,1456112982.304392,0,'loginOK','admin',1,'\0\0\0\0\0\0\0\0\0\0ÿÿI\'6l','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.97 Safari/537.36'),(14,1456154032.899086,0,'loginOK','admin',1,'\0\0\0\0\0\0\0\0\0\0ÿÿFcp2','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0'),(15,1456255802.401660,0,'loginOK','admin',1,'\0\0\0\0\0\0\0\0\0\0ÿÿFcp2','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36'),(16,1456256303.177311,0,'loginOK','admin',1,'\0\0\0\0\0\0\0\0\0\0ÿÿFcp2','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0'),(17,1456326223.434565,0,'loginOK','admin',1,'\0\0\0\0\0\0\0\0\0\0ÿÿFcp2','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0'),(18,1456362813.171371,0,'loginOK','admin',1,'\0\0\0\0\0\0\0\0\0\0ÿÿI\'6l','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36'),(19,1456703278.266129,0,'loginOK','admin',1,'\0\0\0\0\0\0\0\0\0\0ÿÿI\'6l','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36');
/*!40000 ALTER TABLE `wp_wfLogins` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-02 23:53:08

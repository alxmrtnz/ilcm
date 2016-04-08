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
-- Table structure for table `wp_term_relationships`
--

DROP TABLE IF EXISTS `wp_term_relationships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_term_relationships`
--

LOCK TABLES `wp_term_relationships` WRITE;
/*!40000 ALTER TABLE `wp_term_relationships` DISABLE KEYS */;
INSERT INTO `wp_term_relationships` VALUES (1,1,0),(11,21,0),(17,2,0),(18,2,0),(19,2,0),(20,2,0),(23,11,0),(26,27,0),(28,19,0),(32,3,0),(33,3,0),(34,3,0),(35,3,0),(42,1,0),(54,8,0),(56,8,0),(58,4,0),(59,4,0),(78,8,0),(80,4,0),(82,8,0),(93,8,0),(102,4,0),(106,4,0),(108,23,0),(114,2,0),(122,6,0),(125,9,0),(127,5,0),(129,6,0),(131,6,0),(135,5,0),(136,5,0),(143,10,0),(144,9,0),(147,10,0),(150,9,0),(152,10,0),(156,12,0),(157,11,0),(159,12,0),(160,11,0),(162,11,0),(164,11,0),(166,11,0),(168,12,0),(169,12,0),(170,12,0),(171,12,0),(179,16,0),(195,11,0),(197,12,0),(245,17,0),(247,18,0),(248,19,0),(250,19,0),(252,18,0),(253,18,0),(254,19,0),(256,18,0),(257,3,0),(258,3,0),(271,3,0),(272,3,0),(274,19,0),(276,18,0),(297,21,0),(299,21,0),(301,20,0),(302,20,0),(303,20,0),(306,21,0),(312,21,0),(314,20,0),(315,20,0),(316,21,0),(318,20,0),(321,19,0),(324,18,0),(338,3,0),(339,3,0),(340,3,0),(341,3,0),(342,3,0),(343,3,0),(357,3,0),(358,3,0),(359,23,0),(361,17,0),(371,24,0),(372,24,0),(373,24,0),(374,24,0),(375,25,0),(376,26,0),(377,26,0),(378,26,0),(379,26,0),(380,26,0),(449,27,0),(451,28,0),(452,28,0),(453,3,0);
/*!40000 ALTER TABLE `wp_term_relationships` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-02 23:53:29

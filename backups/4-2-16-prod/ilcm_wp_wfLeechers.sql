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
-- Table structure for table `wp_wfLeechers`
--

DROP TABLE IF EXISTS `wp_wfLeechers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_wfLeechers` (
  `eMin` int(10) unsigned NOT NULL,
  `IP` binary(16) NOT NULL DEFAULT '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',
  `hits` int(10) unsigned NOT NULL,
  PRIMARY KEY (`eMin`,`IP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_wfLeechers`
--

LOCK TABLES `wp_wfLeechers` WRITE;
/*!40000 ALTER TABLE `wp_wfLeechers` DISABLE KEYS */;
INSERT INTO `wp_wfLeechers` VALUES (24274302,'\0\0\0\0\0\0\0\0\0\0ˇˇ¥L',1),(24274357,'\0\0\0\0\0\0\0\0\0\0ˇˇπpf¶',1),(24274387,'\0\0\0\0\0\0\0\0\0\0ˇˇU+\Á',1),(24274393,'\0\0\0\0\0\0\0\0\0\0ˇˇπpf©',1),(24274745,'\0\0\0\0\0\0\0\0\0\0ˇˇqLZ\ƒ',1),(24275200,'\0\0\0\0\0\0\0\0\0\0ˇˇB˘S\Ì',1),(24275411,'\0\0\0\0\0\0\0\0\0\0ˇˇñF≠+',1),(24275411,'\0\0\0\0\0\0\0\0\0\0ˇˇñF≠8',1),(24275517,'\0\0\0\0\0\0\0\0\0\0ˇˇπ(Q',1),(24276169,'\0\0\0\0\0\0\0\0\0\0ˇˇ¥Lã',1),(24276203,'\0\0\0\0\0\0\0\0\0\0ˇˇ¥L',1),(24276236,'\0\0\0\0\0\0\0\0\0\0ˇˇ¥Lï',1),(24276270,'\0\0\0\0\0\0\0\0\0\0ˇˇ¥L\"',1),(24276303,'\0\0\0\0\0\0\0\0\0\0ˇˇ¥L',1),(24276337,'\0\0\0\0\0\0\0\0\0\0ˇˇ¥Lú',1),(24276615,'\0\0\0\0\0\0\0\0\0\0ˇˇ•π',1),(24276675,'\0\0\0\0\0\0\0\0\0\0ˇˇ¥L',1),(24277592,'\0\0\0\0\0\0\0\0\0\0ˇˇrpZ6',1),(24278147,'\0\0\0\0\0\0\0\0\0\0ˇˇGáÉ',2),(24278226,'\0\0\0\0\0\0\0\0\0\0ˇˇ¥Lù',1),(24278269,'\0\0\0\0\0\0\0\0\0\0ˇˇπpf™',1),(24278366,'\0\0\0\0\0\0\0\0\0\0ˇˇ¥Lã',1),(24278385,'\0\0\0\0\0\0\0\0\0\0ˇˇI\'6l',1),(24278386,'\0\0\0\0\0\0\0\0\0\0ˇˇI\'6l',2);
/*!40000 ALTER TABLE `wp_wfLeechers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-02 23:53:11

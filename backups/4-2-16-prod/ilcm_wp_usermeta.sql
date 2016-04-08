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
-- Table structure for table `wp_usermeta`
--

DROP TABLE IF EXISTS `wp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_usermeta`
--

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;
INSERT INTO `wp_usermeta` VALUES (1,1,'nickname','admin'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'comment_shortcuts','false'),(7,1,'admin_color','fresh'),(8,1,'use_ssl','0'),(9,1,'show_admin_bar_front','true'),(10,1,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(11,1,'wp_user_level','10'),(12,1,'dismissed_wp_pointers','wp360_locks,wp390_widgets'),(13,1,'show_welcome_panel','1'),(15,1,'wp_dashboard_quick_press_last_post_id','420'),(16,1,'managenav-menuscolumnshidden','a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),(17,1,'metaboxhidden_nav-menus','a:2:{i:0;s:12:\"add-post_tag\";i:1;s:15:\"add-post_format\";}'),(18,1,'nav_menu_recently_edited','3'),(19,1,'wp_user-settings','libraryContent=browse&editor=tinymce&wplink=1&hidetb=1'),(20,1,'wp_user-settings-time','1459653563'),(21,1,'closedpostboxes_post','a:1:{i:0;s:9:\"formatdiv\";}'),(22,1,'metaboxhidden_post','a:8:{i:0;s:12:\"revisionsdiv\";i:1;s:11:\"postexcerpt\";i:2;s:13:\"trackbacksdiv\";i:3;s:10:\"postcustom\";i:4;s:16:\"commentstatusdiv\";i:5;s:11:\"commentsdiv\";i:6;s:7:\"slugdiv\";i:7;s:9:\"authordiv\";}'),(23,1,'closedpostboxes_page','a:4:{i:0;s:12:\"postimagediv\";i:1;s:16:\"tagsdiv-post_tag\";i:2;s:16:\"rawhtml_meta_box\";i:3;s:16:\"commentstatusdiv\";}'),(24,1,'metaboxhidden_page','a:16:{i:0;s:6:\"acf_69\";i:1;s:7:\"acf_365\";i:2;s:7:\"acf_367\";i:3;s:7:\"acf_285\";i:4;s:7:\"acf_385\";i:5;s:7:\"acf_399\";i:6;s:7:\"acf_190\";i:7;s:7:\"acf_200\";i:8;s:7:\"acf_261\";i:9;s:6:\"acf_76\";i:10;s:6:\"acf_44\";i:11;s:7:\"acf_115\";i:12;s:6:\"acf_95\";i:13;s:10:\"postcustom\";i:14;s:7:\"slugdiv\";i:15;s:9:\"authordiv\";}'),(25,1,'meta-box-order_page','a:4:{s:15:\"acf_after_title\";s:6:\"acf_69\";s:4:\"side\";s:82:\"submitdiv,pageparentdiv,categorydiv,postimagediv,tagsdiv-post_tag,rawhtml_meta_box\";s:6:\"normal\";s:130:\"acf_190,acf_200,acf_261,acf_76,acf_44,acf_115,acf_89,acf_95,postcustom,commentstatusdiv,commentsdiv,slugdiv,authordiv,revisionsdiv\";s:8:\"advanced\";s:0:\"\";}'),(26,1,'screen_layout_page','2'),(27,2,'session_tokens','a:1:{s:64:\"6738337aecdebaedff9c37e31171c7b566c6387c2fd01066e92a066684dd94a6\";a:4:{s:10:\"expiration\";i:1447821435;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36\";s:5:\"login\";i:1447648635;}}'),(28,2,'wp_user_level','10'),(29,2,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(30,1,'meta-box-order_news-post','a:4:{s:15:\"acf_after_title\";s:6:\"acf_69\";s:4:\"side\";s:50:\"submitdiv,wpt_featured_news,topicsdiv,postimagediv\";s:6:\"normal\";s:43:\"acf_76,acf_44,acf_115,acf_89,acf_95,slugdiv\";s:8:\"advanced\";s:0:\"\";}'),(31,1,'screen_layout_news-post','2'),(32,1,'closedpostboxes_news-post','a:1:{i:0;s:6:\"acf_44\";}'),(33,1,'closedpostboxes_news-post','a:1:{i:0;s:6:\"acf_44\";}'),(34,1,'metaboxhidden_news-post','a:8:{i:0;s:6:\"acf_69\";i:1;s:7:\"acf_190\";i:2;s:7:\"acf_200\";i:3;s:6:\"acf_76\";i:4;s:7:\"acf_115\";i:5;s:6:\"acf_89\";i:6;s:6:\"acf_95\";i:7;s:7:\"slugdiv\";}'),(35,1,'metaboxhidden_news-post','a:8:{i:0;s:6:\"acf_69\";i:1;s:7:\"acf_190\";i:2;s:7:\"acf_200\";i:3;s:6:\"acf_76\";i:4;s:7:\"acf_115\";i:5;s:6:\"acf_89\";i:6;s:6:\"acf_95\";i:7;s:7:\"slugdiv\";}'),(36,1,'session_tokens','a:2:{s:64:\"d629026b6ccf84428fd8c8abf10d164b8374356f5dfe607b2fbf09442a673e0e\";a:4:{s:10:\"expiration\";i:1460548753;s:2:\"ip\";s:12:\"73.39.54.108\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36\";s:5:\"login\";i:1459339153;}s:64:\"e3147c9dd65236b32cca24078de595ea67df7ddefb60b966028ccd4b6b0c11e9\";a:4:{s:10:\"expiration\";i:1459819720;s:2:\"ip\";s:12:\"73.39.54.108\";s:2:\"ua\";s:121:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36\";s:5:\"login\";i:1459646920;}}'),(37,1,'closedpostboxes_dashboard','a:1:{i:0;s:19:\"dashboard_right_now\";}'),(38,1,'metaboxhidden_dashboard','a:0:{}'),(39,1,'closedpostboxes_board-members','a:0:{}'),(40,1,'metaboxhidden_board-members','a:8:{i:0;s:6:\"acf_69\";i:1;s:7:\"acf_200\";i:2;s:6:\"acf_76\";i:3;s:6:\"acf_44\";i:4;s:7:\"acf_115\";i:5;s:6:\"acf_89\";i:6;s:6:\"acf_95\";i:7;s:7:\"slugdiv\";}'),(41,1,'meta-box-order_board-members','a:4:{s:15:\"acf_after_title\";s:6:\"acf_69\";s:4:\"side\";s:9:\"submitdiv\";s:6:\"normal\";s:59:\"acf_190,acf_200,acf_76,acf_44,acf_115,acf_89,acf_95,slugdiv\";s:8:\"advanced\";s:0:\"\";}'),(42,1,'screen_layout_board-members','2'),(43,1,'default_password_nag','');
/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-02 23:53:27

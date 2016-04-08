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
-- Table structure for table `wp_wfConfig`
--

DROP TABLE IF EXISTS `wp_wfConfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_wfConfig` (
  `name` varchar(100) NOT NULL,
  `val` longblob,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_wfConfig`
--

LOCK TABLES `wp_wfConfig` WRITE;
/*!40000 ALTER TABLE `wp_wfConfig` DISABLE KEYS */;
INSERT INTO `wp_wfConfig` VALUES ('actUpdateInterval',''),('addCacheComment','0'),('advancedCommentScanning','0'),('alertEmails','amrit@reachws.com'),('alertOn_adminLogin','1'),('alertOn_block','1'),('alertOn_critical','1'),('alertOn_loginLockout','1'),('alertOn_lostPasswdForm','1'),('alertOn_nonAdminLogin','0'),('alertOn_throttle','0'),('alertOn_update','0'),('alertOn_warnings','1'),('alert_maxHourly','0'),('allowed404s','/favicon.ico\r\n/apple-touch-icon*.png\r\n/*@2x.png'),('allowHTTPSCaching','0'),('apiKey','3bb8b670a9b16cb90f5611de4920406fb2f02049bb0020cf3b5abfd61fdcc404221d72720e29717c9fae53d7f07c70c78cf26f6472165fff280798fed46fe9c5'),('autoBlockScanners','0'),('autoUpdate','1'),('autoUpdateChoice','1'),('bannedURLs',''),('blockedTime','300'),('blockFakeBots','0'),('cbl_restOfSiteBlocked','1'),('checkSpamIP','0'),('currentCronKey',''),('debugOn','0'),('deleteTablesOnDeact','0'),('disableCodeExecutionUploads','0'),('disableConfigCaching','0'),('disableCookies','0'),('email_summary_dashboard_widget_enabled','1'),('email_summary_enabled','1'),('email_summary_excluded_directories','wp-content/cache,wp-content/wfcache,wp-content/plugins/wordfence/tmp'),('email_summary_interval','biweekly'),('encKey','376a983e11a9c5bc'),('firewallEnabled','1'),('howGetIPs',''),('lastAdminLogin','a:6:{s:6:\"userID\";i:1;s:8:\"username\";s:5:\"admin\";s:9:\"firstName\";s:0:\"\";s:8:\"lastName\";s:0:\"\";s:4:\"time\";s:30:\"Sun 28th February @ 11:47:58PM\";s:2:\"IP\";s:12:\"73.39.54.108\";}'),('lastEmailHash','1456703278:34c7f1c63201839867787dd6d93e9b2c'),('lastScanCompleted','ok'),('lastScheduledScanStart','1456688834'),('liveTrafficEnabled','1'),('liveTraf_ignoreIPs',''),('liveTraf_ignorePublishers','1'),('liveTraf_ignoreUA',''),('liveTraf_ignoreUsers',''),('loginSecurityEnabled','1'),('loginSec_blockAdminReg','1'),('loginSec_countFailMins','5'),('loginSec_disableAuthorScan','1'),('loginSec_lockInvalidUsers','0'),('loginSec_lockoutMins','5'),('loginSec_maskLoginErrors','1'),('loginSec_maxFailures','20'),('loginSec_maxForgotPasswd','20'),('loginSec_strongPasswds','pubs'),('loginSec_userBlacklist',''),('max404Crawlers','DISABLED'),('max404Crawlers_action','throttle'),('max404Humans','DISABLED'),('max404Humans_action','throttle'),('maxExecutionTime',''),('maxGlobalRequests','DISABLED'),('maxGlobalRequests_action','throttle'),('maxMem','256'),('maxRequestsCrawlers','DISABLED'),('maxRequestsCrawlers_action','throttle'),('maxRequestsHumans','DISABLED'),('maxRequestsHumans_action','throttle'),('maxScanHits','DISABLED'),('maxScanHits_action','throttle'),('neverBlockBG','neverBlockVerified'),('other_blockBadPOST','0'),('other_hideWPVersion','1'),('other_noAnonMemberComments','1'),('other_pwStrengthOnUpdate','1'),('other_scanComments','1'),('other_scanOutside','0'),('other_WFNet','1'),('scanFileProcessing',''),('scansEnabled_comments','1'),('scansEnabled_core','1'),('scansEnabled_database','1'),('scansEnabled_diskSpace','1'),('scansEnabled_dns','1'),('scansEnabled_fileContents','1'),('scansEnabled_heartbleed','1'),('scansEnabled_highSense','0'),('scansEnabled_malware','1'),('scansEnabled_oldVersions','1'),('scansEnabled_options','0'),('scansEnabled_passwds','1'),('scansEnabled_plugins','0'),('scansEnabled_posts','1'),('scansEnabled_public','0'),('scansEnabled_scanImages','0'),('scansEnabled_themes','0'),('scan_exclude',''),('scheduledScansEnabled','1'),('securityLevel','2'),('spamvertizeCheck','0'),('ssl_verify','1'),('startScansRemotely','0'),('totalAlertsSent','15'),('totalLoginHits','246'),('totalLogins','15'),('totalScansRun','51'),('tourClosed','1'),('vulnRegex','/(?:wordfence_test_vuln_match|\\/timthumb\\.php|\\/thumb\\.php|\\/thumbs\\.php|\\/thumbnail\\.php|\\/thumbnails\\.php|\\/thumnails\\.php|\\/cropper\\.php|\\/picsize\\.php|\\/resizer\\.php|connectors\\/uploadtest\\.html|connectors\\/test\\.html|mingleforumaction|uploadify\\.php|allwebmenus-wordpress-menu-plugin|wp-cycle-playlist|count-per-day|wp-autoyoutube|pay-with-tweet|comment-rating\\/ck-processkarma\\.php)/i'),('welcomeClosed','1'),('wfKillRequested','0'),('wfPeakMemory','30811560'),('wfsd_engine',''),('wfStatusStartMsgs','a:14:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";}'),('wf_dnsA',''),('wf_dnsCNAME',''),('wf_dnsLogged','1'),('wf_dnsMX',''),('wf_scanRunning',''),('wf_summaryItems','a:16:{s:10:\"totalUsers\";i:2;s:10:\"totalPages\";s:2:\"36\";s:10:\"totalPosts\";s:1:\"2\";s:13:\"totalComments\";s:1:\"1\";s:15:\"totalCategories\";s:1:\"7\";s:11:\"totalTables\";i:32;s:9:\"totalRows\";i:7865;s:12:\"totalPlugins\";i:8;s:10:\"lastUpdate\";i:1456688862;s:11:\"totalThemes\";i:2;s:9:\"totalData\";s:8:\"60.66 MB\";s:10:\"totalFiles\";i:2132;s:9:\"totalDirs\";i:201;s:10:\"linesOfPHP\";i:339893;s:10:\"linesOfJCH\";i:194878;s:8:\"scanTime\";d:1456688862.362;}'),('whitelisted','');
/*!40000 ALTER TABLE `wp_wfConfig` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-02 23:53:24

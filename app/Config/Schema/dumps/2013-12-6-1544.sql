-- MySQL dump 10.13  Distrib 5.5.34, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mexicovr
-- ------------------------------------------------------
-- Server version	5.5.34-0ubuntu0.12.04.1

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
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,306),(2,1,NULL,NULL,'Account',2,17),(3,2,NULL,NULL,'register',3,4),(4,2,NULL,NULL,'activate',5,6),(5,2,NULL,NULL,'index',7,8),(6,2,NULL,NULL,'login',9,10),(8,2,NULL,NULL,'logout',11,12),(9,2,NULL,NULL,'forgot_password',13,14),(10,1,NULL,NULL,'Config',18,21),(11,10,NULL,NULL,'index',19,20),(12,1,NULL,NULL,'Contact',22,25),(13,12,NULL,NULL,'index',23,24),(14,1,NULL,NULL,'Home',26,29),(15,14,NULL,NULL,'index',27,28),(16,1,NULL,NULL,'Pages',30,41),(18,1,NULL,NULL,'Permissions',42,55),(19,18,NULL,NULL,'index',43,44),(20,18,NULL,NULL,'show_aco_tree',45,46),(21,18,NULL,NULL,'add',47,48),(22,18,NULL,NULL,'delete',49,50),(23,18,NULL,NULL,'show_aro',51,52),(24,18,NULL,NULL,'aco_sync',53,54),(25,1,NULL,NULL,'Roles',56,67),(26,25,NULL,NULL,'index',57,58),(27,25,NULL,NULL,'view',59,60),(28,25,NULL,NULL,'add',61,62),(29,25,NULL,NULL,'edit',63,64),(30,25,NULL,NULL,'delete',65,66),(31,1,NULL,NULL,'Users',68,79),(32,31,NULL,NULL,'index',69,70),(33,31,NULL,NULL,'view',71,72),(34,31,NULL,NULL,'add',73,74),(35,31,NULL,NULL,'edit',75,76),(36,31,NULL,NULL,'delete',77,78),(37,1,NULL,NULL,'AclExtras',80,81),(38,1,NULL,NULL,'Blog',82,95),(39,38,NULL,NULL,'Blog',83,94),(40,39,NULL,NULL,'index',84,85),(41,39,NULL,NULL,'view',86,87),(42,39,NULL,NULL,'add',88,89),(43,39,NULL,NULL,'edit',90,91),(44,39,NULL,NULL,'delete',92,93),(45,1,NULL,NULL,'DebugKit',96,103),(46,45,NULL,NULL,'ToolbarAccess',97,102),(47,46,NULL,NULL,'history_state',98,99),(48,46,NULL,NULL,'sql_explain',100,101),(49,1,NULL,NULL,'Recaptcha',104,105),(53,1,NULL,NULL,'Activities',106,117),(54,53,NULL,NULL,'index',107,108),(55,53,NULL,NULL,'view',109,110),(56,53,NULL,NULL,'add',111,112),(57,53,NULL,NULL,'edit',113,114),(58,53,NULL,NULL,'delete',115,116),(59,1,NULL,NULL,'Advertisements',118,133),(60,59,NULL,NULL,'index',119,120),(61,59,NULL,NULL,'view',121,122),(62,59,NULL,NULL,'add',123,124),(63,59,NULL,NULL,'edit',125,126),(64,59,NULL,NULL,'delete',127,128),(65,59,NULL,NULL,'advertise',129,130),(66,1,NULL,NULL,'MiscellaneousItems',134,145),(67,66,NULL,NULL,'index',135,136),(68,66,NULL,NULL,'view',137,138),(69,66,NULL,NULL,'add',139,140),(70,66,NULL,NULL,'edit',141,142),(71,66,NULL,NULL,'delete',143,144),(72,1,NULL,NULL,'Packages',146,157),(73,72,NULL,NULL,'index',147,148),(74,72,NULL,NULL,'view',149,150),(75,72,NULL,NULL,'add',151,152),(76,72,NULL,NULL,'edit',153,154),(77,72,NULL,NULL,'delete',155,156),(78,16,NULL,NULL,'index',31,32),(79,16,NULL,NULL,'view',33,34),(80,16,NULL,NULL,'add',35,36),(81,16,NULL,NULL,'edit',37,38),(82,16,NULL,NULL,'delete',39,40),(83,1,NULL,NULL,'PaymentTypes',158,169),(84,83,NULL,NULL,'index',159,160),(85,83,NULL,NULL,'view',161,162),(86,83,NULL,NULL,'add',163,164),(87,83,NULL,NULL,'edit',165,166),(88,83,NULL,NULL,'delete',167,168),(89,1,NULL,NULL,'Properties',170,181),(90,89,NULL,NULL,'index',171,172),(91,89,NULL,NULL,'view',173,174),(92,89,NULL,NULL,'add',175,176),(93,89,NULL,NULL,'edit',177,178),(94,89,NULL,NULL,'delete',179,180),(95,1,NULL,NULL,'PropertyActivities',182,193),(96,95,NULL,NULL,'index',183,184),(97,95,NULL,NULL,'view',185,186),(98,95,NULL,NULL,'add',187,188),(99,95,NULL,NULL,'edit',189,190),(100,95,NULL,NULL,'delete',191,192),(101,1,NULL,NULL,'PropertyMiscellaneousItems',194,205),(102,101,NULL,NULL,'index',195,196),(103,101,NULL,NULL,'view',197,198),(104,101,NULL,NULL,'add',199,200),(105,101,NULL,NULL,'edit',201,202),(106,101,NULL,NULL,'delete',203,204),(107,1,NULL,NULL,'PropertyPaymentTypes',206,217),(108,107,NULL,NULL,'index',207,208),(109,107,NULL,NULL,'view',209,210),(110,107,NULL,NULL,'add',211,212),(111,107,NULL,NULL,'edit',213,214),(112,107,NULL,NULL,'delete',215,216),(113,1,NULL,NULL,'PropertyPhotos',218,229),(114,113,NULL,NULL,'index',219,220),(115,113,NULL,NULL,'view',221,222),(116,113,NULL,NULL,'add',223,224),(117,113,NULL,NULL,'edit',225,226),(118,113,NULL,NULL,'delete',227,228),(119,1,NULL,NULL,'PropertyRates',230,241),(120,119,NULL,NULL,'index',231,232),(121,119,NULL,NULL,'view',233,234),(122,119,NULL,NULL,'add',235,236),(123,119,NULL,NULL,'edit',237,238),(124,119,NULL,NULL,'delete',239,240),(125,1,NULL,NULL,'PropertyReservations',242,253),(126,125,NULL,NULL,'index',243,244),(127,125,NULL,NULL,'view',245,246),(128,125,NULL,NULL,'add',247,248),(129,125,NULL,NULL,'edit',249,250),(130,125,NULL,NULL,'delete',251,252),(131,1,NULL,NULL,'PropertyReviews',254,265),(132,131,NULL,NULL,'index',255,256),(133,131,NULL,NULL,'view',257,258),(134,131,NULL,NULL,'add',259,260),(135,131,NULL,NULL,'edit',261,262),(136,131,NULL,NULL,'delete',263,264),(137,1,NULL,NULL,'Reservations',266,277),(138,137,NULL,NULL,'index',267,268),(139,137,NULL,NULL,'view',269,270),(140,137,NULL,NULL,'add',271,272),(141,137,NULL,NULL,'edit',273,274),(142,137,NULL,NULL,'delete',275,276),(143,1,NULL,NULL,'Reviews',278,289),(144,143,NULL,NULL,'index',279,280),(145,143,NULL,NULL,'view',281,282),(146,143,NULL,NULL,'add',283,284),(147,143,NULL,NULL,'edit',285,286),(148,143,NULL,NULL,'delete',287,288),(149,1,NULL,NULL,'Seasons',290,301),(150,149,NULL,NULL,'index',291,292),(151,149,NULL,NULL,'view',293,294),(152,149,NULL,NULL,'add',295,296),(153,149,NULL,NULL,'edit',297,298),(154,149,NULL,NULL,'delete',299,300),(155,1,NULL,NULL,'Composer',302,303),(156,2,NULL,NULL,'confirm_registration',15,16),(157,59,NULL,NULL,'preview',131,132),(158,1,NULL,NULL,'Uploader',304,305);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activities`
--

LOCK TABLES `activities` WRITE;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `advertisements`
--

DROP TABLE IF EXISTS `advertisements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `advertisements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_small` varchar(255) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `propertyContact` varchar(50) NOT NULL,
  `propertyPrice` float(7,2) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advertisements`
--

LOCK TABLES `advertisements` WRITE;
/*!40000 ALTER TABLE `advertisements` DISABLE KEYS */;
INSERT INTO `advertisements` VALUES (2,'Property 1','files/uploads/Desert.jpg','files/uploads/Desert-resize-215x115-small.jpg','If you don’t care for the overrun beaches that currently draw the crowds in South Carolina, try discovering Folly Beach. Folly Beach has a quaint, family atmosphere that absolutely charming. The atmosphere is very laid-back and relaxing.','Some of the greatest spots to vacation go largely unnoticed. Here are some of the top unknown vacation spots in America:\n\n\nIf you aren’t interested in the crowded beaches in Miami, visit Amelia Island. Amelia Island is a great place to discover seashells and to observe the wildlife, such as the turtle nests, eggs and baby turtles that are abundant there. This is a great area to ride horseback and to go hiking. This island also has a military fort that dates back to the Civil War to visit.\n\n\n\nThose longing for the great outdoors without the crowds at Grand Teton National Park need only go to the other side of the mountain. The Teton Range allows for the same adventures of the park without the crowds. The fly fishing is great and there are hiking and biking trails as well as camping and kayaking to enjoy.\n\n\n\nIf you don’t care for the overrun beaches that currently draw the crowds in South Carolina, try discovering Folly Beach. Folly Beach has a quaint, family atmosphere that absolutely charming. The atmosphere is very laid-back and relaxing.\n\n\n\nWay down in the foothills of the Smoky Mountains, Pigeon Forge has an array of activities for everyone. Amusement Parks, miniature golfing and outlet mall shopping are some of the activities there. Gatlinburg is only a few minutes south and is a resort atmosphere. There are a multitude of attractions here to discover.   Some of the greatest spots to vacation go largely unnoticed. Here are some of the top unknown vacation spots in America:\n\n\nIf you aren’t interested in the crowded beaches in Miami, visit Amelia Island. Amelia Island is a great place to discover seashells and to observe the wildlife, such as the turtle nests, eggs and baby turtles that are abundant there. This is a great area to ride horseback and to go hiking. This island also has a military fort that dates back to the Civil War to visit.\n\n\n\nThose longing for the great outdoors without the crowds at Grand Teton National Park need only go to the other side of the mountain. The Teton Range allows for the same adventures of the park without the crowds. The fly fishing is great and there are hiking and biking trails as well as camping and kayaking to enjoy.\n\n\n\nIf you don’t care for the overrun beaches that currently draw the crowds in South Carolina, try discovering Folly Beach. Folly Beach has a quaint, family atmosphere that absolutely charming. The atmosphere is very laid-back and relaxing.\n\n\n\nWay down in the foothills of the Smoky Mountains, Pigeon Forge has an array of activities for everyone. Amusement Parks, miniature golfing and outlet mall shopping are some of the activities there. Gatlinburg is only a few minutes south and is a resort atmosphere. There are a multitude of attractions here to discover.','2 800 222-2222',239.99,0,'2013-11-18 06:32:53','0000-00-00 00:00:00'),(3,'Property 2','files/uploads/Desert.jpg','files/uploads/Desert-resize-215x115-small.jpg','Property 2 Description 1','Property 2 Description 2','1 800 555-5555',584.85,0,'2013-11-19 11:30:33','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `advertisements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Role',1,NULL,1,10),(2,NULL,'Role',2,NULL,11,92),(3,1,'User',3,NULL,2,3),(5,1,'User',5,NULL,6,7),(6,1,'User',6,NULL,8,9),(7,2,'User',2,NULL,12,13),(8,NULL,'Role',3,NULL,93,94),(9,NULL,'Role',4,NULL,95,96),(10,2,'User',3,NULL,14,15),(11,2,'User',4,NULL,16,17),(12,2,'User',5,NULL,18,19),(13,2,'User',6,NULL,20,21),(14,2,'User',7,NULL,22,23),(15,2,'User',8,NULL,24,25),(16,2,'User',9,NULL,26,27),(17,2,'User',10,NULL,28,29),(18,2,'User',11,NULL,30,31),(19,2,'User',12,NULL,32,33),(20,2,'User',13,NULL,34,35),(21,2,'User',14,NULL,36,37),(22,2,'User',15,NULL,38,39),(23,2,'User',16,NULL,40,41),(24,2,'User',17,NULL,42,43),(25,2,'User',18,NULL,44,45),(26,2,'User',19,NULL,46,47),(27,2,'User',20,NULL,48,49),(28,2,'User',21,NULL,50,51),(29,2,'User',22,NULL,52,53),(30,2,'User',23,NULL,54,55),(31,2,'User',24,NULL,56,57),(32,2,'User',25,NULL,58,59),(33,2,'User',26,NULL,60,61),(34,2,'User',27,NULL,62,63),(35,2,'User',28,NULL,64,65),(36,2,'User',29,NULL,66,67),(37,2,'User',30,NULL,68,69),(38,2,'User',31,NULL,70,71),(39,2,'User',32,NULL,72,73),(40,2,'User',33,NULL,74,75),(41,2,'User',34,NULL,76,77),(42,2,'User',35,NULL,78,79),(43,2,'User',36,NULL,80,81),(44,2,'User',37,NULL,82,83),(45,2,'User',38,NULL,84,85),(46,2,'User',39,NULL,86,87),(47,2,'User',40,NULL,88,89),(48,2,'User',41,NULL,90,91);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,1,1,'1','1','1','1'),(2,1,2,'1','1','1','1'),(3,1,14,'1','1','1','1'),(4,2,1,'-1','-1','-1','-1'),(5,2,2,'-1','-1','-1','-1'),(6,2,14,'1','1','1','1'),(7,8,1,'-1','-1','-1','-1'),(8,8,2,'1','1','1','1'),(9,8,14,'1','1','1','1'),(10,9,1,'-1','-1','-1','-1'),(11,9,2,'1','1','1','1'),(12,9,14,'1','1','1','1'),(13,2,56,'1','1','1','1'),(14,2,92,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`blog_id`),
  KEY `created_by` (`created_by`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `config` (
  `config_id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `var` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config`
--

LOCK TABLES `config` WRITE;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
/*!40000 ALTER TABLE `config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `miscellaneous_items`
--

DROP TABLE IF EXISTS `miscellaneous_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `miscellaneous_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `miscellaneous_items`
--

LOCK TABLES `miscellaneous_items` WRITE;
/*!40000 ALTER TABLE `miscellaneous_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `miscellaneous_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `photo_limit` int(11) NOT NULL,
  `is_audio_enabled` tinyint(4) NOT NULL,
  `is_video_enabled` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_types`
--

DROP TABLE IF EXISTS `payment_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_types`
--

LOCK TABLES `payment_types` WRITE;
/*!40000 ALTER TABLE `payment_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(32) NOT NULL,
  `state` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `rate` tinyint(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `package_id` int(11) NOT NULL,
  `additional_information` text NOT NULL,
  `listing_type` enum('rent','sale') NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `is_deleted` tinytext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_activities`
--

DROP TABLE IF EXISTS `property_activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_activities`
--

LOCK TABLES `property_activities` WRITE;
/*!40000 ALTER TABLE `property_activities` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_miscellaneous_items`
--

DROP TABLE IF EXISTS `property_miscellaneous_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_miscellaneous_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `miscellaneous_item_id` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_miscellaneous_items`
--

LOCK TABLES `property_miscellaneous_items` WRITE;
/*!40000 ALTER TABLE `property_miscellaneous_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_miscellaneous_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_payment_types`
--

DROP TABLE IF EXISTS `property_payment_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_payment_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_payment_types`
--

LOCK TABLES `property_payment_types` WRITE;
/*!40000 ALTER TABLE `property_payment_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_payment_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_photos`
--

DROP TABLE IF EXISTS `property_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_photos`
--

LOCK TABLES `property_photos` WRITE;
/*!40000 ALTER TABLE `property_photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_rates`
--

DROP TABLE IF EXISTS `property_rates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_rates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `season_id` int(11) NOT NULL,
  `from` tinyint(2) NOT NULL,
  `to` tinyint(2) NOT NULL,
  `night_rate` decimal(10,0) NOT NULL,
  `week_rate` decimal(10,0) NOT NULL,
  `month_rate` decimal(10,0) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_rates`
--

LOCK TABLES `property_rates` WRITE;
/*!40000 ALTER TABLE `property_rates` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_rates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email_address` varchar(128) NOT NULL,
  `arrival` date NOT NULL,
  `departure` date NOT NULL,
  `review` text NOT NULL,
  `rate` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `role_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','2013-08-28 16:04:01','2013-08-28 16:04:01'),(2,'user','2013-08-28 16:04:10','2013-11-20 10:52:55'),(3,'seller','2013-10-24 08:58:18','2013-10-24 08:58:18'),(4,'renter','2013-10-24 08:58:23','2013-10-24 08:58:23');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seasons`
--

DROP TABLE IF EXISTS `seasons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seasons`
--

LOCK TABLES `seasons` WRITE;
/*!40000 ALTER TABLE `seasons` DISABLE KEYS */;
/*!40000 ALTER TABLE `seasons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email_address` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `account_type` enum('renter','seller') NOT NULL DEFAULT 'renter',
  `phone` varchar(64) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(32) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `confirmation_key` varchar(255) DEFAULT NULL,
  `terms_and_conditions` datetime NOT NULL,
  `is_email_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_deleted` tinytext NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Dax','Panganiban','dax1216@gmail.com','','47056910acfb2435dc50b98d11e93e9dc2eb63c9','renter',NULL,NULL,'',NULL,NULL,NULL,NULL,'2013-08-28 16:07:48','2013-08-28 16:21:29','91da817cc99d0ac75df94949a92b14f1','0000-00-00 00:00:00',0,1,''),(2,1,'Daisy','Tudtud','daisytudtud@gmail.com','daisy','320ed5aace339b8491b7b8f8e9602d702fb52b18','renter',NULL,NULL,'',NULL,NULL,NULL,NULL,'2013-10-22 11:14:17','2013-10-22 11:14:17','f22c35a1b130298c32cef82834748d57','0000-00-00 00:00:00',1,1,'');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-12-06 15:44:33

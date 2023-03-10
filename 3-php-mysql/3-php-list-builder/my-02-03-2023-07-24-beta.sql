-- MariaDB dump 10.19  Distrib 10.5.12-MariaDB, for Linux (x86_64)
--
-- Host: mysql.hostinger.ro    Database: u574849695_22
-- ------------------------------------------------------
-- Server version	10.5.12-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `my`
--

DROP TABLE IF EXISTS `my`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `money` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my`
--

LOCK TABLES `my` WRITE;
/*!40000 ALTER TABLE `my` DISABLE KEYS */;
INSERT INTO `my` VALUES (30,'Nolan Stiedemann',762436814,'1984-03-17 08:59:29'),(31,'Mr. Isaiah Baumbach ',41784,'2007-09-23 02:14:11'),(32,'Idell Gerlach',888257,'1974-02-13 23:34:23'),(33,'Ozella Prohaska',271620320,'1976-07-07 07:43:57'),(34,'Prof. Deshawn Schoen',7,'2013-07-22 02:33:51'),(35,'Mr. Gunnar Buckridge',7555,'2019-02-20 12:43:10'),(36,'Zelma Altenwerth',53477,'1994-02-12 18:40:05'),(37,'Kimberly Koepp',1703,'2009-08-16 06:11:00'),(38,'Alexandrea Sipes MD',0,'1973-03-24 10:25:46'),(39,'Isabella Walker',6,'1988-07-21 00:56:12'),(40,'Bridgette Cassin',0,'2004-12-31 10:00:20'),(41,'Marc Johns',328013,'1974-07-07 21:53:26'),(42,'Mr. Allan Sawayn Sr.',92033,'2002-09-05 07:54:20'),(43,'Darryl Swift',0,'2020-09-14 22:20:47'),(44,'Franco Krajcik',3665907,'1973-12-14 14:14:45'),(45,'Dr. Rebeka McClure M',8538,'2012-04-03 21:16:32'),(46,'Cole Anderson',7,'2011-10-07 21:16:25'),(47,'Esther Yost',821808117,'2014-10-19 11:36:34'),(48,'Mr. Kennedy Parker I',9353,'2019-04-23 23:52:30'),(49,'Paris Wyman',55,'2018-05-16 12:22:24'),(50,'Ms. Malvina Graham I',425,'1976-04-26 19:46:58'),(51,'Alverta Lindgren',8,'1993-11-16 15:18:02'),(52,'Earnestine Conroy Sr',3654,'1986-08-27 22:27:23'),(53,'Ena Osinski III',359454,'2014-01-21 23:41:46'),(54,'Carmen Kulas',54564492,'2014-11-06 18:49:20'),(55,'Abigail Jacobson',7,'2004-06-05 03:59:35'),(56,'Marco Nolan',372386,'2013-05-10 20:42:10'),(57,'Prof. Alden Ward PhD',2628,'2019-11-27 06:27:26'),(58,'Cassie Hand',3952726,'2010-11-03 07:32:30'),(59,'Rossie Ledner',3139922,'2008-09-11 06:27:57'),(60,'Eino Schowalter',6416318,'2017-01-17 11:51:55'),(61,'Prof. Hubert Predovi',41352786,'1984-09-22 12:42:26'),(62,'Elmore Beer',90347,'2019-02-23 05:08:51'),(63,'Saul Marks',0,'2017-07-19 19:37:40'),(64,'Gracie Kub',63091,'2007-01-23 16:26:00'),(65,'Kelley Lubowitz',409,'1970-08-19 21:30:30'),(66,'Alfredo Lakin',221948864,'2015-10-04 02:21:20'),(67,'Kaylee McGlynn V',361,'1997-07-16 06:33:06'),(68,'Dr. Alysson Kulas Jr',93,'1996-05-13 08:57:41'),(69,'Niko Zulauf',1301457,'1992-07-04 00:19:46'),(70,'Dortha Schroeder',57124,'2018-03-12 19:47:56'),(71,'Nels Olson PhD',7667,'2013-05-04 22:26:00'),(72,'Prof. Hilbert Heiden',6492309,'2010-05-25 06:57:27'),(73,'Dr. Kurtis Watsica V',4281215,'2011-12-04 10:00:21'),(74,'Geo Nienow',594,'2010-01-16 01:03:14'),(75,'Betsy Hudson',95813020,'1977-05-08 07:54:03'),(76,'Alvina McDermott',19128,'2015-06-04 06:15:33'),(77,'Deonte McCullough',571428,'1993-12-21 20:15:40'),(78,'Manuel Grant',0,'2013-08-29 17:25:01'),(79,'Arely Kiehn',9308690,'2009-05-15 00:34:58'),(80,'Baby Farrell IV',77030,'1999-05-30 05:32:00'),(81,'Rossie Weimann',5,'2001-02-19 10:05:06'),(82,'Virginie Schmidt',67872743,'1985-02-23 03:32:42'),(83,'Carroll Rutherford D',58066303,'1999-07-11 07:05:17'),(84,'Hector Daniel',334,'1975-11-21 23:38:42'),(85,'Kyleigh Green',29,'2004-08-23 09:32:14'),(86,'Maiya Wolf',15333,'1983-08-26 05:30:50'),(87,'Prof. Khalil Langosh',8,'1998-10-02 20:27:55'),(88,'Karlie Lesch',696207,'1970-05-14 07:27:11'),(89,'Ashleigh Boehm',565564,'1998-08-11 00:14:01'),(90,'Mrs. Flavie Legros P',63,'2010-10-29 17:02:27'),(91,'Nikko Johns',607702280,'2021-10-09 21:45:44'),(92,'Vance Kemmer',71944545,'2008-07-13 21:40:22'),(93,'Mr. Billy Halvorson ',7055639,'1991-01-01 17:53:11'),(94,'Prof. Julianne Hartm',99034,'2001-03-01 13:38:12'),(95,'Mr. Edgardo Swift Jr',339801,'1976-01-10 22:37:27'),(96,'Mr. Dylan Hansen',9225,'1980-11-04 12:23:24'),(97,'Alessandro Kling',11,'2011-08-13 12:36:35'),(98,'Ms. Joanne Turner',65784,'2017-01-18 03:38:59'),(99,'Ms. Lavinia Connelly',63903,'1982-08-19 18:21:41'),(100,'Zetta Breitenberg',528,'2020-10-04 04:45:33'),(101,'Kaitlin Mitchell',327311432,'2010-01-19 22:10:05'),(102,'Audie Kuvalis MD',75567287,'1993-10-16 07:20:20'),(103,'Lilian Champlin',775,'1977-07-26 04:51:00'),(104,'Raoul Lowe',28151,'1986-12-17 03:15:46'),(105,'Dr. Ewell Torp',4280966,'2001-08-26 17:17:06'),(106,'Esta Parisian',93613129,'2017-03-20 13:34:02'),(107,'Lisette Kihn',67225,'1998-10-06 16:30:23'),(108,'Angelita Okuneva',9,'1976-11-14 06:36:25'),(109,'Zechariah Aufderhar ',339365,'2010-03-21 07:25:16'),(110,'Erik Reinger',984,'2004-09-24 14:56:01'),(111,'Francis Orn',236268,'2002-10-19 08:29:41'),(112,'Louie Koss',0,'2002-04-28 06:16:00'),(113,'Dr. Jettie Weimann I',11,'1973-12-13 00:28:28'),(114,'Monte Towne DDS',88,'1996-07-17 13:00:48'),(115,'Gerda Strosin',5933741,'2014-07-20 21:00:15'),(116,'Jesse Crist',13570632,'1994-09-09 03:29:47'),(117,'Eric Flatley',0,'2017-03-23 02:05:00'),(118,'Cory Bins',984047562,'1973-11-24 16:34:59'),(119,'Nayeli Kautzer V',951447058,'1993-09-09 08:01:52'),(120,'Christina DuBuque',0,'1996-06-12 00:39:20'),(121,'Annalise Ullrich',72422931,'1991-10-17 16:36:58'),(122,'Katherine McDermott',2893983,'2011-02-12 19:29:08'),(123,'Keven Sauer',8,'2017-09-02 11:12:44'),(124,'Mrs. Dayna Daugherty',600367,'1972-07-02 02:41:38'),(125,'Roosevelt Wunsch',21803610,'2001-01-28 15:38:19'),(126,'Demetrius Gutkowski ',137822,'2002-09-12 01:43:50'),(127,'David Heaney DDS',178489974,'1978-09-30 05:51:44'),(128,'Maximillia McKenzie',187170053,'1974-11-26 20:00:11'),(129,'Dr. Katelyn Funk Sr.',52,'2016-07-28 23:28:50');
/*!40000 ALTER TABLE `my` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-02  7:24:25

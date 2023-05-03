-- MySQL dump 10.13  Distrib 8.0.33, for macos13 (arm64)
--
-- Host: 127.0.0.1    Database: donkey_event
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Moussa','1234','amdin@event.com'),(2,'Aurélien','1234','admin@event.com'),(3,'Kuba','1234','admin@event.com'),(4,'Jean','0000',NULL),(5,'Jean','0000',NULL),(6,'Jean','0000',NULL),(7,'Jean','0000',NULL),(8,'Jean','0000',NULL),(9,'Jean','0000',NULL),(10,'Jean','0000',NULL),(11,'Jean','0000',NULL),(12,'Jean','0000',NULL),(13,'Jean','0000',NULL),(14,'Jean','0000',NULL),(15,'Jean','0000',NULL),(16,'Jean','0000',NULL),(17,'Jean','0000',NULL),(18,'Jean','0000',NULL),(19,'Jean','0000',NULL),(20,'Jean','0000',NULL),(21,'Jean','0000',NULL),(22,'Jean','0000',NULL),(23,'Jean','0000',NULL),(24,'Jean','0000',NULL),(25,'Jean','0000',NULL),(26,'Jean','0000',NULL),(27,'Jean','0000',NULL),(28,'Jean','0000',NULL),(29,'Jean','0000',NULL),(30,'Jean','0000',NULL),(31,'Jean','0000',NULL),(32,'Jean','0000',NULL),(33,'Jean','0000',NULL),(34,'Jean','0000',NULL),(35,'Jean','0000',NULL),(36,'Jean','0000',NULL),(37,'Jean','0000',NULL),(38,'Jean','0000',NULL),(39,'Jean','0000',NULL),(40,'Jean','0000',NULL),(41,'Jean','0000',NULL),(42,'Jean','0000',NULL),(43,'Jean','0000',NULL),(44,'Jean','0000',NULL),(45,'Jean','0000',NULL),(46,'Jean','0000',NULL),(47,'Jean','0000',NULL),(48,'Jean','0000',NULL),(49,'Jean','0000',NULL),(50,'Jean','0000',NULL),(51,'Jean','0000',NULL),(52,'Jean','0000',NULL),(53,'Jean','0000',NULL),(54,'Jean','0000',NULL),(55,'Jean','0000',NULL),(56,'Jean','0000',NULL),(57,'Jean','0000',NULL),(58,'Jean','0000',NULL),(59,'Jean','0000',NULL),(60,'Jean','0000',NULL),(61,'Jean','0000',NULL),(62,'Jean','0000',NULL),(63,'Jean','0000',NULL),(64,'Jean','0000',NULL),(65,'Jean','0000',NULL),(66,'Jean','0000',NULL),(67,'Jean','0000',NULL),(68,'Jean','0000',NULL),(69,'Jean','0000',NULL),(70,'Jean','0000',NULL),(71,'Jean','0000',NULL),(72,'Jean','0000',NULL),(73,'Jean','0000',NULL),(74,'Jean','0000',NULL),(75,'Jean','0000',NULL),(76,'Jean','0000',NULL),(77,'Jean','0000',NULL),(78,'Jean','0000',NULL),(79,'Jean','0000',NULL),(80,'Jean','0000',NULL),(81,'Jean','0000',NULL),(82,'Jean','0000',NULL),(83,'Jean','0000',NULL),(84,'Jean','0000',NULL),(85,'Jean','0000',NULL),(86,'Jean','0000',NULL),(87,'Jean','0000',NULL),(88,'Jean','0000',NULL),(89,'Jean','0000',NULL),(90,'Jean','0000',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-03 16:11:00

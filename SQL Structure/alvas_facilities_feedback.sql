-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: alvas
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `facilities_feedback`
--

DROP TABLE IF EXISTS `facilities_feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facilities_feedback` (
  `fdbk_id` int NOT NULL AUTO_INCREMENT,
  `s_id` varchar(6) DEFAULT NULL,
  `q1` int DEFAULT NULL,
  `q2` int DEFAULT NULL,
  `q3` int DEFAULT NULL,
  `q4` int DEFAULT NULL,
  `q5` int DEFAULT NULL,
  `q6` int DEFAULT NULL,
  `q7` int DEFAULT NULL,
  `q8` int DEFAULT NULL,
  `q9` int DEFAULT NULL,
  `q10` int DEFAULT NULL,
  `q11` int DEFAULT NULL,
  `q12` int DEFAULT NULL,
  `q13` int DEFAULT NULL,
  `q14` int DEFAULT NULL,
  `q15` int DEFAULT NULL,
  `q16` int DEFAULT NULL,
  `q17` int DEFAULT NULL,
  `cmnt` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`fdbk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facilities_feedback`
--

LOCK TABLES `facilities_feedback` WRITE;
/*!40000 ALTER TABLE `facilities_feedback` DISABLE KEYS */;
INSERT INTO `facilities_feedback` VALUES (11,'S101',4,2,3,3,5,2,1,1,5,4,5,3,4,2,1,1,5,'No Comments.'),(12,'S101',2,1,3,4,5,1,5,3,4,2,1,4,3,1,2,1,1,'Quibusdam culpa prov'),(13,'S101',5,3,2,2,1,3,1,2,5,1,4,4,2,2,4,3,5,'Quos quis eu dolor a'),(14,'S101',3,4,4,5,5,3,4,5,2,5,4,5,1,5,5,2,4,'Sit quia earum ipsu'),(15,'S101',3,2,1,3,4,2,5,4,4,1,2,5,2,5,1,3,1,'Nulla esse ipsa in'),(16,'S101',1,4,1,2,2,1,1,4,5,3,5,5,2,4,3,1,1,'Autem harum quia in '),(17,'S101',2,2,3,4,5,4,3,4,3,4,1,5,2,2,4,1,4,'Voluptates nesciunt'),(18,'S101',1,2,1,3,2,1,1,5,2,2,5,5,2,2,3,3,5,'Numquam porro unde e'),(19,'S101',3,5,3,4,5,2,1,3,1,1,2,5,1,3,4,4,5,'Omnis asperiores aut');
/*!40000 ALTER TABLE `facilities_feedback` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-02 11:11:55

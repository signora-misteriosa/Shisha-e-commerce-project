-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: shisha
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `atribute_produse`
--

DROP TABLE IF EXISTS `atribute_produse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `atribute_produse` (
  `id_atribut` int NOT NULL AUTO_INCREMENT,
  `id_produs` int NOT NULL,
  `culoare` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_atribut`),
  KEY `id_produs` (`id_produs`),
  CONSTRAINT `atribute_produse_ibfk_1` FOREIGN KEY (`id_produs`) REFERENCES `produs` (`id_p`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atribute_produse`
--

LOCK TABLES `atribute_produse` WRITE;
/*!40000 ALTER TABLE `atribute_produse` DISABLE KEYS */;
/*!40000 ALTER TABLE `atribute_produse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_produse`
--

DROP TABLE IF EXISTS `com_produse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `com_produse` (
  `id_c_p` int NOT NULL AUTO_INCREMENT,
  `id_comanda` int NOT NULL,
  `id_produs` int NOT NULL,
  PRIMARY KEY (`id_c_p`),
  KEY `id_comanda` (`id_comanda`),
  KEY `id_produs` (`id_produs`),
  CONSTRAINT `com_produse_ibfk_1` FOREIGN KEY (`id_produs`) REFERENCES `produs` (`id_p`),
  CONSTRAINT `com_produse_ibfk_2` FOREIGN KEY (`id_comanda`) REFERENCES `comenzi` (`id_c`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_produse`
--

LOCK TABLES `com_produse` WRITE;
/*!40000 ALTER TABLE `com_produse` DISABLE KEYS */;
INSERT INTO `com_produse` VALUES (1,1,2);
/*!40000 ALTER TABLE `com_produse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comenzi`
--

DROP TABLE IF EXISTS `comenzi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comenzi` (
  `id_c` int NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `id_user` int NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_c`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `comenzi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comenzi`
--

LOCK TABLES `comenzi` WRITE;
/*!40000 ALTER TABLE `comenzi` DISABLE KEYS */;
INSERT INTO `comenzi` VALUES (1,'2024-05-07',1,'livrată');
/*!40000 ALTER TABLE `comenzi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `comenzi_produse`
--

DROP TABLE IF EXISTS `comenzi_produse`;
/*!50001 DROP VIEW IF EXISTS `comenzi_produse`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `comenzi_produse` AS SELECT 
 1 AS `id_c`,
 1 AS `data`,
 1 AS `id_user`,
 1 AS `status`,
 1 AS `id_produs`,
 1 AS `denumire_prod`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `imagini_produs`
--

DROP TABLE IF EXISTS `imagini_produs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `imagini_produs` (
  `id_img_p` int NOT NULL AUTO_INCREMENT,
  `id_produs` int NOT NULL,
  `fisier` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `main` int NOT NULL,
  PRIMARY KEY (`id_img_p`),
  KEY `id_p` (`id_produs`),
  CONSTRAINT `imagini_produs_ibfk_1` FOREIGN KEY (`id_produs`) REFERENCES `produs` (`id_p`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagini_produs`
--

LOCK TABLES `imagini_produs` WRITE;
/*!40000 ALTER TABLE `imagini_produs` DISABLE KEYS */;
INSERT INTO `imagini_produs` VALUES (1,1,'5.png',1),(2,1,'p10.png',0),(3,1,'p11.png',0),(4,1,'p12.png',0),(5,1,'p13.png',0),(6,1,'p14.png',0);
/*!40000 ALTER TABLE `imagini_produs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produs`
--

DROP TABLE IF EXISTS `produs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produs` (
  `id_p` int NOT NULL AUTO_INCREMENT,
  `denumire_prod` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `descriere` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pret` int NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produs`
--

LOCK TABLES `produs` WRITE;
/*!40000 ALTER TABLE `produs` DISABLE KEYS */;
INSERT INTO `produs` VALUES (1,'Geantă de umăr Le Chiquito Noeud','New Season',1005),(2,'Geantă de umăr Le Bambinou','New Season',1816),(3,'Geantă de umăr Le GrandChiquito','New Season',1576),(4,'Geantă tote din piele LeBambinou','New Season',1450),(5,'Geantă crossbody din piele','Exclusive',1160),(6,'Geantă tote Le Chiquito\r\n\r\n','Exclusive',989),(7,'Geanta Trifolio cu mâner superior','Final Sale',1754),(8,'Geantă tote Le Chiquito','Final Sale',989);
/*!40000 ALTER TABLE `produs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Metro Boomin','boomin@gmail.com','$2y$10$urCFcKVKcV/Bw89CUYOSm.BF/MuFaLcpKjXHUK98Pj2/VI36R9V52'),(2,'Jorja Smith','smith@gmail.com','$2y$10$aSwiLHE0cPfEgvnSHY9OMOwnSV8uTFLIxk3/9kNwWmkngYsSF5BAq');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `comenzi_produse`
--

/*!50001 DROP VIEW IF EXISTS `comenzi_produse`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `comenzi_produse` AS select `c`.`id_c` AS `id_c`,`c`.`data` AS `data`,`c`.`id_user` AS `id_user`,`c`.`status` AS `status`,`cp`.`id_produs` AS `id_produs`,`p`.`denumire_prod` AS `denumire_prod` from ((`comenzi` `c` join `com_produse` `cp` on((`c`.`id_c` = `cp`.`id_comanda`))) join `produs` `p` on((`cp`.`id_produs` = `p`.`id_p`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-01 19:32:59

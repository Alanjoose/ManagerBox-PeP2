-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: ManagerBox
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

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
-- Table structure for table `ALVO`
--

DROP TABLE IF EXISTS `ALVO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ALVO` (
  `ID_COD` int NOT NULL AUTO_INCREMENT,
  `GENERO` varchar(1) NOT NULL,
  `ETARIA` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_COD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ALVO`
--

LOCK TABLES `ALVO` WRITE;
/*!40000 ALTER TABLE `ALVO` DISABLE KEYS */;
/*!40000 ALTER TABLE `ALVO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FUNCIONARIO`
--

DROP TABLE IF EXISTS `FUNCIONARIO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `FUNCIONARIO` (
  `ID_COD` int NOT NULL AUTO_INCREMENT,
  `CPF` int unsigned NOT NULL,
  `NOME` varchar(45) NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  `SENHA` varchar(45) NOT NULL,
  `NIVEL` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_COD`),
  UNIQUE KEY `EMAIL_UNIQUE` (`EMAIL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FUNCIONARIO`
--

LOCK TABLES `FUNCIONARIO` WRITE;
/*!40000 ALTER TABLE `FUNCIONARIO` DISABLE KEYS */;
/*!40000 ALTER TABLE `FUNCIONARIO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ITENS`
--

DROP TABLE IF EXISTS `ITENS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ITENS` (
  `ID_COD` int NOT NULL AUTO_INCREMENT,
  `TAMANHO` varchar(1) NOT NULL,
  `DESCRICAO` varchar(45) NOT NULL,
  `COR` varchar(45) NOT NULL,
  `NUMERACAO` float NOT NULL,
  `VALOR` float NOT NULL,
  `MARCA` int NOT NULL,
  `ALVO` int NOT NULL,
  `REGISTRO` int DEFAULT NULL,
  `MODELO` int NOT NULL,
  `FUN_REGISTRO` int NOT NULL,
  PRIMARY KEY (`ID_COD`),
  KEY `MARCA_idx` (`MARCA`),
  KEY `ALVO_idx` (`ALVO`),
  KEY `REGISTRO_idx` (`REGISTRO`),
  KEY `MODELO_idx` (`MODELO`),
  KEY `FUN_REGISTRO_idx` (`FUN_REGISTRO`),
  CONSTRAINT `ALVO` FOREIGN KEY (`ALVO`) REFERENCES `ALVO` (`ID_COD`),
  CONSTRAINT `FUN_REGISTRO` FOREIGN KEY (`FUN_REGISTRO`) REFERENCES `FUNCIONARIO` (`ID_COD`),
  CONSTRAINT `MARCA` FOREIGN KEY (`MARCA`) REFERENCES `MARCA` (`ID_COD`),
  CONSTRAINT `MODELO` FOREIGN KEY (`MODELO`) REFERENCES `MODELO` (`ID_COD`),
  CONSTRAINT `REGISTRO` FOREIGN KEY (`REGISTRO`) REFERENCES `REGISTRO` (`ID_COD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ITENS`
--

LOCK TABLES `ITENS` WRITE;
/*!40000 ALTER TABLE `ITENS` DISABLE KEYS */;
/*!40000 ALTER TABLE `ITENS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MARCA`
--

DROP TABLE IF EXISTS `MARCA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `MARCA` (
  `ID_COD` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_COD`),
  UNIQUE KEY `NOME_UNIQUE` (`NOME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MARCA`
--

LOCK TABLES `MARCA` WRITE;
/*!40000 ALTER TABLE `MARCA` DISABLE KEYS */;
/*!40000 ALTER TABLE `MARCA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MODELO`
--

DROP TABLE IF EXISTS `MODELO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `MODELO` (
  `ID_COD` int NOT NULL AUTO_INCREMENT,
  `ESPORTIVO` tinyint DEFAULT NULL,
  `CASUAL` tinyint DEFAULT NULL,
  PRIMARY KEY (`ID_COD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MODELO`
--

LOCK TABLES `MODELO` WRITE;
/*!40000 ALTER TABLE `MODELO` DISABLE KEYS */;
/*!40000 ALTER TABLE `MODELO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `REGISTRO`
--

DROP TABLE IF EXISTS `REGISTRO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `REGISTRO` (
  `ID_COD` int NOT NULL AUTO_INCREMENT,
  `TEMPO` datetime NOT NULL,
  `QUANTIDADE` int DEFAULT NULL,
  `ADICAO` int DEFAULT NULL,
  PRIMARY KEY (`ID_COD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `REGISTRO`
--

LOCK TABLES `REGISTRO` WRITE;
/*!40000 ALTER TABLE `REGISTRO` DISABLE KEYS */;
/*!40000 ALTER TABLE `REGISTRO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'ManagerBox'
--

--
-- Dumping routines for database 'ManagerBox'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-06 22:00:54
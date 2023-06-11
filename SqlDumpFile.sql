-- MySQL dump 10.13  Distrib 8.0.32, for macos12.6 (x86_64)
--
-- Host: localhost    Database: Players
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Bank_History`
--

DROP TABLE IF EXISTS `Bank_History`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Bank_History` (
  `Sender` varchar(255) DEFAULT NULL,
  `Reciever` varchar(255) DEFAULT NULL,
  `Amount` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Bank_History`
--

LOCK TABLES `Bank_History` WRITE;
/*!40000 ALTER TABLE `Bank_History` DISABLE KEYS */;
INSERT INTO `Bank_History` VALUES ('Sussy Baka','Yellow',69420),('Jamison Fawkes','Mako Rutledge',69420),('Mako Rutledge','Jamison Fawkes',69420),('Jamison Fawkes','Mako Rutledge',1);
/*!40000 ALTER TABLE `Bank_History` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Character_Info`
--

DROP TABLE IF EXISTS `Character_Info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Character_Info` (
  `RealName` varchar(255) DEFAULT NULL,
  `InGameName` varchar(255) DEFAULT NULL,
  `Age` int DEFAULT NULL,
  `Pronouns` varchar(255) DEFAULT NULL,
  `Skills` varchar(255) DEFAULT NULL,
  `JobTitle` varchar(255) DEFAULT NULL,
  `Description` varchar(5000) DEFAULT NULL,
  `Secret` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Character_Info`
--

LOCK TABLES `Character_Info` WRITE;
/*!40000 ALTER TABLE `Character_Info` DISABLE KEYS */;
INSERT INTO `Character_Info` VALUES ('Konsta Makinen','Jamison Fawkes',32,'He/Him','Explosives, Mayhem','Mastermind','A real madlad always looking for something to blow up','Gay'),('Alex Eteläniemi','Mako Rutledge',31,'He/Him','Bodyguarding, Crime','Bodyguard','Homo','Gay'),('Sussy imposter','Sussy Baka',69,'I/Me/Myself','Murder, being sussy','Imposter','Congrats you found the easter egg, good luck logging into the sussy baka account though. Only true gamers, know the konami code','Is the imposter lol');
/*!40000 ALTER TABLE `Character_Info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Disabled_Systems`
--

DROP TABLE IF EXISTS `Disabled_Systems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Disabled_Systems` (
  `SystemName` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Disabled_Systems`
--

LOCK TABLES `Disabled_Systems` WRITE;
/*!40000 ALTER TABLE `Disabled_Systems` DISABLE KEYS */;
INSERT INTO `Disabled_Systems` VALUES ('Notepad','disabled');
/*!40000 ALTER TABLE `Disabled_Systems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Messages`
--

DROP TABLE IF EXISTS `Messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Messages` (
  `message` varchar(255) DEFAULT NULL,
  `sender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Messages`
--

LOCK TABLES `Messages` WRITE;
/*!40000 ALTER TABLE `Messages` DISABLE KEYS */;
INSERT INTO `Messages` VALUES ('Hello world!','Jamison Fawkes'),('adad','Jamison Fawkes'),('adad','Jamison Fawkes'),('Äitis on homo','Jamison Fawkes'),('adad','Jamison Fawkes'),('adad','Jamison Fawkes'),('adad','Jamison Fawkes'),('Homoja','Jamison Fawkes'),('Mök','Jamison Fawkes'),('Moi','Jamison Fawkes'),('Homo','Jamison Fawkes'),('adad','Jamison Fawkes'),('adad','Mako Rutledge'),('adad','Jamison Fawkes'),('ugigighghghgvh','Jamison Fawkes');
/*!40000 ALTER TABLE `Messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Notes`
--

DROP TABLE IF EXISTS `Notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Notes` (
  `owner` varchar(255) DEFAULT NULL,
  `note` varchar(9999) DEFAULT NULL,
  `timestamp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Notes`
--

LOCK TABLES `Notes` WRITE;
/*!40000 ALTER TABLE `Notes` DISABLE KEYS */;
INSERT INTO `Notes` VALUES ('Jamison Fawkes','adad','5.8.347'),('Jamison Fawkes','ahjajkafsjkdgkldfgklfhlfh','5.8.347'),('Jamison Fawkes','Alexin hahmo teki hassun jutun','5.8.347'),('Jamison Fawkes','Moi','5.8.347'),('Jamison Fawkes','Ksjdkdudkdk','5.8.347'),('Jamison Fawkes','Moi','5.8.347'),('Sussy Baka','So you got all the way here huh? Damn, i guess you thought youd get money or something?','5.8.347'),('Sussy Baka','Nah, i dont think so, this account is broke af lol','5.8.347'),('Sussy Baka','I think its time you get back to what you were doing.','5.8.347'),('Sussy Baka','Now go and save that poor scientist will ye?','5.8.347'),('Sussy Baka','You can go now...','5.8.347'),('Sussy Baka','Bye!','5.8.347'),('Sussy Baka','Why are you reading this still?','5.8.347'),('Sussy Baka','Seriously, just go','5.8.347');
/*!40000 ALTER TABLE `Notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Player_Data`
--

DROP TABLE IF EXISTS `Player_Data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Player_Data` (
  `RealName` varchar(255) DEFAULT NULL,
  `InGameName` varchar(255) DEFAULT NULL,
  `InGamePassword` varchar(255) DEFAULT NULL,
  `Credits` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Player_Data`
--

LOCK TABLES `Player_Data` WRITE;
/*!40000 ALTER TABLE `Player_Data` DISABLE KEYS */;
INSERT INTO `Player_Data` VALUES ('Konsta Makinen','Jamison Fawkes','1234',1029),('Alex Eteläniemi','Mako Rutledge','4321',471),('Easter Egg','Sussy Baka','upupdowndownleftrightleftrightba',1);
/*!40000 ALTER TABLE `Player_Data` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-11 16:20:13
